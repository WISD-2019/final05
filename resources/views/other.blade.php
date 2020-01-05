@extends('layouts.master')

@section('title', '其他產品')

@section('content')

    <!-- Header -->
    <header class="masthead" style="background-image: url('{{asset('img/71185543_m_66dc5.jpg')}}')">
        <div class="container d-flex h-100 align-items-center">
            <div class="mx-auto text-center" >
                <h3 class="display-1 mx-auto my-0 text-white" style="font-family: 微軟正黑體"> 其他產品 </h3>
            </div>
        </div>
    </header>

    <body>
        <div style="background: #290e05">
            <div class="container" >
                <div class="row">
                    <div class="col-lg-8 mx-auto mb-4">
                        <h2 class="text-white mb-4" style="font-family: 微軟正黑體">果汁、茶類</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center no-gutters">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr style="font-family: 幼圆">
                            <th style="text-align: center">紅茶</th>
                            <th style="text-align: center">柳橙汁</th>
                            <th style="text-align: center">檸檬汁</th>
                            <th style="text-align: center">薄荷檸檬茶</th>
                        </tr>
                        <tr>
                            <td>
                                <img class="img-fluid align-content-center" src="{{asset("img/紅茶.jpg")}}" alt="">
                            </td>
                            <td>
                                <img class="img-fluid align-content-center" src="{{asset("img/柳橙汁.jpg")}}" alt="">
                            </td>
                            <td>
                                <img class="img-fluid align-content-center" src="{{asset("img/檸檬汁.jpg")}}" alt="">
                            </td>
                            <td>
                                <img class="img-fluid align-content-center" src="{{asset("img/薄荷檸檬茶.jpg")}}" alt="">
                            </td>
                        </tr>
                        <tr style="font-family: 幼圆">
                            <th style="text-align: center">價格：$40</th>
                            <th style="text-align: center">價格：$50</th>
                            <th style="text-align: center">價格：$50</th>
                            <th style="text-align: center">價格：$55</th>
                        </tr>
                        </thead>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <thead>
                        <tr style="font-family: 幼圆">
                            <th style="text-align: center">水果茶</th>
                            <th style="text-align: center">茉莉花茶</th>
                            <th style="text-align: center">玫瑰花茶</th>
                            <th style="text-align: center">洋甘菊茶</th>
                        </tr>
                        <tr>
                            <td>
                                <img class="img-fluid align-content-center" src="{{asset("img/水果茶.jpg")}}" alt="">
                            </td>
                            <td>
                                <img class="img-fluid align-content-center" src="{{asset("img/茉莉花茶.jpg")}}" alt="">
                            </td>
                            <td>
                                <img class="img-fluid align-content-center" src="{{asset("img/玫瑰花茶.jpg")}}" alt="">
                            </td>
                            <td>
                                <img class="img-fluid align-content-center" src="{{asset("img/洋甘菊茶.jpg")}}" alt="">
                            </td>
                        </tr>
                        <tr style="font-family: 幼圆">
                            <th style="text-align: center">價格：$90</th>
                            <th style="text-align: center">價格：$70</th>
                            <th style="text-align: center">價格：$70</th>
                            <th style="text-align: center">價格：$70</th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
        <div style="background: #290e05">
            <div class="container" >
                <div class="row">
                    <div class="col-lg-8 mx-auto mb-4">
                        <h2 class="text-white mb-4" style="font-family: 微軟正黑體">甜點</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center no-gutters">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr style="font-family: 幼圆">
                            <th style="text-align: center">OREO蛋糕</th>
                            <th style="text-align: center">蘋果塔</th>
                            <th style="text-align: center">檸檬塔</th>
                            <th style="text-align: center">烤布雷</th>
                        </tr>
                        <tr>
                            <td>
                                <img class="img-fluid align-content-center" src="{{asset("img/OREO蛋糕.jpg")}}" alt="">
                            </td>
                            <td>
                                <img class="img-fluid align-content-center" src="{{asset("img/蘋果塔.jpg")}}" alt="">
                            </td>
                            <td>
                                <img class="img-fluid align-content-center" src="{{asset("img/檸檬塔.jpg")}}" alt="">
                            </td>
                            <td>
                                <img class="img-fluid align-content-center" src="{{asset("img/烤布雷.jpg")}}" alt="">
                            </td>
                        </tr>
                        <tr style="font-family: 幼圆">
                            <th style="text-align: center">價格：$100</th>
                            <th style="text-align: center">價格：$110</th>
                            <th style="text-align: center">價格：$110</th>
                            <th style="text-align: center">價格：$120</th>
                        </tr>
                        </thead>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <thead>
                        <tr style="font-family: 幼圆">
                            <th style="text-align: center">提拉米蘇</th>
                            <th style="text-align: center">巧克力塔</th>
                            <th style="text-align: center">生巧克力</th>
                            <th style="text-align: center">蒙布朗</th>
                        </tr>
                        <tr>
                            <td>
                                <img class="img-fluid align-content-center" src="{{asset("img/提拉米蘇.jpg")}}" alt="">
                            </td>
                            <td>
                                <img class="img-fluid align-content-center" src="{{asset("img/巧克力塔.jpg")}}" alt="">
                            </td>
                            <td>
                                <img class="img-fluid align-content-center" src="{{asset("img/生巧克力.jpg")}}" alt="">
                            </td>
                            <td>
                                <img class="img-fluid align-content-center" src="{{asset("img/蒙布朗.jpg")}}" alt="">
                            </td>
                        </tr>
                        <tr style="font-family: 幼圆">
                            <th style="text-align: center">價格：$120</th>
                            <th style="text-align: center">價格：$130</th>
                            <th style="text-align: center">價格：$140</th>
                            <th style="text-align: center">價格：$160</th>
                        </tr>
                        </thead>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <thead>
                        <tr style="font-family: 幼圆">
                            <th style="text-align: center">黑糖波士頓</th>
                        </tr>
                        <tr>
                            <td>
                                <img class="img-fluid align-content-center" src="{{asset("img/黑糖波士頓.jpg")}}" alt="">
                            </td>
                        </tr>
                        <tr style="font-family: 幼圆">
                            <th style="text-align: center">價格：$180</th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
        <div style="background: #290e05">
            <div class="container" >
                <div class="row">
                    <div class="col-lg-8 mx-auto mb-4">
                        <h2 class="text-white mb-4" style="font-family: 微軟正黑體">咖啡豆</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center no-gutters">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr style="font-family: 幼圆">
                            <th style="text-align: center">牙買加藍山咖啡豆</th>
                            <th style="text-align: center">瓜地馬拉咖啡豆</th>
                            <th style="text-align: center">哥倫比亞咖啡豆</th>
                            <th style="text-align: center">精選曼特寧生豆</th>
                        </tr>
                        <tr>
                            <td>
                                <img class="img-fluid align-content-center" src="{{asset("img/牙買加藍山咖啡豆.jpg")}}" alt="">
                            </td>
                            <td>
                                <img class="img-fluid align-content-center" src="{{asset("img/瓜地馬拉咖啡豆.jpg")}}" alt="">
                            </td>
                            <td>
                                <img class="img-fluid align-content-center" src="{{asset("img/哥倫比亞咖啡豆.jpg")}}" alt="">
                            </td>
                            <td>
                                <img class="img-fluid align-content-center" src="{{asset("img/精選曼特寧生豆.jpg")}}" alt="">
                            </td>
                        </tr>
                        <tr style="font-family: 幼圆">
                            <th style="text-align: center">價格：$360</th>
                            <th style="text-align: center">價格：$390</th>
                            <th style="text-align: center">價格：$350</th>
                            <th style="text-align: center">價格：$420</th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </body>

@endsection
