<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function get_all_student(){
        $data = Student::all();
        return view('student_manage',['students'=>$data]);
    }
}
