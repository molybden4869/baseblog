<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class League extends Model
{
    /** リーグに所属しているチームを取得 **/
     public function teams()
    {
        return $this->hasMany('App\Team');
    }
}
