<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Event;
use App\Models\Player;

use App\Http\Requests\Players\ManageRequest;

class EventController extends Controller
{
    public function __construct()
	{
		// $this->middleware('auth.permission');
    }
    
    public function register(ManageRequest $request)
    {
        $event = Event::findOrDie($request->input('event_id'));

        if(!$event->is_active) return response(['error' => ['event' => ['Event is already closed.']]], 422);

        $event->players()->save(Player::_new($request));

        return response(['message' => 'Registered successfully!'], 200);
    }
}
