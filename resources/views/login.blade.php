
<?php
        $found=\Lost\found::getFoundData();
?>
@extends('main')
@section('title','Login')

@section('content')

    <div class="container-fluid">
<div class="row">
    <div class="col-md-8">
        @include('home')
    </div>

    <div class="col-md-4">
        <div class="panel panel-primary">
            <div class="panel-heading"> <span class="glyphicon glyphicon-user"></span> <B>Login</B></div>
            <div class="panel-body ">
                {{--<h3 style=font-size:120%;><b>Enter your Username and Password</b></h3></br>--}}
                {!!form($form) !!}
            </div>
            <div class="panel-footer"></div>
        </div>
    </div>
    </div>


        <div class="row">
            <div class="col-md-6">
            <div class="panel panel-success">
                <div class="panel-heading"><h4>Recent Found Posts</h4></div>
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
                        <hr>
                        <button type="button" class="btn btn-success col-md-offset-10">View All</button></a>
                </div>



                </div>
            </div>

            <div class="col-md-6">
                <div class="panel panel-success">
                    <div class="panel-heading"><h4>Recent Lost Posts</h4></div>
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
                        <hr>
                        <a href="/alllostposts">
                        <button type="button" class="btn btn-success col-md-offset-10">View All</button></a>

                        </table>
                    </div>

                </div>
            </div>
        </div>

</div>
 @endsection