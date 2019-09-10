@extends('layouts.question')

@section('content')
	<employeemobility-component
		:session=" {{ json_encode(Session::all()) }} "
	>
	</employeemobility-component>
@stop

@section('additional-scripts')
@endsection