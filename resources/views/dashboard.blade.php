
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
    {{--<div class="col-xs-1 col-md-9">--}}
        {{--<div class="row">--}}
            <div class="col-xs-4 col-md-3">
                <h2>Report a Lost Item</h2>
                <a href="/lostitem">
                <img src="image/rl.jpg"  width="304" height="236"></a>
            </div>
            <div class="col-xs-4 col-md-3">
                <h2>Report a Found Item</h2>
                <a href="/founditem">
                <img src="image/rf.jpg" width="304" height="236"></a>
            </div>
        {{Auth::user()->id}}




<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
@endsection
