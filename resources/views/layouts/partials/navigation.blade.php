<!-- Navigation -->
<meta charset="utf-8">
    <style type="text/css">
        nav {
            text-align:center;
        }
        nav ul {
            border-radius:10px;
            padding:0 20px;
            display:inline-table;
            position:relative;
            list-style:none;

        }
        nav ul ul {
            display:none;
            list-style:none;
        }
        nav ul li {
            float:left;
            list-style:none;
        }
        nav ul::after {
            content:"";
            display:block;
            clear:both;
            list-style:none;
        }
        nav ul li a {
            display:block;
            padding:25px 40px;
            color:#000;
            text-decoration:none;
            font-family:"微軟正黑體";

        }
        nav ul li:hover > ul {
            display:block;
            list-style:none;
        }
        nav ul li:hover {
            list-style:none;
        }
        nav ul li:hover a {
            color:#000;
        }
        nav ul ul {
            background: #FFF;
            border-radius:0;
            position:absolute;
            top:100%;
            padding:0;
            list-style:none;
        }
        nav ul ul li {
            float:none;
            border-top:1px solid #deeeff;
            list-style:none;
        }
        nav ul ul li a {
            color:#FFF;
        }
        nav ul ul li a:hover {
            background: #17a2b8;
        }
        nav ul ul ul {
            width:100%;
            position:absolute;
            left:100%;
            top:50%;
            list-style:none;
        }
    </style>
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Cofe</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item" >
                    <a class="nav-link js-scroll-trigger dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#news">活動公告</a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{ route('contect.index') }}">最新公告</a>
                        </li>
                        <li>
                            <a href="{{ route('contect.index') }}">公告</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#projects">產品介紹</a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{ route('contect.index') }}">咖啡</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false"" href="{{ route('contect.index') }}">關於我們</a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{ route('contect.index') }}">環境介紹</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger dropdown-toggle" data- toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false"" href="#contect">聯絡我們</a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{ route('contect.index') }}">地址</a>
                        </li>
                    </ul>
                </li>
                @if (Route::has('login'))
                    <div class="top-right links">
                        @auth
                            <li class="nav-item">
                                <a class="nav-link js-scroll-trigger" href="{{ url('/home') }}">首頁</a>
                            </li>
                        @else
                            <li class="nav-item">
                                 <a class="nav-link js-scroll-trigger" href="{{ route('login') }}">登入</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link js-scroll-trigger" href="{{ route('register') }}">註冊</a>
                                </li>
                            @endif
                        @endauth
                    </div>
                @endif
            </ul>
        </div>
    </div>
</nav>
