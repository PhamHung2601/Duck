<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'tag';

    /**
     * The news that belong to the tag.
     */
    public function news()
    {
        return $this->belongsToMany('App\News');
    }
}
