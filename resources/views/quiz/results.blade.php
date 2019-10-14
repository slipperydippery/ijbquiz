@extends('layouts.app')

@section('content')
	<div class="container-fluid d-flex flex-column h-100 p-5">
		<div class="row">
	        <div class="col-12 text-center pb-4">
                <h1 class="pagetitle d-inline px-5"> Resultaten</h1>
                <p>Gebaseerd op jouw antwoorden hebben we de volgende informatie voor je verzameld:</p>
	        </div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="card-columns">
					@foreach ($selectedmeasures as $selectedmeasure)
						@if ($selectedmeasure->selectcount > 0)
							<div class="card">
								<div class="card-body">
									<h2 class="card-title"> {{ $selectedmeasure->measure->name }} </h2>
									<p class="card-text"> {{ $selectedmeasure->measure->description }} </p>

									@foreach ($selectedmeasure->answeroptions as $answeroption)
										<p class="card-text"><small class="text-muted"> {{ $answeroption->name }} </small></p>
									@endforeach
									<a href=" {{ url($selectedmeasure->measure->link) }} " target="_black" class="stretched-link"> {{ $selectedmeasure->measure->link }} </a>
								</div>
							</div>
						@endif
					@endforeach
				</div>
			</div>
		</div>
		<div class="row">
	        <div class="col-8 offset-md-2">
				<div class="jumbotron">
					<h1 class="display-4">Laat ons je helpen</h1>
					<p class="lead">Mag Ronald Vierkant, mobiliteitsmakelaar voor de IJmond, contact met je opnemen? Dan sturen we de resultaten uit deze scan alvast aan hem door.</p>
					<hr class="my-4">
					<form>
						<div class="form-group">
							<label for="exampleInputEmail1">E-mail adres</label>
							<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E-mail adres">
							<small id="emailHelp" class="form-text text-muted">Wij delen jouw gegevens nooit met anderen.</small>
						</div>
						<div class="form-group">
							<label for="exampleFormControlTextarea1">Wanneer kunnen we je het beste bereiken?</label>
							<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
						</div>
						<button type="submit" class="btn btn-primary btn-lg">Verstuur mijn gegevens</button>
					</form>
					<hr class="my-4">
					<p>Zelf bellen of mailen mag natuurlijk ook: <a href="tel:06-50050995">06-50050995</a> of <a href="mailto:rvierkant@odijmond.nl">rvierkant@odijmond.nl</a></p>
				</div>
	        </div>
		</div>
		<div class="row p-5">
			<div class="col-12">
                <h2 class="pagetitle d-inline px-5">  </h2>
            </div>

		</div>

	</div>
@stop



@section('additional-scripts')
@endsection
