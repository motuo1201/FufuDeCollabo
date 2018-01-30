<?php
namespace App\Repositories\User;

/**
 * ユーザーIDよりパートナーの情報を取得する。
 * @author Enomoto Yousuke
 */
interface IUser {
    /**
     * ログイン者のパートナー情報を取得する
     */
    public function getPartner();
}
