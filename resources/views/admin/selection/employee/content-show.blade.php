<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Employee Selection Process with Student </h1>
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
                <div class="form-group w-25">
                    <label for="classfindid">Choose Class</label>
                    <select class="text-capitalize custom-select" id="classfindid">
                        <option selected>-</option>
                        @foreach($class as $value)
                            <option value="{{ $value->id}}" >{{ $value->name. " " .$value->division }}</option>
                        @endforeach
                    </select>
                </div>

                <table class="table table-sm col-12 text-center table-bordered table-hover table-responsive-xl table-responsive-lg table-responsive-sm table-responsive-md table-responsive">
                    <thead class="thead-dark text-capitalize">
                    <tr>
                        <th>{{__('Sr No.')}}</th>
                        <th>{{__('User-Name')}}</th>
                        <th>{{__('Name')}}</th>
                        <th>{{__('Father Name')}}</th>
                        <th>{{__('Gender')}}</th>
                        <th colspan="2">{{__('action')}}
                            {{--<a  class="btn btn-outline-success float-right text-uppercase btn-sm"> <span class="fa fa-plus"></span></a>--}}
                        </th>
                    </tr>
                    </thead>
                    <tbody id="empselect">

{{--                    @php
                        $no=1;
                    @endphp
                    @foreach($user as $users)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$users->user_name}}</td>
                            @if(isset( $users->profile))
                                <td>{{$users->profile->full_name}}</td>
                                <td>{{$users->profile->father_name}}</td>
                                <td>{{$users->profile->gender}}</td>
                                <td>
                                    <a href="{{route('pivotCreate',['id'=>$users->profile->id,'p_id'=>$profile->id,'c_id'=>$_GET['classfindid']])}}"
                                       class="btn btn-success">
                                        <span class="fa fa-plus text-danger mr-2"></span>Attach</a>
                                </td>
                                <td>
                                    <a  href="{{route('pivotDestroy',['id'=>$users->profile->id,'p_id'=>$profile->id])}}" class="btn btn-danger">
                                        <span class="fa fa-trash text-success mr-2"></span>Detach</a>
                                </td>
                            @endif
                        </tr>
                    @endforeach--}}
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
