<?php
//print_r(auth::user());
?>
<ul class="nav navbar-nav " >
@if(Auth::check())
        <li class="active"><a href="/dashboard"><span class="glyphicon glyphicon-dashboard"></span> Dashboard</a></li>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-search"></span>Search <span class="caret"></span></a>
                <ul class="dropdown-menu">
                <li><a href="/searchlost">Lost Found</a></li>
                <li><a href="/searchfound">Search Found</a></li>
                </ul>
                </li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown">Report <span class="caret"></span></a>
        <ul class="dropdown-menu">
        <li><a href="/lostitem">Report Lost</a></li>
        <li><a href="/founditem">Report Found</a></li>
        </ul>
        </li>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" >About <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                                <li><a href="/information">Information</a></li>
                                <li><a href="/contact">Contact</a></li>

                        </ul>
                </li>
@else
        <li class="active"><a href="/"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-search"></span> Search <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                                <li><a href="/searchlost">Search Lost</a></li>
                                <li><a href="/searchfound">Search Found</a></li>
                        </ul>
                </li>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" >About <span class="caret"></span></a>
                <ul class="dropdown-menu">
                <li><a href="/information">Information</a></li>
                <li><a href="/contact">Contact</a></li>

                </ul>
                </li>
@endif
    {{--<li><a href="/"><span class="glyphicon glyphicon-home"></span>Home</a></li>--}}
    {{--<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-search"></span>Search <span class="caret"></span></a>--}}
        {{--<ul class="dropdown-menu">--}}
            {{--<li><a href="/searchlost">Lost Found</a></li>--}}
            {{--<li><a href="/searchfound">Search Found</a></li>--}}
        {{--</ul>--}}
    {{--</li>--}}
    {{--<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown">Report <span class="caret"></span></a>--}}
        {{--<ul class="dropdown-menu">--}}
            {{--<li><a href="/lostitem">Report Lost</a></li>--}}
            {{--<li><a href="/founditem">Report Found</a></li>--}}
        {{--</ul>--}}
    {{--</li>--}}
    {{--<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" >About <span class="caret"></span></a>--}}
        {{--<ul class="dropdown-menu">--}}
            {{--<li><a href="/information">Information</a></li>--}}
            {{--<li><a href="/contact">Contact</a></li>--}}

        {{--</ul>--}}
    {{--</li>--}}
</ul>

<ul class="nav navbar-nav navbar-right">
        @if(Auth::check())

        <li ><a href=""></span> My Account</a></li>
                <li ><a href="/logout"><span class="glyphicon glyphicon-user"></span> Logout</a></li>


                @else
                <li class="active"><a href="/"><span class="glyphicon glyphicon-user"></span> Login</a></li>
                <li><a href="register"> <span class="glyphicon glyphicon-log-in"></span> Sign Up</a></li>
                @endif

</ul>