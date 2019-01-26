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
    <link href="css/additional.css" rel="stylesheet" type="text/css" media="all" />

    <!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

</head>
<body>

<div id="header-wrapper">
    @include('site.parts.header')
</div>

@include('site.parts.content')

@include('site.parts.footer')


</body>
<script src="/js/app.js"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
<script>

    header();
    content();
    footer();

    function header() {
        let menu = $('#menu');
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

    function content() {
        let wrapper = $('#wrapper');
        let wrapper_byline = wrapper.find('span.byline');
        wrapper.css("background-color", wrapper.attr('wrapper_background_color'));
        wrapper.find('div.title').css("color", wrapper.attr('wrapper_title_color'));
        wrapper.find('div.title').css("font-size", wrapper.attr('wrapper_title_size'));
        wrapper.find('div.main-text').css("color", wrapper.attr('wrapper_text_color'));
        wrapper.find('div.main-text').css("font-size", wrapper.attr('wrapper_text_size'));
        wrapper_byline.css("color", wrapper.attr('wrapper_byline_text_color'));
        wrapper_byline.css("font-size", wrapper.attr('wrapper_byline_text_size'));

        let welcome = $('#welcome');
        let welcome_byline = welcome.find('span.byline');
        welcome.css("background-color", welcome.attr('welcome_background_color'));
        welcome.find('div.title').css("color", welcome.attr('welcome_title_color'));
        welcome.find('div.title').css("font-size", welcome.attr('welcome_title_size'));
        welcome.find('div.main-text').css("color", welcome.attr('welcome_text_color'));
        welcome.find('div.main-text').css("font-size", welcome.attr('welcome_text_size'));
        welcome_byline.css("color", welcome.attr('welcome_byline_text_color'));
        welcome_byline.css("font-size", welcome.attr('welcome_byline_text_size'));

        let contact = $('#contact');
        let contact_byline = contact.find('span.byline');
        contact.css("background-color", contact.attr('contact_background_color'));
        contact.find('div.title').css("color", contact.attr('contact_title_color'));
        contact.find('div.title').css("font-size", contact.attr('contact_title_size'));
        contact.find('div.main-text').css("color", contact.attr('contact_text_color'));
        contact.find('div.main-text').css("font-size", contact.attr('contact_text_size'));
        contact_byline.css("color", contact.attr('contact_byline_text_color'));
        contact_byline.css("font-size", contact.attr('contact_byline_text_size'));
    }


    function footer() {
        let copyright = $('#copyright');
        $('body').css("background-color", copyright.attr('background_color'));
        copyright.css("color", copyright.attr('text_color'));
        copyright.css("font-size", copyright.attr('text_size'));
    }

</script>
</html>
