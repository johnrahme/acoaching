<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Acoaching') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap/bootstrap.css') }}">
    <!--Fonter-->
    <style type="text/css">
        @font-face {
            font-family: "Bodoni72";
            src: url({{url('css/fonts/Bodoni.ttc')}}) format("truetype");
        }
        h2 {
            font-family: "Bodoni72", Verdana, Tahoma;
        }
        @font-face {
            font-family: "Avenir";
            src: url({{url('css/fonts/AvenirNextLTPro-Regular.otf')}}) format("truetype");
        }
        h4 {
            font-family: "Avenir", Verdana, Tahoma;
            line-height: 130%;
        }
    </style>
    @yield('styles')
    <!-- Scripts -->
    <script>
        window.Laravel =; <?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
{{--Add padding for dynamic navbar--}}
{{--<body id = "body" background="{{asset('/img/background_2.jpg')}}">--}}
<body id = "body" >




@include('layouts.navbar')
@yield('bgImage')
{{--<div class="container clear-top" style = "box-shadow: 0px 0px 5px 2px #888888; background-color: #fff; padding: 18px">--}}
<div class="container clear-top" style = "background-color: #fff; padding: 18px">
    @if(session()->has('message'))
    <div class="alert alert-success">
        {{session('message')}}
    </div>
    @endif

    @yield('content')
</div>
{{--<div class="container clear-top" style="box-shadow: 0px 0px 5px 2px #888888; background-color: #fff; padding: 18px">--}}
    {{--@yield('content')--}}
{{--</div>--}}
@include('layouts.footer')

<!-- Scripts -->
    <script type="text/javascript" src="{{ asset('js/jquery-2.2.2.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap/tether.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>
    {{--Set the correct active--}}
    <script>

        @if(isset($active))

        var active = '#{{$active}}';
        $("#{{$active}}").addClass("active");


        @endif
    </script>
    @yield("scripts")
</body>
</html>
