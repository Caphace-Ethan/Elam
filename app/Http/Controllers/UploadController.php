<?php

namespace App\Http\Controllers;
use App\Upload;
use App\User;
use Illuminate\Http\Request;


class UploadController extends Controller
{
    /**
     * Upload the contacts file
     *
     * @param  App\Http\Requests\Backend\Contacts\UploadContactsRequest $request
     * @param  App\Models\Group $group
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth:staff');
    }

    public function store(Request $request)
    {
      $upload =new Upload();

      $upload->filename=$request->input('filename');
      $upload->course=$request->input('course');
      $upload->education_level=$request->input('education_level');
    

      if ($request->hasfile('location')){
            $file = $request->file('location');
            $extension = $file->getClientOriginalExtension();
            $upload->extension=$extension;
            $filename =time(). '.'.$extension;
            $file->move('uploads/files/',$filename);
            $upload->location=$filename;

      }  else{
          // return $request;
          // $upload->location='';
        return redirect('/books')->with('status-fail', 'Book Upload Failed!');
          }

          $upload->save();
          return redirect('/books')->with('status', 'Book is successfully Uploaded');
        }

        public function index(){

          $users = User::all();
          $upload = Upload::all();
          return view(
               'staff.book.booksmaterials',
               compact('upload'),
               compact('users')
             
              );
        }

 
}