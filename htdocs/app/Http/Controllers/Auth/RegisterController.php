<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        //TODO:バリデーションが不十分
        //パートナーのemailユニークチェック
        //登録者とパートナーが同じemailアドレスだった場合のvalidation
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'partners-name' => 'required|string|max:255',
            'partners-email' => 'required|string|email|max:255',
            'partners-password' => 'required|string|min:6|confirmed',

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $fufuId = md5(uniqid(rand(),1));
        //パートナーの情報を登録する
        User::create([
            'name' => $data['partners-name'],
            'email' => $data['partners-email'],
            'password' => bcrypt($data['partners-password']),
            'fufuId' => $fufuId,
            'position' => ($data['position'])==="妻"?"夫":"妻",
        ]);
        //メインユーザーの登録を行う。
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'fufuId' => $fufuId,
            'position' => $data['position']
        ]);
    }
}
