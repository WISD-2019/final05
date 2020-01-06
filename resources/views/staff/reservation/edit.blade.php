@extends('staff.layouts.master')

@section('title', '處理訂位入座')

@section('content')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            處理訂位入座 <small>更新預約訂位資料的名單</small>
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-edit"></i> 處理訂位入座
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->
@include('staff.layouts.partials.validation')

<div class="row">
    <div class="col-lg-12">
        <form action="{{ route('staff.reservation.update', $reservations->id) }}" method="POST" role="form">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}

            <div class="form-group">
                <label>訂位人數：</label>
                <textarea name="count" class="form-control" >{{$reservations->count}}</textarea>
            </div>

            <div class="form-group">
                <label>真正來店日期時間：</label>
                <input type="datetime-local" name="time">
            </div>


            <div class="text-right">
                <button type="submit" class="btn btn-success" style="background-color:#00B8B8;color:#FFFFFF;border:3px black">更新</button>
            </div>



        </form>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>

    </div>
</div>
<!-- /.row -->
@endsection
