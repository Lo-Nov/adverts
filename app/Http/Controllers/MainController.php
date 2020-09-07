<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MainController extends Controller
{
    public function index(){
        if (Session::get('auth_session')[0]['logged_in'] != 1) {
            Session::put('url', url()->current());
            return redirect()->route('login');
        } else {
        return view('home');
        }
    }
}
