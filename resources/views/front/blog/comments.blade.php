@extends('front.master')

@section('title')
    Blog Details
@endsection

@section('content')
    <section class="title-section">
        <div class="container">
            <!-- crumbs -->
            <div class="row crumbs">
                <div class="col-md-12">
                    <a href="{{ url('/') }}">Home</a> / <a href="#">Blog </a> / Details
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
                <div class="col-md-8">
                    @foreach($single_blog as $single)
                    <!-- Item Post -->
                    <article class="post">
                        <!-- Image Post  -->
                        <div class="post-image">
                            <img src="{{ asset('/blog-images/'.$single->images) }}" style="height: 100%" width="100%" alt="">
                        </div>
                        <!-- End Image Post  -->

                        <div class="clearfix"></div>

                        <!-- Post Meta -->
                        <div class="post-meta">
                            <span><i class="fa fa-calendar"></i> {{ date("F j, Y", strtotime($single->created_at)) }} </span>
                            <span><i class="fa fa-user" style="background-color: #00A8FF"></i> By <a href="#">{{ $single->usersBlog->name }}</a> </span>
{{--                            <span><i class="fa fa-tag"></i> <a href="#">Duis</a>, <a href="#">News</a></span>--}}
{{--                            <span><i class="fa fa-comments"></i> <a href="#">(12)</a></span>--}}
                        </div>
                        <!-- End Post Meta -->

                        <!-- Info post -->
                        <div class="info-post">
                            <h2>{{ $single->title }}</h2>
                            <p>{!! $single->description !!}</p>
                        </div>
                        <!--End Info post -->

                    </article>
                    <!-- End Item Post -->
                    @endforeach
                    <!-- Comment post -->
                    <section class="comment-post">

                        <h3><i class="fa fa-comments"></i>Comments <a href="#" style="color: #0f0f0f;"><b>[ {{ $totalComment }} ]</b></a></h3>
                        <div class="divider"></div>

                        <style>
                            .tab-content {
                                background: #FFFFFF none repeat scroll 0 0;
                                height: 469px;
                                overflow: auto;
                                padding: 17px 15px;
                            }
                        </style>
                        <!-- comment-post -->
                        <ul class="tab-content">
                            @foreach($cmnt_blog as $comment)
                            <li class="row" id="msg">
                                <div class="col-md-3">
{{--                                    <div class="image-visitor">--}}
{{--                                        <img src="img/testimonials/1.jpg" alt="Visitor1">--}}
{{--                                    </div>--}}
                                    <h6 style="margin-top: 20px;">{{ $comment->name }}</h6>
                                    <span class="date">{{ date('F j, Y', strtotime($comment->created_at)) }}</span>
                                </div>
                                <div class="col-md-9">
                                    <div class="info-comment">
                                        <span class="arrow-comment"></span>
                                        <p>{!! $comment->comments !!}</p>
                                    </div>
                                </div>
                            </li>
                           @endforeach
                        </ul>
                        <!-- End post comments -->

                    </section>

                    <div id="form-comment">

                        <h3>New Comment</h3>

                        <!-- Form coment -->
                        <form id="commentsForm" action="{{ url('/post/comments') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-6">
                                        <label>Your name *</label>
                                        <span style="color: red"> {{ $errors->has('name') ? $errors->first('name') : ' ' }}</span>
                                        <input type="text"  required="required" value="" maxlength="20" class="form-control" name="name" id="name">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Your email address *</label>
                                        <span style="color: red"> {{ $errors->has('email') ? $errors->first('email') : ' ' }}</span>
                                        <input type="email"  required="required" value="" maxlength="100" class="form-control" name="email" id="email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label>Comment *</label>
                                        <span style="color: red"> {{ $errors->has('comments') ? $errors->first('comments') : ' ' }}</span>
                                        <textarea maxlength="5000" rows="10" class="form-control" name="comments" id="comments" style="height: 138px;" required="required" ></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="submit" value="Post Comment" class="btn" style="background-color: #00A8FF; color: white;">
                                </div>
                            </div>
                        </form>
                        <!-- End Form coment -->
                    </div>

                </div>
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
                                                    <a href="{{ url('/blog/details/'.$blog->id) }}">{{ $blog->title }}</a>
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

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#commentsForm").on('submit', function (e) {
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
                            swal("Great", "Your Comment has been Submitted", "success");
                            form[0].reset();
                             location.reload();
                        }
                    },
                })
            })
        })
    </script>
@endsection

