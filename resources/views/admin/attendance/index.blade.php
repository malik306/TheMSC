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
@include('admin.attendance.content-index')
<!-- /.content-wrapper -->

    <!-- Control Sidebar -->
@includeIf('admin.control-sidebar')
<!-- /.control-sidebar -->

    <!-- Main Footer -->
    @includeIf('admin.footer')
</div>


<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
<script>
    $(document).ready(function () {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }});

        function arraySearchBody(date,s){
            return  (date + "-" + s);
            //console.log(date + "-" + s);
        }
        function arraySearchHead(){

        }
        function gender(e){
            if (e=='male'){
                return 'S/O';
            }
            else {
                return 'D/O';
            }
        }
        {{--document.getElementById('picker').addEventListener('change',(e)=>{
                let date=new Date(e.target.value);
                let finddays = daysInMonth(date.getMonth()+1,date.getFullYear());
                function daysInMonth(month,year) {
                    return new Date(year, month, 0).getDate();
                }
                $.ajax({
                    type:'GET',
                    url:'/admin/attendance/',
                    dataType: 'json',
                    content: 'application/json',
                    success: function (data) {

                        let i;
                        let make_date;
                        let key_value;
                        let xb;
                        let emp_status= $("#empstatus");
                        let url_show;
                        let head_url_edit;
                        let head_url_delete;
                        let txt='<th class="text-center">Employee'+ '&nbsp/&nbsp' + 'Day</th>';
                        for (let k=1; k<=finddays;k++){
                            txt+="<th class='text-center'>"+k+"</th>";
                            $('#empday').html(txt);
                        }
                        $.each(data.k,function (key,value){
                            url_show='/admin/attendance/'+value.profile.attendance.id;
                            emp_status.append("<tr>" +
                                "<td class='px-3'><a class='text-info' href='" + url_show +"'>"+ value.profile.full_name + "&nbsp &nbsp"+
                                gender(value.profile.gender) + "&nbsp &nbsp"+ value.profile.father_name+"</a></td>" );
                            for(i=1;i<=finddays;i++) {
                                make_date = i + (date.getMonth() + 1) + date.getFullYear();
                                //console.log(make_date);
                                xb=[value.profile.attendance.present][value.profile.attendance.date];
                                //console.log(x ?? "not found");
                                key_value=arraySearchBody(make_date,xb);
                                //console.log(key_value);
                                if (key_value==true){
                                    emp_status.append("<td>"+
                                        console.log([value.profile.attendance.present][key_value.present]) +
                                    "</td>");
                                }else {
                                    emp_status.append("<td>-</td>");
                                }
                            }
                                emp_status.append("</tr>");
                        });
                    }
                });
            });--}}
    });
</script>


</body>
</html>
