<?php

namespace App\Http\Controllers;
use App\User;
use App\Upload;
use App\Course;
use Illuminate\Http\Request;

class UserController extends Controller
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
         
        $certificate = Upload::select('filename','course','education_level')->where('education_level', 'Certificate')->get();

        $diploma = Upload::select('filename','course','education_level')->where('education_level', 'Diploma')->get();    

        $count = Course::select()->where('educationlevel_id', '1')->count();
        $count1 = Course::select()->where('educationlevel_id', '2')->count();
        $count2 = Course::select()->where('educationlevel_id', '3')->count();
        $count3 = Course::select()->where('educationlevel_id', '4')->count(); 
             
        return view(
            'student-home',
            compact('certificate'), 
            compact('diploma')
           )->with('count',$count)->with('count1',$count1)->with('count2', $count2)->with('count3',$count3);

    }

    public function showcertificatebooks()
    {
         
    $certificate = Upload::select('filename','course','education_level')->where('education_level', 'Certificate')->get();
             
        return view(
            'auth.student-certificate',
            compact('certificate'), 
           );

    }
    public function showdiplomabooks()
    {
         
        $diploma = Upload::select('filename','course','education_level')->where('education_level', 'Diploma')->get();
             
        return view(
            'auth.student-diploma',
            compact('diploma'), 
           );

    }
    public function showbachelorbooks()
    {
         
        $bachelor = Upload::select('filename','course','education_level')->where('education_level', 'Bachelor')->get();
             
        return view(
            'auth.student-bachelor',
            compact('bachelor'), 
           );

    }

    public function showbooks(){

        return view('auth.student-books');
    }

    
    public function certificatecourses()
    {
         
    $certificateCourses = Course::select('course_name','course_number','educationlevel_id')->where('educationlevel_id', '1')->get();
             
        return view(
            'auth.course.certificate',
            compact('certificateCourses'), 
           );

    }
    public function diplomacourses()
    {
         
        $diplomaCourses = Course::select('course_name','course_number','educationlevel_id')->where('educationlevel_id', '2')->get();
             
        return view(
            'auth.course.diploma',
            compact('diplomaCourses'), 
           );

    }
    public function bachelorcourses()
    {
         
        $bachelorCourses = Course::select('course_name','course_number','educationlevel_id')->where('educationlevel_id', '3')->get();
             
        return view(
            'auth.course.bachelor',
            compact('bachelorCourses'), 
           );

    }
    public function postgraduatecourses()
    {
         
        $postgraduateCourses = Course::select('course_name','course_number','educationlevel_id')->where('educationlevel_id', '4')->get();
             
        return view(
            'auth.course.postgraduate',
            compact('postgraduateCourses'), 
           );

    }


}
