<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\project;

class ProjectController extends Controller
{//添加项目页面
    public function index(){
        return view('home.add');
    }
    //添加项目逻辑
    public function add(Request $request){

        //验证
        $this->validate($request,[
            'name'=>'min:3|max:50|required|Unique:project,name',
            'content'=>'min:10|max:1000|required',
            'git'=>'Unique:project,git'
        ]);
        //获取User_id
        $user_id=\Auth::id();

        $params = array_merge(
            request(['name','centent','git','Developer']),
            ['user_id'=>$user_id]);
        project::create('$params');
        //渲染
        return redirect('/home');
    }

    //项目列表
    public function show(   ){
        return view('home.show');
    }
}
