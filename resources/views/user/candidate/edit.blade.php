<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="REAL/PNG" href="{{asset('image/output-onlinepngtools.png')}}" >
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title> TheMSC-Applying for Admission or Vacancy</title>
</head>
<body>
{{--{{dd($user)}}--}}
<div class="container py-5 my-5">
    <div class="card rounded w-50 m-auto">
        <div class="card-header p-3">Candidate Login Info</div>
            <form action="{{ route('user.update',$candidate->id )}}" method="post" enctype="multipart/form-data" class="card-body">
                    @csrf
                    @method('PUT')

                <div class="d-block p-2 mb-2 border border-success rounded">
                    <div class="d-block font-weight-bold">CNIC</div>
                    {{ $candidate->cnic }}
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $candidate->email }}" autocomplete="email" autofocus>
                        <label for="email" class="text-uppercase">{{ __('email') }}</label>
                    </div>
                    @error('email')
                    <small class="invalid-feedback p-1 text-center d-block text-capitalize" role="alert">
                        {{ $message }}
                    </small>
                    @enderror
                </div>

                <div class="form-group">
                    <div class="d-flex flex-nowrap border border-success rounded pt-2">
                        <div class="custom-control custom-radio">
                            <input type="radio" id="user_role_student" name="user_role" value="student">
                            <label for="user_role_student" class="ml-1">Student Role</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="user_role_employee" name="user_role" value="employee">
                            <label for="user_role_employee" class="ml-1">Employee Role</label>
                        </div>
                    </div>
                    @error('user_role')
                    <small class="invalid-feedback p-1 text-center d-block text-capitalize" role="alert">
                        {{ $message }}
                    </small>
                    @enderror
                </div>

                {{--
                <div class="form-group">
                    <select class="text-capitalize custom-select" name="user_role" id="user_role">
                        <option selected>{{ __('choose User Role') }}</option>
                        <option value="student">student</option>
                        <option value="faculty">faculty</option>
                    </select>
                </div>

                        <div class="input-group mb-3">
                            <div class="custom-file">
                                <input type="file" id="image" name="image" required class="custom-file-input @error('image') is-invalid @enderror" value="{{ $candidate->image }}">
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
                                <textarea id="objective" cols="" rows="5"  class="form-control pt-4 @error('objective') is-invalid @enderror" name="objective" required>  </textarea>
                                <label for="objective" class="text-uppercase" style="line-height: 0;color: #777777;">{{ __('objective') }}</label>
                            </div>
                            @error('objective')
                            <small class="invalid-feedback p-1 text-center d-block text-capitalize" role="alert">
                                {{ $message }}
                            </small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <div class="form-label-group">
                                <input id="full_name" type="text" class="form-control @error('full_name') is-invalid @enderror" name="full_name" value="{{$candidate->full_name }}" required autocomplete="full_name" autofocus>
                                <label for="full_name" class="text-uppercase">{{ __('full name') }}</label>
                            </div>
                            @error('full_name')
                            <small class="invalid-feedback p-1 text-center d-block text-capitalize" role="alert">
                                {{ $message }}
                            </small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <div class="form-label-group">
                                <input id="father_name" type="text" class="form-control @error('father_name') is-invalid @enderror" name="father_name" value="{{ $candidate->father_name }}" required autocomplete="father_name" autofocus>
                                <label for="father_name" class="text-uppercase">{{ __('father name') }}</label>
                            </div>
                            @error('father_name')
                            <small class="invalid-feedback p-1 text-center d-block text-capitalize" role="alert">
                                {{ $message }}
                            </small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <div class="form-label-group">
                                <input id="date_of_birth" type="date" class="form-control @error('date_of_birth') is-invalid @enderror" name="date_of_birth" value="{{ $candidate->date_of_birth }}" required autocomplete="date_of_birth" autofocus>
                                <label for="date_of_birth" class="text-uppercase">{{ __('date of birth') }}</label>
                            </div>
                            @error('date_of_birth')
                            <small class="invalid-feedback p-1 text-center d-block text-capitalize" role="alert">
                                {{ $message }}
                            </small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <div class="form-label-group">
                                <input id="domicile" type="text" class="form-control @error('religion') is-invalid @enderror" name="religion" value="{{ $candidate->religion }}" required autocomplete="religion" autofocus>
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
                                <input id="domicile" type="text" class="form-control @error('domicile') is-invalid @enderror" name="domicile" value="{{ $candidate->domicile }}" required autocomplete="domicile" autofocus>
                                <label for="domicile" class="text-uppercase">{{ __('domicile') }}</label>
                            </div>
                            @error('domicile')
                            <small class="invalid-feedback p-1 text-center d-block text-capitalize" role="alert">
                                {{ $message }}
                            </small>
                            @enderror
                        </div>



                        <div class="form-group">
                            <select class="text-capitalize custom-select" name="gender" id="gender">
                                <option selected>{{ __('choose gender') }}</option>
                                <option value="male">male</option>
                                <option value="female">female</option>
                            </select>
                        </div>

                <div class="form-group">
                    <select class="text-capitalize custom-select" name="post" id="post">
                        <optgroup label="Apply For Admission">
                            <option selected>Choose For Post</option>
                            <option value="admission">Admission</option>
                        </optgroup>
                        <optgroup label="Apply For Vacancy">
                            <option value="chemistry"> Chemistry </option>
                            <option value="biology">Biology</option>
                            <option value="english">English</option>
                            <option value="physics">Physics</option>
                            <option value="mathematics">Mathematics</option>
                            <option value="urdu">Urdu</option>
                        </optgroup>
                    </select>
                </div>

                        <div class="form-group">
                            <div class="form-label-group">
                                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ $candidate->phone }}" required autocomplete="phone" autofocus>
                                <label for="phone" class="text-uppercase">{{ __('phone') }}</label>
                            </div>
                            @error('phone')
                            <small class="invalid-feedback p-1 text-center d-block text-capitalize" role="alert">
                                {{ $message }}
                            </small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <select name="province" id="province" class="custom-select text-capitalize">
                                <option selected>choose province</option>
                                <option value="Punjab">punjab</option>
                                <option value="Sindh">sindh</option>
                                <option value="NWFP">NWFP</option>
                                <option value="Balochistan">balochistan</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <div class="form-label-group">
                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ $candidate->address }}" required autocomplete="address" autofocus>
                                <label for="address" class="text-uppercase">{{ __('address') }}</label>
                            </div>
                            @error('address')
                            <small class="invalid-feedback p-1 text-center d-block text-capitalize" role="alert">
                                {{ $message }}
                            </small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <div class="form-label-group">
                                <input id="nationality" type="text" class="form-control @error('nationality') is-invalid @enderror" name="nationality" value="{{ $candidate->nationality }}" required autocomplete="nationality" autofocus>
                                <label for="nationality" class="text-uppercase">{{ __('nationality') }}</label>
                            </div>
                            @error('nationality')
                            <small class="invalid-feedback p-1 text-center d-block text-capitalize" role="alert">
                                {{ $message }}
                            </small>
                            @enderror
                        </div>--}}

                <button type="submit" class="btn-outline-primary btn">{{__('Save & Next')}} </button>
            </form>

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
