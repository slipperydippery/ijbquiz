@extends('layouts.question')

@section('content')
	<locationtype-component
		:session=" {{ json_encode(Session::all()) }} "
	>
	</locationtype-component>
@stop

@section('additional-scripts')
@endsection