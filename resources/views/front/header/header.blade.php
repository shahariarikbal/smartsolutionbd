<section class="info-head">
    <div class="container">
        <ul>
            <li><i class="fa fa-headphones"></i> +88 01797-344344</li>
            <li>
                <ul>
                    <li class="dropdown">
                        <i class="fa fa-globe"></i>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            Language<i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Bangla</a></li>
                            <li><a href="#">English</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</section>
<!-- Info Head -->

<!-- Header-->
<header>
    <!-- Container-->
    <div class="container">
        <!-- Row-->
        <div class="row">
            <!-- Logo-->
            <div class="col-md-3">
                <div class="logo">
                    <a href="{{ url('/') }}" title="Return Home">
                        <img src="{{ asset('/assets/') }}/logo.jpeg" style="height: 25px;" alt="Logo" class="logo_img">
                    </a>
                </div>
            </div>
            <!-- End Logo-->

            <!-- Nav-->
            <nav class="col-md-9">
                <!-- Menu-->
                <ul id="menu" class="sf-menu">
                    <li>
                        <a href="{{url('/')}}">HOME</a>
                    </li>
                    <li><a href="#">PRODUCTS <i class="fa fa-angle-down"></i></a>
                        <ul>
                            @foreach($product_show as $product)
                            <li><a href="{{ url('/product/details/'.$product->id) }}">{{ $product->name }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <style>
                        .smart a:hover:not(.active) {
                            background-color: #00A8FF;
                            color: black;
                        }
                    </style>
{{--                    <li><a href="{{ url('/service/details/') }}" target="_blank">SERVICES</a>--}}
{{--                        <ul>--}}
{{--                            @foreach($show_service as $service)--}}
{{--                                <li class="smart"><a href="{{ url('/service/details/'.$service->id) }}" target="_blank">{{ $service->name }}</a></li>--}}
{{--                            @endforeach--}}
{{--                        </ul>--}}
                    </li>
                    <li>
                        <a href="#">DOWNLOAD</a>
                    </li>
                    <li><a href="{{ url('/contact-us') }}">CONTACT</a></li>
                </ul>
                <!-- End Menu-->
            </nav>
            <!-- End Nav-->
        </div>
        <!-- End Row-->
    </div>
    <!-- End Container-->
</header>
