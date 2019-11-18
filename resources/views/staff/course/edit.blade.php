@extends('layouts.staff-dashboard')
@section('staff-content')
   <!-- top tiles -->
    
    <!-- /top tiles -->
<div class="row tile_count"style="color:#31708f">
  <div class="col-md-2 col-sm-1"></div>
  <div class="col-md-6 col-sm-8">
  <h4><i class='fa fa-edit'></i> Edit Course.
    <br>&nbsp;&nbsp;&nbsp;&nbsp; </h4>


  </div>
</div> 

    <div class="row" style="color:#31708f">
    <div class="col-md-2 col-sm-2 col-xs-2"></div>
    <div class="col-md-6 col-sm-7 col-xs-12">
    <br>

                       
     <form method="POST" action="{{ route('courses.update', $course->id) }}" arial-label= "{{_('courses.update')}}">   
             
                         @csrf
                         @method('PATCH')
                          <div class="form-group row ">
                                <div class="col-md-9 ">
                                    <input id="course_name" type="text" class="form-control @error('course_name') is-invalid @enderror" placeholder="Course Name" name="course_name" value="{{$course->course_name}}" required autocomplete="course_name" autofocus>

                                    @error('course_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>
                                
                            </div>
                           <div class="form-group row ">
                            <div class="col-md-9 ">
                            
                                    <input id="course_number" type="text" class="form-control @error('course_number') is-invalid @enderror" placeholder="Course Number" name="course_number"  maxlength="5" value="{{$course->course_number}}" required autocomplete="course_number" autofocus>

                                    @error('course_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                            </div>
                            
                          
                            </div>

                         
                            <div class="form-group row">

                               <div class="col-md-9 ">
                            
                                    <input id="educationlevel_id" type="text" class="form-control @error('educationlevel_id') is-invalid @enderror" placeholder="Education Level" name="educationlevel_id"  maxlength="1" value="{{$course->educationlevel_id}}" required autocomplete="educationlevel_id" autofocus>

                                    @error('educationlevel_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                            </div>
                            </div>

                            <div class="form-group row">
                                
                                <div class="col-md-2">
                                    <br><br>
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update Semester') }}
                                </button>
                                </div>

                                 
                            </div>


                            <div class="clearfix"></div>

                            <div class="separator" style="text-align: center">
                                
                                <div class="clearfix"></div>
                                <br />
                            </div>
                        </form>
                       

                   <br>
        <h4> <a href="/semester"> <button type="button" class="btn btn-primary btn-sm"><i class='fa fa-step-backward'></i> Go Back </button></a> 
        </h4>

</div>
 <div class="col-md-3 col-sm-3 col-xs-4">
  <p> <b>Useful Informations</b> </p>

 </div>


      
        </div>

    
@endsection



