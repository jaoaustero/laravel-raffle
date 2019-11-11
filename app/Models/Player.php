<?php

namespace App\Models;

use App\Models\Model;
use App\Models\Traits\Traversify;

class Player extends Model
{
    use Traversify;
    
    protected $guarded = [];

    public static $searchables = ['full_name'];
	public static $filterables = ['event_id', 'is_selected'];
	public static $orderables = ['created_at', 'is_selected'];

    public static function _new($data)
	{
		$class = new self;
		$class->full_name = $data['full_name'];
		$class->email = $data['email'];
		$class->company = $data['company'];
		$class->created_by = 1;
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
            'full_name' => $this->full_name,
            'email' => $this->email,
            'company' => $this->company,
            'is_selected' => $this->is_selected,
            'date_selected' => $this->date_selected
        ];

        if(request()->has('include-event')) $arr['event'] = $this->event;

        return $arr;
    }
}
