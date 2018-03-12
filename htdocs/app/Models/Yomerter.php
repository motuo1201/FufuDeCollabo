<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Yomerter
 *
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Yomerter partnersCondition($partnersId)
 * @mixin \Eloquent
 */
class Yomerter extends Model
{
    protected $table = 'Yomerter';
    protected $fillable = ['user_id','physicalCondition','mentalCondition','comment'];
    protected $attributes = [
        'physicalCondition' => 50,
        'mentalCondition'   => 50,
        'comment'           => null
    ];

    /**
     * ユーザーテーブルを取得する。
     * @return type
     */
    public function user(){
        return $this->belongsTo(User::class);
    }
    /**
     * パートナーのコンディションを取得する
     * @param type $query
     * @param type $partnersId
     * @return type
     */
    public function scopePartnersCondition($query,$partnersId){
        return $query->where('user_id',$partnersId)->orderby('created_at','desc');
    }
}
