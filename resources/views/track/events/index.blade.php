@extends('layouts.user')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Track Events</div>

                <div class="panel-body">
                	<table class="table">
					  <thead>
					    <tr>
					      <th scope="col">Event</th>
					    </tr>
					  </thead>
					  <tbody>
					  	@foreach ($trackEvents as $trackEvent)
					    <tr>
					      <td>
					      		<a href="{{ $trackEvent->path() }}">
					      			{{$trackEvent->event}}
					      		<a>
					      	</td>
					    </tr>
					    @endforeach
					  </tbody>
					</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection