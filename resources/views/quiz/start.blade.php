@extends('layouts.app')

@section('content')
	<div class="container-fluid d-flex flex-column h-100 p-5">
		<div class="row">
	        <div class="col-md-12 text-center">
                <h1 class="pagetitle d-inline px-5"> Hoeveel mensen heeft u in dienst? </h1>
	        </div>
		</div>
		<div class="row">
			<div class="col-md-4 offset-md-2">
				<div class="card m-3" >
					<img src="https://dummyimage.com/640x260/fff/aaa" class="card-img-top" alt="https://dummyimage.com/640x260/fff/aaa">
					<div class="card-body text-center">
						<h5 class="card-title"> Heel weinig </h5>
						<form action="{{ route('people.store') }}" method="post" accept-charset="utf-8">
							@csrf
						    <!-- Hidden people Type Form Input -->
						    <input type="hidden" id="people" name="people" value="1">
						        
							<!-- Add Submit Field -->
							<div class="form-group">
							    <input type="submit" value=" 1-5 mensen " class="btn btn-primary form-control" />
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card m-3" >
					<img src="https://dummyimage.com/640x260/fff/aaa" class="card-img-top" alt="https://dummyimage.com/640x260/fff/aaa">
					<div class="card-body text-center">
						<h5 class="card-title"> Nou, een paar </h5>
						<form action="{{ route('people.store') }}" method="post" accept-charset="utf-8">
							@csrf
						    <!-- Hidden people Type Form Input -->
						    <input type="hidden" id="people" name="people" value="2">
						        
							<!-- Add Submit Field -->
							<div class="form-group">
							    <input type="submit" value=" 6-10 mensen " class="btn btn-primary form-control" />
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-md-4 offset-md-2">
				<div class="card m-3" >
					<img src="https://dummyimage.com/640x260/fff/aaa" class="card-img-top" alt="https://dummyimage.com/640x260/fff/aaa">
					<div class="card-body text-center">
						<h5 class="card-title"> Wij zijn aan het groeien </h5>
						<form action="{{ route('people.store') }}" method="post" accept-charset="utf-8">
							@csrf
						    <!-- Hidden people Type Form Input -->
						    <input type="hidden" id="people" name="people" value="3">
						        
							<!-- Add Submit Field -->
							<div class="form-group">
							    <input type="submit" value=" 11-30 mensen " class="btn btn-primary form-control" />
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card m-3" >
					<img src="https://dummyimage.com/640x260/fff/aaa" class="card-img-top" alt="https://dummyimage.com/640x260/fff/aaa">
					<div class="card-body text-center">
						<h5 class="card-title"> Echt heel veel </h5>
						<form action="{{ route('people.store') }}" method="post" accept-charset="utf-8">
							@csrf
						    <!-- Hidden people Type Form Input -->
						    <input type="hidden" id="people" name="people" value="4">
						        
							<!-- Add Submit Field -->
							<div class="form-group">
							    <input type="submit" value=" 31+ mensen " class="btn btn-primary form-control" />
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-md-8 offset-md-2">
				<form action="{{ route('people.store') }}" method="post" accept-charset="utf-8">
				    {{ csrf_field() }}
				    <!-- Hidden people Type Form Input -->
				    <input type="hidden" id="people" name="people" value="0">
				        
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