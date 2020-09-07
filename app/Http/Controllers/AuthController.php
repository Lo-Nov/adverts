<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{

    public function adAuth(Request $request){
        $url = config('global.auth').'Account/GetToken';
        $data = [
            'user_name' => $request->user_name,
            'password' => $request->password
        ];

        //dd($data);
        $response = Http::post($url, $data);
        //dd($response);

        $authenticated = json_decode($response->body());
        //dd($authenticated->should_change_password);

        if (is_null($authenticated)) {
            return redirect()->back()->withErrors('An error occured. Please try again.');
        }

        if ($authenticated->status_code != 200) {
            return redirect()->back()->withErrors($authenticated->message);
        }
        if ($authenticated->should_change_password === true) {

            // redirect to change password
        }
        if ($authenticated->roles === "ADVERTADMIN") {
            $auth_session = collect([
                'logged_in' => 1,
                'token' => $authenticated->token,
                'roles' => $authenticated->roles,
                'user_id' => $authenticated->user_id,
                'username' => $authenticated->username,
                'email' => $authenticated->email,
                'national_id' => $authenticated->national_id,
                'user_full_name' => $authenticated->user_full_name,
                'phone_number' => $authenticated->msisdn,
            ]);

            //dd($auth_session);
            Session::flush();
            Session::push('auth_session', $auth_session);
            return redirect()->route('main');
        }else{
            return redirect()->back()->withErrors($authenticated->message);
        }
    }
}
