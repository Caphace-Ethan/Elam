
    <div class="nav_menu">
        <nav>
            <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
                <li class="" style="font-family: Consolas">
                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <img src="/images/user.png" alt=""><b>{{ Auth::user()->first_name}} ({{ Auth::user()->middle_name}})</b>
                        <span class=" fa fa-angle-down"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                        <li><a href="javascript:;"><i class="fa fa-user pull-right"></i> Profile ({{ Auth::user()->first_name}}) </a></li>
                        <li>
                            <a href="javascript:;">
                                <span class="badge bg-red pull-right">50%</span>
                                <span>Settings</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                <i class="fa fa-sign-out pull-right"></i>
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>

                        </li>
                    </ul>
                </li>

                <li role="presentation" class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                       &nbsp;&nbsp;&nbsp; <i class="fa fa-envelope-o"></i>
                        <span class="badge bg-green">1</span>
                    </a>
                    <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                        <li>
                            <a>
                        
                         <span>
                          <span><b> EOMS Admin</b> </span>
                          <span class="time">Just now</span>
                        </span>
                                <span class="message">
                          Welcome to Elam Seminary Online Management System. <br>
                          Find all Books and Materials that are necessary for You! <br>
                          You are Warmly Welcome
                                </span>
                            </a>
                        </li>                       
                     
                        <li>
                            <div class="text-center">
                                <a>
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
                <li>
                    @if (session('status1'))
                <div class="alert alert-success">
                   {{ session('status1') }}
                </div>
                    @endif

                </li>

            </ul>
        </nav>
    </div>

