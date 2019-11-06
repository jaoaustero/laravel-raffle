<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;
use App\Models\Traits\SoftDeletes;

class Model extends Eloquent
{
    use SoftDeletes;

    public static function findOrDie($id)
    {
        $_instance = self::find($id);

        !$_instance && abort(404, 'Resource not found');

        return $_instance;
    }
}
