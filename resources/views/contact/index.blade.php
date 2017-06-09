@extends('layouts.default')
@section('bgImage')
    <img align = "middle center-block" class = "img-responsive center-block" src="{{asset('/img/Backgrounds/kontakt_e.jpg')}}">
@endsection
@section('content')



        <style>

            h2{
                color: #467569;
                text-align: center;
            }
        </style>

        <div class = "row">
            <div class = "col-md-2">

            </div>
            <div class = "col-md-8">
                <h2>
                    Kontakt
                </h2>

                <div class = "row">
                    <div class = "col-md-4">
                       {!! $page['content'] !!}
                    </div>
                    <div class = "col-md-8">
                        <br>
                        @include('layouts.map')
                    </div>
                </div>
                <br>
                @include('layouts.validation.error')
                @include('layouts.contactForm')

            </div>
            <div class = "col-md-2">

            </div>

        </div>


        @if(Auth::check())
        {{ Html::linkRoute('contact.edit', 'Ändra innehåll', App::getLocale(),array('class' => 'btn btn-primary')) }}
        @endif


@endsection