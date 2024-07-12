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

            dd($result);
            $result = json_decode($result);

            if ($result->accessToken) {

                session()->put('access_token', $result->accessToken);
                session()->put('phone', $request->phone);

               
            } else {

                
            }
        } elseif ($status_code == 403) {

            
        } else {

         
        }
    }
}
