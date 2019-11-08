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
                                                                    @php
                                                                        $post = \App\Post::where(['status'=> 1, 'is_featured'=> 1])->orderBy('id', 'DESC')->first();
                                                                    @endphp
                                                                    @if($post)
                                                                        <div class="each col_in has_image image_featured content_capability_blog content_type_article responsive_image_hide_ m_show_image_as_top ">
                                                                            <!--overlay anchor-->

                                                                            <a class="link_overlay"
                                                                               href="{{ route('single.post', $post->id) }}"></a>
                                                                            <!--image-->
                                                                            <div class="image">
                                                                                {{--<noscript id="ari-image-760011616807"--}}
                                                                                {{--data-ari="{&quot;path&quot;:&quot;media\/2017\/10\/20\/bd4adf0fe14e0938fca7c6302dcb07f0-59e9d5f98b565.jpg?jadewits_media_id=1040516&quot;,&quot;ratio&quot;:[16,9],&quot;alt&quot;:&quot;\u09b8\u0982\u09b8\u09a6 \u09a8\u09bf\u09b0\u09cd\u09ac\u09be\u099a\u09a8\u09c7 \u0986. \u09b2\u09c0\u0997\u09c7\u09b0 \u099a\u09c7\u09df\u09c7 \u09ac\u09cd\u09af\u09df \u09ac\u09c7\u09b6\u09bf \u09ac\u09bf\u098f\u09a8\u09aa\u09bf\u09b0, \u09b8\u09ac\u099a\u09c7\u09df\u09c7 \u09ac\u09c7\u09b6\u09bf \u09ac\u09cd\u09af\u09df \u0987\u09b8\u09b2\u09be\u09ae\u09c0 \u0986\u09a8\u09cd\u09a6\u09cb\u09b2\u09a8\u09c7\u09b0&quot;}">--}}

                                                                                {{--</noscript>--}}
                                                                                <img src="{{ Storage::url($post->image) }}"
                                                                                     alt="{{ $post->title }}"
                                                                                     height="300vh"/>

                                                                                <script data-id="ari-image-760011616807">
                                                                                    jwARI.fetch($('#ari-image-760011616807'));
                                                                                </script>
                                                                                <span class="content_type"></span>
                                                                            </div>
                                                                            <div class="info ">
                                                                                <h2 class="title_holder">
                                                                                <span class="title">
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
                                                                    @endif
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
                                                                                $p = \App\Post::where(['status'=> 1, 'is_featured'=> 1])->orderBy('id', 'DESC')->first();
                                                                                        $last_insert_id = $p->id;
                                                                                    $posts = \App\Post::where(['status'=> 1, 'is_featured'=> 1])->orderBy('id', 'DESC')->get()->except($last_insert_id)->take(4);
                                                                            @endphp
                                                                            @if($posts)
                                                                                @foreach($posts as $post)
                                                                                    <div class="each col_in has_image image_left content_capability_blog content_type_article responsive_image_hide_ m_show_featured_image_as_left">
                                                                                        <!--overlay anchor-->
                                                                                        <a class="link_overlay"
                                                                                           href="{{ route('single.post', $post->id) }}"></a>
                                                                                        <!--image-->
                                                                                        <div class="image">
                                                                                            {{--<noscript--}}
                                                                                            {{--id="ari-image-757661616813"--}}
                                                                                            {{--data-ari="{&quot;path&quot;:&quot;media\/2017\/10\/13\/7e315843eb27154b490273e90e28c044-59e0393f488f2.jpg?jadewits_media_id=1030981&quot;,&quot;ratio&quot;:[16,9],&quot;alt&quot;:&quot;\u099f\u09c7\u0995\u09a8\u09be\u09ab\u09c7 \u2018\u09ac\u09a8\u09cd\u09a6\u09c1\u0995\u09af\u09c1\u09a6\u09cd\u09a7\u09c7\u2019 \u09e8 \u09b0\u09cb\u09b9\u09bf\u0999\u09cd\u0997\u09be \u09a8\u09bf\u09b9\u09a4&quot;}">--}}
                                                                                            {{--<img src="{{ asset('frontend') }}/assets/contents/cache/images/400x225x1/uploads/media/2017/10/13/7e315843eb27154b490273e90e28c044-59e0393f488f2.jpg"--}}
                                                                                            {{--alt="{{ $post->title }}"/>--}}
                                                                                            {{--</noscript>--}}
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
                                                                            @endif
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
                                                                    $posts = \App\Post::where(['status'=> 1, 'is_featured'=> 0])->orderBy('id', 'DESC')->get()->take(2);
                                                                @endphp
                                                                @if($posts)
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
                                                                                    {{--<noscript id="ari-image-963661616800"--}}
                                                                                    {{--data-ari="{&quot;path&quot;:&quot;media\/2019\/09\/29\/9a376f92ad8998e4aa3fcea7a73f1255-5d90dd46c6d78.jpg?jadewits_media_id=1473925&quot;,&quot;ratio&quot;:[16,9],&quot;alt&quot;:&quot;\u0995\u09cd\u09af\u09be\u09ae\u09cd\u09aa\u09be\u09b8 \u099b\u09be\u09dc\u09b2\u09c7\u09a8 \u09ac\u0999\u09cd\u0997\u09ac\u09a8\u09cd\u09a7\u09c1 \u09aa\u09cd\u09b0\u09af\u09c1\u0995\u09cd\u09a4\u09bf \u09ac\u09bf\u09b6\u09cd\u09ac\u09ac\u09bf\u09a6\u09cd\u09af\u09be\u09b2\u09df\u09c7\u09b0 \u0989\u09aa\u09be\u099a\u09be\u09b0\u09cd\u09af&quot;}">--}}
                                                                                    {{--<img src="{{ asset('frontend') }}/assets/contents/cache/images/400x225x1/uploads/media/2019/09/29/9a376f92ad8998e4aa3fcea7a73f1255-5d90dd46c6d78.jpg"--}}
                                                                                    {{--alt="ক্যাম্পাস ছাড়লেন বঙ্গবন্ধু প্রযুক্তি বিশ্ববিদ্যালয়ের উপাচার্য"/>--}}
                                                                                    {{--</noscript>--}}
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
                                                                @endif
                                                            </div>
                                                            <div class="row">
                                                                @php
                                                                    $last_posts = \App\Post::where(['status'=> 1, 'is_featured'=> 0])->orderBy('id', 'DESC')->get()->take(2);
                                                                            $l_id = array();
                                                                            foreach ($last_posts as $last_post){
                                                                                $l_id[] = $last_post->id;
                                                                            }

                                                                        $posts = \App\Post::where(['status'=> 1, 'is_featured'=> 0])->orderBy('id', 'DESC')->get()->except($l_id)->take(2);
                                                                @endphp
                                                                @if($posts)
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
                                                                                    {{--<noscript id="ari-image-963661616800"--}}
                                                                                    {{--data-ari="{&quot;path&quot;:&quot;media\/2019\/09\/29\/9a376f92ad8998e4aa3fcea7a73f1255-5d90dd46c6d78.jpg?jadewits_media_id=1473925&quot;,&quot;ratio&quot;:[16,9],&quot;alt&quot;:&quot;\u0995\u09cd\u09af\u09be\u09ae\u09cd\u09aa\u09be\u09b8 \u099b\u09be\u09dc\u09b2\u09c7\u09a8 \u09ac\u0999\u09cd\u0997\u09ac\u09a8\u09cd\u09a7\u09c1 \u09aa\u09cd\u09b0\u09af\u09c1\u0995\u09cd\u09a4\u09bf \u09ac\u09bf\u09b6\u09cd\u09ac\u09ac\u09bf\u09a6\u09cd\u09af\u09be\u09b2\u09df\u09c7\u09b0 \u0989\u09aa\u09be\u099a\u09be\u09b0\u09cd\u09af&quot;}">--}}
                                                                                    {{--<img src="{{ asset('frontend') }}/assets/contents/cache/images/400x225x1/uploads/media/2019/09/29/9a376f92ad8998e4aa3fcea7a73f1255-5d90dd46c6d78.jpg"--}}
                                                                                    {{--alt="ক্যাম্পাস ছাড়লেন বঙ্গবন্ধু প্রযুক্তি বিশ্ববিদ্যালয়ের উপাচার্য"/>--}}
                                                                                    {{--</noscript>--}}
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
                                                                @endif
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
                                                                                $last_posts = \App\Post::where(['status'=> 1, 'is_featured'=> 0])->orderBy('id', 'DESC')->get()->take(4);
                                                                                $l_id = array();
                                                                                foreach ($last_posts as $last_post){
                                                                                    $l_id[] = $last_post->id;
                                                                                }

                                                                                $posts = \App\Post::where(['status'=> 1, 'is_featured'=> 0])->orderBy('id', 'DESC')->get()->except($l_id)->take(7);
                                                                            @endphp
                                                                            @if($posts)
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
                                                                                            {{--<noscript--}}
                                                                                            {{--id="ari-image-984811616808"--}}
                                                                                            {{--data-ari="{&quot;path&quot;:&quot;media\/2019\/09\/30\/4a30eb86d8952494486252652697cc67-5d916790a1726.jpg?jadewits_media_id=1473935&quot;,&quot;ratio&quot;:[16,9],&quot;alt&quot;:&quot;\u09b9\u09c1\u09df\u09be\u0993\u09df\u09c7\u09b0 \u09aa\u09cd\u09b0\u09a5\u09ae \u09ab\u09cd\u09b2\u09cd\u09af\u09be\u0997\u09b6\u09bf\u09aa \u09b8\u09cd\u099f\u09cb\u09b0&quot;}">--}}
                                                                                            {{--<img src="{{ asset('frontend') }}/assets/contents/cache/images/400x225x1/uploads/media/2019/09/30/4a30eb86d8952494486252652697cc67-5d916790a1726.jpg"--}}
                                                                                            {{--alt="হুয়াওয়ের প্রথম ফ্ল্যাগশিপ স্টোর"/>--}}
                                                                                            {{--</noscript>--}}
                                                                                            <img src="{{ Storage::url($post->image) }}"
                                                                                                 alt="" width="80"
                                                                                                 height="55">
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
                                                                            @endif
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
                                                    @if($category->posts[0])
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
                                                                {{--<noscript id="ari-image-1020291616794"--}}
                                                                {{--data-ari="{&quot;path&quot;:&quot;media\/2019\/09\/29\/a844258a13f712a39beddc1aaebf07b1-5d90cc89932de.jpg?jadewits_media_id=1473919&quot;,&quot;ratio&quot;:[16,9],&quot;alt&quot;:&quot;\u09a6\u09c1\u09b0\u09cd\u0997\u09be\u09aa\u09c2\u099c\u09be\u09b0 \u09a8\u09a4\u09c1\u09a8 \u0997\u09be\u09a8 \u09a8\u09bf\u09df\u09c7 \u098f\u09b2\u09c7\u09a8 \u09b8\u09a8\u09cd\u09a6\u09c0\u09aa\u09a8 || \u09b2\u09be\u0995\u09cd\u09b8 \u0995\u09cd\u09af\u09be\u09ab\u09c7 \u09b2\u09be\u0987\u09ad || \u09aa\u09b0\u09cd\u09ac \u09e8\u09ea\u09e6&quot;}">--}}
                                                                {{--</noscript>--}}
                                                                <img src="{{ Storage::url($category->posts[0]->image) }}"
                                                                     alt="{{ $category->posts[0]->title }}"/>
                                                                <script data-id="ari-image-1020291616794">
                                                                    jwARI.fetch($('#ari-image-1020291616794'));
                                                                </script>
                                                                {{--<span class="content_type"></span>--}}
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
                                                    @endif
                                                </div>
                                                <div class="col col1">
                                                    <div class="col_in">
                                                        <div class="listing">
                                                            @php
                                                                $last_posts = \App\Post::where(['status'=> 1, 'is_featured'=> 0])->orderBy('id', 'DESC')->get()->take(11);
                                                                $l_id = array();
                                                                foreach ($last_posts as $last_post){
                                                                    $l_id[] = $last_post->id;
                                                                }

                                                                    $posts = \App\Post::where(['status'=> 1, 'is_featured' => 0])->orderBy('id', 'DESC')->get()->except($l_id)->take(3);
                                                            @endphp
                                                            @if($posts)
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
                                                                           href="{{ route('single.post', $post->id) }}"></a>
                                                                        <!--image-->
                                                                        <div class="image">
                                                                            {{--<noscript id="ari-image-1020291616793"--}}
                                                                            {{--data-ari="{&quot;path&quot;:&quot;media\/2019\/09\/29\/d8a1ac018d6712bb7ff5206c08209f37-5d90cbda4c66e.jpg?jadewits_media_id=1473918&quot;,&quot;ratio&quot;:[16,9],&quot;alt&quot;:&quot;\u09ae\u09cc\u09b8\u09c1\u09ae\u09bf \u09ac\u09be\u09df\u09c1\u09b0 \u09aa\u09cd\u09b0\u09ad\u09be\u09ac\u09c7 \u099d\u09b0\u099b\u09c7 \u09ac\u09c3\u09b7\u09cd\u099f\u09bf \u0986\u09b0\u0993 \u099d\u09b0\u09ac\u09c7&quot;}">--}}
                                                                            {{--</noscript>--}}
                                                                            <img src="{{ Storage::url($post->image) }}"
                                                                                 alt="{{ $post->title }}"/>
                                                                            <script data-id="ari-image-1020291616793">
                                                                                jwARI.fetch($('#ari-image-1020291616793'));
                                                                            </script>
                                                                            {{--<span class="content_type"></span>--}}
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
                                                            @endif
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
                                                      style="width:100%"><span>শেষ</span></span>
                                            </div>
                                            <div class="tabs_content">
                                                <div class="each_tab tab_latest oh db">
                                                    <ul>

                                                        @php
                                                            $post_count = App\Post::where('status', 1)->orderBy('id', 'DESC')->get()->count();
                                                            if ($post_count >= 5) {
                                                                $take_num = 5;
                                                            } else {
                                                                $take_num = $post_count;
                                                            }
                                                            $posts = App\Post::where('status', 1)->orderBy('id', 'DESC')->get()->take($take_num);
                                                        @endphp
                                                        @if($posts)
                                                            @foreach($posts as $post)
                                                                <li>
                                                                    <a href="{{ route('single.post', $post->id) }}">
                                                                        <span class="tab_list_title">{{ $post->title }}</span>
                                                                    </a>
                                                                </li>
                                                            @endforeach
                                                        @endif
                                                    </ul>
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
                                <div class="color_theme0_">
                                    @php
                                        $category = \App\Category::where('name', 'বাংলাদেশ')->first();
                                    @endphp
                                    <h4 class="headbar"><a
                                                href="@if($category) {{ route('category.post', $category->id) }}" @endif>@if($category) {{ $category->name }} @endif</a>
                                    </h4>
                                </div>
                            </div>
                            <div class="inner">
                                <div id="widget_100795" class="widget_color_ widget_wrap">
                                    <div class="pa_national_zonewise_search_widget  widget">
                                        <div id="widget100795" class="national_zone_widget">
                                            <form action="{{ route('posts_search') }}" method="post"
                                                  id="national_news_search">
                                                @csrf
                                                <div class="wdg_message_show"></div>
                                                <div class="ntl_container_div">
                                                    <div class="div0">এলাকার খবর</div>
                                                    <div class="div1">
                                                        <select class="form-control" name="divisions" id="divisions">
                                                            <option value="0" disable="true" selected="true">বিভাগ
                                                            </option>
                                                            @foreach($divisions as $division)
                                                                <option value="{{ $division->id }}">{{ $division->bn_name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="div2">
                                                        <select class="form-control" name="districts" id="districts">
                                                            <option value="" disable="true" selected="true">জেলা
                                                            </option>
                                                        </select>
                                                    </div>
                                                    <div class="div3">
                                                        <select class="form-control" name="upazilas" id="upazilas">
                                                            <option value="" disable="true" selected="true">উপজেলা
                                                            </option>
                                                        </select>
                                                    </div>
                                                    <div class="div4">
                                                        <input type="submit" value="সংবাদ" id="search_tag_wize_news"
                                                               class="search_tag_wize_news"/>
                                                        {{--<button type="submit" class="search_tag_wize_news" id="search_tag_wize_news"><i class="fas fa-search"></i>Hello</button>--}}
                                                    </div>
                                                </div>
                                            </form>
                                            <script type="text/javascript">

                                                $('#divisions').on('change', function (e) {
                                                    console.log(e);
                                                    var division_id = e.target.value;
                                                    $.get('/json-districts/' + division_id, function (data) {
                                                        console.log(data);
                                                        $('#districts').empty();
                                                        $('#districts').append('<option value="0" disable="true" selected="true">জেলা</option>');

                                                        $('#upazilas').empty();
                                                        $('#upazilas').append('<option value="0" disable="true" selected="true">উপজেলা</option>');

                                                        $.each(data, function (index, districtsObj) {
                                                            $('#districts').append('<option value="' + districtsObj.id + '">' + districtsObj.bn_name + '</option>');
                                                        })
                                                    })
                                                })

                                                $('#districts').on('change', function (e) {
                                                    console.log(e);
                                                    var district_id = e.target.value;
                                                    $.get('/json-upazilas/' + district_id, function (data) {
                                                        console.log(data);
                                                        $('#upazilas').empty();
                                                        $('#upazilas').append('<option value="0" disable="true" selected="true">উপজেলা</option>');
                                                        $.each(data, function (index, upazilasObj) {
                                                            $('#upazilas').append('<option value="' + upazilasObj.id + '">' + upazilasObj.bn_name + '</option>');
                                                        })
                                                    })
                                                })
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
                                                @if($category)
                                                    @php
                                                        $posts = \App\Post::where(['status' => 1, 'category_id' => $category->id])->orderBy('id', 'DESC')->get()->take(2);
                                                    @endphp
                                                @endif
                                                @if($posts !== null)
                                                    @foreach($posts as $post)
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
                                                                   href="{{ route('single.post', $post->id) }}"></a>
                                                                <!--image-->
                                                                <div class="image">

                                                                    <img src="{{ Storage::url($post->image) }}"
                                                                         alt="{{ $post->title }}" height="70"/>
                                                                    <script data-id="ari-image-1007921616814">
                                                                        jwARI.fetch($('#ari-image-1007921616814'));
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
                                                        </div>
                                                    @endforeach
                                                @endif
                                            </div>
                                            <div class="row">
                                                @if($category)
                                                    @php
                                                        $last_posts = \App\Post::where(['status'=> 1, 'category_id' => $category->id ])->orderBy('id', 'DESC')->get()->take(2);
                                                                $posts_id = array();
                                                                foreach($last_posts as $lpost){
                                                                    $posts_id[] = $lpost->id;
                                                                }

                                                            $posts = \App\Post::where(['status'=> 1, 'category_id' => $category->id ])->orderBy('id', 'DESC')->get()->except($posts_id)->take(2);
                                                    @endphp
                                                @endif
                                                @if($posts !== null)
                                                    @foreach($posts as $post)
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
                                                                   href="{{ route('single.post', $post->id) }}"></a>
                                                                <!--image-->
                                                                <div class="image">

                                                                    <img src="{{ Storage::url($post->image) }}"
                                                                         alt="{{ $post->title }}" height="70"/>
                                                                    <script data-id="ari-image-1007921616814">
                                                                        jwARI.fetch($('#ari-image-1007921616814'));
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
                                                        </div>
                                                    @endforeach
                                                @endif
                                            </div>
                                            <div class="row">
                                                @if($category)
                                                    @php
                                                        $last_posts = \App\Post::where(['status'=> 1, 'category_id' => $category->id ])->orderBy('id', 'DESC')->get()->take(4);
                                                                $posts_id = array();
                                                                foreach($last_posts as $lpost){
                                                                    $posts_id[] = $lpost->id;
                                                                }

                                                            $posts = \App\Post::where(['status'=> 1, 'category_id' => $category->id ])->orderBy('id', 'DESC')->get()->except($posts_id)->take(2);
                                                    @endphp
                                                @endif
                                                @if($posts !== null)
                                                    @foreach($posts as $post)
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
                                                                   href="{{ route('single.post', $post->id) }}"></a>
                                                                <!--image-->
                                                                <div class="image">

                                                                    <img src="{{ Storage::url($post->image) }}"
                                                                         alt="{{ $post->title }}" height="70"/>
                                                                    <script data-id="ari-image-1007921616814">
                                                                        jwARI.fetch($('#ari-image-1007921616814'));
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
                                                        </div>
                                                    @endforeach
                                                @endif
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
                                                        background-image: url('{{ asset('frontend') }}/assets/contents/cache/images/24X24X1/uploads/media/2017/03/14/929b760e3e4a8eb70f329d1b6b865f6b-58c798566cb5d.png');
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
                @php
                    $category = \App\Category::where('name', 'খেলা')->first();
                @endphp
                @if($category)
                    <div id="wrapper_51604"
                         class="wrapper special_32_5_67_5  container_white_bg container_top_padding container_bottom_padding ">
                        <div class="inner">
                            <div id="div_51606"
                                 class="p_d  footer_only_mobile palo_sp_border teal container_fixed_height container_white_bg container_bottom_padding  _col">
                                <div class="hf_wrap">
                                    <div class="color_theme_">
                                        <h4 class="headbar"><a
                                                    href="{{ route('category.post', $category->id) }}">{{ $category->name }}</a>
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
                                                    @php
                                                        $posts = \App\Post::where(['status' => 1, 'category_id' => $category->id])->orderBy('id', 'DESC')->get()->take(3);
                                                    @endphp
                                                    @if($posts)
                                                        @foreach($posts as $post)
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
                                                                       href="{{ route('single.post', $post->id) }}"></a>
                                                                    <!--image-->
                                                                    <div class="image">
                                                                        {{--<noscript id="ari-image-1018221616792"--}}
                                                                        {{--data-ari="{&quot;path&quot;:&quot;media\/2019\/09\/29\/15e64efd920812510a572bf4e0f315a0-5d90ca8f1feb2.jpg?jadewits_media_id=1473917&quot;,&quot;ratio&quot;:[16,9],&quot;alt&quot;:&quot;\u09ad\u09c1\u099f\u09be\u09a8\u09c7\u09b0 \u099c\u09be\u09b2\u09c7 \u09ac\u09be\u0982\u09b2\u09be\u09a6\u09c7\u09b6\u09c7\u09b0 \u09ea \u0997\u09cb\u09b2&quot;}">--}}
                                                                        {{--</noscript>--}}
                                                                        <img src="{{ Storage::url($post->image) }}"
                                                                             alt="{{ $post->title }}" height="145"/>
                                                                        <script data-id="ari-image-1018221616792">
                                                                            jwARI.fetch($('#ari-image-1018221616792'));
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
                                                            </div>
                                                        @endforeach
                                                    @endif
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
                                                    @php
                                                        $last_posts = \App\Post::where(['status' => 1, 'category_id' => $category->id])->orderBy('id', 'DESC')->get()->take(3);
                                                        $last_posts_id = array();
                                                        foreach ($last_posts as $post){
                                                            $last_posts_id[] = $post->id;
                                                        }
                                                        $posts = \App\Post::where(['status' => 1, 'category_id' => $category->id])->orderBy('id', 'DESC')->get()->except($last_posts_id)->take(4);
                                                    @endphp
                                                    @if($posts)
                                                        @foreach($posts as $post)
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
                                                                       href="{{ route('single.post', $post->id) }}"></a>
                                                                    <!--image-->
                                                                    <div class="image">
                                                                        {{--<noscript id="ari-image-1018231616775"--}}
                                                                        {{--data-ari="{&quot;path&quot;:&quot;media\/2019\/09\/29\/5eb635677d7c006de4d3595fd719ea66-5d90a8464f197.jpg?jadewits_media_id=1473885&quot;,&quot;ratio&quot;:[16,9],&quot;alt&quot;:&quot;\u09ad\u09c1\u099f\u09be\u09a8\u09c7\u09b0 \u09ac\u09bf\u09aa\u0995\u09cd\u09b7\u09c7 \u09ac\u09be\u0982\u09b2\u09be\u09a6\u09c7\u09b6\u09c7\u09b0 \u098f\u0995\u09be\u09a6\u09b6 \u09a6\u09c7\u0996\u09c7 \u09a8\u09bf\u09a8&quot;}">--}}
                                                                        {{--</noscript>--}}
                                                                        <img src="{{ Storage::url($post->image) }}"
                                                                             alt="{{ $post->title }}" height="130"/>
                                                                        <script data-id="ari-image-1018231616775">
                                                                            jwARI.fetch($('#ari-image-1018231616775'));
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
                                                            </div>
                                                        @endforeach
                                                    @endif
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
                                                    <h2 class="headbar"><a href="{{ asset('frontend') }}/assets/#">অনলাইন
                                                            ও
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
                @endif
                @php
                    $category = \App\Category::where(['name'=> 'বিনোদন', 'status' => 1])->first();
                @endphp
                @if($category)
                    <div id="wrapper_55425"
                         class="wrapper special_32_5_67_5  container_fixed_height container_top_padding container_bottom_padding ">
                        <div class="hf_wrap">
                            <div class="color_theme_purple">
                                <h4 class="headbar"><a
                                            href="{{ route('category.post', $category->id) }}">{{ $category->name }}</a>
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
                                                        @php
                                                            $post = \App\Post::where(['status' => 1, 'category_id' => $category->id])->orderBy('id', 'DESC')->first();
                                                        @endphp
                                                        <div class="each col_in
				has_image
				image_top
				content_capability_blog
				content_type_article
				responsive_image_hide_
			">
                                                            <!--overlay anchor-->
                                                            <a class="link_overlay"
                                                               href="@if($post){{ route('single.post', $post->id) }}@endif"></a>
                                                            <!--image-->
                                                            <div class="image">
                                                                {{--<noscript id="ari-image-995571616786"--}}
                                                                {{--data-ari="{&quot;path&quot;:&quot;media\/2019\/09\/29\/92a5374b33b457bd37f18ed30e165517-5d90bd50e5f11.jpg?jadewits_media_id=1473915&quot;,&quot;ratio&quot;:[16,9],&quot;alt&quot;:&quot;\u0990\u09b6\u09cd\u09ac\u09b0\u09bf\u09df\u09be\u09b0 \u09ac\u09c7\u0997\u09c1\u09a8\u09bf \u099d\u09b2\u0995&quot;}">--}}
                                                                {{--</noscript>--}}
                                                                <img src="@if($post){{ Storage::url($post->image) }}@endif"
                                                                     alt="@if($post){{ $post->title }}@endif"/>
                                                                <script data-id="ari-image-995571616786">
                                                                    jwARI.fetch($('#ari-image-995571616786'));
                                                                </script>
                                                                <span class="content_type"></span>
                                                            </div>
                                                            <div class="info ">
                                                                <h2 class="title_holder">
                                                                    <span class="title">@if($post){{ $post->title }}@endif</span>
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
                                                                @php
                                                                    $last_posts = \App\Post::where(['status' => 1, 'category_id' => $category->id])->orderBy('id', 'DESC')->first();
                                                                    $last_posts_id = $last_posts->id;
                                                                    $posts = \App\Post::where(['status' => 1, 'category_id' => $category->id])->orderBy('id', 'DESC')->get()->except($last_posts_id)->take(4);
                                                                @endphp
                                                                @if($posts)
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
                                                                                {{--<noscript id="ari-image-995571616780"--}}
                                                                                {{--data-ari="{&quot;path&quot;:&quot;media\/2019\/09\/29\/844e7b548d5236ac047f35634b5fb99b-5d90b43f3715f.jpg?jadewits_media_id=1473893&quot;,&quot;ratio&quot;:[16,9],&quot;alt&quot;:&quot;\u09b8\u09ae\u09be\u09b2\u09cb\u099a\u0995\u09a6\u09c7\u09b0 \u0995\u09dc\u09be \u099c\u09ac\u09be\u09ac \u09a4\u09cd\u09b0\u09bf\u09b6\u09b2\u09be\u09b0&quot;}">--}}
                                                                                {{--</noscript>--}}
                                                                                <img src="{{ Storage::url($post->image) }}"
                                                                                     alt="{{ $post->title }}"/>
                                                                                <script data-id="ari-image-995571616780">
                                                                                    jwARI.fetch($('#ari-image-995571616780'));
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
                                                                @endif
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
                @endif
                @php
                    $category = \App\Category::where(['name'=> 'মতামত', 'status' => 1])->first();
                @endphp
                @if($category)
                    <div id="wrapper_75631"
                         class="wrapper  palo_opinion container_fixed_height container_white_bg container_top_padding container_bottom_padding ">
                        <div class="hf_wrap">
                            <div class="color_theme_">
                                <h4 class="headbar"><a
                                            href="{{ route('category.post', $category->id) }}">{{ $category->name }}</a>
                                </h4>
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
                                                    @php
                                                        $posts = \App\Post::where(['status' => 1, 'category_id' => $category->id])->orderBy('id', 'DESC')->get()->take(4);
                                                    @endphp
                                                    @if($posts)
                                                        @foreach($posts as $post)
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
                                                                       href="{{ route('single.post', $post->id) }}"></a>
                                                                    <!--image-->
                                                                    <div class="info has_ai">
                                                                        <h2 class="title_holder">
                                                                            <span class="title"
                                                                                  style="font-weight: bold">{{ $post->title }}</span>
                                                                        </h2>
                                                                        <div class="summery">
                                                                        {!! \Illuminate\Support\Str::words($post->description, 15) !!}
                                                                        <!--<span class="excerpt_more" title="বিস্তারিত"><span>বিস্তারিত</span></span>-->
                                                                        </div>
                                                                        <div class="additional">
                                                                            <!--category/page-->
                                                                            <!--author-->
                                                                        {{--<span class='author aitm'>মো. তৌহিদ হোসেন</span>--}}
                                                                        <!--time-->
                                                                            <!--comment count-->
                                                                        {{--<a class="comments aitm" title=""--}}
                                                                        {{--href="{{ asset('frontend') }}/assets/index.html#comments">৯<span> মন্তব্য</span></a>--}}
                                                                        <!--<span class="comments aitm" title="মন্তব্য" >৯<span> মন্তব্য</span></span>-->
                                                                            <!--like count-->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
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
                {{--<div id="wrapper_75586"--}}
                {{--class="wrapper special_35_65 palo_multimedia_wrapper container_fixed_height container_top_padding container_bottom_padding ">--}}
                {{--<div class="inner">--}}
                {{--<div id="div_75591" class="p_d     _col">--}}
                {{--<div class="hf_wrap">--}}
                {{--<div class="color_theme_">--}}
                {{--<h4 class="headbar"><a href="{{ asset('frontend') }}/assets/#">ছবি</a></h4></div>--}}
                {{--</div>--}}
                {{--<div class="inner">--}}
                {{--<div id="widget_75601" class="widget_color_ widget_wrap">--}}
                {{--<div class="single_album_gallery  widget">--}}
                {{--<div class="widget-wrapper">--}}
                {{--<div id="single_album_gallery_75601" class="swiper-container"--}}
                {{--data-url="/photo/gallery/1616812/%E0%A6%8F%E0%A6%95-%E0%A6%9D%E0%A6%B2%E0%A6%95-%E0%A7%A9%E0%A7%A6-%E0%A6%B8%E0%A7%87%E0%A6%AA%E0%A7%8D%E0%A6%9F%E0%A7%87%E0%A6%AE%E0%A7%8D%E0%A6%AC%E0%A6%B0-%E0%A7%A8%E0%A7%A6%E0%A7%A7%E0%A7%AF">--}}
                {{--<div class="swiper-wrapper">--}}
                {{--<div class="swiper-slide pop-each"--}}
                {{--data-hash="gallery-image-1473937">--}}
                {{--<div class="photo">--}}
                {{--<!--<a href="{{ asset('frontend') }}/assets/javascript:" class="pop-active">-->--}}
                {{--<a href="{{ asset('frontend') }}/assets/index.html#gallery-image-1473937">--}}
                {{--<noscript id="ari-image-0"--}}
                {{--data-ari="{&quot;path&quot;:&quot;media\/2019\/09\/30\/5979e50adfe8f2c9a96f08af1f8bb43d-5d91763e0a07d.jpg&quot;,&quot;ratio&quot;:[16,9],&quot;fx_width&quot;:0}">--}}
                {{--<img alt=""--}}
                {{--src="{{ asset('frontend') }}/assets/contents/cache/images/200x0x0/uploads/media/2019/09/30/5979e50adfe8f2c9a96f08af1f8bb43d-5d91763e0a07d.jpg"/>--}}
                {{--</noscript>--}}
                {{--<i class="dn i-caption">মাছ শিকারের জন্য ফেলা জালে চরে--}}
                {{--বেড়াচ্ছে হাঁসেরা। দামিহা এলাকা, তাড়াইল, কিশোরগঞ্জ,--}}
                {{--৩০--}}
                {{--সেপ্টেম্বর। ছবি: তাফসিলুল আজিজ</i>--}}
                {{--</a>--}}
                {{--<!--</a>-->--}}
                {{--</div>--}}
                {{--<span>--}}
                {{--মাছ শিকারের জন্য ফেলা জালে চরে বেড়াচ্ছে হাঁসেরা। দামিহা এলাকা, তাড়াইল, কিশোরগঞ্জ, ৩০ সেপ্টেম্বর। ছবি: তাফসিলুল আজিজ																	<i>ছবি: </i>--}}
                {{--</span>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<!-- Add Pagination -->--}}
                {{--<!--<div class="swiper-pagination"></div>-->--}}
                {{--<!-- Add Arrows -->--}}
                {{--<div class="swiper-button-next"></div>--}}
                {{--<div class="swiper-button-prev"></div>--}}
                {{--</div>--}}
                {{--<div class="info">--}}
                {{--<div class="swiper-container-callback">--}}
                {{--<h4 class="title mb10"><a href="{{ asset('frontend') }}/assets/#">এক--}}
                {{--ঝলক--}}
                {{--(৩০ সেপ্টেম্বর,--}}
                {{--২০১৯)</a></h4>--}}
                {{--<span class="caption">&nbsp;</span>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<script>--}}
                {{--var swipersingle_album_gallery_75601 = new Swiper('#single_album_gallery_75601', {--}}
                {{--onTransitionStart: function (s) {--}}
                {{--var $caption = $(s.container).parent().find('.swiper-container-callback .caption');--}}
                {{--$caption.hide().html($('.i-caption', s.slides[s.activeIndex]).html()).fadeIn(s.params.speed);--}}
                {{--if (s.isEnd) {--}}
                {{--$(s.container).parent().fadeOut();--}}
                {{--var url = $(s.container).data('url') + '#' + $(s.slides[s.activeIndex]).data('hash');--}}
                {{--window.location.href = url;--}}
                {{--return false;--}}
                {{--}--}}
                {{--},--}}
                {{--onSlideChangeStart: function (swiper) {--}}
                {{--$.force_appear();--}}
                {{--},--}}
                {{--onInit: function (s) {--}}
                {{--//var container = s.container;--}}
                {{--var $caption = $(s.container).parent().find('.swiper-container-callback .caption');--}}
                {{--$caption.html($('.i-caption', s.slides[s.activeIndex]).html());--}}
                {{--$('#single_album_gallery_75601').find('[data-ari]').each(function () {--}}
                {{--jwARI.fetch($(this));--}}
                {{--});--}}
                {{--$('.photo>a', $(s.container)).live('click', function () {--}}
                {{--var url = $(s.container).data('url') + '#' + $(s.slides[s.activeIndex]).data('hash');--}}
                {{--window.location.href = url;--}}
                {{--return false;--}}
                {{--});--}}
                {{--},--}}
                {{--nextButton: '.swiper-button-next',--}}
                {{--prevButton: '.swiper-button-prev'--}}
                {{--});--}}
                {{--</script>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<div id="div_75596" class="p_c     _col">--}}
                {{--<div class="hf_wrap">--}}
                {{--<div class="color_theme_">--}}
                {{--<h4 class="headbar"><a href="{{ asset('frontend') }}/assets/#">ভিডিও</a></h4></div>--}}
                {{--</div>--}}
                {{--<div class="inner">--}}
                {{--<div id="widget_75611" class="widget_color_ widget_wrap">--}}
                {{--<div class="contents_listing  widget">--}}
                {{--<div class="contents--}}
                {{--">--}}
                {{--<div class="row">--}}
                {{--<div class="col col1">--}}
                {{--<div class="col_in">--}}
                {{--<div class="listing">--}}
                {{--<div class="each col_in--}}
                {{--has_image--}}
                {{--image_left--}}
                {{--content_capability_gallery--}}
                {{--content_type_watch--}}
                {{--responsive_image_hide_--}}
                {{--m_show_featured_image_as_left--}}
                {{--">--}}
                {{--<!--overlay anchor-->--}}
                {{--<a class="link_overlay"--}}
                {{--href="{{ asset('frontend') }}/assets/#"></a>--}}
                {{--<!--image-->--}}
                {{--<div class="image">--}}
                {{--<noscript id="ari-image-756111616794"--}}
                {{--data-ari="{&quot;path&quot;:&quot;media\/2019\/09\/29\/a844258a13f712a39beddc1aaebf07b1-5d90cc89932de.jpg?jadewits_media_id=1473919&quot;,&quot;ratio&quot;:[16,9],&quot;alt&quot;:&quot;\u09a6\u09c1\u09b0\u09cd\u0997\u09be\u09aa\u09c2\u099c\u09be\u09b0 \u09a8\u09a4\u09c1\u09a8 \u0997\u09be\u09a8 \u09a8\u09bf\u09df\u09c7 \u098f\u09b2\u09c7\u09a8 \u09b8\u09a8\u09cd\u09a6\u09c0\u09aa\u09a8 || \u09b2\u09be\u0995\u09cd\u09b8 \u0995\u09cd\u09af\u09be\u09ab\u09c7 \u09b2\u09be\u0987\u09ad || \u09aa\u09b0\u09cd\u09ac \u09e8\u09ea\u09e6&quot;}">--}}
                {{--<img src="{{ asset('frontend') }}/assets/contents/cache/images/400x225x1/uploads/media/2019/09/29/a844258a13f712a39beddc1aaebf07b1-5d90cc89932de.jpg"--}}
                {{--alt="দুর্গাপূজার নতুন গান নিয়ে এলেন সন্দীপন || লাক্স ক্যাফে লাইভ || পর্ব ২৪০"/>--}}
                {{--</noscript>--}}
                {{--<script data-id="ari-image-756111616794">--}}
                {{--jwARI.fetch($('#ari-image-756111616794'));--}}
                {{--</script>--}}
                {{--<span class="content_type"></span>--}}
                {{--</div>--}}
                {{--<div class="info ">--}}
                {{--<h2 class="title_holder">--}}
                {{--<span class="title">দুর্গাপূজার নতুন গান নিয়ে এলেন সন্দীপন || লাক্স ক্যাফে লাইভ || পর্ব ২৪০</span>--}}
                {{--</h2>--}}
                {{--<div class="additional">--}}
                {{--<!--category/page-->--}}
                {{--<!--author-->--}}
                {{--<!--time-->--}}
                {{--<!--comment count-->--}}
                {{--<!--like count-->--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<div class="each col_in--}}
                {{--has_image--}}
                {{--image_left--}}
                {{--content_capability_gallery--}}
                {{--content_type_watch--}}
                {{--responsive_image_hide_--}}
                {{--m_show_featured_image_as_left--}}
                {{--">--}}
                {{--<!--overlay anchor-->--}}
                {{--<a class="link_overlay"--}}
                {{--href="{{ asset('frontend') }}/assets/#"></a>--}}
                {{--<!--image-->--}}
                {{--<div class="image">--}}
                {{--<noscript id="ari-image-756111616793"--}}
                {{--data-ari="{&quot;path&quot;:&quot;media\/2019\/09\/29\/d8a1ac018d6712bb7ff5206c08209f37-5d90cbda4c66e.jpg?jadewits_media_id=1473918&quot;,&quot;ratio&quot;:[16,9],&quot;alt&quot;:&quot;\u09ae\u09cc\u09b8\u09c1\u09ae\u09bf \u09ac\u09be\u09df\u09c1\u09b0 \u09aa\u09cd\u09b0\u09ad\u09be\u09ac\u09c7 \u099d\u09b0\u099b\u09c7 \u09ac\u09c3\u09b7\u09cd\u099f\u09bf \u0986\u09b0\u0993 \u099d\u09b0\u09ac\u09c7&quot;}">--}}
                {{--<img src="{{ asset('frontend') }}/assets/contents/cache/images/400x225x1/uploads/media/2019/09/29/d8a1ac018d6712bb7ff5206c08209f37-5d90cbda4c66e.jpg"--}}
                {{--alt="মৌসুমি বায়ুর প্রভাবে ঝরছে বৃষ্টি আরও ঝরবে"/>--}}
                {{--</noscript>--}}
                {{--<script data-id="ari-image-756111616793">--}}
                {{--jwARI.fetch($('#ari-image-756111616793'));--}}
                {{--</script>--}}
                {{--<span class="content_type"></span>--}}
                {{--</div>--}}
                {{--<div class="info ">--}}
                {{--<h2 class="title_holder">--}}
                {{--<span class="title">মৌসুমি বায়ুর প্রভাবে ঝরছে বৃষ্টি আরও ঝরবে</span>--}}
                {{--</h2>--}}
                {{--<div class="additional">--}}
                {{--<!--category/page-->--}}
                {{--<!--author-->--}}
                {{--<!--time-->--}}
                {{--<!--comment count-->--}}
                {{--<!--like count-->--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<div class="each col_in--}}
                {{--has_image--}}
                {{--image_left--}}
                {{--content_capability_gallery--}}
                {{--content_type_watch--}}
                {{--responsive_image_hide_--}}
                {{--m_show_featured_image_as_left--}}
                {{--">--}}
                {{--<!--overlay anchor-->--}}
                {{--<a class="link_overlay"--}}
                {{--href="{{ asset('frontend') }}/assets/#"></a>--}}
                {{--<!--image-->--}}
                {{--<div class="image">--}}
                {{--<noscript id="ari-image-756111616764"--}}
                {{--data-ari="{&quot;path&quot;:&quot;media\/2019\/09\/29\/ea5ea864e49b12ac5181cd11e1a92173-5d909ad4261eb.jpg?jadewits_media_id=1473866&quot;,&quot;ratio&quot;:[16,9],&quot;alt&quot;:&quot;\u09a4\u09c1\u09b2\u09bf \u0993 \u0995\u09cd\u09af\u09be\u09ae\u09c7\u09b0\u09be\u09df \u09b8\u09ab\u09b2 \u098f\u0995 \u09b6\u09bf\u09b2\u09cd\u09aa\u09c0\u09b0 \u0995\u09a5\u09be&quot;}">--}}
                {{--<img src="{{ asset('frontend') }}/assets/contents/cache/images/400x225x1/uploads/media/2019/09/29/ea5ea864e49b12ac5181cd11e1a92173-5d909ad4261eb.jpg"--}}
                {{--alt="তুলি ও ক্যামেরায় সফল এক শিল্পীর কথা"/>--}}
                {{--</noscript>--}}
                {{--<script data-id="ari-image-756111616764">--}}
                {{--jwARI.fetch($('#ari-image-756111616764'));--}}
                {{--</script>--}}
                {{--<span class="content_type"></span>--}}
                {{--</div>--}}
                {{--<div class="info ">--}}
                {{--<h2 class="title_holder">--}}
                {{--<span class="title">তুলি ও ক্যামেরায় সফল এক শিল্পীর কথা</span>--}}
                {{--</h2>--}}
                {{--<div class="additional">--}}
                {{--<!--category/page-->--}}
                {{--<!--author-->--}}
                {{--<!--time-->--}}
                {{--<!--comment count-->--}}
                {{--<!--like count-->--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<div class="each col_in--}}
                {{--has_image--}}
                {{--image_left--}}
                {{--content_capability_gallery--}}
                {{--content_type_watch--}}
                {{--responsive_image_hide_--}}
                {{--m_show_featured_image_as_left--}}
                {{--">--}}
                {{--<!--overlay anchor-->--}}
                {{--<a class="link_overlay"--}}
                {{--href="{{ asset('frontend') }}/assets/#"></a>--}}
                {{--<!--image-->--}}
                {{--<div class="image">--}}
                {{--<noscript id="ari-image-756111616232"--}}
                {{--data-ari="{&quot;path&quot;:&quot;media\/2019\/09\/29\/1d6b4e8e283cbd3cc22cc9a7174f93ce-5d906c10ad4d9.jpg?jadewits_media_id=1473797&quot;,&quot;ratio&quot;:[16,9],&quot;alt&quot;:&quot;\u0985\u09ad\u09bf\u09af\u09be\u09a4\u09cd\u09b0\u09bf\u0995 \u0987\u09ae\u09a4\u09bf\u09df\u09be\u099c&quot;}">--}}
                {{--<img src="{{ asset('frontend') }}/assets/contents/cache/images/400x225x1/uploads/media/2019/09/29/1d6b4e8e283cbd3cc22cc9a7174f93ce-5d906c10ad4d9.jpg"--}}
                {{--alt="অভিযাত্রিক ইমতিয়াজ"/>--}}
                {{--</noscript>--}}
                {{--<script data-id="ari-image-756111616232">--}}
                {{--jwARI.fetch($('#ari-image-756111616232'));--}}
                {{--</script>--}}
                {{--<span class="content_type"></span>--}}
                {{--</div>--}}
                {{--<div class="info ">--}}
                {{--<h2 class="title_holder">--}}
                {{--<span class="title">অভিযাত্রিক ইমতিয়াজ</span>--}}
                {{--</h2>--}}
                {{--<div class="additional">--}}
                {{--<!--category/page-->--}}
                {{--<!--author-->--}}
                {{--<!--time-->--}}
                {{--<!--comment count-->--}}
                {{--<!--like count-->--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}

                {{--<div id="wrapper_55579"--}}
                {{--class="wrapper special_35_65  container_fixed_height container_white_bg container_top_padding container_bottom_padding ">--}}
                {{--<div class="inner">--}}
                {{--<div id="div_55580" class="p_d   container_fixed_height container_white_bg  _col">--}}
                {{--<div class="hf_wrap">--}}
                {{--<div class="color_theme_">--}}
                {{--<h4 class="headbar"><a href="{{ asset('frontend') }}/assets/#">প্র স্বপ্ন নিয়ে</a>--}}
                {{--</h4>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<div class="inner">--}}
                {{--<div id="widget_75671" class="widget_color_ widget_wrap">--}}
                {{--<div class="contents_listing_tag  widget">--}}
                {{--<div class="contents  summery_view col_articles--}}
                {{--column_view--}}
                {{--">--}}
                {{--<div class="row">--}}
                {{--<div class="col col3">--}}
                {{--<div class="each col_in--}}
                {{--has_image--}}
                {{--image_top--}}
                {{--content_capability_blog--}}
                {{--content_type_article--}}
                {{--responsive_image_hide_--}}
                {{--">--}}
                {{--<!--overlay anchor-->--}}
                {{--<a class="link_overlay"--}}
                {{--href="{{ asset('frontend') }}/assets/#"></a>--}}
                {{--<!--image-->--}}
                {{--<div class="image">--}}
                {{--<noscript id="ari-image-756711616735"--}}
                {{--data-ari="{&quot;path&quot;:&quot;media\/2019\/09\/29\/0258e9f9f45258f9b515e15f01e11c5c-5d9071baefba1.jpg?jadewits_media_id=1473799&quot;,&quot;ratio&quot;:[16,9],&quot;alt&quot;:&quot;\u09b8\u09ae\u09c3\u09a6\u09cd\u09a7 \u09b8\u09bf\u09ad\u09bf\u09b0 \u099c\u09a8\u09cd\u09af&quot;}">--}}
                {{--<img src="{{ asset('frontend') }}/assets/contents/cache/images/400x225x1/uploads/media/2019/09/29/0258e9f9f45258f9b515e15f01e11c5c-5d9071baefba1.jpg"--}}
                {{--alt="সমৃদ্ধ সিভির জন্য"/>--}}
                {{--</noscript>--}}
                {{--<script data-id="ari-image-756711616735">--}}
                {{--jwARI.fetch($('#ari-image-756711616735'));--}}
                {{--</script>--}}
                {{--<span class="content_type"></span>--}}
                {{--</div>--}}
                {{--<div class="info ">--}}
                {{--<h2 class="title_holder">--}}
                {{--<span class="title">সমৃদ্ধ সিভির জন্য</span>--}}
                {{--</h2>--}}
                {{--<div class="summery">--}}
                {{--আমরা অনেক সময় ভাবি, আগে পড়ালেখা শেষ হোক, তারপর--}}
                {{--জীবনবৃত্তান্ত--}}
                {{--বা সিভি লিখতে...--}}
                {{--<!--<span class="excerpt_more" title="বিস্তারিত"><span>বিস্তারিত</span></span>-->--}}
                {{--</div>--}}
                {{--<div class="additional">--}}
                {{--<!--category/page-->--}}
                {{--<!--author-->--}}
                {{--<!--time-->--}}
                {{--<!--comment count-->--}}
                {{--<!--like count-->--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col col3">--}}
                {{--<div class="each col_in--}}
                {{--has_image--}}
                {{--image_top--}}
                {{--content_capability_blog--}}
                {{--content_type_article--}}
                {{--responsive_image_hide_--}}
                {{--">--}}
                {{--<!--overlay anchor-->--}}
                {{--<a class="link_overlay"--}}
                {{--href="{{ asset('frontend') }}/assets/#"></a>--}}
                {{--<!--image-->--}}
                {{--<div class="image">--}}
                {{--<noscript id="ari-image-756711616731"--}}
                {{--data-ari="{&quot;path&quot;:&quot;media\/2019\/09\/29\/18fabab040428080f11bdd905a1d0c2c-5d90697073b14.jpg?jadewits_media_id=1473781&quot;,&quot;ratio&quot;:[16,9],&quot;alt&quot;:&quot;\u0995\u09ae\u09a8\u0993\u09df\u09c7\u09b2\u09a5 \u09ac\u09c3\u09a4\u09cd\u09a4\u09bf \u09aa\u09c7\u09a4\u09c7 \u09b9\u09b2\u09c7&quot;}">--}}
                {{--<img src="{{ asset('frontend') }}/assets/contents/cache/images/400x225x1/uploads/media/2019/09/29/18fabab040428080f11bdd905a1d0c2c-5d90697073b14.jpg"--}}
                {{--alt="কমনওয়েলথ বৃত্তি পেতে হলে"/>--}}
                {{--</noscript>--}}
                {{--<script data-id="ari-image-756711616731">--}}
                {{--jwARI.fetch($('#ari-image-756711616731'));--}}
                {{--</script>--}}
                {{--<span class="content_type"></span>--}}
                {{--</div>--}}
                {{--<div class="info ">--}}
                {{--<h2 class="title_holder">--}}
                {{--<span class="title">কমনওয়েলথ বৃত্তি পেতে হলে</span>--}}
                {{--</h2>--}}
                {{--<div class="summery">--}}
                {{--কমনওয়েলথ বৃত্তির আদ্যোপান্ত জানিয়েছেন ঢাকা--}}
                {{--বিশ্ববিদ্যালয়ের--}}
                {{--ব্যাংকিং অ্যান্ড...--}}
                {{--<!--<span class="excerpt_more" title="বিস্তারিত"><span>বিস্তারিত</span></span>-->--}}
                {{--</div>--}}
                {{--<div class="additional">--}}
                {{--<!--category/page-->--}}
                {{--<!--author-->--}}
                {{--<!--time-->--}}
                {{--<!--comment count-->--}}
                {{--<!--like count-->--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col col3">--}}
                {{--<div class="each col_in--}}
                {{--has_image--}}
                {{--image_top--}}
                {{--content_capability_blog--}}
                {{--content_type_article--}}
                {{--responsive_image_hide_--}}
                {{--">--}}
                {{--<!--overlay anchor-->--}}
                {{--<a class="link_overlay"--}}
                {{--href="{{ asset('frontend') }}/assets/#"></a>--}}
                {{--<!--image-->--}}
                {{--<div class="image">--}}
                {{--<noscript id="ari-image-756711616710"--}}
                {{--data-ari="{&quot;path&quot;:&quot;media\/2019\/09\/29\/5cf0713c4cc2969eddc3425891318756-5d9057c7dae19.jpg?jadewits_media_id=1473749&quot;,&quot;ratio&quot;:[16,9],&quot;alt&quot;:&quot;\u09ac\u09bf\u099c\u09cd\u099e\u09be\u09a8\u09c7 \u09ad\u09df \u0995\u09c0\u09b8\u09c7!&quot;}">--}}
                {{--<img src="{{ asset('frontend') }}/assets/contents/cache/images/400x225x1/uploads/media/2019/09/29/5cf0713c4cc2969eddc3425891318756-5d9057c7dae19.jpg"--}}
                {{--alt="বিজ্ঞানে ভয় কীসে!"/>--}}
                {{--</noscript>--}}
                {{--<script data-id="ari-image-756711616710">--}}
                {{--jwARI.fetch($('#ari-image-756711616710'));--}}
                {{--</script>--}}
                {{--<span class="content_type"></span>--}}
                {{--</div>--}}
                {{--<div class="info ">--}}
                {{--<h2 class="title_holder">--}}
                {{--<span class="title">বিজ্ঞানে ভয় কীসে!</span>--}}
                {{--</h2>--}}
                {{--<div class="summery">--}}
                {{--এক বনাম দশ। একাই দশজনের বিপরীতে দাবা খেলতে নেমেছিলেন--}}
                {{--গ্র্যান্ডমাস্টার এনামুল...--}}
                {{--<!--<span class="excerpt_more" title="বিস্তারিত"><span>বিস্তারিত</span></span>-->--}}
                {{--</div>--}}
                {{--<div class="additional">--}}
                {{--<!--category/page-->--}}
                {{--<!--author-->--}}
                {{--<!--time-->--}}
                {{--<!--comment count-->--}}
                {{--<!--like count-->--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<div id="div_55581" class="p_c     _col">--}}
                {{--<div class="hf_wrap">--}}
                {{--<div class="color_theme_">--}}
                {{--<h4 class="headbar"><a href="{{ asset('frontend') }}/assets/#">ছবির গল্প</a></h4>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<div class="inner">--}}
                {{--<div id="widget_57874" class="widget_color_ widget_wrap">--}}
                {{--<div class="contents_listing  widget">--}}
                {{--<div class="contents  summery_with_list_view--}}
                {{--">--}}
                {{--<div class="row">--}}
                {{--<div class="col col1">--}}
                {{--<div class="each col_in--}}
                {{--has_image--}}
                {{--image_top--}}
                {{--content_capability_blog--}}
                {{--content_type_article--}}
                {{--responsive_image_hide_--}}
                {{--m_show_image_as_top--}}
                {{--">--}}
                {{--<!--overlay anchor-->--}}
                {{--<a class="link_overlay"--}}
                {{--href="{{ asset('frontend') }}/assets/#"></a>--}}
                {{--<!--image-->--}}
                {{--<div class="image">--}}
                {{--<noscript id="ari-image-578741616782"--}}
                {{--data-ari="{&quot;path&quot;:&quot;media\/2019\/09\/29\/65d49998f461401cadd1eecb8f84bc2b-5d90b7d649e25.jpg?jadewits_media_id=1473901&quot;,&quot;ratio&quot;:[16,9],&quot;alt&quot;:&quot;\u09ac\u09c3\u09b7\u09cd\u099f\u09bf\u09a4\u09c7 \u09ad\u09cb\u0997\u09be\u09a8\u09cd\u09a4\u09bf&quot;}">--}}
                {{--<img src="{{ asset('frontend') }}/assets/contents/cache/images/400x225x1/uploads/media/2019/09/29/65d49998f461401cadd1eecb8f84bc2b-5d90b7d649e25.jpg"--}}
                {{--alt="বৃষ্টিতে ভোগান্তি"/>--}}
                {{--</noscript>--}}
                {{--<script data-id="ari-image-578741616782">--}}
                {{--jwARI.fetch($('#ari-image-578741616782'));--}}
                {{--</script>--}}
                {{--<span class="content_type"></span>--}}
                {{--</div>--}}
                {{--<div class="info ">--}}
                {{--<h2 class="title_holder">--}}
                {{--<span class="title">বৃষ্টিতে ভোগান্তি</span>--}}
                {{--</h2>--}}
                {{--<div class="additional">--}}
                {{--<!--category/page-->--}}
                {{--<!--author-->--}}
                {{--<!--time-->--}}
                {{--<!--comment count-->--}}
                {{--<!--like count-->--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}

                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}

                <div id="wrapper_58679"
                     class="wrapper  palo_flex_bg pao_col_3 container_top_padding container_bottom_padding ">
                    <div class="inner">
                        @php
                            $category = \App\Category::where(['name'=> 'আন্তর্জাতিক', 'status' => 1])->first();
                        @endphp
                        @if($category)
                            <div id="div_58682" class="p_b  footer_only_mobile   _col">
                                <div class="hf_wrap">
                                    <div class="color_theme_">
                                        <h4 class="headbar"><a
                                                    href="{{ route('category.post', $category->id) }}">{{ $category->name }}</a>
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
                                                        @php
                                                            $post = \App\Post::where(['status' => 1, 'category_id' => $category->id])->orderBy('id', 'DESC')->first();
                                                        @endphp
                                                        @if($post)

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
                                                                   href="{{ route('single.post', $post->id) }}"></a>
                                                                <!--image-->
                                                                <div class="image">
                                                                    {{--<noscript id="ari-image-586911616763"--}}
                                                                    {{--data-ari="{&quot;path&quot;:&quot;media\/2019\/09\/29\/dc7582906b6db07dfa4a96849452bed8-5d909a5f3b38c.jpg?jadewits_media_id=1473865&quot;,&quot;ratio&quot;:[16,9],&quot;alt&quot;:&quot;\u09ac\u09be\u09a6\u09b6\u09be\u09b9 \u09b8\u09be\u09b2\u09ae\u09be\u09a8\u09c7\u09b0 \u09a6\u09c7\u09b9\u09b0\u0995\u09cd\u09b7\u09c0 \u0997\u09c1\u09b2\u09bf\u09a4\u09c7 \u09a8\u09bf\u09b9\u09a4&quot;}">--}}
                                                                    {{--</noscript>--}}
                                                                    <img src="{{ Storage::url($post->image) }}"
                                                                         alt="{{ $post->title }}" height="216"/>
                                                                    <script data-id="ari-image-586911616763">
                                                                        jwARI.fetch($('#ari-image-586911616763'));
                                                                    </script>
                                                                    <span class="content_type"></span>
                                                                </div>
                                                                <div class="info ">
                                                                    <h2 class="title_holder">
                                                                        <span class="title">{{ $post->title }}</span>
                                                                    </h2>
                                                                    <div class="summery">
                                                                    {!! \Illuminate\Support\Str::words($post->description, 10) !!}
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

                                                        @endif
                                                    </div>
                                                    <div class="col col1">
                                                        <div class="col_in">
                                                            <div class="listing">
                                                                @php
                                                                    $last_post = \App\Post::where(['status' => 1, 'category_id' => $category->id])->orderBy('id', 'DESC')->first();
                                                                    if ($last_post !== null){
                                                                        $last_post_id = $last_post->id;
                                                                        $posts = \App\Post::where(['status' => 1, 'category_id' => $category->id])->orderBy('id', 'DESC')->get()->except($last_post_id)->take(2);
                                                                    } else {
                                                                        $posts = \App\Post::where(['status' => 1, 'category_id' => $category->id])->orderBy('id', 'DESC')->get()->take(2);
                                                                    }

                                                                @endphp
                                                                @if($posts !== null)
                                                                    @foreach($posts as $post)
                                                                        <div class="each col_in
				image_no
				content_capability_blog
				content_type_article
				responsive_image_hide_
				m_show_image_as_top
			">
                                                                            <!--overlay anchor-->
                                                                            <a class="link_overlay"
                                                                               href="{{ route('single.post', $post->id) }}"></a>
                                                                            <!--image-->
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
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='bottom'>
                                                <a class="more_link"
                                                   href="{{ route('category.post', $category->id) }}
                                                           ">আরও</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif

                        @php
                            $category = \App\Category::where(['name'=> 'দূর পরবাস', 'status' => 1])->first();
                        @endphp
                        @if($category)
                            <div id="div_58685" class="p_b  footer_only_mobile   _col">
                                <div class="hf_wrap">
                                    <div class="color_theme_">
                                        <h4 class="headbar"><a
                                                    href="{{ route('category.post', $category->id) }}">{{ $category->name }}</a>
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
                                                        @php
                                                            $post = \App\Post::where(['status' => 1, 'category_id' => $category->id])->orderBy('id', 'DESC')->first();
                                                        @endphp
                                                        @if($post !== null)
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
                                                                   href="{{ route('single.post', $post->id) }}"></a>
                                                                <!--image-->
                                                                <div class="image">
                                                                    {{--<noscript id="ari-image-586911616763"--}}
                                                                    {{--data-ari="{&quot;path&quot;:&quot;media\/2019\/09\/29\/dc7582906b6db07dfa4a96849452bed8-5d909a5f3b38c.jpg?jadewits_media_id=1473865&quot;,&quot;ratio&quot;:[16,9],&quot;alt&quot;:&quot;\u09ac\u09be\u09a6\u09b6\u09be\u09b9 \u09b8\u09be\u09b2\u09ae\u09be\u09a8\u09c7\u09b0 \u09a6\u09c7\u09b9\u09b0\u0995\u09cd\u09b7\u09c0 \u0997\u09c1\u09b2\u09bf\u09a4\u09c7 \u09a8\u09bf\u09b9\u09a4&quot;}">--}}
                                                                    {{--</noscript>--}}
                                                                    <img src="{{ Storage::url($post->image) }}"
                                                                         alt="{{ $post->title }}" height="216"/>
                                                                    <script data-id="ari-image-586911616763">
                                                                        jwARI.fetch($('#ari-image-586911616763'));
                                                                    </script>
                                                                    <span class="content_type"></span>
                                                                </div>
                                                                <div class="info ">
                                                                    <h2 class="title_holder">
                                                                        <span class="title">{{ $post->title }}</span>
                                                                    </h2>
                                                                    <div class="summery">
                                                                    {!! \Illuminate\Support\Str::words($post->description, 10) !!}
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

                                                        @endif
                                                    </div>
                                                    <div class="col col1">
                                                        <div class="col_in">
                                                            <div class="listing">
                                                                @php
                                                                    $last_post = \App\Post::where(['status' => 1, 'category_id' => $category->id])->orderBy('id', 'DESC')->first();
                                                                    if ($last_post !== null){
                                                                        $last_post_id = $last_post->id;
                                                                        $posts = \App\Post::where(['status' => 1, 'category_id' => $category->id])->orderBy('id', 'DESC')->get()->except($last_post_id)->take(2);
                                                                    } else {
                                                                        $posts = \App\Post::where(['status' => 1, 'category_id' => $category->id])->orderBy('id', 'DESC')->get()->take(2);
                                                                    }

                                                                @endphp
                                                                @if($posts !== null)
                                                                    @foreach($posts as $post)
                                                                        <div class="each col_in
				image_no
				content_capability_blog
				content_type_article
				responsive_image_hide_
				m_show_image_as_top
			">
                                                                            <!--overlay anchor-->
                                                                            <a class="link_overlay"
                                                                               href="{{ route('single.post', $post->id) }}"></a>
                                                                            <!--image-->
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
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='bottom'>
                                                <a class="more_link"
                                                   href="{{ route('category.post', $category->id) }}
                                                           ">আরও</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif

                        @php
                            $category = \App\Category::where(['name'=> 'উত্তর আমেরিকা', 'status' => 1])->first();
                        @endphp
                        @if($category)
                            <div id="div_58688" class="p_b  footer_only_mobile   _col">
                                <div class="hf_wrap">
                                    <div class="color_theme_">
                                        <h4 class="headbar"><a
                                                    href="{{ route('category.post', $category->id) }}">{{ $category->name }}</a>
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
                                                        @php
                                                            $post = \App\Post::where(['status' => 1, 'category_id' => $category->id])->orderBy('id', 'DESC')->first();
                                                        @endphp
                                                        @if($post)

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
                                                                   href="{{ route('single.post', $post->id) }}"></a>
                                                                <!--image-->
                                                                <div class="image">
                                                                    {{--<noscript id="ari-image-586911616763"--}}
                                                                    {{--data-ari="{&quot;path&quot;:&quot;media\/2019\/09\/29\/dc7582906b6db07dfa4a96849452bed8-5d909a5f3b38c.jpg?jadewits_media_id=1473865&quot;,&quot;ratio&quot;:[16,9],&quot;alt&quot;:&quot;\u09ac\u09be\u09a6\u09b6\u09be\u09b9 \u09b8\u09be\u09b2\u09ae\u09be\u09a8\u09c7\u09b0 \u09a6\u09c7\u09b9\u09b0\u0995\u09cd\u09b7\u09c0 \u0997\u09c1\u09b2\u09bf\u09a4\u09c7 \u09a8\u09bf\u09b9\u09a4&quot;}">--}}
                                                                    {{--</noscript>--}}
                                                                    <img src="{{ Storage::url($post->image) }}"
                                                                         alt="{{ $post->title }}" height="216"/>
                                                                    <script data-id="ari-image-586911616763">
                                                                        jwARI.fetch($('#ari-image-586911616763'));
                                                                    </script>
                                                                    <span class="content_type"></span>
                                                                </div>
                                                                <div class="info ">
                                                                    <h2 class="title_holder">
                                                                        <span class="title">{{ $post->title }}</span>
                                                                    </h2>
                                                                    <div class="summery">
                                                                    {!! \Illuminate\Support\Str::words($post->description, 10) !!}
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

                                                        @endif
                                                    </div>
                                                    <div class="col col1">
                                                        <div class="col_in">
                                                            <div class="listing">
                                                                @php
                                                                    $last_post = \App\Post::where(['status' => 1, 'category_id' => $category->id])->orderBy('id', 'DESC')->first();
                                                                    if ($last_post !== null){
                                                                        $last_post_id = $last_post->id;
                                                                        $posts = \App\Post::where(['status' => 1, 'category_id' => $category->id])->orderBy('id', 'DESC')->get()->except($last_post_id)->take(2);
                                                                    } else {
                                                                        $posts = \App\Post::where(['status' => 1, 'category_id' => $category->id])->orderBy('id', 'DESC')->get()->take(2);
                                                                    }

                                                                @endphp
                                                                @if($posts !== null)
                                                                    @foreach($posts as $post)
                                                                        <div class="each col_in
				image_no
				content_capability_blog
				content_type_article
				responsive_image_hide_
				m_show_image_as_top
			">
                                                                            <!--overlay anchor-->
                                                                            <a class="link_overlay"
                                                                               href="{{ route('single.post', $post->id) }}"></a>
                                                                            <!--image-->
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
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='bottom'>
                                                <a class="more_link"
                                                   href="{{ route('category.post', $category->id) }}
                                                           ">আরও</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>

                <div id="wrapper_75536"
                     class="wrapper  palo_flex_bg container_fixed_height container_100 container_top_padding container_bottom_padding ">
                    <div class="inner">
                        @php
                            $category = \App\Category::where(['name'=> 'অর্থনীতি', 'status' => 1])->first();
                        @endphp
                        @if($category)
                            <div id="div_75541" class="p_c     _col">
                                <div class="hf_wrap">
                                    <div class="color_theme_">
                                        <h4 class="headbar"><a
                                                    href="{{ route('category.post', $category->id) }}">{{ $category->name }}</a>
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
                                                                @php
                                                                    $posts = \App\Post::where(['status' => 1, 'category_id' => $category->id])->orderBy('id', 'DESC')->get()->take(5);
                                                                @endphp
                                                                @if($posts !== null)
                                                                    @foreach($posts as $post)
                                                                        <div class="each col_in
				image_no
				content_capability_blog
				content_type_article
				responsive_image_hide_
			">
                                                                            <!--overlay anchor-->
                                                                            <a class="link_overlay"
                                                                               href="{{ route('single.post', $post->id) }}"></a>
                                                                            <!--image-->
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
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif

                        @php
                            $category = \App\Category::where(['name'=> 'জীবনযাপন', 'status' => 1])->first();
                        @endphp
                        @if($category)
                            <div id="div_75541" class="p_c     _col">
                                <div class="hf_wrap">
                                    <div class="color_theme_">
                                        <h4 class="headbar"><a
                                                    href="{{ route('category.post', $category->id) }}">{{ $category->name }}</a>
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
                                                                @php
                                                                    $posts = \App\Post::where(['status' => 1, 'category_id' => $category->id])->orderBy('id', 'DESC')->get()->take(5);
                                                                @endphp
                                                                @if($posts !== null)
                                                                    @foreach($posts as $post)
                                                                        <div class="each col_in
				image_no
				content_capability_blog
				content_type_article
				responsive_image_hide_
			">
                                                                            <!--overlay anchor-->
                                                                            <a class="link_overlay"
                                                                               href="{{ route('single.post', $post->id) }}"></a>
                                                                            <!--image-->
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
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif

                        @php
                            $category = \App\Category::where(['name'=> 'বিজ্ঞান ও প্রযুক্তি', 'status' => 1])->first();
                        @endphp
                        @if($category)
                            <div id="div_75541" class="p_c     _col">
                                <div class="hf_wrap">
                                    <div class="color_theme_">
                                        <h4 class="headbar"><a
                                                    href="{{ route('category.post', $category->id) }}">{{ $category->name }}</a>
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
                                                                @php
                                                                    $posts = \App\Post::where(['status' => 1, 'category_id' => $category->id])->orderBy('id', 'DESC')->get()->take(5);
                                                                @endphp
                                                                @if($posts !== null)
                                                                    @foreach($posts as $post)
                                                                        <div class="each col_in
				image_no
				content_capability_blog
				content_type_article
				responsive_image_hide_
			">
                                                                            <!--overlay anchor-->
                                                                            <a class="link_overlay"
                                                                               href="{{ route('single.post', $post->id) }}"></a>
                                                                            <!--image-->
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
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif

                        @php
                            $category = \App\Category::where(['name'=> 'নাগরিক সংবাদ', 'status' => 1])->first();
                        @endphp
                        @if($category)
                            <div id="div_75541" class="p_c     _col">
                                <div class="hf_wrap">
                                    <div class="color_theme_">
                                        <h4 class="headbar"><a
                                                    href="{{ route('category.post', $category->id) }}">{{ $category->name }}</a>
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
                                                                @php
                                                                    $posts = \App\Post::where(['status' => 1, 'category_id' => $category->id])->orderBy('id', 'DESC')->get()->take(5);
                                                                @endphp
                                                                @if($posts !== null)
                                                                    @foreach($posts as $post)
                                                                        <div class="each col_in
				image_no
				content_capability_blog
				content_type_article
				responsive_image_hide_
			">
                                                                            <!--overlay anchor-->
                                                                            <a class="link_overlay"
                                                                               href="{{ route('single.post', $post->id) }}"></a>
                                                                            <!--image-->
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
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif

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