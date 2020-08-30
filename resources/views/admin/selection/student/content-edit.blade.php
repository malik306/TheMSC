<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Carousel Edit</h1>
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

            <div class="row">
                <div class="col-md-7 col-sm-10 col-xl-5 col-lg-5">
                    <div class="card rounded">
                        <div class="card-header text-center h1 font-weight-bold">
                            <div class="d-block card-title text-uppercase">{{ __('Update Carousel') }}</div>
                        </div>
                        <div class="card-body">

                            <form action="{{route('carousel.update',$carousel->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <div class="form-label-group">
                                        <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ $carousel->title }}" required autocomplete="title" autofocus>
                                        <label for="title" class="text-uppercase">{{ __('title') }}</label>
                                    </div>
                                    @error('title')
                                    <small class="invalid-feedback p-1 text-center d-block text-capitalize" role="alert">
                                        {{ $message }}
                                    </small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <div class="form-label-group">
                                        {{--<input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ $carousel->description }}" required autocomplete="description" autofocus>--}}
                                        <textarea class="form-control pt-4 @error('description') is-invalid @enderror" name="description" required autocomplete="description" autofocus id="description" cols="" rows="5"></textarea>
                                        <label for="description" class="text-uppercase" style="line-height: 0;color: #777777;">{{ __('description') }}</label>
                                    </div>
                                    @error('description')
                                    <small class="invalid-feedback p-1 text-center d-block text-capitalize" role="alert">
                                        {{ $message }}
                                    </small>
                                    @enderror
                                </div>
                                <div class="input-group mb-3">
                                    <div class="custom-file">
                                        <input id="image" type="file" class="custom-file-input @error('image') is-invalid @enderror" name="image" value="{{ $carousel->image }}" required >
                                        <label for="image" class="text-uppercase custom-file-label">{{ __('Image') }}</label>
                                    </div>
                                    @error('image')
                                    <small class="invalid-feedback p-1 text-center d-block text-capitalize" role="alert">
                                        {{ $message }}
                                    </small>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg text-uppercase">
                                    <span class="fa fa-upload mr-1"></span>
                                    {{ __('Update Carousel Record') }}
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
