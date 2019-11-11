<?php

namespace App\Http\Controllers\API\Administration;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\UserProfile;

use App\Http\Requests\Users\ManageRequest;

class UserController extends Controller
{
    public function __construct()
	{
		// $this->middleware('auth.permission');
    }

    public function store(ManageRequest $request)
	{
        $user = User::_store($request);

        $user->userProfile()->save(UserProfile::_new($request));

        return $user;
    }

    public function edit(Request $request, $id)
	{
        $user = User::find($id);
        
        if(!$user) return abort('Resources not found');

		return $user->toArrayEdit();
    }
    
    public function update(ManageRequest $request, $id)
    {
        $user = User::find($id);
        
        if(!$user) return abort('Resources not found');;

        $user->update(User::_update($request));

        $updated = User::find($id);

        return $updated;
    }
}
