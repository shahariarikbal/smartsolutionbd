@extends('front.master')

@section('title')
    Blog
@endsection

@section('content')
    <section class="title-section">
        <div class="container">
            <!-- crumbs -->
            <div class="row crumbs">
                <div class="col-md-12">
                    <a href="{{ url('/') }}">Home</a> / <a href="#">Blog </a> / Post
                </div>
            </div>
            <!-- End crumbs -->

            <!-- Title - Search-->
            <div class="row title">
                <!-- Title -->
                <div class="col-md-9">
                    <h1>Blog
                        <span class="subtitle-section" style="background-color: #00A8FF;">
                                Page post
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
    <section class="paddings">
        <div class="container">
            <div class="row">

                <!-- Blog Post -->
                <div class="col-md-8">

                    <!-- Item Post -->
                    <!-- End Item Post -->
                    @foreach($show_blog as $blog)
                    <!-- Item Post -->
                    <article class="post">
                        <div class="row">
                            <!-- Image and meta post -->
                            <div class="col-md-5">

                                <!-- Image Post  -->
                                <div class="post-image">
                                    <img src="{{ asset('/blog-images/'.$blog->images) }}" alt="">
                                </div>
                                <!-- End Image Post  -->
                            </div>
                            <!-- End Image and meta post -->

                            <!-- Info post -->
                            <div class="col-md-7">
                                <h3><a href="{{ url('/blog/details/'.$blog->id) }}" target="_blank">{{ $blog->title }}</a></h3>
                                <!-- Post Meta -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="post-meta">
                                            <span><i class="fa fa-calendar"></i> {{ date("F j, Y", strtotime($blog->created_at)) }} </span>
                                            <span><i class="fa fa-user"></i> By <a href="#">{{ $blog->usersBlog->name }}</a> </span>
{{--                                            <span><i class="fa fa-tag"></i> <a href="#">Duis</a>, <a href="#">News</a></span>--}}
{{--                                            <span><i class="fa fa-comments"></i> <a href="#">(12)</a></span>--}}
                                        </div>
                                    </div>
                                </div>
                                <!-- End Post Meta -->
                                <p>{!! substr($blog->description,0,300) !!} [....]</p>
                                <a href="{{ url('/blog/details/'.$blog->id) }}" target="_blank" class="btn" style="background-color: #00A8FF; color: white;">Read more...</a>
                            </div>
                            <!--End Info post -->
                        </div>
                    </article>
                    <!-- End Item Post -->
                    @endforeach
                    <!-- Item Post -->
                    {{ $show_blog->links() }}
                </div>
                <!-- End Blog Post -->


                <!-- Sidebars -->
                <div class="col-md-4 sidebars">

                    <aside>
                        <h4>Searh Sidebar</h4>
                        <form class="search" action="#" method="Post">
                            <div class="input-group">
                                <input class="form-control" placeholder="Search..." name="email"  type="email" required="required">
                                <span class="input-group-btn">
                                        <button class="btn btn-primary" type="submit" name="subscribe" >Go!</button>
                                    </span>
                            </div>
                        </form>
                    </aside>

                    <hr>

                    <aside>
                        <h4>Categories Product</h4>
                        <ul class="list">
                            @foreach($product_show as $product)
                            <li><i class="fa fa-check"></i><a href="{{ url('/product/details/'.$product->id) }}">{{ $product->name }}</a></li>
                            @endforeach
                        </ul>
                    </aside>


                    <aside class="tags">
                        <h4>Tags</h4>
                        @foreach($show_tag as $tag)
                            <a href="#" class="#" title="17 topic"><i class="fa fa-tag" style="color: #00A8FF;"></i> {{ $tag->tag_name }} </a>
                        @endforeach
                    </aside>


                    <aside>
                        <div class="tabs">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#popularPosts" data-toggle="tab"><i class="fa fa-star"></i> Popular</a></li>
                                <li class=""><a href="#recentPosts" data-toggle="tab">Recent</a></li>
                            </ul>
                            <div class="tab-content">

                                <div class="tab-pane active" id="popularPosts">
                                    <ul class="simple-post-list">
                                        @foreach($show_blog as $blog)
                                        <li>
                                            <div class="post-image">
                                                <div class="img-thumbnail">
                                                    <a href="#">
                                                        <img src="{{ asset('/blog-images/'.$blog->images) }}" style="height: 50px;" width="50px;" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="post-info">
                                                <a href="#">{{ $blog->title }}</a>
                                                <div class="post-meta">
                                                    {{ date("F j, Y", strtotime($blog->created_at)) }}
                                                </div>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>

                                <div class="tab-pane" id="recentPosts">
                                    <ul class="simple-post-list">
                                        @foreach($show_blog as $blog)
                                            <li>
                                                <div class="post-image">
                                                    <div class="img-thumbnail">
                                                        <a href="#">
                                                            <img src="{{ asset('/blog-images/'.$blog->images) }}" style="height: 50px;" width="50px;" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="post-info">
                                                    <a href="#">{{ $blog->title }}</a>
                                                    <div class="post-meta">
                                                        {{ date("F j, Y", strtotime($blog->created_at)) }}
                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </aside>

                    <aside>
                        <h4>Recent Work Gallery</h4>
                        <ul id="flickr-aside" class="thumbs"></ul>
                    </aside>

                    <hr>

                    <aside>
                        <h4>Wiget Text</h4>
                        <p>Nulla nunc dui, tristique in semper vel, congue sed ligula. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. Nulla nunc dui, tristique in semper vel. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero.</p>
                    </aside>

                </div>
                <!-- End Sidebars -->


            </div>
        </div>
        <!-- End Container-->
    </section>
@endsection

