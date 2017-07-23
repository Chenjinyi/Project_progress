<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //首页页面
    public function index(){
        return view('index');
    }
}
