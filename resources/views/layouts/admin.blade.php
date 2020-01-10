<!DOCTYPE html>
<html>

<head>
@include('admin.partial.header_html')
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        @include('admin.partial.main-header')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('admin.partial.main-sidebar')

        <!-- Content Wrapper. Contains page content -->
        @yield('content')
        <!-- /.content-wrapper -->
        @include('admin.partial.footer')
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    @include('admin.partial.script')
</body>

</html>
