<?php

namespace App\Http\Controllers\API\Administration;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Event;

use App\Http\Requests\Events\ManageRequest;

class EventController extends Controller
{
    public function __construct()
	{
		// $this->middleware('auth.permission');
    }
    
    public function index(Request $request)
    {
        $request->merge(['order' => ['created_at' => 'desc']]);

		$class = new Event;

		return $class->traversify();
    }

    public function store(ManageRequest $request)
	{
        $event = Event::_store($request);

        $event->_generateQrCode();
        
        return $event;
    }

    public function show(Request $request, $id)
	{
		$event = Event::findOrDie($id);

		return $event;
    }
    
    public function edit(Request $request, $id)
	{
		$event = Event::findOrDie($id);

		return $event->toArrayEdit();
	}
    
    public function update(ManageRequest $request, $id)
    {
        $event = Event::findOrDie($id);

        $event->update(Event::_update($request));

        $updated = Event::find($id);

        $updated->_generateQrCode();

        return $updated;
    }

    public function changeActive(Request $request, $id)
    {
        $event = Event::findOrDie($id);

        $event->update(['is_active' => ($event->is_active ? 0 : 1)]);

        return $event;
    }

    public function destroy(Request $request, $id)
    {
        $event = Event::findOrDie($id);

        $event->players()->delete();

        $event->delete();

        return response(['message' => 'Event has been deleted!'], 200);
    }
}
