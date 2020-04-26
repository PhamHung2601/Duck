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
        return url("/tin-tuc/{$this->id}-" . Str::slug($this->title) . ".html");
    }

    public function getListUrlByTag($tag)
    {
        return url("/tin-tuc?tag=" . $tag);
    }

    /**
     * The roles that belong to the user.
     */
    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function related()
    {
        return $this->belongsToMany(RelatedNews::class, 'related_news');
    }
}
