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

<div class="container py-5">
    <div class="card rounded w-50 m-auto">
        <div class="card-header">Candidate Profile</div>
        <div class="card-body">
            <form action="{{route('profile.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="user_id" value="{{$AuthID}}">
                <div class="form-group">
                    <div class="form-label-group">
                        <input id="full_name" type="text" class="form-control @error('full_name') is-invalid @enderror" name="full_name" value="{{ old('full_name') }}"  autocomplete="full_name" autofocus>
                        <label for="full_name" class="text-uppercase">{{ __('full_name') }}</label>
                    </div>
                    @error('full_name')
                    <small class="invalid-feedback p-1 text-center d-block text-capitalize" role="alert">
                        {{ $message }}
                    </small>
                    @enderror
                </div>


                <div class="form-group">
                    <div class="form-label-group">
                        <input id="father_name" type="text" class="form-control @error('father_name') is-invalid @enderror" name="father_name" value="{{ old('father_name') }}"  autocomplete="father_name" autofocus>
                        <label for="father_name" class="text-uppercase">{{ __('father_name') }}</label>
                    </div>
                    @error('father_name')
                    <small class="invalid-feedback p-1 text-center d-block text-capitalize" role="alert">
                        {{ $message }}
                    </small>
                    @enderror
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <textarea id="objective" rows="5" class="form-control pt-4 @error('objective') is-invalid @enderror" name="objective">{{old('objective')}}</textarea>
                        <label for="objective" class="text-uppercase" style="line-height: 0;color: #777777;">{{ __('objective') }}</label>
                    </div>
                    @error('objective')
                    <small class="invalid-feedback p-1 text-center d-block text-capitalize" role="alert">
                        {{ $message }}
                    </small>
                    @enderror
                </div>

                <div class="input-group mb-3">
                        <div class="custom-file">
                            <input type="file" id="image" name="image"  class="custom-file-input @error('image') is-invalid @enderror">
                            <label class="custom-file-label text-capitalize" for="image">Choose Image file</label>
                        </div>
                        @error('image')
                        <small class="invalid-feedback p-1 text-center d-block text-capitalize" role="alert">
                            {{ $message }}
                        </small>
                        @enderror
                    </div>

                <div class="form-group">
                    <div class="form-label-group">
                        <input id="date_of_birth" type="date" class="form-control @error('date_of_birth') is-invalid @enderror" name="date_of_birth" value="{{ old('date_of_birth') }}"  autocomplete="date_of_birth" autofocus>
                        <label for="date_of_birth" class="text-uppercase">{{ __('date_of_birth') }}</label>
                    </div>
                    @error('date_of_birth')
                    <small class="invalid-feedback p-1 text-center d-block text-capitalize" role="alert">
                        {{ $message }}
                    </small>
                    @enderror
                </div>

                <div class="form-group">
                    <div class="form-label-group">
                        <input id="religion" type="text" class="form-control @error('religion') is-invalid @enderror" name="religion" value="{{ old('religion') }}"  autocomplete="religion" autofocus>
                        <label for="religion" class="text-uppercase">{{ __('religion') }}</label>
                    </div>
                    @error('religion')
                    <small class="invalid-feedback p-1 text-center d-block text-capitalize" role="alert">
                        {{ $message }}
                    </small>
                    @enderror
                </div>

                <div class="form-group">
                    <div class="form-label-group">
                        <input id="domicile" type="text" class="form-control @error('domicile') is-invalid @enderror" name="domicile" value="{{ old('domicile') }}"  autocomplete="domicile" autofocus>
                        <label for="domicile" class="text-uppercase">{{ __('domicile') }}</label>
                    </div>
                    @error('domicile')
                    <small class="invalid-feedback p-1 text-center d-block text-capitalize" role="alert">
                        {{ $message }}
                    </small>
                    @enderror
                </div>

                <div class="form-group">
                    <div class="form-label-group">
                        <input id="nationality" type="text" class="form-control @error('nationality') is-invalid @enderror" name="nationality" value="{{ old('nationality') }}"  autocomplete="nationality" autofocus>
                        <label for="nationality" class="text-uppercase">{{ __('nationality') }}</label>
                    </div>
                    @error('nationality')
                    <small class="invalid-feedback p-1 text-center d-block text-capitalize" role="alert">
                        {{ $message }}
                    </small>
                    @enderror
                </div>

                <div class="form-group">
                    <div class="form-label-group">
                        <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}"  autocomplete="phone" autofocus>
                        <label for="phone" class="text-uppercase">{{ __('phone') }}</label>
                    </div>
                    @error('phone')
                    <small class="invalid-feedback p-1 text-center d-block text-capitalize" role="alert">
                        {{ $message }}
                    </small>
                    @enderror
                </div>

                <div class="form-group">
                    <div class="form-label-group">
                        <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}"  autocomplete="address" autofocus>
                        <label for="address" class="text-uppercase">{{ __('address') }}</label>
                    </div>
                    @error('address')
                    <small class="invalid-feedback p-1 text-center d-block text-capitalize" role="alert">
                        {{ $message }}
                    </small>
                    @enderror
                </div>


                <div class="form-group">
                    <label for="gender">{{__('Choose Gender')}}</label>
                    <select class="text-capitalize custom-select" name="gender" id="gender">
                        @foreach($gender as $value)
                                <option value="{{ $value->title }}">{{ $value->title }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="post">{{__('Choose Post')}}</label>
                    <select class="text-capitalize custom-select" name="post" id="post">
                        @foreach($post as $value)
                            <option value="{{ $value->title }}">{{ $value->title }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="province">{{__('Choose Province')}}</label>
                    <select class="text-capitalize custom-select" name="province" id="province">
                        @foreach($province as $value)
                            <option value="{{ $value->title }}">{{ $value->title }}</option>
                        @endforeach
                    </select>
                </div>

                <button class="btn-outline-success btn" type="submit">{{__('Save & Next')}} </button>
            </form>

        </div>
    </div>
</div>


<script src="{{asset('js/app.js')}}"></script>

<script type="text/javascript">
    $(".custom-file-input").on("change", function() {
        let fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
</script>
</body>
</html>
