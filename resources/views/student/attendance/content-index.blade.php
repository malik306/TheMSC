<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Attendance List</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="">Home</a></li>
                        <li class="breadcrumb-item active">Self Attendance </li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">

            <div class="container-fluid">
                <div class="row mb-3 justify-content-around">
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-3 col-5">
                        <span class="bg-green-9 px-2 rounded-lg"></span> <span class="mx-2">Presents</span> <span class="counter">{{$present}}</span> </div>
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-3 col-5">
                        <span class="bg-red-9 px-2 rounded-lg"></span> <span class="mx-2">Absents</span><span class="counter">{{$absent}}</span></div>
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-3 col-5">
                        <span class="bg-green-9 px-2 rounded-lg"></span> <span class="mx-2">Leave</span> <span class="counter">{{$leave}}</span> </div>
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-3 col-5">
                        <span class="bg-red-9 px-2 rounded-lg"></span> <span class="mx-2">S-Leave</span><span class="counter">{{$short}}</span></div>
                </div>
                <table class="table text-center table-bordered table-hover table-responsive-xl table-responsive-lg table-responsive-sm table-responsive-md table-responsive">
                    <thead class="thead-dark">
                    <tr class="text-uppercase">
                        <th>{{__('ID')}}</th>
                        <th>Topic</th>
                        <th>{{__('Date')}}</th>
                        <th>{{__('Status')}}</th>
                        <th>Comment</th>
                        <th>{{__('created-at')}}</th>
                        <th>{{__('updated-at')}}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php
                        $no=1;
                    @endphp
                    @foreach($self->profile->attendance as $a)
                        <tr>
                            <td>{{$no++}}</td>
                            {{$a->topic}}
                            <td>{{\Carbon\Carbon::parse($a->date)->format('d M Y')}}</td>
                            <td class="text-uppercase">{{\Carbon\Carbon::parse($a->date)->format('d M Y')}}</td>
                            <td>{{$a->present}}</td>
                            <td>{{$a->cooment}}</td>
                            <td>
                                <span class="d-block">{{\Carbon\Carbon::parse($a->created_at)->format('d M Y')}}</span>
                                <span class="d-block">{{\Carbon\Carbon::parse($a->created_at)->format('h:i A')}}</span>
                            </td>
                            <td>
                                <span class="d-block">{{\Carbon\Carbon::parse($a->updated_at)->format('d M Y') }} </span>
                                <span class="d-block">{{\Carbon\Carbon::parse($a->updated_at)->format('h:i A') }} </span>
                            </td>
                    @endforeach
                    </tbody>
                </table>

                <div class="row container-fluid">
                    <div class="col-12 text-center text-uppercase justify-content-center d-flex align-items-center">
                        {{--{{$the_class->links()}}--}}
                    </div>
                </div>
            </div>



        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
