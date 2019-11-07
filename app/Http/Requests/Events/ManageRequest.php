<?php

namespace App\Http\Requests\Events;

use App\Http\Requests\Request;

class ManageRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string',
            'prize' => 'nullable|string',
            'location' => 'required|string',
            'event_date' => 'required|date|after_or_equal:today',
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
				'string' => 'The :attribute must be a string.'];
	}
}
