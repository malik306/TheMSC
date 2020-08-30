<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Employee Experience and Qualification </h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="">Home</a></li>
                        <li class="breadcrumb-item active"> Employee </li>
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

                <div class="row px-5">
                    <div class="col-3 text-white text-capitalize">
                        <div class="d-block mb-2 bg-dark p-2 rounded">{{__('CNIC')}}</div>
                        <div class="d-block mb-2 bg-dark p-2 rounded">{{__('user name')}}</div>
                        <div class="d-block mb-2 bg-dark p-2 rounded">{{__('user role')}}</div>
                        <div class="d-block mb-2 bg-dark p-2 rounded">{{__('status')}}</div>
                        <div class="d-block mb-2 bg-dark p-2 rounded">{{__('post')}}</div>
                        <div class="d-block mb-2 bg-dark p-2 rounded">{{__('image')}}</div>
                        <div class="d-block mb-2 bg-dark p-2 rounded">{{__('objective')}}</div>
                        <div class="d-block mb-2 bg-dark p-2 rounded">{{__('full name')}}</div>
                        <div class="d-block mb-2 bg-dark p-2 rounded">{{__('father name')}}</div>
                        <div class="d-block mb-2 bg-dark p-2 rounded">{{__('date of birth')}}</div>
                        <div class="d-block mb-2 bg-dark p-2 rounded">{{__('religion')}}</div>
                        <div class="d-block mb-2 bg-dark p-2 rounded">{{__('domicile')}}</div>
                        <div class="d-block mb-2 bg-dark p-2 rounded">{{__('email')}}</div>
                        <div class="d-block mb-2 bg-dark p-2 rounded">{{__('gender')}}</div>
                        <div class="d-block mb-2 bg-dark p-2 rounded">{{__('phone')}}</div>
                        <div class="d-block mb-2 bg-dark p-2 rounded">{{__('province')}}</div>
                        <div class="d-block mb-2 bg-dark p-2 rounded">{{__('address')}}</div>
                        <div class="d-block mb-2 bg-dark p-2 rounded">{{__('nationality')}}</div>
                    </div>
                    <div class="col-6">
                        <div class="d-block mb-2 border border-success p-2 rounded">{{$candidate->cnic}}</div>
                        <div class="d-block mb-2 border border-success p-2 rounded">{{$candidate->user_name}}</div>
                        <div class="d-block mb-2 border border-success p-2 rounded">{{$candidate->user_role}}</div>
                        <div class="d-block mb-2 border border-success p-2 rounded">{{$candidate->status}}</div>
                        <div class="d-block mb-2 border border-success p-2 rounded">{{$candidate->post}}</div>
                        {{--<div class="d-inline-block mb-2 border border-success p-2 rounded">
                            @if($user->user_role == 'student')
                                <img src="{{url('Student/',$user->image)}}" class="img-thumbnail shadow rounded w-50">
                            @elseif($user->user_role == 'faculty')
                                <img src="{{url('Faculty/',$user->image)}}" class="img-thumbnail shadow rounded w-50">
                            @endif
                            <div class="p-2 text-info">{{$user->image}}</div>
                        </div>--}}
                        <div class="d-block mb-2 border border-success p-2 rounded">{{$candidate->objective}}</div>
                        <div class="d-block mb-2 border border-success p-2 rounded">{{$candidate->full_name}}</div>
                        <div class="d-block mb-2 border border-success p-2 rounded">{{$candidate->father_name}}</div>
                        <div class="d-block mb-2 border border-success p-2 rounded">{{$candidate->date_of_birth}}</div>
                        <div class="d-block mb-2 border border-success p-2 rounded">{{$candidate->religion}}</div>
                        <div class="d-block mb-2 border border-success p-2 rounded">{{$candidate->domicile}}</div>
                        <div class="d-block mb-2 border border-success p-2 rounded">{{$candidate->email}}</div>
                        <div class="d-block mb-2 border border-success p-2 rounded">{{$candidate->gender}}</div>
                        <div class="d-block mb-2 border border-success p-2 rounded">{{$candidate->phone}}</div>
                        <div class="d-block mb-2 border border-success p-2 rounded">{{$candidate->province}}</div>
                        <div class="d-block mb-2 border border-success p-2 rounded">{{$candidate->address}}</div>
                        <div class="d-block mb-2 border border-success p-2 rounded">{{$candidate->nationality}}</div>
                    </div>
                    <div class="col-3">
                        @if($candidate->user_role == 'student')
                            <img src="{{url('Student/',$candidate->image)}}" class="img-thumbnail shadow rounded w-50">
                        @elseif($candidate->user_role == 'faculty')
                            <img src="{{url('Faculty/',$candidate->image)}}" class="img-thumbnail shadow rounded w-50">
                        @endif
                        <div class="p-2 text-info">{{$candidate->image}}</div>
                    </div>
                </div>


                @php
                    $qual=1;
                @endphp
                <table class="table text-uppercase col-12 text-center table-bordered table-hover table-responsive-xl table-responsive-lg table-responsive-sm table-responsive-md table-responsive">
                    <thead class="thead-dark">
                    <tr class="text-capitalize">
                        <th>{{__('ID')}}</th>
                        <th>{{__('degree')}}</th>
                        <th>{{__('passing year')}}</th>
                        <th>{{__('university board')}}</th>
                        <th>{{__('institution')}}</th>
                        <th>{{__('grade')}}</th>
                        <th>{{__('created-at')}}</th>
                        <th>{{__('updated-at')}}</th>
                        {{--<th colspan="2">{{__('action')}}
                            <a class="btn btn-outline-success float-right text-uppercase btn-sm "> <span class="fa fa-plus"></span></a>
                        </th>--}}
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($qualification as $qualifications)
                        <tr>
                            <td>{{$qual++}}</td>
                            <td>{{$qualifications->degree}}</td>
                            <td>{{$qualifications->pass_year}}</td>
                            <td>{{$qualifications->university_board}}</td>
                            <td>{{$qualifications->institution}}</td>
                            <td>{{$qualifications->grade}}</td>
                            <td>
                                <span class="d-block">{{$qualifications->created_at->format('d M Y')}}</span>
                                <span class="d-block">{{$qualifications->created_at->format('h:i A')}}</span>
                            </td>
                            <td>
                                <span class="d-block">{{$qualifications->updated_at->format('d M Y') }} </span>
                                <span class="d-block">{{$qualifications->updated_at->format('h:i A') }} </span>
                            </td>
                            {{--<td>
                                <a href="{{route('qualification.edit',$qualifications->id)}}" class="btn text-center btn-success"><span class="fa fa-edit text-danger mr-2"></span>Edit</a>
                            </td>
                            <td>
                                <form action="{{route('qualification.destroy',$qualifications->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"class="btn text-center btn-danger"><span class="fa fa-trash text-light mr-2"></span>DELETE</button>
                                </form>
                            </td>--}}
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                @php
                    $exp=1;
                @endphp
                <table class="table table-sm text-uppercase col-12 text-center table-bordered table-hover table-responsive-xl table-responsive-lg table-responsive-sm table-responsive-md table-responsive">
                    <thead class="thead-dark">
                    <tr class="text-capitalize">
                        <th>{{__('ID')}}</th>
                        <th>{{__('organization')}}</th>
                        <th>{{__('designation')}}</th>
                        <th>{{__('grade')}}</th>
                        <th>{{__('experience type')}}</th>
                        <th>{{__('start date')}}</th>
                        <th>{{__('end date')}}</th>
                        <th>{{__('duration')}}</th>
                        <th>{{__('created-at')}}</th>
                        <th>{{__('updated-at')}}</th>
                        {{--<th colspan="2">{{__('action')}}
                            <a class="btn btn-outline-success float-right text-uppercase btn-sm"> <span class="fa fa-plus"></span></a>
                        </th>--}}
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($experience as $experiences)
                        <tr>
                            <td>{{$exp++}}</td>
                            <td>{{$experiences->organization}}</td>
                            <td>{{$experiences->designation}}</td>
                            <td>{{$experiences->grade}}</td>
                            <td>{{$experiences->exp_type}}</td>
                            <td>{{ \Carbon\Carbon::parse($experiences->start_date)  }}</td>
                            <td>{{ \Carbon\Carbon::parse($experiences->end_date)   }}</td>
                            <td>{{ \Carbon\Carbon::parse($experiences->start_date)->diffAsCarbonInterval(\Carbon\Carbon::parse($experiences->end_date)) }}</td>
                            <td>
                                <span class="d-block">{{$experiences->created_at->format('d M Y')}}</span>
                                <span class="d-block">{{$experiences->created_at->format('h:i A')}}</span>
                            </td>
                            <td>
                                <span class="d-block">{{$experiences->updated_at->format('d M Y') }} </span>
                                <span class="d-block">{{$experiences->updated_at->format('h:i A') }} </span>
                            </td>
                            {{--<td>
                                <a href="{{route('experience.edit',$experiences->id)}}" class="btn text-center btn-success"><span class="fa fa-edit text-danger mr-2"></span>Edit</a>
                            </td>
                            <td>
                                <form action="{{route('experience.destroy',$experiences->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"class="btn text-center btn-danger"><span class="fa fa-trash text-light mr-2"></span>DELETE</button>
                                </form>
                            </td>--}}
                        </tr>
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
