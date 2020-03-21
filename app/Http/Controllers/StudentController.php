<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function getStudentWithRanking()
    {
        print_r(Student::all());die();
    }
}
