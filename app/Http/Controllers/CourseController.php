<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\UserCourse;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{

    public function index(){
        return view('courses.index', [
            'courses'=> Course::latest()->filter(request(['category']))->paginate(5)
        ]);
    }
    
    public function show(Course $course){
        $userId = Auth::id();
        $selected = UserCourse::all();
        $selections = array();
        foreach($selected as $select){
            if($select->user_id == $userId) {
                array_push($selections, $select->course_id);
            }
        }

        return view('courses.show', [
            'course'=> $course,
            'selected'=> $selections
        ]);
    }

    public function view(){
        $userId = Auth::id();
        $user_courses = UserCourse::all();
        $course_ids = array();
        foreach($user_courses as $user_course){
            if($userId == $user_course->user_id){
                array_push($course_ids, $user_course->course_id);
            }
        }


        $courses = Course::all();
        $added_courses = array();
        foreach($courses as $course){
            if (in_array($course->id, $course_ids)){
                array_push($added_courses, $course);
            }
        }

        return view('courses.view', ['courses' => $added_courses]);
    }

    public function store(Course $course){
        $userId = Auth::id();

        $data = array(
            'user_id' => $userId, 
            'course_id' => $course->id
        );

        UserCourse::create($data);

        return redirect('/')->with('success', 'Course added successfully!');
    }

    public function remove(Course $course){
        $userId = Auth::id();
        UserCourse::where('user_id', $userId)->where('course_id', $course->id)->delete();

        return redirect('/courses/view')->with('success', 'Course removed successfully!');
    }
}
