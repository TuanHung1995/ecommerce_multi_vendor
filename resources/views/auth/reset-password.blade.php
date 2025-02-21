@extends('frontend.layouts.master')

@section('content')
    <!--============================
                        BREADCRUMB START
                    ==============================-->
    <section id="ecom__breadcrumb">
        <div class="ecom_breadcrumb_overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h4>change password</h4>
                        <ul>
                            <li><a href="#">login</a></li>
                            <li><a href="#">change password</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============================
                        BREADCRUMB END
                    ==============================-->


    <!--============================
                        CHANGE PASSWORD START
                    ==============================-->
    <section id="ecom__login_register">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-md-10 col-lg-7 m-auto">
                    <form action="{{ route('password.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="token" value="{{ $request->route('token') }}">
                        <div class="ecom__change_password">
                            <h4>Reset password</h4>
                            <div class="ecom__single_pass">
                                <label>Email</label>
                                <input type="email" id="email" name="email"
                                    value="{{ old('email', $request->email) }}" placeholder="Email">
                            </div>
                            <div class="ecom__single_pass">
                                <label>new password</label>
                                <input type="password" id="password" name="password" placeholder="New Password">
                            </div>
                            <div class="ecom__single_pass">
                                <label>confirm password</label>
                                <input type="password" id="password_confirmation" name="password_confirmation"
                                    placeholder="Confirm Password">
                            </div>
                            <button class="common_btn" type="submit">submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--============================
                        CHANGE PASSWORD END
                    ==============================-->
@endsection
