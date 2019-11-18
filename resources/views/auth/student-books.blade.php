@extends('layouts.student-dashboard')
@section('student-content')

<div class="row tile_count"style="color:#31708f">
	<div class="col-md-2 col-sm-1"></div>
	<div class="col-md-6 col-sm-8">
	<h4> <i class='fa fa-cloud-download'></i> Download Different Materials and Books 
		<br><br>&nbsp;&nbsp;&nbsp;&nbsp; ( Pakua vitabu na masomo mbalimbali  )</h4>
	</div>
</div>
<div class="row tile_count"style="color:#31708f">
        
        <div class="col-md-4 col-sm-4 col-xs-6 tile_stats_count">
         <h4>Cetificate Courses (Kozi za Astashahada)</h4>
          <b> Download Materials and Books
		<br>&nbsp;&nbsp;&nbsp;&nbsp; ( Pakua vitabu na masomo  ) </b>
             <br><br>
         <a href="/student-certificate">  <button type="button" class="btn btn-primary btn-sm"><i class='fa fa-eye'></i>

      View (Angalia)</button></a> 
         
        </div>

        <div class="col-md-4 col-sm-4 col-xs-6 tile_stats_count">
         <h4>Diploma Courses (Kozi za Stashahada)</h4>
          <b>   Download Materials and Books 
		<br>&nbsp;&nbsp;&nbsp;&nbsp; ( Pakua vitabu na masomo  )</b>
		<br><br>
         <a href="/student-diploma">  <button type="button" class="btn btn-primary btn-sm"><i class='fa fa-eye'></i>

       View (Angalia)</button></a> 
            
        </div>

        <div class="col-md-4 col-sm-4 col-xs-6 tile_stats_count">
		<h4>Bachelor Courses (Kozi za Shahada)</h4>
            <b> Download Materials and Books 
		<br>&nbsp;&nbsp;&nbsp;&nbsp; ( Pakua vitabu na masomo  ) </b>
		<br>
		<br>
         <a href="/student-bachelor">  <button type="button" class="btn btn-primary btn-sm"><i class='fa fa-eye'></i>

       View (Angalia)</button></a> 

            
        </div>

        
</div>

@endsection