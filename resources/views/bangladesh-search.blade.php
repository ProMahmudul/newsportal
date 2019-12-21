@extends('master')

@section('main-content')
    <div class="pagemaker">
        <div id="div_1596" class="p     _col">
            <div class="inner">
                <div id="wrapper_102072" class="wrapper    ">
                    <div class="inner">
                        <div id="div_102073" class="p_p     _col">
                            <div class="inner">
                                <div id="widget_102074" class="widget_color_ widget_wrap">
                                    <div class="widget_text  widget">
                                        <div class="widget_text_inner aunqur">
                                            <div class="content">
                                                <style>
                                                    .summery_view .image_featured.special_item .image:after {
                                                        background: #0000004d;
                                                        content: '';
                                                        position: absolute;
                                                        left: 0;
                                                        right: 0;
                                                        bottom: 0;
                                                        top: 0;
                                                    }

                                                    .summery_view .image_featured.special_item .title_holder {
                                                        font-size: 30px;
                                                        line-height: 42px;
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

                <div id="wrapper_52369" class="wrapper   container_white_bg container_bottom_padding ">
                    <div class="inner">
                        <div id="div_52370" class="p_p     _col">
                            <div class="inner">
                                <div id="widget_52371" class="widget_color_ widget_wrap">
                                    <div class="widget_text  widget">
                                        <div class="widget_text_inner aunqur">
                                            <div class="content">
                                                <div class="common_google_ads">
                                                    <!-- Async AdSlot 4 for Ad unit 'News_468x60_B1' ### Size: [[970,90],[728,90],[468,60],[336,280],[300,250]] -->
                                                    <!-- Adslot's refresh function: googletag.pubads().refresh([gptadslots[3]]) -->
                                                    <div id='div-gpt-ad-10691-4'>
                                                        <script>
                                                            googletag.cmd.push(function () {
                                                                googletag.display('div-gpt-ad-10691-4');
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
                <div id="wrapper_97616" class="wrapper special_35_65  container_white_bg container_bottom_padding ">
                    <div class="inner">
                        <div id="div_97621" class="p_d   container_bottom_padding  _col">
                            <div class="hf_wrap">
                                <div class="color_theme_">
                                    @if(!$local_posts->isEmpty())
                                        <h4 class="headbar">@if($local_posts[0]->division_id) {{ $local_posts[0]->division->bn_name }} @endif @if($local_posts[0]->district_id) {{ "- ".$local_posts[0]->district->bn_name }} @endif @if($local_posts[0]->upazila_id) {{ "- ".$local_posts[0]->upazila->bn_name }} @endif
                                            সংবাদ</h4></div>
                                @endif
                            </div>
                            <div class="inner">
                                <div id="widget_97686" class="widget_color_ widget_wrap">
                                    <div class="widget_text  widget">
                                        <div class="widget_text_inner aunqur">
                                            <div class="content">
                                                <style>
                                                    .national_zone_widget {
                                                        border-top: none;
                                                        background-color: #f6f6f6;
                                                        height: 48px;
                                                        display: -webkit-flex;
                                                        display: flex;
                                                        align-items: center;
                                                        justify-content: flex-end;
                                                        border-bottom: 1px solid #d8d8d8;
                                                        padding: 5px 0px;
                                                        margin-bottom: 24px;
                                                    }

                                                    .ntl_container_div {
                                                        display: flex;
                                                        width: 100% !important;
                                                        align-items: center;
                                                    }

                                                    .ntl_container_div .div0 {
                                                        display: none;
                                                    }

                                                    .div1,
                                                    .div2,
                                                    .div3,
                                                    div0 {
                                                        width: 32%;
                                                    }

                                                    .div4 {
                                                        width: 12%;
                                                    }

                                                    form#national_news_search {
                                                        width: 100%;
                                                        display: flex;
                                                    }

                                                    select.division_select,
                                                    select.district_select,
                                                    select.upozilla_select {
                                                        border: none;
                                                        background: none;
                                                        font-size: 18px;
                                                        font-family: 'kiron', SolaimanLipi, Arial, Vrinda, FallbackBengaliFont, Helvetica, sans-serif !important;
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
                                                        height: 48px;
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

                                                    @media screen and (max-width: 700px) {
                                                        select.division_select,
                                                        select.district_select,
                                                        select.upozilla_select {
                                                            font-size: 16px;
                                                        }

                                                        .ntl_container_div {
                                                            display: block !important;
                                                        }

                                                        .div1,
                                                        .div2,
                                                        .div3,
                                                        div0 {
                                                            width: 33% !important;
                                                            padding: 0px;
                                                        }

                                                        .national_zone_widget {
                                                            height: auto !important;
                                                        }

                                                        .div4 {
                                                            width: 50% !important;
                                                            margin-left: 21%;
                                                            margin-top: 5px;
                                                        }
                                                    }
                                                </style>
                                                {{--<h2 class="national_news_head">এলাকার খবর খুঁজুন</h2>--}}
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="widget_97631" class="widget_color_ widget_wrap">
                                    <div class="contents_listing  widget">
                                        <div class="contents  summery_view
			">
                                            <div class="row">

                                                <div class="col col1">
                                                    @if(!$local_posts->isEmpty())
                                                        @foreach($local_posts as $local_post)
                                                            <div class="each col_in
			has_image
			image_left
			content_capability_blog
			content_type_article
			responsive_image_hide_
		">
                                                                <!--overlay anchor-->
                                                                <a class="link_overlay"
                                                                   href="{{ route('single.post', $local_post->post->id) }}"></a>
                                                                <!--image-->
                                                                <div class="image">
                                                                    {{--<noscript id="ari-image-976311616802"--}}
                                                                    {{--data-ari="{&quot;path&quot;:&quot;media\/2019\/09\/29\/16bed88a3667f3cb873439ece12ac869-5d90e134a064e.jpg?jadewits_media_id=1473926&quot;,&quot;ratio&quot;:[16,9],&quot;alt&quot;:&quot;\u09b8\u09b0\u0995\u09be\u09b0 \u099c\u09a8\u0997\u09a3\u09c7\u09b0 \u09a4\u09a5\u09cd\u09af \u0985\u09a7\u09bf\u0995\u09be\u09b0 \u09a8\u09bf\u09b6\u09cd\u099a\u09bf\u09a4 \u0995\u09b0\u09c7\u099b\u09c7: \u09a4\u09a5\u09cd\u09af\u09ae\u09a8\u09cd\u09a4\u09cd\u09b0\u09c0&quot;}">--}}
                                                                    {{--</noscript>--}}
                                                                    <img src="{{ Storage::url($local_post->post->image) }}"
                                                                         alt="{{ $local_post->post->title }}"/>
                                                                    <script data-id="ari-image-976311616802">
                                                                        jwARI.fetch($('#ari-image-976311616802'));
                                                                    </script>
                                                                    <span class="content_type"></span>
                                                                </div>
                                                                <div class="info has_ai">
                                                                    <h2 class="title_holder">
                                                                        <span class="title">{{ $local_post->post->title }}</span>
                                                                    </h2>
                                                                    <div class="summery">
                                                                    {!! \Illuminate\Support\Str::words($local_post->post->description, 20) !!}
                                                                    <!--<span class="excerpt_more" title="বিস্তারিত"><span>বিস্তারিত</span></span>-->
                                                                    </div>
                                                                    <div class="additional">
                                                                        <!--category/page-->
                                                                        <!--author-->
                                                                        <!--time-->
                                                                        <span class="time aitm"
                                                                              data-published="2019-09-29T22:48:00+06:00"
                                                                              data-modified="2019-09-29T22:52:35+06:00">
                                                                        @php
                                                                            $created_at = \Illuminate\Support\Carbon::createFromFormat('Y-m-d H:s:i', $local_post->post->created_at);
                                                                            echo $created_at->diffForHumans(\Carbon\Carbon::now())
                                                                        @endphp
                                                                    </span>
                                                                        <!--comment count-->
                                                                        <!--like count-->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    @else
                                                        <div class="each col_in">
                                                            @if(Session::has('message'))
                                                                <div class="alert {{ Session::get('alert_type') }} alert-dismissible fade show"
                                                                     style="font-size: 26px; margin-bottom: 20px">
                                                                    <a href="#" class="close" data-dismiss="alert"
                                                                       aria-label="close">&times;</a>
                                                                    <strong style="color: red;">{{ Session::get('message') }}</strong>
                                                                </div>
                                                            @endif
                                                        </div>
                                                    @endif
                                                </div>

                                            </div>
                                        </div>
                                        <div class='bottom'>
                                            {{--<a class="more_link" href="assets/index.html">আরও</a>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="div_97626" class="p_c   container_fixed_height  _col">
                            <div class="inner">
                                <div id="widget_97656" class="widget_color_ widget_wrap">
                                    <div class="contents_listing  widget">
                                        <h4 class="titlebar">
                                            <a href="assets/index.html">
                                                অন্যান্য
                                            </a>
                                        </h4>
                                        <div class="contents  summery_view
			shaded_bg
			">
                                            <div class="row">
                                                <div class="col col1">
                                                    <div class="each col_in
			has_image
			image_top
			content_capability_gallery
			content_type_gallery
			responsive_image_hide_
			m_show_image_as_top
		">
                                                        <!--overlay anchor-->
                                                        <a class="link_overlay" href="assets/index.html"></a>
                                                        <!--image-->
                                                        <div class="image">
                                                            <noscript id="ari-image-976561604635"
                                                                      data-ari="{&quot;path&quot;:&quot;media\/2019\/07\/16\/05bec6aabc88ee4a0e91156abe059b17-5d2e0887c3410.jpg?jadewits_media_id=1455790&quot;,&quot;ratio&quot;:[16,9],&quot;alt&quot;:&quot;\u09ac\u09c3\u09b7\u09cd\u099f\u09bf\u09a4\u09c7 \u09ad\u09cb\u0997\u09be\u09a8\u09cd\u09a4\u09bf \u09ab\u09be\u09b0\u09cd\u09ae\u0997\u09c7\u099f\u09c7&quot;}">
                                                                <img src="assets/contents/cache/images/400x225x1/uploads/media/2019/07/16/05bec6aabc88ee4a0e91156abe059b17-5d2e0887c3410.jpg"
                                                                     alt="বৃষ্টিতে ভোগান্তি ফার্মগেটে"/>
                                                            </noscript>
                                                            <script data-id="ari-image-976561604635">
                                                                jwARI.fetch($('#ari-image-976561604635'));
                                                            </script>
                                                            <span class="content_type"></span>
                                                        </div>
                                                        <div class="info has_ai">
                                                            <h2 class="title_holder">
                                                                <span class="title">বৃষ্টিতে ভোগান্তি ফার্মগেটে</span>
                                                            </h2>
                                                            <div class="additional">
                                                                <!--category/page-->
                                                                <!--author-->
                                                                <!--time-->
                                                                <span class="time aitm"
                                                                      data-published="2019-07-16T23:20:00+06:00"
                                                                      data-modified="2019-07-16T23:27:19+06:00">১৬ জুলাই ২০১৯</span>
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
                                <div id="widget_97696" class="widget_color_ widget_wrap">
                                    <div class="contents_listing  widget">
                                        <div class="contents  summery_view col_articles
			shaded_bg
						column_view
			">
                                            <div class="row">
                                                <div class="col col2">
                                                    <div class="each col_in
			has_image
			image_top
			content_capability_gallery
			content_type_gallery
			responsive_image_hide_
		">
                                                        <!--overlay anchor-->
                                                        <a class="link_overlay" href="assets/index.html"></a>
                                                        <!--image-->
                                                        <div class="image">
                                                            <noscript id="ari-image-976961591302"
                                                                      data-ari="{&quot;path&quot;:&quot;media\/2019\/04\/29\/5a4df99f99ec7c37e7e940674c24d62d-5cc6adf7bd6f0.jpg?jadewits_media_id=1435531&quot;,&quot;ratio&quot;:[16,9],&quot;alt&quot;:&quot;\u2018\u099c\u0999\u09cd\u0997\u09bf \u0986\u09b8\u09cd\u09a4\u09be\u09a8\u09be\u09df\u2019 \u0985\u09ad\u09bf\u09af\u09be\u09a8&quot;}">
                                                                <img src="assets/contents/cache/images/400x225x1/uploads/media/2019/04/29/5a4df99f99ec7c37e7e940674c24d62d-5cc6adf7bd6f0.jpg"
                                                                     alt="‘জঙ্গি আস্তানায়’ অভিযান"/>
                                                            </noscript>
                                                            <script data-id="ari-image-976961591302">
                                                                jwARI.fetch($('#ari-image-976961591302'));
                                                            </script>
                                                            <span class="content_type"></span>
                                                        </div>
                                                        <div class="info has_ai">
                                                            <h2 class="title_holder">
                                                                <span class="title">‘জঙ্গি আস্তানায়’ অভিযান</span>
                                                            </h2>
                                                            <div class="additional">
                                                                <!--category/page-->
                                                                <!--author-->
                                                                <!--time-->
                                                                <span class="time aitm"
                                                                      data-published="2019-04-29T13:54:00+06:00"
                                                                      data-modified="2019-04-29T13:57:02+06:00">২৯ এপ্রিল ২০১৯</span>
                                                                <!--comment count-->
                                                                <!--like count-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col col2">
                                                    <div class="each col_in
			has_image
			image_top
			content_capability_gallery
			content_type_gallery
			responsive_image_hide_
		">
                                                        <!--overlay anchor-->
                                                        <a class="link_overlay" href="assets/index.html"></a>
                                                        <!--image-->
                                                        <div class="image">
                                                            <noscript id="ari-image-976961591176"
                                                                      data-ari="{&quot;path&quot;:&quot;media\/2019\/04\/28\/0affc40f751f55fda0861ecf59cd46c9-5cc5939612234.jpg?jadewits_media_id=1435340&quot;,&quot;ratio&quot;:[16,9],&quot;alt&quot;:&quot;\u0989\u09ab\u09ab, \u0997\u09b0\u09ae!&quot;}">
                                                                <img src="assets/contents/cache/images/400x225x1/uploads/media/2019/04/28/0affc40f751f55fda0861ecf59cd46c9-5cc5939612234.jpg"
                                                                     alt="উফফ, গরম!"/>
                                                            </noscript>
                                                            <script data-id="ari-image-976961591176">
                                                                jwARI.fetch($('#ari-image-976961591176'));
                                                            </script>
                                                            <span class="content_type"></span>
                                                        </div>
                                                        <div class="info has_ai">
                                                            <h2 class="title_holder">
                                                                <span class="title">উফফ, গরম!</span>
                                                            </h2>
                                                            <div class="additional">
                                                                <!--category/page-->
                                                                <!--author-->
                                                                <!--time-->
                                                                <span class="time aitm"
                                                                      data-published="2019-04-28T17:49:00+06:00"
                                                                      data-modified="2019-04-28T17:53:27+06:00">২৮ এপ্রিল ২০১৯</span>
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
			image_top
			content_capability_gallery
			content_type_gallery
			responsive_image_hide_
		">
                                                        <!--overlay anchor-->
                                                        <a class="link_overlay" href="assets/index.html"></a>
                                                        <!--image-->
                                                        <div class="image">
                                                            <noscript id="ari-image-976961590988"
                                                                      data-ari="{&quot;path&quot;:&quot;media\/2019\/04\/27\/54b534a6fb47faf328a336409dc73b03-5cc440e7aa379.jpg?jadewits_media_id=1435077&quot;,&quot;ratio&quot;:[16,9],&quot;alt&quot;:&quot;\u09aa\u09c1\u09b0\u09be\u09a8 \u09a2\u09be\u0995\u09be\u09df \u09aa\u09be\u09a8\u09bf \u09b8\u09ae\u09b8\u09cd\u09af\u09be&quot;}">
                                                                <img src="assets/contents/cache/images/400x225x1/uploads/media/2019/04/27/54b534a6fb47faf328a336409dc73b03-5cc440e7aa379.jpg"
                                                                     alt="পুরান ঢাকায় পানি সমস্যা"/>
                                                            </noscript>
                                                            <script data-id="ari-image-976961590988">
                                                                jwARI.fetch($('#ari-image-976961590988'));
                                                            </script>
                                                            <span class="content_type"></span>
                                                        </div>
                                                        <div class="info has_ai">
                                                            <h2 class="title_holder">
                                                                <span class="title">পুরান ঢাকায় পানি সমস্যা</span>
                                                            </h2>
                                                            <div class="additional">
                                                                <!--category/page-->
                                                                <!--author-->
                                                                <!--time-->
                                                                <span class="time aitm"
                                                                      data-published="2019-04-27T17:43:00+06:00"
                                                                      data-modified="2019-04-27T17:46:33+06:00">২৭ এপ্রিল ২০১৯</span>
                                                                <!--comment count-->
                                                                <!--like count-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col col2">
                                                    <div class="each col_in
			has_image
			image_top
			content_capability_gallery
			content_type_gallery
			responsive_image_hide_
		">
                                                        <!--overlay anchor-->
                                                        <a class="link_overlay" href="assets/index.html"></a>
                                                        <!--image-->
                                                        <div class="image">
                                                            <noscript id="ari-image-976961590649"
                                                                      data-ari="{&quot;path&quot;:&quot;media\/2019\/04\/25\/25fc1fb6fa95a381175f6a8f300fed49-5cc1c7b365e31.jpg?jadewits_media_id=1434591&quot;,&quot;ratio&quot;:[16,9],&quot;alt&quot;:&quot;\u099a\u09bf\u0982\u09dc\u09bf \u09aa\u09cb\u09a8\u09be \u0986\u09b9\u09b0\u09a3&quot;}">
                                                                <img src="assets/contents/cache/images/400x225x1/uploads/media/2019/04/25/25fc1fb6fa95a381175f6a8f300fed49-5cc1c7b365e31.jpg"
                                                                     alt="চিংড়ি পোনা আহরণ"/>
                                                            </noscript>
                                                            <script data-id="ari-image-976961590649">
                                                                jwARI.fetch($('#ari-image-976961590649'));
                                                            </script>
                                                            <span class="content_type"></span>
                                                        </div>
                                                        <div class="info has_ai">
                                                            <h2 class="title_holder">
                                                                <span class="title">চিংড়ি পোনা আহরণ</span>
                                                            </h2>
                                                            <div class="additional">
                                                                <!--category/page-->
                                                                <!--author-->
                                                                <!--time-->
                                                                <span class="time aitm"
                                                                      data-published="2019-04-25T20:41:00+06:00"
                                                                      data-modified="2019-04-25T20:45:44+06:00">২৫ এপ্রিল ২০১৯</span>
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
                                <div id="widget_100701" class="widget_color_ widget_wrap">
                                    <div class="widget_text  widget">
                                        <div class="widget_text_inner aunqur">
                                            <div class="content">
                                                <!-- <div class="bongobondhu"><a href="assets/https://www.prothomalo.com/father-of-nation" target="_blank"><img src="assets///paloimages.prothom-alo.com/contents/cache/images/540x283x1/uploads/media/2019/03/16/c28ac85aba3742c448a879479270c2de-5c8d0856334f1.png" alt="বঙ্গবন্ধুর জন্মদিন "> </a> </div>
<a id="p_alo_home" href="assets/https://www.prothomalo.com/national-mourning-day"><img src="assets/https://paloimages.prothom-alo.com/contents/cache/images/540x0x1/uploads/media/2019/08/14/1a5732f6967a4dd77c516dadfe181c56-5d5416ca5b876.png" style="margin-bottom: 12px;"></a> --></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div id="wrapper_52443" class="wrapper   container_white_bg container_bottom_padding ">
                    <div class="inner">
                        <div id="div_52444" class="p_p     _col">
                            <div class="inner">
                                <div id="widget_52445" class="widget_color_ widget_wrap">
                                    <div class="widget_text  widget">
                                        <div class="widget_text_inner aunqur">
                                            <div class="content">
                                                <div class="common_google_ads">
                                                    <!-- Async AdSlot 5 for Ad unit 'News_728x90_B2' ### Size: [[970,90],[728,90],[468,60],[336,280],[300,250]] -->
                                                    <!-- Adslot's refresh function: googletag.pubads().refresh([gptadslots[4]]) -->
                                                    <div id='div-gpt-ad-10691-5'>
                                                        <script>
                                                            googletag.cmd.push(function () {
                                                                googletag.display('div-gpt-ad-10691-5');
                                                            });
                                                        </script>
                                                    </div>
                                                    <!-- End AdSlot 5 -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="wrapper_67736" class="wrapper   container_white_bg ">
                    <div class="inner">
                        <div id="div_67741" class="p_p     _col">
                            <div class="inner">
                                <div id="widget_67746" class="widget_color_ widget_wrap">
                                    <div class="widget_text  widget">
                                        <div class="widget_text_inner aunqur">
                                            <div class="content">
                                                <script>
                                                    googletag.cmd.push(function () {
                                                        googletag.defineOutOfPageSlot('/85406138/Mobile_Int_320x480', 'div-gpt-ad-1494748066602-0').addService(googletag.pubads());
                                                        googletag.pubads().enableSingleRequest();
                                                        googletag.pubads().collapseEmptyDivs();
                                                        googletag.enableServices();
                                                    });
                                                </script>
                                                <!-- /85406138/Mobile_Int_320x480 -->
                                                <div id='div-gpt-ad-1494748066602-0'>
                                                    <script>
                                                        googletag.cmd.push(function () {
                                                            googletag.display('div-gpt-ad-1494748066602-0');
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
                </div>
                <div id="wrapper_97726" class="wrapper    ">
                    <div class="inner">
                        <div id="div_97731" class="p_p     _col">
                            <div class="inner">
                                <div id="widget_97736" class="widget_color_ widget_wrap">
                                    <div class="widget_text  widget">
                                        <div class="widget_text_inner aunqur">
                                            <div class="content">
                                                <script>
                                                    //R2
                                                    $("#widget_97631 .contents_listing  .col1:nth-child(3)").after('<div class="ad_spcl_for_brdr"><div class="common_google_ads top_bottom_padding"><div id="div-gpt-ad-10691-14"><script>googletag.cmd.push(function() { googletag.display("div-gpt-ad-10691-14"); });</' + 'script></div></div></div>');
                                                    //R3
                                                    $("#widget_97631 .contents_listing  .col1:nth-child(8)").after('<div class="ad_spcl_for_brdr"><div class="common_google_ads top_bottom_padding"><div id="div-gpt-ad-10691-15"><script>googletag.cmd.push(function() { googletag.display("div-gpt-ad-10691-15"); });</' + 'script></div></div></div>');
                                                </script>
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
@endsection