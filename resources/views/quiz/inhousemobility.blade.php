@extends('layouts.question')

@section('content')
	<inhousemobility-component
		:session=" {{ json_encode(Session::all()) }} "
	>
	</inhousemobility-component>
@stop

@section('additional-scripts')
@endsection