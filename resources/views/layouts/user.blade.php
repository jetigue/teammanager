@include('layouts.header')

@include('layouts.navbar')
<div class="container-fluid">

	<div class="row">
		<div class="col-md-2">
			@include('layouts.menu')
		</div>

		<div class="col">
			@yield('content')
		</div>

	</div>

</div>


@include('layouts.footer')