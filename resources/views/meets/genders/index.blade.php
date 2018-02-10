@extends('layouts.user')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Genders</div>

                <div class="panel-body">
                	<table class="table">
					  <thead>
					    <tr>
					      <th scope="col">Gender</th>
					    </tr>
					  </thead>
					  <tbody>
					  	@foreach ($genders as $gender)
					    <tr>
					      <td>
					      		<a href="{{ $gender->path() }}">
					      			{{$gender->gender}}
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