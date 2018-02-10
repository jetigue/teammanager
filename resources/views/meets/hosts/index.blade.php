@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Meet Hosts</div>

                <div class="panel-body">
                	<table class="table">
					  <thead>
					    <tr>
					      <th scope="col">Hosts</th>
					    </tr>
					  </thead>
					  <tbody>
					  	@foreach ($meetHosts as $meetHost)
					    <tr>
					      <td>
					      		<a href="{{ $meetHost->path() }}">
					      			{{$meetHost->host}}
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