
@extends('layouts.student-dashboard')
@section('student-content')
   <!-- top tiles -->

    <div class="row tile_count"style="color:#31708f">
        <div class="col-md-2 col-sm-5 col-xs-6 form-group pull-right top_search">
            <div class="title_right">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                </div>
            </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
           <span class="count_top"><h5><i class="fa fa-graduation-cap"></i> Certificate Courses <br><br> &nbsp;&nbsp; (Kozi za Astashahada) </h5></span>
            <div class="count">{{$count}}</div>
            <a href="/student-certificate-courses"><span class="count_bottom"><i class="green"><i class="fa fa-eye"></i></i> View (Angalia)</span></a>
        </div>

        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><h5><i class="fa fa-graduation-cap"></i> Diploma Courses <br><br>&nbsp;&nbsp;(Kozi za stashahada) </h5>  </span>
            <div class="count">{{$count1}}</div>
            <a href="/student-diploma-courses"> <span class="count_bottom"><i class="green"><i class="fa fa-eye"></i></i> View(Angalia)</span></a>
        </div>

        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><h5><i class="fa fa-graduation-cap"></i> Bachelor Courses  <br><br>&nbsp;&nbsp;(Kozi za Shahada)</h5> </span>
            <div class="count ">{{$count2}}</div>
            <a href="/student-bachelor-courses"><span class="count_bottom"><i class="green"><i class="fa fa-eye"></i></i> View(Angalia)</span></a>
        </div>

        <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><h5><i class="fa fa-graduation-cap"></i> Post-Graduate Courses <br><br>&nbsp;&nbsp;(Kozi za Udhamivu)  </h5> </span>
            <div class="count">{{$count3}}</div>
            <a href="/student-postgraduate-courses">  <span class="count_bottom"><i class="green"><i class="fa fa-eye"></i></i>  View(Angalia)</span></a>
        </div>
</div>
    <!-- /top tiles -->
    <div class="row" style="color:#31708f">

          <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                  <h2><i class='fa fa-file'></i> Vitabu Vya Astashahada <small>Certificate Books & Materials</small></h2>
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
        </div>


          <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                  <h2><i class='fa fa-file'></i> Vitabu Vya Stashahada <small>Diploma Books & Materials</small></h2>
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
                        @foreach($diploma as $diploma)
                          <tr class="even pointer">
                            <td class="a-center ">
                              <input type="checkbox" class="flat" name="table_records">
                            </td>
                          
                            <td>{{$diploma->filename}}</td>
                            <td>{{$diploma->course}}</td>
                            <td>{{$diploma->education_level}}</td>
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
        </div>


</div>
<div class="row" style="color:#31708f">
        <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                  <h2><i class='fa fa-file'></i> Others Books & Materials <small>Custom design</small></h2>
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
                   
                    </div>
                  </div>
                </div>
        </div>
      
    </div>
@endsection

