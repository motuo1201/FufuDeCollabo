<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class ChoicePositionController extends Controller
{
    /**
     * 夫・妻の選択画面を表示する
     * @return type
     */
    public function index() {
        return view('auth.choiceposition');
    }
    /**
     * 夫か妻かを選択して会員登録画面へ遷移する
     * @param Request $request
     * @return type
     */
    public function goNext(Request $request){
        $this->validate($request, ['position'=>'required|in:夫,妻']);
        Session::push('position', $request->position);
        return redirect(route('register'))->with('position', $request->position);
    }
}
