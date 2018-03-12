<?php

namespace App\Http\Controllers\Yomerter;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DemoYomerterController extends Controller
{
    public function index(Request $request) {
        $latestCondition = factory(\App\Models\Yomerter::class)->make();
        
        $partner      = factory(\App\Models\User::class)->make(['name'=>'パートナー']);
        $partnersCondition = factory(\App\Models\Yomerter::class)
                ->make(['physicalCondition'=>60,'mentalCondition'=>40,'comment'=>'今の状態とコメント']);

        return view('yomerter.yomerter', compact('latestCondition','partnersCondition','partner'));
    }
}
