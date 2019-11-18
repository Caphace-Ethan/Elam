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
            <div class="animate form login_form">
                <section class="login_content">
            <div class="card-header">
                <h5>Verify Your Email Address </h5>
            </div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.
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