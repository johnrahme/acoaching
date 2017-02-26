@extends('layouts.default')
@section('bgImage')
    <img class = "img-responsive center-block" src="{{asset('/img/Backgrounds/coaching_e.jpg')}}">
@endsection
@section('content')
    {{--    @include('drafts.shop')--}}

{{--        @include('drafts.coaching')--}}
        {!! $page['content'] !!}

    @if(Auth::check())
        {{ Html::linkRoute('coaching.edit', 'Ändra innehåll', App::getLocale(),array('class' => 'btn btn-primary')) }}
        @endif


@endsection