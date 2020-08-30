<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Student Edit</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="">Home</a></li>
                        <li class="breadcrumb-item active"> Student </li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">


            <div class="card rounded">
                <div class="card-header p-3">Student Personal Info</div>
                <form action="{{ route('student.update',$user->id )}}" method="post" enctype="multipart/form-data" class="card-body">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <div class="form-label-group">
                            <input class="form-control" name="cnic" id="cnic" type="text" value="{{ $user->cnic }}" >
                            <label for="cnic" class="text-uppercase">{{ __('cnic') }}</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="series_id">{{__('Choose Series')}}</label>
                        <select class="text-uppercase custom-select" name="series_id" id="series_id">
                            @foreach($series as $value)
                                    <option value="{{ $value->id }}">{{ $value->title }}</option>
                            @endforeach
                        </select>
                    </div>


                    <div class="form-group">
                        <div class="d-flex flex-nowrap">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="status_en" name="status" value="1"  @if(old('1',$user->status)=='1') checked @endif>
                                <label for="status_en">Enable</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="status_dis" name="status" value="0"  @if(old('0',$user->status)=='0') checked @endif>
                                <label for="status_dis">Disable</label>
                            </div>
                        </div>
                        @error('status')
                        <small class="invalid-feedback p-1 text-center d-block text-capitalize" role="alert">
                            {{ $message }}
                        </small>
                        @enderror
                    </div>


                    <div class="form-group">
                        <div class="form-label-group">
                            <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email" autofocus>
                            <label for="email" class="text-uppercase">{{ __('email') }}</label>
                        </div>
                        @error('email')
                        <small class="invalid-feedback p-1 text-center d-block text-capitalize" role="alert">
                            {{ $message }}
                        </small>
                        @enderror
                    </div>

{{--
                    <div class="form-group">
                        <label for="user_role">{{__('Choose User Role')}}</label>
                        <select class="text-capitalize custom-select" name="user_role" id="user_role">
                            @foreach($role as $id =>$value)

                                @if(old('student',$user->user_role) == $value->title )
                                    <option value="{{ $value->title }}" selected >{{ $value->title }}</option>
                                @elseif(old('student',$user->user_role) == $value->title )
                                    <option value="{{ $value->title }}" selected >{{ $value->title }}</option>
                                @else
                                    <option value="{{ $value->title }}">{{ $value->title }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>--}}


                    <button type="submit" class="btn-outline-primary btn">{{__('Submit')}} </button>
                </form>

            </div>



        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
