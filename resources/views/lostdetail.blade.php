<?php
        ?>
@extends('main')
@section('title','Details')
@section('content')
    <div class="panel panel-default">
<div class="container">
        @foreach($lostdetail as $ld)
                      <h3>{{$ld->name}}</h3>
    <hr>
        <h5><span class="glyphicon glyphicon-time"></span> posted on:{{$ld->date}}</h5>
    <hr>
        <h4>Title : {{$ld->title}}</h4>
        <h4>Model : {{$ld->model}}</h4>
        <h4>Address : {{$ld->address}}</h4>
        <h4>Place where item was lost : {{$ld->lostorfound_place}}</h4>
        <h4>Specific Location : {{$ld->specific_location}}</h4>
    <hr>
        <p>{{$ld->description}}</p>
        <a href="/message">
            <button type="button" class="btn btn-success">Claim</button></a>

            @endforeach
</div></div>


    @endsection
