@extends('layouts.header')
@section('link')
    <link rel="stylesheet" type="text/css" href="/assets/js/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="/assets/js/bootstrap-daterangepicker/daterangepicker.css" />
@endsection
@section('content')
    <section id="main-content">
        <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i>添加项目</h3>
            <!-- BASIC FORM ELELEMNTS -->
            <div class="row mt">
                <div class="col-lg-12">
                    <div class="form-panel">
                        <h4 class="mb"><i class="fa fa-angle-right"></i> 新项目</h4>
                        <form class="form-horizontal style-form" action="/home/add"  method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">项目名称</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name" name="name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">项目介绍</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="content" name="content">
                                    <span class="help-block">请输入不少于10个字符的项目介绍</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label" id="github">GitHub项目地址</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="github">
                                    <span class="help-block">可为空</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">开发者 ID</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="disabledInput" type="text" name="user_id" placeholder="{{Auth::user()->id}}" disabled>
                                    <span class="help-block">添加更多开发者请前往项目设置</span>
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