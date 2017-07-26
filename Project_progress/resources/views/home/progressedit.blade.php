@extends('layouts.header')
@section('link')
    <link rel="stylesheet" type="text/css" href="/assets/js/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="/assets/js/bootstrap-daterangepicker/daterangepicker.css" />
@endsection
@section('content')
    <section id="main-content">
        <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i>编辑进度</h3>
            <!-- BASIC FORM ELELEMNTS -->
            <div class="row mt">
                <div class="col-lg-12">
                    <div class="form-panel">
                        <h4 class="mb"><i class="fa fa-angle-right"></i>{{$progress->title}}</h4>
                        <form class="form-horizontal style-form" action="/home/project/{{$progress->id}}/edit"  method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">进度名称</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="title" name="title" value="{{$progress->title}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">进度介绍</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="content" name="content" value="{{$progress->content}}">
                                    <span class="help-block">请输入不少于5个字符的项目介绍</span>
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