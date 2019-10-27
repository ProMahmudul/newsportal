@extends('master')

@section('main-content')
    <div class="pagemaker">
        <div id="div_665" class="p     _col">
            <div class="inner">
                <div id="wrapper_29395" class="wrapper   container_white_bg ">
                    <div class="inner">
                        <div id="div_29398" class="p_p   container_bottom_padding  _col">
                            <div class="inner">
                                <div id="widget_75581" class="widget_color_ widget_wrap">
                                    <div class="widget_text  widget">
                                        <div class="widget_text_inner aunqur">
                                            <div class="content">
                                                <script>
                                                    $(window).scroll(function () {
                                                        if ($(this).scrollTop() > 100) {
                                                            $('.header_wrap').css({
                                                                'box-shadow': '0px 5px 5px -5px #000',
                                                                'border-bottom': '0 none'
                                                            });
                                                        } else {
                                                            $('.header_wrap').css({
                                                                'box-shadow': 'none',
                                                                'border-bottom': '1px solid #ccc'
                                                            });
                                                        }
                                                    });
                                                </script>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="wrapper_75726" class="wrapper special_32_5_67_5  container_fixed_height ">
                    <div class="inner">
                        <div id="div_75731" class="p_d     _col">
                            <div class="inner">
                                <div id="wrapper_75741"
                                     class="wrapper special_35_65 palo_60_40 container_all_fixed_height_column container_fixed_height container_top_padding ">
                                    <div class="inner">
                                        <div id="div_75746" class="p_d_d     _col">
                                            <div class="inner">
                                                <div id="widget_76001" class="widget_color_default widget_wrap">
                                                    <div class="contents_listing  widget">
                                                        <div class="contents  summery_view">
                                                            <div class="row">
                                                                <div class="col col1">
                                                                    <div class="each col_in has_image image_featured content_capability_blog content_type_article responsive_image_hide_ m_show_image_as_top ">
                                                                        <!--overlay anchor-->
                                                                        @php
                                                                            $post = \App\Post::orderBy('id', 'DESC')->first();
                                                                        @endphp
                                                                        <a class="link_overlay"
                                                                           href="{{ route('single.post', $post->id) }}"></a>
                                                                        <!--image-->
                                                                        <div class="image">
                                                                            <noscript id="ari-image-760011616807"
                                                                                      data-ari="{&quot;path&quot;:&quot;media\/2017\/10\/20\/bd4adf0fe14e0938fca7c6302dcb07f0-59e9d5f98b565.jpg?jadewits_media_id=1040516&quot;,&quot;ratio&quot;:[16,9],&quot;alt&quot;:&quot;\u09b8\u0982\u09b8\u09a6 \u09a8\u09bf\u09b0\u09cd\u09ac\u09be\u099a\u09a8\u09c7 \u0986. \u09b2\u09c0\u0997\u09c7\u09b0 \u099a\u09c7\u09df\u09c7 \u09ac\u09cd\u09af\u09df \u09ac\u09c7\u09b6\u09bf \u09ac\u09bf\u098f\u09a8\u09aa\u09bf\u09b0, \u09b8\u09ac\u099a\u09c7\u09df\u09c7 \u09ac\u09c7\u09b6\u09bf \u09ac\u09cd\u09af\u09df \u0987\u09b8\u09b2\u09be\u09ae\u09c0 \u0986\u09a8\u09cd\u09a6\u09cb\u09b2\u09a8\u09c7\u09b0&quot;}">

                                                                                {{--<img src="{{ asset('frontend') }}/assets/contents/cache/images/400x225x1/uploads/media/2017/10/20/bd4adf0fe14e0938fca7c6302dcb07f0-59e9d5f98b565.jpg"--}}
                                                                                {{--alt="সংসদ নির্বাচনে আ. লীগের চেয়ে ব্যয় বেশি বিএনপির, সবচেয়ে বেশি ব্যয় ইসলামী আন্দোলনের"/>--}}
                                                                            </noscript>


                                                                            <img src="{{ Storage::url($post->image) }}"
                                                                                 style="width: 200vh">
                                                                            <script data-id="ari-image-760011616807">
                                                                                jwARI.fetch($('#ari-image-760011616807'));
                                                                            </script>
                                                                            <span class="content_type"></span>
                                                                        </div>
                                                                        <div class="info ">
                                                                            <h2 class="title_holder">
                                                                                <span class="title">
                                                                                    @php
                                                                                        $post = \App\Post::orderBy('id', 'DESC')->first();
                                                                                    @endphp
                                                                                    {{ $post->title }}
                                                                                </span>
                                                                            </h2>
                                                                            <div class="additional">
                                                                                <!--category/page-->
                                                                                <!--author-->
                                                                                <!--time-->
                                                                                <!--comment count-->
                                                                                <!--like count-->
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="div_75751" class="p_d_c     _col">
                                            <div class="inner">
                                                <div id="widget_101337" class="widget_color_ widget_wrap">
                                                    <div class="widget_text  widget">
                                                        <div class="widget_text_inner aunqur">
                                                            <div class="content"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="widget_75766" class="widget_color_default widget_wrap">
                                                    <div class="contents_listing  widget">
                                                        <div class="contents shaded_bg ">
                                                            <div class="row">
                                                                <div class="col col1">
                                                                    <div class="col_in">
                                                                        <div class="listing">
                                                                            @php
                                                                                $p = \App\Post::orderBy('id', 'DESC')->first();
                                                                                        $last_insert_id = $p->id;
                                                                                    $posts = \App\Post::where('status', 1)->orderBy('id', 'DESC')->get()->except($last_insert_id)->take(3);
                                                                            @endphp
                                                                            @foreach($posts as $post)
                                                                                <div class="each col_in has_image image_left content_capability_blog content_type_article responsive_image_hide_ m_show_featured_image_as_left">
                                                                                    <!--overlay anchor-->
                                                                                    <a class="link_overlay"
                                                                                       href="{{ route('single.post', $post->id) }}"></a>
                                                                                    <!--image-->
                                                                                    <div class="image">
                                                                                        <noscript
                                                                                                id="ari-image-757661616813"
                                                                                                data-ari="{&quot;path&quot;:&quot;media\/2017\/10\/13\/7e315843eb27154b490273e90e28c044-59e0393f488f2.jpg?jadewits_media_id=1030981&quot;,&quot;ratio&quot;:[16,9],&quot;alt&quot;:&quot;\u099f\u09c7\u0995\u09a8\u09be\u09ab\u09c7 \u2018\u09ac\u09a8\u09cd\u09a6\u09c1\u0995\u09af\u09c1\u09a6\u09cd\u09a7\u09c7\u2019 \u09e8 \u09b0\u09cb\u09b9\u09bf\u0999\u09cd\u0997\u09be \u09a8\u09bf\u09b9\u09a4&quot;}">
                                                                                            <img src="{{ asset('frontend') }}/assets/contents/cache/images/400x225x1/uploads/media/2017/10/13/7e315843eb27154b490273e90e28c044-59e0393f488f2.jpg"
                                                                                                 alt="{{ $post->title }}"/>
                                                                                        </noscript>
                                                                                        <img src="{{ Storage::url($post->image) }}"
                                                                                             alt="" width="90">

                                                                                        <script data-id="ari-image-757661616813">
                                                                                            jwARI.fetch($('#ari-image-757661616813'));
                                                                                        </script>
                                                                                        <span class="content_type"></span>
                                                                                    </div>
                                                                                    <div class="info ">
                                                                                        <h2 class="title_holder">
                                                                                            <span class="title">{{ $post->title }}</span>
                                                                                        </h2>
                                                                                        <div class="additional">
                                                                                            <!--category/page-->
                                                                                            <!--author-->
                                                                                            <!--time-->
                                                                                            <!--comment count-->
                                                                                            <!--like count-->
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            @endforeach

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="div_75736" class="p_c   container_top_padding  _col">
                            <div class="inner">
                                <div id="widget_75761" class="widget_color_ widget_wrap">
                                    <div class="widget_text  widget">
                                        <div class="widget_text_inner aunqur">
                                            <div class="content">
                                                <div class="common_google_ads">
                                                    <!-- Async AdSlot 2 for Ad unit 'Home_336x280_R1' ### Size: [[336,280],[300,250]] -->
                                                    <div id='div-gpt-ad-44697-2'>
                                                        <script>
                                                            googletag.cmd.push(function () {
                                                                googletag.display('div-gpt-ad-44697-2');
                                                            });
                                                        </script>
                                                    </div>
                                                    <!-- End AdSlot 2 -->
                                                </div>
                                                <style>
                                                    @media only screen and (max-width: 800px) {
                                                        .palo_facebook_live {
                                                            padding-bottom: 10px;
                                                            border-bottom: 1px solid #ccc;
                                                            margin-bottom: 10px;
                                                        }
                                                    }
                                                </style>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="widget_86151" class="widget_color_ widget_wrap">
                                    <div class="widget_text  widget">
                                        <div class="widget_text_inner aunqur">
                                            <div class="content">
                                                <style>
                                                    .bottom {
                                                        display: block;
                                                        margin-bottom: 20px;
                                                    }

                                                    .bottom a.more_link {
                                                        background-color: #fff0;
                                                        padding: 2px 10px;
                                                        color: #e61010;
                                                        font-size: 20px;
                                                        border-radius: 0px;
                                                    }

                                                    /* headbar and text purple*/

                                                    div#widget_75987 h4 a {
                                                        color: #6a1b9a;
                                                    }

                                                    #widget_75987 .titlebar:before {
                                                        background: #6a1b9a;
                                                    }

                                                    #widget_75987 .title_holder {
                                                        color: #6a1b9a;
                                                        /* font color*/
                                                    }

                                                    #widget_75987 .contents .each:hover .title_holder {
                                                        color: #8e24aa;
                                                        /* font hover color*/
                                                    }

                                                    #widget_96366 h4.titlebar {
                                                        background: #FED411;
                                                        color: #ff0000;
                                                        padding: 6px 0px;
                                                    }

                                                    #widget_96366 h4.titlebar a {
                                                        text-decoration: none;
                                                        color: #153070;
                                                        text-align: center;
                                                    }

                                                    #widget_96366 .headbar:before,
                                                    #widget_96366 .titlebar:before {
                                                        width: 0px;
                                                    }

                                                    #widget_97546 img {
                                                        margin: 0px 0px 10px;
                                                    }
                                                </style>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="wrapper_87301" class="wrapper special_32_5_67_5  container_bottom_padding ">
                    <div class="inner">
                        <div id="div_87306" class="p_d     _col">
                            <div class="inner">
                                <div id="wrapper_96351"
                                     class="wrapper special_35_65 palo_60_40 container_all_fixed_height_column container_fixed_height hide_this_block">
                                    <div class="inner">
                                        <div id="div_96356" class="p_d_d   container_fixed_height  _col">
                                            <div class="inner">
                                                <div id="widget_96366" class="widget_color_ widget_wrap">
                                                    <div class="contents_listing  widget">
                                                        <div class="contents  summery_view col_articles shaded_bg column_view ">
                                                            <div class="row">
                                                                @php
                                                                    $last_p = \App\Post::orderBy('id', 'DESC')->first();
                                                                            $last_insert_id = $last_p->id ;
                                                                            $l_id = array();
                                                                            for($i = 0; $i < 5; $i++){
                                                                                $l_id[] = $last_insert_id - $i;
                                                                            }

                                                                        $posts = \App\Post::where('status', 1)->orderBy('id', 'DESC')->get()->except($l_id)->take(2);
                                                                @endphp
                                                                @foreach($posts as $post)
                                                                    <div class="col col2">
                                                                        <div class="each col_in
													has_image
													image_top
													content_capability_blog
													content_type_article
													responsive_image_hide_
												">
                                                                            <!--overlay anchor-->
                                                                            <a class="link_overlay"
                                                                               href="{{ route('single.post', $post->id) }}"></a>
                                                                            <!--image-->
                                                                            <div class="image">
                                                                                <noscript id="ari-image-963661616800"
                                                                                          data-ari="{&quot;path&quot;:&quot;media\/2019\/09\/29\/9a376f92ad8998e4aa3fcea7a73f1255-5d90dd46c6d78.jpg?jadewits_media_id=1473925&quot;,&quot;ratio&quot;:[16,9],&quot;alt&quot;:&quot;\u0995\u09cd\u09af\u09be\u09ae\u09cd\u09aa\u09be\u09b8 \u099b\u09be\u09dc\u09b2\u09c7\u09a8 \u09ac\u0999\u09cd\u0997\u09ac\u09a8\u09cd\u09a7\u09c1 \u09aa\u09cd\u09b0\u09af\u09c1\u0995\u09cd\u09a4\u09bf \u09ac\u09bf\u09b6\u09cd\u09ac\u09ac\u09bf\u09a6\u09cd\u09af\u09be\u09b2\u09df\u09c7\u09b0 \u0989\u09aa\u09be\u099a\u09be\u09b0\u09cd\u09af&quot;}">
                                                                                    <img src="{{ asset('frontend') }}/assets/contents/cache/images/400x225x1/uploads/media/2019/09/29/9a376f92ad8998e4aa3fcea7a73f1255-5d90dd46c6d78.jpg"
                                                                                         alt="ক্যাম্পাস ছাড়লেন বঙ্গবন্ধু প্রযুক্তি বিশ্ববিদ্যালয়ের উপাচার্য"/>
                                                                                </noscript>
                                                                                <img src="{{ Storage::url($post->image) }}"
                                                                                     alt="" style="height: 9em;">
                                                                                <script data-id="ari-image-963661616800">
                                                                                    jwARI.fetch($('#ari-image-963661616800'));
                                                                                </script>
                                                                                <span class="content_type"></span>
                                                                            </div>
                                                                            <div class="info has_ai">
                                                                                <h2 class="title_holder">
                                                                                    <span class="title">{{ $post->title }}</span>
                                                                                </h2>
                                                                                <div class="additional">
                                                                                    <!--category/page-->
                                                                                    <a class="category aitm"
                                                                                       href="{{ route('category.post', $post->category->id) }}">{{ $post->category->name }}</a>
                                                                                    <!--author-->
                                                                                    <!--time-->
                                                                                    <!--comment count-->
                                                                                    <!--like count-->
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                            <div class="row">
                                                                @php
                                                                    $last_p = \App\Post::orderBy('id', 'DESC')->first();
                                                                            $last_insert_id = $last_p->id ;
                                                                            $l_id = array();
                                                                            for($i = 0; $i < 7; $i++){
                                                                                $l_id[] = $last_insert_id - $i;
                                                                            }

                                                                        $posts = \App\Post::where('status', 1)->orderBy('id', 'DESC')->get()->except($l_id)->take(2);
                                                                @endphp
                                                                @foreach($posts as $post)
                                                                    <div class="col col2">
                                                                        <div class="each col_in
													has_image
													image_top
													content_capability_blog
													content_type_article
													responsive_image_hide_
												">
                                                                            <!--overlay anchor-->
                                                                            <a class="link_overlay"
                                                                               href="{{ route('single.post', $post->id) }}"></a>
                                                                            <!--image-->
                                                                            <div class="image">
                                                                                <noscript id="ari-image-963661616800"
                                                                                          data-ari="{&quot;path&quot;:&quot;media\/2019\/09\/29\/9a376f92ad8998e4aa3fcea7a73f1255-5d90dd46c6d78.jpg?jadewits_media_id=1473925&quot;,&quot;ratio&quot;:[16,9],&quot;alt&quot;:&quot;\u0995\u09cd\u09af\u09be\u09ae\u09cd\u09aa\u09be\u09b8 \u099b\u09be\u09dc\u09b2\u09c7\u09a8 \u09ac\u0999\u09cd\u0997\u09ac\u09a8\u09cd\u09a7\u09c1 \u09aa\u09cd\u09b0\u09af\u09c1\u0995\u09cd\u09a4\u09bf \u09ac\u09bf\u09b6\u09cd\u09ac\u09ac\u09bf\u09a6\u09cd\u09af\u09be\u09b2\u09df\u09c7\u09b0 \u0989\u09aa\u09be\u099a\u09be\u09b0\u09cd\u09af&quot;}">
                                                                                    <img src="{{ asset('frontend') }}/assets/contents/cache/images/400x225x1/uploads/media/2019/09/29/9a376f92ad8998e4aa3fcea7a73f1255-5d90dd46c6d78.jpg"
                                                                                         alt="ক্যাম্পাস ছাড়লেন বঙ্গবন্ধু প্রযুক্তি বিশ্ববিদ্যালয়ের উপাচার্য"/>
                                                                                </noscript>
                                                                                <img src="{{ Storage::url($post->image) }}"
                                                                                     alt="" style="height: 9em;">
                                                                                <script data-id="ari-image-963661616800">
                                                                                    jwARI.fetch($('#ari-image-963661616800'));
                                                                                </script>
                                                                                <span class="content_type"></span>
                                                                            </div>
                                                                            <div class="info has_ai">
                                                                                <h2 class="title_holder">
                                                                                    <span class="title">{{ $post->title }}</span>
                                                                                </h2>
                                                                                <div class="additional">
                                                                                    <!--category/page-->
                                                                                    <a class="category aitm"
                                                                                       href="{{ route('category.post', $post->category->id) }}">{{ $post->category->name }}</a>
                                                                                    <!--author-->
                                                                                    <!--time-->
                                                                                    <!--comment count-->
                                                                                    <!--like count-->
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="div_96361" class="p_d_c     _col">
                                            <div class="inner">
                                                <div id="widget_98481" class="widget_color_ widget_wrap">
                                                    <div class="contents_listing  widget">
                                                        <div class="contents
				shaded_bg
				">
                                                            <div class="row">
                                                                <div class="col col1">
                                                                    <div class="col_in">
                                                                        <div class="listing">
                                                                            @php
                                                                                $last_p = \App\Post::orderBy('id', 'DESC')->first();
                                                                                        $last_insert_id = $last_p->id ;
                                                                                        $l_id = array();
                                                                                        for($i = 0; $i < 10; $i++){
                                                                                            $l_id[] = $last_insert_id - $i;
                                                                                        }

                                                                                    $posts = \App\Post::where('status', 1)->orderBy('id', 'DESC')->get()->except($l_id)->take(7);
                                                                            @endphp
                                                                            @foreach($posts as $post)
                                                                                <div class="each col_in
				has_image
				image_left
				content_capability_blog
				content_type_article
				responsive_image_hide_
			">
                                                                                    <!--overlay anchor-->
                                                                                    <a class="link_overlay"
                                                                                       href="{{ route('single.post', $post->id) }}"></a>
                                                                                    <!--image-->
                                                                                    <div class="image">
                                                                                        <noscript
                                                                                                id="ari-image-984811616808"
                                                                                                data-ari="{&quot;path&quot;:&quot;media\/2019\/09\/30\/4a30eb86d8952494486252652697cc67-5d916790a1726.jpg?jadewits_media_id=1473935&quot;,&quot;ratio&quot;:[16,9],&quot;alt&quot;:&quot;\u09b9\u09c1\u09df\u09be\u0993\u09df\u09c7\u09b0 \u09aa\u09cd\u09b0\u09a5\u09ae \u09ab\u09cd\u09b2\u09cd\u09af\u09be\u0997\u09b6\u09bf\u09aa \u09b8\u09cd\u099f\u09cb\u09b0&quot;}">
                                                                                            <img src="{{ asset('frontend') }}/assets/contents/cache/images/400x225x1/uploads/media/2019/09/30/4a30eb86d8952494486252652697cc67-5d916790a1726.jpg"
                                                                                                 alt="হুয়াওয়ের প্রথম ফ্ল্যাগশিপ স্টোর"/>
                                                                                        </noscript>
                                                                                        <img src="{{ Storage::url($post->image) }}"
                                                                                             alt="" width="80">
                                                                                        <script data-id="ari-image-984811616808">
                                                                                            jwARI.fetch($('#ari-image-984811616808'));
                                                                                        </script>
                                                                                        <span class="content_type"></span>
                                                                                    </div>
                                                                                    <div class="info ">
                                                                                        <h2 class="title_holder">
                                                                                            <span class="title">{{ $post->title }}</span>
                                                                                        </h2>
                                                                                        <div class="additional">
                                                                                            <!--category/page-->
                                                                                            <!--author-->
                                                                                            <!--time-->
                                                                                            <!--comment count-->
                                                                                            <!--like count-->
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            @endforeach
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="div_87311" class="p_c  palo_sp_theme_sports_green1   _col">
                            <div class="inner">
                                <div id="widget_102484" class="widget_color_ widget_wrap">
                                    <div class="widget_text  widget">
                                        <div class="widget_text_inner aunqur">
                                            <div class="content">
                                            <!-- <div class="tourism_day_ad">
		<a href="{{ asset('frontend') }}/assets/https://www.prothomalo.com/world-tourism-day?utm_source=palo_homepage&utm_medium=click&utm_campaign=world_tourism_day_19" target="_blank"><img src="{{ asset('frontend') }}/assets/https://paloimages.prothom-alo.com/contents/cache/images/540X250X1/uploads/media/2019/09/26/a5f5e6890a8249c0ae9c2b1bcda1aa58-5d8c4b0e78c60.png" alt="Abashon Mela"></a>
	</div>
	<style>
	.tourism_day_ad{
	  display: block;
	  margin-bottom: 8px;
	}
	#widget_102029 .listing .each.col_in:nth-child(2), #widget_102029 .listing .each.col_in:nth-child(3){
	 display: none;
	}
	</style>
	<script>
	$(document).ready(function(){
	      var d = new Date();
	       var todays_date = d.getDate();
	if(todays_date > 28){
	   $(".tourism_day_ad").css("display","none");
	   $("#widget_102029 .listing .each.col_in:nth-child(2), #widget_102029 .listing .each.col_in:nth-child(3)").css("display", "block");
	}
	});
	</script> --></div>
                                        </div>
                                    </div>
                                </div>
                                <div id="widget_102029" class="widget_color_ widget_wrap">
                                    <div class="contents_listing  widget">
                                        <div class="contents  summery_with_list_view
				shaded_bg
				">
                                            <div class="row">
                                                <div class="col col1">
                                                    @php
                                                        $category = \App\Category::where('name', 'বিনোদন')->with('posts')->orderBy('id', 'desc')->first();
                                                    @endphp
                                                    <div class="each col_in
				has_image
				image_top
				content_capability_gallery
				content_type_watch
				responsive_image_hide_
			">
                                                        <!--overlay anchor-->
                                                        <a class="link_overlay"
                                                           href="{{ route('single.post', $category->posts[0]->id) }}"></a>
                                                        <!--image-->
                                                        <div class="image">
                                                            <noscript id="ari-image-1020291616794"
                                                                      data-ari="{&quot;path&quot;:&quot;media\/2019\/09\/29\/a844258a13f712a39beddc1aaebf07b1-5d90cc89932de.jpg?jadewits_media_id=1473919&quot;,&quot;ratio&quot;:[16,9],&quot;alt&quot;:&quot;\u09a6\u09c1\u09b0\u09cd\u0997\u09be\u09aa\u09c2\u099c\u09be\u09b0 \u09a8\u09a4\u09c1\u09a8 \u0997\u09be\u09a8 \u09a8\u09bf\u09df\u09c7 \u098f\u09b2\u09c7\u09a8 \u09b8\u09a8\u09cd\u09a6\u09c0\u09aa\u09a8 || \u09b2\u09be\u0995\u09cd\u09b8 \u0995\u09cd\u09af\u09be\u09ab\u09c7 \u09b2\u09be\u0987\u09ad || \u09aa\u09b0\u09cd\u09ac \u09e8\u09ea\u09e6&quot;}">
                                                            </noscript>
                                                            <img src="{{ Storage::url($category->posts[0]->image) }}"
                                                                 alt="{{ $category->posts[0]->title }}"/>
                                                            <script data-id="ari-image-1020291616794">
                                                                jwARI.fetch($('#ari-image-1020291616794'));
                                                            </script>
                                                            <span class="content_type"></span>
                                                        </div>
                                                        <div class="info ">
                                                            <h2 class="title_holder">
                                                                <span class="title">{{ $category->posts[0]->title }}</span>
                                                            </h2>
                                                            <div class="additional">
                                                                <!--category/page-->
                                                                <!--author-->
                                                                <!--time-->
                                                                <!--comment count-->
                                                                <!--like count-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col col1">
                                                    <div class="col_in">
                                                        <div class="listing">
                                                            @php
                                                                $last_p = \App\Post::orderBy('id', 'DESC')->first();
                                                                        $last_insert_id = $last_p->id ;
                                                                        $l_id = array();
                                                                        for($i = 0; $i < 17; $i++){
                                                                            $l_id[] = $last_insert_id - $i;
                                                                        }

                                                                    $posts = \App\Post::where('status', 1)->orderBy('id', 'DESC')->get()->except($l_id)->take(3);
                                                            @endphp
                                                            @foreach($posts as $post)
                                                                <div class="each col_in
				has_image
				image_left
				content_capability_gallery
				content_type_watch
				responsive_image_hide_
			">
                                                                    <!--overlay anchor-->
                                                                    <a class="link_overlay"
                                                                       href="{{ asset('frontend') }}/assets/#"></a>
                                                                    <!--image-->
                                                                    <div class="image">
                                                                        <noscript id="ari-image-1020291616793"
                                                                                  data-ari="{&quot;path&quot;:&quot;media\/2019\/09\/29\/d8a1ac018d6712bb7ff5206c08209f37-5d90cbda4c66e.jpg?jadewits_media_id=1473918&quot;,&quot;ratio&quot;:[16,9],&quot;alt&quot;:&quot;\u09ae\u09cc\u09b8\u09c1\u09ae\u09bf \u09ac\u09be\u09df\u09c1\u09b0 \u09aa\u09cd\u09b0\u09ad\u09be\u09ac\u09c7 \u099d\u09b0\u099b\u09c7 \u09ac\u09c3\u09b7\u09cd\u099f\u09bf \u0986\u09b0\u0993 \u099d\u09b0\u09ac\u09c7&quot;}">
                                                                        </noscript>
                                                                        <img src="{{ Storage::url($post->image) }}"
                                                                             alt="{{ $post->title }}"/>
                                                                        <script data-id="ari-image-1020291616793">
                                                                            jwARI.fetch($('#ari-image-1020291616793'));
                                                                        </script>
                                                                        <span class="content_type"></span>
                                                                    </div>
                                                                    <div class="info ">
                                                                        <h2 class="title_holder">
                                                                            <span class="title">{{ $post->title }}</span>
                                                                        </h2>
                                                                        <div class="additional">
                                                                            <!--category/page-->
                                                                            <!--author-->
                                                                            <!--time-->
                                                                            <!--comment count-->
                                                                            <!--like count-->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="wrapper_52329" class="wrapper   container_white_bg container_top_padding ">
                    <div class="inner">
                        <div id="div_52330" class="p_p     _col">
                            <div class="inner">
                                <div id="widget_52331" class="widget_color_ widget_wrap">
                                    <div class="widget_text  widget">
                                        <div class="widget_text_inner aunqur">
                                            <div class="content">
                                                <div class="common_google_ads">
                                                    <!-- Async AdSlot 3 for Ad unit 'Home_728x90_B1' ### Size: [[970,90],[728,90],[468,60],[320,100],[320,50]] -->
                                                    <div id='div-gpt-ad-44697-3'>
                                                        <script>
                                                            googletag.cmd.push(function () {
                                                                googletag.display('div-gpt-ad-44697-3');
                                                            });
                                                        </script>
                                                    </div>
                                                    <!-- End AdSlot 3 -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="wrapper_100788"
                     class="wrapper special_32_5_67_5  container_all_fixed_height_column container_fixed_height container_white_bg container_top_padding container_bottom_padding ">
                    <div class="inner">
                        <div id="div_100789" class="p_c     _col">
                            <div class="hf_wrap">
                                <div class="color_theme_">
                                    <h4 class="headbar"><span>সবচেয়ে</span></h4></div>
                            </div>
                            <div class="inner">
                                <div id="widget_100791" class="widget_color_ widget_wrap">
                                    <div class="contents_tabbed  widget">
                                        <div id="ticker_widget_100791" class="tabbed_conents">
                                            <div class="tabs">
                                                <span class="button"
                                                      style="width:33.333333333333%"><span>শেষ</span></span>
                                                <span class="button"
                                                      style="width:33.333333333333%"><span>আলোচিত</span></span>
                                                <span class="button"
                                                      style="width:33.333333333333%"><span>নির্বাচিত</span></span>
                                            </div>
                                            <div class="tabs_content">
                                                <div class="each_tab tab_latest oh db">
                                                    <ul>
                                                        @php
                                                            $post_count = App\Post::where('status', 1)->get()->count();
                                                            if ($post_count >= 5) {
                                                                $rand_num = 5;
                                                            } else {
                                                                $rand_num = $post_count;
                                                            }
                                                            $posts = App\Post::where(['status' => 1, 'category_id' => $post->category->id])->get()->random($rand_num);
                                                        @endphp
                                                        @foreach($posts as $post)
                                                            <li>
                                                                <a href="{{ asset('frontend') }}/assets/#">
                                                                    <span class="tab_list_title"><!-- -->ট{{ $post->title }}</span>
                                                                </a>
                                                            </li>
                                                        @endforeach

                                                    </ul>
                                                    {{--<div class="view_all_wrap"><a class="view_all all_latest"--}}
                                                    {{--href="{{ asset('frontend') }}/assets/#">সব--}}
                                                    {{--শেষ</a></div>--}}
                                                </div>
                                                <div class="each_tab tab_comment_count oh db">
                                                    <ul>

                                                        @php
                                                            $post_count = App\Post::where('status', 1)->get()->count();
                                                            if ($post_count >= 5) {
                                                                $rand_num = 5;
                                                            } else {
                                                                $rand_num = $post_count;
                                                            }
                                                            $posts = App\Post::where(['status' => 1, 'category_id' => $post->category->id])->get()->random($rand_num);
                                                        @endphp
                                                        @foreach($posts as $post)
                                                            <li>
                                                                <a href="{{ asset('frontend') }}/assets/#">
                                                                    <span class="tab_list_title"><!-- -->ট{{ $post->title }}</span>
                                                                </a>
                                                            </li>
                                                        @endforeach

                                                    </ul>
                                                    <div class="view_all_wrap"><a class="view_all all_comment_count"
                                                                                  href="{{ asset('frontend') }}/assets/#">সব
                                                            আলোচিত</a></div>
                                                </div>
                                                <div class="each_tab tab_featured oh db">
                                                    <ul>
                                                        @php
                                                            $post_count = App\Post::where('status', 1)->get()->count();
                                                            if ($post_count >= 5) {
                                                                $rand_num = 5;
                                                            } else {
                                                                $rand_num = $post_count;
                                                            }
                                                            $posts = App\Post::where(['status' => 1, 'category_id' => $post->category->id])->get()->random($rand_num);
                                                        @endphp
                                                        @foreach($posts as $post)
                                                            <li>
                                                                <a href="{{ asset('frontend') }}/assets/#">
                                                                    <span class="tab_list_title"><!-- -->ট{{ $post->title }}</span>
                                                                </a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                    <div class="view_all_wrap"><a class="view_all all_featured"
                                                                                  href="{{ asset('frontend') }}/assets/#">সব
                                                            নির্বাচিত</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <script type="text/javascript">
                                            $("#ticker_widget_100791 .tabs_content .each_tab:first").show();
                                            $("#ticker_widget_100791 .tabs .button:first").addClass("oppened");
                                            $(".tabbed_conents .button").live("click", function () {
                                                var index = $('.button', $(this).parent().parent()).index(this);
                                                var allA = $("#ticker_widget_100791 .tabs .button");
                                                allA.not(allA.eq(index)).removeClass("oppened");
                                                var allUl = $("#ticker_widget_100791 .tabs_content .each_tab");
                                                var toShow = allUl.eq(index);
                                                var toHide = allUl.not(toShow).hide();
                                                if (toShow.is(':hidden')) {
                                                    $(this).addClass("oppened");
                                                    toShow.show();
                                                } else {
                                                }
                                            });
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="div_100790" class="p_d     _col">
                            <div class="hf_wrap">
                                <div class="color_theme_">
                                    <h4 class="headbar"><a
                                                href="{{ asset('frontend') }}/assets/bangladesh.html">বাংলাদেশ</a></h4>
                                </div>
                            </div>
                            <div class="inner">
                                <div id="widget_100795" class="widget_color_ widget_wrap">
                                    <div class="pa_national_zonewise_search_widget  widget">
                                        <div id="widget100795" class="national_zone_widget">
                                            <form action="" method="post" id="national_news_search">
                                                <div class="wdg_message_show"></div>
                                                <div class="ntl_container_div">
                                                    <div class="div0">এলাকার খবর</div>
                                                    <div class="div1">
                                                        <select name="division_s" id="division_s"
                                                                class="division_select">
                                                            <option value="">বিভাগ</option>
                                                            <option value="87">ঢাকা</option>
                                                            <option value="1698">চট্টগ্রাম</option>
                                                            <option value="1684">সিলেট</option>
                                                            <option value="1688">বরিশাল</option>
                                                            <option value="1692">রাজশাহী</option>
                                                            <option value="1690">খুলনা</option>
                                                            <option value="1682">রংপুর</option>
                                                            <option value="256">ময়মনসিংহ</option>
                                                        </select>
                                                    </div>
                                                    <div class="div2">
                                                        <select name="district_s" id="district_s_0"
                                                                class="district_select">
                                                            <option value="null">জেলা</option>
                                                        </select>
                                                        <select name="district_s" id="district_s_1698"
                                                                class="district_select" style="display:none">
                                                            <option value="NULL">জেলা</option>
                                                            <option value="55">চট্টগ্রাম</option>
                                                            <option value="243">চাঁদপুর</option>
                                                            <option value="144">কুমিল্লা</option>
                                                            <option value="264">কক্সবাজার</option>
                                                            <option value="376">বান্দরবান</option>
                                                            <option value="337">খাগড়াছড়ি</option>
                                                            <option value="262">রাঙামাটি</option>
                                                            <option value="266">নোয়াখালী</option>
                                                            <option value="441">লক্ষ্মীপুর</option>
                                                            <option value="333">ফেনী</option>
                                                            <option value="328">ব্রাহ্মণবাড়িয়া</option>
                                                        </select>
                                                        <select name="district_s" id="district_s_256"
                                                                class="district_select" style="display:none">
                                                            <option value="NULL">জেলা</option>
                                                            <option value="256">ময়মনসিংহ</option>
                                                            <option value="278">শেরপুর</option>
                                                            <option value="530">জামালপুর</option>
                                                            <option value="253">নেত্রকোনা</option>
                                                        </select>
                                                        <select name="district_s" id="district_s_87"
                                                                class="district_select"
                                                                style="display:none">
                                                            <option value="NULL">জেলা</option>
                                                            <option value="1148">ঢাকা</option>
                                                            <option value="386">নরসিংদী</option>
                                                            <option value="247">নারায়ণগঞ্জ</option>
                                                            <option value="245">গাজীপুর</option>
                                                            <option value="385">মুন্সিগঞ্জ</option>
                                                            <option value="374">মানিকগঞ্জ</option>
                                                            <option value="329">টাঙ্গাইল</option>
                                                            <option value="368">রাজবাড়ী</option>
                                                            <option value="314">গোপালগঞ্জ</option>
                                                            <option value="410">শরীয়তপুর</option>
                                                            <option value="311">মাদারীপুর</option>
                                                            <option value="315">ফরিদপুর</option>
                                                            <option value="250">কিশোরগঞ্জ</option>
                                                        </select>
                                                        <select name="district_s" id="district_s_1682"
                                                                class="district_select" style="display:none">
                                                            <option value="NULL">জেলা</option>
                                                            <option value="47">রংপুর</option>
                                                            <option value="282">দিনাজপুর</option>
                                                            <option value="322">গাইবান্ধা</option>
                                                            <option value="301">কুড়িগ্রাম</option>
                                                            <option value="283">নীলফামারী</option>
                                                            <option value="483">পঞ্চগড়</option>
                                                            <option value="299">ঠাকুরগাঁও</option>
                                                            <option value="356">লালমনিরহাট</option>
                                                        </select>
                                                        <select name="district_s" id="district_s_1684"
                                                                class="district_select" style="display:none">
                                                            <option value="NULL">জেলা</option>
                                                            <option value="88">সিলেট</option>
                                                            <option value="260">হবিগঞ্জ</option>
                                                            <option value="244">মৌলভীবাজার</option>
                                                            <option value="252">সুনামগঞ্জ</option>
                                                        </select>
                                                        <select name="district_s" id="district_s_1688"
                                                                class="district_select" style="display:none">
                                                            <option value="NULL">জেলা</option>
                                                            <option value="92">বরিশাল</option>
                                                            <option value="275">বরগুনা</option>
                                                            <option value="324">ভোলা</option>
                                                            <option value="339">ঝালকাঠি</option>
                                                            <option value="355">পটুয়াখালী</option>
                                                            <option value="307">পিরোজপুর</option>
                                                        </select>
                                                        <select name="district_s" id="district_s_1690"
                                                                class="district_select" style="display:none">
                                                            <option value="NULL">জেলা</option>
                                                            <option value="90">খুলনা</option>
                                                            <option value="285">বাগেরহাট</option>
                                                            <option value="364">চুয়াডাঙ্গা</option>
                                                            <option value="241">যশোর</option>
                                                            <option value="312">ঝিনাইদহ</option>
                                                            <option value="272">কুষ্টিয়া</option>
                                                            <option value="463">মাগুরা</option>
                                                            <option value="269">মেহেরপুর</option>
                                                            <option value="248">নড়াইল</option>
                                                            <option value="274">সাতক্ষীরা</option>
                                                        </select>
                                                        <select name="district_s" id="district_s_1692"
                                                                class="district_select" style="display:none">
                                                            <option value="NULL">জেলা</option>
                                                            <option value="50">রাজশাহী</option>
                                                            <option value="487">নাটোর</option>
                                                            <option value="343">চাঁপাইনবাবগঞ্জ</option>
                                                            <option value="305">জয়পুরহাট</option>
                                                            <option value="280">নওগাঁ</option>
                                                            <option value="277">বগুড়া</option>
                                                            <option value="320">পাবনা</option>
                                                            <option value="281">সিরাজগঞ্জ</option>
                                                        </select>
                                                    </div>
                                                    <div class="div3">
                                                        <select name="upozila_s" id="upozila_s_0"
                                                                class="upozilla_select">
                                                            <option value="NULL">উপজেলা</option>
                                                        </select>
                                                        <select name="upozila_s" id="upozila_s_55"
                                                                class="upozilla_select"
                                                                style="display:none">
                                                            <option value="NULL">উপজেলা</option>
                                                            <option value="799">আনোয়ারা</option>
                                                            <option value="1700">বাঁশখালী</option>
                                                            <option value="1702">বোয়ালখালী</option>
                                                            <option value="1704">চান্দনাইশ</option>
                                                            <option value="342">ফটিকছড়ি</option>
                                                            <option value="1706">ভূজপূর থানা</option>
                                                            <option value="326">হাটহাজারী</option>
                                                            <option value="318">লোহাগড়া</option>
                                                            <option value="261">মিরসরাই</option>
                                                            <option value="531">পটিয়া</option>
                                                            <option value="383">রাঙ্গুনিয়া</option>
                                                            <option value="1708">রাউজান</option>
                                                            <option value="1710">সন্দ্বীপ</option>
                                                            <option value="439">সাতকানিয়া</option>
                                                            <option value="336">সীতাকুণ্ড</option>
                                                            <option value="1712">কর্ণফুলী থানা</option>
                                                        </select>
                                                        <select name="upozila_s" id="upozila_s_264"
                                                                class="upozilla_select"
                                                                style="display:none">
                                                            <option value="NULL">উপজেলা</option>
                                                            <option value="1038">উখিয়া</option>
                                                            <option value="1714">কক্সবাজার সদর</option>
                                                            <option value="1716">কুতুবদিয়া</option>
                                                            <option value="458">চকরিয়া</option>
                                                            <option value="409">টেকনাফ</option>
                                                            <option value="265">মহেশখালী</option>
                                                            <option value="537">রামু</option>
                                                            <option value="1718">পেকুয়া</option>
                                                        </select>
                                                        <select name="upozila_s" id="upozila_s_376"
                                                                class="upozilla_select"
                                                                style="display:none">
                                                            <option value="NULL">উপজেলা</option>
                                                            <option value="1720">আলিকদম</option>
                                                            <option value="788">থানচি</option>
                                                            <option value="1722">নাইক্ষ্যংছড়ি</option>
                                                            <option value="1724">বান্দরবান সদর</option>
                                                            <option value="946">রুমা</option>
                                                            <option value="1726">রোয়াংছড়ি</option>
                                                            <option value="1728">লামা</option>
                                                        </select>
                                                        <select name="upozila_s" id="upozila_s_337"
                                                                class="upozilla_select"
                                                                style="display:none">
                                                            <option value="NULL">উপজেলা</option>
                                                            <option value="1730">খাগড়াছড়ি সদর</option>
                                                            <option value="338">দীঘিনালা</option>
                                                            <option value="1732">পানছড়ি</option>
                                                            <option value="1734">মহালছড়ি</option>
                                                            <option value="654">মাটিরাঙ্গা</option>
                                                            <option value="817">মানিকছড়ি</option>
                                                            <option value="816">রামগড়</option>
                                                            <option value="1736">লক্ষ্মীছড়ি</option>
                                                        </select>
                                                        <select name="upozila_s" id="upozila_s_262"
                                                                class="upozilla_select"
                                                                style="display:none">
                                                            <option value="NULL">উপজেলা</option>
                                                            <option value="1738">কাউখালী (রাঙ্গামাটি)</option>
                                                            <option value="532">কাপ্তাই</option>
                                                            <option value="1740">জুরাছড়ি</option>
                                                            <option value="1742">নানিয়ারচর</option>
                                                            <option value="1744">বরকল</option>
                                                            <option value="377">বাঘাইছড়ি</option>
                                                            <option value="942">বিলাইছড়ি</option>
                                                            <option value="1746">রাঙামাটি সদর</option>
                                                            <option value="1748">রাজস্থলী</option>
                                                            <option value="1750">লংগদু</option>
                                                        </select>
                                                        <select name="upozila_s" id="upozila_s_266"
                                                                class="upozilla_select"
                                                                style="display:none">
                                                            <option value="NULL">উপজেলা</option>
                                                            <option value="1752">নোয়াখালী সদর</option>
                                                            <option value="1754">বেগমগঞ্জ</option>
                                                            <option value="1756">চাটখিল</option>
                                                            <option value="1758">কোম্পানীগঞ্জ</option>
                                                            <option value="334">হাতিয়া</option>
                                                            <option value="1760">সেনবাগ</option>
                                                            <option value="1762">সুবর্ণচর</option>
                                                            <option value="1764">সোনাইমুড়ি</option>
                                                            <option value="1766">কবিরহাট</option>
                                                        </select>
                                                        <select name="upozila_s" id="upozila_s_441"
                                                                class="upozilla_select"
                                                                style="display:none">
                                                            <option value="NULL">উপজেলা</option>
                                                            <option value="1768">লক্ষ্মীপুর সদর</option>
                                                            <option value="440">রায়পুর</option>
                                                            <option value="1770">রামগঞ্জ</option>
                                                            <option value="1772">কমলনগর</option>
                                                            <option value="555">রামগতি</option>
                                                        </select>
                                                        <select name="upozila_s" id="upozila_s_333"
                                                                class="upozilla_select"
                                                                style="display:none">
                                                            <option value="NULL">উপজেলা</option>
                                                            <option value="1774">ফেনী সদর</option>
                                                            <option value="1776">দাগনভূঁইয়া</option>
                                                            <option value="1778">সোনাগাজী</option>
                                                            <option value="1780">ছাগলনাইয়া</option>
                                                            <option value="1782">পরশুরাম</option>
                                                            <option value="842">ফুলগাজী</option>
                                                        </select>
                                                        <select name="upozila_s" id="upozila_s_144"
                                                                class="upozilla_select"
                                                                style="display:none">
                                                            <option value="NULL">উপজেলা</option>
                                                            <option value="1784">বরুরা</option>
                                                            <option value="1786">চান্দিনা</option>
                                                            <option value="388">দাউদকান্দি</option>
                                                            <option value="425">লাকসাম</option>
                                                            <option value="601">ব্রাহ্মণপাড়া</option>
                                                            <option value="1788">বুড়িচং</option>
                                                            <option value="671">চৌদ্দগ্রাম</option>
                                                            <option value="765">দেবীদ্বার</option>
                                                            <option value="1790">হোমনা</option>
                                                            <option value="1792">মুরাদনগর</option>
                                                            <option value="1794">লাঙ্গলকোট</option>
                                                            <option value="1796">মেঘনা</option>
                                                            <option value="1798">তিতাস</option>
                                                            <option value="389">মনোহরগঞ্জ</option>
                                                        </select>
                                                        <select name="upozila_s" id="upozila_s_243"
                                                                class="upozilla_select"
                                                                style="display:none">
                                                            <option value="NULL">উপজেলা</option>
                                                            <option value="1800">চাঁদপুর সদর</option>
                                                            <option value="1802">কচুয়া</option>
                                                            <option value="674">হাজীগঞ্জ</option>
                                                            <option value="1810">শাহরাস্তি</option>
                                                            <option value="1804">ফরিদগঞ্জ</option>
                                                            <option value="1806">ফরিদগঞ্জ</option>
                                                            <option value="319">মতলব দক্ষিণ</option>
                                                            <option value="1808">হাইমচর</option>
                                                        </select>
                                                        <select name="upozila_s" id="upozila_s_328"
                                                                class="upozilla_select"
                                                                style="display:none">
                                                            <option value="NULL">উপজেলা</option>
                                                            <option value="1812">আশুগঞ্জ</option>
                                                            <option value="556">আখাউড়া</option>
                                                            <option value="442">কসবা</option>
                                                            <option value="382">নবীনগর</option>
                                                            <option value="1814">নাসিরনগর</option>
                                                            <option value="357">বাঞ্ছারামপুর</option>
                                                            <option value="1816">ব্রাহ্মণবাড়িয়া সদর</option>
                                                            <option value="379">সরাইল</option>
                                                            <option value="1818">বিজয়নগর</option>
                                                        </select>
                                                        <select name="upozila_s" id="upozila_s_256"
                                                                class="upozilla_select"
                                                                style="display:none">
                                                            <option value="NULL">উপজেলা</option>
                                                            <option value="1508">ময়মনসিংহ সদর</option>
                                                            <option value="267">ত্রিশাল</option>
                                                            <option value="637">গৌরীপুর</option>
                                                            <option value="1518">মুক্তাগাছা</option>
                                                            <option value="479">ফুলপুর</option>
                                                            <option value="1524">হালুয়াঘাট</option>
                                                            <option value="610">ভালুকা</option>
                                                            <option value="1528">ফুলবাড়িয়া</option>
                                                            <option value="1110 ">গফরগাঁও</option>
                                                            <option value="255">ঈশ্বরগঞ্জ</option>
                                                            <option value="257">নান্দাইল</option>
                                                            <option value="1534">ধোবাউড়া</option>
                                                        </select>
                                                        <select name="upozila_s" id="upozila_s_278"
                                                                class="upozilla_select"
                                                                style="display:none">
                                                            <option value="NULL">উপজেলা</option>
                                                            <option value="1542">ঝিনাইগাতি</option>
                                                            <option value="1546">নকলা</option>
                                                            <option value="1548">নালিতাবাড়ি</option>
                                                            <option value="1550">শেরপুর সদর</option>
                                                            <option value="1552">শ্রীবরদী</option>
                                                        </select>
                                                        <select name="upozila_s" id="upozila_s_530"
                                                                class="upozilla_select"
                                                                style="display:none">
                                                            <option value="NULL">উপজেলা</option>
                                                            <option value="1572">জামালপুর সদর</option>
                                                            <option value="1574">বকশীগঞ্জ</option>
                                                            <option value="1576">দেওয়ানগঞ্জ</option>
                                                            <option value="1578">ইসলামপুর</option>
                                                            <option value="553 ">মাদারগঞ্জ</option>
                                                            <option value="1580">মেলান্দহ</option>
                                                            <option value="529">সরিষাবাড়ী</option>
                                                        </select>
                                                        <select name="upozila_s" id="upozila_s_1148"
                                                                class="upozilla_select"
                                                                style="display:none">
                                                            <option value="NULL">উপজেলা</option>
                                                            <option value="296">রাজধানী ঢাকা</option>
                                                            <option value="1150">ধামরাই</option>
                                                            <option value="437">দোহার</option>
                                                            <option value="378">কেরানীগঞ্জ</option>
                                                            <option value="438">নবাবগঞ্জ</option>
                                                            <option value="332">সাভার</option>
                                                        </select>
                                                        <select name="upozila_s" id="upozila_s_386"
                                                                class="upozilla_select"
                                                                style="display:none">
                                                            <option value="NULL">উপজেলা</option>
                                                            <option value="1152">বেলাবো</option>
                                                            <option value="1154">মনোহরদী</option>
                                                            <option value="1156">শিবপুর</option>
                                                            <option value="1158">রায়পুরা</option>
                                                            <option value="767">পলাশ</option>
                                                            <option value="1160">নরসিংদী সদর</option>
                                                        </select>
                                                        <select name="upozila_s" id="upozila_s_247"
                                                                class="upozilla_select"
                                                                style="display:none">
                                                            <option value="NULL">উপজেলা</option>
                                                            <option value="1098">নারায়ণগঞ্জ সিটি</option>
                                                            <option value="1178">নারায়ণগঞ্জ সদর</option>
                                                            <option value="1180">বন্দর</option>
                                                            <option value="1184">আড়াইহাজার</option>
                                                            <option value="1188">রূপগঞ্জ</option>
                                                            <option value="246">সোনারগাঁ</option>
                                                        </select>
                                                        <select name="upozila_s" id="upozila_s_245"
                                                                class="upozilla_select"
                                                                style="display:none">
                                                            <option value="NULL">উপজেলা</option>
                                                            <option value="1028">গাজীপুর সিটি</option>
                                                            <option value="1200">গাজীপুর সদর</option>
                                                            <option value="1202">কালিয়াকৈর</option>
                                                            <option value="370">কালীগঞ্জ</option>
                                                            <option value="795">কাপাসিয়া</option>
                                                            <option value="1204">শ্রীপুর</option>
                                                        </select>
                                                        <select name="upozila_s" id="upozila_s_385"
                                                                class="upozilla_select"
                                                                style="display:none">
                                                            <option value="NULL">উপজেলা</option>
                                                            <option value="1206">শ্রীনগর</option>
                                                            <option value="1208">সিরাজদীখান</option>
                                                            <option value="1210">লৌহজং</option>
                                                            <option value="978">টঙ্গিবাড়ী</option>
                                                            <option value="1212">মুন্সিগঞ্জ সদর</option>
                                                            <option value="384">গজারিয়া</option>
                                                        </select>
                                                        <select name="upozila_s" id="upozila_s_374"
                                                                class="upozilla_select"
                                                                style="display:none">
                                                            <option value="NULL">উপজেলা</option>
                                                            <option value="1214">মানিকগঞ্জ সদর</option>
                                                            <option value="1216">সিঙ্গাইর</option>
                                                            <option value="1218">শিবালয়</option>
                                                            <option value="870">সাটুরিয়া</option>
                                                            <option value="940">হরিরামপুর</option>
                                                            <option value="1220">ঘিওর</option>
                                                            <option value="675">দৌলতপুর</option>
                                                        </select>
                                                        <select name="upozila_s" id="upozila_s_329"
                                                                class="upozilla_select"
                                                                style="display:none">
                                                            <option value="NULL">উপজেলা</option>
                                                            <option value="1222">টাঙ্গাইল সদর</option>
                                                            <option value="687">কালিহাতী</option>
                                                            <option value="414">ঘাটাইল</option>
                                                            <option value="1224">বাসাইল</option>
                                                            <option value="1226">গোপালপুর</option>
                                                            <option value="330">মির্জাপুর</option>
                                                            <option value="1228">ভূঞাপুর</option>
                                                            <option value="1230">নাগরপুর</option>
                                                            <option value="1232">মধুপুর</option>
                                                            <option value="1234">সখিপুর</option>
                                                            <option value="1236">দেলদুয়ার</option>
                                                            <option value="1238">ধনবাড়ী</option>
                                                        </select>
                                                        <select name="upozila_s" id="upozila_s_368"
                                                                class="upozilla_select"
                                                                style="display:none">
                                                            <option value="NULL">উপজেলা</option>
                                                            <option value="1538">রাজবাড়ী সদর</option>
                                                            <option value="367">গোয়ালন্দ</option>
                                                            <option value="801">পাংশা</option>
                                                            <option value="800">বালিয়াকান্দি</option>
                                                        </select>
                                                        <select name="upozila_s" id="upozila_s_314"
                                                                class="upozilla_select"
                                                                style="display:none">
                                                            <option value="NULL">উপজেলা</option>
                                                            <option value="1558">গোপালগঞ্জ সদর</option>
                                                            <option value="1560">মুকসুদপুর</option>
                                                            <option value="1564">কাশিয়ানী</option>
                                                            <option value="1566">কোটালীপাড়া</option>
                                                            <option value="1568">টুঙ্গিপাড়া</option>
                                                        </select>
                                                        <select name="upozila_s" id="upozila_s_410"
                                                                class="upozilla_select"
                                                                style="display:none">
                                                            <option value="NULL">উপজেলা</option>
                                                            <option value="1582">শরীয়তপুর সদর</option>
                                                            <option value="1584">ডামুড্যা</option>
                                                            <option value="1586">নড়িয়া</option>
                                                            <option value="1590">ভেদরগঞ্জ</option>
                                                            <option value="1592">জাজিরা</option>
                                                            <option value="1594">গোসাইরহাট</option>
                                                        </select>
                                                        <select name="upozila_s" id="upozila_s_311"
                                                                class="upozilla_select"
                                                                style="display:none">
                                                            <option value="NULL">উপজেলা</option>
                                                            <option value="1616">মাদারীপুর সদর</option>
                                                            <option value="711">শিবচর</option>
                                                            <option value="1618">কালকিনী</option>
                                                            <option value="1620">রাজৈর</option>
                                                        </select>
                                                        <select name="upozila_s" id="upozila_s_315"
                                                                class="upozilla_select"
                                                                style="display:none">
                                                            <option value="NULL">উপজেলা</option>
                                                            <option value="1622">ফরিদপুর সদর</option>
                                                            <option value="1624">বোয়ালমারী</option>
                                                            <option value="1626">আলফাডাঙা</option>
                                                            <option value="369">মধুখালী</option>
                                                            <option value="866">ভাঙ্গা</option>
                                                            <option value="583">নগরকান্দা</option>
                                                            <option value="1628">চর ভদ্রাসন</option>
                                                            <option value="1630">সদরপুর</option>
                                                            <option value="1632">সালথা</option>
                                                        </select>
                                                        <select name="upozila_s" id="upozila_s_250"
                                                                class="upozilla_select"
                                                                style="display:none">
                                                            <option value="NULL">উপজেলা</option>
                                                            <option value="1634">কিশোরগঞ্জ সদর</option>
                                                            <option value="1636">অষ্টগ্রাম</option>
                                                            <option value="1638">ইটনা</option>
                                                            <option value="1640">করিমগঞ্জ</option>
                                                            <option value="1642">কটিয়াদি</option>
                                                            <option value="1644">কুলিয়ারচর</option>
                                                            <option value="249">তাড়াইল</option>
                                                            <option value="380">নিকলী</option>
                                                            <option value="1646">পাকুন্দিয়া</option>
                                                            <option value="1648">বাজিতপুর</option>
                                                            <option value="268">ভৈরব</option>
                                                            <option value="1650">মিটামইন</option>
                                                            <option value="690">হোসেনপুর</option>
                                                        </select>
                                                        <select name="upozila_s" id="upozila_s_47"
                                                                class="upozilla_select"
                                                                style="display:none">
                                                            <option value="NULL">উপজেলা</option>
                                                            <option value="1294">রংপুর সিটি</option>
                                                            <option value="1292">রংপুর সদর</option>
                                                            <option value="413">বদরগঞ্জ</option>
                                                            <option value="1290">গঙ্গাছড়া</option>
                                                            <option value="1288">কাউনিয়া</option>
                                                            <option value="757">মিঠাপুকুর</option>
                                                            <option value="303">পীরগাছা</option>
                                                            <option value="1286">পীরগঞ্জ</option>
                                                            <option value="331">তারাগঞ্জ</option>
                                                        </select>
                                                        <select name="upozila_s" id="upozila_s_282"
                                                                class="upozilla_select"
                                                                style="display:none">
                                                            <option value="NULL">উপজেলা</option>
                                                            <option value="317">বিরামপুর</option>
                                                            <option value="1284">বীরগঞ্জ</option>
                                                            <option value="1282 ">বোচাগঞ্জ</option>
                                                            <option value="494">ফুলবাড়ী</option>
                                                            <option value="1280">চিরিরবন্দর</option>
                                                            <option value="1278">ঘোড়াঘাট</option>
                                                            <option value="316">হাকিমপুর</option>
                                                            <option value="1276">কাহারোল</option>
                                                            <option value="1274">খানসামা</option>
                                                            <option value="1272">দিনাজপুর সদর</option>
                                                            <option value="438">নবাবগঞ্জ</option>
                                                            <option value="361">পার্বতীপুর</option>
                                                            <option value="1270 ">বিরল</option>
                                                        </select>
                                                        <select name="upozila_s" id="upozila_s_322"
                                                                class="upozilla_select"
                                                                style="display:none">
                                                            <option value="NULL">উপজেলা</option>
                                                            <option value="1268 ">গাইবান্ধা সদর</option>
                                                            <option value="1266 ">ফুলছড়ি</option>
                                                            <option value="325 ">গোবিন্দগঞ্জ</option>
                                                            <option value="1264 ">পলাশবাড়ী</option>
                                                            <option value="1262 ">সাদুল্লাপুর</option>
                                                            <option value="1260">সাঘাটা</option>
                                                            <option value="1100">সুন্দরগঞ্জ</option>
                                                        </select>
                                                        <select name="upozila_s" id="upozila_s_301"
                                                                class="upozilla_select"
                                                                style="display:none">
                                                            <option value="NULL">উপজেলা</option>
                                                            <option value="1258 ">উলিপুর</option>
                                                            <option value="1256 ">কুড়িগ্রাম সদর</option>
                                                            <option value="1254">চর রাজীবপুর</option>
                                                            <option value="1252">চিলমারী</option>
                                                            <option value="1144 ">নাগেশ্বরী</option>
                                                            <option value="1250 ">ফুলবাড়ী</option>
                                                            <option value="1248 ">ভুরুঙ্গামারী</option>
                                                            <option value="1246 ">রাজারহাট</option>
                                                            <option value="1244">রৌমারী</option>
                                                        </select>
                                                        <select name="upozila_s" id="upozila_s_283"
                                                                class="upozilla_select"
                                                                style="display:none">
                                                            <option value="NULL">উপজেলা</option>
                                                            <option value="1198">নিলফামারী সদর</option>
                                                            <option value="1196">ডোমার</option>
                                                            <option value="1194 ">ডিমলা</option>
                                                            <option value="1192">জলঢাকা</option>
                                                            <option value="1190">কিশোরগঞ্জ</option>
                                                            <option value="444 ">সৈয়দপুর</option>
                                                        </select>
                                                        <select name="upozila_s" id="upozila_s_483"
                                                                class="upozilla_select"
                                                                style="display:none">
                                                            <option value="NULL">উপজেলা</option>
                                                            <option value="1186">দেবীগঞ্জ</option>
                                                            <option value="1182">তেঁতুলিয়া</option>
                                                            <option value="1176 ">পঞ্চগড় সদর</option>
                                                            <option value="890 ">আটোয়ারী</option>
                                                            <option value="1174">বোদা</option>
                                                        </select>
                                                        <select name="upozila_s" id="upozila_s_299"
                                                                class="upozilla_select"
                                                                style="display:none">
                                                            <option value="NULL">উপজেলা</option>
                                                            <option value="1172">ঠাকুরগাঁও সদর</option>
                                                            <option value="462">পীরগঞ্জ</option>
                                                            <option value="300">বালিয়াডাঙ্গী</option>
                                                            <option value="1170">রানীশংকৈল</option>
                                                            <option value="1168">হরিপুর</option>
                                                        </select>
                                                        <select name="upozila_s" id="upozila_s_356"
                                                                class="upozilla_select"
                                                                style="display:none">
                                                            <option value="NULL">উপজেলা</option>
                                                            <option value="1166">লালমনিরহাট সদর</option>
                                                            <option value="461">পাটগ্রাম</option>
                                                            <option value="1164 ">কালীগঞ্জ</option>
                                                            <option value="1162">হাতিবান্ধা</option>
                                                        </select>
                                                        <select name="upozila_s" id="upozila_s_88"
                                                                class="upozilla_select"
                                                                style="display:none">
                                                            <option value="NULL">উপজেলা</option>
                                                            <option value="1344">সিলেট সিটি</option>
                                                            <option value="1342">বালাগঞ্জ</option>
                                                            <option value="766">বিয়ানীবাজার</option>
                                                            <option value="712">বিশ্বনাথ</option>
                                                            <option value="1340">কোম্পানীগঞ্জ</option>
                                                            <option value="779">ফেঞ্চুগঞ্জ</option>
                                                            <option value="497">গোলাপগঞ্জ</option>
                                                            <option value="1338 ">গোয়াইঘাট</option>
                                                            <option value="1062">জৈন্তাপুর</option>
                                                            <option value="1336 ">কানাইঘাট</option>
                                                            <option value="1334">সিলেট সদর</option>
                                                            <option value="1332">জকিগঞ্জ</option>
                                                            <option value="1330">দক্ষিণ সুরমা</option>
                                                        </select>
                                                        <select name="upozila_s" id="upozila_s_260"
                                                                class="upozilla_select"
                                                                style="display:none">
                                                            <option value="NULL">উপজেলা</option>
                                                            <option value="1328">আজমিরিগঞ্জ</option>
                                                            <option value="1326">বানিয়াচং</option>
                                                            <option value="1324">বাহুবল</option>
                                                            <option value="1322">চুনারুঘাট</option>
                                                            <option value="1320">হবিগঞ্জ সদর</option>
                                                            <option value="1318">লাখাই</option>
                                                            <option value="482">নবীগঞ্জ</option>
                                                            <option value="381">মাধবপুর</option>
                                                        </select>
                                                        <select name="upozila_s" id="upozila_s_244"
                                                                class="upozilla_select"
                                                                style="display:none">
                                                            <option value="NULL">উপজেলা</option>
                                                            <option value="1316">বড়লেখা</option>
                                                            <option value="872">কুলাউড়া</option>
                                                            <option value="1314">রাজানগর</option>
                                                            <option value="443">কমলগঞ্জ</option>
                                                            <option value="460">শ্রীমঙ্গল</option>
                                                            <option value="1312">মৌলভীবাজার সদর</option>
                                                            <option value="1310">জুড়ি</option>
                                                        </select>
                                                        <select name="upozila_s" id="upozila_s_252"
                                                                class="upozilla_select"
                                                                style="display:none">
                                                            <option value="NULL">উপজেলা</option>
                                                            <option value="1308">বিশ্বম্ভরপুর</option>
                                                            <option value="1306">ছাতক</option>
                                                            <option value="327">দিরাই</option>
                                                            <option value="1304">ধর্মপাশা</option>
                                                            <option value="1302">দোয়ারাবাজার</option>
                                                            <option value="251">জগন্নাথপুর</option>
                                                            <option value="1300">জামালগঞ্জ</option>
                                                            <option value="484">তাহিরপুর</option>
                                                            <option value="1298">শাল্লা</option>
                                                            <option value="1296">সুনামগঞ্জ সদর</option>
                                                        </select>
                                                        <select name="upozila_s" id="upozila_s_92"
                                                                class="upozilla_select"
                                                                style="display:none">
                                                            <option value="NULL">উপজেলা</option>
                                                            <option value="1404">আগৈলঝারা</option>
                                                            <option value="1402">বাকেরগঞ্জ</option>
                                                            <option value="1400">বাবুগঞ্জ</option>
                                                            <option value="1398">বানারিপাড়া</option>
                                                            <option value="271">গৌরনদী</option>
                                                            <option value="1396">হিজলা</option>
                                                            <option value="1394">বরিশাল সদর</option>
                                                            <option value="1392">মেহেন্দিগঞ্জ</option>
                                                            <option value="1390">মুলাদি</option>
                                                            <option value="676">উজিরপুর</option>
                                                        </select>
                                                        <select name="upozila_s" id="upozila_s_275"
                                                                class="upozilla_select"
                                                                style="display:none">
                                                            <option value="NULL">উপজেলা</option>
                                                            <option value="1388">বরগুনা সদর</option>
                                                            <option value="308">আমতলী</option>
                                                            <option value="276">পাথরঘাটা</option>
                                                            <option value="1386">বেতাগি</option>
                                                            <option value="1384">বামনা</option>
                                                        </select>
                                                        <select name="upozila_s" id="upozila_s_324"
                                                                class="upozilla_select"
                                                                style="display:none">
                                                            <option value="NULL">উপজেলা</option>
                                                            <option value="580">চরফ্যাশন</option>
                                                            <option value="1382">তজুমদ্দিন</option>
                                                            <option value="1380">দৌলতখান</option>
                                                            <option value="1378">বোরহানউদ্দিন</option>
                                                            <option value="1376">ভোলা সদর</option>
                                                            <option value="1374">মনপুরা</option>
                                                            <option value="705">লালমোহন</option>
                                                        </select>
                                                        <select name="upozila_s" id="upozila_s_339"
                                                                class="upozilla_select"
                                                                style="display:none">
                                                            <option value="NULL">উপজেলা</option>
                                                            <option value="1372">কাঁঠালিয়া</option>
                                                            <option value="1370">ঝালকাঠি সদর</option>
                                                            <option value="1368">নলছিটি</option>
                                                            <option value="1040">রাজাপুর</option>
                                                        </select>
                                                        <select name="upozila_s" id="upozila_s_355"
                                                                class="upozilla_select"
                                                                style="display:none">
                                                            <option value="NULL">উপজেলা</option>
                                                            <option value="1366">পটুয়াখালী সদর</option>
                                                            <option value="535">বাউফল</option>
                                                            <option value="1364">দশমিনা</option>
                                                            <option value="465">গলাচিপা</option>
                                                            <option value="579">কলাপাড়া</option>
                                                            <option value="1362">মির্জাগঞ্জ</option>
                                                            <option value="1360">দুমকি</option>
                                                            <option value="1358">রাঙ্গাবালি</option>
                                                        </select>
                                                        <select name="upozila_s" id="upozila_s_307"
                                                                class="upozilla_select"
                                                                style="display:none">
                                                            <option value="NULL">উপজেলা</option>
                                                            <option value="1356">কাউখালী (পিরোজপুর)</option>
                                                            <option value="1354">নাজিরপুর</option>
                                                            <option value="1352">নেছারাবাদ (স্বরূপকাঠি)</option>
                                                            <option value="1350">পিরোজপুর সদর</option>
                                                            <option value="1348">ভাণ্ডারিয়া</option>
                                                            <option value="306">মঠবাড়িয়া</option>
                                                            <option value="1346">জিয়ানগর</option>
                                                        </select>
                                                        <select name="upozila_s" id="upozila_s_90"
                                                                class="upozilla_select"
                                                                style="display:none">
                                                            <option value="NULL">উপজেলা</option>
                                                            <option value="1496">খুলনা সিটি</option>
                                                            <option value="1494">কয়রা</option>
                                                            <option value="352">ডুমুরিয়া</option>
                                                            <option value="1492">তেরখাদা</option>
                                                            <option value="906">দাকোপ</option>
                                                            <option value="1490">দীঘলিয়া</option>
                                                            <option value="1488">পাইকগাছা</option>
                                                            <option value="360">ফুলতলা</option>
                                                            <option value="1486">বটিয়াঘাটা</option>
                                                            <option value="1484">রূপসা</option>
                                                        </select>
                                                        <select name="upozila_s" id="upozila_s_285"
                                                                class="upozilla_select"
                                                                style="display:none">
                                                            <option value="NULL">উপজেলা</option>
                                                            <option value="1482">কচুয়া (বাগেরহাট)</option>
                                                            <option value="1480">চিতলমারী</option>
                                                            <option value="624">ফকিরহাট</option>
                                                            <option value="1478">বাগেরহাট সদর</option>
                                                            <option value="628">মংলা</option>
                                                            <option value="284">মোরেলগঞ্জ</option>
                                                            <option value="517">মোল্লাহাট</option>
                                                            <option value="634">রামপাল</option>
                                                            <option value="1476">শরণখোলা</option>
                                                        </select>
                                                        <select name="upozila_s" id="upozila_s_364"
                                                                class="upozilla_select"
                                                                style="display:none">
                                                            <option value="NULL">উপজেলা</option>
                                                            <option value="1130">আলমডাঙ্গা</option>
                                                            <option value="1474">চুয়াডাঙ্গা সদর</option>
                                                            <option value="1472">দামুড়হুদা</option>
                                                            <option value="1470">জীবননগর</option>
                                                        </select>
                                                        <select name="upozila_s" id="upozila_s_241"
                                                                class="upozilla_select"
                                                                style="display:none">
                                                            <option value="NULL">উপজেলা</option>
                                                            <option value="1468">যশোর সদর</option>
                                                            <option value="270">অভয়নগর</option>
                                                            <option value="1466">কেশবপুর</option>
                                                            <option value="1464">চৌগাছা</option>
                                                            <option value="1126">ঝিকরগাছা</option>
                                                            <option value="1462">বাঘারপাড়া</option>
                                                            <option value="1460">মনিরামপুর</option>
                                                            <option value="1458">শার্শা</option>
                                                        </select>
                                                        <select name="upozila_s" id="upozila_s_312"
                                                                class="upozilla_select"
                                                                style="display:none">
                                                            <option value="NULL">উপজেলা</option>
                                                            <option value="1456">কালীগঞ্জ (ঝিনাইদহ)</option>
                                                            <option value="1454">কোটচাঁদপুর</option>
                                                            <option value="1452">ঝিনাইদহ সদর</option>
                                                            <option value="1450">মহেশপুর</option>
                                                            <option value="1448">শৈলকূপা</option>
                                                            <option value="1446">হরিণাকুণ্ড</option>
                                                        </select>
                                                        <select name="upozila_s" id="upozila_s_272"
                                                                class="upozilla_select"
                                                                style="display:none">
                                                            <option value="NULL">উপজেলা</option>
                                                            <option value="1444">কুমারখালী</option>
                                                            <option value="1442">কুষ্টিয়া সদর</option>
                                                            <option value="1440">খোকসা</option>
                                                            <option value="675">দৌলতপুর</option>
                                                            <option value="742">ভেড়ামারা</option>
                                                            <option value="1438">মিরপুর</option>
                                                        </select>
                                                        <select name="upozila_s" id="upozila_s_463"
                                                                class="upozilla_select"
                                                                style="display:none">
                                                            <option value="NULL">উপজেলা</option>
                                                            <option value="1436">মাগুরা সদর</option>
                                                            <option value="1434">মহম্মদপুর</option>
                                                            <option value="1432">শালিখা</option>
                                                            <option value="1204">শ্রীপুর</option>
                                                        </select>
                                                        <select name="upozila_s" id="upozila_s_269"
                                                                class="upozilla_select"
                                                                style="display:none">
                                                            <option value="NULL">উপজেলা</option>
                                                            <option value="1430">গাংনী</option>
                                                            <option value="1428">মেহেরপুর সদর</option>
                                                            <option value="1426">মুজিবনগর</option>
                                                        </select>
                                                        <select name="upozila_s" id="upozila_s_248"
                                                                class="upozilla_select"
                                                                style="display:none">
                                                            <option value="NULL">উপজেলা</option>
                                                            <option value="1424">নড়াইল সদর</option>
                                                            <option value="318">লোহাগড়া</option>
                                                            <option value="1422">কালিয়া</option>
                                                            <option value="1420">নড়াগাতি</option>
                                                        </select>
                                                        <select name="upozila_s" id="upozila_s_274"
                                                                class="upozilla_select"
                                                                style="display:none">
                                                            <option value="NULL">উপজেলা</option>
                                                            <option value="1418">আশাশুনি</option>
                                                            <option value="1416">কলারোয়া</option>
                                                            <option value="1414">কালীগঞ্জ (সাতক্ষীরা)</option>
                                                            <option value="1412">তালা</option>
                                                            <option value="1410">দেবহাটা</option>
                                                            <option value="1408">শ্যামনগর</option>
                                                            <option value="1406">সাতক্ষীরা সদর</option>
                                                        </select>
                                                        <select name="upozila_s" id="upozila_s_50"
                                                                class="upozilla_select"
                                                                style="display:none">
                                                            <option value="NULL">উপজেলা</option>
                                                            <option value="1680">রাজশাহী সিটি</option>
                                                            <option value="1674">রাজশাহী সদর</option>
                                                            <option value="558">বাঘা</option>
                                                            <option value="1678">পুঠিয়া</option>
                                                            <option value="960">পবা</option>
                                                            <option value="321">বাগমারা</option>
                                                            <option value="1676">তানোর</option>
                                                            <option value="1672">বোয়ালিয়া</option>
                                                            <option value="1670">মোহনপুর</option>
                                                            <option value="1668 ">চারঘাট</option>
                                                            <option value="1666">গোদাগারী</option>
                                                            <option value="1602">দুর্গাপুর</option>
                                                        </select>
                                                        <select name="upozila_s" id="upozila_s_487"
                                                                class="upozilla_select"
                                                                style="display:none">
                                                            <option value="NULL">উপজেলা</option>
                                                            <option value="1664 ">নাটোর সদর</option>
                                                            <option value="956">বাগাতিপাড়া</option>
                                                            <option value="1662">বরাইগ্রাম</option>
                                                            <option value="486">গুরুদাসপুর</option>
                                                            <option value="625">লালপুর</option>
                                                            <option value="498">সিংড়া</option>
                                                        </select>
                                                        <select name="upozila_s" id="upozila_s_343"
                                                                class="upozilla_select"
                                                                style="display:none">
                                                            <option value="NULL">উপজেলা</option>
                                                            <option value="1660">চাঁপাইনবাবগঞ্জ সদর</option>
                                                            <option value="874">গোমস্তাপুর</option>
                                                            <option value="373 ">শিবগঞ্জ</option>
                                                            <option value="1658">নাচোল</option>
                                                            <option value="651">ভোলাহাট</option>
                                                        </select>
                                                        <select name="upozila_s" id="upozila_s_305"
                                                                class="upozilla_select"
                                                                style="display:none">
                                                            <option value="NULL">উপজেলা</option>
                                                            <option value="1656">পাঁচবিবি</option>
                                                            <option value="1654">কালাই</option>
                                                            <option value="1008">ক্ষেতলাল</option>
                                                            <option value="304">আক্কেলপুর</option>
                                                            <option value="1652">জয়পুরহাট সদর</option>
                                                        </select>
                                                        <select name="upozila_s" id="upozila_s_280"
                                                                class="upozilla_select"
                                                                style="display:none">
                                                            <option value="NULL">উপজেলা</option>
                                                            <option value="1554">নওগাঁ সদর</option>
                                                            <option value="1612">পত্নীতলা</option>
                                                            <option value="1610">ধামইরহাট</option>
                                                            <option value="868">মহাদেবপুর</option>
                                                            <option value="1600">পোরশা</option>
                                                            <option value="962 ">সাপাহার</option>
                                                            <option value="1588 ">বদলগাছী</option>
                                                            <option value="1570">মান্দা</option>
                                                            <option value="539 ">নিয়ামতপুর</option>
                                                            <option value="1562">আত্রাই</option>
                                                            <option value="1556">রানীনগর</option>
                                                        </select>
                                                        <select name="upozila_s" id="upozila_s_277"
                                                                class="upozilla_select"
                                                                style="display:none">
                                                            <option value="NULL">উপজেলা</option>
                                                            <option value="1544 ">আদমদিঘী</option>
                                                            <option value="1540">বগুড়া সদর</option>
                                                            <option value="353">ধুনট</option>
                                                            <option value="1536">ধুপচাঁচিয়া</option>
                                                            <option value="309">গাবতলী</option>
                                                            <option value="1532">কাহালু</option>
                                                            <option value="1530 ">নন্দীগ্রাম</option>
                                                            <option value="1526">সারিয়াকান্দি</option>
                                                            <option value="278">শেরপুর</option>
                                                            <option value="373 ">শিবগঞ্জ</option>
                                                            <option value="1522">সোনাতলা</option>
                                                            <option value="1520">সাজাহানপুর</option>
                                                        </select>
                                                        <select name="upozila_s" id="upozila_s_320"
                                                                class="upozilla_select"
                                                                style="display:none">
                                                            <option value="NULL">উপজেলা</option>
                                                            <option value="1516">আটঘরিয়া</option>
                                                            <option value="354 ">ঈশ্বরদী</option>
                                                            <option value="1514">চাটমোহর</option>
                                                            <option value="1512">পাবনা সদর</option>
                                                            <option value="1510">ফরিদপুর</option>
                                                            <option value="689">বেড়া</option>
                                                            <option value="1506">ভাঙ্গুরা</option>
                                                            <option value="802">সুজানগর</option>
                                                            <option value="803">সাঁথিয়া</option>
                                                        </select>
                                                        <select name="upozila_s" id="upozila_s_281"
                                                                class="upozilla_select"
                                                                style="display:none">
                                                            <option value="NULL">উপজেলা</option>
                                                            <option value="1112">বেলকুচি</option>
                                                            <option value="1504">কামারখন্দ</option>
                                                            <option value="1502">চৌহালি</option>
                                                            <option value="1500">কাজীপুর</option>
                                                            <option value="436">রায়গঞ্জ</option>
                                                            <option value="358">শাহজাদপুর</option>
                                                            <option value="1498">সিরাজগঞ্জ সদর</option>
                                                            <option value="608">তাড়াশ</option>
                                                            <option value="1124">উল্লাপাড়া</option>
                                                        </select>
                                                    </div>
                                                    <div class="div4">
                                                        <input type="button" value="সংবাদ" id="search_tag_wize_news"
                                                               class="search_tag_wize_news"/></div>
                                                </div>
                                            </form>
                                            <script type="text/javascript">
                                                //new code
                                                var s_div, s_dis, s_upo;
                                                var division_tags_id = 'NULL';
                                                var district_tags_id = 'NULL';
                                                var upozilla_tags_id = 'NULL';
                                                division_tags_id = $('#division_s :selected').val();
                                                if (!division_tags_id) division_tags_id = 'NULL';
                                                district_tags_id = $('#district_s_' + division_tags_id + ' :selected').val();
                                                if (!district_tags_id) district_tags_id = 'NULL';
                                                upozilla_tags_id = $('#upozila_s_' + district_tags_id + ' :selected').val();
                                                if (!upozilla_tags_id) upozilla_tags_id = 'NULL';
                                                $('.division_select').change(function () {
                                                    division_tags_id = $('#division_s :selected').val(); //$(this).val();
                                                    if (!$('#division_s :selected').val()) {
                                                        division_tags_id = 'NULL';
                                                        district_tags_id = 'NULL';
                                                        upozilla_tags_id = 'NULL';
                                                    }
                                                    $('.district_select').css('display', 'none');
                                                    $('.wdg_message_show').html('');
                                                    if ($('#district_s_' + this.value).length > 0) {
                                                        $('#district_s_' + this.value).css('display', '');
                                                        $('#district_s_' + this.value).val('NULL');
                                                        $('.upozilla_select').css('display', 'none');
                                                        $('#upozila_s_0').css('display', '');
                                                        district_tags_id = 'NULL';
                                                        upozilla_tags_id = 'NULL';
                                                    } else {
                                                        $('#district_s_0').css('display', '');
                                                        $('.upozilla_select').css('display', 'none');
                                                        $('#upozila_s_0').css('display', '');
                                                    }
                                                    $('#district_s_' + this.value).css('display', '');
                                                });
                                                $('.district_select').change(function () {
                                                    if (!$('#district_s' + division_tags_id + ' :selected').val()) {
                                                        district_tags_id = 'NULL';
                                                        upozilla_tags_id = 'NULL';
                                                    }
                                                    district_tags_id = this.value;
                                                    $('.upozilla_select').css('display', 'none');
                                                    if ($('#upozila_s_' + this.value).length > 0) {
                                                        $('#upozila_s_' + this.value).css('display', '');
                                                        $('#upozila_s_' + this.value).val('NULL');
                                                        upozilla_tags_id = 'NULL';
                                                    } else {
                                                        $('#upozila_s_0').css('display', '');
                                                    }
                                                });
                                                $('.upozilla_select').change(function () {
                                                    if (!$('#upozila_s_' + district_tags_id + ' :selected').val()) {
                                                        upozilla_tags_id = 'NULL';
                                                    }
                                                    upozilla_tags_id = $(this).val();
                                                });
                                                $('#search_tag_wize_news').click(function () {
                                                    var go_tags_id;
                                                    var par = '';
                                                    if (division_tags_id) {
                                                        go_tags_id = division_tags_id;
                                                        par = par + '&div=' + division_tags_id;
                                                    }
                                                    if (district_tags_id != 'NULL') {
                                                        go_tags_id = district_tags_id;
                                                        par = par + '&dis=' + district_tags_id;
                                                    }
                                                    if (upozilla_tags_id != 'NULL') {
                                                        go_tags_id = upozilla_tags_id;
                                                        par = par + '&upo=' + upozilla_tags_id;
                                                    }
                                                    if (go_tags_id != 'NULL') {
                                                        location.href = 'http://www.prothomalo.com/bangladesh/article?tags=' + go_tags_id + par;
                                                        return false;
                                                        //end new code
                                                    } else
                                                        $('.wdg_message_show').html('আপনার এরিয়া নির্বাচন করুন');
                                                });
                                            </script>
                                        </div>
                                    </div>
                                </div>
                                <div id="widget_100792" class="widget_color_ widget_wrap">
                                    <div class="contents_listing  widget">
                                        <div class="contents  summery_view col_articles
							column_view
				">
                                            <div class="row">
                                                <div class="col col2">
                                                    <div class="each col_in
				has_image
				image_left
				content_capability_blog
				content_type_article
				responsive_image_hide_
				m_show_featured_image_as_left
			">
                                                        <!--overlay anchor-->
                                                        <a class="link_overlay"
                                                           href="{{ asset('frontend') }}/assets/#"></a>
                                                        <!--image-->
                                                        <div class="image">
                                                            <noscript id="ari-image-1007921616814"
                                                                      data-ari="{&quot;path&quot;:&quot;media\/2018\/03\/18\/cc1107dbb1c246a9093a95ef8df7e78e-5aae1122a6fb1.jpg?jadewits_media_id=1199871&quot;,&quot;ratio&quot;:[16,9],&quot;alt&quot;:&quot;\u099c\u09bf\u09a8 \u09a4\u09be\u09dc\u09be\u09a8\u09cb\u09b0 \u09a8\u09be\u09ae\u09c7 \u09a4\u09b0\u09c1\u09a3\u09c0\u0995\u09c7 \u09a7\u09b0\u09cd\u09b7\u09a3\u09c7\u09b0 \u0985\u09ad\u09bf\u09af\u09cb\u0997&quot;}">
                                                                <img src="{{ asset('frontend') }}/assets/contents/cache/images/400x225x1/uploads/media/2018/03/18/cc1107dbb1c246a9093a95ef8df7e78e-5aae1122a6fb1.jpg"
                                                                     alt="জিন তাড়ানোর নামে তরুণীকে ধর্ষণের অভিযোগ"/>
                                                            </noscript>
                                                            <script data-id="ari-image-1007921616814">
                                                                jwARI.fetch($('#ari-image-1007921616814'));
                                                            </script>
                                                            <span class="content_type"></span>
                                                        </div>
                                                        <div class="info ">
                                                            <h2 class="title_holder">
                                                                <span class="title">জিন তাড়ানোর নামে তরুণীকে ধর্ষণের অভিযোগ</span>
                                                            </h2>
                                                            <div class="additional">
                                                                <!--category/page-->
                                                                <!--author-->
                                                                <!--time-->
                                                                <!--comment count-->
                                                                <!--like count-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col col2">
                                                    <div class="each col_in
				has_image
				image_left
				content_capability_blog
				content_type_article
				responsive_image_hide_
				m_show_featured_image_as_left
			">
                                                        <!--overlay anchor-->
                                                        <a class="link_overlay"
                                                           href="{{ asset('frontend') }}/assets/#"></a>
                                                        <!--image-->
                                                        <div class="image">
                                                            <noscript id="ari-image-1007921616813"
                                                                      data-ari="{&quot;path&quot;:&quot;media\/2017\/10\/13\/7e315843eb27154b490273e90e28c044-59e0393f488f2.jpg?jadewits_media_id=1030981&quot;,&quot;ratio&quot;:[16,9],&quot;alt&quot;:&quot;\u099f\u09c7\u0995\u09a8\u09be\u09ab\u09c7 \u2018\u09ac\u09a8\u09cd\u09a6\u09c1\u0995\u09af\u09c1\u09a6\u09cd\u09a7\u09c7\u2019 \u09e8 \u09b0\u09cb\u09b9\u09bf\u0999\u09cd\u0997\u09be \u09a8\u09bf\u09b9\u09a4&quot;}">
                                                                <img src="{{ asset('frontend') }}/assets/contents/cache/images/400x225x1/uploads/media/2017/10/13/7e315843eb27154b490273e90e28c044-59e0393f488f2.jpg"
                                                                     alt="টেকনাফে ‘বন্দুকযুদ্ধে’ ২ রোহিঙ্গা নিহত"/>
                                                            </noscript>
                                                            <script data-id="ari-image-1007921616813">
                                                                jwARI.fetch($('#ari-image-1007921616813'));
                                                            </script>
                                                            <span class="content_type"></span>
                                                        </div>
                                                        <div class="info ">
                                                            <h2 class="title_holder">
                                                                <span class="title">টেকনাফে ‘বন্দুকযুদ্ধে’ ২ রোহিঙ্গা নিহত</span>
                                                            </h2>
                                                            <div class="additional">
                                                                <!--category/page-->
                                                                <!--author-->
                                                                <!--time-->
                                                                <!--comment count-->
                                                                <!--like count-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col col2">
                                                    <div class="each col_in
				has_image
				image_left
				content_capability_blog
				content_type_article
				responsive_image_hide_
				m_show_featured_image_as_left
			">
                                                        <!--overlay anchor-->
                                                        <a class="link_overlay"
                                                           href="{{ asset('frontend') }}/assets/#"></a>
                                                        <!--image-->
                                                        <div class="image">
                                                            <noscript id="ari-image-1007921616811"
                                                                      data-ari="{&quot;path&quot;:&quot;media\/2019\/09\/30\/7672734fe6651c2fba2e8d747604e13b-5d916f1ed99ed.jpg?jadewits_media_id=1473936&quot;,&quot;ratio&quot;:[16,9],&quot;alt&quot;:&quot;\u09b8\u09cd\u099f\u09bf\u09df\u09be\u09b0\u09bf\u0982 \u09b9\u09be\u09a4\u09c7 \u09b8\u09cd\u09ac\u09aa\u09cd\u09a8\u09c7\u09b0 \u09af\u09be\u09a4\u09cd\u09b0\u09be&quot;}">
                                                                <img src="{{ asset('frontend') }}/assets/contents/cache/images/400x225x1/uploads/media/2019/09/30/7672734fe6651c2fba2e8d747604e13b-5d916f1ed99ed.jpg"
                                                                     alt="স্টিয়ারিং হাতে স্বপ্নের যাত্রা"/>
                                                            </noscript>
                                                            <script data-id="ari-image-1007921616811">
                                                                jwARI.fetch($('#ari-image-1007921616811'));
                                                            </script>
                                                            <span class="content_type"></span>
                                                        </div>
                                                        <div class="info ">
                                                            <h2 class="title_holder">
                                                                <span class="title">স্টিয়ারিং হাতে স্বপ্নের যাত্রা</span>
                                                            </h2>
                                                            <div class="additional">
                                                                <!--category/page-->
                                                                <!--author-->
                                                                <!--time-->
                                                                <!--comment count-->
                                                                <!--like count-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col col2">
                                                    <div class="each col_in
				has_image
				image_left
				content_capability_blog
				content_type_article
				responsive_image_hide_
				m_show_featured_image_as_left
			">
                                                        <!--overlay anchor-->
                                                        <a class="link_overlay"
                                                           href="{{ asset('frontend') }}/assets/#"></a>
                                                        <!--image-->
                                                        <div class="image">
                                                            <noscript id="ari-image-1007921616809"
                                                                      data-ari="{&quot;path&quot;:&quot;media\/2019\/09\/19\/01be6595cbefc06b30a93610b33a5eb9-5d83655c58ddb.jpg?jadewits_media_id=1471260&quot;,&quot;ratio&quot;:[16,9],&quot;alt&quot;:&quot;\u099b\u09be\u09a4\u09cd\u09b0\u09b2\u09c0\u0997\u09c7\u09b0 \u09ad\u09be\u09b0\u09aa\u09cd\u09b0\u09be\u09aa\u09cd\u09a4 \u09b8\u09ad\u09be\u09aa\u09a4\u09bf\u09b0 \u099c\u09bf\u09a1\u09bf&quot;}">
                                                                <img src="{{ asset('frontend') }}/assets/contents/cache/images/400x225x1/uploads/media/2019/09/19/01be6595cbefc06b30a93610b33a5eb9-5d83655c58ddb.jpg"
                                                                     alt="ছাত্রলীগের ভারপ্রাপ্ত সভাপতির জিডি"/>
                                                            </noscript>
                                                            <script data-id="ari-image-1007921616809">
                                                                jwARI.fetch($('#ari-image-1007921616809'));
                                                            </script>
                                                            <span class="content_type"></span>
                                                        </div>
                                                        <div class="info ">
                                                            <h2 class="title_holder">
                                                                <span class="title">ছাত্রলীগের ভারপ্রাপ্ত সভাপতির জিডি</span>
                                                            </h2>
                                                            <div class="additional">
                                                                <!--category/page-->
                                                                <!--author-->
                                                                <!--time-->
                                                                <!--comment count-->
                                                                <!--like count-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col col2">
                                                    <div class="each col_in
				has_image
				image_left
				content_capability_blog
				content_type_article
				responsive_image_hide_
				m_show_featured_image_as_left
			">
                                                        <!--overlay anchor-->
                                                        <a class="link_overlay"
                                                           href="{{ asset('frontend') }}/assets/#"></a>
                                                        <!--image-->
                                                        <div class="image">
                                                            <noscript id="ari-image-1007921616807"
                                                                      data-ari="{&quot;path&quot;:&quot;media\/2017\/10\/20\/bd4adf0fe14e0938fca7c6302dcb07f0-59e9d5f98b565.jpg?jadewits_media_id=1040516&quot;,&quot;ratio&quot;:[16,9],&quot;alt&quot;:&quot;\u09b8\u0982\u09b8\u09a6 \u09a8\u09bf\u09b0\u09cd\u09ac\u09be\u099a\u09a8\u09c7 \u0986. \u09b2\u09c0\u0997\u09c7\u09b0 \u099a\u09c7\u09df\u09c7 \u09ac\u09cd\u09af\u09df \u09ac\u09c7\u09b6\u09bf \u09ac\u09bf\u098f\u09a8\u09aa\u09bf\u09b0, \u09b8\u09ac\u099a\u09c7\u09df\u09c7 \u09ac\u09c7\u09b6\u09bf \u09ac\u09cd\u09af\u09df \u0987\u09b8\u09b2\u09be\u09ae\u09c0 \u0986\u09a8\u09cd\u09a6\u09cb\u09b2\u09a8\u09c7\u09b0&quot;}">
                                                                <img src="{{ asset('frontend') }}/assets/contents/cache/images/400x225x1/uploads/media/2017/10/20/bd4adf0fe14e0938fca7c6302dcb07f0-59e9d5f98b565.jpg"
                                                                     alt="সংসদ নির্বাচনে আ. লীগের চেয়ে ব্যয় বেশি বিএনপির, সবচেয়ে বেশি ব্যয় ইসলামী আন্দোলনের"/>
                                                            </noscript>
                                                            <script data-id="ari-image-1007921616807">
                                                                jwARI.fetch($('#ari-image-1007921616807'));
                                                            </script>
                                                            <span class="content_type"></span>
                                                        </div>
                                                        <div class="info ">
                                                            <h2 class="title_holder">
                                                                <span class="title">সংসদ নির্বাচনে আ. লীগের চেয়ে ব্যয় বেশি বিএনপির</span>
                                                            </h2>
                                                            <div class="additional">
                                                                <!--category/page-->
                                                                <!--author-->
                                                                <!--time-->
                                                                <!--comment count-->
                                                                <!--like count-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col col2">
                                                    <div class="each col_in
				has_image
				image_left
				content_capability_blog
				content_type_article
				responsive_image_hide_
				m_show_featured_image_as_left
			">
                                                        <!--overlay anchor-->
                                                        <a class="link_overlay"
                                                           href="{{ asset('frontend') }}/assets/#"></a>
                                                        <!--image-->
                                                        <div class="image">
                                                            <noscript id="ari-image-1007921616806"
                                                                      data-ari="{&quot;path&quot;:&quot;media\/2019\/09\/29\/4b7a8cb70e6712a6e81386f384fdee49-5d90ef7642ad0.jpg?jadewits_media_id=1473934&quot;,&quot;ratio&quot;:[16,9],&quot;alt&quot;:&quot;\u0986\u09a8\u09cd\u09a6\u09cb\u09b2\u09a8 \u09b8\u0982\u0995\u099f\u09c7 \u099f\u09cd\u09b0\u09c7\u09a1 \u0987\u0989\u09a8\u09bf\u09df\u09a8\u0997\u09c1\u09b2\u09cb&quot;}">
                                                                <img src="{{ asset('frontend') }}/assets/contents/cache/images/400x225x1/uploads/media/2019/09/29/4b7a8cb70e6712a6e81386f384fdee49-5d90ef7642ad0.jpg"
                                                                     alt="আন্দোলন সংকটে ট্রেড ইউনিয়নগুলো"/>
                                                            </noscript>
                                                            <script data-id="ari-image-1007921616806">
                                                                jwARI.fetch($('#ari-image-1007921616806'));
                                                            </script>
                                                            <span class="content_type"></span>
                                                        </div>
                                                        <div class="info ">
                                                            <h2 class="title_holder">
                                                                <span class="title">আন্দোলন সংকটে ট্রেড ইউনিয়নগুলো</span>
                                                            </h2>
                                                            <div class="additional">
                                                                <!--category/page-->
                                                                <!--author-->
                                                                <!--time-->
                                                                <!--comment count-->
                                                                <!--like count-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="widget_100797" class="widget_color_ widget_wrap">
                                    <div class="widget_text  widget">
                                        <div class="widget_text_inner aunqur">
                                            <div class="content">
                                                <style>
                                                    .national_zone_widget {
                                                        border-top: none;
                                                        background-color: #fff;
                                                        display: flex;
                                                        align-items: center;
                                                        justify-content: flex-end;
                                                        margin-bottom: 24px;
                                                        padding: 0;
                                                    }

                                                    .ntl_container_div {
                                                        display: flex;
                                                        width: 100% !important;
                                                        align-items: center;
                                                    }

                                                    .ntl_container_div .div0 {
                                                        display: none;
                                                    }

                                                    .ntl_container_div .div1,
                                                    .ntl_container_div .div2,
                                                    .ntl_container_div .div3,
                                                    div0 {
                                                        width: 32%;
                                                        border: 1px solid #ccc;
                                                        margin-right: 1%;
                                                        padding-left: 0px;
                                                        line-height: 34px;
                                                    }

                                                    .ntl_container_div .div4 {
                                                        width: 10%;
                                                        padding: 0;
                                                    }

                                                    form#national_news_search {
                                                        width: 100%;
                                                        display: flex;
                                                    }

                                                    select.division_select,
                                                    select.district_select,
                                                    select.upozilla_select {
                                                        background: none;
                                                        font-size: 18px;
                                                        font-family: 'kiron', SolaimanLipi, Arial, Vrinda, FallbackBengaliFont, Helvetica, sans-serif !important;
                                                        border: none;
                                                    }

                                                    select.division_select option,
                                                    select.district_select option,
                                                    select.upozilla_select option,
                                                    {
                                                        border: none;
                                                        background: #f7f7f7;
                                                        display: inline-block;
                                                        width: 100%;
                                                        box-shadow: 0px 0px 5px #888888;
                                                    }

                                                    .search_tag_wize_news {
                                                        background-color: #0091ea;
                                                        height: 45px;
                                                        width: 10%;
                                                        border: none;
                                                        cursor: pointer;
                                                        background-image: url('contents/cache/images/24X24X1/uploads/media/2017/03/14/929b760e3e4a8eb70f329d1b6b865f6b-58c798566cb5d.png');
                                                        background-position: center center;
                                                        background-repeat: no-repeat;
                                                        padding: 6px;
                                                        text-indent: -9000px;
                                                    }

                                                    .search_tag_wize_news:hover {
                                                        background-color: #0091ea;
                                                    }

                                                    h2.national_news_head {
                                                        font-size: 22px;
                                                        line-height: 30px;
                                                        background: #dcdcdc;
                                                        color: #000;
                                                        padding: 6px 15px;
                                                        font-weight: normal;
                                                    }

                                                    .national_zone_widget .wdg_message_show {
                                                        padding-left: 0px;
                                                    }

                                                    @media screen and (max-width: 700px) {
                                                        select.division_select,
                                                        select.district_select,
                                                        select.upozilla_select {
                                                            font-size: 16px;
                                                        }

                                                        select.division_select,
                                                        select.district_select {
                                                            border-right: 0;
                                                        }

                                                        .ntl_container_div {
                                                            display: block !important;
                                                        }

                                                        .ntl_container_div .div1,
                                                        .ntl_container_div .div2,
                                                        .ntl_container_div .div3,
                                                        .ntl_container_div .div0 {
                                                            width: 47% !important;
                                                            padding: 5px 0px;
                                                            margin-bottom: 8px;
                                                            line-height: 30px;
                                                            margin-right: 2%;
                                                        }

                                                        .national_zone_widget {
                                                            height: auto !important;
                                                        }

                                                        .ntl_container_div .div4 {
                                                            width: 48% !important;
                                                        }
                                                    }
                                                </style>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="wrapper_51604"
                     class="wrapper special_32_5_67_5  container_white_bg container_top_padding container_bottom_padding ">
                    <div class="inner">
                        <div id="div_51606"
                             class="p_d  footer_only_mobile palo_sp_border teal container_fixed_height container_white_bg container_bottom_padding  _col">
                            <div class="hf_wrap">
                                <div class="color_theme_">
                                    <h4 class="headbar"><a href="{{ asset('frontend') }}/assets/sports.html">খেলা</a>
                                    </h4>
                                </div>
                            </div>
                            <div class="inner">
                                <div id="widget_101822" class="widget_color_ widget_wrap">
                                    <div class="contents_listing  widget">
                                        <div class="contents  summery_view col_articles
							column_view
				">
                                            <div class="row">
                                                <div class="col col3">
                                                    <div class="each col_in
				has_image
				image_top
				content_capability_blog
				content_type_article
				responsive_image_hide_
			">
                                                        <!--overlay anchor-->
                                                        <a class="link_overlay"
                                                           href="{{ asset('frontend') }}/assets/#"></a>
                                                        <!--image-->
                                                        <div class="image">
                                                            <noscript id="ari-image-1018221616792"
                                                                      data-ari="{&quot;path&quot;:&quot;media\/2019\/09\/29\/15e64efd920812510a572bf4e0f315a0-5d90ca8f1feb2.jpg?jadewits_media_id=1473917&quot;,&quot;ratio&quot;:[16,9],&quot;alt&quot;:&quot;\u09ad\u09c1\u099f\u09be\u09a8\u09c7\u09b0 \u099c\u09be\u09b2\u09c7 \u09ac\u09be\u0982\u09b2\u09be\u09a6\u09c7\u09b6\u09c7\u09b0 \u09ea \u0997\u09cb\u09b2&quot;}">
                                                                <img src="{{ asset('frontend') }}/assets/contents/cache/images/400x225x1/uploads/media/2019/09/29/15e64efd920812510a572bf4e0f315a0-5d90ca8f1feb2.jpg"
                                                                     alt="ভুটানের জালে বাংলাদেশের ৪ গোল"/>
                                                            </noscript>
                                                            <script data-id="ari-image-1018221616792">
                                                                jwARI.fetch($('#ari-image-1018221616792'));
                                                            </script>
                                                            <span class="content_type"></span>
                                                        </div>
                                                        <div class="info ">
                                                            <h2 class="title_holder">
                                                                <span class="title">ভুটানের জালে বাংলাদেশের ৪ গোল</span>
                                                            </h2>
                                                            <div class="additional">
                                                                <!--category/page-->
                                                                <!--author-->
                                                                <!--time-->
                                                                <!--comment count-->
                                                                <!--like count-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col col3">
                                                    <div class="each col_in
				has_image
				image_top
				content_capability_blog
				content_type_article
				responsive_image_hide_
			">
                                                        <!--overlay anchor-->
                                                        <a class="link_overlay"
                                                           href="{{ asset('frontend') }}/assets/#"></a>
                                                        <!--image-->
                                                        <div class="image">
                                                            <noscript id="ari-image-1018221616790"
                                                                      data-ari="{&quot;path&quot;:&quot;media\/2019\/09\/29\/a1e5bd122522989f7447c9e017fa5a17-5d90c283d487c.jpg?jadewits_media_id=1473916&quot;,&quot;ratio&quot;:[16,9],&quot;alt&quot;:&quot;\u09aa\u09be\u0995\u09bf\u09b8\u09cd\u09a4\u09be\u09a8 \u09b8\u09ab\u09b0 \u09a8\u09bf\u09df\u09c7 \u09af\u09be \u09ad\u09be\u09ac\u099b\u09c7 \u09ac\u09bf\u09b8\u09bf\u09ac\u09bf&quot;}">
                                                                <img src="{{ asset('frontend') }}/assets/contents/cache/images/400x225x1/uploads/media/2019/09/29/a1e5bd122522989f7447c9e017fa5a17-5d90c283d487c.jpg"
                                                                     alt="পাকিস্তান সফর নিয়ে যা ভাবছে বিসিবি"/>
                                                            </noscript>
                                                            <script data-id="ari-image-1018221616790">
                                                                jwARI.fetch($('#ari-image-1018221616790'));
                                                            </script>
                                                            <span class="content_type"></span>
                                                        </div>
                                                        <div class="info ">
                                                            <h2 class="title_holder">
                                                                <span class="title">পাকিস্তান সফর নিয়ে যা ভাবছে বিসিবি</span>
                                                            </h2>
                                                            <div class="additional">
                                                                <!--category/page-->
                                                                <!--author-->
                                                                <!--time-->
                                                                <!--comment count-->
                                                                <!--like count-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col col3">
                                                    <div class="each col_in
				has_image
				image_top
				content_capability_blog
				content_type_article
				responsive_image_hide_
			">
                                                        <!--overlay anchor-->
                                                        <a class="link_overlay"
                                                           href="{{ asset('frontend') }}/assets/#"></a>
                                                        <!--image-->
                                                        <div class="image">
                                                            <noscript id="ari-image-1018221616783"
                                                                      data-ari="{&quot;path&quot;:&quot;media\/2019\/09\/29\/67cd230771693f1ecee1e45bb2717b13-5d90ba14a185f.jpg?jadewits_media_id=1473905&quot;,&quot;ratio&quot;:[16,9],&quot;alt&quot;:&quot;\u09ac\u09be\u0982\u09b2\u09be\u09a6\u09c7\u09b6 \u09b6\u09bf\u09b0\u09cb\u09aa\u09be \u09a8\u09be \u099c\u09bf\u09a4\u09b2\u09c7\u0993 \u099a\u09cd\u09af\u09be\u09ae\u09cd\u09aa\u09bf\u09df\u09a8 \u09ab\u09be\u09b9\u09bf\u09ae&quot;}">
                                                                <img src="{{ asset('frontend') }}/assets/contents/cache/images/400x225x1/uploads/media/2019/09/29/67cd230771693f1ecee1e45bb2717b13-5d90ba14a185f.jpg"
                                                                     alt="বাংলাদেশ শিরোপা না জিতলেও চ্যাম্পিয়ন ফাহিম"/>
                                                            </noscript>
                                                            <script data-id="ari-image-1018221616783">
                                                                jwARI.fetch($('#ari-image-1018221616783'));
                                                            </script>
                                                            <span class="content_type"></span>
                                                        </div>
                                                        <div class="info ">
                                                            <h2 class="title_holder">
                                                                <span class="title">বাংলাদেশ শিরোপা না জিতলেও চ্যাম্পিয়ন ফাহিম</span>
                                                            </h2>
                                                            <div class="additional">
                                                                <!--category/page-->
                                                                <!--author-->
                                                                <!--time-->
                                                                <!--comment count-->
                                                                <!--like count-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="widget_101823" class="widget_color_ widget_wrap">
                                    <div class="contents_listing  widget">
                                        <div class="contents  summery_view col_articles
							column_view
				">
                                            <div class="row">
                                                <div class="col col4">
                                                    <div class="each col_in
				has_image
				image_top
				content_capability_blog
				content_type_article
				responsive_image_hide_
			">
                                                        <!--overlay anchor-->
                                                        <a class="link_overlay"
                                                           href="{{ asset('frontend') }}/assets/#"></a>
                                                        <!--image-->
                                                        <div class="image">
                                                            <noscript id="ari-image-1018231616775"
                                                                      data-ari="{&quot;path&quot;:&quot;media\/2019\/09\/29\/5eb635677d7c006de4d3595fd719ea66-5d90a8464f197.jpg?jadewits_media_id=1473885&quot;,&quot;ratio&quot;:[16,9],&quot;alt&quot;:&quot;\u09ad\u09c1\u099f\u09be\u09a8\u09c7\u09b0 \u09ac\u09bf\u09aa\u0995\u09cd\u09b7\u09c7 \u09ac\u09be\u0982\u09b2\u09be\u09a6\u09c7\u09b6\u09c7\u09b0 \u098f\u0995\u09be\u09a6\u09b6 \u09a6\u09c7\u0996\u09c7 \u09a8\u09bf\u09a8&quot;}">
                                                                <img src="{{ asset('frontend') }}/assets/contents/cache/images/400x225x1/uploads/media/2019/09/29/5eb635677d7c006de4d3595fd719ea66-5d90a8464f197.jpg"
                                                                     alt="ভুটানের বিপক্ষে বাংলাদেশের একাদশ দেখে নিন"/>
                                                            </noscript>
                                                            <script data-id="ari-image-1018231616775">
                                                                jwARI.fetch($('#ari-image-1018231616775'));
                                                            </script>
                                                            <span class="content_type"></span>
                                                        </div>
                                                        <div class="info ">
                                                            <h2 class="title_holder">
                                                                <span class="title">ভুটানের বিপক্ষে বাংলাদেশের একাদশ দেখে নিন</span>
                                                            </h2>
                                                            <div class="additional">
                                                                <!--category/page-->
                                                                <!--author-->
                                                                <!--time-->
                                                                <!--comment count-->
                                                                <!--like count-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col col4">
                                                    <div class="each col_in
				has_image
				image_top
				content_capability_blog
				content_type_article
				responsive_image_hide_
			">
                                                        <!--overlay anchor-->
                                                        <a class="link_overlay"
                                                           href="{{ asset('frontend') }}/assets/#"></a>
                                                        <!--image-->
                                                        <div class="image">
                                                            <noscript id="ari-image-1018231616760"
                                                                      data-ari="{&quot;path&quot;:&quot;media\/2019\/09\/29\/a33ac944b34163747c85eb96b5b44434-5d9098b1f1565.jpg?jadewits_media_id=1473864&quot;,&quot;ratio&quot;:[16,9],&quot;alt&quot;:&quot;\u09ac\u09bf\u09a6\u09cd\u09b0\u09cb\u09b9\u09c7\u09b0 \u09b9\u09c1\u09ae\u0995\u09bf \u09a6\u09bf\u099a\u09cd\u099b\u09c7\u09a8 \u09ac\u09be\u09b0\u09cd\u09b8\u09c7\u09b2\u09cb\u09a8\u09be\u09b0 \u0996\u09c7\u09b2\u09cb\u09df\u09be\u09dc\u09c7\u09b0\u09be&quot;}">
                                                                <img src="{{ asset('frontend') }}/assets/contents/cache/images/400x225x1/uploads/media/2019/09/29/a33ac944b34163747c85eb96b5b44434-5d9098b1f1565.jpg"
                                                                     alt="বিদ্রোহের হুমকি দিচ্ছেন বার্সেলোনার খেলোয়াড়েরা"/>
                                                            </noscript>
                                                            <script data-id="ari-image-1018231616760">
                                                                jwARI.fetch($('#ari-image-1018231616760'));
                                                            </script>
                                                            <span class="content_type"></span>
                                                        </div>
                                                        <div class="info ">
                                                            <h2 class="title_holder">
                                                                <span class="title">বিদ্রোহের হুমকি দিচ্ছেন বার্সেলোনার খেলোয়াড়েরা</span>
                                                            </h2>
                                                            <div class="additional">
                                                                <!--category/page-->
                                                                <!--author-->
                                                                <!--time-->
                                                                <!--comment count-->
                                                                <!--like count-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col col4">
                                                    <div class="each col_in
				has_image
				image_top
				content_capability_blog
				content_type_article
				responsive_image_hide_
			">
                                                        <!--overlay anchor-->
                                                        <a class="link_overlay"
                                                           href="{{ asset('frontend') }}/assets/#"></a>
                                                        <!--image-->
                                                        <div class="image">
                                                            <noscript id="ari-image-1018231616754"
                                                                      data-ari="{&quot;path&quot;:&quot;media\/2019\/09\/29\/2f16f2ef94ff448a8789f1f9b0081c1e-5d9091e74e8b9.jpg?jadewits_media_id=1473857&quot;,&quot;ratio&quot;:[16,9],&quot;alt&quot;:&quot;\u09af\u09c1\u09ac \u09b8\u09be\u09ab\u09c7\u09b0 \u09ab\u09be\u0987\u09a8\u09be\u09b2\u09c7 \u09b6\u09c7\u09b7 \u09ae\u09bf\u09a8\u09bf\u099f\u09c7\u09b0 \u09a6\u09c1\u0983\u0996&quot;}">
                                                                <img src="{{ asset('frontend') }}/assets/contents/cache/images/400x225x1/uploads/media/2019/09/29/2f16f2ef94ff448a8789f1f9b0081c1e-5d9091e74e8b9.jpg"
                                                                     alt="যুব সাফের ফাইনালে শেষ মিনিটের দুঃখ"/>
                                                            </noscript>
                                                            <script data-id="ari-image-1018231616754">
                                                                jwARI.fetch($('#ari-image-1018231616754'));
                                                            </script>
                                                            <span class="content_type"></span>
                                                        </div>
                                                        <div class="info ">
                                                            <h2 class="title_holder">
                                                                <span class="title">যুব সাফের ফাইনালে শেষ মিনিটের দুঃখ</span>
                                                            </h2>
                                                            <div class="additional">
                                                                <!--category/page-->
                                                                <!--author-->
                                                                <!--time-->
                                                                <!--comment count-->
                                                                <!--like count-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col col4">
                                                    <div class="each col_in
				has_image
				image_top
				content_capability_blog
				content_type_article
				responsive_image_hide_
			">
                                                        <!--overlay anchor-->
                                                        <a class="link_overlay"
                                                           href="{{ asset('frontend') }}/assets/#"></a>
                                                        <!--image-->
                                                        <div class="image">
                                                            <noscript id="ari-image-1018231616732"
                                                                      data-ari="{&quot;path&quot;:&quot;media\/2019\/09\/29\/d6d134d560ebff091abad768814e88db-5d906bb51c2c5.jpg?jadewits_media_id=1473796&quot;,&quot;ratio&quot;:[16,9],&quot;alt&quot;:&quot;\u09ac\u09be\u0982\u09b2\u09be\u09a6\u09c7\u09b6-\u09ad\u09be\u09b0\u09a4 \u09b6\u09bf\u09b0\u09cb\u09aa\u09be \u09b2\u09dc\u09be\u0987 \u09b8\u09b0\u09be\u09b8\u09b0\u09bf \u09a6\u09c7\u0996\u09c1\u09a8 \u098f\u0996\u09be\u09a8\u09c7&quot;}">
                                                                <img src="{{ asset('frontend') }}/assets/contents/cache/images/400x225x1/uploads/media/2019/09/29/d6d134d560ebff091abad768814e88db-5d906bb51c2c5.jpg"
                                                                     alt="বাংলাদেশ-ভারত শিরোপা লড়াই সরাসরি দেখুন এখানে"/>
                                                            </noscript>
                                                            <script data-id="ari-image-1018231616732">
                                                                jwARI.fetch($('#ari-image-1018231616732'));
                                                            </script>
                                                            <span class="content_type"></span>
                                                        </div>
                                                        <div class="info ">
                                                            <h2 class="title_holder">
                                                                <span class="title">বাংলাদেশ-ভারত শিরোপা লড়াই সরাসরি দেখুন এখানে</span>
                                                            </h2>
                                                            <div class="additional">
                                                                <!--category/page-->
                                                                <!--author-->
                                                                <!--time-->
                                                                <!--comment count-->
                                                                <!--like count-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="div_51605" class="p_c     _col">
                            <div class="inner">
                                <div id="widget_56627" class="widget_color_ widget_wrap">
                                    <div class="widget_text  widget">
                                        <div class="widget_text_inner aunqur">
                                            <div class="content">
                                                <div class="common_google_ads">
                                                    <!-- Async AdSlot 4 for Ad unit 'Home_336x280_R2' ### Size: [[336,280],[300,250]] -->
                                                    <!-- Adslot's refresh function: googletag.pubads().refresh([gptadslots[3]]) -->
                                                    <div id='div-gpt-ad-44697-4'>
                                                        <script>
                                                            googletag.cmd.push(function () {
                                                                googletag.display('div-gpt-ad-44697-4');
                                                            });
                                                        </script>
                                                    </div>
                                                    <!-- End AdSlot 4 -->
                                                </div>
                                                <h2 class="headbar"><a href="{{ asset('frontend') }}/assets/#">অনলাইন ও
                                                        এসএমএস ভোট</h2></div>
                                        </div>
                                    </div>
                                </div>
                                <div id="widget_100793" class="widget_color_ widget_wrap">
                                    <div class="poll_widget  widget">
                                        <div class="poll_container">
                                            <div class="poll_top_part mb10 pb10">
                                                <div class="poll_question">বিনিয়োগকারীদের অভিযোগ দ্রুত নিষ্পত্তিতে
                                                    পুঁজিবাজারে আসছে অনলাইন সেবা—এতে ভোগান্তি কমবে বলে মনে করেন কি?
                                                </div>
                                            </div>
                                            <div id="jwPollAjaxWorking" class="mb10"></div>
                                            <div id="jwPollVoteFormContainer" class="mb10">
                                                <div class="poll_bottom">
                                                    <form class="mb10" onSubmit="return false;" name="vote_the_poll"
                                                          id="vote_the_poll">
                                                        <input type="hidden" name="page_id" value="37">
                                                        <input type="hidden" name="the_poll_id" value="7693">
                                                        <label>
                                                            <input type="radio" class="jPollY" name="the_vote"
                                                                   value="yes">হ্যাঁ</label>
                                                        <label>
                                                            <input type="radio" class="jPollN" name="the_vote"
                                                                   value="no">না</label>
                                                        <label>
                                                            <input type="radio" class="jPollNC" name="the_vote"
                                                                   value="no_comment">মন্তব্য নেই</label>
                                                    </form>
                                                </div>
                                                <div class="poll_button">
                                                    <div id="submit_the_poll" class="result_button fl"><a
                                                                href="{{ asset('frontend') }}/assets/javascript:">ভোট
                                                            দিন</a></div>
                                                    <div class="old_result nomarg"><a
                                                                href="{{ asset('frontend') }}/assets//home/poll">পুরোনো
                                                            ফলাফল</a></div>
                                                </div>
                                                <div class="total_vote_container">
                                                    ভোট দিয়েছেন <span class="total_vote">৮৬৭</span> জন
                                                    <br/></div>
                                            </div>
                                        </div>
                                        <script type="text/javascript">
                                            $('#jwPollAjaxWorking').hide();
                                            var the_page = '/api/online_poll/poll_process/';
                                            $("#submit_the_poll").live("click", function () {
                                                if (!$('.jPollY').is(":checked") && !$('.jPollN').is(":checked") && !$('.jPollNC').is(":checked")) {
                                                    alert('Please select your vote');
                                                    return false;
                                                }
                                                var data = $("#vote_the_poll").serialize();
                                                $('#jwPollAjaxWorking').show();
                                                $.ajax({
                                                    cache: false,
                                                    type: 'post',
                                                    dataType: 'json',
                                                    url: '/api/online_poll/poll_process/',
                                                    data: data,
                                                    beforeSend: function () {
                                                        $('#jwPollAjaxWorking').html("অনুগ্রহ করে অপেক্ষা করুন");
                                                        $('#jwPollVoteFormContainer').hide();
                                                    },
                                                    success: function (the_reply) {
                                                        if (the_reply['success'] == 1) {
                                                            $(".poll_container .total_vote").html(the_reply['count']);
                                                            $('#jwPollAjaxWorking').html(the_reply['msg']);
                                                            $('#jwPollVoteFormContainer').show();
                                                            $('#jwPollVoteFormContainer form').hide();
                                                            $("#submit_the_poll").hide();
                                                        } else if (the_reply['error'] == 1) {
                                                            $('#jwPollAjaxWorking').html(the_reply['msg']);
                                                            $('#jwPollVoteFormContainer').show();
                                                            $('#jwPollVoteFormContainer form').hide();
                                                            $("#submit_the_poll").hide();
                                                        } else if (the_reply['system_error'] == 1) {
                                                            $('#jwPollAjaxWorking').html(the_reply['msg']);
                                                            $('#jwPollVoteFormContainer').show();
                                                        }
                                                    },
                                                    error: function () {
                                                        $('#jwPollAjaxWorking').html("ভোটিং সম্পন্ন হয়নি, দুঃখিত।");
                                                        $('#jwPollVoteFormContainer').show();
                                                    }
                                                });
                                            })
                                        </script>
                                    </div>
                                </div>
                                <div id="widget_100794" class="widget_color_ widget_wrap">
                                    <div class="widget_text  widget">
                                        <div class="widget_text_inner aunqur">
                                            <div class="content">
                                                <!--
	<div class="poll_info"><p><b>SMS</b>-এ ভোট করতে টাইপ করুন AM(স্পেস) হ্যাঁ=Y, না=N, মন্তব্য নেই =C লিখে পাঠিয়ে দিন ২২২২১ নম্বরে<br>
	*** বাংলাদেশের জন্য *** চার্জ প্রযোজ্য</p></div>
	-->
                                                <style>
                                                    .poll_info {
                                                        background: #424242;
                                                        padding: 0 5%;
                                                        margin-bottom: 24px;
                                                    }

                                                    .poll_info p {
                                                        color: #fff;
                                                        font-size: 16px;
                                                        line-height: 24px;
                                                        font-weight: normal;
                                                    }

                                                    .poll_question {
                                                        padding-top: 10px;
                                                        font-size: 20px;
                                                        line-height: 28px;
                                                        color: #FFCA28;
                                                    }

                                                    .poll_button {
                                                        margin-bottom: 0;
                                                    }

                                                    .total_vote_container {
                                                        border-bottom: 0;
                                                        margin-bottom: 0;
                                                        padding-bottom: 0;
                                                    }
                                                </style>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="wrapper_55425"
                     class="wrapper special_32_5_67_5  container_fixed_height container_top_padding container_bottom_padding ">
                    <div class="hf_wrap">
                        <div class="color_theme_purple">
                            <h4 class="headbar"><a href="{{ asset('frontend') }}/assets/entertainment.html">বিনোদন</a>
                            </h4>
                        </div>
                    </div>
                    <div class="inner">
                        <div id="div_55426" class="p_d     _col">
                            <div class="inner">
                                <div id="widget_99557" class="widget_color_ widget_wrap">
                                    <div class="contents_listing  widget">
                                        <div class="contents  summery_with_list_view col_articles
				shaded_bg
							column_view
				">
                                            <div class="row">
                                                <div class="col col2">
                                                    <div class="each col_in
				has_image
				image_top
				content_capability_blog
				content_type_article
				responsive_image_hide_
			">
                                                        <!--overlay anchor-->
                                                        <a class="link_overlay"
                                                           href="{{ asset('frontend') }}/assets/#"></a>
                                                        <!--image-->
                                                        <div class="image">
                                                            <noscript id="ari-image-995571616786"
                                                                      data-ari="{&quot;path&quot;:&quot;media\/2019\/09\/29\/92a5374b33b457bd37f18ed30e165517-5d90bd50e5f11.jpg?jadewits_media_id=1473915&quot;,&quot;ratio&quot;:[16,9],&quot;alt&quot;:&quot;\u0990\u09b6\u09cd\u09ac\u09b0\u09bf\u09df\u09be\u09b0 \u09ac\u09c7\u0997\u09c1\u09a8\u09bf \u099d\u09b2\u0995&quot;}">
                                                                <img src="{{ asset('frontend') }}/assets/contents/cache/images/400x225x1/uploads/media/2019/09/29/92a5374b33b457bd37f18ed30e165517-5d90bd50e5f11.jpg"
                                                                     alt="ঐশ্বরিয়ার বেগুনি ঝলক"/>
                                                            </noscript>
                                                            <script data-id="ari-image-995571616786">
                                                                jwARI.fetch($('#ari-image-995571616786'));
                                                            </script>
                                                            <span class="content_type"></span>
                                                        </div>
                                                        <div class="info ">
                                                            <h2 class="title_holder">
                                                                <span class="title">ঐশ্বরিয়ার বেগুনি ঝলক</span>
                                                            </h2>
                                                            <div class="additional">
                                                                <!--category/page-->
                                                                <!--author-->
                                                                <!--time-->
                                                                <!--comment count-->
                                                                <!--like count-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col col2">
                                                    <div class="col_in">
                                                        <div class="listing">
                                                            <div class="each col_in
				has_image
				image_left
				content_capability_blog
				content_type_article
				responsive_image_hide_
			">
                                                                <!--overlay anchor-->
                                                                <a class="link_overlay"
                                                                   href="{{ asset('frontend') }}/assets/#"></a>
                                                                <!--image-->
                                                                <div class="image">
                                                                    <noscript id="ari-image-995571616780"
                                                                              data-ari="{&quot;path&quot;:&quot;media\/2019\/09\/29\/844e7b548d5236ac047f35634b5fb99b-5d90b43f3715f.jpg?jadewits_media_id=1473893&quot;,&quot;ratio&quot;:[16,9],&quot;alt&quot;:&quot;\u09b8\u09ae\u09be\u09b2\u09cb\u099a\u0995\u09a6\u09c7\u09b0 \u0995\u09dc\u09be \u099c\u09ac\u09be\u09ac \u09a4\u09cd\u09b0\u09bf\u09b6\u09b2\u09be\u09b0&quot;}">
                                                                        <img src="{{ asset('frontend') }}/assets/contents/cache/images/400x225x1/uploads/media/2019/09/29/844e7b548d5236ac047f35634b5fb99b-5d90b43f3715f.jpg"
                                                                             alt="সমালোচকদের কড়া জবাব ত্রিশলার"/>
                                                                    </noscript>
                                                                    <script data-id="ari-image-995571616780">
                                                                        jwARI.fetch($('#ari-image-995571616780'));
                                                                    </script>
                                                                    <span class="content_type"></span>
                                                                </div>
                                                                <div class="info ">
                                                                    <h2 class="title_holder">
                                                                        <span class="title">সমালোচকদের কড়া জবাব ত্রিশলার</span>
                                                                    </h2>
                                                                    <div class="additional">
                                                                        <!--category/page-->
                                                                        <!--author-->
                                                                        <!--time-->
                                                                        <!--comment count-->
                                                                        <!--like count-->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="each col_in
				has_image
				image_left
				content_capability_blog
				content_type_article
				responsive_image_hide_
			">
                                                                <!--overlay anchor-->
                                                                <a class="link_overlay"
                                                                   href="{{ asset('frontend') }}/assets/#"></a>
                                                                <!--image-->
                                                                <div class="image">
                                                                    <noscript id="ari-image-995571616776"
                                                                              data-ari="{&quot;path&quot;:&quot;media\/2019\/09\/29\/79b5c96426a2451923a64625bf55abab-5d90a9127ae87.jpg?jadewits_media_id=1473890&quot;,&quot;ratio&quot;:[16,9],&quot;alt&quot;:&quot;\u099f\u09be\u0995\u09be\u0997\u09c1\u09b2\u09c7\u09be \u09af\u09c7\u09a8 \u0995\u09be\u09b0\u0993 \u09aa\u0995\u09c7\u099f\u09c7 \u09a8\u09be \u09a2\u09cb\u0995\u09c7, \u09ac\u09b2\u09b2\u09c7\u09a8 \u09b6\u09be\u0995\u09bf\u09ac&quot;}">
                                                                        <img src="{{ asset('frontend') }}/assets/contents/cache/images/400x225x1/uploads/media/2019/09/29/79b5c96426a2451923a64625bf55abab-5d90a9127ae87.jpg"
                                                                             alt="টাকাগুলো যেন কারও পকেটে না ঢোকে, বললেন শাকিব"/>
                                                                    </noscript>
                                                                    <script data-id="ari-image-995571616776">
                                                                        jwARI.fetch($('#ari-image-995571616776'));
                                                                    </script>
                                                                    <span class="content_type"></span>
                                                                </div>
                                                                <div class="info ">
                                                                    <h2 class="title_holder">
                                                                        <span class="title">টাকাগুলো যেন কারও পকেটে না ঢোকে, বললেন শাকিব</span>
                                                                    </h2>
                                                                    <div class="additional">
                                                                        <!--category/page-->
                                                                        <!--author-->
                                                                        <!--time-->
                                                                        <!--comment count-->
                                                                        <!--like count-->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="each col_in
				has_image
				image_left
				content_capability_blog
				content_type_article
				responsive_image_hide_
			">
                                                                <!--overlay anchor-->
                                                                <a class="link_overlay"
                                                                   href="{{ asset('frontend') }}/assets/#"></a>
                                                                <!--image-->
                                                                <div class="image">
                                                                    <noscript id="ari-image-995571616768"
                                                                              data-ari="{&quot;path&quot;:&quot;media\/2019\/09\/29\/a7e860abfb80b553586349a340bbef6e-5d90a2f6464cc.JPG?jadewits_media_id=1473875&quot;,&quot;ratio&quot;:[16,9],&quot;alt&quot;:&quot;\u0995\u09be\u09b0\u09cd\u09a4\u09bf\u0995\u0995\u09c7 \u09aa\u09cd\u09b0\u09c7\u09ae \u09a8\u09bf\u09ac\u09c7\u09a6\u09a8, \u09ad\u09bf\u09a1\u09bf\u0993 \u09ad\u09be\u0987\u09b0\u09be\u09b2&quot;}">
                                                                        <img src="{{ asset('frontend') }}/assets/contents/cache/images/400x225x1/uploads/media/2019/09/29/a7e860abfb80b553586349a340bbef6e-5d90a2f6464cc.JPG"
                                                                             alt="কার্তিককে প্রেম নিবেদন, ভিডিও ভাইরাল"/>
                                                                    </noscript>
                                                                    <script data-id="ari-image-995571616768">
                                                                        jwARI.fetch($('#ari-image-995571616768'));
                                                                    </script>
                                                                    <span class="content_type"></span>
                                                                </div>
                                                                <div class="info ">
                                                                    <h2 class="title_holder">
                                                                        <span class="title">কার্তিককে প্রেম নিবেদন, ভিডিও ভাইরাল</span>
                                                                    </h2>
                                                                    <div class="additional">
                                                                        <!--category/page-->
                                                                        <!--author-->
                                                                        <!--time-->
                                                                        <!--comment count-->
                                                                        <!--like count-->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="each col_in
				has_image
				image_left
				content_capability_blog
				content_type_article
				responsive_image_hide_
			">
                                                                <!--overlay anchor-->
                                                                <a class="link_overlay"
                                                                   href="{{ asset('frontend') }}/assets/#"></a>
                                                                <!--image-->
                                                                <div class="image">
                                                                    <noscript id="ari-image-995571616757"
                                                                              data-ari="{&quot;path&quot;:&quot;media\/2019\/09\/29\/cfc7f4f981f1e56402e8e9d130f46315-5d90959558949.jpg?jadewits_media_id=1473863&quot;,&quot;ratio&quot;:[16,9],&quot;alt&quot;:&quot;\u0985\u09ae\u09bf\u09a4\u09be\u09ad \u0993 \u09b0\u09c7\u0996\u09be\u09b0 \u09aa\u09c1\u09b0\u09cb\u09a8\u09cb \u09aa\u09cd\u09b0\u09c7\u09ae \u0989\u0981\u0995\u09bf \u09a6\u09bf\u099a\u09cd\u099b\u09c7 \u0987\u09a8\u09b8\u09cd\u099f\u09be\u0997\u09cd\u09b0\u09be\u09ae\u09c7&quot;}">
                                                                        <img src="{{ asset('frontend') }}/assets/contents/cache/images/400x225x1/uploads/media/2019/09/29/cfc7f4f981f1e56402e8e9d130f46315-5d90959558949.jpg"
                                                                             alt="অমিতাভ ও রেখার পুরোনো প্রেম উঁকি দিচ্ছে ইনস্টাগ্রামে"/>
                                                                    </noscript>
                                                                    <script data-id="ari-image-995571616757">
                                                                        jwARI.fetch($('#ari-image-995571616757'));
                                                                    </script>
                                                                    <span class="content_type"></span>
                                                                </div>
                                                                <div class="info ">
                                                                    <h2 class="title_holder">
                                                                        <span class="title">অমিতাভ ও রেখার পুরোনো প্রেম উঁকি দিচ্ছে ইনস্টাগ্রামে</span>
                                                                    </h2>
                                                                    <div class="additional">
                                                                        <!--category/page-->
                                                                        <!--author-->
                                                                        <!--time-->
                                                                        <!--comment count-->
                                                                        <!--like count-->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="wrapper_75796" class="wrapper    ">
                                    <div class="inner">
                                        <div id="div_75801" class="p_d_b     _col">
                                            <div class="inner"><span class="force_space_hoder">&nbsp;</span></div>
                                        </div>
                                        <div id="div_75806" class="p_d_b     _col">
                                            <div class="inner"><span class="force_space_hoder">&nbsp;</span></div>
                                        </div>
                                        <div id="div_75811" class="p_d_b     _col">
                                            <div class="inner"><span class="force_space_hoder">&nbsp;</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="div_55427" class="p_c     _col">
                            <div class="inner">
                                <div id="widget_58670" class="widget_color_ widget_wrap">
                                    <div class="widget_text  widget">
                                        <div class="widget_text_inner aunqur">
                                            <div class="content">
                                                <div class="common_google_ads">
                                                    <!-- Async AdSlot 5 for Ad unit 'Home_336x280_R3' ### Size: [[336,280],[300,250]] -->
                                                    <!-- Adslot's refresh function: googletag.pubads().refresh([gptadslots[3]]) -->
                                                    <div id='div-gpt-ad-44697-5'>
                                                        <script>
                                                            googletag.cmd.push(function () {
                                                                googletag.display('div-gpt-ad-44697-5');
                                                            });
                                                        </script>
                                                    </div>
                                                    <!-- End AdSlot 4 -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="wrapper_75631"
                     class="wrapper  palo_opinion container_fixed_height container_white_bg container_top_padding container_bottom_padding ">
                    <div class="hf_wrap">
                        <div class="color_theme_">
                            <h4 class="headbar"><a href="{{ asset('frontend') }}/assets/opinion.html">মতামত</a></h4>
                        </div>
                    </div>
                    <div class="inner">
                        <div id="div_75636" class="p_p     _col">
                            <div class="inner">
                                <div id="widget_75641" class="widget_color_ widget_wrap">
                                    <div class="contents_listing  widget">
                                        <div class="contents  summery_view col_articles
							column_view
				">
                                            <div class="row">
                                                <div class="col col4">
                                                    <div class="each col_in
				image_no
				content_capability_blog
				content_type_article
				responsive_image_hide_
				m_show_featured_image_as_left
			">
                                                        <!--overlay anchor-->
                                                        <a class="link_overlay"
                                                           href="{{ asset('frontend') }}/assets/#"></a>
                                                        <!--image-->
                                                        <div class="info has_ai">
                                                            <h2 class="title_holder">
                                                                <span class="title">সৌদিতে নারী কর্মী নিগ্রহের শেষ কোথায়?</span>
                                                            </h2>
                                                            <div class="summery">
                                                                ২০১৫ সালে বাংলাদেশ থেকে সৌদি আরবে নারী গৃহকর্মী নিয়োগের
                                                                জন্য
                                                                দুই দেশের মধ্যে একটি চুক্তি...
                                                                <!--<span class="excerpt_more" title="বিস্তারিত"><span>বিস্তারিত</span></span>-->
                                                            </div>
                                                            <div class="additional">
                                                                <!--category/page-->
                                                                <!--author-->
                                                                <span class='author aitm'>মো. তৌহিদ হোসেন</span>
                                                                <!--time-->
                                                                <!--comment count-->
                                                                <a class="comments aitm" title=""
                                                                   href="{{ asset('frontend') }}/assets/index.html#comments">৯<span> মন্তব্য</span></a>
                                                                <!--<span class="comments aitm" title="মন্তব্য" >৯<span> মন্তব্য</span></span>-->
                                                                <!--like count-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col col4">
                                                    <div class="each col_in
				image_no
				content_capability_blog
				content_type_article
				responsive_image_hide_
				m_show_featured_image_as_left
			">
                                                        <!--overlay anchor-->
                                                        <a class="link_overlay"
                                                           href="{{ asset('frontend') }}/assets/#"></a>
                                                        <!--image-->
                                                        <div class="info has_ai">
                                                            <h2 class="title_holder">
                                                                <span class="title">অকার্যকর আইন টিকিয়ে রাখা অর্থহীন</span>
                                                            </h2>
                                                            <div class="summery">
                                                                এ আই মাহবুব উদ্দিন আহমেদ ঢাকা বিশ্ববিদ্যালয়ের
                                                                ক্রিমিনোলজি
                                                                বিভাগের অধ্যাপক। প্রথম আলোর সঙ্গে কথা...
                                                                <!--<span class="excerpt_more" title="বিস্তারিত"><span>বিস্তারিত</span></span>-->
                                                            </div>
                                                            <div class="additional">
                                                                <!--category/page-->
                                                                <!--author-->
                                                                <!--time-->
                                                                <!--comment count-->
                                                                <a class="comments aitm" title=""
                                                                   href="{{ asset('frontend') }}/assets/index.html#comments">৪<span> মন্তব্য</span></a>
                                                                <!--<span class="comments aitm" title="মন্তব্য" >৪<span> মন্তব্য</span></span>-->
                                                                <!--like count-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col col4">
                                                    <div class="each col_in
				image_no
				content_capability_blog
				content_type_article
				responsive_image_hide_
				m_show_featured_image_as_left
			">
                                                        <!--overlay anchor-->
                                                        <a class="link_overlay"
                                                           href="{{ asset('frontend') }}/assets/#"></a>
                                                        <!--image-->
                                                        <div class="info has_ai">
                                                            <h2 class="title_holder">
                                                                <span class="title">আইএসের ‘তথ্য জিহাদ’ এখন নতুন হুমকি</span>
                                                            </h2>
                                                            <div class="summery">
                                                                মার্কিন প্রেসিডেন্ট ডোনাল্ড ট্রাম্প আইএসের বিরুদ্ধে
                                                                লড়াইয়ে
                                                                চূড়ান্ত বিজয় ঘোষণা করে একটি টুইট...
                                                                <!--<span class="excerpt_more" title="বিস্তারিত"><span>বিস্তারিত</span></span>-->
                                                            </div>
                                                            <div class="additional">
                                                                <!--category/page-->
                                                                <!--author-->
                                                                <span class='author aitm'>অ্যান মারি স্লটার ও আসা সি ক্যাসলবেরি</span>
                                                                <!--time-->
                                                                <!--comment count-->
                                                                <!--like count-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col col4">
                                                    <div class="each col_in
				image_no
				content_capability_blog
				content_type_article
				responsive_image_hide_
				m_show_featured_image_as_left
			">
                                                        <!--overlay anchor-->
                                                        <a class="link_overlay"
                                                           href="{{ asset('frontend') }}/assets/#"></a>
                                                        <!--image-->
                                                        <div class="info ">
                                                            <h2 class="title_holder">
                                                                <span class="subtitle">টেকসই উন্নয়নের সুফল সবাই যেন পায়</span>
                                                                <span class="title">উচ্চ প্রবৃদ্ধিতে বাংলাদেশ</span>
                                                            </h2>
                                                            <div class="summery">
                                                                এশীয় উন্নয়ন ব্যাংক (এডিবি) এশিয়ার মধ্যে বাংলাদেশে সবচেয়ে
                                                                বেশি প্রবৃদ্ধি হবে বলে যে ভবিষ্যদ্বাণী...
                                                                <!--<span class="excerpt_more" title="বিস্তারিত"><span>বিস্তারিত</span></span>-->
                                                            </div>
                                                            <div class="additional">
                                                                <!--category/page-->
                                                                <!--author-->
                                                                <!--time-->
                                                                <!--comment count-->
                                                                <!--like count-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="wrapper_56737"
                     class="wrapper   container_white_bg container_top_padding container_bottom_padding ">
                    <div class="inner">
                        <div id="div_56738" class="p_p     _col">
                            <div class="inner">
                                <div id="widget_56739" class="widget_color_ widget_wrap">
                                    <div class="widget_text  widget">
                                        <div class="widget_text_inner aunqur">
                                            <div class="content">
                                                <div class="common_google_ads">
                                                    <!-- Async AdSlot 6 for Ad unit 'Home_728x90_B2' ### Size: [[970,90],[728,90],[468,60],[320,100],[320,50]] -->
                                                    <!-- Adslot's refresh function: googletag.pubads().refresh([gptadslots[5]]) -->
                                                    <div id='div-gpt-ad-44697-6'>
                                                        <script>
                                                            googletag.cmd.push(function () {
                                                                googletag.display('div-gpt-ad-44697-6');
                                                            });
                                                        </script>
                                                    </div>
                                                    <!-- End AdSlot 6 -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="wrapper_75586"
                     class="wrapper special_35_65 palo_multimedia_wrapper container_fixed_height container_top_padding container_bottom_padding ">
                    <div class="inner">
                        <div id="div_75591" class="p_d     _col">
                            <div class="hf_wrap">
                                <div class="color_theme_">
                                    <h4 class="headbar"><a href="{{ asset('frontend') }}/assets/#">ছবি</a></h4></div>
                            </div>
                            <div class="inner">
                                <div id="widget_75601" class="widget_color_ widget_wrap">
                                    <div class="single_album_gallery  widget">
                                        <div class="widget-wrapper">
                                            <div id="single_album_gallery_75601" class="swiper-container"
                                                 data-url="/photo/gallery/1616812/%E0%A6%8F%E0%A6%95-%E0%A6%9D%E0%A6%B2%E0%A6%95-%E0%A7%A9%E0%A7%A6-%E0%A6%B8%E0%A7%87%E0%A6%AA%E0%A7%8D%E0%A6%9F%E0%A7%87%E0%A6%AE%E0%A7%8D%E0%A6%AC%E0%A6%B0-%E0%A7%A8%E0%A7%A6%E0%A7%A7%E0%A7%AF">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide pop-each"
                                                         data-hash="gallery-image-1473937">
                                                        <div class="photo">
                                                        <!--<a href="{{ asset('frontend') }}/assets/javascript:" class="pop-active">-->
                                                            <a href="{{ asset('frontend') }}/assets/index.html#gallery-image-1473937">
                                                                <noscript id="ari-image-0"
                                                                          data-ari="{&quot;path&quot;:&quot;media\/2019\/09\/30\/5979e50adfe8f2c9a96f08af1f8bb43d-5d91763e0a07d.jpg&quot;,&quot;ratio&quot;:[16,9],&quot;fx_width&quot;:0}">
                                                                    <img alt=""
                                                                         src="{{ asset('frontend') }}/assets/contents/cache/images/200x0x0/uploads/media/2019/09/30/5979e50adfe8f2c9a96f08af1f8bb43d-5d91763e0a07d.jpg"/>
                                                                </noscript>
                                                                <i class="dn i-caption">মাছ শিকারের জন্য ফেলা জালে চরে
                                                                    বেড়াচ্ছে হাঁসেরা। দামিহা এলাকা, তাড়াইল, কিশোরগঞ্জ,
                                                                    ৩০
                                                                    সেপ্টেম্বর। ছবি: তাফসিলুল আজিজ</i>
                                                            </a>
                                                            <!--</a>-->
                                                        </div>
                                                        <span>
									মাছ শিকারের জন্য ফেলা জালে চরে বেড়াচ্ছে হাঁসেরা। দামিহা এলাকা, তাড়াইল, কিশোরগঞ্জ, ৩০ সেপ্টেম্বর। ছবি: তাফসিলুল আজিজ																	<i>ছবি: </i>
																</span>
                                                    </div>
                                                </div>
                                                <!-- Add Pagination -->
                                                <!--<div class="swiper-pagination"></div>-->
                                                <!-- Add Arrows -->
                                                <div class="swiper-button-next"></div>
                                                <div class="swiper-button-prev"></div>
                                            </div>
                                            <div class="info">
                                                <div class="swiper-container-callback">
                                                    <h4 class="title mb10"><a href="{{ asset('frontend') }}/assets/#">এক
                                                            ঝলক
                                                            (৩০ সেপ্টেম্বর,
                                                            ২০১৯)</a></h4>
                                                    <span class="caption">&nbsp;</span>
                                                </div>
                                            </div>
                                            <script>
                                                var swipersingle_album_gallery_75601 = new Swiper('#single_album_gallery_75601', {
                                                    onTransitionStart: function (s) {
                                                        var $caption = $(s.container).parent().find('.swiper-container-callback .caption');
                                                        $caption.hide().html($('.i-caption', s.slides[s.activeIndex]).html()).fadeIn(s.params.speed);
                                                        if (s.isEnd) {
                                                            $(s.container).parent().fadeOut();
                                                            var url = $(s.container).data('url') + '#' + $(s.slides[s.activeIndex]).data('hash');
                                                            window.location.href = url;
                                                            return false;
                                                        }
                                                    },
                                                    onSlideChangeStart: function (swiper) {
                                                        $.force_appear();
                                                    },
                                                    onInit: function (s) {
                                                        //var container = s.container;
                                                        var $caption = $(s.container).parent().find('.swiper-container-callback .caption');
                                                        $caption.html($('.i-caption', s.slides[s.activeIndex]).html());
                                                        $('#single_album_gallery_75601').find('[data-ari]').each(function () {
                                                            jwARI.fetch($(this));
                                                        });
                                                        $('.photo>a', $(s.container)).live('click', function () {
                                                            var url = $(s.container).data('url') + '#' + $(s.slides[s.activeIndex]).data('hash');
                                                            window.location.href = url;
                                                            return false;
                                                        });
                                                    },
                                                    nextButton: '.swiper-button-next',
                                                    prevButton: '.swiper-button-prev'
                                                });
                                            </script>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="div_75596" class="p_c     _col">
                            <div class="hf_wrap">
                                <div class="color_theme_">
                                    <h4 class="headbar"><a href="{{ asset('frontend') }}/assets/#">ভিডিও</a></h4></div>
                            </div>
                            <div class="inner">
                                <div id="widget_75611" class="widget_color_ widget_wrap">
                                    <div class="contents_listing  widget">
                                        <div class="contents
				">
                                            <div class="row">
                                                <div class="col col1">
                                                    <div class="col_in">
                                                        <div class="listing">
                                                            <div class="each col_in
				has_image
				image_left
				content_capability_gallery
				content_type_watch
				responsive_image_hide_
				m_show_featured_image_as_left
			">
                                                                <!--overlay anchor-->
                                                                <a class="link_overlay"
                                                                   href="{{ asset('frontend') }}/assets/#"></a>
                                                                <!--image-->
                                                                <div class="image">
                                                                    <noscript id="ari-image-756111616794"
                                                                              data-ari="{&quot;path&quot;:&quot;media\/2019\/09\/29\/a844258a13f712a39beddc1aaebf07b1-5d90cc89932de.jpg?jadewits_media_id=1473919&quot;,&quot;ratio&quot;:[16,9],&quot;alt&quot;:&quot;\u09a6\u09c1\u09b0\u09cd\u0997\u09be\u09aa\u09c2\u099c\u09be\u09b0 \u09a8\u09a4\u09c1\u09a8 \u0997\u09be\u09a8 \u09a8\u09bf\u09df\u09c7 \u098f\u09b2\u09c7\u09a8 \u09b8\u09a8\u09cd\u09a6\u09c0\u09aa\u09a8 || \u09b2\u09be\u0995\u09cd\u09b8 \u0995\u09cd\u09af\u09be\u09ab\u09c7 \u09b2\u09be\u0987\u09ad || \u09aa\u09b0\u09cd\u09ac \u09e8\u09ea\u09e6&quot;}">
                                                                        <img src="{{ asset('frontend') }}/assets/contents/cache/images/400x225x1/uploads/media/2019/09/29/a844258a13f712a39beddc1aaebf07b1-5d90cc89932de.jpg"
                                                                             alt="দুর্গাপূজার নতুন গান নিয়ে এলেন সন্দীপন || লাক্স ক্যাফে লাইভ || পর্ব ২৪০"/>
                                                                    </noscript>
                                                                    <script data-id="ari-image-756111616794">
                                                                        jwARI.fetch($('#ari-image-756111616794'));
                                                                    </script>
                                                                    <span class="content_type"></span>
                                                                </div>
                                                                <div class="info ">
                                                                    <h2 class="title_holder">
                                                                        <span class="title">দুর্গাপূজার নতুন গান নিয়ে এলেন সন্দীপন || লাক্স ক্যাফে লাইভ || পর্ব ২৪০</span>
                                                                    </h2>
                                                                    <div class="additional">
                                                                        <!--category/page-->
                                                                        <!--author-->
                                                                        <!--time-->
                                                                        <!--comment count-->
                                                                        <!--like count-->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="each col_in
				has_image
				image_left
				content_capability_gallery
				content_type_watch
				responsive_image_hide_
				m_show_featured_image_as_left
			">
                                                                <!--overlay anchor-->
                                                                <a class="link_overlay"
                                                                   href="{{ asset('frontend') }}/assets/#"></a>
                                                                <!--image-->
                                                                <div class="image">
                                                                    <noscript id="ari-image-756111616793"
                                                                              data-ari="{&quot;path&quot;:&quot;media\/2019\/09\/29\/d8a1ac018d6712bb7ff5206c08209f37-5d90cbda4c66e.jpg?jadewits_media_id=1473918&quot;,&quot;ratio&quot;:[16,9],&quot;alt&quot;:&quot;\u09ae\u09cc\u09b8\u09c1\u09ae\u09bf \u09ac\u09be\u09df\u09c1\u09b0 \u09aa\u09cd\u09b0\u09ad\u09be\u09ac\u09c7 \u099d\u09b0\u099b\u09c7 \u09ac\u09c3\u09b7\u09cd\u099f\u09bf \u0986\u09b0\u0993 \u099d\u09b0\u09ac\u09c7&quot;}">
                                                                        <img src="{{ asset('frontend') }}/assets/contents/cache/images/400x225x1/uploads/media/2019/09/29/d8a1ac018d6712bb7ff5206c08209f37-5d90cbda4c66e.jpg"
                                                                             alt="মৌসুমি বায়ুর প্রভাবে ঝরছে বৃষ্টি আরও ঝরবে"/>
                                                                    </noscript>
                                                                    <script data-id="ari-image-756111616793">
                                                                        jwARI.fetch($('#ari-image-756111616793'));
                                                                    </script>
                                                                    <span class="content_type"></span>
                                                                </div>
                                                                <div class="info ">
                                                                    <h2 class="title_holder">
                                                                        <span class="title">মৌসুমি বায়ুর প্রভাবে ঝরছে বৃষ্টি আরও ঝরবে</span>
                                                                    </h2>
                                                                    <div class="additional">
                                                                        <!--category/page-->
                                                                        <!--author-->
                                                                        <!--time-->
                                                                        <!--comment count-->
                                                                        <!--like count-->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="each col_in
				has_image
				image_left
				content_capability_gallery
				content_type_watch
				responsive_image_hide_
				m_show_featured_image_as_left
			">
                                                                <!--overlay anchor-->
                                                                <a class="link_overlay"
                                                                   href="{{ asset('frontend') }}/assets/#"></a>
                                                                <!--image-->
                                                                <div class="image">
                                                                    <noscript id="ari-image-756111616764"
                                                                              data-ari="{&quot;path&quot;:&quot;media\/2019\/09\/29\/ea5ea864e49b12ac5181cd11e1a92173-5d909ad4261eb.jpg?jadewits_media_id=1473866&quot;,&quot;ratio&quot;:[16,9],&quot;alt&quot;:&quot;\u09a4\u09c1\u09b2\u09bf \u0993 \u0995\u09cd\u09af\u09be\u09ae\u09c7\u09b0\u09be\u09df \u09b8\u09ab\u09b2 \u098f\u0995 \u09b6\u09bf\u09b2\u09cd\u09aa\u09c0\u09b0 \u0995\u09a5\u09be&quot;}">
                                                                        <img src="{{ asset('frontend') }}/assets/contents/cache/images/400x225x1/uploads/media/2019/09/29/ea5ea864e49b12ac5181cd11e1a92173-5d909ad4261eb.jpg"
                                                                             alt="তুলি ও ক্যামেরায় সফল এক শিল্পীর কথা"/>
                                                                    </noscript>
                                                                    <script data-id="ari-image-756111616764">
                                                                        jwARI.fetch($('#ari-image-756111616764'));
                                                                    </script>
                                                                    <span class="content_type"></span>
                                                                </div>
                                                                <div class="info ">
                                                                    <h2 class="title_holder">
                                                                        <span class="title">তুলি ও ক্যামেরায় সফল এক শিল্পীর কথা</span>
                                                                    </h2>
                                                                    <div class="additional">
                                                                        <!--category/page-->
                                                                        <!--author-->
                                                                        <!--time-->
                                                                        <!--comment count-->
                                                                        <!--like count-->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="each col_in
				has_image
				image_left
				content_capability_gallery
				content_type_watch
				responsive_image_hide_
				m_show_featured_image_as_left
			">
                                                                <!--overlay anchor-->
                                                                <a class="link_overlay"
                                                                   href="{{ asset('frontend') }}/assets/#"></a>
                                                                <!--image-->
                                                                <div class="image">
                                                                    <noscript id="ari-image-756111616232"
                                                                              data-ari="{&quot;path&quot;:&quot;media\/2019\/09\/29\/1d6b4e8e283cbd3cc22cc9a7174f93ce-5d906c10ad4d9.jpg?jadewits_media_id=1473797&quot;,&quot;ratio&quot;:[16,9],&quot;alt&quot;:&quot;\u0985\u09ad\u09bf\u09af\u09be\u09a4\u09cd\u09b0\u09bf\u0995 \u0987\u09ae\u09a4\u09bf\u09df\u09be\u099c&quot;}">
                                                                        <img src="{{ asset('frontend') }}/assets/contents/cache/images/400x225x1/uploads/media/2019/09/29/1d6b4e8e283cbd3cc22cc9a7174f93ce-5d906c10ad4d9.jpg"
                                                                             alt="অভিযাত্রিক ইমতিয়াজ"/>
                                                                    </noscript>
                                                                    <script data-id="ari-image-756111616232">
                                                                        jwARI.fetch($('#ari-image-756111616232'));
                                                                    </script>
                                                                    <span class="content_type"></span>
                                                                </div>
                                                                <div class="info ">
                                                                    <h2 class="title_holder">
                                                                        <span class="title">অভিযাত্রিক ইমতিয়াজ</span>
                                                                    </h2>
                                                                    <div class="additional">
                                                                        <!--category/page-->
                                                                        <!--author-->
                                                                        <!--time-->
                                                                        <!--comment count-->
                                                                        <!--like count-->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="wrapper_55579"
                     class="wrapper special_35_65  container_fixed_height container_white_bg container_top_padding container_bottom_padding ">
                    <div class="inner">
                        <div id="div_55580" class="p_d   container_fixed_height container_white_bg  _col">
                            <div class="hf_wrap">
                                <div class="color_theme_">
                                    <h4 class="headbar"><a href="{{ asset('frontend') }}/assets/#">প্র স্বপ্ন নিয়ে</a>
                                    </h4>
                                </div>
                            </div>
                            <div class="inner">
                                <div id="widget_75671" class="widget_color_ widget_wrap">
                                    <div class="contents_listing_tag  widget">
                                        <div class="contents  summery_view col_articles
							column_view
				">
                                            <div class="row">
                                                <div class="col col3">
                                                    <div class="each col_in
					has_image
					image_top
					content_capability_blog
					content_type_article
					responsive_image_hide_
				">
                                                        <!--overlay anchor-->
                                                        <a class="link_overlay"
                                                           href="{{ asset('frontend') }}/assets/#"></a>
                                                        <!--image-->
                                                        <div class="image">
                                                            <noscript id="ari-image-756711616735"
                                                                      data-ari="{&quot;path&quot;:&quot;media\/2019\/09\/29\/0258e9f9f45258f9b515e15f01e11c5c-5d9071baefba1.jpg?jadewits_media_id=1473799&quot;,&quot;ratio&quot;:[16,9],&quot;alt&quot;:&quot;\u09b8\u09ae\u09c3\u09a6\u09cd\u09a7 \u09b8\u09bf\u09ad\u09bf\u09b0 \u099c\u09a8\u09cd\u09af&quot;}">
                                                                <img src="{{ asset('frontend') }}/assets/contents/cache/images/400x225x1/uploads/media/2019/09/29/0258e9f9f45258f9b515e15f01e11c5c-5d9071baefba1.jpg"
                                                                     alt="সমৃদ্ধ সিভির জন্য"/>
                                                            </noscript>
                                                            <script data-id="ari-image-756711616735">
                                                                jwARI.fetch($('#ari-image-756711616735'));
                                                            </script>
                                                            <span class="content_type"></span>
                                                        </div>
                                                        <div class="info ">
                                                            <h2 class="title_holder">
                                                                <span class="title">সমৃদ্ধ সিভির জন্য</span>
                                                            </h2>
                                                            <div class="summery">
                                                                আমরা অনেক সময় ভাবি, আগে পড়ালেখা শেষ হোক, তারপর
                                                                জীবনবৃত্তান্ত
                                                                বা সিভি লিখতে...
                                                                <!--<span class="excerpt_more" title="বিস্তারিত"><span>বিস্তারিত</span></span>-->
                                                            </div>
                                                            <div class="additional">
                                                                <!--category/page-->
                                                                <!--author-->
                                                                <!--time-->
                                                                <!--comment count-->
                                                                <!--like count-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col col3">
                                                    <div class="each col_in
				has_image
				image_top
				content_capability_blog
				content_type_article
				responsive_image_hide_
			">
                                                        <!--overlay anchor-->
                                                        <a class="link_overlay"
                                                           href="{{ asset('frontend') }}/assets/#"></a>
                                                        <!--image-->
                                                        <div class="image">
                                                            <noscript id="ari-image-756711616731"
                                                                      data-ari="{&quot;path&quot;:&quot;media\/2019\/09\/29\/18fabab040428080f11bdd905a1d0c2c-5d90697073b14.jpg?jadewits_media_id=1473781&quot;,&quot;ratio&quot;:[16,9],&quot;alt&quot;:&quot;\u0995\u09ae\u09a8\u0993\u09df\u09c7\u09b2\u09a5 \u09ac\u09c3\u09a4\u09cd\u09a4\u09bf \u09aa\u09c7\u09a4\u09c7 \u09b9\u09b2\u09c7&quot;}">
                                                                <img src="{{ asset('frontend') }}/assets/contents/cache/images/400x225x1/uploads/media/2019/09/29/18fabab040428080f11bdd905a1d0c2c-5d90697073b14.jpg"
                                                                     alt="কমনওয়েলথ বৃত্তি পেতে হলে"/>
                                                            </noscript>
                                                            <script data-id="ari-image-756711616731">
                                                                jwARI.fetch($('#ari-image-756711616731'));
                                                            </script>
                                                            <span class="content_type"></span>
                                                        </div>
                                                        <div class="info ">
                                                            <h2 class="title_holder">
                                                                <span class="title">কমনওয়েলথ বৃত্তি পেতে হলে</span>
                                                            </h2>
                                                            <div class="summery">
                                                                কমনওয়েলথ বৃত্তির আদ্যোপান্ত জানিয়েছেন ঢাকা
                                                                বিশ্ববিদ্যালয়ের
                                                                ব্যাংকিং অ্যান্ড...
                                                                <!--<span class="excerpt_more" title="বিস্তারিত"><span>বিস্তারিত</span></span>-->
                                                            </div>
                                                            <div class="additional">
                                                                <!--category/page-->
                                                                <!--author-->
                                                                <!--time-->
                                                                <!--comment count-->
                                                                <!--like count-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col col3">
                                                    <div class="each col_in
				has_image
				image_top
				content_capability_blog
				content_type_article
				responsive_image_hide_
			">
                                                        <!--overlay anchor-->
                                                        <a class="link_overlay"
                                                           href="{{ asset('frontend') }}/assets/#"></a>
                                                        <!--image-->
                                                        <div class="image">
                                                            <noscript id="ari-image-756711616710"
                                                                      data-ari="{&quot;path&quot;:&quot;media\/2019\/09\/29\/5cf0713c4cc2969eddc3425891318756-5d9057c7dae19.jpg?jadewits_media_id=1473749&quot;,&quot;ratio&quot;:[16,9],&quot;alt&quot;:&quot;\u09ac\u09bf\u099c\u09cd\u099e\u09be\u09a8\u09c7 \u09ad\u09df \u0995\u09c0\u09b8\u09c7!&quot;}">
                                                                <img src="{{ asset('frontend') }}/assets/contents/cache/images/400x225x1/uploads/media/2019/09/29/5cf0713c4cc2969eddc3425891318756-5d9057c7dae19.jpg"
                                                                     alt="বিজ্ঞানে ভয় কীসে!"/>
                                                            </noscript>
                                                            <script data-id="ari-image-756711616710">
                                                                jwARI.fetch($('#ari-image-756711616710'));
                                                            </script>
                                                            <span class="content_type"></span>
                                                        </div>
                                                        <div class="info ">
                                                            <h2 class="title_holder">
                                                                <span class="title">বিজ্ঞানে ভয় কীসে!</span>
                                                            </h2>
                                                            <div class="summery">
                                                                এক বনাম দশ। একাই দশজনের বিপরীতে দাবা খেলতে নেমেছিলেন
                                                                গ্র্যান্ডমাস্টার এনামুল...
                                                                <!--<span class="excerpt_more" title="বিস্তারিত"><span>বিস্তারিত</span></span>-->
                                                            </div>
                                                            <div class="additional">
                                                                <!--category/page-->
                                                                <!--author-->
                                                                <!--time-->
                                                                <!--comment count-->
                                                                <!--like count-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="div_55581" class="p_c     _col">
                            <div class="hf_wrap">
                                <div class="color_theme_">
                                    <h4 class="headbar"><a href="{{ asset('frontend') }}/assets/#">ছবির গল্প</a></h4>
                                </div>
                            </div>
                            <div class="inner">
                                <div id="widget_57874" class="widget_color_ widget_wrap">
                                    <div class="contents_listing  widget">
                                        <div class="contents  summery_with_list_view
				">
                                            <div class="row">
                                                <div class="col col1">
                                                    <div class="each col_in
				has_image
				image_top
				content_capability_blog
				content_type_article
				responsive_image_hide_
				m_show_image_as_top
			">
                                                        <!--overlay anchor-->
                                                        <a class="link_overlay"
                                                           href="{{ asset('frontend') }}/assets/#"></a>
                                                        <!--image-->
                                                        <div class="image">
                                                            <noscript id="ari-image-578741616782"
                                                                      data-ari="{&quot;path&quot;:&quot;media\/2019\/09\/29\/65d49998f461401cadd1eecb8f84bc2b-5d90b7d649e25.jpg?jadewits_media_id=1473901&quot;,&quot;ratio&quot;:[16,9],&quot;alt&quot;:&quot;\u09ac\u09c3\u09b7\u09cd\u099f\u09bf\u09a4\u09c7 \u09ad\u09cb\u0997\u09be\u09a8\u09cd\u09a4\u09bf&quot;}">
                                                                <img src="{{ asset('frontend') }}/assets/contents/cache/images/400x225x1/uploads/media/2019/09/29/65d49998f461401cadd1eecb8f84bc2b-5d90b7d649e25.jpg"
                                                                     alt="বৃষ্টিতে ভোগান্তি"/>
                                                            </noscript>
                                                            <script data-id="ari-image-578741616782">
                                                                jwARI.fetch($('#ari-image-578741616782'));
                                                            </script>
                                                            <span class="content_type"></span>
                                                        </div>
                                                        <div class="info ">
                                                            <h2 class="title_holder">
                                                                <span class="title">বৃষ্টিতে ভোগান্তি</span>
                                                            </h2>
                                                            <div class="additional">
                                                                <!--category/page-->
                                                                <!--author-->
                                                                <!--time-->
                                                                <!--comment count-->
                                                                <!--like count-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div id="wrapper_58679"
                     class="wrapper  palo_flex_bg pao_col_3 container_top_padding container_bottom_padding ">
                    <div class="inner">
                        <div id="div_58682" class="p_b  footer_only_mobile   _col">
                            <div class="hf_wrap">
                                <div class="color_theme_">
                                    <h4 class="headbar"><a href="{{ asset('frontend') }}/assets/international.html">আন্তর্জাতিক</a>
                                    </h4></div>
                            </div>
                            <div class="inner">
                                <div id="widget_58691" class="widget_color_ widget_wrap">
                                    <div class="contents_listing  widget">
                                        <div class="contents  summery_with_list_view
				shaded_bg
				">
                                            <div class="row">
                                                <div class="col col1">
                                                    <div class="each col_in
				has_image
				image_top
				content_capability_blog
				content_type_article
				responsive_image_hide_
				m_show_image_as_top
			">
                                                        <!--overlay anchor-->
                                                        <a class="link_overlay"
                                                           href="{{ asset('frontend') }}/assets/#"></a>
                                                        <!--image-->
                                                        <div class="image">
                                                            <noscript id="ari-image-586911616763"
                                                                      data-ari="{&quot;path&quot;:&quot;media\/2019\/09\/29\/dc7582906b6db07dfa4a96849452bed8-5d909a5f3b38c.jpg?jadewits_media_id=1473865&quot;,&quot;ratio&quot;:[16,9],&quot;alt&quot;:&quot;\u09ac\u09be\u09a6\u09b6\u09be\u09b9 \u09b8\u09be\u09b2\u09ae\u09be\u09a8\u09c7\u09b0 \u09a6\u09c7\u09b9\u09b0\u0995\u09cd\u09b7\u09c0 \u0997\u09c1\u09b2\u09bf\u09a4\u09c7 \u09a8\u09bf\u09b9\u09a4&quot;}">
                                                                <img src="{{ asset('frontend') }}/assets/contents/cache/images/400x225x1/uploads/media/2019/09/29/dc7582906b6db07dfa4a96849452bed8-5d909a5f3b38c.jpg"
                                                                     alt="বাদশাহ সালমানের দেহরক্ষী গুলিতে নিহত"/>
                                                            </noscript>
                                                            <script data-id="ari-image-586911616763">
                                                                jwARI.fetch($('#ari-image-586911616763'));
                                                            </script>
                                                            <span class="content_type"></span>
                                                        </div>
                                                        <div class="info ">
                                                            <h2 class="title_holder">
                                                                <span class="title">বাদশাহ সালমানের দেহরক্ষী গুলিতে নিহত</span>
                                                            </h2>
                                                            <div class="summery">
                                                                সৌদি আরবের বাদশাহ সালমান বিন আবদুল আজিজ আল সৌদের
                                                                ব্যক্তিগত
                                                                দেহরক্ষী মেজর...
                                                                <!--<span class="excerpt_more" title="বিস্তারিত"><span>বিস্তারিত</span></span>-->
                                                            </div>
                                                            <div class="additional">
                                                                <!--category/page-->
                                                                <!--author-->
                                                                <!--time-->
                                                                <!--comment count-->
                                                                <!--like count-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col col1">
                                                    <div class="col_in">
                                                        <div class="listing">
                                                            <div class="each col_in
				image_no
				content_capability_blog
				content_type_article
				responsive_image_hide_
				m_show_image_as_top
			">
                                                                <!--overlay anchor-->
                                                                <a class="link_overlay"
                                                                   href="{{ asset('frontend') }}/assets/#"></a>
                                                                <!--image-->
                                                                <div class="info ">
                                                                    <h2 class="title_holder">
                                                                        <span class="title">অবরুদ্ধ কাশ্মীরে গাছেই আপেল পচাচ্ছেন চাষিরা</span>
                                                                    </h2>
                                                                    <div class="additional">
                                                                        <!--category/page-->
                                                                        <!--author-->
                                                                        <!--time-->
                                                                        <!--comment count-->
                                                                        <!--like count-->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="each col_in
				image_no
				content_capability_blog
				content_type_article
				responsive_image_hide_
				m_show_image_as_top
			">
                                                                <!--overlay anchor-->
                                                                <a class="link_overlay"
                                                                   href="{{ asset('frontend') }}/assets/#"></a>
                                                                <!--image-->
                                                                <div class="info ">
                                                                    <h2 class="title_holder">
                                                                        <span class="title">কাশ্মীরে রক্তগঙ্গা বইবে: জাতিসংঘে ইমরান</span>
                                                                    </h2>
                                                                    <div class="additional">
                                                                        <!--category/page-->
                                                                        <!--author-->
                                                                        <!--time-->
                                                                        <!--comment count-->
                                                                        <!--like count-->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='bottom'>
                                            <a class="more_link"
                                               href="{{ asset('frontend') }}/assets/international.html">আরও</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="div_58685" class="p_b  footer_only_mobile   _col">
                            <div class="hf_wrap">
                                <div class="color_theme_purple">
                                    <h4 class="headbar"><a href="{{ asset('frontend') }}/assets/#">দূর পরবাস</a></h4>
                                </div>
                            </div>
                            <div class="inner">
                                <div id="widget_58694" class="widget_color_ widget_wrap">
                                    <div class="contents_listing  widget">
                                        <div class="contents  summery_with_list_view
				shaded_bg
				">
                                            <div class="row">
                                                <div class="col col1">
                                                    <div class="each col_in
				has_image
				image_top
				content_capability_blog
				content_type_article
				responsive_image_hide_
				m_show_image_as_top
			">
                                                        <!--overlay anchor-->
                                                        <a class="link_overlay"
                                                           href="{{ asset('frontend') }}/assets/#"></a>
                                                        <!--image-->
                                                        <div class="image">
                                                            <noscript id="ari-image-586941616767"
                                                                      data-ari="{&quot;path&quot;:&quot;media\/2019\/09\/29\/6f828d69f115d87f9f7d04ec58198003-5d90a07d794f1.jpg?jadewits_media_id=1473873&quot;,&quot;ratio&quot;:[16,9],&quot;alt&quot;:&quot;\u0987\u0997\u09b2\u09c7\u09b0 \u09a6\u09cd\u09ac\u09c0\u09aa \u09b2\u0982\u0995\u09be\u09ac\u09bf&quot;}">
                                                                <img src="{{ asset('frontend') }}/assets/contents/cache/images/400x225x1/uploads/media/2019/09/29/6f828d69f115d87f9f7d04ec58198003-5d90a07d794f1.jpg"
                                                                     alt="ইগলের দ্বীপ লংকাবি"/>
                                                            </noscript>
                                                            <script data-id="ari-image-586941616767">
                                                                jwARI.fetch($('#ari-image-586941616767'));
                                                            </script>
                                                            <span class="content_type"></span>
                                                        </div>
                                                        <div class="info ">
                                                            <h2 class="title_holder">
                                                                <span class="subtitle">বেড়ানো</span> <span
                                                                        class="title">ইগলের দ্বীপ লংকাবি</span>
                                                            </h2>
                                                            <div class="summery">
                                                                মালয়েশিয়ায় দর্শনীয় স্থানের মধ্যে অন্যতম ইগলের দ্বীপখ্যাত
                                                                লংকাবি। দেশটির...
                                                                <!--<span class="excerpt_more" title="বিস্তারিত"><span>বিস্তারিত</span></span>-->
                                                            </div>
                                                            <div class="additional">
                                                                <!--category/page-->
                                                                <!--author-->
                                                                <!--time-->
                                                                <!--comment count-->
                                                                <!--like count-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col col1">
                                                    <div class="col_in">
                                                        <div class="listing">
                                                            <div class="each col_in
				image_no
				content_capability_blog
				content_type_article
				responsive_image_hide_
				m_show_image_as_top
			">
                                                                <!--overlay anchor-->
                                                                <a class="link_overlay"
                                                                   href="{{ asset('frontend') }}/assets/#"></a>
                                                                <!--image-->
                                                                <div class="info ">
                                                                    <h2 class="title_holder">
                                                                        <span class="title">মুখচোরা</span>
                                                                    </h2>
                                                                    <div class="additional">
                                                                        <!--category/page-->
                                                                        <!--author-->
                                                                        <!--time-->
                                                                        <!--comment count-->
                                                                        <!--like count-->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="each col_in
				image_no
				content_capability_blog
				content_type_article
				responsive_image_hide_
				m_show_image_as_top
			">
                                                                <!--overlay anchor-->
                                                                <a class="link_overlay"
                                                                   href="{{ asset('frontend') }}/assets/#"></a>
                                                                <!--image-->
                                                                <div class="info ">
                                                                    <h2 class="title_holder">
                                                                        <span class="title">বিদেশ বিভুঁইয়ে শূন্যতা</span>
                                                                    </h2>
                                                                    <div class="additional">
                                                                        <!--category/page-->
                                                                        <!--author-->
                                                                        <!--time-->
                                                                        <!--comment count-->
                                                                        <!--like count-->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='bottom'>
                                            <a class="more_link" href="{{ asset('frontend') }}/assets/#">আরও</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="div_58688" class="p_b  footer_only_mobile   _col">
                            <div class="hf_wrap">
                                <div class="color_theme_amber">
                                    <h4 class="headbar"><a href="{{ asset('frontend') }}/assets/#">উত্তর আমেরিকা</a>
                                    </h4>
                                </div>
                            </div>
                            <div class="inner">
                                <div id="widget_58697" class="widget_color_ widget_wrap">
                                    <div class="contents_listing  widget">
                                        <div class="contents  summery_with_list_view
				shaded_bg
				">
                                            <div class="row">
                                                <div class="col col1">
                                                    <div class="each col_in
				has_image
				image_top
				content_capability_blog
				content_type_article
				responsive_image_hide_
				m_show_image_as_top
			">
                                                        <!--overlay anchor-->
                                                        <a class="link_overlay"
                                                           href="{{ asset('frontend') }}/assets/#"></a>
                                                        <!--image-->
                                                        <div class="image">
                                                            <noscript id="ari-image-586971616820"
                                                                      data-ari="{&quot;path&quot;:&quot;media\/2019\/09\/30\/3a5ab778da1584cc670136ed0f0a70b7-5d9189547a232.jpg?jadewits_media_id=1473941&quot;,&quot;ratio&quot;:[16,9],&quot;alt&quot;:&quot;\u099f\u09cd\u09b0\u09be\u09ae\u09cd\u09aa\u09c7\u09b0 \u0985\u09ad\u09bf\u09b6\u0982\u09b8\u09a8\u09c7\u09b0 \u09aa\u0995\u09cd\u09b7\u09c7 \u099c\u09a8\u09b8\u09ae\u09b0\u09cd\u09a5\u09a8 \u09ac\u09be\u09dc\u099b\u09c7&quot;}">
                                                                <img src="{{ asset('frontend') }}/assets/contents/cache/images/400x225x1/uploads/media/2019/09/30/3a5ab778da1584cc670136ed0f0a70b7-5d9189547a232.jpg"
                                                                     alt="ট্রাম্পের অভিশংসনের পক্ষে জনসমর্থন বাড়ছে"/>
                                                            </noscript>
                                                            <script data-id="ari-image-586971616820">
                                                                jwARI.fetch($('#ari-image-586971616820'));
                                                            </script>
                                                            <span class="content_type"></span>
                                                        </div>
                                                        <div class="info ">
                                                            <h2 class="title_holder">
                                                                <span class="title">ট্রাম্পের অভিশংসনের পক্ষে জনসমর্থন বাড়ছে</span>
                                                            </h2>
                                                            <div class="summery">
                                                                মার্কিন টেলিভিশন চ্যানেল সিবিএস নিউজের সবশেষ জাতীয় জনমত
                                                                জরিপ
                                                                অনুসারে,...
                                                                <!--<span class="excerpt_more" title="বিস্তারিত"><span>বিস্তারিত</span></span>-->
                                                            </div>
                                                            <div class="additional">
                                                                <!--category/page-->
                                                                <!--author-->
                                                                <!--time-->
                                                                <!--comment count-->
                                                                <!--like count-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col col1">
                                                    <div class="col_in">
                                                        <div class="listing">
                                                            <div class="each col_in
				image_no
				content_capability_blog
				content_type_article
				responsive_image_hide_
				m_show_image_as_top
			">
                                                                <!--overlay anchor-->
                                                                <a class="link_overlay"
                                                                   href="{{ asset('frontend') }}/assets/#"></a>
                                                                <!--image-->
                                                                <div class="info ">
                                                                    <h2 class="title_holder">
                                                                        <span class="title">৯/১১-এর হামলা কেন আগাম বুঝতে পারেনি সিআইএ?</span>
                                                                    </h2>
                                                                    <div class="additional">
                                                                        <!--category/page-->
                                                                        <!--author-->
                                                                        <!--time-->
                                                                        <!--comment count-->
                                                                        <!--like count-->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="each col_in
				image_no
				content_capability_blog
				content_type_article
				responsive_image_hide_
				m_show_image_as_top
			">
                                                                <!--overlay anchor-->
                                                                <a class="link_overlay"
                                                                   href="{{ asset('frontend') }}/assets/#"></a>
                                                                <!--image-->
                                                                <div class="info ">
                                                                    <h2 class="title_holder">
                                                                        <span class="title">জনমত ট্রাম্পের অভিশংসন তদন্তের পক্ষে: পেলোসি</span>
                                                                    </h2>
                                                                    <div class="additional">
                                                                        <!--category/page-->
                                                                        <!--author-->
                                                                        <!--time-->
                                                                        <!--comment count-->
                                                                        <!--like count-->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='bottom'>
                                            <a class="more_link" href="{{ asset('frontend') }}/assets/#">আরও</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="wrapper_75536"
                     class="wrapper  palo_flex_bg container_fixed_height container_100 container_top_padding container_bottom_padding ">
                    <div class="inner">
                        <div id="div_75541" class="p_c     _col">
                            <div class="hf_wrap">
                                <div class="color_theme_">
                                    <h4 class="headbar"><a
                                                href="{{ asset('frontend') }}/assets/economy.html">অর্থনীতি</a>
                                    </h4></div>
                            </div>
                            <div class="inner">
                                <div id="widget_75561" class="widget_color_ widget_wrap">
                                    <div class="contents_listing  widget">
                                        <div class="contents
				shaded_bg
				">
                                            <div class="row">
                                                <div class="col col1">
                                                    <div class="col_in">
                                                        <div class="listing">
                                                            <div class="each col_in
				image_no
				content_capability_blog
				content_type_article
				responsive_image_hide_
			">
                                                                <!--overlay anchor-->
                                                                <a class="link_overlay"
                                                                   href="{{ asset('frontend') }}/assets/#"></a>
                                                                <!--image-->
                                                                <div class="info ">
                                                                    <h2 class="title_holder">
                                                                        <span class="title">দেশে পালসারের নতুন মডেল</span>
                                                                    </h2>
                                                                    <div class="additional">
                                                                        <!--category/page-->
                                                                        <!--author-->
                                                                        <!--time-->
                                                                        <!--comment count-->
                                                                        <!--like count-->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="each col_in
				image_no
				content_capability_blog
				content_type_article
				responsive_image_hide_
			">
                                                                <!--overlay anchor-->
                                                                <a class="link_overlay"
                                                                   href="{{ asset('frontend') }}/assets/#"></a>
                                                                <!--image-->
                                                                <div class="info ">
                                                                    <h2 class="title_holder">
                                                                        <span class="title">পেঁয়াজ রপ্তানি বন্ধ করে দিল ভারত</span>
                                                                    </h2>
                                                                    <div class="additional">
                                                                        <!--category/page-->
                                                                        <!--author-->
                                                                        <!--time-->
                                                                        <!--comment count-->
                                                                        <!--like count-->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="each col_in
				image_no
				content_capability_blog
				content_type_article
				responsive_image_hide_
			">
                                                                <!--overlay anchor-->
                                                                <a class="link_overlay"
                                                                   href="{{ asset('frontend') }}/assets/#"></a>
                                                                <!--image-->
                                                                <div class="info ">
                                                                    <h2 class="title_holder">
                                                                        <span class="subtitle">ব্যাংকবহির্ভূত আর্থিক প্রতিষ্ঠান</span>
                                                                        <span class="title">আমানতের সিংহভাগই ঢাকার</span>
                                                                    </h2>
                                                                    <div class="additional">
                                                                        <!--category/page-->
                                                                        <!--author-->
                                                                        <!--time-->
                                                                        <!--comment count-->
                                                                        <!--like count-->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="each col_in
				image_no
				content_capability_blog
				content_type_article
				responsive_image_hide_
			">
                                                                <!--overlay anchor-->
                                                                <a class="link_overlay"
                                                                   href="{{ asset('frontend') }}/assets/#"></a>
                                                                <!--image-->
                                                                <div class="info ">
                                                                    <h2 class="title_holder">
                                                                        <span class="subtitle">উৎপাদন অংশীদারি চুক্তি ২০১৯</span>
                                                                        <span class="title">সরকার বিদেশীদের স্বার্থ রক্ষা করেছে: আনু মুহাম্মদ</span>
                                                                    </h2>
                                                                    <div class="additional">
                                                                        <!--category/page-->
                                                                        <!--author-->
                                                                        <!--time-->
                                                                        <!--comment count-->
                                                                        <!--like count-->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="each col_in
				image_no
				content_capability_blog
				content_type_article
				responsive_image_hide_
			">
                                                                <!--overlay anchor-->
                                                                <a class="link_overlay"
                                                                   href="{{ asset('frontend') }}/assets/#"></a>
                                                                <!--image-->
                                                                <div class="info ">
                                                                    <h2 class="title_holder">
                                                                        <span class="title">রপ্তানির অর্ধেক আয় পাঁচ পোশাকে</span>
                                                                    </h2>
                                                                    <div class="additional">
                                                                        <!--category/page-->
                                                                        <!--author-->
                                                                        <!--time-->
                                                                        <!--comment count-->
                                                                        <!--like count-->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="div_75556" class="p_c     _col">
                            <div class="hf_wrap">
                                <div class="color_theme_">
                                    <h4 class="headbar"><a href="{{ asset('frontend') }}/assets/#">জীবনযাপন</a></h4>
                                </div>
                            </div>
                            <div class="inner">
                                <div id="widget_75576" class="widget_color_ widget_wrap">
                                    <div class="contents_listing  widget">
                                        <div class="contents
				shaded_bg
				">
                                            <div class="row">
                                                <div class="col col1">
                                                    <div class="col_in">
                                                        <div class="listing">
                                                            <div class="each col_in
				image_no
				content_capability_blog
				content_type_article
				responsive_image_hide_
			">
                                                                <!--overlay anchor-->
                                                                <a class="link_overlay"
                                                                   href="{{ asset('frontend') }}/assets/#"></a>
                                                                <!--image-->
                                                                <div class="info ">
                                                                    <h2 class="title_holder">
                                                                        <span class="title">হৃদযন্ত্র ঠিক রাখতে যা খাবেন...</span>
                                                                    </h2>
                                                                    <div class="additional">
                                                                        <!--category/page-->
                                                                        <!--author-->
                                                                        <!--time-->
                                                                        <!--comment count-->
                                                                        <!--like count-->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="each col_in
				image_no
				content_capability_blog
				content_type_article
				responsive_image_hide_
			">
                                                                <!--overlay anchor-->
                                                                <a class="link_overlay"
                                                                   href="{{ asset('frontend') }}/assets/#"></a>
                                                                <!--image-->
                                                                <div class="info ">
                                                                    <h2 class="title_holder">
                                                                        <span class="title">মহামায়ায় কী যে মায়া</span>
                                                                    </h2>
                                                                    <div class="additional">
                                                                        <!--category/page-->
                                                                        <!--author-->
                                                                        <!--time-->
                                                                        <!--comment count-->
                                                                        <!--like count-->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="each col_in
				image_no
				content_capability_blog
				content_type_article
				responsive_image_hide_
			">
                                                                <!--overlay anchor-->
                                                                <a class="link_overlay"
                                                                   href="{{ asset('frontend') }}/assets/#"></a>
                                                                <!--image-->
                                                                <div class="info ">
                                                                    <h2 class="title_holder">
                                                                        <span class="title">ফোনে ৭০ হাজার মানুষ ডেঙ্গুর পরামর্শ নিয়েছে</span>
                                                                    </h2>
                                                                    <div class="additional">
                                                                        <!--category/page-->
                                                                        <!--author-->
                                                                        <!--time-->
                                                                        <!--comment count-->
                                                                        <!--like count-->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="each col_in
				image_no
				content_capability_blog
				content_type_article
				responsive_image_hide_
			">
                                                                <!--overlay anchor-->
                                                                <a class="link_overlay"
                                                                   href="{{ asset('frontend') }}/assets/#"></a>
                                                                <!--image-->
                                                                <div class="info ">
                                                                    <h2 class="title_holder">
                                                                        <span class="title">কিশোরগঞ্জে হাওরের জলরাশিতে ঘোরাঘুরি</span>
                                                                    </h2>
                                                                    <div class="additional">
                                                                        <!--category/page-->
                                                                        <!--author-->
                                                                        <!--time-->
                                                                        <!--comment count-->
                                                                        <!--like count-->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="each col_in
				image_no
				content_capability_blog
				content_type_article
				responsive_image_hide_
			">
                                                                <!--overlay anchor-->
                                                                <a class="link_overlay"
                                                                   href="{{ asset('frontend') }}/assets/#"></a>
                                                                <!--image-->
                                                                <div class="info ">
                                                                    <h2 class="title_holder">
                                                                        <span class="title">ওয়ারশর অতীত</span>
                                                                    </h2>
                                                                    <div class="additional">
                                                                        <!--category/page-->
                                                                        <!--author-->
                                                                        <!--time-->
                                                                        <!--comment count-->
                                                                        <!--like count-->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="div_75546" class="p_c     _col">
                            <div class="hf_wrap">
                                <div class="color_theme_">
                                    <h4 class="headbar"><a href="{{ asset('frontend') }}/assets/technology.html">বিজ্ঞান
                                            ও
                                            প্রযুক্তি</a></h4>
                                </div>
                            </div>
                            <div class="inner">
                                <div id="widget_75566" class="widget_color_ widget_wrap">
                                    <div class="contents_listing  widget">
                                        <div class="contents
					shaded_bg
					">
                                            <div class="row">
                                                <div class="col col1">
                                                    <div class="col_in">
                                                        <div class="listing">
                                                            <div class="each col_in
						image_no
						content_capability_blog
						content_type_article
						responsive_image_hide_
					">
                                                                <!--overlay anchor-->
                                                                <a class="link_overlay"
                                                                   href="{{ asset('frontend') }}/assets/#"></a>
                                                                <!--image-->
                                                                <div class="info ">
                                                                    <h2 class="title_holder">
                                                                        <span class="title">হুয়াওয়ের প্রথম ফ্ল্যাগশিপ স্টোর</span>
                                                                    </h2>
                                                                    <div class="additional">
                                                                        <!--category/page-->
                                                                        <!--author-->
                                                                        <!--time-->
                                                                        <!--comment count-->
                                                                        <!--like count-->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="each col_in
				image_no
				content_capability_blog
				content_type_article
				responsive_image_hide_
			">
                                                                <!--overlay anchor-->
                                                                <a class="link_overlay"
                                                                   href="{{ asset('frontend') }}/assets/#"></a>
                                                                <!--image-->
                                                                <div class="info ">
                                                                    <h2 class="title_holder">
                                                                        <span class="title">৫০ পেরিয়ে স্যামসাং</span>
                                                                    </h2>
                                                                    <div class="additional">
                                                                        <!--category/page-->
                                                                        <!--author-->
                                                                        <!--time-->
                                                                        <!--comment count-->
                                                                        <!--like count-->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="each col_in
				image_no
				content_capability_blog
				content_type_article
				responsive_image_hide_
			">
                                                                <!--overlay anchor-->
                                                                <a class="link_overlay"
                                                                   href="{{ asset('frontend') }}/assets/#"></a>
                                                                <!--image-->
                                                                <div class="info ">
                                                                    <h2 class="title_holder">
                                                                        <span class="title">স্পার্ক সিরিজের নতুন স্মার্টফোন</span>
                                                                    </h2>
                                                                    <div class="additional">
                                                                        <!--category/page-->
                                                                        <!--author-->
                                                                        <!--time-->
                                                                        <!--comment count-->
                                                                        <!--like count-->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="each col_in
				image_no
				content_capability_blog
				content_type_article
				responsive_image_hide_
			">
                                                                <!--overlay anchor-->
                                                                <a class="link_overlay"
                                                                   href="{{ asset('frontend') }}/assets/#"></a>
                                                                <!--image-->
                                                                <div class="info ">
                                                                    <h2 class="title_holder">
                                                                        <span class="title">‘অপো এ৯ ২০২০’ বিক্রি শুরু</span>
                                                                    </h2>
                                                                    <div class="additional">
                                                                        <!--category/page-->
                                                                        <!--author-->
                                                                        <!--time-->
                                                                        <!--comment count-->
                                                                        <!--like count-->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="each col_in
				image_no
				content_capability_blog
				content_type_article
				responsive_image_hide_
			">
                                                                <!--overlay anchor-->
                                                                <a class="link_overlay"
                                                                   href="{{ asset('frontend') }}/assets/#"></a>
                                                                <!--image-->
                                                                <div class="info ">
                                                                    <h2 class="title_holder">
                                                                        <span class="title">নতুন এইটকে টিভি আনল স্যামসাং</span>
                                                                    </h2>
                                                                    <div class="additional">
                                                                        <!--category/page-->
                                                                        <!--author-->
                                                                        <!--time-->
                                                                        <!--comment count-->
                                                                        <!--like count-->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="div_75551" class="p_c     _col">
                            <div class="hf_wrap">
                                <div class="color_theme_amber">
                                    <h4 class="headbar"><a href="{{ asset('frontend') }}/assets/#">নাগরিক সংবাদ</a></h4>
                                </div>
                            </div>
                            <div class="inner">
                                <div id="widget_75571" class="widget_color_grey widget_wrap">
                                    <div class="contents_listing  widget">
                                        <div class="contents
				shaded_bg
				">
                                            <div class="row">
                                                <div class="col col1">
                                                    <div class="col_in">
                                                        <div class="listing">
                                                            <div class="each col_in
				image_no
				content_capability_blog
				content_type_article
				responsive_image_hide_
			">
                                                                <!--overlay anchor-->
                                                                <a class="link_overlay"
                                                                   href="{{ asset('frontend') }}/assets/#"></a>
                                                                <!--image-->
                                                                <div class="info ">
                                                                    <h2 class="title_holder">
                                                                        <span class="title">ডায়াবেটিস, ধূমপান ও খাদ্য নিয়ন্ত্রণে হৃদ্‌রোগে আক্রান্তের হার কমে ৯০ শতাংশ</span>
                                                                    </h2>
                                                                    <div class="additional">
                                                                        <!--category/page-->
                                                                        <!--author-->
                                                                        <!--time-->
                                                                        <!--comment count-->
                                                                        <!--like count-->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="each col_in
				image_no
				content_capability_blog
				content_type_article
				responsive_image_hide_
			">
                                                                <!--overlay anchor-->
                                                                <a class="link_overlay"
                                                                   href="{{ asset('frontend') }}/assets/#"></a>
                                                                <!--image-->
                                                                <div class="info ">
                                                                    <h2 class="title_holder">
                                                                        <span class="title">বৃহত্তর নোয়াখালী বিতর্ক উৎসবে বিতার্কিকদের মিলনমেলা</span>
                                                                    </h2>
                                                                    <div class="additional">
                                                                        <!--category/page-->
                                                                        <!--author-->
                                                                        <!--time-->
                                                                        <!--comment count-->
                                                                        <!--like count-->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="each col_in
				image_no
				content_capability_blog
				content_type_article
				responsive_image_hide_
			">
                                                                <!--overlay anchor-->
                                                                <a class="link_overlay"
                                                                   href="{{ asset('frontend') }}/assets/#"></a>
                                                                <!--image-->
                                                                <div class="info ">
                                                                    <h2 class="title_holder">
                                                                        <span class="title">জবি ক্যারিয়ার ক্লাবের আন্তবিশ্ববিদ্যালয় বিজনেস কেইস কম্পিটিশন শুরু</span>
                                                                    </h2>
                                                                    <div class="additional">
                                                                        <!--category/page-->
                                                                        <!--author-->
                                                                        <!--time-->
                                                                        <!--comment count-->
                                                                        <!--like count-->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="each col_in
				image_no
				content_capability_blog
				content_type_article
				responsive_image_hide_
			">
                                                                <!--overlay anchor-->
                                                                <a class="link_overlay"
                                                                   href="{{ asset('frontend') }}/assets/#"></a>
                                                                <!--image-->
                                                                <div class="info ">
                                                                    <h2 class="title_holder">
                                                                        <span class="title">স্বাদ আর ঘ্রাণের এলাচি চা</span>
                                                                    </h2>
                                                                    <div class="additional">
                                                                        <!--category/page-->
                                                                        <!--author-->
                                                                        <!--time-->
                                                                        <!--comment count-->
                                                                        <!--like count-->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="each col_in
				image_no
				content_capability_blog
				content_type_article
				responsive_image_hide_
			">
                                                                <!--overlay anchor-->
                                                                <a class="link_overlay"
                                                                   href="{{ asset('frontend') }}/assets/#"></a>
                                                                <!--image-->
                                                                <div class="info ">
                                                                    <h2 class="title_holder">
                                                                        <span class="title">পর্যটন দিবসে কক্সবাজার সৈকতে শত বন্ধুর পরিচ্ছন্নতা কর্মসূচি</span>
                                                                    </h2>
                                                                    <div class="additional">
                                                                        <!--category/page-->
                                                                        <!--author-->
                                                                        <!--time-->
                                                                        <!--comment count-->
                                                                        <!--like count-->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="wrapper_99813" class="wrapper    ">
                    <div class="inner">
                        <div id="div_99814" class="p_p     _col">
                            <div class="inner">
                                <div id="widget_99815" class="widget_color_ widget_wrap">
                                    <div class="widget_text  widget">
                                        <div class="widget_text_inner aunqur">
                                            <div class="content">
                                                <!-- Javascript tag  -->
                                                <!-- begin ZEDO for channel:  Intromercial- Desktop , publisher: Prothom Alo , Ad Dimension: Intromercial - 1 x 1 -->
                                            <!--<script language="JavaScript">
	var zflag_nid="3407"; var zflag_cid="12"; var zflag_sid="1"; var zflag_width="1"; var zflag_height="1"; var zflag_sz="16";
	</script>
	<script language="JavaScript" src="{{ asset('frontend') }}/assets/https://saxp.zedo.com/jsc/sxp2/fo.js"></script> -->
                                                <!-- end ZEDO for channel:  Intromercial- Desktop , publisher: Prothom Alo , Ad Dimension: Intromercial - 1 x 1 -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="wrapper_102394" class="wrapper    ">
                    <div class="inner">
                        <div id="div_102395" class="p_p     _col">
                            <div class="inner"><span class="force_space_hoder">&nbsp;</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection