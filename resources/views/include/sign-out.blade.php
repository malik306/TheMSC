<a class="nav-link" href="{{ route('logout') }}"
       onclick="event.preventDefault();
       document.querySelector('#logout-form').submit();">
    <span class="fa fa-sign-out-alt fa-2x d-lg-none d-md-none d-xl-block d-sm-none d-none"></span>
    <span class="d-block">{{ __('Sign-Out') }}</span>
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>

