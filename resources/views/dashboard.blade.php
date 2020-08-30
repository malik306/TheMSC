@auth
    @if(Auth::user()->user_role == 'admin' && Auth::user()->status == 1)
        @includeIf('admin.admin-dashboard')
    @elseif(Auth::user()->user_role == 'employee' && Auth::user()->status == 1)
        @includeIf('employee.faculty-dashboard')
    @elseif(Auth::user()->user_role == 'student' && Auth::user()->status == 1)
        @includeIf('student.student-dashboard')
    @endif
@endauth
