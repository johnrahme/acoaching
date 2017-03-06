@extends('layouts.default')
@section('bgImage')
    <img class = "img-responsive center-block" src="{{asset('/img/Backgrounds/courses_e.jpg')}}">
@endsection
@section('content')
    {{--    @include('drafts.shop')--}}



{{--    @include('drafts.courses')--}}
    {!! $page['content'] !!}
    @if(Auth::check())
        {{ Html::linkRoute('courses.edit', 'Ändra innehåll', App::getLocale(),array('class' => 'btn btn-primary')) }}
    @endif

@endsection