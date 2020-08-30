<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Carousel List</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="">Home</a></li>
                        <li class="breadcrumb-item active"> Carousel </li>
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

                        <table class="table text-uppercase col-12 text-center table-bordered table-hover table-responsive-xl table-responsive-lg table-responsive-sm table-responsive-md table-responsive">
                            <thead class="thead-dark">
                            <tr>
                                <th>{{__('ID')}}</th>
                                <th>{{__('Title')}}</th>
                                <th>{{__('Description')}}</th>
                                <th>{{__('Image')}}</th>
                                <th>{{__('created-at')}}</th>
                                <th>{{__('updated-at')}}</th>
                                <th colspan="2">{{__('action')}}
                                    <a href="{{route('carousel.create')}}" class="btn btn-outline-success float-right text-uppercase btn-sm"> <span class="fa fa-plus"></span></a>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                                $no=1;
                            @endphp
                            @foreach($carousels as $carousel)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$carousel->title}}</td>
                                    <td>{{$carousel->description}}</td>
                                    <td>
                                        <img src="{{url('carousel/',$carousel->image )}}" class="rounded w-auto img-lg">
                                        {{--<div class="d-block text-info p-1">{{$carousel->image}}</div>--}}
                                    </td>
                                    <td>
                                        <span class="d-block">{{\Carbon\Carbon::parse($carousel->created_at)->format('d M Y')}}</span>
                                        <span class="d-block">{{\Carbon\Carbon::parse($carousel->created_at)->format('h:i A')}}</span>
                                    </td>
                                    <td>
                                        <span class="d-block">{{\Carbon\Carbon::parse($carousel->updated_at)->format('d M Y') }} </span>
                                        <span class="d-block">{{\Carbon\Carbon::parse($carousel->updated_at)->format('h:i A') }} </span>
                                    </td>
                                    {{--<td>
                                        <a href="{{route('carousel.show',$carousel->id)}}" class="btn text-center btn-primary"><span class="fa fa-eye text-dark mr-2"></span>View</a>
                                    </td>--}}
                                    <td>
                                        {{--<a href="{{route('carousel.edit',$carousel->id)}}" data-toggle="modal" class="btn text-center btn-success"><span class="fa fa-edit text-danger mr-2"></span>Edit</a>--}}

                                        <a href="{{route('carousel.edit',$carousel->id)}}" class="btn text-center btn-success">
                                            <span class="fa fa-edit text-danger mr-2"></span>Edit</a>
                                    </td>
                                    <td>
                                        <button onclick="carouseldestroy({{$carousel->id}})" type="submit"class="btn text-center btn-danger"><span class="fa fa-trash text-light mr-2"></span>DELETE</button>
                                        {{--<form action="{{route('carousel.destroy',$carousel->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"class="btn text-center btn-danger"><span class="fa fa-trash text-light mr-2"></span>DELETE</button>
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
