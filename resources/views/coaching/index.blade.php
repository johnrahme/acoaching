@extends('layouts.default')
@section('content')
    {{--    @include('drafts.shop')--}}

        {{--@include('drafts.exhibitions')--}}
        {!! $page['content'] !!}

    @if(Auth::check())
        {{ Html::linkRoute('coaching.edit', 'Ändra innehåll', App::getLocale(),array('class' => 'btn btn-primary')) }}
        @endif


@endsection