<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    /** チームが所属するリーグを取得 **/
    public function league()
    {
        return $this->belongsTo('App\League');
    }
    
    /** チームに関する記事を取得 **/
    public function posts()
    {
        return $this->hasMany('App\Post');
    }
    
    /** プルダウンリスト用 **/
    public function getTeamLists()
    {
        return $this->orderBy('id','asc')->pluck('name', 'id');
    }
}
