<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

/**
 * Class StudentController
 * @package App\Http\Controllers
 */
class StudentController extends Controller
{
    /**
     *
     */
    public function getStudentWithRanking()
    {
        print_r(Student::all());die();
    }
}
