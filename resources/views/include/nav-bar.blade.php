<nav class="navbar navbar-expand-lg navbar-light bg-light mb-2 px-2 border-orange-5 border-bottom">

    <a class="navbar-brand" href="{{url('/')}}">
        <img src="{{asset('image/onlinepngtools.png')}}" width="350" height="auto">
    </a>

    <button class="navbar-toggler fas fa-bars fa-2x border border-dark border-1" type="button" data-toggle="collapse" data-target="#themscnavbar"></button>
    <div class="collapse navbar-collapse" id="themscnavbar">

        <ul class="navbar-nav ml-auto text-center text-uppercase" >
            <li class="nav-item active">
                <a class="nav-link" href="#home" id="homelink">
                    <span class="d-lg-block d-md-none d-xl-block d-sm-none fa fa-home fa-2x d-none "></span>
                    <span class="d-block">Home</span>
                    <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#about" id="aboutlink">
                    <span class="fa fa-info-circle fa-2x d-lg-block d-md-none d-xl-block d-sm-none d-none"></span>
                    <span class="d-block">About-MSC</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#admission" id="admissionlink">
                    <span class="fa fa-graduation-cap fa-2x d-lg-block d-md-none d-xl-block d-sm-none d-none"></span>
                    <span class="d-block">Admissions</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#exam" id="examlink">
                    <span class="fa fa-book fa-2x d-lg-block d-md-none d-xl-block d-sm-none d-none"></span>
                    <span class="d-block">Examinations</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#apply" id="applylink">
                    <span class="fa fa-check-circle fa-2x d-lg-block d-md-none d-xl-block d-sm-none d-none"></span>
                    <span class="d-block">Apply-Online</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/login')}}">
                    <span class="fa fa-sign-in-alt fa-2x d-lg-block d-md-none d-xl-block d-sm-none d-none"></span>
                    <span class="d-block">Sign-In</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
