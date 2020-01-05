@extends('layouts.master')

@section('title', '產品資訊')

@section('content')

    <header class="masthead" style="background-image: url('{{asset('img/article-5d109612ee1fd.jpg')}}')">
        <div class="container d-flex h-100 align-items-center">
            <div class="mx-auto text-center" >
                <h3 class="display-1 mx-auto my-0 text-white" style="font-family: 微軟正黑體"> 咖啡系列 </h3>
            </div>
        </div>
    </header>

    <body>
        <div style="background: #290e05">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto mb-4">
                        <h2 class="text-white mb-4" style="font-family: 微軟正黑體">咖啡系列</h2>
                    </div>
                </div>
            </div>
        </div>
        <div>

        </div>
        <div class="row justify-content-center no-gutters">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr style="font-family: 幼圆">
                                <th style="text-align: center">卡布奇諾</th>
                                <th style="text-align: center">巧克力特調咖啡</th>
                                <th style="text-align: center">冰釀咖啡</th>
                                <th style="text-align: center">貝里詩拿鐵</th>
                            </tr>
                            <tr>
                                <td>
                                    <img class="img-fluid align-content-center" src="{{asset("img/卡布奇諾.jpg")}}" alt="">
                                </td>
                                <td>
                                    <img class="img-fluid align-content-center" src="{{asset("img/巧克力特調咖啡.jpg")}}" alt="">
                                </td>
                                <td>
                                    <img class="img-fluid align-content-center" src="{{asset("img/冰釀咖啡.jpg")}}" alt="">
                                </td>
                                <td>
                                    <img class="img-fluid align-content-center" src="{{asset("img/貝里詩拿鐵.jpg")}}" alt="">
                                </td>
                            </tr>
                            <tr style="font-family: 幼圆">
                                <th style="text-align: center">價格：$120</th>
                                <th style="text-align: center">價格：$170</th>
                                <th style="text-align: center">價格：$110</th>
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
                            <th style="text-align: center">玫瑰拿鐵</th>
                            <th style="text-align: center">美式</th>
                            <th style="text-align: center">拿鐵</th>
                            <th style="text-align: center">焦糖瑪奇朵</th>
                        </tr>
                        <tr>
                            <td>
                                <img class="img-fluid align-content-center" src="{{asset("img/玫瑰拿鐵.jpg")}}" alt="">
                            </td>
                            <td>
                                <img class="img-fluid align-content-center" src="{{asset("img/美式.jpg")}}" alt="">
                            </td>
                            <td>
                                <img class="img-fluid align-content-center" src="{{asset("img/拿鐵.jpg")}}" alt="">
                            </td>
                            <td>
                                <img class="img-fluid align-content-center" src="{{asset("img/焦糖瑪奇朵.jpg")}}" alt="">
                            </td>
                        </tr>
                        <tr style="font-family: 幼圆">
                            <th style="text-align: center">價格：$180</th>
                            <th style="text-align: center">價格：$90</th>
                            <th style="text-align: center">價格：$90</th>
                            <th style="text-align: center">價格：$100</th>
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
                            <th style="text-align: center">微醺拿鐵</th>
                            <th style="text-align: center">義式</th>
                            <th style="text-align: center">鳳梨特調咖啡</th>
                            <th style="text-align: center">磨卡咖啡</th>
                        </tr>
                        <tr>
                            <td>
                                <img class="img-fluid align-content-center" src="{{asset("img/微醺拿鐵.jpg")}}" alt="">
                            </td>
                            <td>
                                <img class="img-fluid align-content-center" src="{{asset("img/義式.jpg")}}" alt="">
                            </td>
                            <td>
                                <img class="img-fluid align-content-center" src="{{asset("img/鳳梨特調咖啡.jpg")}}" alt="">
                            </td>
                            <td>
                                <img class="img-fluid align-content-center" src="{{asset("img/磨卡咖啡.jpg")}}" alt="">
                            </td>
                        </tr>
                        <tr style="font-family: 幼圆">
                            <th style="text-align: center">價格：$130</th>
                            <th style="text-align: center">價格：$100</th>
                            <th style="text-align: center">價格：$190</th>
                            <th style="text-align: center">價格：$140</th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </body>

@endsection
