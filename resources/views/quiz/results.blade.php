@extends('layouts.app')

@section('content')
	<div class="container-fluid d-flex flex-column h-100 p-5">
		<div class="row">
	        <div class="col-md-12 text-center">
                <h1 class="pagetitle d-inline px-5"> Bedankt voor uw input, hier zijn uw resultaten: </h1>
	        </div>
		</div>
		<div class="row p-5">
			<div class="col-md-4 offset-md-2">
				<h3>Uw resultaten</h3>
				<img src="/img/resultaten.png" alt="" class="img-fluid">
			</div>
			<div class="col-md-4">
				<h3>Relevante informatie</h3>
				<img src="/img/folders.png" alt="" class="img-fluid">
			</div>
		</div>

	</div>
@stop



@section('additional-scripts')
@endsection