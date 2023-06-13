<?php

namespace App\Http\Controllers;

use App\Models\course;
use App\Models\user_course;
use Illuminate\Http\Request;

class UserCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $user_courses = user_course::all();
        return view('usercourse.index', compact('user_courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $user_courses = course::all();
        return view('usercourse.create',compact('user_courses'));
      
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        
        user_course::create([
        'user_id' => $request->user_id,
        'course_id' => $request->course_id,
      
        ]);
        return redirect('usercourse');
    }

    /**
     * Display the specified resource.
     */
    public function show(user_course $user_course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(user_course $user_course)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, user_course $user_course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(user_course $user_course)
    {
        //
    }
}
