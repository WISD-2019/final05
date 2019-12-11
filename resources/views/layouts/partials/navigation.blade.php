<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Cofe</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#news">活動公告</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#projects">產品介紹</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#about">關於我們</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#contect">聯絡我們</a>
                </li>
                <li class="nav-item">
{{--                    @if (Route::has('login'))--}}
{{--                        <div class="top-right links">--}}
{{--                            @auth--}}
{{--                                <a class="nav-link js-scroll-trigger" href="{{ url('/home') }}">首頁</a>--}}
{{--                            @else--}}
{{--                                <a class="nav-link js-scroll-trigger" href="{{ route('login') }}">登入</a>--}}
{{--                            --}}
{{--                                @if (Route::has('register'))--}}
{{--                                    <a class="nav-link js-scroll-trigger" href="{{ route('register') }}">註冊</a>--}}
{{--                                @endif--}}
{{--                            @endauth--}}
{{--                        </div>--}}
{{--                    @endif--}}
                    @if (Route::has('login'))
                        @auth
                            <a class="nav-link js-scroll-trigger" href="{{ url('/home') }}">首頁</a>
                        @else
                            <a class="nav-link js-scroll-trigger" href="{{ route('login') }}">註冊</a>

{{--                            @if (Route::has('register'))--}}
{{--                                <a class="nav-link js-scroll-trigger" href="{{ route('register') }}">Register</a>--}}
{{--                            @endif--}}
                        @endauth
                    @endif
                </li>
                <li class="nav-item">
                    @if (Route::has('register'))
                        <a class="nav-link js-scroll-trigger" href="{{ route('register') }}">登入</a>
                    @endif
                </li>
            </ul>
        </div>
    </div>
</nav>
