<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('account/index');

    }
    public function orders(){
        return view('account/orders');

    }
    public function changePassword(){
        return view('account/change-password');

    }
}
