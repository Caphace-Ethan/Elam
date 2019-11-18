@extends('layouts.app-interface')

@section('content')
<div class="container-fluid">
    <div class="row"style="text-align: center;color: whitesmoke;padding-top:20px; padding-bottom:15px;background-color:#41687b;">
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
    <div class="col-md-1 col-sm-1"></div>
    <div class="col-md-6 col-sm-10" style="margin-top: 1%;text-align: center;">
        <div class="card" style="background-color:#41687b">

    <div class="register">

            <div class="login_wrapper">
                <div class="animate form login_form">
                    <section class="login_content">
                        <div class="card-header">
                        <h2> <img src="images/echaseLogo.png" width="60px" alt="" style="border-radius:40px "> EOMS </h2>
                        </div>
                        <div class="card-body">  
                        <h4>Staff Signup</h4>
                        <br>

                         @isset($url)
            <form method="POST" action='{{ url("register/$url") }}' arial-label="{{_('Register')}}">
                         @else
            <form method="POST" action="{{ route('staff.register.submit') }}" arial-label= "{{_('Register')}}">   
                         @endisset

                         @csrf
                            <div class="form-group row ">
                              
                                    <div class="col-md-5 ">
                                    <input id="staff_id" type="text" class="form-control @error('staff_id') is-invalid @enderror" placeholder="Staff ID" name="staff_id" maxlength="5" value="{{ old('staff_id') }}" required autocomplete="staff_id" autofocus>

                                    @error('staff_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>
                            </div>

                                <div class="form-group row ">
                            <div class="col-md-5 ">
                            
                                    <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" placeholder="First Name" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>

                                    @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            
                            <div class="col-md-5">
                            
                                    <input id="middle_name" type="text" class="form-control @error('middle_name') is-invalid @enderror" placeholder="Middle Name" name="middle_name" value="{{ old('middle_name') }}" required autocomplete="middle_name" autofocus>

                                    @error('middle_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                
                            </div>

                            
                           </div>

                             <div class="form-group row">

                                <div class="col-md-5 ">
                               
                            
                                    <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" placeholder="Last Name" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>

                                    @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-5">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="E-Mail Address" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>   
                                <div class="form-group row">
                                <div class="col-md-4 " >
                            
                                    <input id="year_of_birth" type="date" class="form-control @error('year_of_birth') is-invalid @enderror" placeholder="Date Of Birth" name="year_of_birth" value="{{ old('year_of_birth') }}" required autocomplete="year_of_birth" autofocus>

                                    @error('year_of_birth')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                Date Of Birth
                                </div>

                            </div>

                            

                            <div class="form-group row">

                                <div class="col-md-5">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            
                                <div class="col-md-5">
                                    <input id="password-confirm" type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-2"></div>
                                <div class="col-md-3">
                                    <br><br>
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                                </div>

                                 <div class="col-md-6" style="text-align:left ">
                                    <br><br><br>
                                     <p class="change_link">Already a member?
                                    <a href="{{ route('login') }}" class="to_register"> <b>Log in</b> </a>
                                </p>

                                 </div>
                            </div>


                            <div class="clearfix"></div>

                            <div class="separator" style="text-align: center">
                                
                                <div class="clearfix"></div>
                                <br />
                            </div>
                        </form>
                        </form>
                    </div>
                    </section>
                </div>
            </div>
    </div>

</div>

  <div style="margin-top: 5%;">                       
   <p> Copyright © 2019 All Rights Reserved. EOMS Ver 1.0</p>
  </div>
</div>
  <div class="col-md-5 col-sm-10">
     <div class="" style="margin-top:40px;padding:0px auto 20px auto;width: 100%;font-size:15px;text-align: left;">

                    <a style="color:#d6e3ef" href="">
                        <i class="fa fa-chevron-right"></i>&nbsp;&nbsp;<b> Register Staff Member Here!!.</b>
                    </a><br>
                    <br>
                   
                    <a style="color:#d6e3ef" href="">
                        <i class="fa fa-chevron-right"></i>&nbsp;&nbsp;Student &amp; Don't have EOMS Account? Register Student Here!
                    </a>
                    <br>
                    <br>
                    <a style="color:#d6e3ef" href="">
                        <i class="fa fa-chevron-right"></i>&nbsp;&nbsp;Staff &amp; Don't have EOMS Account? Click here to Sign Up
                    </a>
                    <br>
                    <br>

     </div>
  </div>
 </div>
</div>
@endsection
