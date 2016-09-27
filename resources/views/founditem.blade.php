@extends('main')
@section('title','Found Report')
@section('content')

    <div class="container-fluid">
        <div class="row">

            <div class="col-md-7 col-md-offset-3">
                <div class="panel panel-success ">
                    <div class="panel-heading">Found Item Information{{--<span class="glyphicon glyphicon-heart"></span>--}}</div>

                    <div class="panel-body">
                        {!!form($form)!!}

                    </div>
                    </div>
                    </div>
                </div>
            </div>
@endsection