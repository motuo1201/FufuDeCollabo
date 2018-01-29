<?php
namespace App\Repositories;

/**
 * ユーザーIDよりパートナーの情報を取得する。
 * @author Enomoto Yousuke
 */
interface IUserRepository {
    /**
     * ログイン者のパートナー情報を取得する
     */
    public function getPartner();
}
