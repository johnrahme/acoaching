<?php

namespace App\Http\Controllers;

use App\Page;
use App;
use App\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{


    public function index()
    {

        $events = Event::all();
        return view('event.index', ['active' => 'Event', 'events' => $events]);
    }

    public function create()
    {

        return view('event.create', ['active' => 'Event']);
    }

    public function edit($id)
    {

        $event = Event::find($id);
        return view('event.edit', ['active' => 'Event', 'event' => $event]);
    }
    public function view($id)
    {

        return view('event.view', ['active' => 'Event']);
    }

    public function store(Request $request)
    {

        $event = new Event();

        $event->title = $request->input('title');
        $event->content = $request->input('content');
        $event->order = $request->input('order');
        $event->save();

        return redirect('events')->with('message','Nyhet skapad!');
    }
    public function update(Request $request)
    {

        $event = Event::find($request->input('id'));

        $event->title = $request->input('title');
        $event->content = $request->input('content');
        $event->order = $request->input('order');
        $event->save();

        return redirect('events')->with('message','Nyhet uppdaterad!');
    }

    public function destroy(Request $request)
    {
        $event = Event::find($request->input('id'));

        $event->delete();
        return redirect('events')->with('message','Nyhet raderad!');
    }
}
