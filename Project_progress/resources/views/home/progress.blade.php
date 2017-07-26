@extends('layouts.header')
@section('link')
    <link rel="stylesheet" type="text/css" href="/assets/js/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="/assets/js/bootstrap-daterangepicker/daterangepicker.css" />
@endsection
@section('content')
    <section id="main-content">
        <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i>添加进度</h3>
            <!-- BASIC FORM ELELEMNTS -->
            <div class="row mt">
                <div class="col-lg-12">
                    <div class="form-panel">
                        <h4 class="mb"><i class="fa fa-angle-right">添加项目开发进度</i></h4>
                        <form class="form-horizontal style-form" action="/home/project/add"  method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">项目名称</label>
                                <div class="col-sm-10">
                                    <select id="project" name="project" class="form-control">
                                        @foreach($project as $val)
                                            <option value="{{$val->id}}">{{$val->name}}</option>
                                        @endforeach
                                    </select>
                                    <span class="help-block">请选择你要添加进度等等项目</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">进度名称</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="title" name="title">
                                    <span class="help-block">请输入这次的更新内容</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">进度简介</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="content" name="content">
                                    <span class="help-block">请输入不少于5个字符的项目更新介绍</span>
                                </div>
                            </div>
                            @include('layouts.msg')
                            <input type="submit" class="btn btn-theme">
                        </form>
                    </div>
                </div><!-- col-lg-12-->
            </div><!-- /row -->
        </section><! --/wrapper -->
    </section><!-- /MAIN CONTENT -->
@endsection
@section('script')
@endsection