<!DOCTYPE html>
<html>
<head>
    <title>Đăng kí</title>

    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/signup_login.css')}}">
</head>
<body>
<div class="container-fluid bg">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">MY WORK</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="/">TRANG CHỦ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="{{ route('login') }}">ĐĂNG NHẬP</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="{{ route('password.request') }}">QUÊN MẬT KHẨU</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="row">
        <div class="col-md-6 col-sm-10 col-xs-12 offset-md-3 offset-sm-1">
            <!--form start-->
            <form class="form-container" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}
                <h1 align="center">ĐĂNG KÍ TÀI KHOẢN</h1>
                <div class="row">
                    <div class="form-group col-md-6 col-sm-12 col-xs-12{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="name">Tên của bạn <span class="required">*</span></label>
                        <input type="text" class="form-control" id="name" name="name" required>
                        @if ($errors->has('password'))
                            <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                        @endif
                    </div>

                    <div class="form-group col-md-6 col-sm-12 col-xs-12{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email">Email <span class="required">*</span></label>
                        <input type="email" class="form-control" id="email" name="email" required>
                        @if ($errors->has('password'))
                            <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                        @endif
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-6 col-sm-12 col-xs-12{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password">Mật khẩu <span class="required">*</span></label>
                        <input type="password" class="form-control" id="password" name="password" required>
                        @if ($errors->has('password'))
                            <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                        @endif
                    </div>

                    <div class="form-group col-md-6 col-sm-12 col-xs-12">
                        <label for="password_confirmation">Nhập lại mật khẩu <span class="required">*</span></label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                    </div>

                </div>
                <div class="form-group">
                    <label for="work_space">Bộ phận IT <span class="required">*</span></label>
                    <select class="form-control select" id="work_space">
                        <option value="">Chọn bộ phận IT--</option>
                        <option>IT Hà Nội</option>
                        <option>IT Đà Nẵng</option>
                    </select>
                </div>
                <br>
                <button type="submit" class="btn btn-success btn-block">Đăng ký</button>

            </form>
        </div>
    </div>
</div>
</body>
</html>

