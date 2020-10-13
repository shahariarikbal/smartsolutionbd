@extends('front.master')

@section('title')
    Contact
@endsection

@section('content')
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
                    <h1 style="color: #00A8FF;">Contact Us</h1>
                </div>
                <div class="row padding-top">
                    <div class="col-md-12">
                            @if(Session::get('message'))
                                <p class="alert alert-success"><strong>Success!</strong> {{ Session::get('message') }}</p>
                            @endif
                        <div class="row">
                            <div class="card">
                                <div class="card-body">
                                    <div class="col-md-5" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); height: 462px; border-radius: 5px;">
                                        <form style="margin-top: 20px;" action="{{ url('/contact-info-store') }}" method="POST">
                                            @csrf
                                            <span style="color: black;font-family: Arial; font-size: 24px;">We would love to hear from you</span><br/>
                                            <span style="text-align: center; color: black;font-family: Arial; line-height: 1.5; font-size: 15px;">
                                                We are here to help deliver delight to Retailers, Restaurants,
                                                Hospitals & Diagnostic Centers with simple & complete automation solutions.
                                            </span>
                                            <div class="form-group" style="margin-top: 30px;">
                                                <select class="form-control" name="product_id">
                                                    <option>Select Application</option>
                                                    @foreach($product_show as $product)
                                                        <option value="{{ $product->id }}">{{ $product->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <textarea class="form-control" rows="3" name="message" placeholder="Your Message...."></textarea>
                                            </div>
                                            <div class="form-group">
                                                <input type="email" name="email" class="form-control" placeholder="Email">
                                            </div>
                                            <div class="form-group">
                                                <table>
                                                    <tr>
                                                        <td style="width: 10px;">
                                                            <input type="text" readonly name="phone" value="+880" style="width: 50px; background-color: lightgray; color: black">
                                                        </td>
                                                        <td>
                                                            <input type="number" name="phone" class="form-control" placeholder="Phone" style="width: 417px;">
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <button type="submit" class="btn btn-danger btn-block">Contact Us</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5" style="height: 370px; margin-left: 30px; margin-top: 50px;">
                                <span style="padding-top: 30px; font-size: 24px; color: #000000; font-weight: 400">Head Office </span><br/><br/>
                                <span style="padding-top: 30px; font-size: 24px; color: #000000">Dhaka </span><br/>
                                <span style="color: black; font-family: sans-serif">
                                    388/D, Free School Street,<br/>
                                    Hatirpool, Dhanmondi 1205 Dhaka,<br/>
                                    Dhaka Division, Bangladesh.<br/>
                                    +88 01797-344344,<br/>
                                    sales@smartsolutionbd.com
                                </span>
                            </div>
                        </div>
                    </div>
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
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.052023341339!2d90.38785741470264!3d23.74552418459182!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8bc18ef6663%3A0xda08abce1c66b3a6!2s388%20Free%20School%20St%2C%20Dhaka%201205!5e0!3m2!1sen!2sbd!4v1602489199293!5m2!1sen!2sbd" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
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
