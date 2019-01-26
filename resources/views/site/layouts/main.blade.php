<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : Assembly
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20140330

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="http://fonts.googleapis.com/css?family=Didact+Gothic" rel="stylesheet" />
    <link href="css/app.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/template_1.css" rel="stylesheet" type="text/css" media="all" />

    <!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

</head>
<body>

<div id="header-wrapper">
    @include('site.parts.header')
</div>

@include('site.parts.content')

<div id="copyright" class="container">
    @include('site.parts.footer')
</div>

</body>
<script src="js/app.js"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
<script>
    header();
    function header() {
        let menu = $('#menu')
        menu.find('a').each(function (e) {
            $(this).css("color", menu.attr('menu_color'));
            $(this).css("font-size", menu.attr('text_size'));
        });

        let logo = $('#logo');
        logo.find('a').each(function (e) {
            $(this).css("color", logo.attr('menu_color'));
            $(this).css("font-size", logo.attr('text_size'));
        });

        let banner = $('#banner');
        let byline = banner.find('span.byline');
        banner.find('div.main-text').css("color", banner.attr('text_color'));
        banner.find('div.main-text').css("font-size", banner.attr('text_size'));
        byline.css("color", banner.attr('byline_text_color'));
        byline.css("font-size", banner.attr('byline_text_size'));

    }
</script>
</html>
