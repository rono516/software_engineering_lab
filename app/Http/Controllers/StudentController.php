<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    
    public function index(){
        $students = User::where('user_group', '=', 3)->get();
        return view('students.index')->with([
            'students' => $students
        ]);
    }
}
