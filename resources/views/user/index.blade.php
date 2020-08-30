<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="REAL/PNG" href="{{asset('image/output-onlinepngtools.png')}}" >
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>The-MSC Candidate Details  </title>
</head>
<body>
@include('sweet::alert')


<div class="container py-5">
    <div class="bg-dark text-white p-2 text-center d-block mb-3 rounded">
         Candidate Personal Info
    </div>
    <div class="row px-5">
        <div class="col-3 text-white text-capitalize">
            <div class="d-block mb-2 bg-dark p-2 rounded border border-teal-9">{{__('CNIC')}}</div>
            <div class="d-block mb-2 bg-dark p-2 rounded border border-teal-9">{{__('user role')}}</div>
            <div class="d-block mb-2 bg-dark p-2 rounded border border-teal-9">{{__('email')}}</div>
        </div>
        <div class="col-6">
            <div class="d-block mb-2 border border-success p-2 rounded">{{$candidate->cnic}}</div>
            <div class="d-block mb-2 border border-success text-capitalize p-2 rounded">{{$candidate->user_role}}</div>
            <div class="d-block mb-2 border border-success p-2 rounded">{{$candidate->email}}</div>
        </div>
        <div class="col-3 justify-content-around align-items-center">
            <a href="{{route('user.edit',$candidate)}}" class="btn text-center btn-success mr-2"><span class="fa fa-edit text-danger mr-2"></span>Edit</a>
            @includeIf('user.sign-out')
        </div>
    </div>

    <div class="bg-dark text-white p-2 text-center d-block mb-3 rounded mt-3">
        Candidate Profile Info
        @if(isset($retrieve->profile)==false)
        <a href="{{route('profile.create')}}" class="btn text-center btn-success mr-2 ml-4"><span class="fa fa-plus text-danger mr-2"></span>Create</a>
        @endif
    </div>
    <div class="row px-5 mb-3">
        @if(isset($retrieve->profile))
        <div class="col-3 text-white text-capitalize">
            <div class="d-block mb-2 bg-dark p-2 rounded border border-teal-9">{{__('Objective')}}</div>
            <div class="d-block mb-2 bg-dark p-2 rounded border border-teal-9">{{__('Address')}}</div>
            <div class="d-block mb-2 bg-dark p-2 rounded border border-teal-9">{{__('Post')}}</div>
            <div class="d-block mb-2 bg-dark p-2 rounded border border-teal-9">{{__('Name')}}</div>
            <div class="d-block mb-2 bg-dark p-2 rounded border border-teal-9">{{__('Father Name')}}</div>
            <div class="d-block mb-2 bg-dark p-2 rounded border border-teal-9">{{__('Religion')}}</div>
            <div class="d-block mb-2 bg-dark p-2 rounded border border-teal-9">{{__('Date Of Birth')}}</div>
            <div class="d-block mb-2 bg-dark p-2 rounded border border-teal-9">{{__('Gender')}}</div>
            <div class="d-block mb-2 bg-dark p-2 rounded border border-teal-9">{{__('Domicile')}}</div>
            <div class="d-block mb-2 bg-dark p-2 rounded border border-teal-9">{{__('Phone')}}</div>
            <div class="d-block mb-2 bg-dark p-2 rounded border border-teal-9">{{__('Province')}}</div>
            <div class="d-block mb-2 bg-dark p-2 rounded border border-teal-9">{{__('Nationality')}}</div>
        </div>
        <div class="col-6">
            <div class="d-block mb-2 border border-success p-2 rounded">{{$retrieve->profile->objective}}</div>
            <div class="d-block mb-2 border border-success p-2 rounded">{{$retrieve->profile->address}}</div>
            <div class="d-block mb-2 border border-success p-2 rounded">{{$retrieve->profile->post}}</div>
            <div class="d-block mb-2 border border-success p-2 rounded">{{$retrieve->profile->full_name}}</div>
            <div class="d-block mb-2 border border-success p-2 rounded">{{$retrieve->profile->father_name}}</div>
            <div class="d-block mb-2 border border-success p-2 rounded">{{$retrieve->profile->religion}}</div>
            <div class="d-block mb-2 border border-success p-2 rounded">{{$retrieve->profile->date_of_birth}}</div>
            <div class="d-block mb-2 border border-success p-2 rounded">{{$retrieve->profile->gender}}</div>
            <div class="d-block mb-2 border border-success p-2 rounded">{{$retrieve->profile->domicile}}</div>
            <div class="d-block mb-2 border border-success p-2 rounded">{{$retrieve->profile->phone}}</div>
            <div class="d-block mb-2 border border-success p-2 rounded">{{$retrieve->profile->province}}</div>
            <div class="d-block mb-2 border border-success p-2 rounded">{{$retrieve->profile->nationality}}</div>
        </div>
        <div class="col-3 justify-content-around align-items-center">
            <div class="d-block mb-2 p-2">
                <img src="{{ url('Student/'?? 'Employee/', $retrieve->profile->image)}}" class="w-75 rounded-lg" alt="{{$retrieve->profile->image}}">
            </div>
            <a href="{{route('profile.edit',$retrieve->profile->id)}}" class="btn text-center btn-success mr-2"><span class="fa fa-edit text-danger mr-2"></span>Edit</a>
        </div>
        {{--@else
            <a href="{{route('profile.create')}}" class="btn text-center btn-success mr-2"><span class="fa fa-plus text-danger mr-2"></span>Create</a>--}}
        @endif
    </div>

