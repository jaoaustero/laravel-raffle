<?php

namespace App\Http\Requests\Users;

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
            'email' => 'required|email',
            'first_name' => 'required|string',
            'last_name' => 'required|string',
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
