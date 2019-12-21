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
                                                                    @if($post->posts->isNotEmpty())
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

                                                                                <img src="{{ Storage::url($post->posts[0]->image) }}"
                                                                                     alt="{{ $post->posts[0]->title }}"
                                                                                     style="min-height: 100px;"/>
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
                                                                    @endif
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

                                                                      $cats = "";
                                                                      if ($post->posts->isNotEmpty()){
                                                                        $last_insert_id = $post->posts[0]->id;

                                                                        $cats = \Illuminate\Support\Facades\DB::table('categories')
                                                                        ->rightJoin('posts', 'categories.id', '=', 'posts.category_id')
                                                                        ->where(['category_id'=> $id, 'posts.status'=> 1])
                                                                        ->orderBy('posts.id', 'desc')
                                                                        ->take(2)
                                                                        ->whereNotIn('posts.id', [$last_insert_id])
                                                                        ->get();
                                                                      }

                                                                @endphp
                                                                @if($cats)
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
                                                                                    {{--<noscript id="ari-image-516901616813"--}}
                                                                                    {{--data-ari="{&quot;path&quot;:&quot;media\/2017\/10\/13\/7e315843eb27154b490273e90e28c044-59e0393f488f2.jpg?jadewits_media_id=1030981&quot;,&quot;ratio&quot;:[16,9],&quot;alt&quot;:&quot;\u099f\u09c7\u0995\u09a8\u09be\u09ab\u09c7 \u2018\u09ac\u09a8\u09cd\u09a6\u09c1\u0995\u09af\u09c1\u09a6\u09cd\u09a7\u09c7\u2019 \u09e8 \u09b0\u09cb\u09b9\u09bf\u0999\u09cd\u0997\u09be \u09a8\u09bf\u09b9\u09a4&quot;}">--}}
                                                                                    {{--</noscript>--}}
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

                                                      $category = \App\Category::where('id', $id)->first();

                                                      if ($category->posts->isNotEmpty()){

                                                      $last_posts = \App\Post::where(['status'=> 1, 'category_id' => $category->id ])->orderBy('id', 'DESC')->get()->take(3);
                                                            $posts_id = array();
                                                            foreach($last_posts as $lpost){
                                                                $posts_id[] = $lpost->id;
                                                            }

                                                        $cats = \Illuminate\Support\Facades\DB::table('categories')
                                                            ->rightJoin('posts', 'categories.id', '=', 'posts.category_id')
                                                            ->where(['category_id'=> $id, 'posts.status'=> 1])
                                                            ->orderBy('posts.id', 'desc')
                                                            ->take(4)
                                                            ->whereNotIn('posts.id', $posts_id)
                                                            ->get();

                                                      }


                                                @endphp
                                                @if($cats)
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
                                                                    {{--<noscript id="ari-image-976761616809"--}}
                                                                    {{--data-ari="{&quot;path&quot;:&quot;media\/2019\/09\/19\/01be6595cbefc06b30a93610b33a5eb9-5d83655c58ddb.jpg?jadewits_media_id=1471260&quot;,&quot;ratio&quot;:[16,9],&quot;alt&quot;:&quot;\u099b\u09be\u09a4\u09cd\u09b0\u09b2\u09c0\u0997\u09c7\u09b0 \u09ad\u09be\u09b0\u09aa\u09cd\u09b0\u09be\u09aa\u09cd\u09a4 \u09b8\u09ad\u09be\u09aa\u09a4\u09bf\u09b0 \u099c\u09bf\u09a1\u09bf&quot;}">--}}
                                                                    {{--</noscript>--}}
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
                                                @endif
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

                                <div id="widget_97631" class="widget_color_ widget_wrap">
                                    <div class="contents_listing  widget">
                                        <div class="contents  summery_view
			">
                                            <div class="row">
                                                @php
                                                    $post = \App\Category::with(['posts' => function ($q) {
                                                     $q->orderBy('id', 'desc')->take(1);
                                                      }])->where('id', $id)->first();
                                                      if ($post->posts->isNotEmpty()){
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
                                                      }
                                                @endphp
                                                @if($cats)
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
                                                                <a class="link_overlay"
                                                                   href="{{ route('single.post', $post->id) }}"></a>
                                                                <!--image-->
                                                                <div class="image">
                                                                    {{--<noscript id="ari-image-976311616802"--}}
                                                                    {{--data-ari="{&quot;path&quot;:&quot;media\/2019\/09\/29\/16bed88a3667f3cb873439ece12ac869-5d90e134a064e.jpg?jadewits_media_id=1473926&quot;,&quot;ratio&quot;:[16,9],&quot;alt&quot;:&quot;\u09b8\u09b0\u0995\u09be\u09b0 \u099c\u09a8\u0997\u09a3\u09c7\u09b0 \u09a4\u09a5\u09cd\u09af \u0985\u09a7\u09bf\u0995\u09be\u09b0 \u09a8\u09bf\u09b6\u09cd\u099a\u09bf\u09a4 \u0995\u09b0\u09c7\u099b\u09c7: \u09a4\u09a5\u09cd\u09af\u09ae\u09a8\u09cd\u09a4\u09cd\u09b0\u09c0&quot;}">--}}
                                                                    {{--</noscript>--}}
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
                                                @endif
                                            </div>
                                        </div>
                                        <div class='bottom'>
                                            {{--<a class="more_link" href="assets/index.html">আরও</a>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--<div id="div_97626" class="p_c   container_fixed_height  _col">--}}
                        {{--<div class="inner">--}}
                        {{--<div id="widget_97656" class="widget_color_ widget_wrap">--}}
                        {{--<div class="contents_listing  widget">--}}
                        {{--<h4 class="titlebar">--}}
                        {{--<a href="assets/index.html">ছবি</a>--}}
                        {{--</h4>--}}
                        {{--<div class="contents  summery_view--}}
                        {{--shaded_bg--}}
                        {{--">--}}
                        {{--<div class="row">--}}
                        {{--<div class="col col1">--}}
                        {{--<div class="each col_in--}}
                        {{--has_image--}}
                        {{--image_top--}}
                        {{--content_capability_gallery--}}
                        {{--content_type_gallery--}}
                        {{--responsive_image_hide_--}}
                        {{--m_show_image_as_top--}}
                        {{--">--}}
                        {{--<!--overlay anchor-->--}}
                        {{--<a class="link_overlay" href="assets/index.html"></a>--}}
                        {{--<!--image-->--}}
                        {{--<div class="image">--}}
                        {{--<noscript id="ari-image-976561604635"--}}
                        {{--data-ari="{&quot;path&quot;:&quot;media\/2019\/07\/16\/05bec6aabc88ee4a0e91156abe059b17-5d2e0887c3410.jpg?jadewits_media_id=1455790&quot;,&quot;ratio&quot;:[16,9],&quot;alt&quot;:&quot;\u09ac\u09c3\u09b7\u09cd\u099f\u09bf\u09a4\u09c7 \u09ad\u09cb\u0997\u09be\u09a8\u09cd\u09a4\u09bf \u09ab\u09be\u09b0\u09cd\u09ae\u0997\u09c7\u099f\u09c7&quot;}">--}}
                        {{--<img src="assets/contents/cache/images/400x225x1/uploads/media/2019/07/16/05bec6aabc88ee4a0e91156abe059b17-5d2e0887c3410.jpg"--}}
                        {{--alt="বৃষ্টিতে ভোগান্তি ফার্মগেটে"/>--}}
                        {{--</noscript>--}}
                        {{--<script data-id="ari-image-976561604635">--}}
                        {{--jwARI.fetch($('#ari-image-976561604635'));--}}
                        {{--</script>--}}
                        {{--<span class="content_type"></span>--}}
                        {{--</div>--}}
                        {{--<div class="info has_ai">--}}
                        {{--<h2 class="title_holder">--}}
                        {{--<span class="title">বৃষ্টিতে ভোগান্তি ফার্মগেটে</span>--}}
                        {{--</h2>--}}
                        {{--<div class="additional">--}}
                        {{--<!--category/page-->--}}
                        {{--<!--author-->--}}
                        {{--<!--time-->--}}
                        {{--<span class="time aitm"--}}
                        {{--data-published="2019-07-16T23:20:00+06:00"--}}
                        {{--data-modified="2019-07-16T23:27:19+06:00">১৬ জুলাই ২০১৯</span>--}}
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
                        {{--<div id="widget_97696" class="widget_color_ widget_wrap">--}}
                        {{--<div class="contents_listing  widget">--}}
                        {{--<div class="contents  summery_view col_articles--}}
                        {{--shaded_bg--}}
                        {{--column_view--}}
                        {{--">--}}
                        {{--<div class="row">--}}
                        {{--<div class="col col2">--}}
                        {{--<div class="each col_in--}}
                        {{--has_image--}}
                        {{--image_top--}}
                        {{--content_capability_gallery--}}
                        {{--content_type_gallery--}}
                        {{--responsive_image_hide_--}}
                        {{--">--}}
                        {{--<!--overlay anchor-->--}}
                        {{--<a class="link_overlay" href="assets/index.html"></a>--}}
                        {{--<!--image-->--}}
                        {{--<div class="image">--}}
                        {{--<noscript id="ari-image-976961591302"--}}
                        {{--data-ari="{&quot;path&quot;:&quot;media\/2019\/04\/29\/5a4df99f99ec7c37e7e940674c24d62d-5cc6adf7bd6f0.jpg?jadewits_media_id=1435531&quot;,&quot;ratio&quot;:[16,9],&quot;alt&quot;:&quot;\u2018\u099c\u0999\u09cd\u0997\u09bf \u0986\u09b8\u09cd\u09a4\u09be\u09a8\u09be\u09df\u2019 \u0985\u09ad\u09bf\u09af\u09be\u09a8&quot;}">--}}
                        {{--<img src="assets/contents/cache/images/400x225x1/uploads/media/2019/04/29/5a4df99f99ec7c37e7e940674c24d62d-5cc6adf7bd6f0.jpg"--}}
                        {{--alt="‘জঙ্গি আস্তানায়’ অভিযান"/>--}}
                        {{--</noscript>--}}
                        {{--<script data-id="ari-image-976961591302">--}}
                        {{--jwARI.fetch($('#ari-image-976961591302'));--}}
                        {{--</script>--}}
                        {{--<span class="content_type"></span>--}}
                        {{--</div>--}}
                        {{--<div class="info has_ai">--}}
                        {{--<h2 class="title_holder">--}}
                        {{--<span class="title">‘জঙ্গি আস্তানায়’ অভিযান</span>--}}
                        {{--</h2>--}}
                        {{--<div class="additional">--}}
                        {{--<!--category/page-->--}}
                        {{--<!--author-->--}}
                        {{--<!--time-->--}}
                        {{--<span class="time aitm"--}}
                        {{--data-published="2019-04-29T13:54:00+06:00"--}}
                        {{--data-modified="2019-04-29T13:57:02+06:00">২৯ এপ্রিল ২০১৯</span>--}}
                        {{--<!--comment count-->--}}
                        {{--<!--like count-->--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="col col2">--}}
                        {{--<div class="each col_in--}}
                        {{--has_image--}}
                        {{--image_top--}}
                        {{--content_capability_gallery--}}
                        {{--content_type_gallery--}}
                        {{--responsive_image_hide_--}}
                        {{--">--}}
                        {{--<!--overlay anchor-->--}}
                        {{--<a class="link_overlay" href="assets/index.html"></a>--}}
                        {{--<!--image-->--}}
                        {{--<div class="image">--}}
                        {{--<noscript id="ari-image-976961591176"--}}
                        {{--data-ari="{&quot;path&quot;:&quot;media\/2019\/04\/28\/0affc40f751f55fda0861ecf59cd46c9-5cc5939612234.jpg?jadewits_media_id=1435340&quot;,&quot;ratio&quot;:[16,9],&quot;alt&quot;:&quot;\u0989\u09ab\u09ab, \u0997\u09b0\u09ae!&quot;}">--}}
                        {{--<img src="assets/contents/cache/images/400x225x1/uploads/media/2019/04/28/0affc40f751f55fda0861ecf59cd46c9-5cc5939612234.jpg"--}}
                        {{--alt="উফফ, গরম!"/>--}}
                        {{--</noscript>--}}
                        {{--<script data-id="ari-image-976961591176">--}}
                        {{--jwARI.fetch($('#ari-image-976961591176'));--}}
                        {{--</script>--}}
                        {{--<span class="content_type"></span>--}}
                        {{--</div>--}}
                        {{--<div class="info has_ai">--}}
                        {{--<h2 class="title_holder">--}}
                        {{--<span class="title">উফফ, গরম!</span>--}}
                        {{--</h2>--}}
                        {{--<div class="additional">--}}
                        {{--<!--category/page-->--}}
                        {{--<!--author-->--}}
                        {{--<!--time-->--}}
                        {{--<span class="time aitm"--}}
                        {{--data-published="2019-04-28T17:49:00+06:00"--}}
                        {{--data-modified="2019-04-28T17:53:27+06:00">২৮ এপ্রিল ২০১৯</span>--}}
                        {{--<!--comment count-->--}}
                        {{--<!--like count-->--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="row">--}}
                        {{--<div class="col col2">--}}
                        {{--<div class="each col_in--}}
                        {{--has_image--}}
                        {{--image_top--}}
                        {{--content_capability_gallery--}}
                        {{--content_type_gallery--}}
                        {{--responsive_image_hide_--}}
                        {{--">--}}
                        {{--<!--overlay anchor-->--}}
                        {{--<a class="link_overlay" href="assets/index.html"></a>--}}
                        {{--<!--image-->--}}
                        {{--<div class="image">--}}
                        {{--<noscript id="ari-image-976961590988"--}}
                        {{--data-ari="{&quot;path&quot;:&quot;media\/2019\/04\/27\/54b534a6fb47faf328a336409dc73b03-5cc440e7aa379.jpg?jadewits_media_id=1435077&quot;,&quot;ratio&quot;:[16,9],&quot;alt&quot;:&quot;\u09aa\u09c1\u09b0\u09be\u09a8 \u09a2\u09be\u0995\u09be\u09df \u09aa\u09be\u09a8\u09bf \u09b8\u09ae\u09b8\u09cd\u09af\u09be&quot;}">--}}
                        {{--<img src="assets/contents/cache/images/400x225x1/uploads/media/2019/04/27/54b534a6fb47faf328a336409dc73b03-5cc440e7aa379.jpg"--}}
                        {{--alt="পুরান ঢাকায় পানি সমস্যা"/>--}}
                        {{--</noscript>--}}
                        {{--<script data-id="ari-image-976961590988">--}}
                        {{--jwARI.fetch($('#ari-image-976961590988'));--}}
                        {{--</script>--}}
                        {{--<span class="content_type"></span>--}}
                        {{--</div>--}}
                        {{--<div class="info has_ai">--}}
                        {{--<h2 class="title_holder">--}}
                        {{--<span class="title">পুরান ঢাকায় পানি সমস্যা</span>--}}
                        {{--</h2>--}}
                        {{--<div class="additional">--}}
                        {{--<!--category/page-->--}}
                        {{--<!--author-->--}}
                        {{--<!--time-->--}}
                        {{--<span class="time aitm"--}}
                        {{--data-published="2019-04-27T17:43:00+06:00"--}}
                        {{--data-modified="2019-04-27T17:46:33+06:00">২৭ এপ্রিল ২০১৯</span>--}}
                        {{--<!--comment count-->--}}
                        {{--<!--like count-->--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="col col2">--}}
                        {{--<div class="each col_in--}}
                        {{--has_image--}}
                        {{--image_top--}}
                        {{--content_capability_gallery--}}
                        {{--content_type_gallery--}}
                        {{--responsive_image_hide_--}}
                        {{--">--}}
                        {{--<!--overlay anchor-->--}}
                        {{--<a class="link_overlay" href="assets/index.html"></a>--}}
                        {{--<!--image-->--}}
                        {{--<div class="image">--}}
                        {{--<noscript id="ari-image-976961590649"--}}
                        {{--data-ari="{&quot;path&quot;:&quot;media\/2019\/04\/25\/25fc1fb6fa95a381175f6a8f300fed49-5cc1c7b365e31.jpg?jadewits_media_id=1434591&quot;,&quot;ratio&quot;:[16,9],&quot;alt&quot;:&quot;\u099a\u09bf\u0982\u09dc\u09bf \u09aa\u09cb\u09a8\u09be \u0986\u09b9\u09b0\u09a3&quot;}">--}}
                        {{--<img src="assets/contents/cache/images/400x225x1/uploads/media/2019/04/25/25fc1fb6fa95a381175f6a8f300fed49-5cc1c7b365e31.jpg"--}}
                        {{--alt="চিংড়ি পোনা আহরণ"/>--}}
                        {{--</noscript>--}}
                        {{--<script data-id="ari-image-976961590649">--}}
                        {{--jwARI.fetch($('#ari-image-976961590649'));--}}
                        {{--</script>--}}
                        {{--<span class="content_type"></span>--}}
                        {{--</div>--}}
                        {{--<div class="info has_ai">--}}
                        {{--<h2 class="title_holder">--}}
                        {{--<span class="title">চিংড়ি পোনা আহরণ</span>--}}
                        {{--</h2>--}}
                        {{--<div class="additional">--}}
                        {{--<!--category/page-->--}}
                        {{--<!--author-->--}}
                        {{--<!--time-->--}}
                        {{--<span class="time aitm"--}}
                        {{--data-published="2019-04-25T20:41:00+06:00"--}}
                        {{--data-modified="2019-04-25T20:45:44+06:00">২৫ এপ্রিল ২০১৯</span>--}}
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
                        {{--<div id="widget_100701" class="widget_color_ widget_wrap">--}}
                        {{--<div class="widget_text  widget">--}}
                        {{--<div class="widget_text_inner aunqur">--}}
                        {{--<div class="content">--}}
                        {{--<!-- <div class="bongobondhu"><a href="assets/https://www.prothomalo.com/father-of-nation" target="_blank"><img src="assets///paloimages.prothom-alo.com/contents/cache/images/540x283x1/uploads/media/2019/03/16/c28ac85aba3742c448a879479270c2de-5c8d0856334f1.png" alt="বঙ্গবন্ধুর জন্মদিন "> </a> </div>--}}
                        {{--<a id="p_alo_home" href="assets/https://www.prothomalo.com/national-mourning-day"><img src="assets/https://paloimages.prothom-alo.com/contents/cache/images/540x0x1/uploads/media/2019/08/14/1a5732f6967a4dd77c516dadfe181c56-5d5416ca5b876.png" style="margin-bottom: 12px;"></a> --></div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--<div id="widget_97661" class="widget_color_ widget_wrap">--}}
                        {{--<div class="contents_listing  widget">--}}
                        {{--<h4 class="titlebar">--}}
                        {{--<a href="assets/index.html">ভিডিও</a>--}}
                        {{--</h4>--}}
                        {{--<div class="contents  summery_view--}}
                        {{--shaded_bg--}}
                        {{--">--}}
                        {{--<div class="row">--}}
                        {{--<div class="col col1">--}}
                        {{--<div class="each col_in--}}
                        {{--has_image--}}
                        {{--image_top--}}
                        {{--content_capability_gallery--}}
                        {{--content_type_watch--}}
                        {{--responsive_image_hide_--}}
                        {{--m_show_image_as_top--}}
                        {{--">--}}
                        {{--<!--overlay anchor-->--}}
                        {{--<a class="link_overlay" href="assets/index.html"></a>--}}
                        {{--<!--image-->--}}
                        {{--<div class="image">--}}
                        {{--<noscript id="ari-image-976611616793"--}}
                        {{--data-ari="{&quot;path&quot;:&quot;media\/2019\/09\/29\/d8a1ac018d6712bb7ff5206c08209f37-5d90cbda4c66e.jpg?jadewits_media_id=1473918&quot;,&quot;ratio&quot;:[16,9],&quot;alt&quot;:&quot;\u09ae\u09cc\u09b8\u09c1\u09ae\u09bf \u09ac\u09be\u09df\u09c1\u09b0 \u09aa\u09cd\u09b0\u09ad\u09be\u09ac\u09c7 \u099d\u09b0\u099b\u09c7 \u09ac\u09c3\u09b7\u09cd\u099f\u09bf \u0986\u09b0\u0993 \u099d\u09b0\u09ac\u09c7&quot;}">--}}
                        {{--<img src="assets/contents/cache/images/400x225x1/uploads/media/2019/09/29/d8a1ac018d6712bb7ff5206c08209f37-5d90cbda4c66e.jpg"--}}
                        {{--alt="মৌসুমি বায়ুর প্রভাবে ঝরছে বৃষ্টি আরও ঝরবে"/>--}}
                        {{--</noscript>--}}
                        {{--<script data-id="ari-image-976611616793">--}}
                        {{--jwARI.fetch($('#ari-image-976611616793'));--}}
                        {{--</script>--}}
                        {{--<span class="content_type"></span>--}}
                        {{--</div>--}}
                        {{--<div class="info has_ai">--}}
                        {{--<h2 class="title_holder">--}}
                        {{--<span class="title">মৌসুমি বায়ুর প্রভাবে ঝরছে বৃষ্টি আরও ঝরবে</span>--}}
                        {{--</h2>--}}
                        {{--<div class="additional">--}}
                        {{--<!--category/page-->--}}
                        {{--<!--author-->--}}
                        {{--<!--time-->--}}
                        {{--<span class="time aitm"--}}
                        {{--data-published="2019-09-29T21:20:00+06:00"--}}
                        {{--data-modified="2019-09-29T21:21:10+06:00">১৩ ঘন্টা ৩৮ মিনিট আগে</span>--}}
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
                        {{--<div id="widget_97701" class="widget_color_ widget_wrap">--}}
                        {{--<div class="contents_listing  widget">--}}
                        {{--<div class="contents  summery_view col_articles--}}
                        {{--shaded_bg--}}
                        {{--column_view--}}
                        {{--">--}}
                        {{--<div class="row">--}}
                        {{--<div class="col col2">--}}
                        {{--<div class="each col_in--}}
                        {{--has_image--}}
                        {{--image_top--}}
                        {{--content_capability_gallery--}}
                        {{--content_type_watch--}}
                        {{--responsive_image_hide_--}}
                        {{--">--}}
                        {{--<!--overlay anchor-->--}}
                        {{--<a class="link_overlay" href="assets/index.html"></a>--}}
                        {{--<!--image-->--}}
                        {{--<div class="image">--}}
                        {{--<noscript id="ari-image-977011616764"--}}
                        {{--data-ari="{&quot;path&quot;:&quot;media\/2019\/09\/29\/ea5ea864e49b12ac5181cd11e1a92173-5d909ad4261eb.jpg?jadewits_media_id=1473866&quot;,&quot;ratio&quot;:[16,9],&quot;alt&quot;:&quot;\u09a4\u09c1\u09b2\u09bf \u0993 \u0995\u09cd\u09af\u09be\u09ae\u09c7\u09b0\u09be\u09df \u09b8\u09ab\u09b2 \u098f\u0995 \u09b6\u09bf\u09b2\u09cd\u09aa\u09c0\u09b0 \u0995\u09a5\u09be&quot;}">--}}
                        {{--<img src="assets/contents/cache/images/400x225x1/uploads/media/2019/09/29/ea5ea864e49b12ac5181cd11e1a92173-5d909ad4261eb.jpg"--}}
                        {{--alt="তুলি ও ক্যামেরায় সফল এক শিল্পীর কথা"/>--}}
                        {{--</noscript>--}}
                        {{--<script data-id="ari-image-977011616764">--}}
                        {{--jwARI.fetch($('#ari-image-977011616764'));--}}
                        {{--</script>--}}
                        {{--<span class="content_type"></span>--}}
                        {{--</div>--}}
                        {{--<div class="info has_ai">--}}
                        {{--<h2 class="title_holder">--}}
                        {{--<span class="title">তুলি ও ক্যামেরায় সফল এক শিল্পীর কথা</span>--}}
                        {{--</h2>--}}
                        {{--<div class="additional">--}}
                        {{--<!--category/page-->--}}
                        {{--<!--author-->--}}
                        {{--<!--time-->--}}
                        {{--<span class="time aitm"--}}
                        {{--data-published="2019-09-29T17:50:00+06:00"--}}
                        {{--data-modified="2019-09-29T17:52:14+06:00">১৭ ঘন্টা ৮ মিনিট আগে</span>--}}
                        {{--<!--comment count-->--}}
                        {{--<!--like count-->--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="col col2">--}}
                        {{--<div class="each col_in--}}
                        {{--has_image--}}
                        {{--image_top--}}
                        {{--content_capability_gallery--}}
                        {{--content_type_watch--}}
                        {{--responsive_image_hide_--}}
                        {{--">--}}
                        {{--<!--overlay anchor-->--}}
                        {{--<a class="link_overlay" href="assets/index.html"></a>--}}
                        {{--<!--image-->--}}
                        {{--<div class="image">--}}
                        {{--<noscript id="ari-image-977011616499"--}}
                        {{--data-ari="{&quot;path&quot;:&quot;media\/2019\/09\/27\/fbd5829d326f06570e9d5671947e422a-5d8e40b83b8df.jpg?jadewits_media_id=1473385&quot;,&quot;ratio&quot;:[16,9],&quot;alt&quot;:&quot;\u0987\u09b2\u09bf\u09b6 \u09b0\u09aa\u09cd\u09a4\u09be\u09a8\u09bf\u09b0 \u09b8\u09bf\u09a6\u09cd\u09a7\u09be\u09a8\u09cd\u09a4\u09c7 \u0996\u09c1\u09b6\u09bf \u099a\u09be\u0981\u09a6\u09aa\u09c1\u09b0\u09c7\u09b0 \u09ac\u09cd\u09af\u09ac\u09b8\u09be\u09af\u09bc\u09c0\u09b0\u09be&quot;}">--}}
                        {{--<img src="assets/contents/cache/images/400x225x1/uploads/media/2019/09/27/fbd5829d326f06570e9d5671947e422a-5d8e40b83b8df.jpg"--}}
                        {{--alt="ইলিশ রপ্তানির সিদ্ধান্তে খুশি চাঁদপুরের ব্যবসায়ীরা"/>--}}
                        {{--</noscript>--}}
                        {{--<script data-id="ari-image-977011616499">--}}
                        {{--jwARI.fetch($('#ari-image-977011616499'));--}}
                        {{--</script>--}}
                        {{--<span class="content_type"></span>--}}
                        {{--</div>--}}
                        {{--<div class="info has_ai">--}}
                        {{--<h2 class="title_holder">--}}
                        {{--<span class="title">ইলিশ রপ্তানির সিদ্ধান্তে খুশি চাঁদপুরের ব্যবসায়ীরা</span>--}}
                        {{--</h2>--}}
                        {{--<div class="additional">--}}
                        {{--<!--category/page-->--}}
                        {{--<!--author-->--}}
                        {{--<!--time-->--}}
                        {{--<span class="time aitm"--}}
                        {{--data-published="2019-09-27T23:01:00+06:00"--}}
                        {{--data-modified="2019-09-27T23:02:56+06:00">২৭ সেপ্টেম্বর ২০১৯</span>--}}
                        {{--<!--comment count-->--}}
                        {{--<!--like count-->--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="row">--}}
                        {{--<div class="col col2">--}}
                        {{--<div class="each col_in--}}
                        {{--has_image--}}
                        {{--image_top--}}
                        {{--content_capability_gallery--}}
                        {{--content_type_watch--}}
                        {{--responsive_image_hide_--}}
                        {{--">--}}
                        {{--<!--overlay anchor-->--}}
                        {{--<a class="link_overlay" href="assets/index.html"></a>--}}
                        {{--<!--image-->--}}
                        {{--<div class="image">--}}
                        {{--<noscript id="ari-image-977011616498"--}}
                        {{--data-ari="{&quot;path&quot;:&quot;media\/2019\/09\/27\/42d5835af23fde8e65a965092ace8e49-5d8e4078682ed.jpg?jadewits_media_id=1473384&quot;,&quot;ratio&quot;:[16,9],&quot;alt&quot;:&quot;\u09b6\u09bf\u09b6\u09c1\u09b0 \u09b8\u0999\u09cd\u0997\u09c7 \u09ae\u09be\u09df\u09c7\u09b0\u09be\u0993 \u0986\u09b2\u09cb\u09b0 \u09aa\u09a5\u09c7&quot;}">--}}
                        {{--<img src="assets/contents/cache/images/400x225x1/uploads/media/2019/09/27/42d5835af23fde8e65a965092ace8e49-5d8e4078682ed.jpg"--}}
                        {{--alt="শিশুর সঙ্গে মায়েরাও আলোর পথে"/>--}}
                        {{--</noscript>--}}
                        {{--<script data-id="ari-image-977011616498">--}}
                        {{--jwARI.fetch($('#ari-image-977011616498'));--}}
                        {{--</script>--}}
                        {{--<span class="content_type"></span>--}}
                        {{--</div>--}}
                        {{--<div class="info has_ai">--}}
                        {{--<h2 class="title_holder">--}}
                        {{--<span class="title">শিশুর সঙ্গে মায়েরাও আলোর পথে</span>--}}
                        {{--</h2>--}}
                        {{--<div class="additional">--}}
                        {{--<!--category/page-->--}}
                        {{--<!--author-->--}}
                        {{--<!--time-->--}}
                        {{--<span class="time aitm"--}}
                        {{--data-published="2019-09-27T23:00:00+06:00"--}}
                        {{--data-modified="2019-09-27T23:01:55+06:00">২৭ সেপ্টেম্বর ২০১৯</span>--}}
                        {{--<!--comment count-->--}}
                        {{--<!--like count-->--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="col col2">--}}
                        {{--<div class="each col_in--}}
                        {{--has_image--}}
                        {{--image_top--}}
                        {{--content_capability_gallery--}}
                        {{--content_type_watch--}}
                        {{--responsive_image_hide_--}}
                        {{--">--}}
                        {{--<!--overlay anchor-->--}}
                        {{--<a class="link_overlay" href="assets/index.html"></a>--}}
                        {{--<!--image-->--}}
                        {{--<div class="image">--}}
                        {{--<noscript id="ari-image-977011616497"--}}
                        {{--data-ari="{&quot;path&quot;:&quot;media\/2019\/09\/27\/28fdeb798d5f9f994ca8212f5d21f842-5d8e401e66a6e.jpg?jadewits_media_id=1473383&quot;,&quot;ratio&quot;:[16,9],&quot;alt&quot;:&quot;\u09b6\u09b0\u09c0\u09df\u09a4\u09aa\u09c1\u09b0\u09c7\u09b0 \u09a8\u09dc\u09bf\u09df\u09be\u09df \u09aa\u09a6\u09cd\u09ae\u09be\u09b0 \u09ad\u09be\u0999\u09a8&quot;}">--}}
                        {{--<img src="assets/contents/cache/images/400x225x1/uploads/media/2019/09/27/28fdeb798d5f9f994ca8212f5d21f842-5d8e401e66a6e.jpg"--}}
                        {{--alt="শরীয়তপুরের নড়িয়ায় পদ্মার ভাঙন"/>--}}
                        {{--</noscript>--}}
                        {{--<script data-id="ari-image-977011616497">--}}
                        {{--jwARI.fetch($('#ari-image-977011616497'));--}}
                        {{--</script>--}}
                        {{--<span class="content_type"></span>--}}
                        {{--</div>--}}
                        {{--<div class="info has_ai">--}}
                        {{--<h2 class="title_holder">--}}
                        {{--<span class="title">শরীয়তপুরের নড়িয়ায় পদ্মার ভাঙন</span>--}}
                        {{--</h2>--}}
                        {{--<div class="additional">--}}
                        {{--<!--category/page-->--}}
                        {{--<!--author-->--}}
                        {{--<!--time-->--}}
                        {{--<span class="time aitm"--}}
                        {{--data-published="2019-09-27T22:59:00+06:00"--}}
                        {{--data-modified="2019-09-27T23:00:24+06:00">২৭ সেপ্টেম্বর ২০১৯</span>--}}
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