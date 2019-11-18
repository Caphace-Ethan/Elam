@extends('layouts.staff-dashboard')
@section('staff-content')
   <!-- top tiles -->
    
    <!-- /top tiles -->
<div class="row tile_count"style="color:#31708f">
  <div class="col-md-2 col-sm-1"></div>
  <div class="col-md-6 col-sm-8">
  <h4><i class='fa fa-plus-square'></i>&nbsp; Add Class
    <br>&nbsp;&nbsp;&nbsp;&nbsp; </h4>
  </div>
</div> 

    <div class="row" style="color:#31708f">
    <div class="col-md-2 col-sm-2 col-xs-2"></div>
    <div class="col-md-6 col-sm-7 col-xs-12">
    <br>

                       
     <form method="POST" action="{{ route('classes.store') }}" arial-label= "{{_('classes.store')}}">   
             
                         @csrf

                         <div class="form-group row ">
                                <div class="col-md-9 ">
                                    <input id="class_id" type="text" class="form-control @error('class_id') is-invalid @enderror" placeholder="Class ID" name="class_id" maxlength="5" value="{{ old('class_id') }}" required autocomplete="class_id" autofocus>

                                    @error('class_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>
                                
                            </div>
                           <div class="form-group row ">
                            <div class="col-md-9 ">
                            
                                    <input id="class_name" type="text" class="form-control @error('class_name') is-invalid @enderror" placeholder="Class Name" name="class_name" 
                                    value="{{ old('class_name') }}" required autocomplete="class_name" autofocus>

                                    @error('class_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <br>
                            </div>
                            <div class="col-md-9 ">
                                    <input id="class_code" type="text" class="form-control @error('class_code') is-invalid @enderror" placeholder="Class Code" name="class_code" maxlength="5" 
                                    value="{{ old('class_code') }}" required autocomplete="class_code" autofocus>

                                    @error('class_code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                     <br> 
                                </div>
                            <div class="col-md-9 ">
                            
                                    <input id="educationlevel_id" type="text" class="form-control @error('educationlevel_id') is-invalid @enderror" placeholder="Education Level" name="educationlevel_id"  maxlength="1" 
                                    value="{{ old('educationlevel_id') }}" required autocomplete="educationlevel_id" autofocus>

                                    @error('educationlevel_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <br>
                                    <i class='fa fa-asterisk'></i> (For Education Level) Put <b>"1"</b> for Certificate, <b>"2"</b> for Diploma, <b>"3"</b> for Bachelor and <b>"4"</b> for Postgraduate Courses
                            </div>
                            
                          
                            </div>

                         
                            <div class="form-group row">

                                <div class="col-md-9">
                                     <input id="start_date" type="date" class="form-control @error('start_date') is-invalid @enderror" placeholder="Class Start Date" name="start_date" 
                                     value="{{ old('start_date') }}" required autocomplete="start_date" autofocus>

                                    @error('start_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    Class Start Date
                                </div>
                            </div>

                            <div class="form-group row">

                                <div class="col-md-9">
                                     <input id="end_date" type="date" class="form-control @error('end_date') is-invalid @enderror" placeholder="Class End Date" name="end_date"
                                      value="{{ old('end_date') }}" required autocomplete="end_date" autofocus>

                                    @error('end_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    Class End Date
                                </div>
                            </div>

                            <div class="form-group row">
                                
                                <div class="col-md-2">
                                    <br><br>
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register Class') }}
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
        <h4> <a href="/classes"> <button type="button" class="btn btn-primary btn-sm"><i class='fa fa-step-backward'></i> Go Back </button></a> 
        </h4>

</div>
 <div class="col-md-3 col-sm-3 col-xs-4">
  <p> <b>Useful Informations</b> </p>

 </div>


      
        </div>

    
@endsection



