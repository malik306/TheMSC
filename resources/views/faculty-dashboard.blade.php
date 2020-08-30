<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="REAL/PNG" href="{{asset('image/Realkoko.png')}}" >
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>{{$title}}</title>
</head>
<body>
<h1 class="text-uppercase text-center bg-primary display-1">{{$title}}</h1>

<ul class="list-group">
    <li class="">@include('include.sign-out')</li>
</ul>


<script type="text/javascript" src="{{asset('js/app.js')}}"></script>

</body>
</html>
