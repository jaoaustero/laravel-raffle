<?php

namespace App\Models;

use App\Models\Model;
use App\Models\Traits\Traversify;

class Event extends Model
{
    use Traversify;
    
    protected $guarded = [];

    public static function _store($data)
	{
        $class = new self;
		$class->slug = slugifyEvent($data['name']);
		$class->name = $data['name'];
		$class->prize = $data['prize'];
		$class->is_active = $data['is_active'];
		$class->created_by = Auth::id();
        $class->save();
        
        return $class;
    }
    
    public static function _update($data)
	{
		return [
            'slug' => slugifyEvent($data['name']),
            'name' => $data['name'],
            'prize' => $data['prize'],
            'updated_by' => Auth::id()
        ];
    }

    public function players()
    {
        return $this->hasMany('App\Models\Player');
    }

    public function toArray()
    {
        $arr = [
            'id' => $this->id,
            'slug' => $this->slug,
            'name' => $this->name,
            'prize' => $this->prize
        ];

        if(request()->has('include-players')) $arr['players'] = $this->players;

        return $arr;
    }
}
