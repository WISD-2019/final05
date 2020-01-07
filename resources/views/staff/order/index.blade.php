@extends('staff.layouts.master')

@section('title', '訂餐管理')

@section('content')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            訂餐管理 <small>所有訂餐名單</small>
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-edit"></i> 訂餐管理
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->

<div class="row" style="margin-bottom: 20px; text-align: right">
    <div class="col-lg-12">
        <a href="{{ route('staff.order.create') }}" class="btn btn-success" style="background-color:#00B8B8;color:#FFFFFF;border:3px black">新增訂餐</a>
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
                    <th width="100"style="text-align: center">會員編號</th>
                    <th style="text-align: center">完成狀態</th>
                    <th style="text-align: center">取餐時間</th>
                </tr>
                </thead>
                <tbody>
                @foreach($orders as $order)
                <tr>
                    <td>{{$order->id}}</td>
                    <td>{{$order->user_id}}</td>
                    <td>{{$order->finish}}</td>
                    <td>{{$order->time}}</td>
                    <td>

                    <a href="{{route('staff.order.edit',$order->id)}}">
                        <button type="submit" class="btn btn-success"  style="background-color:#FFFFFF;color:#0000D1;border:3px black">編輯</button>
                    </a>
                    /
                        <a href="order/{{ $order->id }}">
                            <button type="submit" class="btn btn-success"  style="background-color:#FFFFFF;color:#00A8A8;border:3px black">查看</button>
                        </a>
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
