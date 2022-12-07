<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Models\CourseStudent;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function root(){
        $courses = Course::orderBy('created_at', 'desc')->take(3)->get();
     
        return view('welcome')->with([
            'courses' => $courses
        ]);
    }

    public function start($id){

        $course = Course::find($id);

        $courseStudent = new CourseStudent();
        $courseStudent->course_id = $course->id;
        $courseStudent->user_id = Auth::id();
        $courseStudent->save();

        return redirect('/my_courses');
       

    }


    public function my_courses(){
        $courseStudent = CourseStudent::all(); 
        // $coursesStudent = CourseStudent::orderBy('id', 'DESC')->where('user_id', Auth::id())->first();
        // $courses = Course::all()->where('id', '=', $courseStudent->course_id);
        dd($courseStudent->courses->count());
        return view('courses.my_courses')->with([
            // 'coursesStudent' => $coursesStudent,
            // 'courses' => $courses
        ]);
    }
}
