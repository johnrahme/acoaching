@extends('layouts.default')
@section('content')
    <h1>Nyheter</h1>




        <table class="table table-striped">
            <thead>
            <tr>
                <th>Titel</th>
                <th>Prio</th>
                <th>Radera</th>
                <th>Ändra</th>
            </tr>
            </thead>
            <tbody>
            @foreach($events as $event)
            <tr>
                <td> {{$event->title}}</td>
                <td>{{$event->order}}</td>
                <td><a href="{{route('event.edit', $event->id)}}" class = "btn btn-success"> Ändra </a></td>

                <td>{{Form::open(array('url' => '/event/destroy', 'method' => 'delete'))}}
                    <input type = "hidden" name = "id" value="{{$event->id}}">
                    <input type = "submit" class = "btn btn-danger" value="Radera">
                    {{Form::close()}}
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>



    <a href = "{{route('event.create')}}" class = "btn btn-success"> Skapa Nyhet</a>

@endsection