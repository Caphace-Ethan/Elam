
@extends('layouts.staff-dashboard')
@section('staff-content')
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
           <span class="count_top"><h5><i class="fa fa-graduation-cap"></i> Certificate Courses </h5></span> 
            <div class="count">{{$count}}</div>
            <a href="/certificate-courses"><span class="count_bottom"><i class="green"><i class="fa fa-eye"></i></i> View</span></a>
        </div>

        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><h5><i class="fa fa-graduation-cap"></i> Diploma Courses </h5> </span>
            <div class="count">{{$count1}}</div>
            <a href="/diploma-courses"> <span class="count_bottom"><i class="green"><i class="fa fa-eye"></i></i> View</span></a>
        </div>

        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><h5><i class="fa fa-graduation-cap"></i> Bachelor Courses  </h5></span>
            <div class="count ">{{$count2}}</div>
            <a href="/bachelor-courses"><span class="count_bottom"><i class="green"><i class="fa fa-eye"></i></i> View</span></a>
        </div>

        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><h5><i class="fa fa-graduation-cap"></i> Post-Graduate Courses  </h5></span>
            <div class="count">{{$count3}}</div>
            <a href="/postgraduate-courses">  <span class="count_bottom"><i class="green"><i class="fa fa-eye"></i></i>  View</span></a>
        </div>
</div>
    <!-- /top tiles -->

    <div class="row" style="color:#31708f">
  

        <div class="col-md-5 col-sm-5 col-xs-12">
            <div class="x_panel tile fixed_height_320">
                <div class="x_title">
                    <h2><i class='fa fa-file'></i> Upload Books And Matreials</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                 <form action="{{ route('upload-file.submit') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                       <div class="col-md-10 ">
                    <label for="Product Name">Book/Material Name</label>
                
                    <input id="filename" type="text" class="form-control @error('filename') is-invalid @enderror" placeholder="File Name" name="filename" value="{{ old('filename') }}" required autocomplete="filename" autofocus>

                        @error('filename')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror 
                    <br>
                    </div>
                    <div class="col-md-10 ">

                                    <select id="course" type="text" class="form-control @error('course') is-invalid @enderror" placeholder="course " name="course" value="{{ old('course') }}"  required autocomplete="course" autofocus >
                                        <option disabled selected>--Select Course--</option>
                                        <option value="Psychology">Psychology</option>
                                        <option value="Philosophy">Philosophy</option>
                                        <option value="Theology">Theology</option>
                                    </select>
                                    @error('course')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                        <br>
                    </div>
                    <div class="col-md-10 ">

                                    <select id="education_level" type="text" class="form-control @error('education_level') is-invalid @enderror" placeholder="education_level " name="education_level" value="{{ old('education_level') }}"  required autocomplete="education_level" autofocus >
                                        <option disabled selected>--Upload For--</option>
                                        <option value="Certificate">Certificate</option>
                                        <option value="Diploma">Diploma</option>
                                         <option value="Bachelor">Bachelor</option>
                                    </select>
                                    @error('education_level')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                            <br>
                    </div>

                </div>
                 <div class="form-group">

                    <div class="col-md-10">
                        <input type="file" class="form-control" name="location" multiple />
                    <br/>

                    </div>
                    <div class="col-md-4 ">
                      <button class="btn btn-info" type="submit">
                        <i class='fa fa-cloud-upload'></i> Upload </button>
                  </div>
              </div>
                                   
             </form>   


                </div>
            </div>
        </div>

         <div class="col-md-7 col-sm-7 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                   <h2><i class='fa fa-group'></i> Staffs</h2>
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
                                                       
                            <th>Staff ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>E-Mail</th>
                           
                            <th class="column-title no-link last"><span class="nobr">Action</span>
                            </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                      @foreach($staffs as $staff)
                          <tr class="even pointer">
                            
                            <td>{{$staff->staff_id}}</td>
                            <td>{{$staff->first_name}}</td>
                            <td>{{$staff->last_name}}</td>
                            <td>{{$staff->email}}</td>
                            <td class=" last">
                            <a href="#"><i class='fa fa-eye'></i></a>
                           
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
        
         <div class="col-md-7 col-sm-9 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                  <h2><i class='fa fa-group'></i> Students</h2>
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
                                                       
                            <th>Student ID</th>
                            <th>Name</th>
                            <th>Education Level</th>
                            <th>E-Mail</th>
                           
                            <th class="column-title no-link last"><span class="nobr">Action</span>
                            </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                       @foreach($users as $user)
                          <tr class="even pointer">
                            
                            <td>{{$user->id}}</td>
                            <td>{{$user->first_name}}</td>
                            <td>{{$user->middle_name}}</td>
                            <td>{{$user->email}}</td>
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
        </div>
       
    </div>

    
@endsection

