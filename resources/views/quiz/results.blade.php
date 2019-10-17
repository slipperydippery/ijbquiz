@extends('layouts.app')

@section('content')
	<div class="container-fluid d-flex flex-column h-100 px-5">
		<div class="row">
	        <div class="col-12 text-center pb-4">
                <h1 class="pagetitle d-inline px-5"> Deze informatie is interessant voor jou </h1>
	            <p class="text-muted"> IJmond Bereikbaar denkt graag met je mee welke slimme en duurzame mobiliteitsoplossingen bij jouw bedrijf mogelijk zijn. Op basis van je antwoorden hebben we relevante informatie voor je op een rijtje gezet. </p>
	        </div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="card-columns">
					@foreach ($selectedmeasures as $selectedmeasure)
						@if ($selectedmeasure->selectcount > 0)
							<div class="card">
								<div class="card-header bg-primary text-white">
									Lees dit eens:
								</div>
								<div class="card-body">
									<h2 class="card-title"> {{ $selectedmeasure->measure->name }} </h2>
									<p class="card-text"> {{ $selectedmeasure->measure->description }} </p>

									<p class="text-small"><u>Gebaseerd op jouw antwoorden:</u></p>
									<ul>
										@foreach ($selectedmeasure->answeroptions as $answeroption)
											<li>
												<span class="text-muted"> {{ $answeroption->name }} </span>
											</li>
										@endforeach
									</ul>
									<a href=" {{ url($selectedmeasure->measure->link) }} " target="_black" class="stretched-link"> {{ $selectedmeasure->measure->link }} </a>
								</div>
							</div>
						@endif
					@endforeach
				</div>
			</div>
		</div>
		<div class="row">
	        <div class="col-12">
				<div class="jumbotron py-3">
					<h1 class="display-4"> Meer weten?  </h1>
					<p class="lead">
						 Maak vrijblijvend een afspraak met onze mobiliteitsmakelaar Ronald Vierkant: <a href="tel:06-50050995">06-50050995</a> email: <a href="mailto:rvierkant@odijmond.nl">rvierkant@odijmond.nl</a>
					</p>
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
				</div>
	        </div>
		</div>
		
	</div>
@stop



@section('additional-scripts')
@endsection
