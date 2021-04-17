<?php

namespace App\Service\Point;

use App\Http\Requests\Point\SendRequest;

class SendService
{
    public function send(SendRequest $request)
    {
        dd('sendService!');
    }
}
