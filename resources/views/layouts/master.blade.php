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
        <link rel="shortcut icon" href="{{ asset('frontend/images/logo/favicon.png') }}" type="image/x-icon">
        <link rel="stylesheet" href="{{ asset('frontend/css/plugin.css') }}">
    
        {{-- <link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet"> --}}

        <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">
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
    
   
    {{-- Books-shop Theme References --}}
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}

        <script type="text/javascript" src="{{ asset('frontend/js/plugin.js') }}"></script>
        <script type="text/javascript" src="{{ asset('frontend/js/script.js') }}"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

        
   {{-- <script src="{{ asset('admin/js/bootstrap.bundle.min.js') }}"></script> --}}
      {{-- <script src="{{ asset('admin/js/main.js') }}"></script> --}}
     {{-- <script src="{{ asset('frontend/js/jquery.min.js') }}"></script> --}}

      @yield('scripts')


</body>
</html>

