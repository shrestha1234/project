@extends('main')
@section('title','Register')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-primary"  >
                    <div class="panel-heading"><span class="glyphicon glyphicon-log-in"></span> Register </div>
                    <div class="panel-body ">

                        {!! form($form) !!}
                        <div class="panel-footer"></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection