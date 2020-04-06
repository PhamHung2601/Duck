<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

/**
 * Class Document
 * @package App
 */
class Document extends Model
{
    /**
     * @var string
     */
    protected $table = 'documents';

    /**
     * @return \Illuminate\Contracts\Routing\UrlGenerator|string
     */
    public function getUrlDetail()
    {
        return url("/tai-lieu/{$this->id}-" . Str::slug($this->title) . ".html");
    }

}
