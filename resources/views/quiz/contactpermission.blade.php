@extends('layouts.app')

@section('content')
	<div class="container-fluid d-flex flex-column h-100 p-5">
		<div class="row">
	        <div class="col-md-12 text-center">
                <h1 class="pagetitle d-inline px-5"> Mogen we uw informatie doorsturen naar een forensspecialist? </h1>
	        </div>
		</div>
		<div class="row">
			<div class="col-md-4 offset-md-2">
				<div class="card m-3" >
					<img src="https://dummyimage.com/640x260/fff/aaa" class="card-img-top" alt="https://dummyimage.com/640x260/fff/aaa">
					<div class="card-body text-center">
						<h5 class="card-title"> Ja </h5>
						<form action="{{ route('contactpermission.store') }}" method="post" accept-charset="utf-8">
							@csrf
						    <!-- Hidden contactpermission Type Form Input -->
						    <input type="hidden" id="contactpermission" name="contactpermission" value="1">
						        
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
						<form action="{{ route('contactpermission.store') }}" method="post" accept-charset="utf-8">
							@csrf
						    <!-- Hidden contactpermission Type Form Input -->
						    <input type="hidden" id="contactpermission" name="contactpermission" value="0">
						        
							<!-- Add Submit Field -->
							<div class="form-group">
							    <input type="submit" value=" nee " class="btn btn-primary form-control" />
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

	</div>
@stop



@section('additional-scripts')
@endsection