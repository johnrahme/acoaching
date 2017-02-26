@extends('layouts.default')
@section('bgImage')
    {{--<div style="position: relative">--}}
        {{--<div class = "row">--}}
            {{--<div class = "col-sm-5">--}}
                {{--<h2  style = "padding-top: 5%; position: absolute;top: 30%; left: 10%">Att våga är att förlora fotfästet för en stund</h2>--}}
            {{--</div>--}}
        {{--</div>--}}
        <img class = "img-responsive center-block" src="{{asset('/img/Backgrounds/Ommig_e.jpg')}}">

    {{--</div>--}}

@endsection
@section('content')
{{--        @include('drafts.about')--}}
        {!! $page['content'] !!}
        @if(Auth::check())
        {{ Html::linkRoute('about.edit', 'Ändra innehåll', App::getLocale(),array('class' => 'btn btn-primary')) }}
        @endif


@endsection