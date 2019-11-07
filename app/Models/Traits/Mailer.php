<?php

namespace App\Models\Traits;

use App\Mail\BuildMailable;
use Illuminate\Support\Facades\Mail;

trait Mailer
{
    public static function send($to, $view, $subject, $model)
    {
		$data = ['view' => $view, 'subject' => $subject, 'model' => $model];
		
		Mail::to($to)->send(new BuildMailable($data));

        return count(Mail::failures()) > 0;
    }
}
