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
@includeIf('admin.navbar')
<!-- /.navbar -->

    <!-- Main Sidebar Container -->
@includeIf('admin.main-sidebar')

<!-- Content Wrapper. Contains page content -->
@include('admin.selection.student.content-index')
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
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }});
    function selectdestroy(id){
        console.log(id);
        swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this record!",
            icon: "warning",
            timer: false,
            buttons: true,
            dangerMode: true,
        })
            .then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        url : "{{ url('admin/selection')}}" + '/' + id,
                        type : "POST",
                        data : {'_method' : 'DELETE',
                            id : id,
                        },
                        success: function(data){
                            swal("Your record has been deleted!", {
                                icon: "success",
                                timer: false,
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
