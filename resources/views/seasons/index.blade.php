@extends('layouts.user')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Seasons</div>

                <div class="panel-body">
                	<table class="table">
					  <thead>
					    <tr>
					      <th scope="col">Season</th>
					    </tr>
					  </thead>
					  <tbody>
					  	@foreach ($seasons as $season)
					    <tr>
					      <td>
					      		<a href="{{ $season->path() }}">
					      			{{$season->season}}
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