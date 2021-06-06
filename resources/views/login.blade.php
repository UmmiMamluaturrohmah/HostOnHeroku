
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Log-In E-Raport</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('template/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('template/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('template/dist/css/adminlte.min.css')}}">
</head>
<body class="hold-transition login-page" background="{{asset('template/dist/img/bglogin.png')}}">
<div class="login-box">
  <div class="login-logo">

  </div>
  <!-- /.login-logo -->
  <div class="card" >
    <div class="card-body login-card-body" style="border-radius:100%;">
    <div class="mt-3 pb-1 d-flex">
        <div class="image">
          <img src="{{asset('template/dist/img/LOGORAPORT.png')}}" style="margin-left:103px;width:40px;height:40px;" alt="{{asset('template/dist/img/LOGORAPORT.png')}}">
        </div>
        <div class="info">
          <p class="d-block" style="margin-top:6px;margin-left:5px;font-size:19px;">RAPORT</p>
        </div>
      </div>
      <h6 class="text-center" style="font-style:bold;font-family:Verdana;margin-bottom:30px;">SMP Negeri 1 Tareem</h6>
     
      <form action="/login" method="post">
      @csrf
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
          <!-- /.col -->
          <div class="col-5"  style="margin-left:185px;background-color:rgb(0,219,219);border-radius:7px;">
            <button type="submit" class="btn btn-block">Log In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>


    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{asset('template/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('template/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('template/logindist/js/adminlte.min.js')}}"></script>
</body>
</html>
