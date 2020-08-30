<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Student List</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="">Home</a></li>
                        <li class="breadcrumb-item active"> Student </li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">

        {{--<div class="container">

                @if(session()->has('carouseluploaded'))
                    <small class="alert alert-success p-1 text-center text-capitalize d-block" role="alert">
                        {{ session('carouseluploaded') }}
                    </small>
                @endif
                @if(session()->has('carouseldeleted'))
                    <small class="alert alert-success p-1 text-center text-capitalize d-block" role="alert">
                        {{ session('carouseldeleted') }}
                    </small>
                @endif
                @if(session()->has('carouselupdated'))
                    <small class="alert alert-success p-1 text-center text-capitalize d-block" role="alert">
                        {{ session('carouselupdated') }}
                    </small>
                @endif
        </div>--}}
                <div class="container-fluid">

                    <div class="row">

                        <table class="table table-sm col-12 text-center table-bordered table-hover table-responsive-xl table-responsive-lg table-responsive-sm table-responsive-md table-responsive">
                            <thead class="thead-dark text-capitalize">
                            <tr>
                                <th>{{__('ID')}}</th>
                                <th>{{__('user name')}}</th>
                                <th>{{__('email')}}</th>
                                <th class="text-uppercase">{{__('cnic')}}</th>
                                <th>{{__('status')}}</th>
                                <th>{{__('Name')}}</th>
                                <th>{{__('Father Name')}}</th>
                                <th>{{__('post')}}</th>
                                <th>{{__('gender')}}</th>
                                <th>{{__('image')}}</th>
                                <th>{{__('phone')}}</th>
                                <th>{{__('province')}}</th>
                                <th>{{__('address')}}</th>
                                <th>{{__('nationality')}}</th>
                                <th>{{__('domicile')}}</th>
                                <th>{{__('date of birth')}}</th>
                                <th>{{__('religion')}}</th>
                                <th colspan="3">{{__('action')}}
                                    {{--<a class="btn btn-outline-success float-right text-uppercase btn-sm"> <span class="fa fa-plus"></span></a>--}}
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                                $no=1;
                            @endphp
                            @foreach($users as $student)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$student->user_name}}</td>
                                    <td>{{$student->email}}</td>
                                    <td>{{$student->cnic}}</td>
                                    <td>{{$student->status}}</td>
                                    @if(isset($student->profile))
                                    <td>{{$student->profile->full_name}}</td>
                                    <td>{{$student->profile->father_name}}</td>
                                    <td>{{$student->profile->post}}</td>
                                    <td>{{$student->profile->gender}}</td>
                                    <td>
                                        <img src="{{url('student/',$student->profile->image)}}" class="rounded w-auto img-lg">
                                        {{--<div class="d-block text-info p-1">{{$student->profile->image}}</div>--}}
                                    </td>
                                    <td>{{$student->profile->phone}}</td>
                                    <td>{{$student->profile->province}}</td>
                                    <td>{{$student->profile->address}}</td>
                                    <td>{{$student->profile->nationality}}</td>
                                    <td>{{$student->profile->domicile}}</td>
                                    <td>{{$student->profile->date_of_birth}}</td>
                                    <td>{{$student->profile->religion}}</td>
                                    {{--<td>
                                        <a href="{{route('carousel.show',$carousel->id)}}" class="btn text-center btn-primary"><span class="fa fa-eye text-dark mr-2"></span>View</a>
                                    </td>--}}
                                    <td>
                                        <a href="{{route('student.edit',$student->id)}}" class="btn text-center btn-success">
                                            <span class="fa fa-edit text-danger mr-2"></span>Edit</a>
                                    </td>
                                    <td>
                                        <a href="{{route('student.show',$student->id)}}" class="btn text-center btn-primary">
                                            <span class="fa fa-eye text-dark mr-2"></span>View</a>
                                    </td>
                                    <td>
                                        <button onclick="studentdestroy({{$student->id}})" type="submit"class="btn text-center btn-danger"><span class="fa fa-trash text-light mr-2"></span>DELETE</button>
                                    </td>
                                    @endif
                                </tr>
                            @endforeach
{{--@php
$q=1;
$ex=1;
@endphp
                                    <table id="qualification" class="table table-hover d-none table-bordered">
                                        <thead>
                                        <tr>
                                            <th>{{__('ID')}}</th>
                                            <th>{{__('degree')}}</th>
                                            <th>{{__('pass Year')}}</th>
                                            <th>{{__('university board')}}</th>
                                            <th>{{__('institution')}}</th>
                                            <th>{{__('grade')}}</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($student->qualification as $qualification)
                                        <tr>
                                            <td>{{$q++}}</td>
                                            <td>{{$qualification->degree}}</td>
                                            <td>{{$qualification->pass_year}}</td>
                                            <td>{{$qualification->university_board}}</td>
                                            <td>{{$qualification->institution}}</td>
                                            <td>{{$qualification->grade}}</td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>

                                    <table id="experience" class="table table-hover d-none table-bordered">
                                        <thead>
                                        <tr>
                                            <th >{{__('ID')}}</th>
                                            <th >{{__('organization')}}</th>
                                            <th >{{__('designation')}}</th>
                                            <th >{{__('grade')}}</th>
                                            <th >{{__('experience type')}}</th>
                                            <th >{{__('start date')}}</th>
                                            <th >{{__('end date')}}</th>
                                            <th >{{__('duration')}}</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($student->experience as $experience)
                                        <tr>
                                            <td >{{$ex++}}</td>
                                            <td >{{$experience->organization}}</td>
                                            <td >{{$experience->designation}}</td>
                                            <td >{{$experience->grade}}</td>
                                            <td >{{$experience->exp_type}}</td>
                                            <td >{{$experience->start_date}}</td>
                                            <td >{{$experience->end_date}}</td>
                                            <td >{{\Carbon\Carbon::parse($experience->start_date)->diffAsCarbonInterval(\Carbon\Carbon::parse($experience->end_date) )}}</td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>--}}

                            </tbody>
                        </table>

                    </div>

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
