<a href="{{ route('c-logout') }}"
       onclick="event.preventDefault();
       document.querySelector('#logout-form').submit();" class="text-green">
    <span class="fa fa-sign-out-alt fa-2x d-lg-none d-md-none d-xl-inline-block d-sm-none d-none"></span>
    <span>{{ __('Sign-Out') }}</span>
    </a>
    <form id="logout-form" action="{{ route('c-logout') }}" method="POST" style="display: none;">
        @csrf
    </form>

