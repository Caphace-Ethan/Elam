@extends('layouts.app')

@section('content')
<br>

  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-5"style="text-align: left">
      <div class="card">
      <div class="card-header">
       <h6><i class="fas fa-procedures"></i></i> Application or Admission Procedures</h6>
       </div>
       <div class="card-body">
   <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
           <li class="nav-item"><a class="nav-link active" id="pills-bachelor-tab" data-toggle="pill" href="#pills-bachelor" role="tab" aria-controls="pills-bachelor" aria-selected="false" style="color: darkblue;"> <i class="fas fa-caret-right"></i> Application or Admission Procedures for Bachelor Programmes 2019/2020  </a>
          </li>        
          <li class="nav-item">
            <a class="nav-link" id="pills-diploma-tab" data-toggle="pill" href="#pills-diploma" role="tab" aria-controls="pills-diploma" aria-selected="false" style="color: darkblue;"><i class="fas fa-caret-right"></i> Application or Admission Procedures for Ordinary Diploma Programmes 2019/2020 </a>  
         </li>
          <li class="nav-item">
            <a class="nav-link" id="pills-certificate-tab" data-toggle="pill" href="#pills-certificate" role="tab" aria-controls="pills-certificate" aria-selected="false" style="color: darkblue;"><i class="fas fa-caret-right"></i> Application or Admission Procedures for Certificate Programmes 2019/2020
            </a> 
          </li>
            <br>
            <br>
</ul>
</div>
</div>
</div>
 <div class="col-md-6" style="text-align: left">
<div class="tab-content pt-2 pl-1" id="pills-tabContent">
   <h6><i class="fas fa-procedures"></i> Procedure Contents</h6>
   <br>
  <div class="tab-pane fade show active" id="pills-bachelor" role="tabpanel" aria-labelledby="pills-bachelor-tab"> 
  Admission Procedures for Bachelor Programmes
  <br>
  ..... <br>
  ...<br>
  ..<br>
  .

  </div>
  <div class="tab-pane fade" id="pills-diploma" role="tabpanel" aria-labelledby="pills-diploma-tab">Admission Procedures for Ordinary Diploma Programmes
  <br>
  ..... <br>
  ...<br>
  ..<br>
  .
  </div>
  <div class="tab-pane fade" id="pills-certificate" role="tabpanel" aria-labelledby="pills-certificate-tab">Admission Procedures for Certificate Programmes
  <br>
  ..... <br>
  ...<br>
  ..<br>
  .
  </div>
</div>
</div>
</div>

@endsection