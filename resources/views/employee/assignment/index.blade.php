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
@include('employee.assignment.content-index')
<!-- /.content-wrapper -->

    <!-- Control Sidebar -->
@includeIf('employee.control-sidebar')
<!-- /.control-sidebar -->

    <!-- Main Footer -->
    @includeIf('employee.footer')
</div>






<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }});
    function seriesdestroy(id){
        swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this record!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
            .then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        url : "{{ url('admin/series')}}" + '/' + id,
                        type : "POST",
                        data : {'_method' : 'DELETE',
                            id : id,
                        },
                        success: function(data){
                            swal("Your record has been deleted!", {
                                icon: "success",
                            },
                                location.reload(),
                            );
                        },
                        error : function(){
                            swal({
                                title: 'Oops',
                                text : data.message,
                                type : 'error',
                                //icon :'error',
                                timer : false,
                            })
                        }
                    })
                } else {
                    swal("Your record is safe!");
                }
            });
    };
</script>

</body>
</html>
