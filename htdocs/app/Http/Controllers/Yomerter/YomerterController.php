<?php

namespace App\Http\Controllers\Yomerter;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Yometer\IYomerter;
use App\Repositories\User\IUser;
use \Illuminate\Support\Facades\Mail;
use App\Mail\YomerterUpdated;

class YomerterController extends Controller
{
    private $yomerter;
    private $userRepository;


    public function __construct(IYomerter $yomerter, IUser $userRepository) {
        $this->yomerter = $yomerter;
        $this->userRepository = $userRepository;
    }

    /**
     * ヨメーターの初期画面
     * @return type
     */
    public function index(){
        $user = \Auth::user();
        $latestCondition = $this->yomerter->getLatestCondition($user->id);
        
        $partner = $this->userRepository->getPartner();
        $partnersCondition = $this->yomerter->getLatestPartnersCondition($partner->id);
        
        return view('yomerter.yomerter', compact('latestCondition','partnersCondition','partner'));
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
                 'comment'           => 'max:255']);
        $user = \Auth::user();
        $param = $request->only(['physicalCondition','mentalCondition','comment']);
        $param['user_id'] = $user->id;
        $this->yomerter->saveCondition($param);
        
        $partner = $this->userRepository->getPartner();
        Mail::to($partner->email)->send(new YomerterUpdated($param,$user->email,$user->name,$partner));
        
        return redirect(route('yomerter'));
    }    
}
