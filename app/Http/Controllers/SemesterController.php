<?php

namespace App\Http\Controllers;

use App\Semester;
use Illuminate\Http\Request;

class SemesterController extends Controller
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
        $semester = Semester::all();
        return view('staff.semester.semester',compact('semester'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('staff.semester.create');
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
         'semester_id' => 'required|max:1',
         'semester_name' => 'required|max:255',
         'semester_start' => 'required|date',
         'semester_end' => 'required|date',
     ]);

      if ($validatedData){

     $semester = Semester::create($validatedData);

     return redirect('/semesters')->with('status', 'Semester is successfully Registered');
      } else{
     return redirect('/semesters')->with('status-fail', 'Semester Registration, Failed');
      }
     }

    /**
     * Display the specified resource.
     *
     * @param  \App\Semester  $semester
     * @return \Illuminate\Http\Response
     */
    public function show(Semester $semester)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Semester  $semester
     * @return \Illuminate\Http\Response
     */
    public function edit($semester_id)
    {
        //
        $semester = Semester::findOrFail($semester_id);

    return view('staff.semester.edit', compact('semester'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Semester  $semester
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$semester_id)
    {
        //
        $validatedData = $request->validate([
         'semester_id' => 'required|max:1',
         'semester_name' => 'required|max:255',
         'semester_start' => 'required|date',
         'semester_end' => 'required|date',
     ]);

        if ($validatedData){
        Semester::whereSemesterId($semester_id)->update($validatedData);

        return redirect('/semesters')->with('status', 'Semester is successfully Updated');
        }else{
     return redirect('/semesters')->with('status-fail', 'Semester Updation, Failed');
        }
     }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Semester  $semester
     * @return \Illuminate\Http\Response
     */
    public function destroy($semester_id)
    {
        //
        $semester = Semester::findOrFail($semester_id);

        if($semester){
        $semester->delete();

    return redirect('/semesters')->with('status', 'Semester is successfully Deleted');

        }else{

    return redirect('/semesters')->with('status-fail', 'Semester Deletion, Failed');  
        }

    }    
}
