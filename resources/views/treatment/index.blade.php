@extends('layouts.default')
@section('bgImage')
    <img class = "img-responsive" src="{{asset('/img/Backgrounds/behandling_e.jpg')}}">
@endsection
@section('content')
    {{--@include('drafts.welcome')--}}
{{--    @include('drafts.treatment')--}}
    {!! $page['content'] !!}
    @if(Auth::check())
        {{ Html::linkRoute('treatment.edit', 'Ändra innehåll', App::getLocale(),array('class' => 'btn btn-primary')) }}
    @endif

@endsection
