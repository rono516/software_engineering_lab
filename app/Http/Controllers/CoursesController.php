<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function create(){
        return view('courses.create');
    }

    public function store(Request $request){
        $validData = $request->validate([
            'title' => 'required',
            'short_description' => 'required',
            'price' => 'required',
            'image_url' => 'required'
        ]);

        $validData['user_id'] = auth()->user()->id;

        Course::create($validData);

        return redirect('/dashboard');

    }
}
