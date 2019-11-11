<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    public static function _store($data)
	{
        $class = new self;
		$class->email = $data['email'];
		$class->password = bcrypt('secret');
		$class->is_enabled = 1;
		$class->created_by = 1;
        $class->save();
        
        return $class;
	}

	public static function _update($data)
	{
		return ['email' => $data['email'],
				'updated_by' =>1
			];
	}

    public function userProfile()
	{
		return $this->hasOne('App\Models\UserProfile');
	}

    public function toArray()
	{
		$arr =  ['id' => $this->id,
				 'email' => $this->email,
				 'is_enabled' => $this->is_enabled,
				 'user_profile' => $this->userProfile
				];

		return $arr;
    }
    
    public function toArrayEdit()
	{
		$arr =  ['id' => $this->id,
				 'email' => $this->email,
				 'first_name' => $this->userProfile->first_name,
				 'last_name' => $this->userProfile->last_name
				];

		return $arr;
	}
}
