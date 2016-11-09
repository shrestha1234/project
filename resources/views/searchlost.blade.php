@extends('main')
@section('title','searchlost')
@section('content')

    <div class="container">
        <div class="row">

            <div class="col-md-7 col-md-offset-3">
                <div class="panel panel-success">
                    <div class="panel-heading">Search Lost Item</span>
                    </div>

                    <div class="panel-body">


                        {!!form($form)!!}

                    <div>
                        @if($searchlost)
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

                            @foreach ($searchlost as $retrive)

                                <tr>
                                    <td>{{$retrive->description}}</td>
                                    <td>{{$retrive->name}}</td>
                                    <td>{{$retrive->date}}</td>
                                    <td><a href="/lostdetailview?id={{$retrive->id}}">
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
@endsection