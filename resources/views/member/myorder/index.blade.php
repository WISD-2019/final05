@extends('layouts.master')

@section('title', '我的訂餐')

@section('content')

    <!-- Header -->
    <header class="masthead" style="background-image: url('{{asset('img/bg-coffee.jpg')}}')">
        <div class="container d-flex h-100 align-items-center" >
            <div class="mx-auto text-center" >
                <h3 class="display-1 mx-auto my-0 text-white" style="font-family: 微軟正黑體"> 我的餐點 </h3>
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
    <div class="row" style="font-family: 微軟正黑體">
        <div class="col-lg-1 " style="background: #290e05">
        </div>
        <div class="col-lg-10 mb-4" style="text-align: left">
            <a href="{{ route('member.myorder.create') }}" class="btn btn-primary js-scroll-trigger ">新增餐點</a>
        </div>
        <div class="col-lg-1 " style="background: #290e05">
        </div>
    </div>

    <!-- /.row -->
    @if (count($orders) > 0)
        <div class="row" style="font-family: 微軟正黑體">
            <div class="col-lg-1" style="background: #290e05">
            </div>
            <div class="col-lg-10">
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
                            <th width="40" style="text-align: center">編輯</th>
                            <th width="40" style="text-align: center">取消</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($orders as $order)
                            @foreach($items as $item)
                                @if($order->id == $item->id)
                                    @if($item->user_id == $order->user_id)
                                        @foreach($products as $product)
                                            @if($item->product_id == $product->id)
                                                <tr>
                                                    <!-- 在 View 顯示資料 -->
                                                    <td style="text-align: center">{{$product->category}}</td>
                                                    <td style="text-align: center">{{$product->name}}</td>
                                                    <td style="text-align: center">$ {{$product->price}}</td>
                                                    <td style="text-align: center">{{$item->count}}</td>
                                                    <td style="text-align: center">{{$product->discount}}</td>
                                                    <td style="text-align: center">{{$order->remark}}</td>
                                                    <td style="text-align: center">
                                                        <!-- 編輯資料 -->
                                                        <a href="{{ route('member.myorder.edit',$order->id) }}">編輯</a>
                                                    </td>
                                                    <td style="text-align: center">
                                                        <button type="button" class="btnSelect" data-toggle="modal" data-target="#myModal">刪除</button>
                                                    </td>
                                                </tr>
                                            @endif
                                        @endforeach
                                    @endif
                                @endif
                            @endforeach
                        @endforeach
                        </tbody>
                    </table>
                    <!-- 模態框 -->
                    <div class="modal fade" id="myModal">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <!-- 模態框頭部 -->
                                <div class="modal-header">
                                    <h6 class="modal-title">確認取消</h6>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <!-- 模態框主體 -->
                                <div class="modal-body">
                                    <h5>您是否要取消該筆餐點？</h5>
                                </div>
                                <!-- 模態框底部 -->
                                <div class="modal-footer">
                                    <!-- 刪除資料 -->
                                    <form action="/myorder/{{ $order->id, $item->id }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <input type="hidden" name="_method" value="DELETE">

                                        <button class="btn btn-primary">確定</button>
                                    </form>
                                    <button class="btn btn-primary" data-dismiss="modal">取消</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-1" style="background: #290e05">
            </div>
        </div>
    @else
        <div class="row" style="font-family: 微軟正黑體">
            <div class="col-lg-1" style="background: #290e05">
            </div>
            <div class="col-lg-10 mb-5">
                <h2 style="text-align: center" class="text-black-50">目前沒有訂餐紀錄喔~</h2>
            </div>
            <div class="col-lg-1" style="background: #290e05">
            </div>
        </div>
    @endif
    <!-- /.row -->
@endsection
