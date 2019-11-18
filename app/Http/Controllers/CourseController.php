<?php

namespace App\Http\Controllers;
use App\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth:staff');
    }

    public function index()
    {
        //
        $course = Course::all();
        return view('staff.course.courses',compact('course'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function certificatecourses()
    {
         
    $certificateCourses = Course::select('course_name','course_number','educationlevel_id')->where('educationlevel_id', '1')->get();
             
        return view(
            'staff.course.certificate',
            compact('certificateCourses'), 
           );

    }
    public function diplomacourses()
    {
         
        $diplomaCourses = Course::select('course_name','course_number','educationlevel_id')->where('educationlevel_id', '2')->get();
             
        return view(
            'staff.course.diploma',
            compact('diplomaCourses'), 
           );

    }
    public function bachelorcourses()
    {
         
        $bachelorCourses = Course::select('course_name','course_number','educationlevel_id')->where('educationlevel_id', '3')->get();
             
        return view(
            'staff.course.bachelor',
            compact('bachelorCourses'), 
           );

    }
    public function postgraduatecourses()
    {
         
        $postgraduateCourses = Course::select('course_name','course_number','educationlevel_id')->where('educationlevel_id', '4')->get();
             
        return view(
            'staff.course.postgraduate',
            compact('postgraduateCourses'), 
           );

    }


    public function create()
    {
        //
        return view('staff.course.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
         'course_name' => 'required|max:255',
         'course_number' => 'required|max:5',
         'educationlevel_id' => 'required|max:1',
         
     ]);

      if ($validatedData){

     $course = Course::create($validatedData);

     return redirect('/courses')->with('status', 'Course is successfully Registered');
      } else{
     return redirect('/courses')->with('status-fail', 'Course Registration, Failed');
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $course = Course::findOrFail($id);

    return view('staff.course.edit', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
         $validatedData = $request->validate([
         'course_name' => 'required|max:255',
         'course_number' => 'required|max:5',
         'educationlevel_id' => 'required|max:1',
         
     ]);

      if ($validatedData){

     Course::whereId($id)->update($validatedData);

     return redirect('/courses')->with('status', 'Course is successfully Updated');
      } else{
     return redirect('/courses')->with('status-fail', 'Course Updation, Failed');
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $course = Course::findOrFail($id);

         if($course){

        $course->delete();

    return redirect('/courses')->with('status', 'Course is successfully Deleted');

        }else{

    return redirect('/courses')->with('status-fail', 'Course Deletion, Failed');  
        }

    }    

}
