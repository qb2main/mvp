<div id="header" class="container">
    <div id="logo"
         text_color = "{{ $header->logo_text_color }}"
         text_size = "{{ $header->logo_text_size }}"
    >
        <h1><a href="#">{{ $header->logo_text }}</a></h1>
    </div>
    <div id="menu"
         text_color = "{{ $header->menu_text_color }}"
         text_size = "{{ $header->menu_text_size }}"
    >
        <ul>
            <li><a href="#header-wrapper" accesskey="1" title="">Homepage</a></li>
            <li><a href="#wrapper" accesskey="2" title="">{{ $content->wrapper_title }}</a></li>
            <li><a href="#welcome" accesskey="3" title="">{{ $content->welcome_title }}</a></li>
            <li><a href="#contact" accesskey="4" title="">{{ $content->contact_title }}</a></li>
        </ul>
    </div>
</div>
<div id="banner"
     class="container"
     text_color = "{{ $header->text_color }}"
     text_size = "{{ $header->text_size }}"
     byline_text_color = "{{ $header->byline_text_color }}"
     byline_text_size = "{{ $header->byline_text_size }}"
>
    <div class="title">
        <div class="main-text">{{ $header->text }}</div>
        <span class="byline">{{ $header->byline_text }}</span>
    </div>

</div>