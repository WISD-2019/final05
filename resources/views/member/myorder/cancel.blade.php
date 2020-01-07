@extends('layouts.master')

@section('title', '確認取消')

@section('content')
    <!-- Page Heading -->
    <!-- Header -->
    <header class="masthead" style="background-image: url('{{asset('img/reservation2020.JPG')}}')">
        <div class="container d-flex h-100 align-items-center" >
            <div class="mx-auto text-center" >
                <h3 class="display-1 mx-auto my-0 text-white" style="font-family: 微軟正黑體"> 我的訂餐 </h3>
            </div>
        </div>
    </header>

    <!-- /.row -->
    <div class="row" >
        <div class="col-lg-1 " style="background: #290e05">
        </div>
        <div class="col-lg-10 mb-4">
        </div>
        <div class="col-lg-1 " style="background: #290e05">
        </div>
    </div>

    <!-- /.row -->
    <div class="row">
        <div class="col-lg-1 " style="background: #290e05">
        </div>
        <div class="col-lg-10 mb-5">
            <h1 class="page-header text-primary" style="font-family: 幼圆">刪除訂餐</h1>
        </div>
        <div class="col-lg-1 " style="background: #290e05">
        </div>
    </div>

    <div class="row" style="font-family: 微軟正黑體">
        <div class="col-lg-1" style="background: #290e05">
        </div>
        <div class="col-lg-10 mb-5">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th width="60" style="text-align: center">類別</th>
                        <th width="80" style="text-align: center">產品名稱</th>
                        <th width="30" style="text-align: center">價格</th>
                        <th width="30" style="text-align: center">數量</th>
                        <th width="30" style="text-align: center">折扣</th>
                        <th width="90" style="text-align: center">備註</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                        @if($product->id == $item->product_id)
                            <tr>
                                <td style="text-align: center">{{$product->category}}</td>
                                <td style="text-align: center">{{$product->name}}</td>
                                <td style="text-align: center">$ {{$product->price}}</td>
                                <td style="text-align: center">{{$item->count}}</td>
                                <td style="text-align: center">{{$product->discount}}</td>
                                <td style="text-align: center">{{$order->remark}}</td>
                            </tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>
                <div class="text-right">
                    <form action="/myorder/{{ $order->id, $item->id }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button type="submit" class="btn btn-danger">刪除</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-1" style="background: #290e05">
        </div>
    </div>

    <!-- /.row -->
@endsection
