@extends('layouts.question')

@section('content')
	<location-component
		:session=" {{ json_encode(Session::all()) }} "
	>
	</location-component>
@stop

@section('additional-scripts')
@endsection