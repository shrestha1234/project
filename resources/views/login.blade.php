
<?php
        $found=\Lost\found::getFoundData();
?>
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
            </div>
        </div>
    </div>
    </div>
        <div class="row">
            <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading"><h4>Recent Found Item Posts</h4></div>
                <div class="panel-body ">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Posted on</th>
                            <th>Category</th>
                            <th>Image</th>
                        </tr>
                        </thead>
                   <tbody>

                       @foreach ($found as $retrive)
                           <tr>
                               <td>{{$retrive->date}}</td>
                               <td>{{$retrive->name}}</td>
                               <td> <img src="{{URL::asset('/image/'.$retrive->image)}}" height="150" width="200"></td>
                               <td><a href="/founddetailview?id={{$retrive->id}}">
                               <button type="button" class="btn btn-success">Details</button></a>
                      </tr>
                       @endforeach

                   </tbody>

                    </table><a href="/allfoundposts">
                        <button type="button" class="btn btn-success">View All</button></a>
                </div>



                </div>
            </div>

            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading"><h4>Recent Lost Item Posts</h4></div>
                    <div class="panel-body ">
                        <table class="table">
                            <thead>
                            <tr>
                                {{--<th>SNo</th>--}}
                                <th>Posted on</th>
                                <th>Category</th>
                                <th>Image</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach ($lost_items as $retrive)
                                <tr>
                                    <td>{{$retrive->date}}</td>
                                    <td>{{$retrive->name}}</td>
                                   <td> <img src="{{URL::asset('/image/'.$retrive->image)}}" height="150" width="200"></td>
                                    <td><a href="/lostdetailview?id={{$retrive->id}}">
                                            <button type="button" class="btn btn-success">Details</button></a>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                        <a href="/alllostposts">
                        <button type="button" class="btn btn-success">View All</button></a>

                        </table>
                    </div>

                </div>
            </div>
        </div>

</div>
 @endsection