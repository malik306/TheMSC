{{--
<div class="container-fluid navbar justify-content-center align-items-center mb-2 card">
    <a class="navbar-brand" href="{{url('/index')}}">
        <img src="{{asset('image/onlinepngtools.png')}}" class="d-block container-sm container-lg container-md" alt="" style="height: 135px;">
    </a>
</div>
--}}
@include('include.nav-bar')

<div class="container container-sm container-md container-lg">
<marquee class="container-fluid card rounded bg-info p-1 border border-2 border-dark text-dark h5" direction="right" width="100%" scrollamount="8" onmouseover="this.stop();" onmouseout="this.start();">
    Welcome to The Model Science College And Coming Soon TheMSC Website
</marquee>
</div>
<div class="container">
    <div class="container-fluid card d-inline-block alert alert-info rounded h6 border-2 border border-dark alert-dismissible" role="alert">
        <button type="button" class="close outline btn fa fa-times" data-dismiss="alert" style="padding: 0.6rem;"></button>
        <strong class="far fa-thumbs-up mr-1"></strong> Welcome to The Model Science College
    </div>
</div>
