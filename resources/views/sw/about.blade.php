@extends('layouts.app-s')

@section('content')
<br>
  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-4"style="text-align: left">
      <div class="card">
      <div class="card-header">
       <h6><i class="fas fa-caret-right"></i> About ECHASE</h6>
       </div>
       <div class="card-body">
<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
           <li class="nav-item"><a class="nav-link active" id="pills-history-tab" data-toggle="pill" href="#pills-history" role="tab" aria-controls="pills-history" aria-selected="false" style="color: darkblue;"><i class="fas fa-history"></i> History of ECHASE </a>
          </li>        
          <li class="nav-item"><a class="nav-link" id="pills-vision-tab" data-toggle="pill" href="#pills-vision" role="tab" aria-controls="pills-vision" aria-selected="false" style="color: darkblue;"> <i class="fas fa-eye"></i> 
          Vision and Mission of ECHASE </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="pills-administration-tab" data-toggle="pill" href="#pills-administration" role="tab" aria-controls="pills-administration" aria-selected="false" style="color: darkblue;"><i class="fas fa-caret-right"></i> Administration Structure  </a>  
         </li>
          <li class="nav-item">
            <a class="nav-link" id="pills-programmes-tab" data-toggle="pill" href="#pills-programmes" role="tab" aria-controls="pills-programmes" aria-selected="false" style="color: darkblue;"><i class="fas fa-caret-right"></i> Programmes offered at ECHASE
            </a> 
          </li>
           
          <li class="nav-item">
            <a class="nav-link" href="/contact" role="tab" aria-controls="pills-contact" aria-selected="false" style="color: darkblue;"><i class="fas fa-location-arrow"></i>  Contact Information
            </a> 
          </li>

             <br>
            <br>
</ul>
</div>
</div>
</div>
 <div class="col-md-7" style="text-align: left">
<div class="tab-content pt-2 pl-1" id="pills-tabContent">
   <h6>About Contents</h6>
   <br>
  <div class="tab-pane fade show active" id="pills-history" role="tabpanel" aria-labelledby="pills-history-tab"> 
    :::::::::::::::::::::::::
  </div>
  <div class="tab-pane fade" id="pills-administration" role="tabpanel" aria-labelledby="pills-administration-tab">
    <br>
    ...................
   
  </div>
  <div class="tab-pane fade" id="pills-vision" role="tabpanel" aria-labelledby="pills-vision-tab">
     <h6><i class="fas fa-caret-right"></i> ECHASE VISION</h6>

    .........................<br> 
    
     <br> 
     <br> 
     <br> 
     <br> 
    <h6><i class="fas fa-caret-right"></i> ECHASE MISSION</h6>
   
    ........................ <br> 
   
  </div>
  <div class="tab-pane fade" id="pills-programmes" role="tabpanel" aria-labelledby="pills-programmes-tab">
   <h6>List of Programmes Offered:</h6>
    <br>
     <ul>
          <li ><a href="/certificate" style="color: darkblue"> Certificate Programmes</a>  </li>
          <li><a href="/diploma" style="color: darkblue"> Ordinary Diploma Programmes</a>  </li>
          <li><a href="/bachelor" style="color: darkblue"> Bachelor Programmes </a> </li>
          
        </ul>

  </div>
</div>
</div>
</div>

@endsection