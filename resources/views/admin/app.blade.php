@include('admin.layout.head')
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Preloader -->
@include('admin.layout.preload')

  <!-- Navbar -->
@include('admin.layout.navbar')
  <!-- /.navbar -->

    <!-- Sidebar -->
    @include('admin.layout.sidebar')
    <!-- /.sidebar -->


  <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    @include('admin.layout.headercontent')
    <!-- /.content-header -->

    <!-- Main content -->
{{--    @include('admin.layout.notebook')--}}
  @yield('content')
    <!-- /.content -->
{{--@include('admin.layout.tablecontent')--}}
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
 @include('admin.layout.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
@include('admin.layout.scripts')
