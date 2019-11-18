<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clas;

class ClassController extends Controller
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
        $classes = Clas::all();
        return view('staff.class.classes',compact('classes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('staff.class.create');
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
          'class_id' => 'required|max:5',
         'class_name' => 'required|max:255',
         'class_code' => 'required|max:10',
         'educationlevel_id' => 'required|max:1',
         'start_date' => 'required|date',
         'end_date' => 'required|date',
         
     ]);

      if ($validatedData){

     $classes = Clas::create($validatedData);

     return redirect('/classes')->with('status', 'Class is successfully Registered');
      } else{
     return redirect('/classes')->with('status-fail', 'Class Registration, Failed');
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Class  $class
     * @return \Illuminate\Http\Response
     */
    public function show(Clas $class)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Class  $class
     * @return \Illuminate\Http\Response
     */
    public function edit($class_id)
    {
        //
         $classes = Clas::findOrFail($class_id);

    return view('staff.class.edit', compact('classes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Class  $class
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $class_id)
    {
        //
        $validatedData = $request->validate([
          'class_id' => 'required|max:5',
         'class_name' => 'required|max:255',
         'class_code' => 'required|max:10',
         'educationlevel_id' => 'required|max:1',
         'start_date' => 'required|date',
         'end_date' => 'required|date',
         
     ]);

     if ($validatedData){

     Clas::whereClassId($class_id)->update($validatedData);

     return redirect('/classes')->with('status', 'Class is successfully Updated');
      } else{
     return redirect('/classes')->with('status-fail', 'Class Updation, Failed');
      }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Class  $class
     * @return \Illuminate\Http\Response
     */
    public function destroy($class_id)
    {
        //
        $classes = Clas::findOrFail($class_id);

         if($classes){

        $classes->delete();

    return redirect('/classes')->with('status', 'Class is successfully Deleted');

        }else{

    return redirect('/classes')->with('status-fail', 'Class Deletion, Failed');  
        }
    }
}
