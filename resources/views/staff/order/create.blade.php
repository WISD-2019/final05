@extends('staff.layouts.master')

@section('title', '新增訂餐')

@section('content')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            新增訂餐 <small>請輸入訂餐資訊</small>
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-edit"></i> 新增訂餐
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->


<div class="row">
    <div class="col-lg-12">
        <form action="{{ route('staff.order.store') }}" method="POST" role="form">
            {{ csrf_field() }}
            <div class="form-group">
                <label>會員編號：</label>
                <input name="user_id" class="form-control" >
            </div>

            <div class="form-group">
                <label>完成狀態：</label>
                <select name="finish">
                      <option value=" "> </option>
                    　<option value="未完成">未完成</option>
                    　<option value="已完成">已完成</option>
                </select>
            </div>

            <div class="form-group">
                <label>取餐時間：</label>
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
