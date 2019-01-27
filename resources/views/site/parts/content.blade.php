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
            <div>{{ $schema->content->wrapper_title }}</div>
            <span class="byline">{{ $schema->content->wrapper_byline_text }}</span>
        </div>
        <div class="main-text">
            <p>{{ $schema->content->wrapper_text }}</p>
        </div>
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
            <div>{{ $schema->content->welcome_title }}</div>
            <span class="byline">{{ $schema->content->welcome_byline_text }}</span>
        </div>
        <div class="main-text">{{ $schema->content->welcome_text }}</div>
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
            <div>{{ $schema->content->contact_title }}</div>
            <span class="byline">{{ $schema->content->contact_byline_text }}</span>
        </div>
        <div class="main-text">{{ $schema->content->contact_text }}</div>
        <a class="top-link" href="#">Top >></a>
    </div>
</div>