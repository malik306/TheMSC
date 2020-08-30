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
        <div class="text-uppercase bg-info text-center rounded text-dark py-3 d-block mb-3">Details for Carousel</div>
        <div class="text-uppercase py-2 row"><span class="bg-info p-2 mr-3 rounded col-5">Id</span> <span class="col-5">{{$carousel->id}}</span> </div>
        <div class="text-uppercase py-2 row"> <span class="bg-info p-2 mr-3 rounded col-5">Title</span> <span class="col-5">{{$carousel->title}}</span></div>
        <div class="text-uppercase py-2 row"><span class="bg-info p-2 mr-3 rounded col-5">Description </span> <span class="col-5">{{$carousel->description}}</span></div>
        <div class="text-uppercase py-2 row"><span class="bg-info p-2 mr-3 rounded col-5">Carousel Image </span><img width="100" height="100" class="col-5 rounded d-block img-fluid img-thumbnail" src="{{url('Carousel/',$carousel->image)}}" alt=""></div>
        <div class="text-uppercase py-2 row"><span class="bg-info p-2 mr-3 rounded col-5">Carousel File Name </span>
            <div class="d-block text-info p-1">{{$carousel->image}}</div>
        </div>
        <div class="text-uppercase py-2 row">
            <span class="bg-info p-2 mr-3 col-5 rounded">Created At</span>
            <span class="col-5">
                <span class="d-block">{{$carousel->created_at->format('d M Y')}}</span>
                <span class="d-block">{{$carousel->created_at->format('h:i A')}}</span>
            </span>
        </div>
        <div class="text-uppercase py-2 row">
            <span class="bg-info p-2 mr-3 col-5 rounded">Updated At</span>
            <span class="col-5">
                <span class="d-block">{{$carousel->updated_at->format('d M Y') }} </span>
                <span class="d-block">{{$carousel->updated_at->format('h:i A') }} </span>
            </span>
        </div>
    </div>
    </div>
</div>

<script type="text/javascript" src="{{asset('js/app.js')}}"></script>

</body>
</html>
