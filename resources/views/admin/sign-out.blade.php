
<a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();
       document.querySelector('#logout-form').submit();" >
    <i class="nav-icon fa fa-sign-out-alt"></i>
    <p>
        Sign-Out
        <span class="right badge badge-red-3">New</span>
    </p>
</a>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>
