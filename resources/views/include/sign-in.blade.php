<div class="container">
    <div class="row vh-100">
        <div class="align-self-center col-xl-4 col-lg-4 col-md-6 col-8 col-sm-8 m-auto">
            <div class="card rounded shadow-lg" style="width: 350px;">
                <div class="card-header d-flex flex-column font-weight-bold">
                    <div class="fab fa-cpanel fa-5x align-self-center d-block"></div>
                    <img src="{{asset('image/undrawprofilepic.svg')}}" alt="" style="width: 30%;" class="d-block align-self-center h-auto">
                    {{--<div class="d-block">
                    </div>--}}
                </div>
                <form class="card-body" method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group">
                        <div class="form-label-group">
                            <input id="user_name" type="text" class="form-control @error('user_name') is-invalid @enderror" name="user_name" value="{{ old('user_name') }}" required autocomplete="user_name" autofocus>
                            <label for="user_name" class="text-uppercase">{{ __('User-Name') }}</label>
                        </div>
                        @error('user_name')
                        <small class="invalid-feedback p-1 text-center d-block text-capitalize" role="alert">
                            {{ $message }}
                        </small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <div class="form-label-group">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            <label for="password" class="text-uppercase">{{ __('Password') }}</label>
                        </div>
                        @error('password')
                        <small class="invalid-feedback p-1 text-center text-capitalize d-block" role="alert">
                            {{ $message }}
                        </small>
                        @enderror
                    </div>
                    @if (session('error'))
                        <small class="alert alert-danger p-1 text-center text-capitalize d-block" role="alert">
                            {{ session('error') }}
                        </small>
                    @endif
                    <div class="form-group row mb-0 p-1 ">
                        <div class="d-flex flex-wrap m-auto justify-content-center align-content-center">
                            <button type="submit" class="btn btn-primary">
                                <span class="fa fa-sign-in-alt mr-1"></span>
                                {{ __('Sign-In') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
