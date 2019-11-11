<?php

namespace App\Http\Controllers\API\Administration;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Player;

class PlayerController extends Controller
{
	public function index(Request $request)
	{
		$class = new Player;

		return $class->traversify();
	}
}
