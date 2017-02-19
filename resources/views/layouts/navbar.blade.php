

<!-- Static navbar -->

{{--<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap/custom/customnav.css') }}">--}}

{{--<nav class="navbar navbar-default navbar-static-top" style = "border: 0px; background: rgba(255, 255, 255, 0.9);">--}}
<nav class="navbar navbar-default navbar-static-top" style = "border: 0px;margin-bottom: 0px">

    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a style=" margin: 0px; padding: 0px; padding-top: 5px;" class="navbar-brand" href="#"><img class = "img-responsive" style="height: 180%;" src="{{asset('/img/logo.png')}}"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li id = "welcome"><a href="{{route('welcome',App::getLocale())}}">@lang('menu.welcome')</a></li>
                <li id = "about"><a href="{{route('about',App::getLocale())}}">@lang('menu.about')</a></li>
                <li id = "coaching"><a href="{{route('coaching',App::getLocale())}}">@lang('menu.coaching')</a></li>
                <li id = "treatment"><a href="{{route('treatment',App::getLocale())}}">@lang('menu.treatment')</a></li>
                <li id = "courses"><a href="{{route('courses',App::getLocale())}}">@lang('menu.courses')</a>

                <li id = "prices"><a href="{{route('prices',App::getLocale())}}">@lang('menu.prices')</a></li>
                <li id = "contact"><a href="{{route('contact',App::getLocale())}}">@lang('menu.contact')</a></li>


            @if(App::isLocale('se'))
                    <li><a style = "padding-bottom:0px; " href = "{{route(Route::currentRouteName(),'en')}}"><img class = "" style="height: auto; width: 23px;" src = "{{asset('/img/english.png')}}"></a></li>
                    {{--<li>{{ Html::linkRoute(Route::currentRouteName(), '<img class = "" style="height: auto; width: 23px;" src = "img/english.png">', 'en') }}</li>--}}
                @elseif(App::isLocale('en'))
                    <li><a style = "padding-bottom:0px; " href = "{{route(Route::currentRouteName(),'se')}}"><img class = "" style="height: auto; width: 23px;" src = "{{asset('img/swedish.png')}}"></a></li>
{{--                    <li>{{ Html::linkRoute(Route::currentRouteName(), 'Svenska', 'se') }}</li>--}}
                @endif

            </ul>
        </div><!--/.nav-collapse -->

    </div><!--/.container-fluid -->
</nav>