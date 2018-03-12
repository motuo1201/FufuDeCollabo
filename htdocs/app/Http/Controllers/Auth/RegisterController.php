<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
    /**
     * 最初のメインユーザー登録画面を表示する。
     * @param Request $request
     * @return type
     */
    public function showRegistrationForm(Request $request)
    {
        //直接遷移は禁止。必ず夫か妻かを選んでもらう
        if(session('position') === null){
            return redirect(route('choice-position'));
        }
        return view('auth.register');
    }
    /**
     * 最初に登録するメインユーザーの情報を検証し、セッションに情報を保持する。
     * @param Request $request
     * @return type
     */
    public function setFistUser(Request $request){
        $this->validate($request, [
            'name'              => 'required|string|max:255',
            'email'             => 'required|string|email|max:255|unique:users',
            'password'          => 'required|string|min:6|confirmed',
            'position'          => 'required|in:夫,妻'
        ]);
        Session::put('name',$request->name);
        Session::put('email',$request->email);
        Session::put('password',$request->password);
        Session::put('first-position',$request->position);
        return redirect(route('register-partner'));
    }

    /**
     * パートナー登録画面へ遷移する。
     * @param Request $request
     */  
    public function showRegisterPartner(Request $request){
        return view('auth.registerPartner');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name'              => 'required|string|max:255',
            'email'             => 'required|string|email|max:255|unique:users',
            'password'          => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * 夫婦双方の情報を登録する。
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $fufuId = md5(uniqid(rand(),1));
        //パートナーの情報を登録する
        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'fufuId' => $fufuId,
            'position' => (session('first-position')==='夫')?'妻':'夫'
        ]);
        //メインユーザーの登録を行う。
        return User::create([
            'name' => session('name'),
            'email' => session('email'),
            'password' => bcrypt(session('password')),
            'fufuId' => $fufuId,
            'position' => session('first-position')
        ]);
    }
}
