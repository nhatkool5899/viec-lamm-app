<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AccountController extends Controller
{
    public function login(Request $request){

        $url_api = "http://45.90.220.144:1403/api/v1/auth/login/candidate";

        $response = Http::post($url_api, [
            'email' => $request->email,
            'password' => $request->password,
        ]);

        $status_code = $response->status();

        if ($status_code == 200) {

            $result = $response->body();
            $result = json_decode($result);

            if ($result->accessToken) {

                session()->put('access_token', $result->accessToken);
                session()->put('phone', $request->phone);

                if ($request->session()->has('previousUrl')) {
                    $previousUrl = $request->session()->pull('previousUrl');
                    return Redirect::to($previousUrl);
                } else {
                    return redirect()->intended('/trang-chu');
                }
                // return redirect('/trang-chu');
            } else {

                return redirect()->back()->with('error', 'Hệ thống đang bảo trì, vui lòng quay lại sau');
            }
        } elseif ($status_code == 403) {

            return redirect()->back()->with('error', $response->body());
        } else {

            return redirect()->back()->with('error', 'Hệ thống đang bảo trì, vui lòng quay lại sau');
        }
    }
}
