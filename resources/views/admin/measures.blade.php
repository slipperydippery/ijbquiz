@extends('layouts.app')

@section('content')
	<div class="container-fluid d-flex flex-column h-100 p-5">
		<div class="row">
	        <div class="col-12 text-center pb-4">
                <h1 class="pagetitle d-inline px-5"> Admin</h1>
                <p>Admin!</p>
	        </div>
		</div>
		<div class="row">
			@foreach ($questions as $question)
				<div class="col-12">
					<h2>{{ $question->name }}</h2>
					@foreach ($question->answeroptions as $answeroption)
						<div class="row border p-2 m-2">
							<div class="col-4">
								<h3>{{ $answeroption->name }}</h3>
							</div>
							<div class="col-8">
								<manage-measures
									:answeroption_id=" {{ $answeroption->id }} "
								>
								</manage-measures>
							</div>
						</div>
					@endforeach

				</div>
			@endforeach
		</div>

	</div>
@stop



@section('additional-scripts')
@endsection