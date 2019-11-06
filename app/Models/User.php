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
		$class->username = $data['username'];
		$class->password = bcrypt($data['password_confirmation']);
		$class->is_enabled = 1;
		$class->created_by = Auth::id();
        $class->save();
        
        return $class;
	}

	public static function _update($data)
	{
		return ['username' => $data['username'],
				'updated_by' => Auth::id()
			];
	}

    public function userProfile()
	{
		return $this->hasOne('App\Models\UserProfile');
	}

    public function toArray()
	{
		$arr =  ['id' => $this->id,
				 'username' => $this->username,
				 'is_enabled' => $this->is_enabled,
				 'user_profile' => $this->userProfile
				];

		return $arr;
	}
}
