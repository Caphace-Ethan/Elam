@extends('layouts.app-s')

@section('content')
<br>
  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-3"style="text-align: left">
      <div class="card">
      <div class="card-header">
       <h6><i class="fas fa-caret-right"></i>  ECHASE Regulations </h6>
       </div>
       <div class="card-body">
<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
           <li class="nav-item"><a class="nav-link active" id="pills-exams-tab" data-toggle="pill" href="#pills-exams" role="tab" aria-controls="pills-exams" aria-selected="false" style="color: darkblue;"> <i class="fas fa-caret-right"></i> Examination Regulations</a>
          </li> 
          <li class="nav-item"><a class="nav-link" id="pills-students-tab" data-toggle="pill" href="#pills-students" role="tab" aria-controls="pills-students" aria-selected="false" style="color: darkblue;"> <i class="fas fa-caret-right"></i>  Students Regulations</a>
          </li>  

          <li class="nav-item"><a class="nav-link" id="pills-others-tab" data-toggle="pill" href="#pills-others" role="tab" aria-controls="pills-others" aria-selected="false" style="color: darkblue;"> <i class="fas fa-caret-right"></i>  Other Regulations</a>
          </li>
          
            <br>
            <br>
            <br>
            
</ul>
</div>
</div>
</div>

<div class="col-md-1"></div>
<div class="col-md-5" style="text-align: left">
<div class="tab-content pt-2 pl-1" id="pills-tabContent">
   <h6> Download Regulations</h6>
   <br>
  <div class="tab-pane fade show active" id="pills-exams" role="tabpanel" aria-labelledby="pills-exams-tab"> Click the link below to Download Examination Regulations for academic year 2019/2020.
    <br>
    <br>
    <a href="/prospectus" style="color: darkblue"><i class="fas fa-caret-right"></i>  Examination Rgulations for academic year 2019/2020</a>
  </div>

  <div class="tab-pane fade" id="pills-students" role="tabpanel" aria-labelledby="pills-students-tab"> Click the link below to Download Students Regulations for academic year 2019/2020.
    <br>
    <br>
    <a href="/prospectus" style="color: darkblue"><i class="fas fa-caret-right"></i>  Students Rgulations for academic year 2019/2020</a>
  </div>

 <div class="tab-pane fade" id="pills-others" role="tabpanel" aria-labelledby="pills-others-tab"> Click the link below to Download Other Regulations for academic year 2019/2020.
    <br>
    <br>
    <a href="/prospectus" style="color: darkblue"><i class="fas fa-caret-right"></i>  Other Rgulations for academic year 2019/2020</a>
  </div>

</div>
</div>
</div>

@endsection