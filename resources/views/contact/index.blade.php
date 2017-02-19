@extends('layouts.default')
@section('bgImage')
    <img class = "img-responsive" src="{{asset('/img/Backgrounds/kontakt_e.jpg')}}">
@endsection
@section('content')


{{--        @include('drafts.contact')--}}
        {!! $page['content'] !!}
        @if(Auth::check())
        {{ Html::linkRoute('contact.edit', 'Ändra innehåll', App::getLocale(),array('class' => 'btn btn-primary')) }}
        @endif


@endsection