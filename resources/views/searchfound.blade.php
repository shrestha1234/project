@extends('main')
@section('title','searchfound')
@section('content')
    <br><br>
    <div class="container">
        <div class="row">

            <div class="col-md-7 col-md-offset-3">
                <div class="panel panel-success">
                    <div class="panel-heading">Search Found Item{{--<span class="glyphicon glyphicon-heart"></span>--}}</div>

                    <div class="panel-body">
                        {!!form($form)!!}
                        <div>
                            @if($searchfound)
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Posted on</th>
                                        <th>Category</th>
                                        <th>Image</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach ($searchfound as $retrive)

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
                            @endif
                        </div>

                    </div>
                    </div>
                    </div>
                </div>
            </div>
    <br><br><br><br>
@endsection