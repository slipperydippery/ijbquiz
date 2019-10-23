@extends('layouts.question')

@section('content')
	<div class="container-fluid d-flex flex-column h-100">
		<div class="row">
	        <div class="col-8 offset-md-2 text-center w-100 hidden" id="opener">
				<h1 class="py-5 display-3">Welkom bij de quickscan</h1>
				<h2 class="display-5 pb-5"> Beantwoord 7 vragen en je krijgt informatie over slimme & duurzame mobiliteit die past bij jouw bedrijf. Daar heb je wat aan. </h2>

				<a href=" {{ route('location.show') }} " class="btn btn-primary btn-lg btn-block"> Doe de quickscan </a>
	        </div>
	        <div class="col-8 offset-md-2 text-center w-100 hidden" id="closer">
				<h1 class="py-5 display-3">Geen ondersteuning Internet Explorer</h1>
				<h2 class="display-5 pb-5">Helaas wordt Internet Explorer niet ondersteud. Schakel over naar een moderne, veilige browser om deze content te kunnen bekijken: </h2>
				<h2 >
						<a href="https://www.microsoft.com/en-gb/windows/microsoft-edge" target="_blank">Microsoft Edge</a><br>
						<a href="https://www.google.com/chrome/" target="_blank">Google Chrome</a><br>
						<a href="https://www.mozilla.org/en-GB/firefox/new/" target="_blank">Mozilla Firefox</a><br>
				</h2>

	        </div>
	    </div>
	</div>
@endsection

@section('additional-scripts')
	<script>
		function isIE() {
		  ua = navigator.userAgent;
		  /* MSIE used to detect old browsers and Trident used to newer ones*/
		  var is_ie = ua.indexOf("MSIE ") > -1 || ua.indexOf("Trident/") > -1;
		  
		  return is_ie; 
		}
		/* Create an alert to show if the browser is IE or not */
		if (isIE()){
			document.getElementById("closer").style.display = "block";
			document.getElementById("opener").style.display = "none";
		} else {
			document.getElementById("closer").style.display = "none";
			document.getElementById("opener").style.display = "block";
		}
	</script>
@endsection