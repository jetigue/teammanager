@extends('layouts.user')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Track Venues</div>

                <div class="panel-body">
                	<table class="table">
					  <thead>
					    <tr>
					      <th scope="col">Venue</th>
					    </tr>
					  </thead>
					  <tbody>
					  	@foreach ($trackVenues as $trackVenue)
					    <tr>
					      <td>
					      		<a href="{{ $trackVenue->path() }}">
					      			{{$trackVenue->venue}}
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