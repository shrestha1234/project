
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="css/app.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/CSS.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <title>lost and found: @yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<div class="container" style="width:auto" >


        <div class="col-md-1">
            <image src="image/lostandfound.jpg" class="img-circle" style=" width:300px; height:80px;"/>
        </div>
        <div class="col-md-7 " >
            <h1  style="text-align:right;font-family:verdana;" ><b><i>LOST AND FOUND</i></b></h1>
        </div>
        <div class="col-md-4">
            @if(Auth::check())<br><br><br>
            <p style="text-align:right"><b>welcome : {{Auth::user()->email}}</b></p>
                @endif
            </div>
    </div>



<body style="background-color:ghostwhite;">

<nav class="navbar navbar-inverse">
    <div class="container-fluid">

       @include('menu')
    </div>
</nav>
</div>
@if (session('status'))
    <div class="alert alert-success">
        {{session('status')}}
    </div>
@endif

{{--<div style="height:400px" ;>--}}
@yield('content')</div>

{{--<image src="image/lost.jpg"  class="img-circle" style=" width:1350px; height:400px "/>--}}
</body>
<footer>Copyright ©lostandfound.com</footer>
</html>