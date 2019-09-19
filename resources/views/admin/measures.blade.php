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
			<div class="col-8 offset-md-2 border shadow mb-4">
				<create-measure
					:questions= " {{ json_encode($questions) }}  "
				>
				</create-measure>
			</div>
		</div>
		<div class="row">
			@foreach ($questions as $question)
				<div class="col-12">
					<h2 class="pt-5 text-primary">{{ $question->name }}</h2>
					@foreach ($question->answeroptions as $answeroption)
						<div class="row border p-2">
							<div class="col-12">
								<h4 class="text-muted">{{ $answeroption->name }}</h4>
							</div>
							<div class="col-12">
								@foreach ($answeroption->measures as $measure)
									<div class="row border">
										<div class="col-2">
											<strong>{{ $measure->name }}</strong>
										</div>
										<div class="col-6">
											{{ $measure->description }}
										</div>
										<div class="col-2">
											<a href=" {{ $measure->link }} ">{{  $measure->link }}</a>
										</div>
										<div class="col-2">
											<a href=" {{ route('measure.edit', $measure) }} " class="btn btn-outline-info btn-block"> Bewerk link </a>
										</div>
									</div>
								@endforeach
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