<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AccountController extends Controller
{
    public function login(Request $request){

        $url_api = "http://45.90.220.144:1403/api/v1/auth/login/candidate";

        $response = Http::post($url_api, [
            'email' => 'minhnhat14712@gmail.com',
            'password' => 'nhatma',
        ]);

        $status_code = $response->status();

        if ($status_code == 200) {

            $result = $response->body();

            $data = json_decode($result);

            if ($data->data->accessToken) {

                session()->put('access_token', $data->data->accessToken);
                session()->put('user', $request->email);

               
            } else {

                
            }
        } elseif ($status_code == 403) {

            
        } else {

         
        }
    }
}
