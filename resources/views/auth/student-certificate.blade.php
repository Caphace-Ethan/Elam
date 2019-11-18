@extends('layouts.student-dashboard')
@section('student-content')
   <!-- top tiles -->
    
    <!-- /top tiles -->
    
  <div class="row tile_count"style="color:#31708f">
  <div class="col-md-3 col-sm-1"></div>
  <div class="col-md-8 col-sm-10">
  <h4> <i class='fa fa-cloud-download'></i> Download Different Materials and Books 
    <br><br>&nbsp;&nbsp;&nbsp;&nbsp; ( Pakua vitabu na masomo mbalimbali  )</h4>
  </div>
 </div>

     <div class="row" style="color:#31708f">

        <div class="col-md-8 col-sm-10 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                  <h2><i class='fa fa-file'></i> Certificate Books & Materials <small>Custom design</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">
                     <div class="title_right">
                <div class="col-md-4 col-sm-4 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                   </div>
                   </div>
                   </div>
                  <div class="clearfix"></div>
                  
                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th>
                              <input type="checkbox" id="check-all" class="flat">
                            </th>
                            
                            <th class="column-title">Document Name </th>
                            <th class="column-title">Course </th>
                            <th class="column-title">Education Level </th>
                           
                            <th class="column-title no-link last"><span class="nobr">Action</span>
                            </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                        @foreach($certificate as $certificate)
                          <tr class="even pointer">
                            <td class="a-center ">
                              <input type="checkbox" class="flat" name="table_records">
                            </td>
                          
                            <td>{{$certificate->filename}}</td>
                            <td>{{$certificate->course}}</td>
                            <td>{{$certificate->education_level}}</td>
                            <td class=" last"> 
                            <a href="#"><i class='fa fa-eye'></i> View</a> 
                            </td>
                            
                          </tr>
                         
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
        

       <br><br>

      <a href="/student-books">  <button type="button" class="btn btn-primary btn-sm">
        <i class='fa fa-step-backward'></i> Back (Nyuma)</i> 
        </div>

      
</div>
    
@endsection



