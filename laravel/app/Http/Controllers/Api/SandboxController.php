<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SandboxController extends Controller
{
    public function get(Request $request)
    {
        dd(User::find(1));
        logger('aaa!');

        // Accept-Language: ja-JP,ja;q=0.9,en-US;q=0.8,en;q=0.7
        // ja-JP
        $lang = locale_accept_from_http($request->server->get('HTTP_ACCEPT_LANGUAGE'));
        dd($lang. "!");
    }
}
