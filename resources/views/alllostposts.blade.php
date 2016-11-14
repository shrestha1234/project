@extends('main')
@section('title','Lost Posts')
@section('content')
    <div>
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading"><h4>Lost Item Posts</h4></div>
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

                    @foreach ($lostpost1 as $retrive)

                        <tr>
                            <td>{{$retrive->date}}</td>
                            <td>{{$retrive->name}}</td>
                            <td> <img src="{{URL::asset('/image/'.$retrive->image)}}" height="150" width="200"></td>
                            <td><a href="/lostdetailview?id={{$retrive->id}}">
                                    <button type="button" class="btn btn-success">Details</button></a></td>

                        </tr>
                    @endforeach

                    </tbody>
                    </table>
            </div>



        </div>
    </div>
    </div>


@endsection