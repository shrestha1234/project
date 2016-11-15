<?php
//print_r(auth::user());
?>


<ul class="nav navbar-nav" >
@if(Auth::check())
        <li class="active"><a href="/dashboard"><span class="glyphicon glyphicon-dashboard"></span> <b>Dashboard</b></a></li>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-search"></span><b>Search</b> <span class="caret"></span></a>
                <ul class="dropdown-menu">
                <li><a href="/searchlost"><b>Lost Found</b></a></li>
                <li><a href="/searchfound"><b>Search Found</b></a></li>
                </ul>
                </li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown"><b>Report</b> <span class="caret"></span></a>
        <ul class="dropdown-menu">
        <li><a href="/lostitem">Report Lost</a></li>
        <li><a href="/founditem">Report Found</a></li>
        </ul>
        </li>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" ><b>About</b> <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                                <li><a href="/information"><b>Information</b></a></li>
                                <li><a href="/contact"><b>Contact</b></a></li>

                        </ul>
                </li>
@else
        <li class="active"><a href="/"><span class="glyphicon glyphicon-home"></span> <b>Home</b></a></li>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-search"></span><b> Search</b> <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                                <li><a href="/searchlost"><b>Search Lost</b></a></li>
                                <li><a href="/searchfound"><b>Search Found</b></a></li>
                        </ul>
                </li>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" ><b>About</b> <span class="caret"></span></a>
                <ul class="dropdown-menu">
                <li><a href="/information"><b>Information</b></a></li>
                <li><a href="/contact"><b>Contact</b></a></li>

                </ul>
                </li>
@endif

</ul>

<ul class="nav navbar-nav navbar-right">
        @if(Auth::check())

        <li ><a href=""></span><b> My Account</b></a></li>
                <li ><a href="/logout"><span class="glyphicon glyphicon-user"></span> <b>Logout</b></a></li>


                @else
                <li class="active" ><a href="/"><span class="glyphicon glyphicon-user"></span> <b>Login</b></a></li>
                <li><a href="register"> <span class="glyphicon glyphicon-log-in"></span> <b>Sign Up</b></a></li>
                @endif

</ul>