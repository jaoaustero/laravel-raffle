<?php

namespace App\Models;

use App\Models\Model;
use App\Models\Traits\Traversify;

class Player extends Model
{
    use Traversify;
    
    protected $guarded = [];

    public static function _new($data)
	{
		$class = new self;
		$class->first_name = $data['first_name'];
		$class->last_name = $data['last_name'];
		$class->email = $data['email'];
		$class->company = $data['company'];
		$class->created_by = Auth::id();
		return $class;
	}

    public function event()
    {
        return $this->belongsTo('App\Models\Event');
    }

    public function toArray()
    {
        $arr = [
            'id' => $this->id,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'company' => $this->company,
            'is_selected' => $this->is_selected,
            'date_selected' => $this->date_selected
        ];

        if(request()->has('include-event')) $arr['event'] = $this->event;

        return $arr;
    }
}
