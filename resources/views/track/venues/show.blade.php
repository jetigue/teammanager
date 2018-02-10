@extends('layouts.user')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{$trackVenue->venue}}</div>

                <div class="panel-body">
                    {{$trackVenue->city}}, {{$trackVenue->state}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection