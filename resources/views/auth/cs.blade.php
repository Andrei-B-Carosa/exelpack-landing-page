
@extends('auth.app')

@section('title', 'Exelpack | System Admin')

@section('login-form')
<div class="login-content flex-row-fluid d-flex flex-column p-10">
    <!--begin::Wrapper-->
    <div class="d-flex flex-row-fluid flex-center">
        <!--begin::Signin-->
        <div class="login-form">
            <!--begin::Form-->
            <form class="form" id="kt_login_singin_form" action="{{ route('authenticate') }}">
                <!--begin::Title-->
                <div class="pb-5 pb-lg-15">
                    <h3 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">Login Your Account</h3>
                    <div class="text-muted font-weight-bold font-size-h6">Enter Your Account Details.
                    <a href="javascript:void(0)" class="text-primary font-weight-bolder"></a></div>
                </div>
                <!--begin::Title-->
                <!--begin::Form group-->
                <div class="form-group">
                    <label class="font-size-h6 font-weight-bolder text-dark">Your Username</label>
                    <input class="form-control h-auto py-7 px-6 rounded-lg border-0" type="text" name="username" autocomplete="off" />
                </div>
                <!--end::Form group-->
                <!--begin::Form group-->
                <div class="form-group">
                    <div class="d-flex justify-content-between mt-n5">
                        <label class="font-size-h6 font-weight-bolder text-dark pt-5">Your Password</label>
                        {{-- <a href="custom/pages/login/login-3/forgot.html" class="text-primary font-size-h6 font-weight-bolder text-hover-primary pt-5">Forgot Password ?</a> --}}
                    </div>
                    <input class="form-control h-auto py-7 px-6 rounded-lg border-0" type="password" name="password" autocomplete="off" />
                </div>
                <!--end::Form group-->
                <!--begin::Action-->
                <div class="pb-lg-0 pb-5">
                    <button type="submit" id="kt_login_singin_form_submit_button" class="btn btn btn-primary btn-lg btn-block font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3">Login</button>
                </div>
                <!--end::Action-->
            </form>
            <!--end::Form-->
        </div>
        <!--end::Signin-->
    </div>
    <!--end::Wrapper-->
</div>
@endsection
