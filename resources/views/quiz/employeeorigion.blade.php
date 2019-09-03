@extends('layouts.app')

@section('content')
	<div class="container-fluid d-flex flex-column h-100 p-5">
		<div class="row">
	        <div class="col-md-12 text-center">
                <h1 class="pagetitle d-inline px-5"> Waar komen uw werknemers vandaan? </h1>
	        </div>
		</div>
		<div class="row">
			<div class="col-md-10 offset-md-1 p-5">
				<form action="{{ route('employeeorigion.store') }}" method="post" accept-charset="utf-8">
				    {{ csrf_field() }}
					

					<div class="form-group py-4">
						<label for="formControlRange"><h2>Hoeveel werknemers reizen minder dan 5km naar werk?</h2></label>
						<input type="range" name="1" min="0" max="10" value="0" class="form-control-range" id="formControlFiets">
					</div>
					<div class="form-group py-4">
						<label for="formControlRange"><h2>Hoeveel werknemers reizen 5km - 20km naar werk?</h2></label>
						<input type="range" name="2" min="0" max="10" value="0" class="form-control-range" id="formControlOV">
					</div>
					<div class="form-group py-4">
						<label for="formControlRange"><h2>Hoeveel werknemers reizen 20km - 100km naar werk?</h2></label>
						<input type="range" name="3" min="0" max="10" value="0" class="form-control-range" id="formControlOV">
					</div>
					<div class="form-group py-4">
						<label for="formControlRange"><h2>Hoeveel werknemers reizen meer dan 100km naar werk?</h2></label>
						<input type="range" name="4" min="0" max="10" value="0" class="form-control-range" id="formControlAuto">
					</div>
					<!-- Add Submit Field -->
					<div class="form-group">
					    <input type="submit" value=" Ik heb bovenstaande naar waarheid ingevuld " class="btn btn-primary form-control" />
					</div>
				</form>
				<form action="{{ route('employeeorigion.store') }}" method="post" accept-charset="utf-8">
				    {{ csrf_field() }}
				    <!-- Hidden employeeorigion Type Form Input -->
				    <input type="hidden" id="employeeorigion" name="employeeorigion" value="0">
				        
					<!-- Add Submit Field -->
					<div class="form-group">
					    <input type="submit" value=" Hier geef ik liever geen antwoord op " class="btn btn-outline-danger btn-outline-nooutline form-control" />
					</div>
				</form>
			</div>

		</div>

	</div>
@stop



@section('additional-scripts')
@endsection