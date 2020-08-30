<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Series Edit</h1>
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

            <div class="row">
                <div class="col-md-7 col-sm-10 col-xl-5 col-lg-5">
                    <div class="card rounded">
                        <div class="card-header text-center h1 font-weight-bold">
                            <div class="d-block card-title text-uppercase">{{ __('Update Series') }}</div>
                        </div>
                        <div class="card-body">

                            <form action="{{route('series.update',$seriestitle->id)}}" method="post" >
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <div class="form-label-group">
                                        <input id="seriestitle" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ $seriestitle->title }}" required autocomplete="title" autofocus>
                                        <label for="seriestitle" class="text-uppercase">{{ __('Series') }}</label>
                                    </div>
                                    @error('title')
                                    <small class="invalid-feedback p-1 text-center d-block text-capitalize" role="alert">
                                        {{ $message }}
                                    </small>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg text-uppercase">
                                    <span class="fa fa-upload mr-1"></span>
                                    {{ __('Update Series Record') }}
                                </button>
                            </form>

                        </div>

                    </div>
                </div>
            </div>



        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
