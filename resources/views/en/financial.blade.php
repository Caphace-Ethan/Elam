@extends('layouts.app')

@section('content')
<br>

  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-5"style="text-align: left">
      <div class="card">
      <div class="card-header">
       <h6><i class="fas fa-dollar-sign"></i> Financial Requirements</h6>
       </div>
       <div class="card-body">
         <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
           <li class="nav-item"><a class="nav-link active" id="pills-applicationcost-tab" data-toggle="pill" href="#pills-applicationcost" role="tab" aria-controls="pills-applicationcost" aria-selected="false" style="color: darkblue;"> <i class="fas fa-dollar-sign"></i> Application Costs for different Programmes offered at ECHASE for the academic year 2019/2020 </a>
          </li>        
          <li class="nav-item"><a class="nav-link" id="pills-bachelor-tab" data-toggle="pill" href="#pills-bachelor" role="tab" aria-controls="pills-bachelor" aria-selected="false" style="color: darkblue;"> <i class="fas fa-dollar-sign"></i> Fee Structure 2019/2020 for Bachelor /Degree Programmes </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="pills-diploma-tab" data-toggle="pill" href="#pills-diploma" role="tab" aria-controls="pills-diploma" aria-selected="false" style="color: darkblue;"><i class="fas fa-dollar-sign"></i> Fee Structure 2019/2020 for Ordinary Diploma Programmes  </a>  
         </li>
          <li class="nav-item">
            <a class="nav-link" id="pills-certificate-tab" data-toggle="pill" href="#pills-certificate" role="tab" aria-controls="pills-certificate" aria-selected="false" style="color: darkblue;"><i class="fas fa-dollar-sign"></i> Fee Structure 2019/2020 for Certificate Programmes 
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
   <h6>Download Financial Requirements</h6>
   <br>
  <div class="tab-pane fade show active" id="pills-applicationcost" role="tabpanel" aria-labelledby="pills-applicationcost-tab"> Click the link below to Download Application Costs for different Programmes for academic year 2019/2020.
    <br>
    <br>
    <a href="/en/prospectus" style="color: darkblue"><i class="fas fa-caret-right"></i>  Application Costs for academic year 2019/2020</a>
  </div>
  <div class="tab-pane fade" id="pills-bachelor" role="tabpanel" aria-labelledby="pills-bachelor-tab">Click the link below to Download Bachelor Programmes Fee Strucure for academic year 2019/2020.
    <br>
    <br>
    <a href="/en/prospectus" style="color: darkblue"><i class="fas fa-caret-right"></i>  Bachelor Programmes Fee Strucure for academic year 2019/2020</a>
  </div>

  <div class="tab-pane fade" id="pills-diploma" role="tabpanel" aria-labelledby="pills-diploma-tab">Click the link below to Download Ordinary Diploma Programmes Fee Strucure for academic year 2019/2020.
    <br>
    <br>
    <a href="/en/prospectus" style="color: darkblue"><i class="fas fa-caret-right"></i>  Ordinary Diploma Programmes Fee Strucure for academic year 2019/2020</a>
  </div>
  <div class="tab-pane fade" id="pills-certificate" role="tabpanel" aria-labelledby="pills-certificate-tab">Click the link below to Download Certificate Programmes Fee Strucure for academic year 2019/2020.
    <br>
    <br>
    <a href="/en/prospectus" style="color: darkblue"><i class="fas fa-caret-right"></i>  Certificate Programmes Fee Strucure for academic year 2019/2020</a>
  </div>

</div>
</div>
</div>
@endsection