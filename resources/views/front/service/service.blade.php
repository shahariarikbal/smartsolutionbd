@extends('front.master')

@section('title')
    Services
@endsection

@section('slider')
    <section class="title-section">
        <div class="container">
            <!-- crumbs -->
            <div class="row crumbs">
                <div class="col-md-12">
                    <a href="index.html">Home</a> / Single Project Information
                </div>
            </div>
            <!-- End crumbs -->

            <!-- Title - Search-->
            <div class="row title">
                <!-- Title -->
                <div class="col-md-9">
                    <h1>Our Software Services</h1>
                </div>
                <!-- End Title-->

                <!-- Search-->
                <div class="col-md-3">
                    <form class="search" action="#" method="Post">
                        <div class="input-group">
                            <input class="form-control" placeholder="Search..." name="email"  type="email" required="required">
                            <span class="input-group-btn">
                                <button class="btn" style="background-color: #00A8FF; color: #ffffff" type="submit" name="subscribe" >Go!</button>
                            </span>
                        </div>
                    </form>
                </div>
                <!-- End Search-->
            </div>
            <!-- End Title -Search -->

        </div>
    </section>
@endsection

@section('content')
    <section class="paddings">
        <div class="container">
            <div class="row position-relative">

                <i class="fa fa-cogs icon-section top right"></i>
{{--                @foreach($single_product_info as $single_product)--}}
{{--                <div class="col-md-7" style="border: 1px solid #00A8FF">--}}
{{--                    <img src="{{ asset('/service-images/'.$single_product->image) }}" style="width: 600px; height: 400px;" alt="Service Images">--}}
{{--                </div>--}}
{{--                @endforeach--}}

                <div class="col-md-12">
                    <h3 class="title-subtitle">
                        Any Kind Of Web & Desktop Services
                    </h3>
                    <p>
                        Creates customized technological solutions for
                        changing customer needs with flawless execution and world class advisory services.
                    </p>
                    <div class="row">
                        <ul class="col-md-6 list">
                            <li><i class="fa fa-check"></i>Web Marketing</li>
                            <li><i class="fa fa-check"></i>Web Application</li>
                            <li><i class="fa fa-check"></i>Responsive Desing</li>
                            <li><i class="fa fa-check"></i>Accounting Web Application</li>
                            <li><i class="fa fa-check"></i>E-paper Service</li>
                        </ul>
                        <ul class="col-md-6 list">
                            <li><i class="fa fa-check"></i>Web Design & Development</li>
                            <li><i class="fa fa-check"></i>Desktop Service</li>
                            <li><i class="fa fa-check"></i>Android Application Service</li>
                            <li><i class="fa fa-check"></i>E-Commerce Service</li>
                            <li><i class="fa fa-check"></i>IT Support</li>
                        </ul>
                    </div>
                    <div class="technologies">
                        <i class="fa fa-tablet"></i>
                        <i class="fa fa-desktop"></i>
                        <i class="fa fa-android"></i>
                        <i class="fa fa-windows"></i>
                    </div>
                    <a href="#" class="btn" style="background-color: #00A8FF; color: #FFFFFF">What Kind of Need Your Service</a>
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
