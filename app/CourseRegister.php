<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

/**
 * Class CourseRegister
 * @package App
 */
class CourseRegister extends Model
{
    /**
     * @var string
     */
    protected $table = 'course_register';

    protected $fillable = [
        'name', 'email', 'phone', 'address'
    ];

}
