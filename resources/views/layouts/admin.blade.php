
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>CMS</title>
  <!-- <style>
  body{
    margin-left:20px;
  }
  </style> -->

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/admin.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini" >
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="بحث" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('img/logo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">المدينة</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      
      <!-- Sidebar Menu -->
      <nav class="mt-4">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          
          <li class="nav-item ">
            <a href="/admin/dashboard" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt  "></i>
              <p>
               الرئيسية
                
              </p>
            </a>
          </li>
          <li class="nav-item ">
            <a href="/admin/users" class="nav-link">
              <i class="nav-icon fas fa-users  "></i>
              <p>
              المستخدم
                
              </p>
            </a>
          </li>
          <li class="nav-item ">
            <a href="/admin/students" class="nav-link">
            <i class="fas fa-user-friends"></i>
              <p>
              الطلاب
              </p>
            </a>
          </li>
          <li class="nav-item ">
            <a href="/admin/room" class="nav-link">
            
            <i class="fas fa-building"></i>
              <p>
                   تسكين الطالب
              </p>
            </a>
          </li>
          <li class="nav-item ">
            <a href="/admin/building" class="nav-link">
            
            <i class="fas fa-building"></i>
              <p>
                     المباني السكنية
              </p>
            </a>
          </li>
          <li class="nav-item ">
            <a href="/admin/rooms" class="nav-link">
            
            <i class="fas fa-building"></i>
              <p>
                      الغرف بكل مبني
              </p>
            </a>
          </li>
          <li class="nav-item ">
            <a  class="nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
              <i class="nav-icon fas fa-power-off"></i>
              <p>
               تسجيل الخروج
                
              </p>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
<!-- /.control-sidebar -->
  @yield('content')

  <!-- Main Footer -->
  <footer class="main-footer">
   
    <!-- Default to the left -->
    <strong>Copyright &copy; {{date('Y')}}CMS. </strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
<script src="{{asset('js/student.js')}}"></script>
</body>
</html>
