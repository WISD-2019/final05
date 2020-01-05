@extends('admin.layouts.master')

@section('title', '編輯訂餐')

@section('content')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            編輯訂餐 <small>編輯訂餐資訊</small>
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-edit"></i> 訂餐管理
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->


<div class="row">
    <div class="col-lg-12">
        <form action="{{ route('staff.order.update', $orders->id) }}" method="POST" role="form">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}

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
                <button type="submit" class="btn btn-success">更新</button>
            </div>

        </form>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>

    </div>
</div>
<!-- /.row -->
@endsection
