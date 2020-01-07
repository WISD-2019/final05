@extends('layouts.master')

@section('title', '聯絡資訊')

@section('content')

    <!-- Header -->
    <header class="masthead" style="background-image: url('{{asset('img/11541052.jpg')}}')">
        <div class="container d-flex h-100 align-items-center">
            <div class="mx-auto text-center" >
                <h3 class="display-1 mx-auto my-0 text-white" style="font-family: 微軟正黑體"> 聯絡資訊 </h3>
            </div>
        </div>
    </header>
    <section id="news" class="about-section text-left carousel slide" data-ride="carousel" style="background: #290e05">
        <div class="container">
            <div class="row">
                <div class="col-lg-1 " style="background: #290e05">
                </div>
                <div class="col-lg-10 mx-auto mb-5" style="font-family: 標楷體">
                    <h4 class="text-white mb-4 ">地址</h4>
                    <form style="color: #b3d9f4 ; font-size: large ">
                        <h5>
                            花蓮市中山路一段101號
                        </h5>
                    </form>
                </div>
                <div class="col-lg-1 " style="background: #290e05">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-1 " style="background: #290e05">
                </div>
                <div class="col-lg-10 mx-auto mb-5" style="font-family: 標楷體">
                    <h4 class="text-white mb-4 ">電話</h4>
                    <form style="color: #b3d9f4 ; font-size: large ">
                        <h5 class="mb-2">
                            (03)8330902
                        </h5>
                        <h5>
                            0928 895 101
                        </h5>
                    </form>
                </div>
                <div class="col-lg-1 " style="background: #290e05">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-1 " style="background: #290e05">
                </div>
                <div class="col-lg-10 mx-auto mb-5" style="font-family: 標楷體">
                    <h4 class="text-white mb-4 ">營業時間</h4>
                    <form style="color: #b3d9f4 ; font-size: large ">
                        <h5>
                            10:00~18:30/週一公休
                        </h5>
                    </form>
                </div>
                <div class="col-lg-1 " style="background: #290e05">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-1 " style="background: #290e05">
                </div>
                <div class="col-lg-10 mx-auto mb-5" style="font-family: 標楷體">
                    <h4 class="text-white mb-4 ">粉絲專業</h4>
                    <form style="color: #b3d9f4 ; font-size: large ">
                        <h4 class="mb-2" style="font-family: Calibri">
                            FACEBOOK
                        </h4>
                        <h5>
                            <a href ="https://www.facebook.com/pg/101.owl.cafe/about/?ref=page_internal">m.me/101.owl Honey. cafe </a>
                        </h5>
                    </form>
                </div>
                <div class="col-lg-1 " style="background: #290e05">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-1 " style="background: #290e05">
                </div>
                <div class="col-lg-10 mx-auto mb-5" style="font-family: 標楷體">
                    <img class="img-fluid mb-3 mb-lg-0 float-right" src="{{asset("img/5184hbybi.jpg")}}" alt="">
                </div>
                <div class="col-lg-1 " style="background: #290e05">
                </div>
            </div>

        </div>
    </section>

@endsection
