<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="REAL/PNG" href="{{asset('image/output-onlinepngtools.png')}}" >
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>{{$title}}</title>
</head>
<body>
@include('sweet::alert')
<div class="wrapper">

    <!-- Navbar -->
    @includeIf('employee.navbar')
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    @includeIf('employee.main-sidebar')

    <!-- Content Wrapper. Contains page content -->
    @includeIf('employee.content')
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    @includeIf('employee.control-sidebar')
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    @includeIf('employee.footer')
</div>

<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>

<script>
    /*$('.counter').counterUp({
        delay: 10,
        time: 1000
    });*/
</script>
</body>
</html>
