@extends('layouts.user')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Track Individual Results</div>

                <div class="panel-body">
                	<table class="table">
					  <thead>
					    <tr>
					      <th scope="col">Athlete</th>
					      <th scope="col">Meet</th>
					      <th scope="col">Event</th>
					      <th scope="col">Time</th>
					      <th scope="col">VDot</th>
					      <th scope="col">Place</th>
					      <th scope="col">Points</th>
					    </tr>
					  </thead>
					  <tbody>
					  	@foreach ($trackIndividualResults as $trackIndividualResult)
					    <tr>
					      <td>{{$trackIndividualResult->athlete->last_name}}, {{$trackIndividualResult->athlete->first_name}}</td>
					      <td>
					      		<a href="{{ $trackIndividualResult->path() }}">
					      			{{$trackIndividualResult->trackTeamResult->trackMeet->trackMeetName->meet_name}}
					      		<a>
					      	</td>
					      <td>{{$trackIndividualResult->trackEvent->event}}</td>
					      <td>{{$trackIndividualResult->duration}}.{{$trackIndividualResult->milliseconds}}</td>
					      <td>{{$trackIndividualResult->vdot}}</td>
					      <td>{{$trackIndividualResult->place}}</td>
					      <td>{{$trackIndividualResult->points}}</td>
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