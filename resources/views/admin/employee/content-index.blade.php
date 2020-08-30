<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Employee List</h1>
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
                        @foreach($users as $employee)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$employee->user_name}}</td>
                                <td>{{$employee->email}}</td>
                                <td>{{$employee->cnic}}</td>
                                <td>{{$employee->status}}</td>
                                @if(isset($employee->profile))
                                    <td>{{$employee->profile->full_name}}</td>
                                    <td>{{$employee->profile->father_name}}</td>
                                    <td>{{$employee->profile->post}}</td>
                                    <td>{{$employee->profile->gender}}</td>
                                    <td>
                                        <img src="{{url('employee/',$employee->profile->image)}}" class="rounded w-auto img-lg">
                                        {{--<div class="d-block text-info p-1">{{$employee->profile->image}}</div>--}}
                                    </td>
                                    <td>{{$employee->profile->phone}}</td>
                                    <td>{{$employee->profile->province}}</td>
                                    <td>{{$employee->profile->address}}</td>
                                    <td>{{$employee->profile->nationality}}</td>
                                    <td>{{$employee->profile->domicile}}</td>
                                    <td>{{$employee->profile->date_of_birth}}</td>
                                    <td>{{$employee->profile->religion}}</td>
                                    {{--<td>
                                        <a href="{{route('carousel.show',$carousel->id)}}" class="btn text-center btn-primary"><span class="fa fa-eye text-dark mr-2"></span>View</a>
                                    </td>--}}
                                    <td>
                                        <a href="{{route('employee.edit',$employee->id)}}" class="btn text-center btn-success">
                                            <span class="fa fa-edit text-danger mr-2"></span>Edit</a>
                                    </td>
                                    <td>
                                        <a href="{{route('employee.show',$employee->id)}}" class="btn text-center btn-primary">
                                            <span class="fa fa-eye text-dark mr-2"></span>View</a>
                                    </td>
                                    <td>
                                        <button onclick="employeedestroy({{$employee->id}})" type="submit"class="btn text-center btn-danger"><span class="fa fa-trash text-light mr-2"></span>DELETE</button>
                                    </td>
                                @endif
                            </tr>
                        @endforeach
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
