<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

/**
 * Class News
 * @package App
 */
class News extends Model
{
    /**
     * @var string
     */
    protected $table = 'news';

    /**
     * @return \Illuminate\Contracts\Routing\UrlGenerator|string
     */
    public function getUrlDetail()
    {
        return url("/new/{$this->id}-" . Str::slug($this->title) . ".html");
    }
}
