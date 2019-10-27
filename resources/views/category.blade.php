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
                <div id="wrapper_51680" class="wrapper special_32_5_67_5  container_white_bg ">
                    <div class="inner">
                        <div id="div_51681" class="p_d   container_fixed_height  _col">
                            <div class="inner">
                                <div id="wrapper_51686" class="wrapper special_32_5_67_5   ">
                                    <div class="inner">
                                        <div id="div_51687" class="p_d_d     _col">
                                            <div class="inner">
                                                <div id="widget_51689" class="widget_color_ widget_wrap">
                                                    <div class="contents_listing  widget">
                                                        <div class="contents  summery_view
			shaded_bg
			">
                                                            <div class="row">
                                                                <div class="col col1">
                                                                    @php
                                                                        $post = \App\Category::with(['posts' => function ($q) {
                                                                                         $q->orderBy('id', 'desc')->take(1);
                                                                                     }])->where('id', $id)->first();

                                                                    @endphp
                                                                    <div class="each col_in
			has_image
			image_featured
			content_capability_blog
			content_type_article
			responsive_image_hide_
			m_show_image_as_top
						special_item
		">
                                                                        <!--overlay anchor-->
                                                                        <a class="link_overlay"
                                                                           href="{{ route('single.post', $post->posts[0]->id) }}"></a>
                                                                        <!--image-->
                                                                        <div class="image">
                                                                            <noscript id="ari-image-516891616814"
                                                                                      data-ari="{&quot;path&quot;:&quot;media\/2018\/03\/18\/cc1107dbb1c246a9093a95ef8df7e78e-5aae1122a6fb1.jpg?jadewits_media_id=1199871&quot;,&quot;ratio&quot;:[16,9],&quot;alt&quot;:&quot;\u099c\u09bf\u09a8 \u09a4\u09be\u09dc\u09be\u09a8\u09cb\u09b0 \u09a8\u09be\u09ae\u09c7 \u09a4\u09b0\u09c1\u09a3\u09c0\u0995\u09c7 \u09a7\u09b0\u09cd\u09b7\u09a3\u09c7\u09b0 \u0985\u09ad\u09bf\u09af\u09cb\u0997&quot;}">
                                                                            </noscript>

                                                                            <img src="{{ Storage::url($post->posts[0]->image) }}"
                                                                                 alt="{{ $post->posts[0]->title }}"/>
                                                                            <script data-id="ari-image-516891616814">
                                                                                jwARI.fetch($('#ari-image-516891616814'));
                                                                            </script>
                                                                            <span class="content_type"></span>
                                                                        </div>
                                                                        <div class="info ">
                                                                            <h2 class="title_holder">
                                                                                <span class="title">{{ $post->posts[0]->title }}</span>

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

                                        <div id="div_51688" class="p_d_c     _col">
                                            <div class="inner">
                                                <div id="widget_51690" class="widget_color_ widget_wrap">
                                                    <div class="contents_listing  widget">
                                                        <div class="contents  summery_view
			">
                                                            <div class="row">
                                                                @php
                                                                    $post = \App\Category::with(['posts' => function ($q) {
                                                                     $q->orderBy('id', 'desc')->take(1);
                                                                      }])->where('id', $id)->first();
                                                                     $last_insert_id = $post->posts[0]->id;

                                                                    $cats = \Illuminate\Support\Facades\DB::table('categories')
                                                                        ->rightJoin('posts', 'categories.id', '=', 'posts.category_id')
                                                                        ->where('category_id', $id)
                                                                        ->orderBy('posts.id', 'desc')
                                                                        ->take(2)
                                                                        ->whereNotIn('posts.id', [$last_insert_id])
                                                                        ->get();

                                                                @endphp
                                                                @foreach($cats as $post)
                                                                    <div class="col col1">
                                                                        <div class="each col_in
			has_image
			image_featured
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
                                                                                <noscript id="ari-image-516901616813"
                                                                                          data-ari="{&quot;path&quot;:&quot;media\/2017\/10\/13\/7e315843eb27154b490273e90e28c044-59e0393f488f2.jpg?jadewits_media_id=1030981&quot;,&quot;ratio&quot;:[16,9],&quot;alt&quot;:&quot;\u099f\u09c7\u0995\u09a8\u09be\u09ab\u09c7 \u2018\u09ac\u09a8\u09cd\u09a6\u09c1\u0995\u09af\u09c1\u09a6\u09cd\u09a7\u09c7\u2019 \u09e8 \u09b0\u09cb\u09b9\u09bf\u0999\u09cd\u0997\u09be \u09a8\u09bf\u09b9\u09a4&quot;}">
                                                                                </noscript>
                                                                                <img src="{{ Storage::url($post->image) }}"
                                                                                     alt="{{ $post->title }}"/>
                                                                                <script data-id="ari-image-516901616813">
                                                                                    jwARI.fetch($('#ari-image-516901616813'));
                                                                                </script>
                                                                                <span class="content_type"></span>
                                                                            </div>
                                                                            <div class="info">
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
                        <div id="div_51682" class="p_c     _col">
                            <div class="inner">
                                <div id="widget_51683" class="widget_color_ widget_wrap">
                                    <div class="widget_text  widget">
                                        <div class="widget_text_inner aunqur">
                                            <div class="content">
                                                <div class="common_google_ads">
                                                    <!-- Async AdSlot 13 for Ad unit 'News_336x280_R1' ### Size: [[336,280],[300,250]] -->
                                                    <!-- Adslot's refresh function: googletag.pubads().refresh([gptadslots[12]]) -->
                                                    <div id='div-gpt-ad-10691-13'>
                                                        <script>
                                                            googletag.cmd.push(function () {
                                                                googletag.display('div-gpt-ad-10691-13');
                                                            });
                                                        </script>
                                                    </div>
                                                    <!-- End AdSlot 13 -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="wrapper_97666" class="wrapper   container_white_bg ">
                    <div class="inner">
                        <div id="div_97671" class="p_p     _col">
                            <div class="inner">
                                <div id="widget_97676" class="widget_color_ widget_wrap">
                                    <div class="contents_listing  widget">
                                        <div class="contents  summery_view col_articles
						column_view
			">
                                            <div class="row">
                                                @php
                                                    $post = \App\Category::with(['posts' => function ($q) {
                                                     $q->orderBy('id', 'desc')->take(1);
                                                      }])->where('id', $id)->first();
                                                     $last_insert_id = $post->posts[0]->id;

                                                      $l_id = array();
                                                     for($i = 0; $i < 4; $i++){
                                                     $l_id[] = $last_insert_id - $i;
                                                     }

                                                    $cats = \Illuminate\Support\Facades\DB::table('categories')
                                                        ->rightJoin('posts', 'categories.id', '=', 'posts.category_id')
                                                        ->where('category_id', $id)
                                                        ->orderBy('posts.id', 'desc')
                                                        ->take(4)
                                                        ->whereNotIn('posts.id', $l_id)
                                                        ->get();

                                                @endphp

                                                @foreach($cats as $post)
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
                                                                <noscript id="ari-image-976761616809"
                                                                          data-ari="{&quot;path&quot;:&quot;media\/2019\/09\/19\/01be6595cbefc06b30a93610b33a5eb9-5d83655c58ddb.jpg?jadewits_media_id=1471260&quot;,&quot;ratio&quot;:[16,9],&quot;alt&quot;:&quot;\u099b\u09be\u09a4\u09cd\u09b0\u09b2\u09c0\u0997\u09c7\u09b0 \u09ad\u09be\u09b0\u09aa\u09cd\u09b0\u09be\u09aa\u09cd\u09a4 \u09b8\u09ad\u09be\u09aa\u09a4\u09bf\u09b0 \u099c\u09bf\u09a1\u09bf&quot;}">
                                                                </noscript>
                                                                <img src="{{ Storage::url($post->image) }}"
                                                                     alt="{{ $post->title }}"/>
                                                                <script data-id="ari-image-976761616809">
                                                                    jwARI.fetch($('#ari-image-976761616809'));
                                                                </script>
                                                                <span class="content_type"></span>
                                                            </div>
                                                            <div class="info has_ai">
                                                                <h2 class="title_holder">
                                                                    <span class="title">{{ $post->title }}</span>
                                                                </h2>

                                                                <div class="summery">
                                                                {!! \Illuminate\Support\Str::words($post->description, 17) !!}
                                                                <!--<span class="excerpt_more" title="বিস্তারিত"><span>বিস্তারিত</span></span>-->
                                                                </div>
                                                                <div class="additional">
                                                                    <!--category/page-->
                                                                    <!--author-->
                                                                    <!--time-->
                                                                    <span class="time aitm"
                                                                          data-published="2019-09-30T08:37:00+06:00"
                                                                          data-modified="2019-09-30T08:40:45+06:00">
                                                                        @php
                                                                            $created_at = \Illuminate\Support\Carbon::createFromFormat('Y-m-d H:s:i', $post->created_at);
                                                                            echo $created_at->diffForHumans(\Carbon\Carbon::now())
                                                                        @endphp

                                                                    </span>
                                                                    <!--comment count-->
                                                                    <a class="comments aitm" title=""
                                                                       href="">5<span> Comments</span></a>
                                                                    <!--<span class="comments aitm" title="মন্তব্য" >৫<span> মন্তব্য</span></span>-->
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
                                    <h4 class="headbar">{{ $category->name }} সব খবর</h4></div>
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
                                {{--<div id="widget_97681" class="widget_color_ widget_wrap">--}}
                                {{--<div class="pa_national_zonewise_search_widget  widget">--}}
                                {{--<div id="widget97681" class="national_zone_widget">--}}
                                {{--<form action="" method="post" id="national_news_search">--}}
                                {{--<div class="wdg_message_show"></div>--}}
                                {{--<div class="ntl_container_div">--}}
                                {{--<div class="div0">পড়তে চাই</div>--}}
                                {{--<div class="div1">--}}
                                {{--<select name="division_s" id="division_s"--}}
                                {{--class="division_select">--}}
                                {{--<option value="">বিভাগ</option>--}}
                                {{--<option value="87">ঢাকা</option>--}}
                                {{--<option value="1698">চট্টগ্রাম</option>--}}
                                {{--<option value="1684">সিলেট</option>--}}
                                {{--<option value="1688">বরিশাল</option>--}}
                                {{--<option value="1692">রাজশাহী</option>--}}
                                {{--<option value="1690">খুলনা</option>--}}
                                {{--<option value="1682">রংপুর</option>--}}
                                {{--<option value="256">ময়মনসিংহ</option>--}}
                                {{--</select>--}}
                                {{--</div>--}}
                                {{--<div class="div2">--}}
                                {{--<select name="district_s" id="district_s_0"--}}
                                {{--class="district_select">--}}
                                {{--<option value="null">জেলা</option>--}}
                                {{--</select>--}}
                                {{--<select name="district_s" id="district_s_1698"--}}
                                {{--class="district_select" style="display:none">--}}
                                {{--<option value="NULL">জেলা</option>--}}
                                {{--<option value="55">চট্টগ্রাম</option>--}}
                                {{--<option value="243">চাঁদপুর</option>--}}
                                {{--<option value="144">কুমিল্লা</option>--}}
                                {{--<option value="264">কক্সবাজার</option>--}}
                                {{--<option value="376">বান্দরবান</option>--}}
                                {{--<option value="337">খাগড়াছড়ি</option>--}}
                                {{--<option value="262">রাঙামাটি</option>--}}
                                {{--<option value="266">নোয়াখালী</option>--}}
                                {{--<option value="441">লক্ষ্মীপুর</option>--}}
                                {{--<option value="333">ফেনী</option>--}}
                                {{--<option value="328">ব্রাহ্মণবাড়িয়া</option>--}}
                                {{--</select>--}}
                                {{--<select name="district_s" id="district_s_256"--}}
                                {{--class="district_select" style="display:none">--}}
                                {{--<option value="NULL">জেলা</option>--}}
                                {{--<option value="256">ময়মনসিংহ</option>--}}
                                {{--<option value="278">শেরপুর</option>--}}
                                {{--<option value="530">জামালপুর</option>--}}
                                {{--<option value="253">নেত্রকোনা</option>--}}
                                {{--</select>--}}
                                {{--<select name="district_s" id="district_s_87"--}}
                                {{--class="district_select" style="display:none">--}}
                                {{--<option value="NULL">জেলা</option>--}}
                                {{--<option value="1148">ঢাকা</option>--}}
                                {{--<option value="386">নরসিংদী</option>--}}
                                {{--<option value="247">নারায়ণগঞ্জ</option>--}}
                                {{--<option value="245">গাজীপুর</option>--}}
                                {{--<option value="385">মুন্সিগঞ্জ</option>--}}
                                {{--<option value="374">মানিকগঞ্জ</option>--}}
                                {{--<option value="329">টাঙ্গাইল</option>--}}
                                {{--<option value="368">রাজবাড়ী</option>--}}
                                {{--<option value="314">গোপালগঞ্জ</option>--}}
                                {{--<option value="410">শরীয়তপুর</option>--}}
                                {{--<option value="311">মাদারীপুর</option>--}}
                                {{--<option value="315">ফরিদপুর</option>--}}
                                {{--<option value="250">কিশোরগঞ্জ</option>--}}
                                {{--</select>--}}
                                {{--<select name="district_s" id="district_s_1682"--}}
                                {{--class="district_select" style="display:none">--}}
                                {{--<option value="NULL">জেলা</option>--}}
                                {{--<option value="47">রংপুর</option>--}}
                                {{--<option value="282">দিনাজপুর</option>--}}
                                {{--<option value="322">গাইবান্ধা</option>--}}
                                {{--<option value="301">কুড়িগ্রাম</option>--}}
                                {{--<option value="283">নীলফামারী</option>--}}
                                {{--<option value="483">পঞ্চগড়</option>--}}
                                {{--<option value="299">ঠাকুরগাঁও</option>--}}
                                {{--<option value="356">লালমনিরহাট</option>--}}
                                {{--</select>--}}
                                {{--<select name="district_s" id="district_s_1684"--}}
                                {{--class="district_select" style="display:none">--}}
                                {{--<option value="NULL">জেলা</option>--}}
                                {{--<option value="88">সিলেট</option>--}}
                                {{--<option value="260">হবিগঞ্জ</option>--}}
                                {{--<option value="244">মৌলভীবাজার</option>--}}
                                {{--<option value="252">সুনামগঞ্জ</option>--}}
                                {{--</select>--}}
                                {{--<select name="district_s" id="district_s_1688"--}}
                                {{--class="district_select" style="display:none">--}}
                                {{--<option value="NULL">জেলা</option>--}}
                                {{--<option value="92">বরিশাল</option>--}}
                                {{--<option value="275">বরগুনা</option>--}}
                                {{--<option value="324">ভোলা</option>--}}
                                {{--<option value="339">ঝালকাঠি</option>--}}
                                {{--<option value="355">পটুয়াখালী</option>--}}
                                {{--<option value="307">পিরোজপুর</option>--}}
                                {{--</select>--}}
                                {{--<select name="district_s" id="district_s_1690"--}}
                                {{--class="district_select" style="display:none">--}}
                                {{--<option value="NULL">জেলা</option>--}}
                                {{--<option value="90">খুলনা</option>--}}
                                {{--<option value="285">বাগেরহাট</option>--}}
                                {{--<option value="364">চুয়াডাঙ্গা</option>--}}
                                {{--<option value="241">যশোর</option>--}}
                                {{--<option value="312">ঝিনাইদহ</option>--}}
                                {{--<option value="272">কুষ্টিয়া</option>--}}
                                {{--<option value="463">মাগুরা</option>--}}
                                {{--<option value="269">মেহেরপুর</option>--}}
                                {{--<option value="248">নড়াইল</option>--}}
                                {{--<option value="274">সাতক্ষীরা</option>--}}
                                {{--</select>--}}
                                {{--<select name="district_s" id="district_s_1692"--}}
                                {{--class="district_select" style="display:none">--}}
                                {{--<option value="NULL">জেলা</option>--}}
                                {{--<option value="50">রাজশাহী</option>--}}
                                {{--<option value="487">নাটোর</option>--}}
                                {{--<option value="343">চাঁপাইনবাবগঞ্জ</option>--}}
                                {{--<option value="305">জয়পুরহাট</option>--}}
                                {{--<option value="280">নওগাঁ</option>--}}
                                {{--<option value="277">বগুড়া</option>--}}
                                {{--<option value="320">পাবনা</option>--}}
                                {{--<option value="281">সিরাজগঞ্জ</option>--}}
                                {{--</select>--}}
                                {{--</div>--}}
                                {{--<div class="div3">--}}
                                {{--<select name="upozila_s" id="upozila_s_0"--}}
                                {{--class="upozilla_select">--}}
                                {{--<option value="NULL">উপজেলা</option>--}}
                                {{--</select>--}}
                                {{--<select name="upozila_s" id="upozila_s_55"--}}
                                {{--class="upozilla_select" style="display:none">--}}
                                {{--<option value="NULL">উপজেলা</option>--}}
                                {{--<option value="799">আনোয়ারা</option>--}}
                                {{--<option value="1700">বাঁশখালী</option>--}}
                                {{--<option value="1702">বোয়ালখালী</option>--}}
                                {{--<option value="1704">চান্দনাইশ</option>--}}
                                {{--<option value="342">ফটিকছড়ি</option>--}}
                                {{--<option value="1706">ভূজপূর থানা</option>--}}
                                {{--<option value="326">হাটহাজারী</option>--}}
                                {{--<option value="318">লোহাগড়া</option>--}}
                                {{--<option value="261">মিরসরাই</option>--}}
                                {{--<option value="531">পটিয়া</option>--}}
                                {{--<option value="383">রাঙ্গুনিয়া</option>--}}
                                {{--<option value="1708">রাউজান</option>--}}
                                {{--<option value="1710">সন্দ্বীপ</option>--}}
                                {{--<option value="439">সাতকানিয়া</option>--}}
                                {{--<option value="336">সীতাকুণ্ড</option>--}}
                                {{--<option value="1712">কর্ণফুলী থানা</option>--}}
                                {{--</select>--}}
                                {{--<select name="upozila_s" id="upozila_s_264"--}}
                                {{--class="upozilla_select" style="display:none">--}}
                                {{--<option value="NULL">উপজেলা</option>--}}
                                {{--<option value="1038">উখিয়া</option>--}}
                                {{--<option value="1714">কক্সবাজার সদর</option>--}}
                                {{--<option value="1716">কুতুবদিয়া</option>--}}
                                {{--<option value="458">চকরিয়া</option>--}}
                                {{--<option value="409">টেকনাফ</option>--}}
                                {{--<option value="265">মহেশখালী</option>--}}
                                {{--<option value="537">রামু</option>--}}
                                {{--<option value="1718">পেকুয়া</option>--}}
                                {{--</select>--}}
                                {{--<select name="upozila_s" id="upozila_s_376"--}}
                                {{--class="upozilla_select" style="display:none">--}}
                                {{--<option value="NULL">উপজেলা</option>--}}
                                {{--<option value="1720">আলিকদম</option>--}}
                                {{--<option value="788">থানচি</option>--}}
                                {{--<option value="1722">নাইক্ষ্যংছড়ি</option>--}}
                                {{--<option value="1724">বান্দরবান সদর</option>--}}
                                {{--<option value="946">রুমা</option>--}}
                                {{--<option value="1726">রোয়াংছড়ি</option>--}}
                                {{--<option value="1728">লামা</option>--}}
                                {{--</select>--}}
                                {{--<select name="upozila_s" id="upozila_s_337"--}}
                                {{--class="upozilla_select" style="display:none">--}}
                                {{--<option value="NULL">উপজেলা</option>--}}
                                {{--<option value="1730">খাগড়াছড়ি সদর</option>--}}
                                {{--<option value="338">দীঘিনালা</option>--}}
                                {{--<option value="1732">পানছড়ি</option>--}}
                                {{--<option value="1734">মহালছড়ি</option>--}}
                                {{--<option value="654">মাটিরাঙ্গা</option>--}}
                                {{--<option value="817">মানিকছড়ি</option>--}}
                                {{--<option value="816">রামগড়</option>--}}
                                {{--<option value="1736">লক্ষ্মীছড়ি</option>--}}
                                {{--</select>--}}
                                {{--<select name="upozila_s" id="upozila_s_262"--}}
                                {{--class="upozilla_select" style="display:none">--}}
                                {{--<option value="NULL">উপজেলা</option>--}}
                                {{--<option value="1738">কাউখালী (রাঙ্গামাটি)</option>--}}
                                {{--<option value="532">কাপ্তাই</option>--}}
                                {{--<option value="1740">জুরাছড়ি</option>--}}
                                {{--<option value="1742">নানিয়ারচর</option>--}}
                                {{--<option value="1744">বরকল</option>--}}
                                {{--<option value="377">বাঘাইছড়ি</option>--}}
                                {{--<option value="942">বিলাইছড়ি</option>--}}
                                {{--<option value="1746">রাঙামাটি সদর</option>--}}
                                {{--<option value="1748">রাজস্থলী</option>--}}
                                {{--<option value="1750">লংগদু</option>--}}
                                {{--</select>--}}
                                {{--<select name="upozila_s" id="upozila_s_266"--}}
                                {{--class="upozilla_select" style="display:none">--}}
                                {{--<option value="NULL">উপজেলা</option>--}}
                                {{--<option value="1752">নোয়াখালী সদর</option>--}}
                                {{--<option value="1754">বেগমগঞ্জ</option>--}}
                                {{--<option value="1756">চাটখিল</option>--}}
                                {{--<option value="1758">কোম্পানীগঞ্জ</option>--}}
                                {{--<option value="334">হাতিয়া</option>--}}
                                {{--<option value="1760">সেনবাগ</option>--}}
                                {{--<option value="1762">সুবর্ণচর</option>--}}
                                {{--<option value="1764">সোনাইমুড়ি</option>--}}
                                {{--<option value="1766">কবিরহাট</option>--}}
                                {{--</select>--}}
                                {{--<select name="upozila_s" id="upozila_s_441"--}}
                                {{--class="upozilla_select" style="display:none">--}}
                                {{--<option value="NULL">উপজেলা</option>--}}
                                {{--<option value="1768">লক্ষ্মীপুর সদর</option>--}}
                                {{--<option value="440">রায়পুর</option>--}}
                                {{--<option value="1770">রামগঞ্জ</option>--}}
                                {{--<option value="1772">কমলনগর</option>--}}
                                {{--<option value="555">রামগতি</option>--}}
                                {{--</select>--}}
                                {{--<select name="upozila_s" id="upozila_s_333"--}}
                                {{--class="upozilla_select" style="display:none">--}}
                                {{--<option value="NULL">উপজেলা</option>--}}
                                {{--<option value="1774">ফেনী সদর</option>--}}
                                {{--<option value="1776">দাগনভূঁইয়া</option>--}}
                                {{--<option value="1778">সোনাগাজী</option>--}}
                                {{--<option value="1780">ছাগলনাইয়া</option>--}}
                                {{--<option value="1782">পরশুরাম</option>--}}
                                {{--<option value="842">ফুলগাজী</option>--}}
                                {{--</select>--}}
                                {{--<select name="upozila_s" id="upozila_s_144"--}}
                                {{--class="upozilla_select" style="display:none">--}}
                                {{--<option value="NULL">উপজেলা</option>--}}
                                {{--<option value="1784">বরুরা</option>--}}
                                {{--<option value="1786">চান্দিনা</option>--}}
                                {{--<option value="388">দাউদকান্দি</option>--}}
                                {{--<option value="425">লাকসাম</option>--}}
                                {{--<option value="601">ব্রাহ্মণপাড়া</option>--}}
                                {{--<option value="1788">বুড়িচং</option>--}}
                                {{--<option value="671">চৌদ্দগ্রাম</option>--}}
                                {{--<option value="765">দেবীদ্বার</option>--}}
                                {{--<option value="1790">হোমনা</option>--}}
                                {{--<option value="1792">মুরাদনগর</option>--}}
                                {{--<option value="1794">লাঙ্গলকোট</option>--}}
                                {{--<option value="1796">মেঘনা</option>--}}
                                {{--<option value="1798">তিতাস</option>--}}
                                {{--<option value="389">মনোহরগঞ্জ</option>--}}
                                {{--</select>--}}
                                {{--<select name="upozila_s" id="upozila_s_243"--}}
                                {{--class="upozilla_select" style="display:none">--}}
                                {{--<option value="NULL">উপজেলা</option>--}}
                                {{--<option value="1800">চাঁদপুর সদর</option>--}}
                                {{--<option value="1802">কচুয়া</option>--}}
                                {{--<option value="674">হাজীগঞ্জ</option>--}}
                                {{--<option value="1810">শাহরাস্তি</option>--}}
                                {{--<option value="1804">ফরিদগঞ্জ</option>--}}
                                {{--<option value="1806">ফরিদগঞ্জ</option>--}}
                                {{--<option value="319">মতলব দক্ষিণ</option>--}}
                                {{--<option value="1808">হাইমচর</option>--}}
                                {{--</select>--}}
                                {{--<select name="upozila_s" id="upozila_s_328"--}}
                                {{--class="upozilla_select" style="display:none">--}}
                                {{--<option value="NULL">উপজেলা</option>--}}
                                {{--<option value="1812">আশুগঞ্জ</option>--}}
                                {{--<option value="556">আখাউড়া</option>--}}
                                {{--<option value="442">কসবা</option>--}}
                                {{--<option value="382">নবীনগর</option>--}}
                                {{--<option value="1814">নাসিরনগর</option>--}}
                                {{--<option value="357">বাঞ্ছারামপুর</option>--}}
                                {{--<option value="1816">ব্রাহ্মণবাড়িয়া সদর</option>--}}
                                {{--<option value="379">সরাইল</option>--}}
                                {{--<option value="1818">বিজয়নগর</option>--}}
                                {{--</select>--}}
                                {{--<select name="upozila_s" id="upozila_s_256"--}}
                                {{--class="upozilla_select" style="display:none">--}}
                                {{--<option value="NULL">উপজেলা</option>--}}
                                {{--<option value="1508">ময়মনসিংহ সদর</option>--}}
                                {{--<option value="267">ত্রিশাল</option>--}}
                                {{--<option value="637">গৌরীপুর</option>--}}
                                {{--<option value="1518">মুক্তাগাছা</option>--}}
                                {{--<option value="479">ফুলপুর</option>--}}
                                {{--<option value="1524">হালুয়াঘাট</option>--}}
                                {{--<option value="610">ভালুকা</option>--}}
                                {{--<option value="1528">ফুলবাড়িয়া</option>--}}
                                {{--<option value="1110 ">গফরগাঁও</option>--}}
                                {{--<option value="255">ঈশ্বরগঞ্জ</option>--}}
                                {{--<option value="257">নান্দাইল</option>--}}
                                {{--<option value="1534">ধোবাউড়া</option>--}}
                                {{--</select>--}}
                                {{--<select name="upozila_s" id="upozila_s_278"--}}
                                {{--class="upozilla_select" style="display:none">--}}
                                {{--<option value="NULL">উপজেলা</option>--}}
                                {{--<option value="1542">ঝিনাইগাতি</option>--}}
                                {{--<option value="1546">নকলা</option>--}}
                                {{--<option value="1548">নালিতাবাড়ি</option>--}}
                                {{--<option value="1550">শেরপুর সদর</option>--}}
                                {{--<option value="1552">শ্রীবরদী</option>--}}
                                {{--</select>--}}
                                {{--<select name="upozila_s" id="upozila_s_530"--}}
                                {{--class="upozilla_select" style="display:none">--}}
                                {{--<option value="NULL">উপজেলা</option>--}}
                                {{--<option value="1572">জামালপুর সদর</option>--}}
                                {{--<option value="1574">বকশীগঞ্জ</option>--}}
                                {{--<option value="1576">দেওয়ানগঞ্জ</option>--}}
                                {{--<option value="1578">ইসলামপুর</option>--}}
                                {{--<option value="553 ">মাদারগঞ্জ</option>--}}
                                {{--<option value="1580">মেলান্দহ</option>--}}
                                {{--<option value="529">সরিষাবাড়ী</option>--}}
                                {{--</select>--}}
                                {{--<select name="upozila_s" id="upozila_s_1148"--}}
                                {{--class="upozilla_select" style="display:none">--}}
                                {{--<option value="NULL">উপজেলা</option>--}}
                                {{--<option value="296">রাজধানী ঢাকা</option>--}}
                                {{--<option value="1150">ধামরাই</option>--}}
                                {{--<option value="437">দোহার</option>--}}
                                {{--<option value="378">কেরানীগঞ্জ</option>--}}
                                {{--<option value="438">নবাবগঞ্জ</option>--}}
                                {{--<option value="332">সাভার</option>--}}
                                {{--</select>--}}
                                {{--<select name="upozila_s" id="upozila_s_386"--}}
                                {{--class="upozilla_select" style="display:none">--}}
                                {{--<option value="NULL">উপজেলা</option>--}}
                                {{--<option value="1152">বেলাবো</option>--}}
                                {{--<option value="1154">মনোহরদী</option>--}}
                                {{--<option value="1156">শিবপুর</option>--}}
                                {{--<option value="1158">রায়পুরা</option>--}}
                                {{--<option value="767">পলাশ</option>--}}
                                {{--<option value="1160">নরসিংদী সদর</option>--}}
                                {{--</select>--}}
                                {{--<select name="upozila_s" id="upozila_s_247"--}}
                                {{--class="upozilla_select" style="display:none">--}}
                                {{--<option value="NULL">উপজেলা</option>--}}
                                {{--<option value="1098">নারায়ণগঞ্জ সিটি</option>--}}
                                {{--<option value="1178">নারায়ণগঞ্জ সদর</option>--}}
                                {{--<option value="1180">বন্দর</option>--}}
                                {{--<option value="1184">আড়াইহাজার</option>--}}
                                {{--<option value="1188">রূপগঞ্জ</option>--}}
                                {{--<option value="246">সোনারগাঁ</option>--}}
                                {{--</select>--}}
                                {{--<select name="upozila_s" id="upozila_s_245"--}}
                                {{--class="upozilla_select" style="display:none">--}}
                                {{--<option value="NULL">উপজেলা</option>--}}
                                {{--<option value="1028">গাজীপুর সিটি</option>--}}
                                {{--<option value="1200">গাজীপুর সদর</option>--}}
                                {{--<option value="1202">কালিয়াকৈর</option>--}}
                                {{--<option value="370">কালীগঞ্জ</option>--}}
                                {{--<option value="795">কাপাসিয়া</option>--}}
                                {{--<option value="1204">শ্রীপুর</option>--}}
                                {{--</select>--}}
                                {{--<select name="upozila_s" id="upozila_s_385"--}}
                                {{--class="upozilla_select" style="display:none">--}}
                                {{--<option value="NULL">উপজেলা</option>--}}
                                {{--<option value="1206">শ্রীনগর</option>--}}
                                {{--<option value="1208">সিরাজদীখান</option>--}}
                                {{--<option value="1210">লৌহজং</option>--}}
                                {{--<option value="978">টঙ্গিবাড়ী</option>--}}
                                {{--<option value="1212">মুন্সিগঞ্জ সদর</option>--}}
                                {{--<option value="384">গজারিয়া</option>--}}
                                {{--</select>--}}
                                {{--<select name="upozila_s" id="upozila_s_374"--}}
                                {{--class="upozilla_select" style="display:none">--}}
                                {{--<option value="NULL">উপজেলা</option>--}}
                                {{--<option value="1214">মানিকগঞ্জ সদর</option>--}}
                                {{--<option value="1216">সিঙ্গাইর</option>--}}
                                {{--<option value="1218">শিবালয়</option>--}}
                                {{--<option value="870">সাটুরিয়া</option>--}}
                                {{--<option value="940">হরিরামপুর</option>--}}
                                {{--<option value="1220">ঘিওর</option>--}}
                                {{--<option value="675">দৌলতপুর</option>--}}
                                {{--</select>--}}
                                {{--<select name="upozila_s" id="upozila_s_329"--}}
                                {{--class="upozilla_select" style="display:none">--}}
                                {{--<option value="NULL">উপজেলা</option>--}}
                                {{--<option value="1222">টাঙ্গাইল সদর</option>--}}
                                {{--<option value="687">কালিহাতী</option>--}}
                                {{--<option value="414">ঘাটাইল</option>--}}
                                {{--<option value="1224">বাসাইল</option>--}}
                                {{--<option value="1226">গোপালপুর</option>--}}
                                {{--<option value="330">মির্জাপুর</option>--}}
                                {{--<option value="1228">ভূঞাপুর</option>--}}
                                {{--<option value="1230">নাগরপুর</option>--}}
                                {{--<option value="1232">মধুপুর</option>--}}
                                {{--<option value="1234">সখিপুর</option>--}}
                                {{--<option value="1236">দেলদুয়ার</option>--}}
                                {{--<option value="1238">ধনবাড়ী</option>--}}
                                {{--</select>--}}
                                {{--<select name="upozila_s" id="upozila_s_368"--}}
                                {{--class="upozilla_select" style="display:none">--}}
                                {{--<option value="NULL">উপজেলা</option>--}}
                                {{--<option value="1538">রাজবাড়ী সদর</option>--}}
                                {{--<option value="367">গোয়ালন্দ</option>--}}
                                {{--<option value="801">পাংশা</option>--}}
                                {{--<option value="800">বালিয়াকান্দি</option>--}}
                                {{--</select>--}}
                                {{--<select name="upozila_s" id="upozila_s_314"--}}
                                {{--class="upozilla_select" style="display:none">--}}
                                {{--<option value="NULL">উপজেলা</option>--}}
                                {{--<option value="1558">গোপালগঞ্জ সদর</option>--}}
                                {{--<option value="1560">মুকসুদপুর</option>--}}
                                {{--<option value="1564">কাশিয়ানী</option>--}}
                                {{--<option value="1566">কোটালীপাড়া</option>--}}
                                {{--<option value="1568">টুঙ্গিপাড়া</option>--}}
                                {{--</select>--}}
                                {{--<select name="upozila_s" id="upozila_s_410"--}}
                                {{--class="upozilla_select" style="display:none">--}}
                                {{--<option value="NULL">উপজেলা</option>--}}
                                {{--<option value="1582">শরীয়তপুর সদর</option>--}}
                                {{--<option value="1584">ডামুড্যা</option>--}}
                                {{--<option value="1586">নড়িয়া</option>--}}
                                {{--<option value="1590">ভেদরগঞ্জ</option>--}}
                                {{--<option value="1592">জাজিরা</option>--}}
                                {{--<option value="1594">গোসাইরহাট</option>--}}
                                {{--</select>--}}
                                {{--<select name="upozila_s" id="upozila_s_311"--}}
                                {{--class="upozilla_select" style="display:none">--}}
                                {{--<option value="NULL">উপজেলা</option>--}}
                                {{--<option value="1616">মাদারীপুর সদর</option>--}}
                                {{--<option value="711">শিবচর</option>--}}
                                {{--<option value="1618">কালকিনী</option>--}}
                                {{--<option value="1620">রাজৈর</option>--}}
                                {{--</select>--}}
                                {{--<select name="upozila_s" id="upozila_s_315"--}}
                                {{--class="upozilla_select" style="display:none">--}}
                                {{--<option value="NULL">উপজেলা</option>--}}
                                {{--<option value="1622">ফরিদপুর সদর</option>--}}
                                {{--<option value="1624">বোয়ালমারী</option>--}}
                                {{--<option value="1626">আলফাডাঙা</option>--}}
                                {{--<option value="369">মধুখালী</option>--}}
                                {{--<option value="866">ভাঙ্গা</option>--}}
                                {{--<option value="583">নগরকান্দা</option>--}}
                                {{--<option value="1628">চর ভদ্রাসন</option>--}}
                                {{--<option value="1630">সদরপুর</option>--}}
                                {{--<option value="1632">সালথা</option>--}}
                                {{--</select>--}}
                                {{--<select name="upozila_s" id="upozila_s_250"--}}
                                {{--class="upozilla_select" style="display:none">--}}
                                {{--<option value="NULL">উপজেলা</option>--}}
                                {{--<option value="1634">কিশোরগঞ্জ সদর</option>--}}
                                {{--<option value="1636">অষ্টগ্রাম</option>--}}
                                {{--<option value="1638">ইটনা</option>--}}
                                {{--<option value="1640">করিমগঞ্জ</option>--}}
                                {{--<option value="1642">কটিয়াদি</option>--}}
                                {{--<option value="1644">কুলিয়ারচর</option>--}}
                                {{--<option value="249">তাড়াইল</option>--}}
                                {{--<option value="380">নিকলী</option>--}}
                                {{--<option value="1646">পাকুন্দিয়া</option>--}}
                                {{--<option value="1648">বাজিতপুর</option>--}}
                                {{--<option value="268">ভৈরব</option>--}}
                                {{--<option value="1650">মিটামইন</option>--}}
                                {{--<option value="690">হোসেনপুর</option>--}}
                                {{--</select>--}}
                                {{--<select name="upozila_s" id="upozila_s_47"--}}
                                {{--class="upozilla_select" style="display:none">--}}
                                {{--<option value="NULL">উপজেলা</option>--}}
                                {{--<option value="1294">রংপুর সিটি</option>--}}
                                {{--<option value="1292">রংপুর সদর</option>--}}
                                {{--<option value="413">বদরগঞ্জ</option>--}}
                                {{--<option value="1290">গঙ্গাছড়া</option>--}}
                                {{--<option value="1288">কাউনিয়া</option>--}}
                                {{--<option value="757">মিঠাপুকুর</option>--}}
                                {{--<option value="303">পীরগাছা</option>--}}
                                {{--<option value="1286">পীরগঞ্জ</option>--}}
                                {{--<option value="331">তারাগঞ্জ</option>--}}
                                {{--</select>--}}
                                {{--<select name="upozila_s" id="upozila_s_282"--}}
                                {{--class="upozilla_select" style="display:none">--}}
                                {{--<option value="NULL">উপজেলা</option>--}}
                                {{--<option value="317">বিরামপুর</option>--}}
                                {{--<option value="1284">বীরগঞ্জ</option>--}}
                                {{--<option value="1282 ">বোচাগঞ্জ</option>--}}
                                {{--<option value="494">ফুলবাড়ী</option>--}}
                                {{--<option value="1280">চিরিরবন্দর</option>--}}
                                {{--<option value="1278">ঘোড়াঘাট</option>--}}
                                {{--<option value="316">হাকিমপুর</option>--}}
                                {{--<option value="1276">কাহারোল</option>--}}
                                {{--<option value="1274">খানসামা</option>--}}
                                {{--<option value="1272">দিনাজপুর সদর</option>--}}
                                {{--<option value="438">নবাবগঞ্জ</option>--}}
                                {{--<option value="361">পার্বতীপুর</option>--}}
                                {{--<option value="1270 ">বিরল</option>--}}
                                {{--</select>--}}
                                {{--<select name="upozila_s" id="upozila_s_322"--}}
                                {{--class="upozilla_select" style="display:none">--}}
                                {{--<option value="NULL">উপজেলা</option>--}}
                                {{--<option value="1268 ">গাইবান্ধা সদর</option>--}}
                                {{--<option value="1266 ">ফুলছড়ি</option>--}}
                                {{--<option value="325 ">গোবিন্দগঞ্জ</option>--}}
                                {{--<option value="1264 ">পলাশবাড়ী</option>--}}
                                {{--<option value="1262 ">সাদুল্লাপুর</option>--}}
                                {{--<option value="1260">সাঘাটা</option>--}}
                                {{--<option value="1100">সুন্দরগঞ্জ</option>--}}
                                {{--</select>--}}
                                {{--<select name="upozila_s" id="upozila_s_301"--}}
                                {{--class="upozilla_select" style="display:none">--}}
                                {{--<option value="NULL">উপজেলা</option>--}}
                                {{--<option value="1258 ">উলিপুর</option>--}}
                                {{--<option value="1256 ">কুড়িগ্রাম সদর</option>--}}
                                {{--<option value="1254">চর রাজীবপুর</option>--}}
                                {{--<option value="1252">চিলমারী</option>--}}
                                {{--<option value="1144 ">নাগেশ্বরী</option>--}}
                                {{--<option value="1250 ">ফুলবাড়ী</option>--}}
                                {{--<option value="1248 ">ভুরুঙ্গামারী</option>--}}
                                {{--<option value="1246 ">রাজারহাট</option>--}}
                                {{--<option value="1244">রৌমারী</option>--}}
                                {{--</select>--}}
                                {{--<select name="upozila_s" id="upozila_s_283"--}}
                                {{--class="upozilla_select" style="display:none">--}}
                                {{--<option value="NULL">উপজেলা</option>--}}
                                {{--<option value="1198">নিলফামারী সদর</option>--}}
                                {{--<option value="1196">ডোমার</option>--}}
                                {{--<option value="1194 ">ডিমলা</option>--}}
                                {{--<option value="1192">জলঢাকা</option>--}}
                                {{--<option value="1190">কিশোরগঞ্জ</option>--}}
                                {{--<option value="444 ">সৈয়দপুর</option>--}}
                                {{--</select>--}}
                                {{--<select name="upozila_s" id="upozila_s_483"--}}
                                {{--class="upozilla_select" style="display:none">--}}
                                {{--<option value="NULL">উপজেলা</option>--}}
                                {{--<option value="1186">দেবীগঞ্জ</option>--}}
                                {{--<option value="1182">তেঁতুলিয়া</option>--}}
                                {{--<option value="1176 ">পঞ্চগড় সদর</option>--}}
                                {{--<option value="890 ">আটোয়ারী</option>--}}
                                {{--<option value="1174">বোদা</option>--}}
                                {{--</select>--}}
                                {{--<select name="upozila_s" id="upozila_s_299"--}}
                                {{--class="upozilla_select" style="display:none">--}}
                                {{--<option value="NULL">উপজেলা</option>--}}
                                {{--<option value="1172">ঠাকুরগাঁও সদর</option>--}}
                                {{--<option value="462">পীরগঞ্জ</option>--}}
                                {{--<option value="300">বালিয়াডাঙ্গী</option>--}}
                                {{--<option value="1170">রানীশংকৈল</option>--}}
                                {{--<option value="1168">হরিপুর</option>--}}
                                {{--</select>--}}
                                {{--<select name="upozila_s" id="upozila_s_356"--}}
                                {{--class="upozilla_select" style="display:none">--}}
                                {{--<option value="NULL">উপজেলা</option>--}}
                                {{--<option value="1166">লালমনিরহাট সদর</option>--}}
                                {{--<option value="461">পাটগ্রাম</option>--}}
                                {{--<option value="1164 ">কালীগঞ্জ</option>--}}
                                {{--<option value="1162">হাতিবান্ধা</option>--}}
                                {{--</select>--}}
                                {{--<select name="upozila_s" id="upozila_s_88"--}}
                                {{--class="upozilla_select" style="display:none">--}}
                                {{--<option value="NULL">উপজেলা</option>--}}
                                {{--<option value="1344">সিলেট সিটি</option>--}}
                                {{--<option value="1342">বালাগঞ্জ</option>--}}
                                {{--<option value="766">বিয়ানীবাজার</option>--}}
                                {{--<option value="712">বিশ্বনাথ</option>--}}
                                {{--<option value="1340">কোম্পানীগঞ্জ</option>--}}
                                {{--<option value="779">ফেঞ্চুগঞ্জ</option>--}}
                                {{--<option value="497">গোলাপগঞ্জ</option>--}}
                                {{--<option value="1338 ">গোয়াইঘাট</option>--}}
                                {{--<option value="1062">জৈন্তাপুর</option>--}}
                                {{--<option value="1336 ">কানাইঘাট</option>--}}
                                {{--<option value="1334">সিলেট সদর</option>--}}
                                {{--<option value="1332">জকিগঞ্জ</option>--}}
                                {{--<option value="1330">দক্ষিণ সুরমা</option>--}}
                                {{--</select>--}}
                                {{--<select name="upozila_s" id="upozila_s_260"--}}
                                {{--class="upozilla_select" style="display:none">--}}
                                {{--<option value="NULL">উপজেলা</option>--}}
                                {{--<option value="1328">আজমিরিগঞ্জ</option>--}}
                                {{--<option value="1326">বানিয়াচং</option>--}}
                                {{--<option value="1324">বাহুবল</option>--}}
                                {{--<option value="1322">চুনারুঘাট</option>--}}
                                {{--<option value="1320">হবিগঞ্জ সদর</option>--}}
                                {{--<option value="1318">লাখাই</option>--}}
                                {{--<option value="482">নবীগঞ্জ</option>--}}
                                {{--<option value="381">মাধবপুর</option>--}}
                                {{--</select>--}}
                                {{--<select name="upozila_s" id="upozila_s_244"--}}
                                {{--class="upozilla_select" style="display:none">--}}
                                {{--<option value="NULL">উপজেলা</option>--}}
                                {{--<option value="1316">বড়লেখা</option>--}}
                                {{--<option value="872">কুলাউড়া</option>--}}
                                {{--<option value="1314">রাজানগর</option>--}}
                                {{--<option value="443">কমলগঞ্জ</option>--}}
                                {{--<option value="460">শ্রীমঙ্গল</option>--}}
                                {{--<option value="1312">মৌলভীবাজার সদর</option>--}}
                                {{--<option value="1310">জুড়ি</option>--}}
                                {{--</select>--}}
                                {{--<select name="upozila_s" id="upozila_s_252"--}}
                                {{--class="upozilla_select" style="display:none">--}}
                                {{--<option value="NULL">উপজেলা</option>--}}
                                {{--<option value="1308">বিশ্বম্ভরপুর</option>--}}
                                {{--<option value="1306">ছাতক</option>--}}
                                {{--<option value="327">দিরাই</option>--}}
                                {{--<option value="1304">ধর্মপাশা</option>--}}
                                {{--<option value="1302">দোয়ারাবাজার</option>--}}
                                {{--<option value="251">জগন্নাথপুর</option>--}}
                                {{--<option value="1300">জামালগঞ্জ</option>--}}
                                {{--<option value="484">তাহিরপুর</option>--}}
                                {{--<option value="1298">শাল্লা</option>--}}
                                {{--<option value="1296">সুনামগঞ্জ সদর</option>--}}
                                {{--</select>--}}
                                {{--<select name="upozila_s" id="upozila_s_92"--}}
                                {{--class="upozilla_select" style="display:none">--}}
                                {{--<option value="NULL">উপজেলা</option>--}}
                                {{--<option value="1404">আগৈলঝারা</option>--}}
                                {{--<option value="1402">বাকেরগঞ্জ</option>--}}
                                {{--<option value="1400">বাবুগঞ্জ</option>--}}
                                {{--<option value="1398">বানারিপাড়া</option>--}}
                                {{--<option value="271">গৌরনদী</option>--}}
                                {{--<option value="1396">হিজলা</option>--}}
                                {{--<option value="1394">বরিশাল সদর</option>--}}
                                {{--<option value="1392">মেহেন্দিগঞ্জ</option>--}}
                                {{--<option value="1390">মুলাদি</option>--}}
                                {{--<option value="676">উজিরপুর</option>--}}
                                {{--</select>--}}
                                {{--<select name="upozila_s" id="upozila_s_275"--}}
                                {{--class="upozilla_select" style="display:none">--}}
                                {{--<option value="NULL">উপজেলা</option>--}}
                                {{--<option value="1388">বরগুনা সদর</option>--}}
                                {{--<option value="308">আমতলী</option>--}}
                                {{--<option value="276">পাথরঘাটা</option>--}}
                                {{--<option value="1386">বেতাগি</option>--}}
                                {{--<option value="1384">বামনা</option>--}}
                                {{--</select>--}}
                                {{--<select name="upozila_s" id="upozila_s_324"--}}
                                {{--class="upozilla_select" style="display:none">--}}
                                {{--<option value="NULL">উপজেলা</option>--}}
                                {{--<option value="580">চরফ্যাশন</option>--}}
                                {{--<option value="1382">তজুমদ্দিন</option>--}}
                                {{--<option value="1380">দৌলতখান</option>--}}
                                {{--<option value="1378">বোরহানউদ্দিন</option>--}}
                                {{--<option value="1376">ভোলা সদর</option>--}}
                                {{--<option value="1374">মনপুরা</option>--}}
                                {{--<option value="705">লালমোহন</option>--}}
                                {{--</select>--}}
                                {{--<select name="upozila_s" id="upozila_s_339"--}}
                                {{--class="upozilla_select" style="display:none">--}}
                                {{--<option value="NULL">উপজেলা</option>--}}
                                {{--<option value="1372">কাঁঠালিয়া</option>--}}
                                {{--<option value="1370">ঝালকাঠি সদর</option>--}}
                                {{--<option value="1368">নলছিটি</option>--}}
                                {{--<option value="1040">রাজাপুর</option>--}}
                                {{--</select>--}}
                                {{--<select name="upozila_s" id="upozila_s_355"--}}
                                {{--class="upozilla_select" style="display:none">--}}
                                {{--<option value="NULL">উপজেলা</option>--}}
                                {{--<option value="1366">পটুয়াখালী সদর</option>--}}
                                {{--<option value="535">বাউফল</option>--}}
                                {{--<option value="1364">দশমিনা</option>--}}
                                {{--<option value="465">গলাচিপা</option>--}}
                                {{--<option value="579">কলাপাড়া</option>--}}
                                {{--<option value="1362">মির্জাগঞ্জ</option>--}}
                                {{--<option value="1360">দুমকি</option>--}}
                                {{--<option value="1358">রাঙ্গাবালি</option>--}}
                                {{--</select>--}}
                                {{--<select name="upozila_s" id="upozila_s_307"--}}
                                {{--class="upozilla_select" style="display:none">--}}
                                {{--<option value="NULL">উপজেলা</option>--}}
                                {{--<option value="1356">কাউখালী (পিরোজপুর)</option>--}}
                                {{--<option value="1354">নাজিরপুর</option>--}}
                                {{--<option value="1352">নেছারাবাদ (স্বরূপকাঠি)</option>--}}
                                {{--<option value="1350">পিরোজপুর সদর</option>--}}
                                {{--<option value="1348">ভাণ্ডারিয়া</option>--}}
                                {{--<option value="306">মঠবাড়িয়া</option>--}}
                                {{--<option value="1346">জিয়ানগর</option>--}}
                                {{--</select>--}}
                                {{--<select name="upozila_s" id="upozila_s_90"--}}
                                {{--class="upozilla_select" style="display:none">--}}
                                {{--<option value="NULL">উপজেলা</option>--}}
                                {{--<option value="1496">খুলনা সিটি</option>--}}
                                {{--<option value="1494">কয়রা</option>--}}
                                {{--<option value="352">ডুমুরিয়া</option>--}}
                                {{--<option value="1492">তেরখাদা</option>--}}
                                {{--<option value="906">দাকোপ</option>--}}
                                {{--<option value="1490">দীঘলিয়া</option>--}}
                                {{--<option value="1488">পাইকগাছা</option>--}}
                                {{--<option value="360">ফুলতলা</option>--}}
                                {{--<option value="1486">বটিয়াঘাটা</option>--}}
                                {{--<option value="1484">রূপসা</option>--}}
                                {{--</select>--}}
                                {{--<select name="upozila_s" id="upozila_s_285"--}}
                                {{--class="upozilla_select" style="display:none">--}}
                                {{--<option value="NULL">উপজেলা</option>--}}
                                {{--<option value="1482">কচুয়া (বাগেরহাট)</option>--}}
                                {{--<option value="1480">চিতলমারী</option>--}}
                                {{--<option value="624">ফকিরহাট</option>--}}
                                {{--<option value="1478">বাগেরহাট সদর</option>--}}
                                {{--<option value="628">মংলা</option>--}}
                                {{--<option value="284">মোরেলগঞ্জ</option>--}}
                                {{--<option value="517">মোল্লাহাট</option>--}}
                                {{--<option value="634">রামপাল</option>--}}
                                {{--<option value="1476">শরণখোলা</option>--}}
                                {{--</select>--}}
                                {{--<select name="upozila_s" id="upozila_s_364"--}}
                                {{--class="upozilla_select" style="display:none">--}}
                                {{--<option value="NULL">উপজেলা</option>--}}
                                {{--<option value="1130">আলমডাঙ্গা</option>--}}
                                {{--<option value="1474">চুয়াডাঙ্গা সদর</option>--}}
                                {{--<option value="1472">দামুড়হুদা</option>--}}
                                {{--<option value="1470">জীবননগর</option>--}}
                                {{--</select>--}}
                                {{--<select name="upozila_s" id="upozila_s_241"--}}
                                {{--class="upozilla_select" style="display:none">--}}
                                {{--<option value="NULL">উপজেলা</option>--}}
                                {{--<option value="1468">যশোর সদর</option>--}}
                                {{--<option value="270">অভয়নগর</option>--}}
                                {{--<option value="1466">কেশবপুর</option>--}}
                                {{--<option value="1464">চৌগাছা</option>--}}
                                {{--<option value="1126">ঝিকরগাছা</option>--}}
                                {{--<option value="1462">বাঘারপাড়া</option>--}}
                                {{--<option value="1460">মনিরামপুর</option>--}}
                                {{--<option value="1458">শার্শা</option>--}}
                                {{--</select>--}}
                                {{--<select name="upozila_s" id="upozila_s_312"--}}
                                {{--class="upozilla_select" style="display:none">--}}
                                {{--<option value="NULL">উপজেলা</option>--}}
                                {{--<option value="1456">কালীগঞ্জ (ঝিনাইদহ)</option>--}}
                                {{--<option value="1454">কোটচাঁদপুর</option>--}}
                                {{--<option value="1452">ঝিনাইদহ সদর</option>--}}
                                {{--<option value="1450">মহেশপুর</option>--}}
                                {{--<option value="1448">শৈলকূপা</option>--}}
                                {{--<option value="1446">হরিণাকুণ্ড</option>--}}
                                {{--</select>--}}
                                {{--<select name="upozila_s" id="upozila_s_272"--}}
                                {{--class="upozilla_select" style="display:none">--}}
                                {{--<option value="NULL">উপজেলা</option>--}}
                                {{--<option value="1444">কুমারখালী</option>--}}
                                {{--<option value="1442">কুষ্টিয়া সদর</option>--}}
                                {{--<option value="1440">খোকসা</option>--}}
                                {{--<option value="675">দৌলতপুর</option>--}}
                                {{--<option value="742">ভেড়ামারা</option>--}}
                                {{--<option value="1438">মিরপুর</option>--}}
                                {{--</select>--}}
                                {{--<select name="upozila_s" id="upozila_s_463"--}}
                                {{--class="upozilla_select" style="display:none">--}}
                                {{--<option value="NULL">উপজেলা</option>--}}
                                {{--<option value="1436">মাগুরা সদর</option>--}}
                                {{--<option value="1434">মহম্মদপুর</option>--}}
                                {{--<option value="1432">শালিখা</option>--}}
                                {{--<option value="1204">শ্রীপুর</option>--}}
                                {{--</select>--}}
                                {{--<select name="upozila_s" id="upozila_s_269"--}}
                                {{--class="upozilla_select" style="display:none">--}}
                                {{--<option value="NULL">উপজেলা</option>--}}
                                {{--<option value="1430">গাংনী</option>--}}
                                {{--<option value="1428">মেহেরপুর সদর</option>--}}
                                {{--<option value="1426">মুজিবনগর</option>--}}
                                {{--</select>--}}
                                {{--<select name="upozila_s" id="upozila_s_248"--}}
                                {{--class="upozilla_select" style="display:none">--}}
                                {{--<option value="NULL">উপজেলা</option>--}}
                                {{--<option value="1424">নড়াইল সদর</option>--}}
                                {{--<option value="318">লোহাগড়া</option>--}}
                                {{--<option value="1422">কালিয়া</option>--}}
                                {{--<option value="1420">নড়াগাতি</option>--}}
                                {{--</select>--}}
                                {{--<select name="upozila_s" id="upozila_s_274"--}}
                                {{--class="upozilla_select" style="display:none">--}}
                                {{--<option value="NULL">উপজেলা</option>--}}
                                {{--<option value="1418">আশাশুনি</option>--}}
                                {{--<option value="1416">কলারোয়া</option>--}}
                                {{--<option value="1414">কালীগঞ্জ (সাতক্ষীরা)</option>--}}
                                {{--<option value="1412">তালা</option>--}}
                                {{--<option value="1410">দেবহাটা</option>--}}
                                {{--<option value="1408">শ্যামনগর</option>--}}
                                {{--<option value="1406">সাতক্ষীরা সদর</option>--}}
                                {{--</select>--}}
                                {{--<select name="upozila_s" id="upozila_s_50"--}}
                                {{--class="upozilla_select" style="display:none">--}}
                                {{--<option value="NULL">উপজেলা</option>--}}
                                {{--<option value="1680">রাজশাহী সিটি</option>--}}
                                {{--<option value="1674">রাজশাহী সদর</option>--}}
                                {{--<option value="558">বাঘা</option>--}}
                                {{--<option value="1678">পুঠিয়া</option>--}}
                                {{--<option value="960">পবা</option>--}}
                                {{--<option value="321">বাগমারা</option>--}}
                                {{--<option value="1676">তানোর</option>--}}
                                {{--<option value="1672">বোয়ালিয়া</option>--}}
                                {{--<option value="1670">মোহনপুর</option>--}}
                                {{--<option value="1668 ">চারঘাট</option>--}}
                                {{--<option value="1666">গোদাগারী</option>--}}
                                {{--<option value="1602">দুর্গাপুর</option>--}}
                                {{--</select>--}}
                                {{--<select name="upozila_s" id="upozila_s_487"--}}
                                {{--class="upozilla_select" style="display:none">--}}
                                {{--<option value="NULL">উপজেলা</option>--}}
                                {{--<option value="1664 ">নাটোর সদর</option>--}}
                                {{--<option value="956">বাগাতিপাড়া</option>--}}
                                {{--<option value="1662">বরাইগ্রাম</option>--}}
                                {{--<option value="486">গুরুদাসপুর</option>--}}
                                {{--<option value="625">লালপুর</option>--}}
                                {{--<option value="498">সিংড়া</option>--}}
                                {{--</select>--}}
                                {{--<select name="upozila_s" id="upozila_s_343"--}}
                                {{--class="upozilla_select" style="display:none">--}}
                                {{--<option value="NULL">উপজেলা</option>--}}
                                {{--<option value="1660">চাঁপাইনবাবগঞ্জ সদর</option>--}}
                                {{--<option value="874">গোমস্তাপুর</option>--}}
                                {{--<option value="373 ">শিবগঞ্জ</option>--}}
                                {{--<option value="1658">নাচোল</option>--}}
                                {{--<option value="651">ভোলাহাট</option>--}}
                                {{--</select>--}}
                                {{--<select name="upozila_s" id="upozila_s_305"--}}
                                {{--class="upozilla_select" style="display:none">--}}
                                {{--<option value="NULL">উপজেলা</option>--}}
                                {{--<option value="1656">পাঁচবিবি</option>--}}
                                {{--<option value="1654">কালাই</option>--}}
                                {{--<option value="1008">ক্ষেতলাল</option>--}}
                                {{--<option value="304">আক্কেলপুর</option>--}}
                                {{--<option value="1652">জয়পুরহাট সদর</option>--}}
                                {{--</select>--}}
                                {{--<select name="upozila_s" id="upozila_s_280"--}}
                                {{--class="upozilla_select" style="display:none">--}}
                                {{--<option value="NULL">উপজেলা</option>--}}
                                {{--<option value="1554">নওগাঁ সদর</option>--}}
                                {{--<option value="1612">পত্নীতলা</option>--}}
                                {{--<option value="1610">ধামইরহাট</option>--}}
                                {{--<option value="868">মহাদেবপুর</option>--}}
                                {{--<option value="1600">পোরশা</option>--}}
                                {{--<option value="962 ">সাপাহার</option>--}}
                                {{--<option value="1588 ">বদলগাছী</option>--}}
                                {{--<option value="1570">মান্দা</option>--}}
                                {{--<option value="539 ">নিয়ামতপুর</option>--}}
                                {{--<option value="1562">আত্রাই</option>--}}
                                {{--<option value="1556">রানীনগর</option>--}}
                                {{--</select>--}}
                                {{--<select name="upozila_s" id="upozila_s_277"--}}
                                {{--class="upozilla_select" style="display:none">--}}
                                {{--<option value="NULL">উপজেলা</option>--}}
                                {{--<option value="1544 ">আদমদিঘী</option>--}}
                                {{--<option value="1540">বগুড়া সদর</option>--}}
                                {{--<option value="353">ধুনট</option>--}}
                                {{--<option value="1536">ধুপচাঁচিয়া</option>--}}
                                {{--<option value="309">গাবতলী</option>--}}
                                {{--<option value="1532">কাহালু</option>--}}
                                {{--<option value="1530 ">নন্দীগ্রাম</option>--}}
                                {{--<option value="1526">সারিয়াকান্দি</option>--}}
                                {{--<option value="278">শেরপুর</option>--}}
                                {{--<option value="373 ">শিবগঞ্জ</option>--}}
                                {{--<option value="1522">সোনাতলা</option>--}}
                                {{--<option value="1520">সাজাহানপুর</option>--}}
                                {{--</select>--}}
                                {{--<select name="upozila_s" id="upozila_s_320"--}}
                                {{--class="upozilla_select" style="display:none">--}}
                                {{--<option value="NULL">উপজেলা</option>--}}
                                {{--<option value="1516">আটঘরিয়া</option>--}}
                                {{--<option value="354 ">ঈশ্বরদী</option>--}}
                                {{--<option value="1514">চাটমোহর</option>--}}
                                {{--<option value="1512">পাবনা সদর</option>--}}
                                {{--<option value="1510">ফরিদপুর</option>--}}
                                {{--<option value="689">বেড়া</option>--}}
                                {{--<option value="1506">ভাঙ্গুরা</option>--}}
                                {{--<option value="802">সুজানগর</option>--}}
                                {{--<option value="803">সাঁথিয়া</option>--}}
                                {{--</select>--}}
                                {{--<select name="upozila_s" id="upozila_s_281"--}}
                                {{--class="upozilla_select" style="display:none">--}}
                                {{--<option value="NULL">উপজেলা</option>--}}
                                {{--<option value="1112">বেলকুচি</option>--}}
                                {{--<option value="1504">কামারখন্দ</option>--}}
                                {{--<option value="1502">চৌহালি</option>--}}
                                {{--<option value="1500">কাজীপুর</option>--}}
                                {{--<option value="436">রায়গঞ্জ</option>--}}
                                {{--<option value="358">শাহজাদপুর</option>--}}
                                {{--<option value="1498">সিরাজগঞ্জ সদর</option>--}}
                                {{--<option value="608">তাড়াশ</option>--}}
                                {{--<option value="1124">উল্লাপাড়া</option>--}}
                                {{--</select>--}}
                                {{--</div>--}}
                                {{--<div class="div4">--}}
                                {{--<input type="button" value="সংবাদ" id="search_tag_wize_news"--}}
                                {{--class="search_tag_wize_news"/></div>--}}
                                {{--</div>--}}
                                {{--</form>--}}

                                {{--</div>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                <div id="widget_97631" class="widget_color_ widget_wrap">
                                    <div class="contents_listing  widget">
                                        <div class="contents  summery_view
			">
                                            <div class="row">
                                                @php
                                                    $post = \App\Category::with(['posts' => function ($q) {
                                                     $q->orderBy('id', 'desc')->take(1);
                                                      }])->where('id', $id)->first();
                                                     $last_insert_id = $post->posts[0]->id;

                                                      $l_id = array();
                                                     for($i = 0; $i < 2; $i++){
                                                     $l_id[] = $last_insert_id - $i;
                                                     }

                                                    $cats = \Illuminate\Support\Facades\DB::table('categories')
                                                        ->rightJoin('posts', 'categories.id', '=', 'posts.category_id')
                                                        ->where('category_id', $id)
                                                        ->orderBy('posts.id', 'desc')
                                                        ->take(20)
                                                        ->whereNotIn('posts.id', $l_id)
                                                        ->get();

                                                @endphp

                                                @foreach($cats as $post)
                                                    <div class="col col1">
                                                        <div class="each col_in
			has_image
			image_left
			content_capability_blog
			content_type_article
			responsive_image_hide_
		">
                                                            <!--overlay anchor-->
                                                            <a class="link_overlay" href="{{ route('single.post', $post->id) }}"></a>
                                                            <!--image-->
                                                            <div class="image">
                                                                <noscript id="ari-image-976311616802"
                                                                          data-ari="{&quot;path&quot;:&quot;media\/2019\/09\/29\/16bed88a3667f3cb873439ece12ac869-5d90e134a064e.jpg?jadewits_media_id=1473926&quot;,&quot;ratio&quot;:[16,9],&quot;alt&quot;:&quot;\u09b8\u09b0\u0995\u09be\u09b0 \u099c\u09a8\u0997\u09a3\u09c7\u09b0 \u09a4\u09a5\u09cd\u09af \u0985\u09a7\u09bf\u0995\u09be\u09b0 \u09a8\u09bf\u09b6\u09cd\u099a\u09bf\u09a4 \u0995\u09b0\u09c7\u099b\u09c7: \u09a4\u09a5\u09cd\u09af\u09ae\u09a8\u09cd\u09a4\u09cd\u09b0\u09c0&quot;}">
                                                                </noscript>
                                                                <img src="{{ Storage::url($post->image) }}"
                                                                     alt="{{ $post->title }}"/>
                                                                <script data-id="ari-image-976311616802">
                                                                    jwARI.fetch($('#ari-image-976311616802'));
                                                                </script>
                                                                <span class="content_type"></span>
                                                            </div>
                                                            <div class="info has_ai">
                                                                <h2 class="title_holder">
                                                                    <span class="title">{{ $post->title }}</span>
                                                                </h2>
                                                                <div class="summery">
                                                                {!! \Illuminate\Support\Str::words($post->description, 20) !!}
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
                                                                            $created_at = \Illuminate\Support\Carbon::createFromFormat('Y-m-d H:s:i', $post->created_at);
                                                                            echo $created_at->diffForHumans(\Carbon\Carbon::now())
                                                                        @endphp
                                                                    </span>
                                                                    <!--comment count-->
                                                                    <!--like count-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach

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
                                            <a href="assets/index.html">ছবি</a>
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
                                <div id="widget_97661" class="widget_color_ widget_wrap">
                                    <div class="contents_listing  widget">
                                        <h4 class="titlebar">
                                            <a href="assets/index.html">ভিডিও</a>
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
			content_type_watch
			responsive_image_hide_
			m_show_image_as_top
		">
                                                        <!--overlay anchor-->
                                                        <a class="link_overlay" href="assets/index.html"></a>
                                                        <!--image-->
                                                        <div class="image">
                                                            <noscript id="ari-image-976611616793"
                                                                      data-ari="{&quot;path&quot;:&quot;media\/2019\/09\/29\/d8a1ac018d6712bb7ff5206c08209f37-5d90cbda4c66e.jpg?jadewits_media_id=1473918&quot;,&quot;ratio&quot;:[16,9],&quot;alt&quot;:&quot;\u09ae\u09cc\u09b8\u09c1\u09ae\u09bf \u09ac\u09be\u09df\u09c1\u09b0 \u09aa\u09cd\u09b0\u09ad\u09be\u09ac\u09c7 \u099d\u09b0\u099b\u09c7 \u09ac\u09c3\u09b7\u09cd\u099f\u09bf \u0986\u09b0\u0993 \u099d\u09b0\u09ac\u09c7&quot;}">
                                                                <img src="assets/contents/cache/images/400x225x1/uploads/media/2019/09/29/d8a1ac018d6712bb7ff5206c08209f37-5d90cbda4c66e.jpg"
                                                                     alt="মৌসুমি বায়ুর প্রভাবে ঝরছে বৃষ্টি আরও ঝরবে"/>
                                                            </noscript>
                                                            <script data-id="ari-image-976611616793">
                                                                jwARI.fetch($('#ari-image-976611616793'));
                                                            </script>
                                                            <span class="content_type"></span>
                                                        </div>
                                                        <div class="info has_ai">
                                                            <h2 class="title_holder">
                                                                <span class="title">মৌসুমি বায়ুর প্রভাবে ঝরছে বৃষ্টি আরও ঝরবে</span>
                                                            </h2>
                                                            <div class="additional">
                                                                <!--category/page-->
                                                                <!--author-->
                                                                <!--time-->
                                                                <span class="time aitm"
                                                                      data-published="2019-09-29T21:20:00+06:00"
                                                                      data-modified="2019-09-29T21:21:10+06:00">১৩ ঘন্টা ৩৮ মিনিট আগে</span>
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
                                <div id="widget_97701" class="widget_color_ widget_wrap">
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
			content_type_watch
			responsive_image_hide_
		">
                                                        <!--overlay anchor-->
                                                        <a class="link_overlay" href="assets/index.html"></a>
                                                        <!--image-->
                                                        <div class="image">
                                                            <noscript id="ari-image-977011616764"
                                                                      data-ari="{&quot;path&quot;:&quot;media\/2019\/09\/29\/ea5ea864e49b12ac5181cd11e1a92173-5d909ad4261eb.jpg?jadewits_media_id=1473866&quot;,&quot;ratio&quot;:[16,9],&quot;alt&quot;:&quot;\u09a4\u09c1\u09b2\u09bf \u0993 \u0995\u09cd\u09af\u09be\u09ae\u09c7\u09b0\u09be\u09df \u09b8\u09ab\u09b2 \u098f\u0995 \u09b6\u09bf\u09b2\u09cd\u09aa\u09c0\u09b0 \u0995\u09a5\u09be&quot;}">
                                                                <img src="assets/contents/cache/images/400x225x1/uploads/media/2019/09/29/ea5ea864e49b12ac5181cd11e1a92173-5d909ad4261eb.jpg"
                                                                     alt="তুলি ও ক্যামেরায় সফল এক শিল্পীর কথা"/>
                                                            </noscript>
                                                            <script data-id="ari-image-977011616764">
                                                                jwARI.fetch($('#ari-image-977011616764'));
                                                            </script>
                                                            <span class="content_type"></span>
                                                        </div>
                                                        <div class="info has_ai">
                                                            <h2 class="title_holder">
                                                                <span class="title">তুলি ও ক্যামেরায় সফল এক শিল্পীর কথা</span>
                                                            </h2>
                                                            <div class="additional">
                                                                <!--category/page-->
                                                                <!--author-->
                                                                <!--time-->
                                                                <span class="time aitm"
                                                                      data-published="2019-09-29T17:50:00+06:00"
                                                                      data-modified="2019-09-29T17:52:14+06:00">১৭ ঘন্টা ৮ মিনিট আগে</span>
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
			content_type_watch
			responsive_image_hide_
		">
                                                        <!--overlay anchor-->
                                                        <a class="link_overlay" href="assets/index.html"></a>
                                                        <!--image-->
                                                        <div class="image">
                                                            <noscript id="ari-image-977011616499"
                                                                      data-ari="{&quot;path&quot;:&quot;media\/2019\/09\/27\/fbd5829d326f06570e9d5671947e422a-5d8e40b83b8df.jpg?jadewits_media_id=1473385&quot;,&quot;ratio&quot;:[16,9],&quot;alt&quot;:&quot;\u0987\u09b2\u09bf\u09b6 \u09b0\u09aa\u09cd\u09a4\u09be\u09a8\u09bf\u09b0 \u09b8\u09bf\u09a6\u09cd\u09a7\u09be\u09a8\u09cd\u09a4\u09c7 \u0996\u09c1\u09b6\u09bf \u099a\u09be\u0981\u09a6\u09aa\u09c1\u09b0\u09c7\u09b0 \u09ac\u09cd\u09af\u09ac\u09b8\u09be\u09af\u09bc\u09c0\u09b0\u09be&quot;}">
                                                                <img src="assets/contents/cache/images/400x225x1/uploads/media/2019/09/27/fbd5829d326f06570e9d5671947e422a-5d8e40b83b8df.jpg"
                                                                     alt="ইলিশ রপ্তানির সিদ্ধান্তে খুশি চাঁদপুরের ব্যবসায়ীরা"/>
                                                            </noscript>
                                                            <script data-id="ari-image-977011616499">
                                                                jwARI.fetch($('#ari-image-977011616499'));
                                                            </script>
                                                            <span class="content_type"></span>
                                                        </div>
                                                        <div class="info has_ai">
                                                            <h2 class="title_holder">
                                                                <span class="title">ইলিশ রপ্তানির সিদ্ধান্তে খুশি চাঁদপুরের ব্যবসায়ীরা</span>
                                                            </h2>
                                                            <div class="additional">
                                                                <!--category/page-->
                                                                <!--author-->
                                                                <!--time-->
                                                                <span class="time aitm"
                                                                      data-published="2019-09-27T23:01:00+06:00"
                                                                      data-modified="2019-09-27T23:02:56+06:00">২৭ সেপ্টেম্বর ২০১৯</span>
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
			content_type_watch
			responsive_image_hide_
		">
                                                        <!--overlay anchor-->
                                                        <a class="link_overlay" href="assets/index.html"></a>
                                                        <!--image-->
                                                        <div class="image">
                                                            <noscript id="ari-image-977011616498"
                                                                      data-ari="{&quot;path&quot;:&quot;media\/2019\/09\/27\/42d5835af23fde8e65a965092ace8e49-5d8e4078682ed.jpg?jadewits_media_id=1473384&quot;,&quot;ratio&quot;:[16,9],&quot;alt&quot;:&quot;\u09b6\u09bf\u09b6\u09c1\u09b0 \u09b8\u0999\u09cd\u0997\u09c7 \u09ae\u09be\u09df\u09c7\u09b0\u09be\u0993 \u0986\u09b2\u09cb\u09b0 \u09aa\u09a5\u09c7&quot;}">
                                                                <img src="assets/contents/cache/images/400x225x1/uploads/media/2019/09/27/42d5835af23fde8e65a965092ace8e49-5d8e4078682ed.jpg"
                                                                     alt="শিশুর সঙ্গে মায়েরাও আলোর পথে"/>
                                                            </noscript>
                                                            <script data-id="ari-image-977011616498">
                                                                jwARI.fetch($('#ari-image-977011616498'));
                                                            </script>
                                                            <span class="content_type"></span>
                                                        </div>
                                                        <div class="info has_ai">
                                                            <h2 class="title_holder">
                                                                <span class="title">শিশুর সঙ্গে মায়েরাও আলোর পথে</span>
                                                            </h2>
                                                            <div class="additional">
                                                                <!--category/page-->
                                                                <!--author-->
                                                                <!--time-->
                                                                <span class="time aitm"
                                                                      data-published="2019-09-27T23:00:00+06:00"
                                                                      data-modified="2019-09-27T23:01:55+06:00">২৭ সেপ্টেম্বর ২০১৯</span>
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
			content_type_watch
			responsive_image_hide_
		">
                                                        <!--overlay anchor-->
                                                        <a class="link_overlay" href="assets/index.html"></a>
                                                        <!--image-->
                                                        <div class="image">
                                                            <noscript id="ari-image-977011616497"
                                                                      data-ari="{&quot;path&quot;:&quot;media\/2019\/09\/27\/28fdeb798d5f9f994ca8212f5d21f842-5d8e401e66a6e.jpg?jadewits_media_id=1473383&quot;,&quot;ratio&quot;:[16,9],&quot;alt&quot;:&quot;\u09b6\u09b0\u09c0\u09df\u09a4\u09aa\u09c1\u09b0\u09c7\u09b0 \u09a8\u09dc\u09bf\u09df\u09be\u09df \u09aa\u09a6\u09cd\u09ae\u09be\u09b0 \u09ad\u09be\u0999\u09a8&quot;}">
                                                                <img src="assets/contents/cache/images/400x225x1/uploads/media/2019/09/27/28fdeb798d5f9f994ca8212f5d21f842-5d8e401e66a6e.jpg"
                                                                     alt="শরীয়তপুরের নড়িয়ায় পদ্মার ভাঙন"/>
                                                            </noscript>
                                                            <script data-id="ari-image-977011616497">
                                                                jwARI.fetch($('#ari-image-977011616497'));
                                                            </script>
                                                            <span class="content_type"></span>
                                                        </div>
                                                        <div class="info has_ai">
                                                            <h2 class="title_holder">
                                                                <span class="title">শরীয়তপুরের নড়িয়ায় পদ্মার ভাঙন</span>
                                                            </h2>
                                                            <div class="additional">
                                                                <!--category/page-->
                                                                <!--author-->
                                                                <!--time-->
                                                                <span class="time aitm"
                                                                      data-published="2019-09-27T22:59:00+06:00"
                                                                      data-modified="2019-09-27T23:00:24+06:00">২৭ সেপ্টেম্বর ২০১৯</span>
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