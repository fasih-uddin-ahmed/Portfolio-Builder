<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Build your Portfolio Today!</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" media="screen">
        <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        @stack('styles')
    </head>
    <body>
        @yield('main')
        <script src="{{asset('js/jquery.js')}}"></script>
        <script src="{{asset('js/popper.js')}}"></script>
        <script src="{{asset('js/bootstrap.js')}}"></script>
        <script src="{{asset('js/app.js')}}"></script>
        @stack('scripts')
    </body>
</html>
