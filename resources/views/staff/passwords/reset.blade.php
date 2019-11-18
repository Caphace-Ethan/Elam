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
    <div class="col-md-3 col-sm-1"></div>
    <div class="col-md-4 col-sm-10" style="margin-top: 1%;text-align: center;">

     <div class="card" style="background-color:#41687b">
    <div class="register">

        <div class="login_wrapper">
                <section class="login_content">
                   <div class="card-header">
                    <h5>Reset Password</h5>
                   </div>
                   <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group row">

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="E-Mail Address" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-12">
                                <input id="password-confirm" type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    </div>
                </section>
                </div>
            </div>
          </div>
       </div>  
   </div>
</div>


@endsection
