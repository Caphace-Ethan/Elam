
<div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;background-color:#194a75">
       <a href="{{ url('/staff-home') }}" class="site_title"><span>  <img src="/images/echaseLogo.png" width="50px" class="img-circle"> EOMS </span></a>
    </div>

    <div class="clearfix"></div>

    <!-- menu profile quick info -->
    <div class="profile clearfix" style="background-color:#1c517f">
        <div class="profile_pic">
            <img src="/images/user.png" alt="..." class="img-circle profile_img">
        </div>
        <div class="profile_info">
            <span>Welcome,</span>
            <h2 style="font-family: Consolas"><b>{{ Auth::user()->first_name}} {{ Auth::user()->middle_name}}</b></h2>
        </div>
    </div>
    <!-- /menu profile quick info -->

    <br />

    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
        <div class="menu_section">
            <h3>Staff Dashboard</h3>
            <ul class="nav side-menu">
                <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="{{'staff-home'}}">Home</a></li>
                                                
                    </ul>
                </li>
                
                 <li><a><i class="fa fa-edit"></i> Academics<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">

                        <li><a href="{{'classes'}}">Manage Classes</a></li>
                        <li><a href="{{'courses'}}">Manage Courses</a></li>
                        <li><a href="{{'modules'}}">Manage Modules</a></li>
                        <li><a href="{{'#'}}">Manage News</a></li>
                         <li><a href="{{'students'}}">Manage Students</a></li>
                        <li><a href="{{'semesters'}}">Manage Semester</a></li>
                        <li><a href="{{'books'}}">Manage Books & Materials</a></li>
                        <li><a href="{{'education-levels'}}">Manage Education Levels</a></li>

                    </ul>
                </li>
                
                <li><a><i class="fa fa-bar-chart-o"></i> Financial 
                    <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="#">Payment Required </a></li>
                        <li><a href="#">Payment Records </a></li>
                        <li><a href="#">Make Payment </a></li>

                    </ul>
                </li>
                
                <li><a><i class="fa fa-wrench"></i> Settings <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="#">Account Settings </a></li>
                        <li><a href="#">Other Settings </a></li>

                    </ul>
                </li>
               <li><a><i class="fa fa-bar-chart-o"></i> Make Payments <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="#">Online Payments </a></li>
                        <li><a href="#"> Other Payments</a></li>
                       
                    </ul>
                </li>
            </ul>
        </div>

    </div>
    <!-- /sidebar menu -->

</div>
