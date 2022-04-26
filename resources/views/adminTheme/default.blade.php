<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  @include('adminTheme.style')
  @yield('style')
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- header -->
  @include('adminTheme.header')

  <!-- Main Sidebar -->
  @include('adminTheme.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @yield('content') 
  </div>
  <!-- /.content-wrapper -->

  <!-- REQUIRED footer -->
  @include('adminTheme.footer')

  <!-- Toster Alert File-->
  @include('adminTheme.alert')
</div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->
  @include('adminTheme.script')
  <script type="text/javascript">
    //global variable
    var token = $('meta[name="csrf-token"]').attr('content');  
  </script> 
  @yield('script') 
</body>
</html>
