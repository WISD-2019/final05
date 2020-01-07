@extends('layouts.master')

@section('title', '編輯訂位')

@section('content')
    <!-- Page Heading -->
    <!-- Header -->
    <header class="masthead" style="background-image: url('{{asset('img/tw_about_list_18k02_yq873zwn24.jpg')}}')">
        <div class="container d-flex h-100 align-items-center" >
            <div class="mx-auto text-center" >
                <h3 class="display-1 mx-auto my-0 text-white" style="font-family: 微軟正黑體"> 我的訂位 </h3>
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
            <h1 class="page-header text-primary" style="font-family: 幼圆">編輯訂位</h1>
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
            <form action="/myreservation/{{$reservation->id}}" method="POST" role="form">

                <!-- 可產生一組安全檢驗碼 -->
                {{ csrf_field() }}
                <!--輔助函數，並告知server 端表單 request method 為 PATCH -->
                {{ method_field('PATCH') }}

                <div class="input-group mb-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text">預定日期：</span>
                    </div>
                    <!--<input class="form-control" placeholder="請輸入預定日期">-->
                    <input name="bookdate" class="form-control" placeholder="請輸入預定日期" type="date" value="{{$reservation->bookdate}}">
                </div>

                <div class="input-group mb-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text">預定時間：</span>
                    </div>
                    <!--<input class="form-control" placeholder="請輸入預定時間">-->
                    <input name="booktime" class="form-control" placeholder="請輸入預定時間" type="time" value="{{$reservation->booktime}}">
                </div>

                <div class="input-group mb-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text">訂位人數：</span>
                    </div>
                    <!--<select class="form-control">-->
                    <select name="count" class="form-control">
                        <option value="1" {{ $reservation->count?'':'SELECTED'}}>1</option>
                        <option value="2" {{ $reservation->count?'':'SELECTED'}}>2</option>
                        <option value="3" {{ $reservation->count?'':'SELECTED'}}>3</option>
                        <option value="4" {{ $reservation->count?'':'SELECTED'}}>4</option>
                        <option value="5" {{ $reservation->count?'':'SELECTED'}}>5</option>
                        <option value="6" {{ $reservation->count?'':'SELECTED'}}>6</option>
                        <option value="7" {{ $reservation->count?'':'SELECTED'}}>7</option>
                        <option value="8" {{ $reservation->count?'':'SELECTED'}}>8</option>
                        <option value="9" {{ $reservation->count?'':'SELECTED'}}>9</option>
                        <option value="10" {{ $reservation->count?'':'SELECTED'}}>10</option>
                        <option value="11" {{ $reservation->count?'':'SELECTED'}}>11</option>
                        <option value="12" {{ $reservation->count?'':'SELECTED'}}>12</option>
                        <option value="13" {{ $reservation->count?'':'SELECTED'}}>13</option>
                        <option value="14" {{ $reservation->count?'':'SELECTED'}}>14</option>
                        <option value="15" {{ $reservation->count?'':'SELECTED'}}>15</option>
                    </select>
                </div>

                <div class="form-group mb-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text">備註：</span>
                    </div>
                    <!--<textarea class="form-control" rows="6"></textarea>-->
                    <textarea name="remark" class="form-control" rows="6">{{$reservation->remark}}</textarea>
                </div>

                <div class="text-right">
                    <button type="submit" class="btn btn-primary text-white" style="font-size: medium ; font-family: 微软雅黑">更新</button>
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

