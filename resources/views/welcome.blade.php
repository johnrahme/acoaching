@extends('layouts.default')
@section('bgImage')
    <img class = "img-responsive center-block" src="{{asset('/img/Backgrounds/Ommig_e.jpg')}}">
@endsection
@section('content')

    {{--@include('layouts.carousel')--}}
{{--    @include('drafts.welcome')--}}
    <h2 style = "text-align: center;color: #467569">Välkommen</h2>

    <div class = "row">
        <div class = "col-md-6">
{{--            @include('drafts.welcome')--}}
            {!! $page['content'] !!}
        </div>
        <div class = "col-md-6">
            <div class="panel panel-default">
                <div class="panel-body" style="padding-top: 0">
                    <div class="page-header" style="margin-top:0px; margin-bottom: 2">
                        <h4 class="text-center">Nyheter</h4>
                    </div>
                    <div class="list-group">
                        @foreach($events as $event)
                            <a href="#" class="list-group-item">
                                <div class="list-group-item-heading">
                                    <h4>{{$event->title}}</h4>
                                    <small>{{$event->created_at}}</small>
                                </div>
                                <p>{!! $event->content !!}</p>
                            </a>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>


    @if(Auth::check())
        {{ Html::linkRoute('welcome.edit', 'Ändra innehåll', App::getLocale(),array('class' => 'btn btn-primary')) }}
    @endif
@endsection
{{--@section('scripts')
    <script>
        //var body = $('body');
        var body = $('#storeBG');
        //body.attr('background','{{ asset('img/background.jpg') }}');
        body.css('background-image', 'url({{ asset('img/bg2.jpg') }})');
        body.css('background-repeat','no-repeat');
        body.css('background-size','100% 100%');
        body.css('background-attachment','fixed');
        var course = $('#courseBG');
        //body.attr('background','{{ asset('img/background.jpg') }}');
        course.css('background-image', 'url({{ asset('img/bg3.jpg') }})');
        course.css('background-repeat','no-repeat');
        course.css('background-size','100% 100%');
        course.css('background-attachment','fixed');
    </script>
@endsection--}}
{{--@section('content')--}}


    {{--@include('drafts.welcome')--}}
    {{--@lang('messages.welcome')--}}

    {{--{!! $page['content'] !!}--}}
    {{--{{ Html::linkRoute('welcome.edit', 'Ändra innehåll', App::getLocale(),array('class' => 'btn btn-primary')) }}--}}
{{--@endsection--}}
