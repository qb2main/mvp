<div id="wrapper">
    <div id="three-column" class="container">
        <div class="title">
            <h2>{{ $content->wrapper_title }}</h2>
            <span class="byline">{{ $content->wrapper_byline_text }}</span>
        </div>
        <div class="boxA">
            <p>{{ $content->wrapper_text }}</p>
        </div>
    </div>
</div>
<div id="welcome">
    <div class="container">
        <div class="title">
            <h2>{{ $content->welcome_title }}</h2>
            <span class="byline">{{ $content->welcome_byline_text }}</span>
        </div>
        <p>{{ $content->welcome_text }}</p>
        <a class="top-link" href="#">Top >></a>
    </div>
</div>
<div id="contact">
    <div class="container">
        <div class="title">
            <h2>{{ $content->contact_title }}</h2>
            <span class="byline">{{ $content->contact_byline_text }}</span>
        </div>
        <p>{{ $content->contact_text }}</p>
        <a class="top-link" href="#">Top >></a>
    </div>
</div>