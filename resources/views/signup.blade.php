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
            <h1 align="center">ĐĂNG KÍ TÀI KHOẢN</h1>

            <div class="form-group">
              <label for="name">Tên của bạn</label>
              <input type="name" class="form-control" id="name">
            </div>

            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email">
            </div>

            <div class="form-group">
              <label for="password">Mật khẩu</label>
              <input type="password" class="form-control" id="password">
            </div>

            <div class="form-group">
              <label for="password">Nhập lại mật khẩu</label>
              <input type="password" class="form-control" id="password">
            </div>

            <div class="form-group">
              <label for="placework">Bộ phận IT</label>
                <select style="background-color: silver" class="form-control selectit" id="placework">
                  <option>Chọn bộ phận IT--</option>
                  <option>IT Hà Nội</option>
                  <option>IT Đà Nẵng</option>
                </select>
              </div>

            <button type="submit" class="btn btn-success btn-block">XÁC NHẬN</button>
          </form>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12"></div>
    </div>
</div>
</body>
</html>
