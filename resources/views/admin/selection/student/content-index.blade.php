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

                <div class="container-fluid">

                        <table class="table table-sm col-12 text-center table-bordered table-hover table-responsive-xl table-responsive-lg table-responsive-sm table-responsive-md table-responsive">
                            <thead class="thead-dark text-capitalize">
                            <tr>
                                <th>{{__('Sr No.')}}</th>
                                <th>{{__('User-Name')}}</th>
                                <th>{{__('cnic')}}</th>
                                <th>{{__('email')}}</th>
                                <th>{{__('Name')}}</th>
                                <th>{{__('Father Name')}}</th>
                                <th>{{__('Gender')}}</th>
                                <th colspan="2">{{__('action')}}
                                    {{--<a  class="btn btn-outline-success float-right text-uppercase btn-sm"> <span class="fa fa-plus"></span></a>--}}
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                            $no=1;
                            @endphp
                            @foreach($user as $id =>$users)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$users->user_name}}</td>
                                    <td>{{$users->cnic}}</td>
                                    <td>{{$users->email}}</td>
                                    @if(isset( $users->profile))
                                        <td>{{$users->profile->full_name}}</td>
                                        <td>{{$users->profile->father_name}}</td>
                                        <td>{{$users->profile->gender}}</td>

                                            <td>
                                                <a  href="{{route('selection.show',$users->profile->id)}}" class="btn btn-success"><span class="fa fa-eye text-danger mr-2"></span>Show</a>
                                            </td>
                                    @endif
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
