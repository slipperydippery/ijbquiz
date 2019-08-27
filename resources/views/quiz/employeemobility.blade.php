@extends('layouts.app')

@section('content')
	<div class="container-fluid d-flex flex-column h-100 p-5">
		<div class="row">
	        <div class="col-md-12 text-center">
                <h1 class="pagetitle d-inline px-5"> Hoe komen uw werknemers naar werk? </h1>
	        </div>
		</div>
		<div class="row">
			<div class="col-md-10 offset-md-1 p-5">
				<form action="{{ route('employeemobility.store') }}" method="post" accept-charset="utf-8">
				    {{ csrf_field() }}
					

					<div class="form-group py-4">
						<label for="formControlRange"><h2>Hoeveel werknemers komen er op de fiets?</h2></label>
						<input type="range" name="fiets" min="0" max="10" value="0" class="form-control-range" id="formControlFiets">
					</div>
					<div class="form-group py-4">
						<label for="formControlRange"><h2>Hoeveel werknemers komen er met het openbaar vervoer?</h2></label>
						<input type="range" name="ov" min="0" max="10" value="0" class="form-control-range" id="formControlOV">
					</div>
					<div class="form-group py-4">
						<label for="formControlRange"><h2>Hoeveel werknemers komen er met de auto?</h2></label>
						<input type="range" name="auto" min="0" max="10" value="0" class="form-control-range" id="formControlAuto">
					</div>
					<!-- Add Submit Field -->
					<div class="form-group">
					    <input type="submit" value=" Ik heb bovenstaande naar waarheid ingevuld " class="btn btn-primary form-control" />
					</div>
				</form>

				<form action="{{ route('employeemobility.store') }}" method="post" accept-charset="utf-8">
				    {{ csrf_field() }}
				    <!-- Hidden employeemobility Type Form Input -->
				    <input type="hidden" id="employeemobility" name="employeemobility" value="0">
				        
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
@endsection