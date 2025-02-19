@extends('frontend.layouts.master')

@section('title')
    {{ $settings->site_name }} || Payment
@endsection

@section('content')
    <!--============================
                BREADCRUMB START
            ==============================-->
    <section id="ecom__breadcrumb">
        <div class="ecom_breadcrumb_overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h4>payment</h4>
                        <ul>
                            <li><a href="{{ route('home') }}">home</a></li>
                            <li><a href="javascript:;">payment</a></li>
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
                PAYMENT PAGE START
            ==============================-->
    <section id="ecom__cart_view">
        <div class="container">
            <div class="ecom__pay_info_area">
                <div class="row">
                    <h1>Paymet success!</h1>
                </div>
            </div>
        </div>
    </section>
    <!--============================
                PAYMENT PAGE END
            ==============================-->
@endsection
