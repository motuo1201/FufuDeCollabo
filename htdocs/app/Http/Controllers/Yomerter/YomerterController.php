<?php

namespace App\Http\Controllers\Yomerter;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Yometer\IYomerter;
use App\Repositories\User\IUser;

class YomerterController extends Controller
{
    private $yomerter;
    
    public function __construct(IYomerter $yomerter) {
        $this->yomerter = $yomerter;
    }

    /**
     * ヨメーターの初期画面
     * @return type
     */
    public function index(IUser $userRepository){
        $user = \Auth::user();
        $latestCondition = $this->yomerter->getLatestCondition($user->id);
        
        $partner = $userRepository->getPartner();
        $partnersCondition = $this->yomerter->getLatestPartnersCondition($partner->id);
        
        return view('yomerter.yomerter', compact('latestCondition','partnersCondition'));
    }
    /**
     * 現在のヨメーターの状態を登録する。
     * @param Request $request
     * @return type
     */
    public function post(Request $request) {
        $this->validate($request, 
                ['physicalCondition' => 'integer|between:0,100',
                 'mentalCondition'   => 'integer|between:0,100',
                 'comment'           => 'required']);
        $user = \Auth::user();
        $param = $request->only(['physicalCondition','mentalCondition','comment']);
        $param['user_id'] = $user->id;
        $this->yomerter->saveCondition($param);
        return redirect(route('yomerter'));
    }    
}
