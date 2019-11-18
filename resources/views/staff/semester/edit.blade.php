@extends('layouts.staff-dashboard')
@section('staff-content')
   <!-- top tiles -->
    
    <!-- /top tiles -->
<div class="row tile_count"style="color:#31708f">
  <div class="col-md-2 col-sm-1"></div>
  <div class="col-md-6 col-sm-8">
  <h4><i class='fa fa-cogs'></i> Edit Semester.
    <br>&nbsp;&nbsp;&nbsp;&nbsp; </h4>
  </div>
</div> 

    <div class="row" style="color:#31708f">
    <div class="col-md-2 col-sm-2 col-xs-2"></div>
    <div class="col-md-6 col-sm-7 col-xs-12">
    <br>

                       
     <form method="POST" action="{{ route('semesters.update', $semester->semester_id) }}" arial-label= "{{_('semesters.update')}}">   
             
                         @csrf
                         @method('PATCH')
                          <div class="form-group row ">
                                <div class="col-md-9 ">
                                    <input id="semester_id" type="text" class="form-control @error('semester_id') is-invalid @enderror" placeholder="Semester ID" name="semester_id" maxlength="1" value="{{$semester->semester_id}}" required autocomplete="semester_id" autofocus>

                                    @error('semester_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>
                                
                            </div>
                           <div class="form-group row ">
                            <div class="col-md-9 ">
                            
                                    <input id="semester_name" type="text" class="form-control @error('semester_name') is-invalid @enderror" placeholder="Semester Name" name="semester_name" value="{{$semester->semester_name}}" required autocomplete="semester_name" autofocus>

                                    @error('semester_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                            </div>
                            
                          
                            </div>

                         
                            <div class="form-group row">

                                <div class="col-md-9">
                                     <input id="semester_start" type="date" class="form-control @error('semester_start') is-invalid @enderror" placeholder="Semester Start Date" name="semester_start" value="{{$semester->semester_start}}" required autocomplete="semester_start" autofocus>

                                    @error('semester_start')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    Semester Start Date
                                </div>
                            </div>

                            <div class="form-group row">

                                <div class="col-md-9">
                                     <input id="semester_end" type="date" class="form-control @error('semester_end') is-invalid @enderror" placeholder="Semester End Date" name="semester_end" value="{{$semester->semester_end}}" required autocomplete="semester_end" autofocus>

                                    @error('semester_end')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    Semester End Date
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



