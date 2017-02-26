@extends('layouts.default')
@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/summernote/css/summernote.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/summernote/css/css/font-awesome.min.css') }}">
@endsection
@section('content')


    {{Form::open(array('route'=> 'event.update','files'=>true, 'id'=>'form1'))}}

    <input type = "hidden" value = "{{$event->id}}" name = "id" id = "id">

    <div class = "row">
        <div class = "col-sm-6">
            <div class="form-group">
                <label for="name">Titel</label>
                <input type="text" class="form-control" id="title" name = "title" placeholder="Skriv titel" value="{{$event->title}}">

            </div>
            <div class="form-group">
                <label for="order">Prio</label>
                <select class="form-control" id="order" name = "order" value = "2">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                </select>

            </div>
        </div>
        <div class = "col-sm-6">
            <div class="form-group">
                <label for="content">Innehåll</label>
                <div class="summernote" id="col">{!! $event->content !!}</div>
                <input type = "hidden" name = "content" id = "content">
                <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
            </div>
        </div>
    </div>

    <button id="save" class="btn btn-primary" onclick="save()" type="button">Ändra</button>


    {{ Form::close() }}

@endsection

@section('scripts')
    <script type="text/javascript" src="{{ asset('plugins/summernote/js/summernote.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/summernote/custom/onImageUpload.js') }}"></script>

    <script>
        {{--When uploading an image save it in the folder event--}}

     onImageUpload("img/Events","{{url('/imgStore')}}");
    </script>

    <script>
        <!--$("img").removeClass('img-responsive');-->
        $("#save").click(function () {
            $("img").css('height','auto');
            $("img").addClass('img-responsive');
            $("#content").val($('#col').summernote('code'));
            $("#form1").submit();
        });

    </script>
@endsection