@extends('layouts.question')

@section('content')
	<employeeorigin-component
		:session=" {{ json_encode(Session::all()) }} "
	>
	</employeeorigin-component>
@stop

@section('additional-scripts')
@endsection