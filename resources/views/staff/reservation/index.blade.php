@extends('staff.layouts.master')

@section('title', '訂位管理')

@section('content')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            訂位管理 <small>所有訂位名單</small>
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-edit"></i> 訂位管理
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->

<div class="row" style="margin-bottom: 20px; text-align: right">
    <div class="col-lg-12">
        <a href="{{ route('staff.reservation.create') }}" class="btn btn-success">新增訂位</a>
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
                        <th width="100" style="text-align: center">會員編號</th>
                        <th width="100" style="text-align: center">預約日期</th>
                        <th style="text-align: center">預約時間</th>
                        <th style="text-align: center">訂位人數</th>
                        <th style="text-align: center">真正來店日期時間</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($reservations as $book)
                    <tr>
                        <td>{{$book->id}}</td>
                        <td>{{$book->user_id}}</td>
                        <td>{{$book->bookdate}}</td>
                        <td>{{$book->booktime}}</td>
                        <td>{{$book->count}}</td>
                        <td>{{$book->time}}</td>
                        <td>
                            <a href="{{route('staff.reservation.edit',$book->id)}}">編輯</a>/
                            <form action="{{ route('staff.reservation.edit', $book->id) }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button type="submit" class="btn btn-success">刪除</button>
                            </form>
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
