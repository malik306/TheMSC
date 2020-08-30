<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="REAL/PNG" href="{{asset('image/output-onlinepngtools.png')}}" >
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>The-MSC  </title>
</head>
<body>

<div class="container py-5">
    <ul class="list-group">
        <li class="list-group-item"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad autem itaque minima porro quas qui quod quos totam unde veniam. </li>
        <li class="list-group-item"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, asperiores commodi esse ex illum ipsam laborum officia recusandae veniam vero! </li>
        <li class="list-group-item"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis debitis dicta doloribus eligendi expedita facere iste itaque minus quas unde. </li>
        <li class="list-group-item"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, deleniti dignissimos dolorum error excepturi explicabo iste odio qui quod similique? </li>
        <li class="list-group-item"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus facilis fugit harum ipsum laboriosam numquam optio saepe veritatis voluptate voluptatem? </li>
        <li class="list-group-item"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid consequatur deserunt dolorem facere iste perspiciatis porro soluta sunt vero voluptas? </li>
        <li class="list-group-item"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur dolor harum minima praesentium quos reiciendis sapiente sint sit vel voluptatum. </li>
        <li class="list-group-item"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aut delectus eaque laborum minus officiis omnis perferendis similique sint ut? </li>
        <li class="list-group-item"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum magnam quo ratione. Debitis expedita in ipsa maiores officia sequi unde? </li>
        <li class="list-group-item"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita, iste laudantium mollitia officiis perspiciatis quia? Accusamus aliquid facilis iste quos! </li>
    </ul>

    <a class="btn btn-outline-primary mt-3 rounded" href="{{route('user.edit',$AuthID)}}">Edit Candidate</a>
</div>


<script src="{{asset('js/app.js')}}"></script>

</body>
</html>
