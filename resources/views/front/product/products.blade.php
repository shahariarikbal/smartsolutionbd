@extends('front.master')

@section('title')
    Product
@endsection

@section('slider')
    <section class="title-section">
        <div class="container">
            <!-- crumbs -->
            <div class="row crumbs">
                <div class="col-md-12">
                    <a href="{{ url('/') }}"><b>Home</b></a> / Our Products
                </div>
            </div>
            <!-- End crumbs -->

            <!-- Title - Search-->
            <div class="row title">
                <!-- Title -->
                <div class="col-md-9">
                    <h1>Our Product
                        <span class="subtitle-section" style="background-color: #00A8FF;">
                                Unique Product
                                <span class="left"></span>
                                <span class="right"></span>
                            </span>
                        <span class="line-title"></span>
                    </h1>
                </div>
                <!-- End Title-->

                <!-- Search-->
                <div class="col-md-3">
                    <form class="search" action="#" method="Post">
                        <div class="input-group">
                            <input class="form-control" placeholder="Search..." name="email"  type="email" required="required">
                            <span class="input-group-btn">
                                <button class="btn" type="submit" name="subscribe" style="background-color: #00A8FF; color: #FFFFFF;">Go!</button>
                            </span>
                        </div>
                    </form>
                </div>
                <!-- End Search-->
            </div>
            <!-- End Title -Search -->

            <!-- info-title-section - optional -->
            <div class="row info-title-section">
                <div class="col-md-2 incon-title">
                    <i class="fa fa-cogs"></i>
                </div>
                <div class="col-md-10">
                    <p>Some Product Information gose to here Some Product Information gose to here Some Product Information gose to here Some Product Information gose to here..</p>
                </div>
            </div>
            <!-- End info-title-section - optional -->

        </div>
    </section>
@endsection

@section('content')
    <section class="paddings shadow-top clients">

        <!-- Title Heading -->
        <div class="titles-heading">
            <div class="line"></div>
            <h1>Our Products
                <span>
                          <i class="fa fa-star" style="color: #00A8FF;"></i>
                          Our Best Products
                          <i class="fa fa-star" style="color: #00A8FF;"></i>
                        </span>
            </h1>
        </div>
        <!-- End Title Heading -->

        <!-- Items Works -->
        <ul id="works" class="works padding-top-mini">
        @foreach($product_show as $product)
            <!-- Item Work -->
            <li class="item-work">
                <div class="hover">
                    <img src="{{ asset('product-images/'.$product->image) }}" alt="Image"/>
                    <a href="{{ asset('product-images/'.$product->image) }}" class="fancybox" title="Software"><div class="overlay"></div></a>
                </div>
                <div class="info-work">
                    <h4>{{ $product->name }}</h4>
                    <h4><b>Price : {{ number_format($product->price,2) }} TK/-</b></h4>
                    <br/>
                    <div class="icons-work">
                        <a href="" class="btn btn-success btn-sm" target="_blank">View More</a>
                        <a href="" class="btn btn-danger btn-sm" target="_blank">Live Demo</a>
                    </div>
                </div>
            </li>
            <!-- Item Work -->
            @endforeach
            <!-- Item Work -->

        </ul>
        <!-- End Items Works -->

    </section>
    <section class="padding-top services-carousel position-relative">

        <i class="fa fa-cogs icon-section right"></i>

        <!-- Title Heading -->
        <div class="titles-heading">
            <div class="line"></div>
            <h1>Upcoming Product
                <span>
                  <i class="fa fa-star" style="color: red;"></i>
                  Our Upcoming Product
                  <i class="fa fa-star" style="color: red;"></i>
                </span>
            </h1>
        </div>
        <!-- End Title Heading -->

        <!-- Items Services -->
        <ul id="services-carousel">
            <!-- Item Service -->
            <li class="item-service-carousel">
                <div class="row color" style="background-color: #00A8FF;">
                    <div class="col-md-3">
                        <i class="fa fa-camera"></i>
                    </div>
                    <div class="col-md-9">
                        <h4>Professional Photography</h4>
                    </div>
                </div>
                <div class="row">
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. </p>
                </div>
                <div class="row color-small" style="background-color: #00A8FF;"><a href="#">Read More..</a></div>
            </li>
            <!-- Item Service -->

            <!-- Item Service -->
            <li class="item-service-carousel">
                <div class="row color" style="background-color: #00A8FF;">
                    <div class="col-md-3">
                        <i class="fa fa-flask"></i>
                    </div>
                    <div class="col-md-9">
                        <h4>Web Desing</h4>
                    </div>
                </div>
                <div class="row">
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. </p>
                </div>
                <div class="row color-small" style="background-color: #00A8FF;"><a href="#">Read More..</a></div>
            </li>
            <!-- Item Service -->

            <!-- Item Service -->
            <li class="item-service-carousel">
                <div class="row color" style="background-color: #00A8FF;">
                    <div class="col-md-3">
                        <i class="fa fa-cogs"></i>
                    </div>
                    <div class="col-md-9">
                        <h4>Web Development</h4>
                    </div>
                </div>
                <div class="row">
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. </p>
                </div>
                <div class="row color-small" style="background-color: #00A8FF;"><a href="#">Read More..</a></div>
            </li>
            <!-- Item Service -->

            <!-- Item Service -->
            <li class="item-service-carousel">
                <div class="row color" style="background-color: #00A8FF;">
                    <div class="col-md-3">
                        <i class="fa fa-desktop"></i>
                    </div>
                    <div class="col-md-9">
                        <h4>Interface Ux</h4>
                    </div>
                </div>
                <div class="row">
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. </p>
                </div>
                <div class="row color-small" style="background-color: #00A8FF;"><a href="#">Read More..</a></div>
            </li>
            <!-- Item Service -->

            <!-- Item Service -->
            <li class="item-service-carousel">
                <div class="row color" style="background-color: #00A8FF;">
                    <div class="col-md-3">
                        <i class="fa fa-android"></i>
                    </div>
                    <div class="col-md-9">
                        <h4>Android Apps</h4>
                    </div>
                </div>
                <div class="row">
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. </p>
                </div>
                <div class="row color-small" style="background-color: #00A8FF;"><a href="#">Read More..</a></div>
            </li>
            <!-- Item Service -->

            <!-- Item Service -->
            <li class="item-service-carousel">
                <div class="row color" style="background-color: #00A8FF;">
                    <div class="col-md-3">
                        <i class="fa fa-apple"></i>
                    </div>
                    <div class="col-md-9">
                        <h4>Iphone Apps</h4>
                    </div>
                </div>
                <div class="row">
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. </p>
                </div>
                <div class="row color-small" style="background-color: #00A8FF;"><a href="#">Read More..</a></div>
            </li>
            <!-- Item Service -->
        </ul>
        <!-- End Items Services -->
    </section>
@endsection
