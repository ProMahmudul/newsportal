<div class="foot-portion">
    <div class="foot_wrap_bg" style="">
        <div class="foot-middle-container">
            <div class="foot_big_menu big_menu">
                <div class="big_menu_top">
                    <div class="all-menu">
                        <ul id="8">
                            @foreach($categories as $category)
                                <li class="menu_page_id_37 menu_color_"><a class="static "
                                                                           href="{{ route('category.post', $category->id) }}"> {{ $category->name }} </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <script type="text/javascript">
                        jw_menu_fixer('.footer_menu', 'navigation');
                    </script>

                    {{--<div class="special_menu">--}}
                        {{--<ul>--}}
                            {{--<li><a class="image_menu_icon" href="{{ asset('frontend') }}/assets/#">ছবি</a></li>--}}
                            {{--<li><a class="video_menu_icon" href="{{ asset('frontend') }}/assets/#">ভিডিও</a></li>--}}
                            {{--<li><a class="archive_menu_icon" href="{{ asset('frontend') }}/assets/#">আর্কাইভ</a></li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                </div>
                {{--<div class="big_menu_bottom">--}}
                    {{--<div class="bmenu_bottom_left">--}}
                        {{--<div class="bmenu_bottom_toplinks">--}}
                            {{--<ul id="6">--}}
                                {{--<li class="menu_page_id_540 menu_color_"><a class="static "--}}
                                                                            {{--href="{{ asset('frontend') }}/assets/#"--}}
                                                                            {{--target="_blank">বিজ্ঞাপন</a></li>--}}
                                {{--<li class="menu_page_id_544 menu_color_"><a class="static "--}}
                                                                            {{--href="{{ asset('frontend') }}/assets/#"--}}
                                                                            {{--target="_blank">সার্কুলেশন</a></li>--}}
                                {{--<li class="menu_page_id_820 menu_color_"><a class="static "--}}
                                                                            {{--href="{{ asset('frontend') }}/assets/#"--}}
                                                                            {{--target="_blank">পবিত্র হজ</a></li>--}}
                                {{--<li class="menu_page_id_736 menu_color_"><a class="dynamic archive"--}}
                                                                            {{--href="{{ asset('frontend') }}/assets/#"--}}
                                                                            {{--target="_blank">দূর পরবাস</a></li>--}}
                                {{--<li class="menu_page_id_536 menu_color_"><a class="dynamic "--}}
                                                                            {{--href="{{ asset('frontend') }}/assets/#"--}}
                                                                            {{--target="_blank">উত্তর আমেরিকা</a></li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                        {{--<script type="text/javascript">--}}
                            {{--jw_menu_fixer('.footer_menu', 'navigation');--}}
                        {{--</script>--}}
                        {{--<div class="bmenu_bottom_imagelinks">--}}
                            {{--<ul>--}}
                                {{--<li><a href="{{ asset('frontend') }}/assets/#" target="_blank"><span><img--}}
                                                    {{--src="{{ asset('frontend') }}/assets/contents/themes/public/style/images/2221_icon.png"--}}
                                                    {{--alt=""/></span>২২২২১</a></li>--}}
                                {{--<li><a href="{{ asset('frontend') }}/assets/#" target="_blank"><span><img--}}
                                                    {{--src="{{ asset('frontend') }}/assets/contents/themes/public/style/images/trust_icon.png"--}}
                                                    {{--alt=""/></span>ট্রাস্ট</a></li>--}}
                                {{--<li><a href="{{ asset('frontend') }}/assets/#" target="_blank"><span><img--}}
                                                    {{--src="{{ asset('frontend') }}/assets/contents/themes/public/style/images/pchinta_icon.png"--}}
                                                    {{--alt=""/></span>প্রতিচিন্তা</a></li>--}}
                                {{--<li><a href="{{ asset('frontend') }}/assets/#" target="_blank"><span><img--}}
                                                    {{--src="{{ asset('frontend') }}/assets/contents/cache/images/32X27X1/uploads/media/2018/09/24/e483aba8dfa8077ce2cb0b8e2429cc63-5ba8829143ed0.png"--}}
                                                    {{--alt="কিশোর আলো"/></span>কিশোর আলো</a></li>--}}
                                {{--<li><a href="{{ asset('frontend') }}/assets/https://bit.ly/1yJDU9O" target="_blank"--}}
                                       {{--rel="nofollow"><span><img--}}
                                                    {{--src="{{ asset('frontend') }}/assets/contents/themes/public/style/images/abcradio_icon.png"--}}
                                                    {{--alt=""/></span>abc রেডিও</a></li>--}}
                                {{--<li><a href="{{ asset('frontend') }}/assets/#" target="_blank"><span><img--}}
                                                    {{--src="{{ asset('frontend') }}/assets/contents/cache/images/87x32x1/cache/uploads/media/2018/08/14/331e6cfb410b31c8288e18745ac83e24-5b72068060ea9.png"--}}
                                                    {{--alt=""/></span></a></li>--}}
                                {{--<li><a href="{{ asset('frontend') }}/assets/https://www.prothoma.com"--}}
                                       {{--target="_blank"><span><img--}}
                                                    {{--src="{{ asset('frontend') }}/assets/contents/cache/images/57x32x1/uploads/media/2019/09/07/b262b1f694bfce927c8a3bad7c2665cf-5d738d3da3193.png"--}}
                                                    {{--alt="প্রথমা"/> </span>প্রথমা</a></li>--}}
                            {{--<!----}}
	{{--<li><a href="{{ asset('frontend') }}/assets/#" target="_blank"><span><img src="{{ asset('frontend') }}/assets/https://epaper.prothomalo.com/images/eprothomalo-logo.png" /></span></a></li>--}}
	{{---->--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="bmenu_bottom_right">--}}
                        {{--<p>--}}
                            {{--<em><strong>Prothom Alo</strong></em> is the highest circulated and most read newspaper in--}}
                            {{--Bangladesh. The online portal of <em><strong>Prothom Alo</strong></em> is the most visited--}}
                            {{--Bangladeshi and Bengali website in the world.--}}
                            {{--<br/> <a class="palo_privacy_link" href="{{ asset('frontend') }}/assets/#" target="_blank"--}}
                                     {{--title="Privacy Policy">Privacy--}}
                                {{--Policy</a> | <a class="palo_privacy_link" href="{{ asset('frontend') }}/assets/#"--}}
                                                {{--target="_blank"--}}
                                                {{--title="Terms of Use">Terms of Use</a></p>--}}
                    {{--</div>--}}
                {{--</div>--}}
            </div>
        </div>
        <div class="foot-bottom-container">
            @php
                $setting = \App\Setting::orderBy('id', 'DESC')->first();
            @endphp
            <div class="foot-bottom">
                &copy;&nbsp;Copyright <span itemprop="publisher" itemscope=""
                                         itemtype="http://schema.org/Organization"><span
                            itemprop="name">@if($setting) {{ $setting->site_title }} @endif</span> 1998 - @php echo Date('Y') @endphp </span>
                @if($setting) {!! $setting->site_information !!} @endif
            </div>
        </div>
    </div>
</div>
</div>