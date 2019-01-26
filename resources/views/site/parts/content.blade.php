<div id="wrapper"
     wrapper_title_color = "{{ $content->wrapper_title_color }}"
     wrapper_title_size = "{{ $content->wrapper_title_size }}"
     wrapper_text_color = "{{ $content->wrapper_text_color }}"
     wrapper_text_size = "{{ $content->wrapper_text_size }}"
     wrapper_byline_text_color = "{{ $content->wrapper_byline_text_color }}"
     wrapper_byline_text_size = "{{ $content->wrapper_byline_text_size }}"
     wrapper_background_color = "{{ $content->wrapper_background_color }}"
>
    <div id="three-column" class="container">
        <div class="title">
            <div>{{ $content->wrapper_title }}</div>
            <span class="byline">{{ $content->wrapper_byline_text }}</span>
        </div>
        <div class="main-text">
            <p>{{ $content->wrapper_text }}</p>
        </div>
    </div>
</div>
<div id="welcome"
     welcome_title_color = "{{ $content->welcome_title_color }}"
     welcome_title_size = "{{ $content->welcome_title_size }}"
     welcome_text_color = "{{ $content->welcome_text_color }}"
     welcome_text_size = "{{ $content->welcome_text_size }}"
     welcome_byline_text_color = "{{ $content->welcome_byline_text_color }}"
     welcome_byline_text_size = "{{ $content->welcome_byline_text_size }}"
     welcome_background_color = "{{ $content->welcome_background_color }}"
>
    <div class="container">
        <div class="title">
            <div>{{ $content->welcome_title }}</div>
            <span class="byline">{{ $content->welcome_byline_text }}</span>
        </div>
        <div class="main-text">{{ $content->welcome_text }}</div>
        <a class="top-link" href="#">Top >></a>
    </div>
</div>
<div id="contact"
     contact_title_color = "{{ $content->contact_title_color }}"
     contact_title_size = "{{ $content->contact_title_size }}"
     contact_text_color = "{{ $content->contact_text_color }}"
     contact_text_size = "{{ $content->contact_text_size }}"
     contact_byline_text_color = "{{ $content->contact_byline_text_color }}"
     contact_byline_text_size = "{{ $content->contact_byline_text_size }}"
     contact_background_color = "{{ $content->contact_background_color }}"
>
    <div class="container">
        <div class="title">
            <div>{{ $content->contact_title }}</div>
            <span class="byline">{{ $content->contact_byline_text }}</span>
        </div>
        <div class="main-text">{{ $content->contact_text }}</div>
        <a class="top-link" href="#">Top >></a>
    </div>
</div>