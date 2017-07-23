@extends('layouts.header')
@section('link')
    <link rel="stylesheet" type="text/css" href="/assets/js/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="/assets/js/bootstrap-daterangepicker/daterangepicker.css" />
@endsection
@section('content')
    <section id="main-content">
        <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i>个人信息</h3>
            <!-- BASIC FORM ELELEMNTS -->
            <div class="row mt">
                <div class="col-lg-12">
                    <div class="form-panel">
                        <h4 class="mb"><i class="fa fa-angle-right"></i>{{Auth::user()->name}}</h4>
                        <form class="form-horizontal style-form" action="/home/user"  method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">ID</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="disabledInput" type="text" placeholder="{{Auth::user()->id}}" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Email</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="disabledInput" type="text" placeholder="{{Auth::user()->email}}" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">用户名</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name" value="{{Auth::user()->name}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">手机</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="content" value="{{Auth::user()->phone}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label" id="git">密码</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control">
                                    <span class="help-block">不更改密码则留空</span>
                                </div>
                            </div>
                            <input type="submit" class="btn btn-theme">
                        </form>
                    </div>
                </div><!-- col-lg-12-->
            </div><!-- /row -->
        </section><! --/wrapper -->
    </section><!-- /MAIN CONTENT -->
@endsection