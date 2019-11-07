<?php

namespace App\Http\Controllers\Administration;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::get()->groupBy(function ($val) {
            return \Carbon\Carbon::parse($val->event_date)->format('m-Y');
        });

        return view('administration.events.index')->with(['events' => $events, 'title' => 'Events']);
    }

    public function view($slug)
    {
        $event = Event::where('slug', $slug)->first();

        if(!$event) return abort(404);

        return view('administration.events.details')->with(['event' => $event, 'title' => $event->name]);
    }
}
