<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

   

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Bootstrap core CSS -->
  <link href="{{asset('mdb/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="{{asset('mdb/css/mdb.min.css')}}" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="{{asset('mdb/css/style.css')}}" rel="stylesheet">
</head>
<body>
    <div id="app">
       @include('layouts.header')

        <main class="py-4">
            @yield('content')
        </main>
        @include('layouts.footer')
    </div>

     <!-- Scripts -->
     <script src="{{ asset('js/app.js') }}" defer></script>
     
    
     <!-- Bootstrap tooltips -->
     <script type="text/javascript" src="{{asset('mdb/js/popper.min.js')}}"></script>
     <!-- Bootstrap core JavaScript -->
     <script type="text/javascript" src="{{asset('mdb/js/bootstrap.min.js')}}"></script>
     <!-- MDB core JavaScript -->
     <script type="text/javascript" src="{{asset('mdb/js/mdb.min.js')}}"></script>
</body>
</html>
