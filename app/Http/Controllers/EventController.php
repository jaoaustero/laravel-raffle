<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::get()->groupBy(function ($val) {
            return \Carbon\Carbon::parse($val->event_date)->format('m-Y');
        });

        return view('administration.events.index')->with(['events' => $events]);
    }
    
    public function view($slug)
    {
        $event = Event::where('slug', $slug)->first();

        if(!$event) return abort(404);

        return view('events.details')->with(['event' => $event]);
    }

    public function registration($slug)
    {
        $event = Event::where('slug', $slug)->first();

        if(!$event) return abort(404);

        return view('events.register')->with(['event' => $event]);
    }
}
