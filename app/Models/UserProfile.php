<?php

namespace App\Models;

use App\Models\Model;

class UserProfile extends Model
{
    protected $guarded = [];

    public static function _new($data)
	{
		$class = new self;
		$class->first_name = $data['first_name'];
		$class->last_name = $data['last_name'];
		$class->created_by = Auth::id();
		return $class;
	}

	public static function _update($data)
	{
		return ['first_name' => $data['first_name'],
				'last_name' => $data['last_name'],
				'updated_by' => Auth::id()
			];
    }
    
    public function user()
	{
		return $this->belongsTo('App\Models\User');
    }
    
    public function toArray()
	{
		$arr =  ['first_name' => $this->first_name,
				 'last_name' => $this->last_name
				];
		
		return $arr;
	}
}
