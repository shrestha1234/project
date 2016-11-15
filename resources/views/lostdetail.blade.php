<?php
        ?>
@extends('main')
@section('title','Details')
@section('content')
    <div class="col-md-12">
    <div class="panel panel-success">
<div class="container">
        @foreach($lostdetail as $ld)
                      <h3><b>Category</b> : <i>{{$ld->name}}</i></h3>
        <hr>
        <h5><span class="glyphicon glyphicon-time"></span> <b>posted on : </b>{{$ld->date}}</h5>
    <hr>
        <h4><b>Title</b> : {{$ld->title}}</h4>
        <h4><b>Model</b> : {{$ld->model}}</h4>
        <hr>
        <h4><b>Address</b> : {{$ld->address}}</h4>
        <h4><b>Place where item was lost</b> : {{$ld->lostorfound_place}}</h4>
        <h4><b>Specific Location</b> : {{$ld->specific_location}}</h4>
        <img src="{{URL::asset('/image/'.$ld->image)}}" height="400" width="550" alt="lost item">
    <hr>
        <h4><b>Description</b></h4><p>{{$ld->description}}</p>
        <br>
        <a href="/message">
            <button  class="btn btn-success " type="button">Claim</button></a>
    @endforeach
            <hr>
</div></div>

    </div>


    @endsection