{{--
    <table class="table table-sm text-uppercase col-12 text-center table-bordered table-hover table-responsive-xl table-responsive-lg table-responsive-sm table-responsive-md table-responsive">
        <thead class="thead-dark">
        <tr class="text-capitalize">
            <th>{{__('ID')}}</th>
            <th>{{__('CNIC')}}</th>
            <th>{{__('user name')}}</th>
            <th>{{__('user role')}}</th>
            <th>{{__('post')}}</th>
            <th>{{__('image')}}</th>
            <th>{{__('objective')}}</th>
            <th>{{__('full name')}}</th>
            <th>{{__('father name')}}</th>
            <th>{{__('date of birth')}}</th>
            <th>{{__('religion')}}</th>
            <th>{{__('domicile')}}</th>
            <th>{{__('email')}}</th>
            <th>{{__('gender')}}</th>
            <th>{{__('phone')}}</th>
            <th>{{__('province')}}</th>
            <th>{{__('address')}}</th>
            <th>{{__('nationality')}}</th>
            <th>{{__('action')}}

            </th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->cnic}}</td>
                <td>{{$user->user_name}}</td>
                <td>{{$user->user_role}}</td>
                <td>{{$user->post}}</td>
                <td>
                    @if($user->user_role == 'student')
                    <img src="{{url('Student/',$user->image)}}" class="img-thumbnail rounded">
                    @elseif($user->user_role == 'faculty')
                        <img src="{{url('Faculty/',$user->image)}}" class="img-thumbnail rounded">
                    @endif
                    <div class="d-block text-info p-1">{{$user->image}}</div>
                </td>
                <td>{{$user->objective}}</td>
                <td>{{$user->full_name}}</td>
                <td>{{$user->father_name}}</td>
                <td>{{$user->date_of_birth}}</td>
                <td>{{$user->religion}}</td>
                <td>{{$user->domicile}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->gender}}</td>
                <td>{{$user->phone}}</td>
                <td>{{$user->province}}</td>
                <td>{{$user->address}}</td>
                <td>{{$user->nationality}}</td>
                <td>
                    <a href="{{route('user.edit',$user)}}" class="btn text-center btn-success"><span class="fa fa-edit text-danger mr-2"></span>Edit</a>
                </td>

            </tr>
        </tbody>
    </table>--}}

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
            <th colspan="2">{{__('action')}}
                    <a href="{{route('qualification.create')}}" class="btn btn-outline-success float-right text-uppercase btn-sm "> <span class="fa fa-plus"></span></a>
            </th>
        </tr>
        </thead>
        <tbody>
        @if(isset($retrieve->profile->qualification))
        @foreach($retrieve->profile->qualification as $qualifications)
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
            <td>
                <a href="{{route('qualification.edit',$qualifications->id)}}" class="btn text-center btn-success"><span class="fa fa-edit text-danger mr-2"></span>Edit</a>
            </td>
            <td>
                {{--<form action="{{route('qualification.destroy',$qualifications->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit"class="btn text-center btn-danger"><span class="fa fa-trash text-light mr-2"></span>DELETE</button>
                </form>--}}
                <button onclick="qualificationdestroy({{$qualifications->id}})" type="submit"class="btn text-center btn-danger"><span class="fa fa-trash text-light mr-2"></span>DELETE</button>

            </td>
        </tr>
        @endforeach
        @endif
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
            <th colspan="2">{{__('action')}}
                    <a href="{{route('experience.create')}}" class="btn btn-outline-success float-right text-uppercase btn-sm"> <span class="fa fa-plus"></span></a>
            </th>
        </tr>
        </thead>
        <tbody>
        @if(isset($retrieve->profile->experience))
        @foreach($retrieve->profile->experience as $experiences)
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
            <td>
                <a href="{{route('experience.edit',$experiences->id)}}" class="btn text-center btn-success"><span class="fa fa-edit text-danger mr-2"></span>Edit</a>
            </td>
            <td>
                {{--<form action="{{route('experience.destroy',$experiences->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit"class="btn text-center btn-danger"><span class="fa fa-trash text-light mr-2"></span>DELETE</button>
                </form>--}}
                <button onclick="experiencedestroy({{$experiences->id}})" type="submit"class="btn text-center btn-danger"><span class="fa fa-trash text-light mr-2"></span>DELETE</button>
            </td>
        </tr>
        @endforeach
        @endif
        </tbody>
    </table>

</div>

<script src="{{asset('js/app.js')}}"></script>
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
    function qualificationdestroy(id){
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
                        url : "{{ url('user/qualification')}}" + '/' + id,
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
    function experiencedestroy(id){
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
                        url : "{{ url('user/experience')}}" + '/' + id,
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
