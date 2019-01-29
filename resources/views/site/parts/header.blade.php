<div id="header" class="container">
    <div id="logo"
         text_color = "{{ $schema->header->logo_text_color }}"
         text_size = "{{ $schema->header->logo_text_size }}"
    >
        <h1>
            <a class="js-for-edit"
               href="#"
               data-part="header"
               data-field="logo_text"
            >
                {{ $schema->header->logo_text }}
            </a>
        </h1>
    </div>
    <div id="menu"
         text_color = "{{ $schema->header->menu_text_color }}"
         text_size = "{{ $schema->header->menu_text_size }}"
    >
        <ul>
            <li>
                <a class="js-for-edit"
                   href="#header-wrapper"
                   accesskey="1"
                   title=""
                >
                    Homepage
                </a>
            </li>
            <li>
                <a class="js-for-edit"
                   href="#wrapper"
                   accesskey="2"
                   title=""
                   data-part="content"
                   data-field="wrapper_title"
                >
                    {{ $schema->content->wrapper_title }}
                </a>
            </li>
            <li>
                <a class="js-for-edit"
                   href="#welcome"
                   accesskey="3"
                   title=""
                   data-part="content"
                   data-field="welcome_title"
                >
                    {{ $schema->content->welcome_title }}
                </a>
            </li>
            <li>
                <a class="js-for-edit"
                   href="#contact"
                   accesskey="4"
                   title=""
                   data-part="content"
                   data-field="contact_title"
                >
                    {{ $schema->content->contact_title }}
                </a>
            </li>
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
        <div class="js-for-edit main-text" data-part="header" data-field="text">{{ $schema->header->text }}</div>
        <span class="js-for-edit byline" data-part="header" data-field="byline_text">{{ $schema->header->byline_text }}</span>
    </div>
</div>