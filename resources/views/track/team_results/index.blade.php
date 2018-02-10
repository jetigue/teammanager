@extends('layouts.user')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Track Team Results</div>

                <div class="panel-body">
                	<table class="table">
					  <thead>
					    <tr>
					      <th scope="col">Meet</th>
					      <th scope="col">Division</th>
					      <th scope="col">Gender</th>
					      <th scope="col">Place</th>
					      <th scope="col"># of Teams</th>
					      <th scope="col">Points</th>
					    </tr>
					  </thead>
					  <tbody>
					  	@foreach ($trackTeamResults as $trackTeamResult)
					    <tr>
					      <td>
					      		<a href="{{ $trackTeamResult->path() }}">
					      			{{$trackTeamResult->trackMeet->trackMeetName->meet_name}}
					      		<a>
					      	</td>
					      <td>{{$trackTeamResult->raceDivision->name}}</td>
					      <td>{{$trackTeamResult->gender->gender}}</td>
					      <td>{{$trackTeamResult->place}}</td>
					      <td>{{$trackTeamResult->number_teams}}</td>
					      <td>{{$trackTeamResult->points}}</td>
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