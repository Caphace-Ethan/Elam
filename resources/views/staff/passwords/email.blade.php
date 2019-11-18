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
    <div class="col-md-4 col-sm-1"></div>
    <div class="col-md-4 col-sm-10" style="margin-top: 1%;margin-bottom: 10%; text-align: center;">
        <div class="card" style="background-color:#41687b">
    <div class="register">

        <div class="login_wrapper">
            <div class="animate form login_form">
                <section class="login_content">
                    <div class="card-header">
                  <h5>Reset Password</h5>
                    </div>  
                 <div class="card-body">  
                 <br><br>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <div class="col-md-1"></div>
                            <div class="col-md-10">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="E-Mail Address" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-2"></div>
                            <div class="col-md-8">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>

                    <div class="clearfix"></div>

                    <div class="separator" style="text-align: center">
                        
                        <div class="clearfix"></div>
                        <br />

                        <div style="margin-top: 100px">
                          <h5> ECHASE - EOMS </h5>
                            
                        </div>
                    </div>
                </div>
                </section>
            </div>
        </div>
      </div>
    </div>
</div>
</div>
</div>

@endsection
