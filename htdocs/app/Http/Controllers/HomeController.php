<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\User\IUser;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(IUser $user)
    {
        $partner = $user->getPartner();
        return view('home',compact('partner'));
    }
}
