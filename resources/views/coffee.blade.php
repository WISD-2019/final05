@extends('layouts.master')

@section('title', 'Cofe')

@section('content')

<!-- 標頭 -->
<!-- Header -->
<header class="masthead" style="background-image: url('{{asset('img/bg-coffee.jpg')}}')">
    <div class="container d-flex h-100 align-items-center" style="font-family: 微軟正黑體">
        <div class="mx-auto text-center" >
            <h3 class="display-1 mx-auto my-0 text-white"> Honey Cofe </h3>
            <h3 class="text-primary mx-auto mt-2 mb-5">想要來一杯香濃的咖啡嗎？事不宜遲立刻點擊下方進行挑選</h3>
            <a href="{{ route('product.index') }}" class="btn btn-primary js-scroll-trigger ">查看產品</a>
        </div>
    </div>
</header>

<!-- 標頭 news 的移動模塊 -->
<!-- news Section -->
<section id="news" class="about-section text-left carousel slide" data-ride="carousel" style="background: #290e05">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto mb-4" style="font-family: 微軟正黑體">
                <h2 class="text-white mb-4 ">最新消息</h2>
                <!-- 指示符 -->
                <ul class="carousel-indicators">
                    <li data-target="#news" data-slide-to="0" class="active"></li>
                    <li data-target="#news" data-slide-to="1"></li>
                    <li data-target="#news" data-slide-to="2"></li>
                </ul>

                <!-- 輪播圖片 -->
                <div class="carousel-inner" >
                    <div class="carousel-item active">
                        <img src="https://static.runoob.com/images/mix/img_fjords_wide.jpg">
                        <div class="carousel-caption">
                            <h3>第一張圖片描述標題</h3>
                            <p>描述文字!</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset("img/sweet.png")}}">
                        <div class="carousel-caption">
                            <h3>第二張圖片描述標題</h3>
                            <p>描述文字!</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset("img/cup.jpg")}}">
                        <div class="carousel-caption">
                            <h3>第三章圖片描述標題</h3>
                            <p>描述文字!</p>
                        </div>
                    </div>
                </div>

                <!-- 左右切換按紐 -->
                <a class="carousel-control-prev" href="#news" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#news" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- 標頭 Projects 的下拉式方塊 -->
<!-- Projects Section -->
<section id="projects" class="projects-section" style="background: #290e05 ; font-family: 微軟正黑體" >
    <div class="container">

        <!-- Featured Project Row -->
        <div class="row align-items-center no-gutters mb-4 mb-lg-5">
            <div class="col-xl-8 col-lg-7">
                <img class="img-fluid mb-3 mb-lg-0 float-right" src="{{asset("img/焦糖瑪奇朵.jpg")}}" alt="">
            </div>
            <div class="col-xl-4 col-lg-5">
                <div class="featured-text text-center text-white text-lg-left">
                    <h4 >熱門產品</h4>
                    <p class="text-white-50 mb-0 ">焦糖瑪奇朵</p>
                </div>
            </div>
        </div>

        <!-- Project One Row -->
        <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
            <div class="col-lg-6">
                <img class="img-fluid float-right" src="{{asset("img/卡布奇諾.jpg")}}" alt="">
            </div>
            <div class="col-lg-6">
                <div class="bg-black text-center h-100 project">
                    <div class="d-flex h-100">
                        <div class="project-text w-100 my-auto text-center">
                            <h4 class="text-white text-lg-left">主力推薦</h4>
                            <p class="mb-0 text-white-50 text-lg-left">卡布奇諾</p>
                            <hr class="d-none d-lg-block mb-0 ml-0">
                            <a href="{{ route('product.index') }}" class="js-scroll-trigger text-right">更多產品</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Project Two Row -->
        <div class="row justify-content-center no-gutters">
            <div class="col-lg-6">
                <img class="img-fluid" src="{{asset("img/烤布雷.jpg")}}" alt="">
            </div>
            <div class="col-lg-6 order-lg-first">
                <div class="bg-black text-center h-100 project">
                    <div class="d-flex h-100">
                        <div class="project-text w-100 my-auto text-center ">
                            <h4 class="text-white text-lg-right">午後甜點</h4>
                            <p class="mb-0 text-white-50 text-lg-right">烤布雷</p>
                            <hr class="d-none d-lg-block mb-0 mr-0">
                            <a href="{{ route('other.index') }}" class="js-scroll-trigger text-right">更多產品</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- 標頭 Contect 的下拉式方塊 -->
<!-- Signup Section -->
<section id="contect" class="contact-section" style="background: #290e05 ; font-family: 微軟正黑體">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-lg-8 mx-auto text-center">

                <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
                <h2 class="text-white mb-5">Subscribe to receive updates!</h2>

                <form class="form-inline d-flex">
                    <input type="email" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="inputEmail" placeholder="Enter email address...">
                    <button type="submit" class="btn btn-primary mx-auto">Subscribe</button>
                </form>

            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="contact-section bg-black">
    <div class="container">

        <div class="row">

            <div class="col-md-4 mb-3 mb-md-0">
                <div class="card py-4 h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                        <h4 class="text-uppercase m-0">Address</h4>
                        <hr class="my-4">
                    <div class="small text-black-50">4923 Market Street, Orlando FL</div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3 mb-md-0">
                <div class="card py-4 h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-envelope text-primary mb-2"></i>
                        <h4 class="text-uppercase m-0">Email</h4>
                        <hr class="my-4">
                        <div class="small text-black-50">
                            <a href="#">hello@yourdomain.com</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3 mb-md-0">
                <div class="card py-4 h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-mobile-alt text-primary mb-2"></i>
                        <h4 class="text-uppercase m-0">Phone</h4>
                        <hr class="my-4">
                        <div class="small text-black-50">+1 (555) 902-8832</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="social d-flex justify-content-center">
            <a href="#" class="mx-2">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="mx-2">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="mx-2">
                <i class="fab fa-github"></i>
            </a>
        </div>

    </div>
</section>

@endsection

