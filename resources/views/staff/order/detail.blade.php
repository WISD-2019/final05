@extends('staff.layouts.master')

@section('title', '訂位明細')

@section('content')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            訂位明細 <small></small>
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-edit"></i> 訂位明細
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
                    <th width="100" style="text-align: center">會員編號</th>
                    <th width="100" style="text-align: center">預約日期</th>
                    <th style="text-align: center">預約時間</th>
                    <th style="text-align: center">訂位人數</th>
                    <th style="text-align: center">真正來店日期時間</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$reservations->id}}</td>
                        <td>{{$reservations->user_id}}</td>
                        <td>{{$reservations->bookdate}}</td>
                        <td>{{$reservations->booktime}}</td>
                        <td>{{$reservations->count}}</td>
                        <td>{{$reservations->time}}</td>
                    </tr>
                </tbody>
            </table>

            <div class="text-right">
                <a href="{{ route('staff.reservation.index') }}"><button type="submit" class="btn btn-success">返回</button></a>
            </div>


        </div>
    </div>
</div>
<!-- /.row -->
@endsection
