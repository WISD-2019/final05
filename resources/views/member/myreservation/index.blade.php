@extends('layouts.master')

@section('title', '我的訂位')

@section('content')

    <!-- Header -->
    <header class="masthead" style="background-image: url('{{asset('img/bg-coffee.jpg')}}')">
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
    <div class="row" style="font-family: 微軟正黑體">
        <div class="col-lg-1 " style="background: #290e05">
        </div>
        <div class="col-lg-10 mb-4" style="text-align: left">
            <a href="{{ route('member.myreservation.create') }}" class="btn btn-primary js-scroll-trigger ">新增訂位</a>
        </div>
        <div class="col-lg-1 " style="background: #290e05">
        </div>
    </div>

    <!-- /.row -->
    @if (count($reservations) > 0)
        <div class="row" style="font-family: 微軟正黑體">
            <div class="col-lg-1" style="background: #290e05">
            </div>
            <div class="col-lg-10">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th width="40" style="text-align: center">編號</th>
                                <th width="70" style="text-align: center">預定日期</th>
                                <th width="70" style="text-align: center">預定時間</th>
                                <th width="70" style="text-align: center">訂位人數</th>
                                <th width="100" style="text-align: center">備註</th>
                                <th width="50" style="text-align: center">編輯</th>
                                <th width="50" style="text-align: center">取消</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($reservations as $reservation)
                            <tr>
                                <!-- 在 View 顯示資料 -->
                                <td style="text-align: center">{{$reservation->id}}</td>
                                <td style="text-align: center">{{$reservation->bookdate}}</td>
                                <td style="text-align: center">{{$reservation->booktime}}</td>
                                <td style="text-align: center">{{$reservation->count}}</td>
                                <td style="text-align: center">{{$reservation->remark}}</td>
                                <td style="text-align: center">
                                    <!-- 編輯資料 -->
                                    <a href="{{ route('member.myreservation.edit',$reservation->id) }}">編輯</a>
                                </td>
                                <td style="text-align: center">
                                    <a href="{{ route('member.myreservation.cancel',$reservation->id) }}">
                                        <button type="button" class="btn-danger btn-sm" >刪除</button>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
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
                <h2 style="text-align: center" class="text-black-50">目前沒有訂位紀錄喔~</h2>
            </div>
            <div class="col-lg-1" style="background: #290e05">
            </div>
        </div>
    @endif
    <!-- /.row -->
@endsection
