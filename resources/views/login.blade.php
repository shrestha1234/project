@extends('main')
@section('title','Login')

@section('content')

    <div class="container-fluid">
<div class="row">
    <div class="col-md-9">
        @include('home')
    </div>
    <div class="col-md-3">
        <div class="panel panel-default">
            <div class="panel-heading"> Login<span class="glyphicon glyphicon-user"></span> </div>
            <div class="panel-body ">
                <h1 style=font-size:150%;>Enter your Username and Password</h1></br>
                {!!form($form) !!}
                <div class="panel-footer"></div>
            </div>
        </div>
    </div>




    </div>
 </div>
 @endsection