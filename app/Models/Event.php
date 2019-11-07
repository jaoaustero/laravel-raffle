<?php

namespace App\Models;

use App\Models\Model;
use App\Models\Traits\Traversify;
use App\Models\Traits\FileStorage;
use Illuminate\Support\Facades\Storage;

class Event extends Model
{
    use Traversify, FileStorage;
    
    protected $guarded = [];

    public static $searchables = ['name', 'prize'];
	public static $filterables = ['is_active'];
	public static $orderables = ['created_at'];

    public static function _store($data)
	{
        $class = new self;
		$class->slug = slugifyEvent($data['name']);
		$class->name = $data['name'];
		$class->prize = $data['prize'];
		$class->location = $data['location'];
        $class->event_date = $data['event_date'];
        $class->is_active = 1;
		$class->created_by = 1;
        $class->save();
        
        return $class;
    }
    
    public static function _update($data)
	{
		return [
            'slug' => slugifyEvent($data['name']),
            'name' => $data['name'],
            'prize' => $data['prize'],
            'location' => $data['location'],
            'event_date' => $data['event_date'],
            'updated_by' => 1
        ];
    }

    public function _generateQrCode()
    {
        $path = 'events/';
        $path .= now()->format('Y') . '/' . now()->format('F') . '/' . now()->format('d') . '/';
        $path .= (time() . '-' . $this->id . '.png');

        $link = env('APP_URL') . '/' . $this->slug . '/registration';

        $file = \QrCode::format('png')
                        ->merge('img/GMI-emblem.png', 0.2, true)
                        ->size(500)
                        ->generate($link);

        $this->saveFile($file, $path);

        $this->update(['path' => $path]);

        return $path;
    }

    public function players()
    {
        return $this->hasMany('App\Models\Player');
    }

    public function winners()
    {
        return $this->players()->where('is_selected', 1)->get();
    }

    public function toArray()
    {
        $arr = [
            'id' => $this->id,
            'slug' => $this->slug,
            'name' => $this->name,
            'prize' => $this->prize,
            'location' => $this->location,
            'event_date' => (new \DateTime($this->event_date))->format('F d, Y'),
            'is_active' => $this->is_active,
            'path' => env('APP_URL') . '/storage/' . $this->path,
            'winners' => $this->winners(),
        ];

        if(request()->has('include-players')) $arr['players'] = $this->players;

        return $arr;
    }

    public function toArrayEdit()
    {
        return [
            'id' => $this->id,
            'slug' => $this->slug,
            'name' => $this->name,
            'prize' => $this->prize,
            'location' => $this->location,
            'event_date' => $this->event_date
        ];
    }
}
