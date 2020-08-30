<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Class List</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="">Home</a></li>
                        <li class="breadcrumb-item active"> Class </li>
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

            @if(session()->has('theclassupload'))
                <small class="alert alert-success p-1 text-center text-capitalize d-block" role="alert">
                    {{ session('theclassuploaded') }}
                </small>
            @endif
            @if(session()->has('theclassdeleted'))
                <small class="alert alert-success p-1 text-center text-capitalize d-block" role="alert">
                    {{ session('theclassdeleted') }}
                </small>
            @endif
            @if(session()->has('theclassupdated'))
                <small class="alert alert-success p-1 text-center text-capitalize d-block" role="alert">
                    {{ session('theclassupdated') }}
                </small>
            @endif
        </div>--}}
                <div class="container-fluid">

                    <div class="row">

                        <table class="table text-uppercase col-xl-9 col-md-11 m-auto align-self-center text-center table-bordered table-hover table-responsive-xl table-responsive-lg table-responsive-sm table-responsive-md table-responsive">
                            <thead class="thead-dark">
                            <tr>
                                <th>{{__('ID')}}</th>
                                <th>{{__('Name')}}</th>
                                <th>{{__('Division')}}</th>
                                <th>{{__('created-at')}}</th>
                                <th>{{__('updated-at')}}</th>
                                <th colspan="2">{{__('action')}}
                                    <a href="{{route('class.create')}}" class="btn btn-outline-success float-right text-uppercase btn-sm"> <span class="fa fa-plus"></span></a>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                                $no=1;
                            @endphp
                            @foreach($Class as $Classes)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td class="text-capitalize">{{$Classes->name}}</td>
                                    <td>{{$Classes->division}}</td>
                                    <td>
                                        <span class="d-block">{{\Carbon\Carbon::parse($Classes->created_at)->format('d M Y')}}</span>
                                        <span class="d-block">{{\Carbon\Carbon::parse($Classes->created_at)->format('h:i A')}}</span>
                                    </td>
                                    <td>
                                        <span class="d-block">{{\Carbon\Carbon::parse($Classes->updated_at)->format('d M Y') }} </span>
                                        <span class="d-block">{{\Carbon\Carbon::parse($Classes->updated_at)->format('h:i A') }} </span>
                                    </td>
                                    {{--<td>
                                        <a href="{{route('class.show',$Classes->id)}}" class="btn btn-primary"><span class="fa fa-eye text-dark mr-2"></span>View</a>
                                    </td>--}}
                                    <td>
                                        <a href="{{route('class.edit',$Classes->id)}}" class="btn btn-success"><span class="fa fa-edit text-danger mr-2"></span>Edit</a>
                                    </td>
                                    <td>
                                        <button onclick="classdestroy({{$Classes->id}})" type="submit"class="btn btn-danger"><span class="fa fa-trash text-light mr-2"></span>DELETE</button>
                                        {{--<form action="{{route('class.destroy',$Classes->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"class="btn btn-danger"><span class="fa fa-trash text-light mr-2"></span>DELETE</button>
                                        </form>--}}
                                    </td>
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
