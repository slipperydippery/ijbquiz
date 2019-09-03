@extends('layouts.app')

@section('content')
	<div class="container-fluid d-flex flex-column h-100 p-5">
		<div class="row">
	        <div class="col-md-12 text-center">
                <h1 class="pagetitle d-inline px-5"> Is buiten de spits reizen een mogelijkheid? </h1>
	        </div>
		</div>
		<div class="row">
			<div class="col-md-4 offset-md-2">
				<div class="card m-3" >
					<img src="https://dummyimage.com/640x260/fff/aaa" class="card-img-top" alt="https://dummyimage.com/640x260/fff/aaa">
					<div class="card-body text-center">
						<h5 class="card-title"> Ja </h5>
						<form action="{{ route('rushhour.store') }}" method="post" accept-charset="utf-8">
							@csrf
						    <!-- Hidden rushhour Type Form Input -->
						    <input type="hidden" id="rushhour" name="rushhour" value="1">
						        
							<!-- Add Submit Field -->
							<div class="form-group">
							    <input type="submit" value=" ja " class="btn btn-primary form-control" />
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card m-3" >
					<img src="https://dummyimage.com/640x260/fff/aaa" class="card-img-top" alt="https://dummyimage.com/640x260/fff/aaa">
					<div class="card-body text-center">
						<h5 class="card-title"> Nee </h5>
						<form action="{{ route('rushhour.store') }}" method="post" accept-charset="utf-8">
							@csrf
						    <!-- Hidden rushhour Type Form Input -->
						    <input type="hidden" id="rushhour" name="rushhour" value="0">
						        
							<!-- Add Submit Field -->
							<div class="form-group">
							    <input type="submit" value=" nee " class="btn btn-primary form-control" />
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-md-8 offset-md-2">
				<form action="{{ route('rushhour.store') }}" method="post" accept-charset="utf-8">
				    {{ csrf_field() }}
				    <!-- Hidden rushhour Type Form Input -->
				    <input type="hidden" id="rushhour" name="rushhour" value="0">
				        
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