{{--
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="REAL/PNG" href="{{asset('image/output-onlinepngtools.png')}}" >
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>TheMSC-Apply-Admissions</title>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <div class="align-self-center col-xl-4 col-lg-4 col-md-6 col-8 col-sm-8 m-auto py-5">

            --}}


<div class="modal fade bd-example-modal-sm" id="afva" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="afa"> Login with CNIC </h5>
                <button type="button" class="close fas fa-times" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
                <form class="modal-body" method="POST" action="{{route('c-login')}}">
                    @csrf

                    <div class="form-group">
                        <div class="form-label-group">
                            <input id="cnic1" type="text" class="form-control @error('cnic') is-invalid @enderror" name="cnic" value="{{ old('cnic') }}" required autocomplete="cnic" autofocus>
                            <label for="cnic1" class="text-uppercase">{{ __('cnic') }}</label>
                        </div>
                        @error('cnic')
                        <small class="invalid-feedback p-1 text-center d-block" role="alert">
                            {{ $message }}
                        </small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <div class="form-label-group">
                            <input id="password1" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{old('password')}}" required autocomplete="password" autofocus>
                            <label for="password1" class="text-uppercase">{{ __('password') }}</label>
                        </div>
                        @error('password')
                        <small class="invalid-feedback p-1 text-center d-block" role="alert">
                            {{ $message }}
                        </small>
                        @enderror
                    </div>
{{--
                    @if(session('msg_logout'))
                        <small class="alert alert-success p-1 text-center text-capitalize d-block" role="alert">
                            {{ session('msg_logout') }}
                        </small>
                    @endif
--}}
                    <div class="d-flex flex-wrap justify-content-center align-content-center modal-footer">
                        <button type="submit" class="btn btn-primary">
                            <span class="fa fa-sign-in-alt mr-1"></span>
                            {{ __('Sign-In') }}
                        </button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
</div>
</div>

            {{--

        </div>
    </div>
</div>

<script src="{{asset('js/app.js')}}"></script>

</body>
</html>
--}}
