
<div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;background-color:#194a75">
       <a href="{{ url('/student-home') }}" class="site_title"><span>  <img src="/images/echaseLogo.png" width="50px" class="img-circle"> EOMS </span></a>
    </div>

    <div class="clearfix"></div>

    <!-- menu profile quick info -->
    <div class="profile clearfix" style="background-color:#2c455f">
        <div class="profile_pic">
            <img src="/images/user.png" alt="..." class="img-circle profile_img">
        </div>
        <div class="profile_info">
            <span>Welcome,</span>
            <h2 style="font-family: Consolas"><b>{{ Auth::user()->first_name}} ({{ Auth::user()->middle_name}})</b></h2>
        </div>
    </div>
    <!-- /menu profile quick info -->

    <br />

    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
        <div class="menu_section">
            <h3>Student's Dashboard</h3>
            <ul class="nav side-menu">
                <li><a><i class="fa fa-home"></i> Home (Nyumbani)<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="{{'student-home'}}">Home (Nyumbani)</a></li>
                       
                        
                    </ul>
                </li>

                 <li><a><i class="fa fa-edit"></i>Academics (Masomo)<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="/student-books"> Books & Materials (Vitabu)</a></li>
                         <li><a href="#"> Modules (Masomo)</a></li>
                        <li><a href="#"> Course Works </a></li>
                        <li><a href="#"> Timetables (Ratiba)</a></li>
                        <li><a href="#"> Results (Matokeo)</a></li>
                        

                    </ul>
                </li>
                
                <li><a><i class="fa fa-bar-chart-o"></i> Financial (Malipo) 
                    <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="#">Payment Required (Malipo Yanayohitajika) </a></li>
                        <li><a href="#">Payment Records (Kumbukumbu za Malipo)</a></li>
                        <li><a href="#">Make Payment (Fanya Malipo)</a></li>

                    </ul>
                </li>
                
                <li><a><i class="fa fa-table"></i> Management (Utawala) <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="{{'table'}}">Account Management</a></li>
                        
                    </ul>
                </li>
                <li><a><i class="fa fa-wrench"></i> Settings (Mipangilio) <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="#">Account Settings (Mipangilio Ya Akaunti)</a></li>
                        <li><a href="#">Other Settings (Mipangilio Mingine)</a></li>

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
