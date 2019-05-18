<?php

namespace App\Http\Controllers;

use Auth;
use Validator;
use App\Models\Course;
use Illuminate\Http\Request;
use App\Models\TypeCourse;

class CourseController extends Controller
{

    private $rules = [
        'name' => 'bail | required | string | max:350',
        'duration' => 'bail | required | string | max:350',
        'type_course_id' => 'bail | required| numeric',
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::all();

        return view('courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types_courses = TypeCourse::all();

        return view('courses.create', compact('types_courses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),$this->rules);

        if ($validator->fails()) {
            return redirect('/admin/course/create')
                        ->withErrors($validator)
                        ->withInput();
        }

            $truck = new Course();
            $truck->name = $request->name;
            $truck->duration = $request->duration;
            $truck->type_course_id = $request->type_course_id;
            $truck->user_id = Auth::id();
            $truck->save();

            return back()->with('status', '¡Saved course!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        $course = Course::findOrFail($course->id);

        return view('courses.show', compact('course'));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        $course = Course::find($course->id);
		$course->delete();

		return back()->with('status', 'Delete course!');
    }
}
