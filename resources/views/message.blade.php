@extends('main')
{{--<!DOCTYPE html>--}}
@section('content')
    @if(Auth::check())
    <div id="header">
        <h2 style="text-align:center">Send Message</h2>
    </div>
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
    @else
       <div class="alert alert-danger"><h3 style="text-align:center">Please Login First</h3></div>
       <div class="container-fluid">
           <div class="row">
       <div class="col-md-5 col-md-offset-3">
           <div class="panel panel-default">
               <div class="panel-heading"> Login<span class="glyphicon glyphicon-user"></span> </div>
               <div class="panel-body ">
                   <h1 style=font-size:150%;>Enter your Username and Password</h1></br>
                   {!!form($loginform) !!}
                   <div class="panel-footer"></div>
               </div>
           </div>
       </div> </div>
       </div>
    @endif
@endsection