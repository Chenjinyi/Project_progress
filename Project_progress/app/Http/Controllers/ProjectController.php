<?php

namespace App\Http\Controllers;

use App\Progress;
use Illuminate\Http\Request;
use \App\Project;
use \App\User;
use Illuminate\Support\Facades\Auth;

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
        ]);
        //获取User_id
        $user_id=\Auth::id();
        //逻辑
    $project = new Project();
    $project-> name = request('name');
    $project-> content = request('content');
    $project-> github = request('github');
    $project-> user_id = $user_id;
    $project->save();
        //渲染
        return redirect('/home/show');
    }

    //项目列表
    public function show(  ){
        //获取登录用户id
        $user_id= Auth::id();
        //根据id查找用户创建项目
       $project = Project::where('user_id',$user_id)->get();
        return view('home.show',compact('project'));
    }
    //项目展示页面
    public function project(Request $request){
        //获取项目id
        $id=$request->posts;
        //根据id查找项目
        $project = Project::find($id);
        //查找进度
        $progress = Progress::where('project_id',$id)->get();
        return view('project',compact('project','progress'));
    }
    //项目编辑页面
    public function edit(Request $request){
        //获得项目id
        $id=$request->project;
        $project = Project::find($id);
        return view('home.edit',compact('project'));
    }
//项目编辑逻辑
    public function update(Request $request,Project $posts){
        //获取编辑id
        $id= $request->project;
        //验证
        $this->validate($request,[
            'name'=>'min:3|max:50|required|Unique:project,name',
            'content'=>'min:10|max:1000|required',
    ]);
        //逻辑
        $project = Project::find($id);
        $project-> name = request('name');
        $project-> content = request('content');
        $project-> github = request('github');
        $project->save();
        //渲染
        return redirect('/home/show');
    }
}
