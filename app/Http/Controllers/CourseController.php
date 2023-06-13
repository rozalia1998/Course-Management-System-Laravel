<?php

namespace App\Http\Controllers;

use App\Models\course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = course::all();
        return view('Dashboard.course.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Dashboard.course.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        course::create([
            'name' => $request->name,
            'price' => $request->price,
          
            ]);
            return redirect('course');
    }

    /**
     * Display the specified resource.
     */
    public function show(course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $course = course::findorfail($id);
        return view('Dashboard.course.edit',compact('course'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $course = Course::findorfail($id);
        $course->update([
            'name' => $request->name,
            'price' => $request->price

        ]);
        return redirect('course');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        Course::findorfail($id)->delete();

        return to_route('Dashboard.course.index');
    }
    public function buy(course $course)
    {
        //
    }
    public function softdelete( string $id)  {
        $cours = course::findOrFail($id);
        $cours->delete();
        return to_route('course.index');
    }
    public function showSoft()
    {
        $courses = Course::onlyTrashed()->get();
        return view('Dashboard.course.soft', compact('courses'));
    }

    public function restore($id)
    {
        Course::withTrashed()->where('id', $id)
            ->restore();
            return redirect('course');
    }

}
