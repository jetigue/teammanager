@extends('layouts.user')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Track Meets</div>

                <div class="panel-body">
                	<table class="table">
					  <thead>
					    <tr>
					      <th scope="col">Name</th>
					      <th scope="col">Date</th>
					    </tr>
					  </thead>
					  <tbody>
					  	@foreach ($trackMeets as $trackMeet)
					    <tr>
					      <td>
					      		<a href="{{ $trackMeet->path() }}">
					      			{{$trackMeet->trackMeetName->meet_name}}
					      		<a>
					      	</td>
					      <td>{{date('F j, Y', strtotime($trackMeet->meet_date))}}</td>
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