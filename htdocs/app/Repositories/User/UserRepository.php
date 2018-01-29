<?php

namespace App\Repositories\User;

use App\Models\User;

class UserRepository implements IUserRepository{
    /**
     * {@inheritdoc}
     */
    public function getPartner() {
        $user = \Auth::User();
        return User::where('fufuId',$user->fufuId)->where('position','<>',$user->position)->first();
    }
}
