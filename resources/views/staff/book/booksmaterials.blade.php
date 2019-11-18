@extends('layouts.staff-dashboard')
@section('staff-content')
   <!-- top tiles -->
    
    <!-- /top tiles -->
<div class="row tile_count"style="color:#31708f">
  <div class="col-md-2 col-sm-1"></div>
  <div class="col-md-6 col-sm-8">
  <h4><i class='fa fa-cogs'></i> Welcome To Books And Other Study Materials Management System.
  </h4>

      @if (session('status'))
    <div class="alert alert-success">
       {{ session('status') }}
    </div>
       @elseif (session('status-fail'))
       <div class="alert alert-danger">
       {{ session('status-fail') }}
    </div>
        @endif


  </div>
</div> 

    <div class="row" style="color:#31708f">

        <div class="col-md-9 col-sm-9 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                  <h2><i class='fa fa-file'></i> Uploaded Files <small>Custom design</small></h2>
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
                      <table id="datatable" class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th>
                              <input type="checkbox" id="check-all" class="flat">
                            </th>
                            <th class="column-title">Document ID </th>
                            <th class="column-title">Document Name </th>
                            <th class="column-title">Course </th>
                            <th class="column-title">Education Level </th>
                           
                            <th class="column-title "><span class="nobr">Edit</span>
                            </th>
                             <th class="column-title no-link last"><span class="nobr">Delete</span>
                            </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                        @foreach($upload as $upload)
                          <tr class="even pointer">
                            <td class="a-center ">
                              <input type="checkbox" class="flat" name="table_records">
                            </td>
                            <td>{{$upload->id}}</td>
                            <td>{{$upload->filename}}</td>
                            <td>{{$upload->course}}</td>
                            <td>{{$upload->education_level}}</td>
                            <td> 
                            <a href="/semesters/{{$upload->id}}/edit">
                              <button class="btn btn-primary">Edit</button></a>
                           </td>
                            <td class=" last"> 
                            <form action="" method="post">
                              @csrf
                              @method('DELETE')
                              <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                            </td>
                            
                          </tr>
                         
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>

                   <br>
        <h4> <a href="/staff-home">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   <button type="button" class="btn btn-primary btn-sm"><i class='fa fa-cloud-upload'></i> Upload Book</button></a> 
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
              Click <b style="font-size:16px "> <i class='fa fa-pencil'> </i></b> To <b>EDIT or UPDATE </b> a particular row of Data <br><br>
            </li>
             <li>
              Click <b style="font-size:16px" ><i class='fa fa-trash'> </i></b> To <b>DELETE </b> a particular row of Data
               <br><br>
            </li>


          </ol>
        </div>
      
        </div>

    
@endsection



