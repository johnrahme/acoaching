@extends('layouts.default')
@section('content')
    {{--    @include('drafts.shop')--}}



{{--    @include('drafts.courses')--}}
    {!! $page['content'] !!}
    @if(Auth::check())
        {{ Html::linkRoute('courses.edit', 'Ändra innehåll', App::getLocale(),array('class' => 'btn btn-primary')) }}
    @endif

@endsection