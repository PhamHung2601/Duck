<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Test extends Model
{
    /**
     * @var string
     */
    protected $table = 'tests';

    /**
     * @return \Illuminate\Contracts\Routing\UrlGenerator|string
     */
    public function getUrlDetail()
    {
        return url("/test/{$this->id}-" . Str::slug($this->title) . ".html");
    }

}
