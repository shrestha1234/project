@extends('main')
@section('title','DashBoard')
@section('content')
    {{--<div class="container">
       <h2>Report</h2><br>
       <p>Report the Lost Item:</p>
       <tr>
           <td align="center">
               <img src="image/rl.jpg" class="img-rounded"  width="304" height="236">
           </td>
       </tr>
    </div>
    <div class="container">

       <p>Report the Found Item:</p>
       <img src="image/rf.jpg" class="img-rounded"  width="304" height="236">

    </div>--}}{{--<style>
       img {
           opacity: 0.8;
           filter: alpha(opacity=50);
       }

       img:hover {
           opacity: 1.0;
           filter: alpha(opacity=100);
       }
    </style>--}}

    {{--  <div class="col-xs-11 col-md-12">
          <div class="row">
              <div class="col-xs-4 col-md-6">
                  <h2>Report a Lost Item</h2>
                  <a href="/lostitem">
                  <img src="image/rl.jpg"  width="304" height="236"></a>
              </div>
              <div class="col-xs-4 col-md-6">
                  <h2>Report a Found Item</h2>
                  <a href="/founditem">
                  <img src="image/rf.jpg" width="304" height="236"></a>
              </div>

          </div>
      </div>--}}
    <style>
       img {
           opacity: 0.8;
           filter: alpha(opacity=50);
       }

       img:hover {
           opacity: 1.0;
           filter: alpha(opacity=100);
       }
    </style>
    <div class="container">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-header-black">
                                <h1 class="card-heading">Report a Found Item</h1>
                            </div>
                            <div class="card-body">

                                <div class="card-image">
                                    <a href="/founditem">
                                        <img src="image/rl.jpg"></a>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-header-black">
                                <h1 class="card-heading">Report a Lost Item</h1>
                            </div>
                            <div class="card-body">

                                <div class="card-image">
                                    <a href="/lostitem">
                                        <img src="image/rf.jpg"></a>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-header-black">
                                <h4 class="card-heading">Recommended for you</h4>
                            </div>
                            <div class="card-body">

                                <table class="table">
                                <thead>
                                <tr>
                                    <th>Posted on</th>
                                    <th>Category</th>
                                    <th>Image</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach ($dashboard as $retrive)

                                    <tr>
                                        <td>{{$retrive->date}}</td>
                                        <td>{{$retrive->name}}</td>
                                        <td> <img src="{{URL::asset('/image/'.$retrive->image)}}" height="150" width="200"></td>
                                        <td><a href="/founddetailview?id={{$retrive->id}}">
                                                <button type="button" class="btn btn-success">Details</button></a></td>
                                    </tr>
                                @endforeach

                                </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </br>
        </div>
    </div>

@endsection