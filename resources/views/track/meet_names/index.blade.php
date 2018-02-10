@extends('layouts.user')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Track Meet Names</div>

                <div class="panel-body">
                	<table class="table">
					  <thead>
					    <tr>
					      <th scope="col">Name</th>
					    </tr>
					  </thead>
					  <tbody>
					  	@foreach ($trackMeetNames as $trackMeetName)
					    <tr>
					      <td>
					      		<a href="{{ $trackMeetName->path() }}">
					      			{{$trackMeetName->meet_name}}
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