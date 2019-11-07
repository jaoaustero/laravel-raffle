<?php

namespace App\Http\Requests\Players;

use App\Http\Requests\Request;
use Illuminate\Validation\Factory as ValidationFactory;
use App\Models\Event;

class ManageRequest extends Request
{
    public function __construct(ValidationFactory $validationFactory)
	{
		$validationFactory->extend('unique_player', function($attribute, $value, $parameters, $validator)
		{      
			$player = new \App\Models\Player;
			
			$data = $validator->getData();

            $results = $player->where('event_id', $data['event_id'])
                              ->where('email', $data['email'])
                              ->get();

			return !($results->count());
        });
        
        $validationFactory->extend('active', function($attribute, $value, $parameters, $validator)
		{      
            
            $data = $validator->getData();
            
			$event = \App\Models\Event::find($data['event_id']);

            return $event->is_active;
		});
    }
    
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'event_id' => 'required|exists:events,id|active',
            'full_name' => 'required|string',
            'email' => 'required|email|unique_player',
            'company' => 'required|string',
        ];
    }

    /**
	 * Custom message for validation
	 *
	 * @return array
	 */
	public function messages()
	{
		return ['required' => 'The :attribute cannot be blank.',
                'string' => 'The :attribute must be a string.',
                'unique_player' => 'The :attribute already registered on this event.',
                'active' => 'The event is already closed.'];
	}
}
