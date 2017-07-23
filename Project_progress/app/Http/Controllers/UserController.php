<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //更改页面
    public function index(){
        return view('home.user');
    }
    //更改逻辑
    public function user(){

    }
}
