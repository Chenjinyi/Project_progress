<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //指定数据表
    protected $table = "project";
    public function user(){
        return $this->belongsTo('\App\User');
    }
}
