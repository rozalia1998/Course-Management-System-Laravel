<?php

namespace App\Http\Controllers;

use App\Models\course;
use App\Models\user_course;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
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
        $course_id=$request->course;
        $course=course::findorfail($course_id);
        if(auth()->user()->courses->contains($course_id)){
            return redirect()->route('corses.index');
        }
        else
        {
            $course->users()->attach(Auth::id());
            $course->save();
            return redirect()->route('corses.index');
        }
        
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
    public function showMyCourses(){
        
        $user = auth()->user();
        $courses = $user->courses;
        return view('frontend.show',compact('courses'));
    }
    public function showUsersWithCourses(){
        $users = User::has('courses', '>', 1)->get();
        return view('Dashboard/pages/Show/UsersWithCourses',compact('users'));
    }


    public function userEnrolledFront(){
        $users = User::whereHas('courses', function($query) {
            $query->where('name', 'front end');
        })->get();
        return view('Dashboard/pages/Show/UsersWithCourses',compact('users'));
    }

    public function morethan1000(){  
        $users = User::withSum('courses', 'price')
        ->having('courses_sum_price', '>', 1000000)
        ->get();

        return view('Dashboard/pages/Show/UsersWithCourses',compact('users'));
    }
}
