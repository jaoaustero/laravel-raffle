<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class SaveWinnerRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'player_id' => 'required|exists:players,id',
            'send_notification' => 'required|in:true,false',
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
                'exists' => 'The player does not exist in our database.'];
	}
}
