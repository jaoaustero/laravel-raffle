<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Event;
use App\Models\Player;
use App\Models\Traits\Mailer;

use App\Http\Requests\Players\ManageRequest;
use App\Http\Requests\SaveWinnerRequest;

class RaffleManagementController extends Controller
{
    use Mailer;

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

    public function saveWinner(SaveWinnerRequest $request)
    {
        $player = Player::findOrDie($request->input('player_id'));

        if($player->is_selected) return response(['message' => $player->full_name . ' is already a winner.'], 422);

        $event = $player->event->name;

        if($request->input('send_notification')):
            Mailer::send(
                $player->email,
                'mail.winner',
                $event . ' | GMI Events',
                ['event' => $player->event, 'player' => $player]
            );
        endif;

        $player->update(['is_selected' => 1, 'date_selected' => now()]);

        return response(['message' => 'Update successfully!'], 200);
    }
}
