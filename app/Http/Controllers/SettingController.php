<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function updateFullname(Request $request)
    {
        $user = auth()->user();
        
        $user->userProfile()
            ->update(['first_name' => $request->input('first_name'),
                      'last_name' => $request->input('last_name')]);

        return $user;
    }

    public function updateEmail(Request $request)
    {
        $user = Auth::user();

        $user->update(['email' => $request->input('email')]);

        return $user;
    }

    public function changePassword(Request $request)
    {
        $user = Auth::user();

        $user->update(['password' => bcrypt($request->input('email'))]);

        return $user;
    }
}
