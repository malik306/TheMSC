<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="REAL/PNG" href="{{asset('image/output-onlinepngtools.png')}}" >
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>{{$title}}</title>
</head>
<body>

@include('admin.a-nav-bar')

<div class="container mt-3">
    <div class="row justify-content-center">
    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5">
        <div class="text-uppercase bg-info text-center rounded text-dark py-3 d-block mb-3">Details for Class</div>
        <div class="text-uppercase py-2 row"><span class="bg-info p-2 mr-3 rounded col-5">Id</span> <span class="col-5">{{$theClass->id}}</span> </div>
        <div class="text-uppercase py-2 row"> <span class="bg-info p-2 mr-3 rounded col-5">Class name</span> <span class="col-5">{{$theClass->name}}</span></div>
        <div class="text-uppercase py-2 row"><span class="bg-info p-2 mr-3 rounded col-5">Division name </span> <span class="col-5">{{$theClass->division}}</span></div>
        <div class="text-uppercase py-2 row">
            <span class="bg-info p-2 mr-3 col-5 rounded">Created At</span>
            <span class="col-5">
                <span class="d-block">{{$theClass->created_at->format('d M Y')}}</span>
                <span class="d-block">{{$theClass->created_at->format('h:i A')}}</span>
            </span>
        </div>
        <div class="text-uppercase py-2 row">
            <span class="bg-info p-2 mr-3 col-5 rounded">Updated At</span>
            <span class="col-5">
                <span class="d-block">{{$theClass->updated_at->format('d M Y') }} </span>
                <span class="d-block">{{$theClass->updated_at->format('h:i A') }} </span>
            </span>
        </div>
    </div>
    </div>
</div>


<script type="text/javascript" src="{{asset('js/app.js')}}"></script>


</body>
</html>
