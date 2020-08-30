<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Material List</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="">Home</a></li>
                        <li class="breadcrumb-item active">Student Material </li>
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
                    <table class="table text-center table-bordered table-hover table-responsive-xl table-responsive-lg table-responsive-sm table-responsive-md table-responsive">
                            <thead class="thead-dark">
                            <tr class="text-uppercase">
                                <th>{{__('ID')}}</th>
                                <th>{{__('Title')}}</th>
                                <th>{{__('File')}}</th>
                                <th>{{__('Comment')}}</th>
                                <th>{{__('created-at')}}</th>
                                <th>{{__('updated-at')}}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                                $no=1;
                            @endphp
                            @foreach($self->profile->material as $a)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$a->title}}</td>
                                    <td>{{$a->file}}</td>
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
