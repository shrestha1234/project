@extends('main')
@section('title','Details')
@section('content')
    <div class="col-md-12">
        <div class="panel panel-default">
    <div class="container">
        @foreach($founddetail as $ld)
            <h3>Category : {{$ld->name}}</h3>
            <hr>
            <h5><span class="glyphicon glyphicon-time"></span> posted on:{{$ld->date}}</h5>
            <hr>
            <h4>Title : {{$ld->title}}</h4>
            <h4>Model : {{$ld->model}}</h4>
            <h4>Address : {{$ld->address}}</h4>
            <h4>Place where item was found : {{$ld->lostorfound_place}}</h4>
            <h4>Specific Location : {{$ld->specific_location}}</h4>
            <img src="{{URL::asset('/image/'.$ld->image)}}" height="400" width="550" alt="lost item">
            <hr>
            <h4>Description</h4><p>{{$ld->description}}</p>
            <a href="/message">
                    <button type="button" class="btn btn-success">Claim</button></a>

        @endforeach
            <hr>
    </div>
@endsection