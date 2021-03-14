<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuxController extends Controller
{
    public function to_dashboard(){
        return view("dashboard");
    }
    public function to_register(){
        return view("procesess.register");
    }
    public function to_login(){
        return view("procesess.login");
    }
}
