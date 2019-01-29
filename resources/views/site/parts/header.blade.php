<div id="header" class="container">
    <div id="logo"
         text_color = "{{ $schema->header->logo_text_color }}"
         text_size = "{{ $schema->header->logo_text_size }}"
    >
        <h1><a class="js-for-edit" href="#">{{ $schema->header->logo_text }}</a></h1>
    </div>
    <div id="menu"
         text_color = "{{ $schema->header->menu_text_color }}"
         text_size = "{{ $schema->header->menu_text_size }}"
    >
        <ul>
            <li><a class="js-for-edit" href="#header-wrapper" accesskey="1" title="">Homepage</a></li>
            <li><a class="js-for-edit" href="#wrapper" accesskey="2" title="">{{ $schema->content->wrapper_title }}</a></li>
            <li><a class="js-for-edit" href="#welcome" accesskey="3" title="">{{ $schema->content->welcome_title }}</a></li>
            <li><a class="js-for-edit" href="#contact" accesskey="4" title="">{{ $schema->content->contact_title }}</a></li>
        </ul>
    </div>
</div>
<div id="banner"
     class="container"
     text_color = "{{ $schema->header->text_color }}"
     text_size = "{{ $schema->header->text_size }}"
     byline_text_color = "{{ $schema->header->byline_text_color }}"
     byline_text_size = "{{ $schema->header->byline_text_size }}"
>
    <div class="title">
        <div class="js-for-edit main-text">{{ $schema->header->text }}</div>
        <span class="js-for-edit byline">{{ $schema->header->byline_text }}</span>
    </div>
</div>