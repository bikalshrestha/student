<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use Illuminate\Pagination\Paginator;
use DB;
use Input;

class StudentsController extends Controller {

    public function index() {
        $data['title'] = "List of students in college.";
        $data['keywords'] = "College, Student, University";
        $data['meta_description'] = "A list of student in a college";
        return view('student', compact('data'));
    }

    public function status($status) {

        $data['title'] = "List of" . $status . "students in college";
        $data['keywords'] = "College, Student, University";
        $data['meta_description'] = "A list of student in a college";
        $data['students'] = Student::where('status', $status)->paginate(5);
        return view('status', compact('data'));
        exit;
    }

}
