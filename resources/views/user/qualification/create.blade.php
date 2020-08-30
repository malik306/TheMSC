<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="REAL/PNG" href="{{asset('image/output-onlinepngtools.png')}}" >
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title> TheMSC-Applying for Admission</title>
</head>
<body>

<div class="container my-5">
    <div class="card rounded w-50 m-auto">
        <div class="card-header">Candidate Qualification</div>
        <div class="card-body">
            <form action="{{route('qualification.store')}}" method="post">
                @csrf
                <input type="hidden" name="profile_id" value="{{$ProfileID->id}}">
                <div class="form-group">
                    <div class="form-label-group">
                        <input id="degree" type="text" class="form-control @error('degree') is-invalid @enderror" name="degree" value="{{ old('degree') }}"  autocomplete="degree" autofocus>
                        <label for="degree" class="text-uppercase">{{ __('degree') }}</label>
                    </div>
                    @error('degree')
                    <small class="invalid-feedback p-1 text-center d-block text-capitalize" role="alert">
                        {{ $message }}
                    </small>
                    @enderror
                </div>


                <div class="form-group">
                    <div class="form-label-group">
                        <input id="pass_year" type="month" class="form-control @error('pass_year') is-invalid @enderror" name="pass_year" value="{{ old('pass_year') }}"  autocomplete="pass_year" autofocus>
                        <label for="pass_year" class="text-uppercase">{{ __('passing year') }}</label>
                    </div>
                    @error('pass_year')
                    <small class="invalid-feedback p-1 text-center d-block text-capitalize" role="alert">
                        {{ $message }}
                    </small>
                    @enderror
                </div>

                <div class="form-group">
                    <div class="form-label-group">
                        <input id="university_board" type="text" class="form-control @error('university_board') is-invalid @enderror" name="university_board" value="{{ old('university_board') }}"  autocomplete="university_board" autofocus>
                        <label for="university_board" class="text-uppercase">{{ __('university board') }}</label>
                    </div>
                    @error('university_board')
                    <small class="invalid-feedback p-1 text-center d-block text-capitalize" role="alert">
                        {{ $message }}
                    </small>
                    @enderror
                </div>

                <div class="form-group">
                    <div class="form-label-group">
                        <input id="institution" type="text" class="form-control @error('institution') is-invalid @enderror" name="institution" value="{{ old('institution') }}"  autocomplete="institution" autofocus>
                        <label for="institution" class="text-uppercase">{{ __('institution') }}</label>
                    </div>
                    @error('institution')
                    <small class="invalid-feedback p-1 text-center d-block text-capitalize" role="alert">
                        {{ $message }}
                    </small>
                    @enderror
                </div>


                <div class="form-group">
                    <div class="form-label-group">
                        <input id="grade" type="text" class="form-control @error('grade') is-invalid @enderror" name="grade" value="{{ old('grade') }}"  autocomplete="grade" autofocus>
                        <label for="grade" class="text-uppercase">{{ __('grade') }}</label>
                    </div>
                    @error('grade')
                    <small class="invalid-feedback p-1 text-center d-block text-capitalize" role="alert">
                        {{ $message }}
                    </small>
                    @enderror
                </div>

                <button class="btn btn-outline-success" type="submit">{{__('Save & Next')}} </button>
            </form>
        </div>
    </div>
</div>


<script src="{{asset('js/app.js')}}"></script>

</body>
</html>
