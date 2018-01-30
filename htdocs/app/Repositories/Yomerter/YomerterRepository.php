<?php
namespace App\Repositories\Yometer;

use App\Models\Yomerter;

class YomerterRepository implements IYomerter {
    /**
     * {@inheritdoc}
     */
    public function getLatestCondition(int $user_id) {
        $yomerter = Yomerter::where('user_id',$user_id)->orderby('created_at','desc')->first();
        return $this->firstOrNew($yomerter);
    }
    /**
     * {@inheritdoc}
     */
    public function getLatestPartnersCondition(int $partnersId){
        $yomerter = Yomerter::PartnersCondition($partnersId)->first();
        return $this->firstOrNew($yomerter);
    }
    /**
     * 取得した結果がnullの場合はヨメーターの初期モデルを返却する。
     * @param type $yomerter
     * @return Yomerter
     */
    private function firstOrNew($yomerter){
        if(!$yomerter){
            return new Yomerter();
        }else{
            return $yomerter;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function saveCondition(array $condition_info){
        $yomerter = new Yomerter();
        $yomerter->fill($condition_info);
        return $yomerter->save();
    }
}
