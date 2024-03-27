<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @yield('title')
    </title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    {{-- Frontend CSS --}}
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
        
    
        {{-- Custom css  --}}

        <link rel="stylesheet" href="{{ asset('frontend/css/custom.css') }}">
  
    {{-- Books-shop Theme References --}}
        <link rel="shortcut icon" href="{{ asset('frontend/assets/images/logo/favicon.png') }}" type="image/x-icon">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugin.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css') }}">
</head>
<body>
    <div id="app">
        @include('layouts.inc.header')
        @include('layouts.inc.navbar')

        <main class="py-4">
            @yield('content')
        </main>

        @include('layouts.inc.footer')
    </div>

     <!-- Scripts -->
     @yield('scripts')
   
    {{-- Books-shop Theme References --}}
        <script type="text/javascript" src="{{ asset('frontend/assets/js/plugin.js') }}"></script>
        <script type="text/javascript" src="{{ asset('frontend/assets/js/script.js') }}"></script>
</body>
</html>

