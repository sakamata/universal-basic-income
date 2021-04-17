<?php

namespace App\Http\Controllers\Api\Point;

use App\Http\Controllers\Controller;
use App\Http\Requests\Point\SendRequest;
use App\Service\Point\SendService;
use Illuminate\Http\Request;

class SendController extends Controller
{
    private $sendService;

    public function __construct(SendService $sendService)
    {
        $this->sendService = $sendService;
    }

    /**
     * ポイントの送信を行う
     *
     * @param SendRequest $request
     * @return void
     */
    public function send(SendRequest $request)
    {
        $this->sendService->send($request);
    }
}
