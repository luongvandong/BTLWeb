<!DOCTYPE html>
<html>
<head>
  <title>Đăng kí</title>

  <link rel="stylesheet" type="text/css" href="{{asset('css/signup_login.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
</head>
<body>
  <div class="container-fluid bg">
    <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-12"></div>
        <div class="col-md-4 col-sm-4 col-xs-12">
          <!--form start-->
          <form class="form-container">
            <h1 align="center">MY WORK</h1>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" placeholder="Nhập email của bạn">
            </div>

            <div class="form-group">
              <label for="password">Mật khẩu</label>
              <input type="password" class="form-control" id="password" placeholder="Nhập mật khẩu của bạn">
            </div>

            <div class="checkbox">
              <label>
                <input type="checkbox"> Nhớ mật khẩu
              </label>
            </div>

            <button type="submit" class="btn btn-success btn-block">Đăng nhập</button>
          </form>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12"></div>
    </div>
</div>
</body>
</html>