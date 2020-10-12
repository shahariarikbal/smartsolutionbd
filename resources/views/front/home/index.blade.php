@extends('front.master')

@section('title')
    Home
@endsection

@section('slider')
    <div class="tp-banner-container">
        <div class="tp-banner">
            <ul>
                @foreach($show_slider as $slider)
                <!-- SLIDE  01-->
                <li data-transition="zoomout" data-slotamount="7" data-masterspeed="1500" >
                    <!-- MAIN IMAGE -->
                    <img src="{{ asset('/slider-images/'.$slider->image) }}"   alt="kenburns6"  data-bgposition="center center" data-kenburns="on" data-duration="25000" data-ease="Linear.easeNone" data-bgfit="100" data-bgfitend="120" data-bgpositionend="center top">

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption large_text lft tp-resizeme"
                         data-x="0"
                         data-y="150"
                         data-speed="500"
                         data-start="1200"
                         data-easing="Power4.easeOut"
                         data-splitin="lines"
                         data-splitout="none"
                         data-elementdelay="0.1"
                         data-endelementdelay="0.1"
                         data-endspeed="300"
                         style="z-index: 5; max-width: 700px; line-height: 60px; max-height: auto; white-space: normal;">
                        GREAT Software
                    </div>
                    <!-- END LAYER NR. 1 -->

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption large_bold_white lft tp-resizeme"
                         data-x="-5"
                         data-y="210"
                         data-speed="500"
                         data-start="1200"
                         data-easing="Power4.easeOut"
                         data-splitin="lines"
                         data-splitout="none"
                         data-elementdelay="0.1"
                         data-endelementdelay="0.1"
                         data-endspeed="300"
                         style="z-index: 5; max-width: 700px; line-height: 60px; max-height: auto; white-space: normal;">
                        {{ $slider->name }}
                    </div>
                    <!-- END LAYER NR. 2 -->

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption line-slide lfb tp-resizeme"
                         data-x="14"
                         data-y="295"
                         data-speed="500"
                         data-start="1200"
                         data-easing="Power4.easeOut"
                         data-splitin="lines"
                         data-splitout="none"
                         data-elementdelay="0.1"
                         data-endelementdelay="0.1"
                         data-endspeed="300">
                    </div>
                    <!-- END LAYER NR. 3 -->

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption medium_text lfb tp-resizeme"
                         data-x="10"
                         data-y="330"
                         data-speed="500"
                         data-start="1200"
                         data-easing="Power4.easeOut"
                         data-splitin="lines"
                         data-splitout="none"
                         data-elementdelay="0.1"
                         data-endelementdelay="0.1"
                         data-endspeed="300"
                         style="z-index: 3; color: #dedede; max-width: 800px; max-height: auto; white-space: normal;">
                    </div>
                    <!-- END LAYER NR. 3 -->

                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption lfb tp-resizeme"
                         data-x="16"
                         data-y="380"
                         data-speed="300"
                         data-start="1400"
                         data-easing="Power3.easeInOut"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.1"
                         data-endelementdelay="0.1"
                         data-endspeed="300">
                        <a href='#' class='btn' style="background-color: #00A8FF; border: 1px solid #FFFFFF;">View More</a>
                    </div>
                    <!-- END LAYER NR. 4 -->
                </li>
                @endforeach
                <!-- END SLIDE  01-->
            </ul>
            <div class="tp-bannertimer"></div>
        </div>
    </div>
@endsection

