<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>My Work</title>

    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <link href="{{asset('css/magnific-popup.css')}}" rel="stylesheet">
    <link href="{{asset('css/creative.min.css')}}" rel="stylesheet">
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/jquery.easing.min.js')}}"></script>
    <script src="{{asset('js/scrollreveal.min.js')}}"></script>
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('js/creative.min.js')}}"></script>
  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">MY WORK</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">TRANG CHỦ</a>
            </li>
            @guest
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="{{ route('register') }}">ĐĂNG KÝ</a>
            </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="{{ route('password.request') }}">QUÊN MẬT KHẨU</a>
              </li>
            @else
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#">{{ \Auth::user()->name }}</a>
            </li>
            <li class="nav-item">
              <a href="{{ route('logout') }}"
                 class="nav-link js-scroll-trigger"
                 onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                THOÁT
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
              </form>
            </li>
            @endguest
          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead text-center text-white d-flex">
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h1 class="text-uppercase">
              <strong>QUẢN LÝ CÔNG VIỆC</strong>
            </h1>
            <hr>
          </div>
          <div class="col-lg-8 mx-auto">
            <p class="text-faded mb-5">My Work là một ứng dụng giúp bạn quản lý các công việc được của bạn một cách hiệu quả nhất!</p>
            @guest
              <a class="btn btn-primary btn-xl js-scroll-trigger" href="{{ route('login') }}">ĐĂNG NHẬP</a>
            @endguest
          </div>
        </div>
      </div>
    </header>
  </body>

</html>
