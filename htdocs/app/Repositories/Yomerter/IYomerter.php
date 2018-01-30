<?php
namespace App\Repositories\Yometer;

/**
 * ヨメーターに関する処理を行います
 *
 * @author Enomoto Yousuke
 */
interface IYomerter {
    /**
     * 自分自身の最新のコンディションを取得する。
     * @param type $user_id
     */
    public function getLatestCondition(int $user_id);
    /**
     * 自身のパートナーの最新のコンディションを取得する。
     * @param type $partnersId
     */
    public function getLatestPartnersCondition(int $partnersId);
    /**
     * ヨメーターの状態を更新する
     * @param array $condition_info 
     * [user_id,'physicalCondition','mentalCondition','comment']
     */
    public function saveCondition(array $condition_info);
}
