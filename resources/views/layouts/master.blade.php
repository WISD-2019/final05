<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- 連結 title 行 -->
    <title>@yield('title')</title>
    <!-- Bootstrap core JavaScript -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{asset('js/jquery.easing.min.js')}}"></script>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="{{asset('js/grayscale.min.js')}}"></script>
    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Custom fonts for this template -->
    <link href="{{asset('css/all.min.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/grayscale.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">

<!-- 共同區塊 -->
    <!-- Navigation -->
    @include('layouts.partials.navigation')

    <!--連結 Header 與 Contect 區塊 -->
    @yield('content')

<!-- 共同區塊 -->
    <!-- Footer -->
    @include('layouts.partials.footer')


@section('script')
@stop
</body>

</html>

