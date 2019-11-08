<div id="fb-root"></div>
<div class="whole_wrapper">
    <div class="whole_inner">
        <!--header-->
        <div class="header_wrap ">
            <div class="header">
                <!--logo-->
                <h1 class="site_logo">
                    @php
                        $setting = \App\Setting::orderBy('id', 'DESC')->first();
                            @endphp
                    <a href="{{ url('/') }}"><img height="46"
                                                  src="@if($setting) {{ Storage::url($setting->logo) }} @endif"
                                                  alt="@if($setting) {{ $setting->site_title }} @endif"/></a>
                </h1>
                <div class="header_right_part">
                    <div class="header_right_inner">
                        <span class="more_main_menu"><span>সব</span></span>
                        <div class="more_main_menu_wrap">
                            <div class="more_main_menu_inner">
                                <span class="close_more_main"></span>
                                <div class="top_big_menu big_menu">
                                    <div class="big_menu_top">
                                        <div class="all-menu">
                                            <ul id="13">
                                                @foreach($categories as $category)
                                                    <li class="menu_page_id_37 menu_color_"><a class="static "
                                                                                               href="{{ route('category.post', $category->id) }}"> {{ $category->name }} </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        {{--<div class="special_menu">--}}
                                        {{--<ul>--}}
                                        {{--<li><a class="image_menu_icon" href="{{ asset('frontend') }}/assets/#">ছবি</a>--}}
                                        {{--</li>--}}
                                        {{--<li><a class="video_menu_icon" href="{{ asset('frontend') }}/assets/#">ভিডিও</a>--}}
                                        {{--</li>--}}
                                        {{--<li><a class="archive_menu_icon"--}}
                                        {{--href="{{ asset('frontend') }}/assets/#">আর্কাইভ</a></li>--}}
                                        {{--</ul>--}}
                                        {{--</div>--}}
                                    </div>
                                    {{--<div class="big_menu_bottom">--}}
                                    {{--<div class="bmenu_bottom_left">--}}
                                    {{--<div class="bmenu_bottom_toplinks">--}}
                                    {{--<ul id="6">--}}
                                    {{--<li class="menu_page_id_540 menu_color_"><a class="static "--}}
                                    {{--href="{{ asset('frontend') }}/assets/#"--}}
                                    {{--target="_blank">বিজ্ঞাপন</a>--}}
                                    {{--</li>--}}
                                    {{--<li class="menu_page_id_544 menu_color_"><a class="static "--}}
                                    {{--href="{{ asset('frontend') }}/assets/#"--}}
                                    {{--target="_blank">সার্কুলেশন</a>--}}
                                    {{--</li>--}}
                                    {{--<li class="menu_page_id_820 menu_color_"><a class="static "--}}
                                    {{--href="{{ asset('frontend') }}/assets/#"--}}
                                    {{--target="_blank">পবিত্র--}}
                                    {{--হজ</a></li>--}}
                                    {{--<li class="menu_page_id_736 menu_color_"><a class="dynamic archive"--}}
                                    {{--href="{{ asset('frontend') }}/assets/#"--}}
                                    {{--target="_blank">দূর--}}
                                    {{--পরবাস</a></li>--}}
                                    {{--<li class="menu_page_id_536 menu_color_"><a class="dynamic "--}}
                                    {{--href="{{ asset('frontend') }}/assets/#"--}}
                                    {{--target="_blank">উত্তর--}}
                                    {{--আমেরিকা</a></li>--}}
                                    {{--</ul>--}}
                                    {{--</div>--}}

                                    {{--<div class="bmenu_bottom_imagelinks">--}}
                                    {{--<ul>--}}
                                    {{--<li><a href="{{ asset('frontend') }}/assets/#"--}}
                                    {{--target="_blank"><span><img--}}
                                    {{--src="{{ asset('frontend') }}/assets/contents/themes/public/style/images/2221_icon.png"--}}
                                    {{--alt=""/></span>২২২২১</a></li>--}}
                                    {{--<li><a href="{{ asset('frontend') }}/assets/#"--}}
                                    {{--target="_blank"><span><img--}}
                                    {{--src="{{ asset('frontend') }}/assets/contents/themes/public/style/images/trust_icon.png"--}}
                                    {{--alt=""/></span>ট্রাস্ট</a></li>--}}
                                    {{--<li><a href="{{ asset('frontend') }}/assets/#"--}}
                                    {{--target="_blank"><span><img--}}
                                    {{--src="{{ asset('frontend') }}/assets/contents/themes/public/style/images/pchinta_icon.png"--}}
                                    {{--alt=""/></span>প্রতিচিন্তা</a></li>--}}
                                    {{--<li><a href="{{ asset('frontend') }}/assets/#"--}}
                                    {{--target="_blank"><span><img--}}
                                    {{--src="{{ asset('frontend') }}/assets/contents/cache/images/32X27X1/uploads/media/2018/09/24/e483aba8dfa8077ce2cb0b8e2429cc63-5ba8829143ed0.png"--}}
                                    {{--alt="কিশোর আলো"/></span>কিশোর আলো</a></li>--}}
                                    {{--<li><a href="{{ asset('frontend') }}/assets/https://bit.ly/1yJDU9O"--}}
                                    {{--target="_blank"--}}
                                    {{--rel="nofollow"><span><img--}}
                                    {{--src="{{ asset('frontend') }}/assets/contents/themes/public/style/images/abcradio_icon.png"--}}
                                    {{--alt=""/></span>abc রেডিও</a></li>--}}
                                    {{--<li><a href="{{ asset('frontend') }}/assets/#"--}}
                                    {{--target="_blank"><span><img--}}
                                    {{--src="{{ asset('frontend') }}/assets/contents/cache/images/87x32x1/cache/uploads/media/2018/08/14/331e6cfb410b31c8288e18745ac83e24-5b72068060ea9.png"--}}
                                    {{--alt=""/></span></a></li>--}}
                                    {{--<li><a href="{{ asset('frontend') }}/assets/" target="_blank"><span><img--}}
                                    {{--src="{{ asset('frontend') }}/assets/contents/cache/images/57x32x1/uploads/media/2019/09/07/b262b1f694bfce927c8a3bad7c2665cf-5d738d3da3193.png"--}}
                                    {{--alt="প্রথমা"/> </span>প্রথমা</a></li>--}}
                                    {{--</ul>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                </div>
                            </div>
                        </div>

                        <!-- "সব" Menu Open Script -->
                        <script type="text/javascript">
                            $('.more_main_menu').click(function () {
                                $('.more_main_menu_wrap').toggle(200);
                                $('body').toggleClass('no-scrollbar');
                                $('.more_main_menu').toggleClass('opened');
                                $('.mh_toggle').toggleClass('db');
                            });
                            $('.close_more_main').click(function () {
                                $('.more_main_menu_wrap').toggle(200);
                                $('body').toggleClass('no-scrollbar');
                                $('.more_main_menu').toggleClass('opened');
                                $('.mh_toggle').toggleClass('db');
                            });
                            $('.more_main_menu_wrap').click(function (e) {
                                if (e.target !== e.currentTarget) return;
                                $('.more_main_menu_wrap').toggle(200);
                                $('body').toggleClass('no-scrollbar');
                                $('.more_main_menu').toggleClass('opened');
                                $('.mh_toggle').toggleClass('db');
                            });
                        </script>
                        <!--site switcher-->
                        <div class="other_language_link mh_toggle">
                            <a target="_blank" href="{{ asset('frontend') }}/assets/#">English</a>
                        </div>
                        <!--user accounts-->
                        <div class="header_account_wrap mh_toggle">
                                <span class="account_toggle  click-free-pop" data-pop=".user_account">
										<span class="profile_link_holder"></span>
                                <span class="jw_notifications_counter"></span>
                                </span>
                            <div class="user_account">
                                <div id="account_bar">
                                    <a class="login_link" id="_jadewits_login" href="{{ asset('frontend') }}/assets/#">লগইন</a>
                                    <a class="register_link" id="_jadewits_register"
                                       href="{{ asset('frontend') }}/assets/#">রেজিস্টার</a>
                                    <!--...-->
                                </div>
                                <script>
                                    if (__user_login_check) {
                                        document.write('<' + 'script type="text/javascript" src="{{ asset('frontend') }}/assets/https://profiles.prothomalo.com/api/authentication_helper/account_bar/?contianer=account_bar&APP_ID=1&amp;_hl=bn"></' + 'script>');
                                    }
                                </script>
                            </div>
                        </div>
                        <!--search form-->
                        <div class="header_search_wrap">
                            <span class="search_toggle click-free-pop" data-pop=".header_seach_form"></span>
                            <div class="header_seach_form">
                                <form id="jadewits_search_form_1223" action="index.html">
                                    <span class="search_close"></span>
                                    <button class="search_button" type="submit"><span>অনুসন্ধান</span></button>
                                    <div class="search_input_holder">
                                        <input class="search_input jadewits_keyboard " name="q"
                                               data-keyboardfixedpos="32" type="text" value=""
                                               placeholder="কী খুঁজতে চান?">
                                    </div>
                                </form>
                                <script type="text/javascript">
                                    $('#jadewits_search_form_1223').submit(function () {
                                        var search_text = $.trim($('[name=q]', this).val());
                                        if (search_text == 'কী খুঁজতে চান?' || !search_text) {
                                            alert('Please type something to search');
                                            return false;
                                        }
                                        return true;
                                    });
                                </script>
                            </div>
                            <script type="text/javascript">
                                $('.search_toggle').click(function () { /*$('.header_seach_form .search_input').focus();*/
                                });
                                $('.header_seach_form  .search_close').click(function () {
                                    $('.header_seach_form').toggle();
                                });
                                /*$('.header_seach_form .search_input').focus(function(){
                                    	$('#banglaInpTool').addClass('keyboard_top');
                                    	});
                                    $('.header_seach_form .search_input').blur(function(){
                                    	$('#banglaInpTool').removeClass('keyboard_top');
                                    	});*/
                            </script>
                        </div>
                        <!--social links-->
                        <div class="header_social_wrap mh_toggle">
                            <span class="social_toggle click-free-pop" data-pop=".social_links"></span>
                            <div class="social_links">
                                <ul>
                                    <li>
                                        <a rel="nofollow" target="_blank" class="facebook"
                                           href=""><span>Facebook</span></a>
                                    </li>
                                    <li>
                                        <a rel="nofollow" target="_blank" class="twitter"
                                           href=""><span>Twitter</span></a>
                                    </li>
                                    <li>
                                        <a rel="nofollow" target="_blank" class="youtube"
                                           href=""><span>YouTube</span></a>
                                    </li>
                                    <li>
                                        <a rel="nofollow" target="_blank" class="instagram"
                                           href=""><span>Instagram</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--main menu-->
                <div class="header_menu_wrap">
                    <span class="main_menu_toggle"></span>
                    <div id="main_menu" class="main_menu">
                        <ul id="9">
                            {{--@php--}}
                            {{--$last_p = \App\Category::orderBy('id', 'DESC')->first();--}}
                            {{--$last_insert_id = $last_p->id ;--}}
                            {{--$l_id = array();--}}
                            {{--for($i = 0; $i < 6; $i++){--}}
                            {{--$l_id[] = $last_insert_id - $i;--}}
                            {{--}--}}

                            {{--$posts = \App\Post::where('status', 1)->orderBy('id', 'DESC')->get()->except($l_id)->take(4);--}}
                            {{--@endphp--}}
                            @php
                                $category = \App\Category::where(['status' => 1, 'name'=> 'বাংলাদেশ'])->first();
                            @endphp
                            @if($category)
                                <li class="menu_page_id_102 menu_color_"><a class="dynamic "
                                                                            href="{{ route('category.post', $category->id) }}">{{ $category->name }}</a>
                                </li>
                            @endif
                            @php
                                $category = \App\Category::where(['status' => 1, 'name'=> 'আন্তর্জাতিক'])->first();
                            @endphp
                            @if($category)
                                <li class="menu_page_id_102 menu_color_"><a class="dynamic "
                                                                            href="{{ route('category.post', $category->id) }}">{{ $category->name }}</a>
                                </li>
                            @endif
                            @php
                                $category = \App\Category::where(['status' => 1, 'name'=> 'অর্থনীতি'])->first();
                            @endphp
                            @if($category)
                                <li class="menu_page_id_102 menu_color_"><a class="dynamic "
                                                                            href="{{ route('category.post', $category->id) }}">{{ $category->name }}</a>
                                </li>
                            @endif
                            @php
                                $category = \App\Category::where(['status' => 1, 'name'=> 'মতামত'])->first();
                            @endphp
                            @if($category)
                                <li class="menu_page_id_102 menu_color_"><a class="dynamic "
                                                                            href="{{ route('category.post', $category->id) }}">{{ $category->name }}</a>
                                </li>
                            @endif
                            @php
                                $category = \App\Category::where(['status' => 1, 'name'=> 'খেলা'])->first();
                            @endphp
                            @if($category)
                                <li class="menu_page_id_102 menu_color_"><a class="dynamic "
                                                                            href="{{ route('category.post', $category->id) }}">{{ $category->name }}</a>
                                </li>
                            @endif
                            @php
                                $category = \App\Category::where(['status' => 1, 'name'=> 'বিনোদন'])->first();
                            @endphp
                            @if($category)
                                <li class="menu_page_id_102 menu_color_"><a class="dynamic "
                                                                            href="{{ route('category.post', $category->id) }}">{{ $category->name }}</a>
                                </li>
                            @endif
                            @php
                                $category = \App\Category::where(['status' => 1, 'name'=> 'উত্তর আমেরিকা'])->first();
                            @endphp
                            @if($category)
                                <li class="menu_page_id_102 menu_color_"><a class="dynamic "
                                                                            href="{{ route('category.post', $category->id) }}">{{ $category->name }}</a>
                                </li>
                            @endif
                            @php
                                $category = \App\Category::where(['status' => 1, 'name'=> 'জীবনযাপন'])->first();
                            @endphp
                            @if($category)
                                <li class="menu_page_id_102 menu_color_"><a class="dynamic "
                                                                            href="{{ route('category.post', $category->id) }}">{{ $category->name }}</a>
                                </li>
                            @endif
                            @php
                                $category = \App\Category::where(['status' => 1, 'name'=> 'বিজ্ঞান ও প্রযুক্তি'])->first();
                            @endphp
                            @if($category)
                                <li class="menu_page_id_102 menu_color_"><a class="dynamic "
                                                                            href="{{ route('category.post', $category->id) }}">{{ $category->name }}</a>
                                </li>
                            @endif
                        </ul>
                    </div>
                    <script type="text/javascript">
                        jw_menu_fixer('.main_menu', 'navigation');
                        //now run horizontal menu hover helper
                        //jadewits_horizontal_hover_menu({container:'.main_menu',waittime:500});
                    </script>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('frontend') }}/assets/prothomalo_6570.js"></script>
</div>
<div class="header_white_wrap">
    <!--date and search area -->
    <div class="body_timebar container">
        <span class="location"> Dhaka</span>
        <span class="date_year">
            @php
                $mytime = Carbon\Carbon::now();
echo $mytime->toDateTimeString();
            @endphp
        </span>
        <span class="update_time"><a href="{{ asset('frontend') }}/assets/#">Being update
                @php
                    $post = \App\Post::where('status', 1)->orderBy('id', 'DESC')->first();

                       $to = \Carbon\Carbon::now();
                       $from = \Carbon\Carbon::createFromFormat('Y-m-d H:s:i', $post->created_at);

                       $diff_in_minutes = $to->diffInHours($from);
                       print_r($diff_in_minutes);
                @endphp
                hours ago.
            </a></span>
    </div>
</div>