@section('content')
    <section class="box-action">
        <div class="container">
            <div class="title">
                <p class="lead"><marquee>We Support any kind of Software Solution!</marquee></p>
            </div>
            <div class="button">
                <a href="#" target="_blank">Live Demo</a>
            </div>
        </div>
    </section>
    <!-- End box-action-->

    <!-- Services -->
    <section class="content_info">
        <div class="paddings">
            <div class="container">
                <!-- Icon Big -->
                <i class="fa fa-cogs icon-section top right"></i>
                <!-- End Icon Big -->

                <!-- Titles Heading -->
                <div class="titles-heading">
                    <div class="line"></div>
                    <h1 style="color: #00A8FF;">Great Services
                        <span style="color: #00A8FF;">
                              <i class="fa fa-star"></i>
                              Smart Solution Service
                              <i class="fa fa-star"></i>
                            </span>
                    </h1>
                </div>
                <!-- End Titles Heading -->

                <!-- Row fuid-->
                <div class="row padding-top">
                    <!-- Item service - 01 -->
                    <div class="col-md-4">
                        <div class="item-service border-right">
                            <div class="row head-service">
                                <div class="col-md-2">
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="col-md-10">
                                    <h4 style="color: #00A8FF;">High Quality</h4>
                                    <h5 style="color: #00A8FF;">Point of Sales (POS) Software</h5>
                                </div>
                            </div>
                            <p>Our point of sale system is total management. A system that you can use to manage and maintain every part of your business from register to back office. It’s the point of sale system that makes it easier for you to track the performance of your stock, your money, your staff and your customers.</p>
                        </div>
                    </div>
                    <!-- End Item service-->

                    <!-- Item service - 01 -->
                    <div class="col-md-4">
                        <div class="item-service border-right">
                            <div class="row head-service">
                                <div class="col-md-2">
                                    <i class="fa fa-fire"></i>
                                </div>
                                <div class="col-md-10">
                                    <h4 style="color: #00A8FF;">High Quality</h4>
                                    <h5 style="color: #00A8FF;">Pharmacy Management Software</h5>
                                </div>
                            </div>
                            <p>Cut your costs and improve your customers’ experience with a fully integrated retail and dispensing software rich with pharmacy-specific functionalities. Manage various type of prescriptions, handle drugs effectively and let the system take care of price calculations based on various insurance schemes.</p>
                        </div>
                    </div>
                    <!-- End Item service-->

                    <!-- Item service - 01 -->
                    <div class="col-md-4">
                        <div class="item-service">
                            <div class="row head-service">
                                <div class="col-md-2">
                                    <i class="fa fa-cogs"></i>
                                </div>
                                <div class="col-md-10">
                                    <h4 style="color: #00A8FF;">High Quality</h4>
                                    <h5 style="color: #00A8FF;">Hospital Management Software</h5>
                                </div>
                            </div>
                            <p>Our’s is a comprehensive, integrated a hospital management software, medical software, designed to manage all the aspects of a hospital operation, such as OPD management, Patient Registration, Appointment, Medical Billing, and HR / payroll. Traditional approaches encompass paper-based information processing and much more.</p>
                        </div>
                    </div>
                    <!-- End Item service - 01 -->

                    <!-- Item service - 01 -->
                    <div class="col-md-4">
                        <div class="item-service border-right">
                            <div class="row head-service">
                                <div class="col-md-2">
                                    <i class="fa fa-thumbs-up"></i>
                                </div>
                                <div class="col-md-10">
                                    <h4 style="color: #00A8FF;">High Quality</h4>
                                    <h5 style="color: #00A8FF;">Diagnostic Center Management Software</h5>
                                </div>
                            </div>
                            <p>Bridge is a club, delivering an unrivaled experience from training to regeneration. All of our clubs feature our clinically proven Personal Training, hosted by the industry’s most sought-after personal trainers.</p>
                        </div>
                    </div>
                    <!-- End Item service - 01 -->

                    <!-- Item service - 01 -->
                    <div class="col-md-4">
                        <div class="item-service border-right">
                            <div class="row head-service">
                                <div class="col-md-2">
                                    <i class="fa fa-plane"></i>
                                </div>
                                <div class="col-md-10">
                                    <h4 style="color: #00A8FF;">High Quality</h4>
                                    <h5 style="color: #00A8FF;">Restaurant Management Software</h5>
                                </div>
                            </div>
                            <p>Our fully integrated restaurant management software with a POS system that can help you increase the efficiency and margins of your dining and food service company, streamline your processes, speed up your tasks and make your customers happy – and keeping on coming back for more!</p>
                        </div>
                    </div>
                    <!-- End Item service - 01 -->

                    <!-- Item service - 01 -->
                    <div class="col-md-4">
                        <div class="item-service">
                            <div class="row head-service">
                                <div class="col-md-2">
                                    <i class="fa fa-pencil"></i>
                                </div>
                                <div class="col-md-10">
                                    <h4 style="color: #00A8FF;">High Quality</h4>
                                    <h5 style="color: #00A8FF;">Prescription Management Software</h5>
                                </div>
                            </div>
                            <p>Our e-Rx software allows you to print prescriptions as well. Easy to use screens require no computer knowledge or typing skills. Every prescription medication, inject-able, over-the-counter and vitamin product has been pre-programmed along with the most common SIGs for prescription medications.</p>
                        </div>
                    </div>
                    <!-- End Item service - 01 -->
                </div>
                <!-- End Row fuid-->
            </div>
            <!-- End Container-->
        </div>
    </section>
    <!-- End Services-->

    <!-- Services Slide -->
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
    <!-- End Services Slide-->

    <!-- Clients -->

    <!-- End Clients -->

    <!-- Sponsors -->
    <section class="content_info">
        <!-- Parallax Background -->
        <div class="bg_parallax image_01_parallax"></div>
        <!-- Parallax Background -->

        <!-- Content Parallax-->
        <!-- End Content Parallax-->
    </section>
    <!-- End Sponsors -->

    <!-- post-testimonials -->
    @endsection
