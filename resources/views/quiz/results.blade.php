@extends('layouts.app')

@section('content')
	<div class="container-fluid d-flex flex-column h-100 p-5">
		<div class="row">
	        <div class="col-12 text-center pb-4">
                <h1 class="pagetitle d-inline px-5"> Resultaten</h1>
                <p>IJmond Bereikbaar denkt graag met je mee welke slimme en duurzame oplossingen bij jouw bedrijf toegepast kunnen worden: meer mensen op de fiets, slimme stimulering, schoner rijden. Gebaseerd op jouw situatie hebben we een aantal relevante links voor je verzameld. </p>
	        </div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="card-columns">
				  <div class="card">
				    <img src="https://dummyimage.com/600x400/e3e3e3/616161.png" class="card-img-top" alt="...">
				    <div class="card-body">
				      <h5 class="card-title">Card title that wraps to a new line</h5>
				      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
				    </div>
				  </div>
				  <div class="card p-3">
				    <blockquote class="blockquote mb-0 card-body">
				      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
				      <footer class="blockquote-footer">
				        <small class="text-muted">
				          Someone famous in <cite title="Source Title">Source Title</cite>
				        </small>
				      </footer>
				    </blockquote>
				  </div>
				  <div class="card">
				    <img src="https://dummyimage.com/600x400/e3e3e3/616161.png" class="card-img-top" alt="...">
				    <div class="card-body">
				      <h5 class="card-title">Card title</h5>
				      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
				      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
				    </div>
				  </div>
				  <div class="card bg-primary text-white text-center p-3">
				    <blockquote class="blockquote mb-0">
				      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat.</p>
				      <footer class="blockquote-footer text-white">
				        <small>
				          Someone famous in <cite title="Source Title">Source Title</cite>
				        </small>
				      </footer>
				    </blockquote>
				  </div>
				  <div class="card text-center">
				    <div class="card-body">
				      <h5 class="card-title">Card title</h5>
				      <p class="card-text">This card has a regular title and short paragraphy of text below it.</p>
				      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
				    </div>
				  </div>
				  <div class="card">
				    <img src="https://dummyimage.com/600x400/e3e3e3/616161.png" class="card-img-top" alt="...">
				  </div>
				  <div class="card p-3 text-right">
				    <blockquote class="blockquote mb-0">
				      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
				      <footer class="blockquote-footer">
				        <small class="text-muted">
				          Someone famous in <cite title="Source Title">Source Title</cite>
				        </small>
				      </footer>
				    </blockquote>
				  </div>
				  <div class="card">
				    <div class="card-body">
				      <h5 class="card-title">Card title</h5>
				      <p class="card-text">This is another card with title and supporting text below. This card has some additional content to make it slightly taller overall.</p>
				      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
				    </div>
				  </div>
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