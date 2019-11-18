@extends('layouts.app-interface')
@section('content')
<div class="container-fluid">
    <div class="row"style="text-align: center;color: whitesmoke;padding-top:20px; padding-bottom:15px;background-color:#41687b; ">
       <div class="col-md-2">
         
       </div>
        <div class="col-md-6">
          <h5>ECHASE ONLINE MANAGEMENT SYSTEM - EOMS - 2019/2020 </h5>
        </div>
        <div class="col-md-4">
          <h6><a href="/"><i class="fas fa-home"></i> Return To Homepage </a></h6>
        </div>

    </div>
<div class="row">
    <div class="col-md-2 col-sm-1"></div>
    <div class="col-md-4 col-sm-10" style="margin-top: 1%;text-align: center;">
        <div class="card" style="background-color:#41687b">
    <div class="login">

            <div class="login_wrapper">
                <div class="animate form login_form">
                    <section class="login_content">
                        <div class="card-header">
                        <h2> <img src="images/echaseLogo.png" width="60px" alt="" style="border-radius:40px "> EOMS </h2>
                        </div>
                        <div class="card-body">  
             <h5 > EOMS Staff Login </h5>
                 <div class="form-group row">
                                <div class="col-md-1"></div>
                                <div class="col-md-10">
                                    @if (session('status-fail'))
                                 <div class="alert alert-danger">
                                    {{ session('status-fail') }}
                                 </div>
                                      @endif

                                </div>
                 </div>
                      
                   <br>
                        @isset($url)
                    <form method="POST" action='{{ url("staff_login/$url") }}' arial-label="{{_('Login')}}">
                         @else
                    <form method="POST" action="{{ route('staff.login.submit') }}" arial-label= "{{_('Login')}}">   
                         @endisset
                            @csrf

                            <div class="form-group row">
                                <div class="col-md-1"></div>
                                <div class="col-md-10">
                                    <input id="email" type="email" class="form-control  @error('email') is-invalid @enderror" placeholder="Your E-Mail" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-1"></div>
                                <div class="col-md-10">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>

                            <div class="clearfix"></div>

                           
                        </form>
                    </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <div style="margin-top: 30%;">                       
   <p> Copyright © 2019 All Rights Reserved. EOMS Ver 1.0</p>
  </div>
                                                 
</div>

 <div class="col-md-6 col-sm-10">
     <div class="" style="margin-top:40px;padding:0px auto 20px auto;width: 100%;font-size:15px;text-align: left;">

                    <a style="color:#d6e3ef" href="/staff_register">
                        <i class="fa fa-chevron-right"></i>&nbsp;&nbsp;<b> Register Staff Member Here!!.</b>
                    </a><br>
                    <br>
                   
                    <a style="color:#d6e3ef" href="/register">
                        <i class="fa fa-chevron-right"></i>&nbsp;&nbsp;Student &amp; Don't have EOMS Account? Register Student Here!
                    </a>
                    <br>
                    <br>
                    <a style="color:#d6e3ef" href="/register">
                        <i class="fa fa-chevron-right"></i>&nbsp;&nbsp;Staff &amp; Don't have EOMS Account? Click here to Sign Up
                    </a>
                    <br>
                    <br>

 </div>
</div>

@endsection
