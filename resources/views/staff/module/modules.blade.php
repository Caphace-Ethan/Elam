@extends('layouts.staff-dashboard')
@section('staff-content')
   <!-- top tiles -->
    
    <!-- /top tiles -->
<div class="row tile_count"style="color:#31708f">
  <div class="col-md-2 col-sm-1"></div>
  <div class="col-md-6 col-sm-8">
  <h4><i class='fa fa-cogs'></i> Welcome To Modules Management System.
    <br>&nbsp;&nbsp;&nbsp;&nbsp; </h4>
  </div>
</div>  

    <div class="row" style="color:#31708f">

        <div class="col-md-9 col-sm-9 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                  <h2><i class='fa fa-file'></i> Modules For Certificates, Diploma & Bachelor</h2>
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
                            <th class="column-title">Module Code </th>
                            <th class="column-title">Module Name </th>
                            <th class="column-title">Course </th>
                            <th class="column-title">Education Level </th>
                            <th class="column-title"> Semester </th>
                           
                            <th class="column-title no-link last"><span class="nobr">Action</span>
                            </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                        @foreach($modules as $modules)
                          <tr class="even pointer">
                            <td class="a-center ">
                              <input type="checkbox" class="flat" name="table_records">
                            </td>
                            <td>{{$modules->module_code}}</td>
                            <td>{{$modules->module_name}}</td>
                            <td>{{$modules->course}}</td>
                            <td>{{$modules->educationlevel_id}}</td>
                            <td>{{$modules->module_semester_id}}</td>
                            <td class=" last"> 
                            <a href="#"><i class='fa fa-eye'></i></a> 
                            <a href="#"><i class='fa fa-pencil'></i></a>
                            <a href="#"><i class='fa fa-trash'></i></a> 
                            </td>
                            
                          </tr>
                         
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>

                   <br>
        <h4> <a href="/#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   <button type="button" class="btn btn-primary btn-sm"><i class='fa fa-cloud-upload'></i> Register Module</button></a> 
        </h4>

        </div>

        <div class="col-md-3 col-sm-3 col-xs-12">
          <p><b> Useful Help & Instructions </b></p>
          <br>
           <p> <i class='fa fa-caret-right'></i> To View, Edit, Update or Delete any Data in the Given Table, Click one of the Following Icons according to Your Need. 
           </p>
          <ol>
            <li> 
              Click <b style="font-size:16px "> <i class='fa fa-eye'> </i></b> To <b>VIEW </b> a particular row of Data <br><br>

            </li>
            <li>
              Click <b style="font-size:16px "><i class='fa fa-pencil'> </i></b> To <b>EDIT or UPDATE </b> a particular row of Data <br><br>
            </li>
             <li>
              Click <b style="font-size:16px "><i class='fa fa-trash'> </i></b> To <b>DELETE </b> a particular row of Data
               <br><br>
            </li>


          </ol>
        </div>
      
        </div>

    
@endsection



