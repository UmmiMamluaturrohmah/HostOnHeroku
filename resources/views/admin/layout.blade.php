<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>E-Raport | Guru</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('template/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('template/dist/css/adminlte.min.css')}}">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-light" style="background-color:white;">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <img src="{{asset('template/dist/img/LOGORAPORT.png')}}" alt="{{asset('template/dist/img/LOGORAPORT.png')}}" style="width:33px;height:33px;">
        <span>RAPORT</span>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">

      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link"  href="/logout">
          <i class="far fa-user"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item"></a>
          <div class="dropdown-divider"></div>
        </div>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color:rgb(0,219,219);">
    <!-- Brand Logo -->
    <div class="brand" style="font-style:bold;color:white;padding:24px 7px 20px 7px;">
      <img src="{{asset('template/dist/img/avatar3.png')}}" class="img-circle" alt="{{asset('template/dist/img/avatar3.png')}}" style="width:40px;height:40px;">
      <span style="color:black;font-family:Verdana;font-size:14px;">{{Auth::guard('teacher')->user()->name}}</span>
      <hr>
      <div class="form-inline">
        <div class="input-group">
          <div class="input-group-append">
          </div>
        </div>
    </div>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="">
      </div>

      <!-- SidebarSearch Form -->
      
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item" style="border-bottom:1px solid #fffff;border-top:1px solid #fffff;">
            <a href="/menu" class="nav-link">
              <i class="nav-icon fas fa-home" style="color:black;"></i>
              <p style="color:black;">
                Menu
              </p>
            </a>
          </li>
          <li class="nav-item" style="border-bottom:1px solid #fffff;">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-pencil-alt" style="color:black;"></i>
              <p style="color:black;">
                Nilai
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
 
                <ul class="nav nav-treeview" style="border-bottom:1px solid #fffff;">
                  <li class="nav-item">
                    <a href="/datasiswa" class="nav-link">
                      <i class="fas fa-plus nav-icon" style="color:black;margin-left:20px;"></i>
                      <p style="color:black;">Kelas VII</p>
                    </a>
                  </li>
                  <li class="nav-item" style="border-bottom:1px solid #fffff;">
                    <a href="/datasiswa2" class="nav-link">
                    <i class="fas fa-plus nav-icon" style="color:black;margin-left:20px;"></i>
                      <p style="color:black;">Kelas VIII</p>
                    </a>
                  </li>
                  <li class="nav-item" style="border-bottom:1px solid #fffff;">
                    <a href="/datasiswa3" class="nav-link">
                    <i class="fas fa-plus nav-icon" style="color:black;margin-left:20px;"></i>
                      <p style="color:black;">Kelas IX</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                  <a href="/logout" class="nav-link" style="color:black;">
                    <i class="nav-icon fas fa-sign-out-alt"></i>
                    <p style="color:black;">
                      Sign Out
                    </p>
                  </a>
                </li>
            </ul>
          </li>

      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid" >
        <div class="row mb-2">
          <div class="col-sm-6">
          </div>


    </body>
</html>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
       @yield("content")

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
   <div class="text-center">
    <strong>E-Raport SMP 1 Tareem</strong> All rights reserved.
   </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="/template/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/template/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/template/dist/js/demo.js"></script>
</body>
</html>
