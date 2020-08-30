<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> TheMSC Create-Application </title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="REAL/PNG" href="{{asset('image/output-onlinepngtools.png')}}" >
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <div class="align-self-center col-xl-4 col-lg-4 col-md-6 col-8 col-sm-8 m-auto py-5">
            <div class="card rounded shadow-lg" style="width: 350px;">
                <div class="card-header text-center font-weight-bold text-uppercase">
                    <strong class="d-block align-self-center">{{__('Application for Feedback or Other')}}</strong>
                </div>


                <form class="card-body" method="POST" action="{{route('feedback.store')}}">
                    @csrf

                    <div class="form-group">
                        <select class="text-uppercase custom-select" name="choose_type" id="choose_type">
                            <option selected>{{ __('choose-type') }}</option>
                            <option value="leave">leave</option>
                            <option value="short_leave">short-leave</option>
                            <option value="web_feedback">web-feedback</option>
                            <option value="faculty_feedback">faculty-feedback</option>
                            <option value="student_feedback">student-feedback</option>
                        </select>
                        {{--@error('choose_type')
                        <small class="invalid-feedback p-1 text-center d-block text-capitalize" role="alert">
                            {{ $message }}
                        </small>
                        @enderror--}}
                    </div>

                    <div class="form-group">
                        <div class="form-label-group">
                            <input id="full_name" type="text" class="form-control @error('full_name') is-invalid @enderror" name="full_name" value="{{ old('full_name') }}" required autocomplete="full_name" autofocus>
                            <label for="email" class="text-uppercase">{{ __('full-name') }}</label>
                        </div>
                        @error('full_name')
                        <small class="invalid-feedback p-1 text-center d-block text-capitalize" role="alert">
                            {{ $message }}
                        </small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <div class="form-label-group">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            <label for="email" class="text-uppercase">{{ __('e-mail') }}</label>
                        </div>
                        @error('email')
                        <small class="invalid-feedback p-1 text-center d-block text-capitalize" role="alert">
                            {{ $message }}
                        </small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <div class="form-label-group">
                            <input id="reg_no" type="text" class="form-control @error('reg_no') is-invalid @enderror" name="reg_no" value="{{ old('reg_no') }}" required autocomplete="reg_no" autofocus>
                            <label for="email" class="text-uppercase">{{ __('registration no') }}</label>
                        </div>
                        @error('reg_no')
                        <small class="invalid-feedback p-1 text-center d-block text-capitalize" role="alert">
                            {{ $message }}
                        </small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <div class="form-label-group">
                            <input id="subject" type="text" class="form-control @error('subject') is-invalid @enderror" name="subject" value="{{ old('subject') }}" required autocomplete="subject" autofocus>
                            <label for="subject" class="text-uppercase">{{ __('subject') }}</label>
                        </div>
                        @error('subject')
                        <small class="invalid-feedback p-1 text-center d-block text-capitalize" role="alert">
                            {{ $message }}
                        </small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <div class="form-label-group">
                            {{--<input id="inquiry" type="text" class="form-control @error('inquiry') is-invalid @enderror" name="inquiry" value="{{ old('inquiry') }}" required autocomplete="inquiry" autofocus>--}}
                            <textarea class="form-control pt-4 @error('inquiry') is-invalid @enderror" name="inquiry" required autocomplete="inquiry" autofocus id="inquiry" cols="" rows="5">{{old('inquiry')}}</textarea>
                            <label for="inquiry" class="text-uppercase" style="line-height: 0;color: #777777;">{{ __('inquiry') }}</label>
                        </div>
                        @error('inquiry')
                        <small class="invalid-feedback p-1 text-center d-block text-capitalize" role="alert">
                            {{ $message }}
                        </small>
                        @enderror
                    </div>

                    @if(session('msg_logout'))
                        <small class="alert alert-success p-1 text-center text-capitalize d-block" role="alert">
                            {{ session('msg_logout') }}
                        </small>
                    @endif

                    <div class="d-flex flex-wrap m-auto justify-content-center align-content-center">
                        <button type="submit" class="btn btn-primary">
                            <span class="fa fa-upload mr-1"></span>
                            {{ __('Submit') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
