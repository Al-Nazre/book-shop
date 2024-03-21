<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Book Shop') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->

    <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">
    
    <!-- Vendor CSS Files -->

    <link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/quill.remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/simple_database.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/custom.css') }}" rel="stylesheet">

    
</head>
<body>
  @include('layouts.inc.admin.header')

  @include('layouts.inc.admin.sidebar')
  <main id="main" class="main">

    @yield('content')
    
  </main>

  @include('layouts.inc.admin.footer')

     <!-- Scripts -->

     <script src="{{ asset('admin/js/main.js') }}"></script>

     <!-- Vendor JS Files -->

    <script src="{{ asset('admin/js/apexcharts.min.js') }}"></script>
    <script src="{{ asset('admin/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/js/chart.min.js') }}"></script>
    <script src="{{ asset('admin/js/echarts.min.js') }}"></script>
    <script src="{{ asset('admin/js/quill.min.js') }}"></script>
    <script src="{{ asset('admin/js/simple-datatables.js') }}"></script>
    <script src="{{ asset('admin/js/tinymce.min.js') }}"></script>
    <script src="{{ asset('admin/js/validate.js') }}"></script>


   
</body>
</html>
