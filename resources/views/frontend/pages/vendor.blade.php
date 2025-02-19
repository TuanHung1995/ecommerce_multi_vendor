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
                        <h4>vendors</h4>
                        <ul>
                            <li><a href="{{ url('/') }}">home</a></li>
                            <li><a href="javascript:;">vendors</a></li>
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
              VENDORS START
            ==============================-->
    <section id="ecom__product_page" class="ecom__vendors">
        <div class="container">
            <div class="row">
                <div class="">
                    <div class="row">
                        @foreach ($vendors as $vendor)
                            <div class="col-xl-6 col-md-6">
                                <div class="ecom__vendor_single">
                                    <img src="{{ asset($vendor->banner) }}" alt="vendor" class="img-fluid w-100">
                                    <div class="ecom__vendor_text">
                                        <div class="ecom__vendor_text_center">
                                            <h4>{{ $vendor->shop_name }}</h4>

                                            <a href="javascript:;"><i class="far fa-phone-alt"></i>
                                                {{ $vendor->phone }}</a>
                                            <a href="javascript:;"><i class="fal fa-envelope"></i>
                                                {{ $vendor->email }}</a>
                                            <a href="{{ route('vendor.products', $vendor->id) }}" class="common_btn">visit
                                                store</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
                <div class="col-xl-12">
                    <section id="pagination">
                        <div class="mt-5">
                            @if ($vendors->hasPages())
                                {{ $vendors->links() }}
                            @endif
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
    <!--============================
               VENDORS END
            ==============================-->
@endsection
