
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

</div>--}}<style>
    img {
        opacity: 0.8;
        filter: alpha(opacity=50);
    }

    img:hover {
        opacity: 1.0;
        filter: alpha(opacity=100);
    }
</style>
{{--<div class="container">--}}
    <div class="col-md-4 col-md-offset-1">
        {{--<div class="row">--}}
            <div class="col-xs-6 col-md-9">
                <h3>Report a Lost Item</h3>
                <a href="/lostitem">
                <img class="img-rounded" src="image/rl.jpg"  width="304" height="236"></a>
            </div>
</div>
        {{--{{Auth::user()->id}}--}}

<div class="col-md-6 ">
    <div class="panel panel-success">
        <div class="panel-heading"><h4>Recommended for you</h4></div>
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

                @foreach ($dashboard as $retrive)

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
<div class="col-md-4 col-md-offset-1">
<div class="col-xs-1 col-md-9">
    <h3>Report a Found Item</h3>
    <a href="/founditem">
        <img class="img-rounded" src="image/rf.jpg" width="304" height="236"></a>
</div>
    </div>








<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
@endsection
