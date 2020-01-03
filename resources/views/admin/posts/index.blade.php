@extends('admin.layouts.master')

@section('title', '管理員')

@section('content')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            管理員管理 <small>所有管理員名單</small>
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-edit"></i> 管理員管理
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->

<div class="row" style="margin-bottom: 20px; text-align: right">
    <div class="col-lg-12">
        <a href="{{ route('admin.posts.create') }}" class="btn btn-success">建立新管理員</a>
    </div>
</div>
<!-- /.row -->

<div class="row">
    <div class="col-lg-12">
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th width="70" style="text-align: center">編號</th>
                        <th width="70" style="text-align: center">姓名</th>
                        <th width="70" style="text-align: center">類別</th>
                        <th style="text-align: center">手機號碼</th>
                        <th style="text-align: center">帳號</th>
                        <th style="text-align: center">密碼</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($users as $post)
                    <tr>
                        <td>{{$post->id}}</td>
                        <td>{{$post->name}}</td>
                        <td>{{$post->type}}</td>
                        <td>{{$post->phone}}</td>
                        <td>{{$post->email}}</td>
                        <td>{{$post->password}}</td>
                        <td>
                            <a href="{{route('admin.posts.edit',$post->id)}}">編輯</a>
                            /

                            <!-- Button to Open the Modal -->
                            <button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#myModal" >
                                刪除

                            </button>

                            <!-- The Modal -->
                            <div class="modal" id="myModal">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">確認刪除</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            您是否確認刪除該筆資料

                                        </div>

                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <button type="submit" class="btn btn-success">是</button>
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">否</button>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- /.row -->
@endsection
