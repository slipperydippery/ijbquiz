@extends('layouts.question')

@section('content')
	<electricmobility-component
		:session=" {{ json_encode(Session::all()) }} "
	>
	</electricmobility-component>
@stop

@section('additional-scripts')
@endsection