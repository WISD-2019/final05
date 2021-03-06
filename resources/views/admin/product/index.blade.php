@extends('admin.layouts.master')

@section('title', '產品')

@section('content')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            產品管理 <small>所有產品名單</small>
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-edit"></i> 產品管理
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->

<div class="row" style="margin-bottom: 20px; text-align: right">
    <div class="col-lg-12">
        <a href="{{ route('admin.product.create') }}" class="btn btn-success" style="background-color:#00B8B8;color:#FFFFFF;border:3px black">建立新產品</a>
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
                        <th style="text-align: center">品名</th>
                        <th style="text-align: center">類別</th>
                        <th style="text-align: center">價格</th>
                        <th style="text-align: center">折扣</th>
                        <th style="text-align: center">是否上架</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->category}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->discount}}</td>
                        <td>{{($product->whether)}}</td>
                        <td>
                            <a href="{{route('admin.product.edit',$product->id)}}">
                                <button type="submit" class="btn btn-success"  style="background-color:#FFFFFF;color:#1212FF;border:3px black">編輯</button>
                            </a>
                            /
                            <a href="product/{{ $product->id }}">
                                <button type="submit" class="btn btn-success"  style="background-color:#FFFFFF;color:#FF0000;border:3px black">刪除</button>
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
