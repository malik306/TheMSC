<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Employee Attendance Sheet</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="">Home</a></li>
                        <li class="breadcrumb-item active"> Employee Attendance </li>
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

                    <div class="row mb-2">

                        <div class="form-group col-8 col-xl-3 col-lg-4 col-md-4 col-sm-5 d-inline-flex text-center d-inline-flex">
                            <form class="d-block" method="GET" action="{{route('date-attendance')}}">

                            <div class="form-label-group">
                                <input id="picker" type="date" class="form-control" name="picker">
                                <label for="picker" class="text-uppercase">{{ __('Please select the month') }}</label>
                            </div> {{--Bro sth ab day bhoii chaiyay... ku k mei attendance sheet ni bna ra aur simple bna ra hn.... Specific date select kre ga phr uss k against attendance sh.........--}}
                            <button class="btn btn-success"> <span class="fas fa-search mr-2"></span> Search</button>
                            </form>
                        </div>
                        <a href="{{route('attendance.create')}}" class="fas fa-plus text-teal-5 text-center mt-3"></a>
                    </div>
                <div class="row mx-auto pb-3">
                    <div class="col-xl-2">Day @isset($day) <span class="text-info ml-2">{{$day}}</span>@endisset </div>
                    <div class="col-xl-2">Month @isset($month) <span class="text-info ml-2">{{$month}}</span>@endisset </div>
                    <div class="col-xl-2">Year @isset($year) <span class="text-info ml-2">{{$year}}</span>@endisset </div>
                </div>
                @isset($month , $year,$day)
                        <form  method="POST">
                            @csrf
                            <button type="submit" class="btn btn-teal-5 mb-3" formaction="{{url('/admin/attendance')}}">Delete</button>
                        <table class="table table-striped table-sm table-bordered table-responsive-lg table-responsive-md table-responsive-xl table-responsive-sm table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>User Name</th>
                                <th>Name</th>
                                <th>S/O ? D/O</th>
                                <th>Father Name</th>
                                <th>Topic</th>
                                <th>Status</th>
                                <th>Comment</th>
                                <th>Date</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Show</th>
                                <th><label class="form-check-inline"><input class="form-check-input" type="checkbox" name="select[]"></label> </th>

                            </tr>
                            </thead>
                            <tbody>
                            @php($no=1)

                                @foreach(\App\User::where('user_role','employee')->get() as $user)
                                    <td>{{$no++}}</td>
                                    <td>{{$user->user_name}}</td>
                                    <td>{{$user->profile->full_name}}</td>
                                    <td>{{$user->profile->gender=='male'? 'S/O':'D/O'}}</td>
                                    <td>{{$user->profile->father_name}}</td>
                                    @isset($user->profile->attendance)
                                        @foreach($user->profile->attendance as $k)
                                    <td>{{$k->topic}}</td>
                                    <td>{{$k->present}}</td>
                                    <td>{{$k->comment}}</td>
                                    <td>{{$k->date}}</td>
                                    <td>{{$k->created_at}}</td>
                                    <td>{{$k->updated_at}}</td>
                                    <td><a href="{{route('attendance.show',$k->id)}}">Show <span class="fa fa-eye"></span> </a></td>
                                    <td><label class="form-check-inline"><input class="form-check-input" type="checkbox" name="select[]" value="{{$k->id}}"></label></td>
                                        @endforeach
                                    @endisset
                                @endforeach
                            </tbody>
                        </table>
                        </form>

                    @endisset

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
