<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'team_id',
        'title',
        'body',
    ];
    
    /** 記事と関連するチームを取得 **/
    public function team()
    {
        return $this->belongsTo('App\Team');
    }
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
