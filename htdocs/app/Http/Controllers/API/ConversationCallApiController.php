<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\WatsonConversationService;

class ConversationCallApiController extends Controller
{
    /**
     * Watson Conversationを呼び出し、結果をjson形式で返却する。
     * @param Request $request
     * @param WatsonConversationService $conversation
     * @return type json
     */
    public function callApi(Request $request, WatsonConversationService $conversation){
        $this->validate($request, ['spokenword'=>'required']);
        $context = (!$request->context)?'':$request->context;
        $test = $conversation->sendRequest($request->spokenword, $context);
        return $test;
    }
}
