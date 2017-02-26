@extends('layouts.default')
@section('bgImage')
    <img class = "img-responsive center-block" src="{{asset('/img/Backgrounds/priser_e.jpg')}}">
@endsection
@section('content')
    {{--@include('drafts.welcome')--}}
{{--    @include('drafts.prices')--}}
    {!! $page['content'] !!}
    @if(Auth::check())
        {{ Html::linkRoute('prices.edit', 'Ändra innehåll', App::getLocale(),array('class' => 'btn btn-primary')) }}
    @endif

@endsection
