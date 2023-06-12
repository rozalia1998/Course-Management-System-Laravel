<?php

namespace App\Http\Controllers;

use App\Models\course;
use App\Models\user_course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses =course::all();
        return view('frontend.index',compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $courses=course::all();
        return view('frontend.craete' ,compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $id = Auth::id();

        // $courses=user_course::create([
        //     'user_id'=>Auth::id() ,
        //    'course_id'=>$request->course
        // ] );

        $courses = new user_course();
        $courses->user_id =  Auth::id() ;
        $courses->course_id=$request->course;
    
        $courses->save();
       return redirect()->route('corses.index');

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
