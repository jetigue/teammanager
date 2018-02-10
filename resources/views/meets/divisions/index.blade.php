@extends('layouts.user')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Race Divisions</div>

                <div class="panel-body">
                	<table class="table">
					  <thead>
					    <tr>
					      <th scope="col">Division</th>
					    </tr>
					  </thead>
					  <tbody>
					  	@foreach ($raceDivisions as $raceDivision)
					    <tr>
					      <td>
					      		<a href="{{ $raceDivision->path() }}">
					      			{{$raceDivision->name}}
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