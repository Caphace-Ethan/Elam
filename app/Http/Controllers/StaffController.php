<?php

namespace App\Http\Controllers;
//use App\Upload;
use App\Staff;
use App\User;
use App\Course;
use Illuminate\Http\Request;

class StaffController extends Controller
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
        $staffs = Staff::all();
        $users = User::all();
        $count = Course::select()->where('educationlevel_id', '1')->count();
        $count1 = Course::select()->where('educationlevel_id', '2')->count();
        $count2 = Course::select()->where('educationlevel_id', '3')->count();
        $count3 = Course::select()->where('educationlevel_id', '4')->count();
        return view(
             'staff.staff-home',
             compact('staffs'),
             compact('users'),           
            )->with('count',$count)->with('count1',$count1)->with('count2', $count2)->with('count3',$count3);

        //
    }

    public function showstudents()
    {
         
        $users = User::all();
        
        return view(
            'staff.student.students',
            compact('users'), 
           );

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function show(Staff $staff)
    {
        //
        // $staffs = Staff::all();

        // return view('staff.booksmaterials', compact('staffs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function edit(Staff $staff)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Staff $staff)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function destroy(Staff $staff)
    {
        //
    }
}
