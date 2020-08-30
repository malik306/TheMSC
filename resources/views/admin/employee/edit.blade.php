<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="REAL/PNG" href="{{asset('image/output-onlinepngtools.png')}}" >
    <title>{{$title}}</title>
</head>
<body>




<div class="wrapper">

    <!-- Navbar -->
@includeIf('admin.navbar')
<!-- /.navbar -->

    <!-- Main Sidebar Container -->
@includeIf('admin.main-sidebar')

<!-- Content Wrapper. Contains page content -->
@include('admin.employee.content-edit')
<!-- /.content-wrapper -->

    <!-- Control Sidebar -->
@includeIf('admin.control-sidebar')
<!-- /.control-sidebar -->

    <!-- Main Footer -->
    @includeIf('admin.footer')
</div>



<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>

<script type="text/javascript">
    $(".custom-file-input").on("change", function() {
        let fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
</script>


</body>
</html>
