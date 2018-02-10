@extends('layouts.user')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Timing Methods</div>

                <div class="panel-body">
                	<table class="table">
					  <thead>
					    <tr>
					      <th scope="col">Method</th>
					    </tr>
					  </thead>
					  <tbody>
					  	@foreach ($timingMethods as $timingMethod)
					    <tr>
					      <td>
					      		<a href="{{ $timingMethod->path() }}">
					      			{{$timingMethod->name}}
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