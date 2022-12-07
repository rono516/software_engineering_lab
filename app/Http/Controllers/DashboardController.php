<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $courses = Course::where('user_id', '=', Auth()->user()->id)->get();
        return view('dashboard')->with([
            'courses' => $courses
        ]);
    }
}
