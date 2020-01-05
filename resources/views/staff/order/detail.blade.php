@extends('staff.layouts.master')

@section('title', '訂餐明細')

@section('content')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            訂餐明細 <small></small>
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-edit"></i> 訂餐明細
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->
@include('staff.layouts.partials.validation')

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
                <tr>
                    <td>{{$orders->id}}</td>
                    <td>{{$orders->user_id}}</td>
                    <td>{{$orders->finish}}</td>
                    <td>{{$orders->time}}</td>
                    </tr>
                </tbody>
            </table>

            <div class="text-right">
                <a href="{{ route('staff.order.index') }}"><button type="submit" class="btn btn-success">返回</button></a>
            </div>


        </div>
    </div>
</div>
<!-- /.row -->
@endsection
