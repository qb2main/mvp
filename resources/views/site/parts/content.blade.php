<div id="wrapper"
     wrapper_title_color = "{{ $schema->content->wrapper_title_color }}"
     wrapper_title_size = "{{ $schema->content->wrapper_title_size }}"
     wrapper_text_color = "{{ $schema->content->wrapper_text_color }}"
     wrapper_text_size = "{{ $schema->content->wrapper_text_size }}"
     wrapper_byline_text_color = "{{ $schema->content->wrapper_byline_text_color }}"
     wrapper_byline_text_size = "{{ $schema->content->wrapper_byline_text_size }}"
     wrapper_background_color = "{{ $schema->content->wrapper_background_color }}"
>
    <div id="three-column" class="container">
        <div class="title">
            <div class="js-for-edit" data-part="content" data-field="wrapper_title">{{ $schema->content->wrapper_title }}</div>
            <span class="js-for-edit byline" data-part="content" data-field="wrapper_byline_text">{{ $schema->content->wrapper_byline_text }}</span>
        </div>
        <div class="main-text">
            <p class="js-for-edit" data-part="content" data-field="wrapper_text">{{ $schema->content->wrapper_text }}</p>
        </div>
        <a class="top-link" href="#">Top >></a>
    </div>
</div>
<div id="welcome"
     welcome_title_color = "{{ $schema->content->welcome_title_color }}"
     welcome_title_size = "{{ $schema->content->welcome_title_size }}"
     welcome_text_color = "{{ $schema->content->welcome_text_color }}"
     welcome_text_size = "{{ $schema->content->welcome_text_size }}"
     welcome_byline_text_color = "{{ $schema->content->welcome_byline_text_color }}"
     welcome_byline_text_size = "{{ $schema->content->welcome_byline_text_size }}"
     welcome_background_color = "{{ $schema->content->welcome_background_color }}"
>
    <div class="container">
        <div class="title">
            <div class="js-for-edit" data-part="content" data-field="welcome_title">{{ $schema->content->welcome_title }}</div>
            <span class="js-for-edit byline" data-part="content" data-field="welcome_byline_text">{{ $schema->content->welcome_byline_text }}</span>
        </div>
        <div class="js-for-edit main-text" data-part="content" data-field="welcome_text">{{ $schema->content->welcome_text }}</div>
        <a class="top-link" href="#">Top >></a>
    </div>
</div>
<div id="contact"
     contact_title_color = "{{ $schema->content->contact_title_color }}"
     contact_title_size = "{{ $schema->content->contact_title_size }}"
     contact_text_color = "{{ $schema->content->contact_text_color }}"
     contact_text_size = "{{ $schema->content->contact_text_size }}"
     contact_byline_text_color = "{{ $schema->content->contact_byline_text_color }}"
     contact_byline_text_size = "{{ $schema->content->contact_byline_text_size }}"
     contact_background_color = "{{ $schema->content->contact_background_color }}"
>
    <div class="container">
        <div class="title">
            <div class="js-for-edit" data-part="content" data-field="contact_title">{{ $schema->content->contact_title }}</div>
            <span class="js-for-edit byline" data-part="content" data-field="contact_byline_text">{{ $schema->content->contact_byline_text }}</span>
        </div>
        <div class="js-for-edit main-text" data-part="content" data-field="contact_text">{{ $schema->content->contact_text }}</div>
        <a class="top-link" href="#">Top >></a>
    </div>
</div>