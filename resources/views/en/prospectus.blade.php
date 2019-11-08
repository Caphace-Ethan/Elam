@extends('layouts.app')

@section('content')
<br>

  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-5"style="text-align: left">
      <div class="card">
      <div class="card-header">
       <h6><i class="fas fa-caret-right"></i>  ECHASE Prospectus </h6>
       </div>
       <div class="card-body">
   <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
           <li class="nav-item"><a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="false" style="color: darkblue;"> <i class="fas fa-caret-right"></i>  Prospectus 2019/2020</a>
          </li> 
         
          
            <br>
            <br>
            <br>
            
</ul>
</div>
</div>
</div>
 <div class="col-md-5" style="text-align: left">
<div class="tab-content pt-2 pl-1" id="pills-tabContent">
   <h6>Download Prospectus</h6>
   <br>
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"> 
    Click the link below to Download ECHASE Prospectus for academic year 2019/2020.
    <br>
    <br>
    <a href="/en/prospectus" style="color: darkblue"><i class="fas fa-caret-right"></i>  ECHASE Prospectus 2019/2020</a>
  </div>
  
</div>
</div>
</div>

@endsection