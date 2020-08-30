<nav class="navbar navbar-expand-xl navbar-light bg-light">
    <a class="navbar-brand" href="/admin">
        <img src="{{ asset('image/output-onlinepngtools.png') }}" width="100" height="auto">
        <span class="sr-only">(current)</span>
    </a>
    <button class="navbar-toggler fa fa-bars" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">   </button>
    <div class="collapse  navbar-collapse" id="navbarTogglerDemo01">

        <ul class="navbar-nav text-uppercase mr-auto h6 mt-2 mt-lg-0 text-center">
            <li class="nav-item active">
                <a class="nav-link" href="/admin">
                    <span class="fas fa-home fa-2x d-lg-none d-md-none d-xl-block d-sm-none d-none"></span>
                    <span class="d-block">{{__('Dashboard')}}</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('class.index')}}">
                    <span class="fa fa-desktop  fa-2x d-lg-none d-md-none d-xl-block  d-none d-sm-none"></span>
                    <span class="d-block">{{__('Class')}}</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('course.index')}}">
                    <span class="fa fa-file-code fa-2x d-lg-none d-md-none d-xl-block d-sm-none d-none"></span>
                    <span class="d-block">{{__('Subject')}}</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="" >
                    <span class="fa fa-user-alt fa-2x d-lg-none d-md-none d-xl-block d-sm-none d-none"></span>
                    <span class="d-block">{{__('Student')}}</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">
                    <span class="fa fa-user-graduate fa-2x d-lg-none d-md-none d-xl-block d-sm-none d-none"></span>
                    <span class="d-block">{{__('Employee')}}</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">
                    <span class="fa fa-table fa-2x d-lg-none d-md-none d-xl-block d-sm-none d-none"></span>
                    <span class="d-block">{{__('Time Table')}}</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">
                    <span class="fa fa-business-time fa-2x d-lg-none d-md-none d-xl-block d-sm-none d-none"></span>
                    <span class="d-block">{{__('attendance')}}</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">
                    <span class="fa fa-bullhorn fa-2x d-lg-none d-md-none d-xl-block d-sm-none d-none"></span>
                    <span class="d-block">{{__('Notification')}}</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">
                    <span class="fa fa-receipt fa-2x d-lg-none d-md-none d-xl-block d-sm-none d-none"></span>
                    <span class="d-block">{{__('Fee')}}</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">
                    <span class="fa fa-money-check-alt fa-2x d-lg-none d-md-none d-xl-block d-sm-none d-none"></span>
                    <span class="d-block">{{__('Income')}}</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">
                    <span class="fa fa-money-check-alt fa-2x d-lg-none d-md-none d-xl-block d-sm-none d-none"></span>
                    <span class="d-block">{{__('Expense')}}</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('carousel.index')}}" class="nav-link">
                    <span class="fa fa-image fa-2x d-lg-none d-md-none d-xl-block d-sm-none d-none"></span>
                    <span class="d-block">{{__('Image')}}</span>
                </a>
            </li>

            {{--
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="fa fa-money fa-2x d-lg-block d-md-block d-xl-block d-sm-none"></span>
                    <span class="d-block">{{__('Money')}}</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href=""><span class="d-block">{{__('Fee')}}</span></a>
                    <a class="dropdown-item" href=""><span class="d-block">{{__('Expense')}}</span></a>
                    <a class="dropdown-item" href=""><span class="d-block">{{__('Income')}}</span></a>
                </div>
            </li>
            --}}
            <li class="nav-item">
                @include('include.sign-out')
            </li>
        </ul>
    </div>
</nav>
