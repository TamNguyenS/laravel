<?php

namespace App\Http\Controllers;

use App\Models\Course;

use App\Http\Requests\UpdateCourseRequest;
// use Illuminate\Http\Client\Request;
use Illuminate\Http\Request;

class CourseController extends Controller
{

    public function index()
    {
        $data = Course::query()->get();
        return view('course.index', [
            'data' => $data,
        ]);
    }


    public function create()
    {
        return view('course.create');
    }


    public function store(Request $request)
    {
        $request->except('_token');
        $object = new Course();
        $object->fill($request->all());
        $object->save();

        return redirect()->route('course.index');
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        return view('course.edit', [
            'each' => $course,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCourseRequest  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        $course->fill($request->all());
        $course->save();

        return redirect()->route('course.index');
    }
    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->route('course.index');
    }
}
