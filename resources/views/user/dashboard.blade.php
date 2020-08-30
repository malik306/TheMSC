@auth
    @if(Auth::guard('user')->attempt(['cnic' => $request->get('cnic'),'password' => $request->get('password')]))
        @includeIf('')
    @endif
@endauth
