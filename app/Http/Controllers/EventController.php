<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;

class EventController extends Controller
{
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

    public function thankyou()
    {
        return view('events.thankyou');
    }
}
