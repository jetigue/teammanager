@extends('layouts.user')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading">Athletes</div>

    <div class="panel-body">
    	<table class="table">
		  <thead>
		    <tr>
		      <th scope="col">Name</th>
		      <th scope="col">Sex</th>
		      <th scope="col">Grad Year</th>
		    </tr>
		  </thead>
		  <tbody>
		  	@foreach ($athletes as $athlete)
		    <tr>
		      <td>
		      		<a href="{{ $athlete->path() }}">
		      			{{$athlete->last_name}}, {{$athlete->first_name}}
		      		<a>
		      	</td>
		      <td>{{$athlete->sex}}</td>
		      <td>{{$athlete->grad_year}}</td>
		    </tr>
		    @endforeach
		  </tbody>
		</table>
    </div>
</div>


@endsection