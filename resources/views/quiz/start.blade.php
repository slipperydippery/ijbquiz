@extends('layouts.question')

<div class="container-fluid d-flex flex-column h-100">
	<div class="row">
        <div class="col-8 offset-md-2 text-center w-100">
			<h1 class="display-4 py-5"> Slimme en duurzame mobiliteit: wat kun je ermee? Beantwoord 7 korte vragen en je hebt een eerste indruk van wat jouw bedrijf al doet, waar je mee aan de slag kunt gaan en waar IJmond Bereikbaar jou mee kan helpen. </h1>

			<a href=" {{ route('location.show') }} " class="btn btn-primary btn-lg btn-block"> Start de quiz </a>
        </div>
    </div>
</div>

@section('additional-scripts')
@endsection