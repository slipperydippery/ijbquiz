@extends('layouts.app')

@section('content')
	<div class="container-fluid d-flex flex-column h-100 p-5">
		<div class="row">
            <div class="col-2 offset-9">
                <a class="float-right btn btn-primary" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
	        <div class="col-12 text-center pb-4">
                <h1 class="pagetitle d-inline px-5"> Bewerk Links </h1>
	        </div>
		</div>
		<div class="row">
			<div class="col-12 col-md-8 offset-md-2 border shadow mb-4">
				<create-measure
					:questions= " {{ json_encode($questions) }}  "
				>
				</create-measure>
			</div>
		</div>
		<div class="row">
            <div class="col-12 col-md-8 offset-md-2 border">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#links" role="tab" aria-controls="links" aria-selected="true"><h3>Overzicht van alle links</h3></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#factors" role="tab" aria-controls="factors" aria-selected="false"> <h3>Overzicht van alle factors met bijbehorende links</h3> </a>
                    </li>
                </ul>

                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="links" role="tabpanel" aria-labelledby="links-tab">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Titel</th>
                                    <th scope="col">Omschrijving</th>
                                    <th scope="col">Link</th>
                                    <th scope="col">Factoren</th>
                                    <th scope="col">Bewerk</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($measures as $measure)
                                    <tr>
                                        <td> {{ $measure->name  }} </td>
                                        <td> {{ $measure->description  }} </td>
                                        <td> {{ $measure->link  }} </td>
                                        <td>
                                            @foreach($measure->answeroptions as $answeroption)
                                                <span class="badge badge-pill badge-light clickable" data-toggle="tooltip" data-placement="top" title="{{ $answeroption->name  }}">
                                                    {{ $answeroption->id  }}
                                                </span>
                                            @endforeach
                                        </td>
                                        <td> <a href=" {{ route('measure.edit', $measure) }} " class="btn btn-outline-info btn-block"> Bewerk </a> </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="tab-pane fade" id="factors" role="tabpanel" aria-labelledby="factors-tab">
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
            </div>
		</div>

	</div>
@stop



@section('additional-scripts')
    <script
        src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
        crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip()
        });
    </script>
@endsection
