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

<div class="container">
    <div class="card rounded">
        <div class="card-header">Candidate Experience</div>
        <div class="card-body">
            <form action="{{route('experience.update',$experience->id)}}" method="post">
                @csrf
                @method('PUT')
                <input type="hidden" name="profile_id" value="{{ $ProfileID->id }}">
                <div class="form-group">
                    <div class="form-label-group">
                        <input id="organization" type="text" class="form-control @error('organization') is-invalid @enderror" name="organization" value="{{ $experience->organization }}" required autocomplete="organization" autofocus>
                        <label for="organization" class="text-uppercase">{{ __('organization') }}</label>
                    </div>
                    @error('organization')
                    <small class="invalid-feedback p-1 text-center d-block text-capitalize" role="alert">
                        {{ $message }}
                    </small>
                    @enderror
                </div>

                <div class="form-group">
                    <div class="form-label-group">
                        <input id="designation" type="text" class="form-control @error('designation') is-invalid @enderror" name="designation" value="{{ $experience->designation }}" required autocomplete="designation" autofocus>
                        <label for="designation" class="text-uppercase">{{ __('designation') }}</label>
                    </div>
                    @error('designation')
                    <small class="invalid-feedback p-1 text-center d-block text-capitalize" role="alert">
                        {{ $message }}
                    </small>
                    @enderror
                </div>

                <div class="form-group">
                    <div class="form-label-group">
                        <input id="grade" type="text" class="form-control @error('grade') is-invalid @enderror" name="grade" value="{{ $experience->grade }}" required autocomplete="grade" autofocus>
                        <label for="grade" class="text-uppercase">{{ __('grade') }}</label>
                    </div>
                    @error('grade')
                    <small class="invalid-feedback p-1 text-center d-block text-capitalize" role="alert">
                        {{ $message }}
                    </small>
                    @enderror
                </div>

                <div class="form-group">
                    <select class="text-capitalize custom-select" name="exp_type" id="exp_type">
                        <option selected>{{ __('experience type') }}</option>
                        <option value="govt">govt</option>
                        <option value="semi govt">semi govt</option>
                        <option value="private">private</option>
                    </select>
                </div>

                <div class="form-group">
                    <div class="form-label-group">
                        <input id="start_date" type="date" class="form-control @error('start_date') is-invalid @enderror" name="start_date" value="{{ $experience->start_date }}" required autocomplete="start_date" autofocus>
                        <label for="start_date" class="text-uppercase">{{ __('start date') }}</label>
                    </div>
                    @error('start_date')
                    <small class="invalid-feedback p-1 text-center d-block text-capitalize" role="alert">
                        {{ $message }}
                    </small>
                    @enderror
                </div>

                <div class="form-group">
                    <div class="form-label-group">
                        <input id="end_date" type="date" class="form-control @error('end_date') is-invalid @enderror" name="end_date" value="{{ $experience->end_date }}" required autocomplete="end_date" autofocus>
                        <label for="end_date" class="text-uppercase">{{ __('end date') }}</label>
                    </div>
                    @error('end_date')
                    <small class="invalid-feedback p-1 text-center d-block text-capitalize" role="alert">
                        {{ $message }}
                    </small>
                    @enderror
                </div>

                {{--<div class="form-group">
                    <div class="form-label-group">
                        <input id="duration" type="date" class="form-control @error('duration') is-invalid @enderror" name="duration" value="{{ $experience->duration }}" required autocomplete="duration" autofocus>
                        <label for="duration" class="text-uppercase">{{ __('duration') }}</label>
                    </div>
                    @error('duration')
                    <small class="invalid-feedback p-1 text-center d-block text-capitalize" role="alert">
                        {{ $message }}
                    </small>
                    @enderror
                </div>--}}

                <button class="btn-outline-success btn" type="submit">{{__('Save & Next')}} </button>
            </form>

        </div>
    </div>
</div>


<script src="{{asset('js/app.js')}}"></script>

</body>
</html>
