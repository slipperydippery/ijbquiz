@extends('layouts.question')

@section('content')
	<div class="container-fluid d-flex flex-column h-100">
		<div class="row">
	        <div class="col-8 offset-md-2 text-center w-100">
				<h1 class="py-5 display-3">Welkom bij de quickscan</h1>
				<h2 class="display-5 pb-5"> Beantwoord 7 vragen en je krijgt informatie over slimme & duurzame mobiliteit die past bij jouw bedrijf.  Daar heb je wat aan. </h2>

				<a href=" {{ route('location.show') }} " class="btn btn-primary btn-lg btn-block"> Doe de quickscan </a>
	        </div>
	    </div>
	</div>
@endsection
