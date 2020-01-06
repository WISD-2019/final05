@extends('admin.layouts.master')

@section('title', '確認刪除')

@section('content')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            確認刪除 <small>您是否確定刪除該筆資料</small>
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-edit"></i> 確認刪除
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->

<div class="row">
    <div class="col-lg-12">
        <table class="table table-bordered table-hover">
            <thead>
            <tr>
                <th width="70" style="text-align: center">編號</th>
                <th style="text-align: center">品名</th>
                <th style="text-align: center">類別</th>
                <th style="text-align: center">價格</th>
                <th style="text-align: center">折扣</th>
                <th style="text-align: center">是否上架</th>
            </tr>
            </thead>

            <tr>
                <td>{{$products->id}}</td>
                <td>{{$products->name}}</td>
                <td>{{$products->category}}</td>
                <td>{{$products->price}}</td>
                <td>{{$products->discount}}</td>
                <td>{{($products->whether)}}</td>
            </tr>



        </table>

        <div class="text-right">
            <form action="{{ route('admin.product.destroy', $products->id) }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <button type="submit" class="btn btn-success" style="background-color:#00B8B8;color:#FFFFFF;border:3px black">刪除</button>
            </form>
        </div>
    </div>
</div>
<!-- /.row -->
@endsection
