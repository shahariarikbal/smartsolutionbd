@extends('front.master')

@section('title')
    Support
@endsection

@section('slider')
    <section class="title-section">
        <div class="container">
            <!-- crumbs -->
            <div class="row crumbs">
                <div class="col-md-12">
                    <a href="{{ url('/') }}"><b>Home</b></a> / Any Kind Of Software Support
                </div>
            </div>
            <!-- End crumbs -->

            <!-- Title - Search-->
            <div class="row title">
                <!-- Title -->
                <div class="col-md-9">
                    <h1>Customer Support
                        <span class="subtitle-section" style="background-color: #00A8FF;">
                                Question Us!
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
{{--            <div class="row info-title-section">--}}
{{--                <div class="col-md-2 incon-title">--}}
{{--                    <i class="fa fa-cogs"></i>--}}
{{--                </div>--}}
{{--                <div class="col-md-10">--}}
{{--                    <p>Some Product Information gose to here Some Product Information gose to here Some Product Information gose to here Some Product Information gose to here..</p>--}}
{{--                </div>--}}
{{--            </div>--}}
            <!-- End info-title-section - optional -->

        </div>
    </section>
@endsection

@section('content')
    <section class="content_info">
        <div class="paddings">
            <div class="container">
                <!-- Icon Big -->
                <i class="fa fa-cogs icon-section top right"></i>
                <!-- End Icon Big -->

                <!-- Titles Heading -->
                <div class="titles-heading">
                    <div class="line"></div>
                    <h1>Great Support</h1>
                </div>
                <!-- End Titles Heading -->
                <style>
                    .tab-content {
                        background: #FFFFFF none repeat scroll 0 0;
                        height: 469px;
                        overflow: auto;
                        padding: 17px 15px;
                    }
                </style>
                <!-- Row fuid-->
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-8 tab-content">
                            @foreach($show_answer as $answer)
                            <div class="">
                                <div class="row head-service">
                                    <div class="col-md-10">
                                        <h4>{{ $answer->question }}</h4>
                                    </div>
                                </div>
                                <p>
                                    @if(isset($answer->answer))
                                    {!! $answer->answer !!}
                                    @else
                                    ...............
                                    @endif
                                </p>
                            </div>
                                <b><em>[ {{ $answer->name }} ]</em></b>
                            <hr/>
                            @endforeach
                            @foreach($show_support as $support)
                            <div class="">
                                <div class="row head-service">
                                    <div class="col-md-10">
                                        <h4>{{ $support->question }}</h4>
                                    </div>
                                </div>
                                <p>{!! $support->answer !!}</p>
                            </div>
                            <hr/>
                            @endforeach
                            <p class="alert alert-success text-center" style="color: #0f0f0f;">
                                If You not here in your Answer.. Please Ask Us..
                            </p>
                        </div>
                        <!-- End Item service-->
                        <!-- End Item service-->

                        <!-- Item service - 01 -->
                        <div class="col-md-4" style="border-left: 1px solid gray">
                            <div class="">
                                <div class="row head-service">
                                    <div class="col-md-10">
                                        <h4 style="color: #00A8FF;">Send your Question</h4>
                                    </div>
                                </div>
                                <div id="state" style="color: red;"></div>
{{--                                <div class="load" style="text-align: center; z-index: 9999; top: 20%; left: 50%; margin: auto; position: fixed; display: none;">--}}
{{--                                    <img src="{!! asset('/assets/') !!}/200.gif" style="text-align: center; margin: auto;" />--}}
{{--                                </div>--}}
                                <div class="card">
                                    <div class="card-body">
                                        <form name="customQuestion" id="customerAskForm" action="{{ url('/custom/question') }}" method="POST" onsubmit="return validation();">
                                            @csrf
                                            <div class="form-group">
                                                <label>Your Name</label>
                                                <input type="text" name="name" class="form-control" placeholder="Enter Full Name">
                                            </div>
                                            <div class="form-group">
                                                <label>Your Email</label>
                                                <input type="email" name="email" class="form-control" placeholder="Enter Email">
                                            </div>
                                            <div class="form-group">
                                                <label>Your Phone</label>
                                                <input type="number" maxlength="15" name="phone_number" class="form-control" placeholder="Enter Phone">
                                            </div>
                                            <div class="form-group">
                                                <label>Your Question</label>
                                                <textarea class="form-control" name="question" placeholder="Enter Your Question"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <button class="btn btn-primary btn-block" type="submit">SubmiT</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Item service - 01 -->
                </div>
                <!-- End Row fuid-->
            </div>
            <!-- End Container-->
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#customerAskForm").on('submit', function (e) {
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
                    beforeSend: function () {
                        $('.load').fadeIn();
                    },
                    success: function (data) {
                        if ( data == "success"){
                            swal("Great", "Your Question has been Submitted", "success");
                            form[0].reset();
                        }
                    },
                    complete: function () {
                        $('.load').fadeOut();
                    },
                })
            })
        })
    </script>

    <script type="text/javascript">
        function validation() {
            var name            = document.customQuestion.name;
            var email        = document.customQuestion.email;
            var phone_number        = document.customQuestion.phone_number;
            var question     = document.customQuestion.question;

            if (name.value ==""){
                document.getElementById("state").innerHTML = "Please Enter Your Name...";
                return false;
            }
            if (email.value ==""){
                document.getElementById("state").innerHTML = "Please Enter Valid Email...";
                return false;
            }
            if (phone_number.value ==""){
                document.getElementById("state").innerHTML = "Please Enter Your Valid Phone Number...";
                return false;
            }
            if (question.value ==""){
                document.getElementById("state").innerHTML = "Please Enter Your Question...";
                return false;
            }

        }



    </script>
@endsection
