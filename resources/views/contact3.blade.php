
@extends('main')
{{--<!DOCTYPE html>--}}
@section('content')
<div id="header">
    <h2 style="text-align:center">CONTACT</h2>
</div>



<div id="content"  style="text-align: center">
    <h3>
        For further information you can contact us in given number.</h3>

        <li> Nischal Rana 9849581872</li>
        <li> Ayush Maharjan 9860566232</li>
        <li> Suraj Shrestha 9849565859</li>

   
</div><br>
<marquee><b><h3>We Will Like To Hear From You</h3></b></marquee>
<div class="container-fluid">
    <div class="row">

        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-success">
                <div class="panel-heading">Contact us <span class="glyphicon glyphicon-user"></span> </div>
                <div class="panel-body">
                    {!! form($form) !!}
                </div>
            </div>
        </div>




    </div>
</div>
@endsection
