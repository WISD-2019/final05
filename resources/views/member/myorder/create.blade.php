@extends('layouts.master')

@section('title', '新增訂餐')

@section('content')
    <!-- Page Heading -->
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
    <div class="row">
        <div class="col-lg-1 " style="background: #290e05">
        </div>
        <div class="col-lg-10 mb-5">
            <h1 class="page-header text-primary" style="font-family: 幼圆">新增訂餐</h1>
        </div>
        <div class="col-lg-1 " style="background: #290e05">
        </div>
    </div>

    <!-- /.row -->
    {{--    @include('member.layouts.partials.validation')--}}

    <!-- /.row -->
    <div class="row" style="font-family: 微軟正黑體">
        <div class="col-lg-1 " style="background: #290e05">
        </div>
        <div class="col-lg-10">
            <!--<form role="form"> -->
            <form action="/myorder" method="POST" role="form">

                <!-- 可產生一組安全檢驗碼 -->
                {{ csrf_field() }}

                <div class="input-group mb-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text">產品名稱：</span>
                    </div>
                    <select name="id" class="form-control">
                        @foreach($products as $product)
                            @for($n=1;$n<=count($product);$n++)
                                @if($product->whether == 1)
                                    <option value="n">{{$product->name}} ${{$product->price}}</option>
                                @endif
                            @endfor
                        @endforeach
                    </select>
                </div>

                <div class="input-group mb-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text">數量：</span>
                    </div>
                    <!--<select class="form-control">-->
                    <select name="count" class="form-control">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
                </div>

                <div class="form-group mb-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text">備註：</span>
                    </div>
                    <!--<textarea class="form-control" rows="6"></textarea>-->
                    <textarea name="remark" class="form-control" rows="6"></textarea>
                </div>

                <div class="text-right">
                    <button type="submit" class="btn btn-primary text-white" style="font-size: medium ; font-family: 微软雅黑">新增</button>
                </div>

                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>

            </form>
        </div>
        <div class="col-lg-1 " style="background: #290e05">
        </div>
    </div>
    <!-- /.row -->
@endsection
