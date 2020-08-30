<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Course Create</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="">Home</a></li>
                        <li class="breadcrumb-item active"> Course </li>
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
                            <div class="d-block text-uppercase card-title">{{ __('Add New Course') }}</div>
                        </div>
                        <div class="card-body">
                            <form action="{{route('course.store')}}" method="post" >
                                @csrf

                                <div class="form-group">
                                    <div class="form-label-group">
                                        <input id="course_code" type="text" class="form-control @error('course_code') is-invalid @enderror" name="course_code" value="{{ old('course_code') }}" required autocomplete="course_code" autofocus>
                                        <label for="course_code" class="text-uppercase">{{ __('course-code') }}</label>
                                    </div>
                                    @error('course_code')
                                    <small class="invalid-feedback p-1 text-center d-block text-capitalize" role="alert">
                                        {{ $message }}
                                    </small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <div class="form-label-group">
                                        <input id="course_name" type="text" class="form-control @error('course_name') is-invalid @enderror" name="course_name" value="{{ old('course_name') }}" required autocomplete="course_name" autofocus>
                                        <label for="course_name" class="text-uppercase">{{ __('course-name') }}</label>
                                    </div>
                                    @error('course_name')
                                    <small class="invalid-feedback p-1 text-center d-block text-capitalize" role="alert">
                                        {{ $message }}
                                    </small>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg text-uppercase">
                                    <span class="fa fa-upload mr-1"></span>
                                    {{ __('Upload Course Record') }}
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
