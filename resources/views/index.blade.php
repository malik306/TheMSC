<!doctype html>
<html lang="en" class="font-family">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="REAL/PNG" href="{{asset('image/output-onlinepngtools.png')}}" >
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>{{config('app.name','TheMSC')}}</title>
</head>
<body class="bg-green-4">
@include('sweet::alert')


@include('include.top')

@include('include.carousel')
{{--
<div class=" mt-2 mb-2">


</div>--}}
@include('include.home')

@include('include.about')

@include('include.admissions')

@include('include.exam')

@include('include.apply-online')

@include('include.bottom')


<script type="text/javascript" src="{{asset('js/app.js')}}"></script>

<script type="text/javascript" !src="">



    const about = document.querySelector('#about');
    const examination = document.querySelector('#exam');
    const admission = document.querySelector('#admission');
    const apply = document.querySelector('#apply');

    const homebar = document.querySelector('#homelink');
    const aboutbar = document.querySelector('#aboutlink');
    const admissionbar = document.querySelector('#admissionlink');
    const examinationbar = document.querySelector('#examlink');
    const applyonlinebar = document.querySelector('#applylink');

    aboutbar.addEventListener('click',()=>{
        about.classList.remove('d-none');
        admission.classList.add("d-none");
        examination.classList.add("d-none");
        apply.classList.add("d-none");
    });

    homebar.addEventListener("click",()=>{
        about.classList.add("d-none");
        admission.classList.add("d-none");
        examination.classList.add("d-none");
        apply.classList.add("d-none");
    });


    admissionbar.addEventListener("click",()=>{
        about.classList.add("d-none");
        admission.classList.remove("d-none");
        examination.classList.add("d-none");
        apply.classList.add("d-none");
    });

    examinationbar.addEventListener("click",()=>{
        about.classList.add("d-none");
        admission.classList.add("d-none");
        examination.classList.remove("d-none");
        apply.classList.add("d-none");
    });

    applyonlinebar.addEventListener("click",()=>{
        about.classList.add("d-none");
        admission.classList.add("d-none");
        examination.classList.add("d-none");
        apply.classList.remove("d-none");
    });




</script>

</body>
</html>
