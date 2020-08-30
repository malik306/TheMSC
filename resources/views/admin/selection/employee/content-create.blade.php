<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Selection Create</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="">Home</a></li>
                        <li class="breadcrumb-item active"> Selection </li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-7 col-sm-10 col-xl-5 col-lg-5">
                    <div class="card rounded">
                        <div class="card-header text-center h1 font-weight-bold">
                            <div class="d-block text-uppercase card-title">{{ __('Add New Selection') }}</div>
                        </div>
                        <div class="card-body">
                            <form action="{{route('selection.store')}}" method="post" >
                                @csrf


                                <div class="form-group">
                                    <label for="classname">{{__('Choose Class Name')}}</label>
                                    <select class="text-capitalize custom-select" name="class_name" id="classname">
                                        @foreach($class as $id =>$value)
                                                <option value="{{ $value->name }}">{{ $value->name }} - {{$value->division}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="classdivision">{{__('Choose Class Division')}}</label>
                                    <select class="text-capitalize custom-select" name="class_division" id="classdivision">
                                        @foreach($class as $id =>$value)
                                            <option value="{{ $value->division }}">{{ $value->name }} - {{$value->division}}</option>
                                        @endforeach
                                    </select>
                                </div>



                                <div class="form-group">
                                    <label for="coursename">{{__('Choose Course Name')}}</label>
                                    <select class="text-capitalize custom-select" name="course_name" id="coursename">
                                        @foreach($course as $id =>$value)
                                            <option value="{{ $value->course_name }}">{{ $value->course_name }} - {{$value->course_code}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="coursecode">{{__('Choose Course Code')}}</label>
                                    <select class="text-capitalize custom-select" name="course_code" id="coursecode">
                                        @foreach($course as $id =>$value)
                                            <option value="{{ $value->course_code }}">{{ $value->course_name }} - {{$value->course_code}}</option>
                                        @endforeach
                                    </select>
                                </div>


                                <button type="submit" class="btn btn-primary btn-lg text-uppercase">
                                    <span class="fa fa-upload mr-1"></span>
                                    {{ __('Submit Selection') }}
                                </button>
                            </form>

                        </div>

                    </div>
                </div>
            </div>

        </div>





    </div>
    <!-- /.content -->
</div>
