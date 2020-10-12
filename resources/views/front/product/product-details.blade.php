@extends('front.master')

@section('title')
    Product Details
@endsection

@section('slider')
    <section class="title-section">
        <div class="container">
            <!-- crumbs -->
            <div class="row crumbs">
                <div class="col-md-12">
                    <a href="{{ url('/') }}">Home</a> / Single Product Information
                </div>
            </div>
            <!-- End crumbs -->

            <!-- Title - Search-->
            <div class="row title">
                <!-- Title -->
                <div class="col-md-9">
                    @foreach($single_product as $product_name)
                        <h1>{{ $product_name->name }}</h1>
                    @endforeach
                </div>
                <!-- End Title-->

                <!-- Search-->
                <!-- End Search-->
            </div>
            <!-- End Title -Search -->

        </div>
    </section>
@endsection

@section('content')
    <section class="paddings">
        <div class="container">
            <div class="col-md-12">
                <div class="row">
                    @foreach($single_product as $product)
                    <div class="col-md-8" style="border-right: 2px solid #0f13bd">
                        <img src="{{ asset('/product-images/'.$product->image) }}" style="width: 90%; height: 400px;" alt="Service Images">
                    </div>
                    @endforeach
                   @foreach($single_product as $product)
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header text-center" style="background-color: #00A8FF; height: 50px; border-radius: 8px 0 8px 0px;"><h2 style="color: white;">Short Details</h2></div>
                                <div class="card-body">
                                    <table class="table">
                                        <tr>
                                            <td>Price : <b>{{ number_format($product->price,2) }} BDT.</b></td>
                                        </tr>
                                        <tr>
                                            <td>Product Type : <b>Desktop Software</b></td>
                                        </tr>
                                        <tr>
                                            <td>Short Description : <br/><b>{{ $product->short_description }}</b></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="btn" style="background-color: #00A8FF; color: white">Download</a>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                   @endforeach
                </div>
            </div>

                <div class="col-md-12" style="margin-top: 50px;">
                    <div class="col-md-12">
                        <h2><u>Product Details</u></h2>
                        @foreach($single_product as $product)
                        <p>{!! $product->description !!}</p>
                        @endforeach
                    </div>
                </div>
            <div class="col-md-12" style="margin-top: 40px;">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <img src="{{ asset('/assets/product-images/pos1.png') }}" class="box-shadow">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <img src="{{ asset('/assets/product-images/pos2.png') }}" class="box-shadow">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <img src="{{ asset('/assets/product-images/pos4.png') }}" class="box-shadow">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12" style="margin-top: 50px;">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <span style="font-size: 24px; font-weight: bold; color: #000000">Video Tutorial</span>
                        <iframe width="800" height="400" src="https://www.youtube.com/embed/XEdOTO26YwQ"></iframe>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
        </div>
        <!-- End Container-->
    </section>
    <!-- End Services Carousel-->


    <!-- Slides Team -->
    <section class="content_info">
        <!-- Parallax Background -->
        <div class="bg_parallax image_01_parallax"></div>
        <!-- Parallax Background -->

        <!-- Content Parallax-->
        <section class="opacy_bg_02 paddings sponsors">
            <div class="container wow fadeInUp">
                <h2 class="title-resalt">We have trust Buyer of <span> 25,869 </span>customers , including  these fine  companies</h2>
                <!-- Sponsors -->
                <ul id="sponsors">
                    <!-- Sponsor -->
                    <li data-toggle="tooltip" title data-original-title="Tooltip Hover">
                        <a href="#"><img src="{{ asset('/assets/') }}/img/sponsors/logos/1.png" alt=""></a>
                    </li>
                    <!-- Item Sponsor -->

                    <!-- Sponsor -->
                    <li data-toggle="tooltip" title data-original-title="Tooltip Hover">
                        <a href="#"><img src="{{ asset('/assets/') }}/img/sponsors/logos/6.png" alt=""></a>
                    </li>
                    <!-- Item Sponsor -->

                    <!-- Sponsor -->
                    <li data-toggle="tooltip" title data-original-title="Tooltip Hover">
                        <a href="#"><img src="{{ asset('/assets/') }}/img/sponsors/logos/3.png" alt=""></a>
                    </li>
                    <!-- Item Sponsor -->

                    <!-- Sponsor -->
                    <li data-toggle="tooltip" title data-original-title="Tooltip Hover">
                        <a href="#"><img src="{{ asset('/assets/') }}/img/sponsors/logos/4.png" alt=""></a>
                    </li>
                    <!-- Item Sponsor -->

                    <!-- Sponsor -->
                    <li data-toggle="tooltip" title data-original-title="Tooltip Hover">
                        <a href="#"><img src="{{ asset('/assets/') }}/img/sponsors/logos/5.png" alt=""></a>
                    </li>
                    <!-- Item Sponsor -->

                    <!-- Sponsor -->
                    <li data-toggle="tooltip" title data-original-title="Tooltip Hover">
                        <a href="#"><img src="{{ asset('/assets/') }}/img/sponsors/logos/6.png" alt=""></a>
                    </li>
                    <!-- Item Sponsor -->

                    <!-- Sponsor -->
                    <li data-toggle="tooltip" title data-original-title="Tooltip Hover">
                        <a href="#"><img src="{{ asset('/assets/') }}/img/sponsors/logos/4.png" alt=""></a>
                    </li>
                    <!-- Item Sponsor -->
                </ul>
                <!-- End Sponsors -->

                <div class="circle">
                    <i class="fa fa-thumbs-up"></i>
                </div>
            </div>
        </section>
        <!-- End Content Parallax-->
    </section>
@endsection
