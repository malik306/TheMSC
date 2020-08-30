<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Class Create</h1>
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
            <div class="row">
                <div class="col-md-7 col-sm-10 col-xl-5 col-lg-5">
                    <div class="card rounded">
                        <div class="card-header text-center h1 font-weight-bold">
                            <div class="d-block text-uppercase card-title">{{ __('Add New Class') }}</div>
                        </div>
                        <div class="card-body">
                            <form action="{{route('class.store')}}" method="post" >
                                @csrf

                                <div class="form-group">
                                    <div class="form-label-group">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                        <label for="name" class="text-uppercase">{{ __('Name') }}</label>
                                    </div>
                                    @error('name')
                                    <small class="invalid-feedback p-1 text-center d-block text-capitalize" role="alert">
                                        {{ $message }}
                                    </small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <div class="form-label-group">
                                        <input id="division" type="text" class="form-control @error('division') is-invalid @enderror" name="division" value="{{ old('division') }}" required autocomplete="division" autofocus>
                                        <label for="division" class="text-uppercase">{{ __('Division') }}</label>
                                    </div>
                                    @error('division')
                                    <small class="invalid-feedback p-1 text-center d-block text-capitalize" role="alert">
                                        {{ $message }}
                                    </small>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg text-uppercase">
                                    <span class="fa fa-upload mr-1"></span>
                                    {{ __('Upload Class Record') }}
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
