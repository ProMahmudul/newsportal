<!DOCTYPE html>
<html lang="bn">
<head>
    <link rel="shortcut icon" href="{{ asset('frontend') }}/assets/favicon.ico"/>
    <link rel="icon" type="image/ico" href="{{ asset('frontend') }}/assets/favicon.ico"/>

    <style type="text/css">
        body {
            font-family: SolaimanLipi, Arial, Vrinda, FallbackBengaliFont, Helvetica, sans-serif;
        }
    </style>

    <link href="{{ asset('frontend') }}/assets/contents/{{ asset('frontend') }}/assets/jquery/css/smoothness/jquery-ui-1.9.2.custom.min.css"
          media="all"
          rel="stylesheet" type="text/css"/>
    <link href="{{ asset('frontend') }}/assets/contents/{{ asset('frontend') }}/assets/jquery/js/swiper/swiper.min.css"
          media="all" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('frontend') }}/assets/contents/widgets/styles/style.css" media="all" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset('frontend') }}/assets/contents/themes/public/style/font-jade-embedded.css" media="all"
          rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset('frontend') }}/assets/contents/themes/public/style/style.css" media="all" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset('frontend') }}/assets/contents/themes/public/style/widget_style.css" media="all"
          rel="stylesheet" type="text/css"/>
    <link href="{{ asset('frontend') }}/assets/contents/themes/public/style/colors.css" media="all" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset('frontend') }}/assets/contents/themes/public/style/common_styles.css" media="all"
          rel="stylesheet" type="text/css"/>
    <link href="{{ asset('frontend') }}/assets/contents/themes/public/style/print.css" media="print" rel="stylesheet"
          type="text/css"/>

    <script type="text/javascript" src="{{ asset('frontend') }}/assets/contents/themes/public/js/core.js"></script>
    <script type="text/javascript"
            src="{{ asset('frontend') }}/assets/contents/{{ asset('frontend') }}/assets/jquery/js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript"
            src="{{ asset('frontend') }}/assets/contents/{{ asset('frontend') }}/assets/jquery/js/jquery-ui-1.9.2.custom.min.js"></script>

    <script type="text/javascript"
            src="{{ asset('frontend') }}/assets/contents/{{ asset('frontend') }}/assets/jquery/js/swiper/swiper.jquery.min.js"></script>
    <script type="text/javascript"
            src="{{ asset('frontend') }}/assets/contents/{{ asset('frontend') }}/assets/jquery/js/jquery-ui-timepicker-addon.js"></script>
    <script type="text/javascript"
            src="{{ asset('frontend') }}/assets/contents/{{ asset('frontend') }}/assets/jadewits/jquery.jw.ari.js"></script>
    <script type="text/javascript" src="{{ asset('frontend') }}/assets/contents/themes/public/js/custom.js"></script>
    <script type="text/javascript"
            src="{{ asset('frontend') }}/assets/contents/{{ asset('frontend') }}/assets/customjs/fade.js"></script>
    <script async src="{{ asset('frontend') }}/assets/gtag/js_id_UA-11355905-1.js"></script>
    <script async='async' src='tag/js/gpt.js'></script>

    <link type="text/css" href="{{ asset('frontend') }}/assets/palo-internal/paloweb-content-style.css" media="all"
          rel="stylesheet"/>
    <link type="text/css" href="{{ asset('frontend') }}/assets/palo-internal/palo-modification.css" media="all"
          rel="stylesheet"/>
    <link type="text/css" href="{{ asset('frontend') }}/assets/palo-internal/kiron2/Kiron.css" media="all"
          rel="stylesheet"/>
    <link rel="stylesheet" type="text/css"
          href="{{ asset('frontend') }}/assets/{{ asset('frontend') }}/assets/css/custom.css">
</head>

<body class="page_color_ jw_body_page_id_37 jw_body_content_id_ page_home_landing">
@include('inc.navbar')
@yield('main-content')
@include('inc.footer'))
<!-- Back to top Button -->
<span class="back_to_top"></span>

<script type="text/javascript">
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.back_to_top').fadeIn();
        } else {
            $('.back_to_top').fadeOut();
        }
    });
    $('.back_to_top').click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 800);
    })
</script>
<script type="text/javascript">
    //$('body .content').disableSelection();
</script>
<style>
    .big_menu .big_menu_top .all-menu ul li.menu_page_id_1391 {
        display: none;
    }

    .big_menu .big_menu_top .all-menu ul li.menu_page_id_1391 a {
        color: #fff;
        background: #000;
        padding: 0px 8px;
        border-radius: 6px;
        display: inline-block;
    }

    .main_menu li.menu_page_id_1391 {
        display: none;
        background: #000;
        border-radius: 8px;
    }

    .main_menu li.menu_page_id_1391 a {
        color: #fff;
        line-height: 24px;
        border-bottom: 0;
    }

    .main_menu li.menu_page_id_1391:hover {
        background: #efefec;
    }

    .main_menu li.menu_page_id_1391 a:hover {
        color: #000;
        border-radius: 8px;
    }
</style>

<script type="text/javascript">
    var flag = true;
    var isMobile = detectmob();
    $(window).scroll(function () {
        if (isMobile && flag) {
            if ($(this).scrollTop() > 60) {
                flag = false;
                $('.back_to_top').css('bottom', 82);
                $('.foot-portion').css('margin-bottom', 72);
                $('.anchor_ad_wrapper').animate({
                    bottom: 0
                }, 500);
            }
        }
    });
    $(document).ready(function (e) {
        $('#anchor_ad_close').click(function () {
            $('.back_to_top').css('bottom', 20);
            $('.foot-portion').css('margin-bottom', 0);
            $('.anchor_ad_wrapper').hide();
        });
    });
</script>
<!-- BG Image -->
<div id="z89017138-a710-4894-86d9-be45c8f4c471" style='display:none'></div>
<script>
    !function (a, n, e, t, r) {
        tagsync = e;
        var c = window[a];
        if (tagsync) {
            var d = document.createElement("script");
            d.src = "https://3407.tm.zedo.com/v1/f0a39a86-3b12-40be-863f-e055c8a5924a/atm.js", d.async = !0;
            var i = document.getElementById(n);
            if (null == i || "undefined" == i) return;
            i.parentNode.appendChild(d, i), d.onload = d.onreadystatechange = function () {
                var a = new zTagManager(n);
                a.initTagManager(n, c, this.aync, t, r)
            }
        } else document.write("<script src='https://3407.tm.zedo.com/v1/f0a39a86-3b12-40be-863f-e055c8a5924a/tm.js?data=" + a + "'><" + "/script>")
    }("datalayer", "z89017138-a710-4894-86d9-be45c8f4c471", true, 1, 1);
</script>
<!--end Zedo-->
<!-- push service: pushengage -->
<script>
    window._peq = window._peq || [];
    window._peq.push(["init"]);
</script>
<script src="{{ asset('frontend') }}/assets/core/61a71ead19398fba5514eb0ef83d600c.js" async></script>
</body>
</html>