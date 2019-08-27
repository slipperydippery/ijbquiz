@extends('layouts.app')

@section('content')
	<div class="container-fluid d-flex flex-column h-100 p-5">
		<div class="row">
	        <div class="col-md-12 text-center">
                <h1 class="pagetitle d-inline px-5"> Waar is uw bedrijf gevestigd? </h1>
	        </div>
		</div>
		<div class="row">
			<div class="col-md-10 offset-md-1">
				<form id="location" action="{{ route('location.store') }}" method="post" accept-charset="utf-8">
				    {{ csrf_field() }}
				    <!-- Hidden location Type Form Input -->
				    <input type="hidden" id="location" name="location" value="1">
				        
					<img id="map" src="/img/kaartijmond.svg" class="img-fluid p-5 clickable" alt="">
				</form>
			</div>
			<div class="col-md-8 offset-md-2">
				<form action="{{ route('location.store') }}" method="post" accept-charset="utf-8">
				    {{ csrf_field() }}
					<!-- Add Submit Field -->
					<div class="form-group">
					    <input type="submit" value=" Hier geef ik liever geen antwoord op " class="btn btn-outline-danger form-control" />
					</div>
				</form>
			</div>
		</div>

	</div>
@stop



@section('additional-scripts')
	<script>
		var form = document.getElementById("location");

		document.getElementById("map").addEventListener("click", function () {
		  form.submit();
		});
	</script>
@endsection