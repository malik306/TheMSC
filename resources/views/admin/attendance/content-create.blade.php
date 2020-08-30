<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Employee Attendance Create</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="">Home</a></li>
                        <li class="breadcrumb-item active"> Employee Attendance </li>
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
                        <div class="card-header text-center h1 font-weight-bold">
                            <div class="d-block text-uppercase card-title">{{ __('Add New Employee attendance') }}</div>
                        </div>
                        <div class="card-body">
                            <form action="{{route('attendance.store')}}" method="POST" >

                                @csrf
                                <div class="row">
                                    <div class="col-md-8 col-sm-11 col-xl-6 col-lg-6 col-11">
                                        <div class="form-group" style="right: 0;">
                                            <div class="form-label-group">
                                                <input id="date" type="date" class="form-control w-50 @error('date') is-invalid @enderror" name="date"  required>
                                                <label for="date" class="text-uppercase">{{ __('attendance date') }}</label>
                                            </div>
                                            @error('date')
                                            <small class="invalid-feedback p-1 text-center d-block text-capitalize" role="alert">
                                                {{ $message }}
                                            </small>
                                            @enderror
                                        </div>
                                        <div class="form-group" style="right: 0;">
                                            <div class="form-label-group">
                                                <input id="topic" type="text" class="form-control w-50 @error('topic') is-invalid @enderror" name="topic"  >
                                                <label for="topic" class="text-uppercase">{{ __('Topic') }}</label>
                                            </div>
                                            @error('topic')
                                            <small class="invalid-feedback p-1 text-center d-block text-capitalize" role="alert">
                                                {{ $message }}
                                            </small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <table class="table text-uppercase table-bordered table-hover table-responsive-xl table-responsive-lg table-responsive-sm table-responsive-md table-responsive">
                                    <thead class="thead-light">
                                    <tr class="text-capitalize text-center">
                                        <th>ID</th>
                                        <th> User-Name </th>
                                        <th > Name</th>
                                        <th>
                                            {{__('status P/A')}}
                                        </th>
                                        <th>Comment</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php($no=1)
                                    @foreach($user as $users)

                                        <tr>
                                            <td>{{$no++}}
                                                <input type="hidden" name="profile_id" value="{{$users->profile->id}}" >
                                            </td>
                                            <td>
                                                {{$users->user_name}}
                                            </td>
                                            <td>
                                                {{$users->profile->full_name}}

                                                <span class="px-1 d-inline-block">
                                                    {{$users->profile->gender=='male' ? "S/O" : "D/O"}}
                                                </span>

                                                {{$users->profile->father_name}}
                                            </td>
                                            <td class="form-group">
                                                    <div class="form-check-inline">
                                                        <label class="form-check-label">
                                                            <input type="radio" class="form-check-input" name="present[{{$users->profile->id}}]" value="P">P
                                                        </label>
                                                    </div>
                                                    <div class="form-check-inline">
                                                        <label class="form-check-label">
                                                            <input type="radio" class="form-check-input" name="present[{{$users->profile->id}}]" value="A">A
                                                        </label>
                                                    </div>
                                                <div class="form-check-inline">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-check-input" name="present[{{$users->profile->id}}]" value="L">L
                                                    </label>
                                                </div>
                                                <div class="form-check-inline">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-check-input" name="present[{{$users->profile->id}}]" value="Sl">SL
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <label class="form-label-group">
                                                        <input type="text" class="form-control @error('comment') is-invalid @enderror" name="comment"  >
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <button type="submit" class="btn btn-primary btn-lg text-uppercase mt-3">
                                    <span class="fa fa-upload mr-1"></span>
                                    {{ __('Submit attendance') }}
                                </button>
                            </form>

                        </div>

                    </div>
        </div>





    </div>
    <!-- /.content -->
</div>
