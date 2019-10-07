@extends('layouts.app')

@section('content')
	<div class="container-fluid d-flex flex-column h-100 p-5">
		<div class="row">
	        <div class="col-12 text-center pb-4">
                <h1 class="pagetitle d-inline px-5"> Bewerk Link</h1>
	        </div>
		</div>
		<div class="row">
			<div class="col-8 offset-md-2 border shadow mb-4">
				<edit-measure
					:questions =" {{ json_encode($questions) }} "
					:measure=" {{ json_encode($measure)}} "
				>
				</edit-measure>
			</div>
		</div>

	</div>
@stop



@section('additional-scripts')
@endsection