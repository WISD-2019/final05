@extends('layouts.master')

@section('title', '新增訂餐')

@section('content')
    <!-- Page Heading -->
    <!-- Header -->
    <header class="masthead" style="background-image: url('{{asset('img/reservation2020.JPG')}}')">
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
                    <select name="product_id" class="form-control">
                        @foreach($products as $product)
                            @for($n=1;$n<=count($product);$n++)
                                @if($product->whether == 1)
                                    @if($product->id == 1)
                                        <option value='1'>{{$product->name}} ${{$product->price}}</option>
                                    @elseif($product->id == 2)
                                        <option value='2'>{{$product->name}} ${{$product->price}}</option>
                                    @elseif($product->id == 3)
                                        <option value='3'>{{$product->name}} ${{$product->price}}</option>
                                    @elseif($product->id == 4)
                                        <option value='4'>{{$product->name}} ${{$product->price}}</option>
                                    @elseif($product->id == 5)
                                        <option value='5'>{{$product->name}} ${{$product->price}}</option>
                                    @elseif($product->id == 6)
                                        <option value='6'>{{$product->name}} ${{$product->price}}</option>
                                    @elseif($product->id == 7)
                                        <option value='7'>{{$product->name}} ${{$product->price}}</option>
                                    @elseif($product->id == 8)
                                        <option value='8'>{{$product->name}} ${{$product->price}}</option>
                                    @elseif($product->id == 9)
                                        <option value='9'>{{$product->name}} ${{$product->price}}</option>
                                    @elseif($product->id == 10)
                                        <option value='10'>{{$product->name}} ${{$product->price}}</option>
                                    @elseif($product->id == 11)
                                        <option value='11'>{{$product->name}} ${{$product->price}}</option>
                                    @elseif($product->id == 12)
                                        <option value='12'>{{$product->name}} ${{$product->price}}</option>
                                    @elseif($product->id == 13)
                                        <option value='13'>{{$product->name}} ${{$product->price}}</option>
                                    @elseif($product->id == 14)
                                        <option value='14'>{{$product->name}} ${{$product->price}}</option>
                                    @elseif($product->id == 15)
                                        <option value='15'>{{$product->name}} ${{$product->price}}</option>
                                    @elseif($product->id == 16)
                                        <option value='16'>{{$product->name}} ${{$product->price}}</option>
                                    @elseif($product->id == 17)
                                        <option value='17'>{{$product->name}} ${{$product->price}}</option>
                                    @elseif($product->id == 18)
                                        <option value='18'>{{$product->name}} ${{$product->price}}</option>
                                    @elseif($product->id == 19)
                                        <option value='19'>{{$product->name}} ${{$product->price}}</option>
                                    @elseif($product->id == 20)
                                        <option value='20'>{{$product->name}} ${{$product->price}}</option>
                                    @elseif($product->id == 21)
                                        <option value='21'>{{$product->name}} ${{$product->price}}</option>
                                    @elseif($product->id == 22)
                                        <option value='22'>{{$product->name}} ${{$product->price}}</option>
                                    @elseif($product->id == 23)
                                        <option value='23'>{{$product->name}} ${{$product->price}}</option>
                                    @elseif($product->id == 24)
                                        <option value='24'>{{$product->name}} ${{$product->price}}</option>
                                    @elseif($product->id == 25)
                                        <option value='25'>{{$product->name}} ${{$product->price}}</option>
                                    @elseif($product->id == 26)
                                        <option value='26'>{{$product->name}} ${{$product->price}}</option>
                                    @elseif($product->id == 27)
                                        <option value='27'>{{$product->name}} ${{$product->price}}</option>
                                    @elseif($product->id == 28)
                                        <option value='28'>{{$product->name}} ${{$product->price}}</option>
                                    @elseif($product->id == 29)
                                        <option value='29'>{{$product->name}} ${{$product->price}}</option>
                                    @elseif($product->id == 30)
                                        <option value='30'>{{$product->name}} ${{$product->price}}</option>
                                    @elseif($product->id == 31)
                                        <option value='31'>{{$product->name}} ${{$product->price}}</option>
                                    @elseif($product->id == 32)
                                        <option value='32'>{{$product->name}} ${{$product->price}}</option>
                                    @elseif($product->id == 33)
                                        <option value='33'>{{$product->name}} ${{$product->price}}</option>
                                    @elseif($product->id == 34)
                                        <option value='34'>{{$product->name}} ${{$product->price}}</option>
                                    @elseif($product->id == 35)
                                        <option value='35'>{{$product->name}} ${{$product->price}}</option>
                                    @else
                                        <option value='36'>{{$product->name}} ${{$product->price}}</option>
                                    @endif
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
