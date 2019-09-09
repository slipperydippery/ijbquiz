<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        {{ config('app.name') }}
        @if (isset($title))
            - {{ $title }}
        @endif
    </title>

    <!-- Styles -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-93563705-6"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-93563705-6');
    </script>
</head>

<body class="h-100">
    <div class="sessiondataviewer">
        @if ($location = Session::get('location'))
            <b>location:</b>
            <ul>
                @foreach($location as $place)
                    <li>{{ $place }}</li>
                @endforeach
            </ul>
        @endif
        @if ($locationtype = Session::get('locationtype'))
            <b>locationtype:</b>
            <ul>
                @foreach($locationtype as $place)
                    <li>{{ $place }}</li>
                @endforeach
            </ul>
        @endif
        @if ($employeecount = Session::get('employeecount'))
            <b>employeecount:</b><br>
            {{ $employeecount }} <br>
        @endif
        @if ($employeeorigin = Session::get('employeeorigin'))
            <b>employeeorigin:</b>
            <ul>
                @foreach($employeeorigin as $distance => $percentage)
                    <li>{{ $distance }}: {{ $percentage }}</li>
                @endforeach
            </ul>
        @endif
        @if ($employeemobility = Session::get('employeemobility'))
            <b>employeemobility:</b>
            <ul>
                @foreach($employeemobility as $method => $percentage)
                    <li>{{ $method }}: {{ $percentage }}</li>
                @endforeach
            </ul>
        @endif
        @if ($inhousemobility = Session::get('inhousemobility'))
            <b>inhousemobility:</b>
            <ul>
                @foreach($inhousemobility as $mobility => $percentage)
                
                    <li>{{ $mobility }}: {{ $percentage }}</li>
                @endforeach
            </ul>
        @endif
    </div>
    <main id="app" class="h-100">
        @yield('content')
    </main>

    <!-- Additional Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    
    <script>
        $(function () {
          $('[data-toggle="popover"]').popover()
        })
    </script>
    @yield('additional-scripts')

</body>
</html>
