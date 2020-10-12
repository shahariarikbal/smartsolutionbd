@extends('front.master')

@section('title')
    Service Register
@endsection

@section('content')
    <section class="title-section">
        <div class="container">
            <!-- crumbs -->
            <div class="row crumbs">
                <div class="col-md-12">
                    <a href="{{ url('/') }}">Home</a> / <a href="#">Features</a> / <a href="#">Pages </a> / Register User
                </div>
            </div>
            <!-- End crumbs -->

            <!-- Title - Search-->
            <div class="row title">
                <!-- Title -->
                <div class="col-md-9">
                    <h1>Register User
                        <span class="subtitle-section" style="background-color: #00A8FF">
                               Pages Styles
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
                                    <button class="btn btn-primary" type="submit" name="subscribe" >Go!</button>
                                </span>
                        </div>
                    </form>
                </div>
                <!-- End Search-->
            </div>
            <!-- End Title -Search -->

        </div>
    </section>
    <!-- End Title Section -->


    <!-- Section area -->
    <section class="paddings">
        <div class="container">
            @if(Session::get('message'))
                <p class="alert alert-success text-center">{{ Session::get('message') }}</p>
            @endif

            <div class="row register padding-top-mini">
                <form action="{{ url('/product/service/request') }}" method="post" id="serviceRequest">
                    @csrf
                    <div class="col-md-10">
                        <div class="row">
                            <div class="col-md-4">
                                <input placeholder="Your Name" name="name" type="text" required>
                                <span style="color: red"> {{ $errors->has('name') ? $errors->first('name') : ' ' }}</span>
                            </div>
                            <div class="col-md-4">
                                <input placeholder="Your Email" name="email" type="email" required>
                                <span style="color: red"> {{ $errors->has('email') ? $errors->first('email') : ' ' }}</span>
                            </div>
                            <div class="col-md-4">
                                <input placeholder="Your Phone" name="phone_number" type="number" required>
                                <span style="color: red"> {{ $errors->has('phone_number') ? $errors->first('phone_number') : ' ' }}</span>
                            </div>
                        </div>
                        <div class="row padding_top_mini">
                            <div class="col-md-4">
                                <input placeholder="State"  name="state" type="text" required>
                                <span style="color: red"> {{ $errors->has('state') ? $errors->first('state') : ' ' }}</span>
                            </div>
                            <div class="col-md-4">
                                <input placeholder="City" name="city" type="text" required>
                                <span style="color: red"> {{ $errors->has('city') ? $errors->first('city') : ' ' }}</span>
                            </div>
                            <div class="col-md-4">
                                <input placeholder="Adress" name="address" type="text" required>
                                <span style="color: red"> {{ $errors->has('address') ? $errors->first('address') : ' ' }}</span>
                            </div>
                        </div>
                        <div class="row padding_top_mini">
                            <div class="col-md-4">
                                <select class="form-control" name="service">
                                    <option>--- Select Service ---</option>
                                    @foreach($product_show as $product)
                                        <option value="{{ $product->id }}">{{ $product->name }}</option>
                                    @endforeach
                                    <span style="color: red"> {{ $errors->has('service') ? $errors->first('service') : ' ' }}</span>
                                </select>
                            </div>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="service_details" placeholder="Please Write Your Opinion....">
                                <span style="color: red"> {{ $errors->has('service_details') ? $errors->first('service_details') : ' ' }}</span>
                            </div>
                        </div>
                    </div>
                    <br/>
                    <div class="col-md-10">
                        <input type="submit" class="btn btn-primary" value="SubmiT">
                    </div>
                </form>
            </div>


        </div>
        <!-- End Container-->
    </section>
    <!-- End Section area-->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#serviceRequest").on('submit', function (e) {
                e.preventDefault();
                var form = $(this);
                var url = form.attr("action");
                var type = form.attr("method");
                var data = form.serialize();

                $.ajax({
                    url:url,
                    data:data,
                    type:type,
                    dataType:"JSON",
                    success: function (data) {
                        if ( data == "success"){
                            swal("Thank You", "Your Service Register has been Submitted", "success");
                            form[0].reset();
                        }
                    },
                })
            })
        })
    </script>
@endsection
