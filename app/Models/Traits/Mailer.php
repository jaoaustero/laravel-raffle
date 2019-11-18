<?php

namespace App\Models\Traits;

use App\Mail\BuildMailable;
use Illuminate\Support\Facades\Mail;

trait Mailer
{
    public static function send($to, $view, $subject, $model)
    {
        $moreUsers = ['chenee.olesco@gigamare.com', 'jari.ullakonoja@gigamare.com'];
		$data = ['view' => $view, 'subject' => $subject, 'model' => $model];
		
        Mail::to($to)
            ->cc($moreUsers)
            ->send(new BuildMailable($data));

        return count(Mail::failures()) > 0;
    }
}
