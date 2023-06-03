<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {

        $search = request('search');

        if ($search) {
            $events = Event::where([
                ['title', 'like', '%' . $search . '%']
            ])->get();
        } else {
            $events = Event::all();
        }


        return view('home', ['events' => $events, 'search' => $search]);
    }

    public function create()
    {
        return view('events.create');
    }

    public function store(Request $request)
    {

        $event = new Event;
        $event->title = $request->title;
        $event->description = $request->description;
        $event->city = $request->city;
        $event->date = $request->date;
        $event->private = $request->private;
        $event->items = $request->items;

        $requestImage = $request->img;
        $extension = $requestImage->extension();

        $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

        $requestImage->move(public_path('imgs/events'), $imageName);

        $event->img = $imageName;

        $event->save();

        return redirect('/')->with('msg', 'Evento criado com sucesso!');
    }

    public function show($id)
    {
        $event = Event::findOrFail($id);
        return view('events.show', ['event' => $event]);
    }

    public function showPolicy()
    {
        $policy = "Conteúdo da política"; // Substitua essa linha pelo conteúdo real da sua política

        return view('policy', compact('policy'));
    }
}
