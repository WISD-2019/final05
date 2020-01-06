@extends('staff.layouts.master')

@section('title', '新增訂位')

@section('content')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            新增訂位 <small>請輸入訂位資訊</small>
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-edit"></i> 新增訂位
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->
@include('staff.layouts.partials.validation')

<div class="row">
    <div class="col-lg-12">
        <form action="{{ route('staff.reservation.store') }}" method="POST" role="form">
            {{ csrf_field() }}
            <div class="form-group">
                <label>會員編號：</label>
                <input name="user_id" class="form-control" >
            </div>

            <div class="form-group">
                <label for="bookdate">預約日期：</label>
                <input type="date" name="bookdate">
            </div>

            <div class="form-group">
                <label for="booktime">預約時間：</label>
                <input type="time" name="booktime">
            </div>

            <div class="form-group">
                <label>訂位人數：</label>
                <input name="count" class="form-control" >
            </div>

            <div class="form-group">
                <label>真正來店日期時間：</label>
                <input type="datetime-local" name="time">
            </div>



            <div class="text-right">
                <button type="submit" class="btn btn-success" style="background-color:#00B8B8;color:#FFFFFF;border:3px black">新增</button>
            </div>

            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>

        </form>
    </div>
</div>
<!-- /.row -->
@endsection
