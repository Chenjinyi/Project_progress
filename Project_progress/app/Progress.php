<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Progress extends Model
{
    //指定数据表
    protected $table = 'progress';
    public function project(){
        return $this->belongsTo('App\Project','project_id');
    }
}
