@extends('layouts.header')
@section('content')
    <section id="main-content">
        <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i> 项目列表</h3>
            <div class="row mt">
                <div class="col-md-12">
                    <div class="content-panel">
                        <table class="table table-striped table-advance table-hover">
                            <h4><i class="fa fa-angle-right"></i> 已存在的进度</h4>
                            <hr>
                            <thead>
                            <tr>
                                <th><i class="fa fa-bullhorn"></i>所属项目</th>
                                <th><i class="fa fa-bookmark"></i>进度名称</th>
                                <th class="hidden-phone"><i class="fa fa-question-circle"></i> 进度简介</th>
                                <th><i class="fa fa-bookmark"></i>创建日期</th>
                                <th><i class=" fa fa-edit"></i> 项目状态</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($progress as $val)
                                <tr>
                                    <td>
                                        <a href="/project/{{$val->id}}">
                                            {{$val->project->name}}
                                        </a>
                                    </td>
                                    <td>{{$val->title}}</td>
                                    <td class="hidden-phone">{{$val->content}}</td>
                                    <td>{{$val->created_at}}</td>
                                    @if($val->status=='1')
                                        <td><span class="label label-success label-mini">正常</span></td>
                                    @else
                                        <td><span class="label label-warning label-mini">异常</span></td>
                                    @endif
                                    <td>
                                        <a href="/home/project/{{$val->id}}/edit" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                        <a href="/home/edit/{{$val->id}}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div><!-- /content-panel -->
                </div><!-- /col-md-12 -->
            </div><!-- /row -->
        </section><! --/wrapper -->
    </section><!-- /MAIN CONTENT -->
@endsection