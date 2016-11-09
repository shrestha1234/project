@extends('main')
@section('title','Found Posts')
@section('content')
    <div class="col-md-6 col-md-offset-3">
    <div class="panel panel-default">
        <div class="panel-heading"><h4>Found Item Posts</h4></div>
        <div class="panel-body ">
            <table class="table">
                <thead>
                <tr>
                    {{--<th>SNo</th>--}}
                    <th>Description</th>
                    <th>Category</th>
                    <th>Date</th>
                </tr>
                </thead>
                <tbody>

                @foreach ($foundpost1 as $retrive)
                    <tr>
                        {{--<td>{{$retrive->id}}</td>--}}
                        <td>{{$retrive->description}}</td>
                        <td>{{$retrive->name}}</td>
                        <td>{{$retrive->date}}</td>
                        <td><a href="/founddetailview?id={{$retrive->id}}">
                                <button type="button" class="btn btn-success">Details</button></a></td>
                    </tr>
                @endforeach

                </tbody>
                </table>


        </div>



    </div>
    </div>



@endsection