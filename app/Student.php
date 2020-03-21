<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';

    public function rank_points()
    {
        return $this->hasMany('App\RankPoints');
    }
}
