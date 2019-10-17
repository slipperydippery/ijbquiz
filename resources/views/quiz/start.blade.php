@extends('layouts.question')

@section('content')
	<div class="container-fluid d-flex flex-column h-100">
		<div class="row">
	        <div class="col-8 offset-md-2 text-center w-100">
				<h1 class="display-5 py-5"> Beantwoord 7 vragen en je hebt gratis een eerste indruk van wat jouw bedrijf al doet en waar je aan kunt denken om slimmer, efficiënter en duurzamer om te gaan met woon/werkverkeer, zakelijke ritten en/of transport. </h1>



				<a href=" {{ route('location.show') }} " class="btn btn-primary btn-lg btn-block"> Doe de quickscan </a>
	        </div>
	    </div>
	</div>
@endsection
