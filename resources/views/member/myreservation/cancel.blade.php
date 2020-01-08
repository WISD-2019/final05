@extends('layouts.master')

@section('title', '確認取消')

@section('content')
    <!-- Page Heading -->
    <!-- Header -->
    <header class="masthead" style="background-image: url('{{asset('img/tw_about_list_18k02_yq873zwn24.jpg')}}')">
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
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="text-align: center">{{$reservation->id}}</td>
                            <td style="text-align: center">{{$reservation->bookdate}}</td>
                            <td style="text-align: center">{{$reservation->booktime}}</td>
                            <td style="text-align: center">{{$reservation->count}}</td>
                            <td style="text-align: center">{{$reservation->remark}}</td>
                        </tr>
                    </tbody>
                </table>
                <div class="text-right">
                    <form action="/myreservation/{{$reservation->id}}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button type="submit" class="btn btn-danger ">刪除</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-1" style="background: #290e05">
        </div>
    </div>

