<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use Illuminate\Support\Facades\Auth;
use App\Progress;

class ProgressController extends Controller
{
    //添加进度页面
    public function index(){
        $user_id=Auth::id();
        $project = Project::where('user_id',$user_id)->get();
        return view('home.progress',compact('project'));
    }
    //添加进度逻辑
    public function add(Request $request){
        //获取项目ID
        $id=$request->project;
        //获取user_id
        $user_id=Auth::id();
        //验证
        $this->validate($request,[
        'title'=>'min:3|max:50|required|Unique:project,name',
        'content'=>'min:5|max:1000|required'
        ]);
        //逻辑
        $progress= new Progress();
        $progress->title = request('title');
        $progress->content = request('content');
        $progress->user_id = $user_id;
        $progress->project_id = $id;
        $progress->save();
        //渲染
        return redirect('/home');

    }
    //进度列表
    public function show(){
        $user_id=Auth::id();
        $progress = Progress::where('user_id',$user_id)->get();
        return view('home.showprogress',compact('progress'));
    }
    //编辑进度页面
    public function edit(Request $request){
        $progress = Progress::find($request->progress);
        return view('home.progressedit',compact('progress'));
    }
    //编辑进度逻辑
    public function update(Request $request){
        //获取进度id
        $id = $request->progress;
        //验证
        $this->validate($request,[
            'title'=>'min:3|max:50|required|Unique:progress,name',
            'content'=>'min:5|max:1000|required'
        ]);
        //逻辑
        $progress = Progress::find($id);
        $progress-> title = request('title');
        $progress-> content = request('content');
        $progress->save();
        //渲染
        return redirect('/home/project/show');
    }
}
