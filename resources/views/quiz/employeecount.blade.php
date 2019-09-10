@extends('layouts.question')

@section('content')
	<employeecount-component
		:session=" {{ json_encode(Session::all()) }} "
	>
	</employeecount-component>
@stop

@section('additional-scripts')
@endsection