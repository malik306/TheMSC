<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Series List</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="">Home</a></li>
                        <li class="breadcrumb-item active"> Series </li>
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

                        <table class="table text-uppercase col-xl-9 col-md-11 m-auto align-self-center text-center table-bordered table-hover table-responsive-xl table-responsive-lg table-responsive-sm table-responsive-md table-responsive">
                            <thead class="thead-dark">
                            <tr>
                                <th>{{__('ID')}}</th>
                                <th>{{__('Series Title')}}</th>
                                <th>{{__('created-at')}}</th>
                                <th>{{__('updated-at')}}</th>
                                <th colspan="2">{{__('action')}}
                                    <a href="{{route('series.create')}}" class="btn btn-outline-success float-right text-uppercase btn-sm"> <span class="fa fa-plus"></span></a>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                                $no=1;
                            @endphp
                            @foreach($series_index as $series)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td class="text-uppercase">{{$series->title}}</td>
                                    <td>
                                        <span class="d-block">{{\Carbon\Carbon::parse($series->created_at)->format('d M Y')}}</span>
                                        <span class="d-block">{{\Carbon\Carbon::parse($series->created_at)->format('h:i A')}}</span>
                                    </td>
                                    <td>
                                        <span class="d-block">{{ \Carbon\Carbon::parse($series->updated_at)->format('d M Y') }} </span>
                                        <span class="d-block">{{ \Carbon\Carbon::parse($series->updated_at)->format('h:i A') }} </span>
                                    </td>
                                    {{--<td>
                                        <a href="{{route('class.show',$theClasses->id)}}" class="btn btn-primary"><span class="fa fa-eye text-dark mr-2"></span>View</a>
                                    </td>--}}
                                    <td>
                                        <a href="{{route('series.edit',$series->id)}}" class="btn btn-success"><span class="fa fa-edit text-danger mr-2"></span>Edit</a>
                                    </td>
                                    <td>
                                        <button type="submit"class="btn btn-danger" onclick="seriesdestroy({{$series->id}})"><span class="fa fa-trash text-light mr-2"></span>DELETE</button>
                                        {{--<form action="{{route('course.destroy',$courses->id)}}" method="post">
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
