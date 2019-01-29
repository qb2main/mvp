<div style="display: none">
    <form id="editable-mode-save-form" action="{{ route('admin.editable_mode.save') }}" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="header_id" value="{{ $header->id }}">
        <input class="form-control" name="header_logo_text" value="{{ $header->logo_text }}">
        <input class="form-control" name="header_logo_text_size" value="{{ $header->logo_text_size }}">
        <input id="logo_text_color" type="text" class="form-control" name="header_logo_text_color" value="{{ $header->logo_text_color }}">
        <input class="form-control" name="header_text" value="{{ $header->text }}">
        <input class="form-control" name="header_text_size" value="{{ $header->text_size }}">
        <input id="text_color" type="text" class="form-control" name="header_text_color" value="{{ $header->text_color }}">
        <input class="form-control" name="header_byline_text" value="{{ $header->byline_text }}">
        <input class="form-control" name="header_byline_text_size" value="{{ $header->byline_text_size }}">
        <input id="byline_text_color" type="text" class="form-control" name="header_byline_text_color" value="{{ $header->byline_text_color }}">
        <input class="form-control" name="header_menu_text_size" value="{{ $header->menu_text_size }}">
        <input id="menu_text_color" type="text" class="form-control" name="header_menu_text_color" value="{{ $header->menu_text_color }}">

        <input type="hidden" name="content_id" value="{{ $content->id }}">
        {{--Wrapper part--}}
        <input class="form-control" name="content_wrapper_title" value="{{ $content->wrapper_title }}">
        <input class="form-control" name="content_wrapper_title_size" value="{{ $content->wrapper_title_size }}">
        <input id="wrapper_title_color" type="text" class="form-control" name="content_wrapper_title_color" value="{{ $content->wrapper_title_color }}">
        <input class="form-control" name="content_wrapper_text" value="{{ $content->wrapper_text }}">
        <input class="form-control" name="content_wrapper_text_size" value="{{ $content->wrapper_text_size }}">
        <input id="wrapper_text_color" type="text" class="form-control" name="content_wrapper_text_color" value="{{ $content->wrapper_text_color }}">
        <input class="form-control" name="content_wrapper_byline_text" value="{{ $content->wrapper_byline_text }}">
        <input class="form-control" name="content_wrapper_byline_text_size" value="{{ $content->wrapper_byline_text_size }}">
        <input id="wrapper_byline_text_color" type="text" class="form-control" name="content_wrapper_byline_text_color" value="{{ $content->wrapper_byline_text_color }}">
        <input id="wrapper_background_color" type="text" class="form-control" name="content_wrapper_background_color" value="{{ $content->wrapper_background_color }}">
        {{--Welcome part--}}
        <input class="form-control" name="content_welcome_title" value="{{ $content->welcome_title }}">
        <input class="form-control" name="content_welcome_title_size" value="{{ $content->welcome_title_size }}">
        <input id="welcome_title_color" type="text" class="form-control" name="content_welcome_title_color" value="{{ $content->welcome_title_color }}">
        <input class="form-control" name="content_welcome_text" value="{{ $content->welcome_text }}">
        <input class="form-control" name="content_welcome_text_size" value="{{ $content->welcome_text_size }}">
        <input id="welcome_text_color" type="text" class="form-control" name="content_welcome_text_color" value="{{ $content->welcome_text_color }}">
        <input class="form-control" name="content_welcome_byline_text" value="{{ $content->welcome_byline_text }}">
        <input class="form-control" name="content_welcome_byline_text_size" value="{{ $content->welcome_byline_text_size }}">
        <input id="welcome_byline_text_color" type="text" class="form-control" name="content_welcome_byline_text_color" value="{{ $content->welcome_byline_text_color }}">
        <input id="welcome_background_color" type="text" class="form-control" name="content_welcome_background_color" value="{{ $content->welcome_background_color }}">
        {{--Contact part--}}
        <input class="form-control" name="content_contact_title" value="{{ $content->contact_title }}">
        <input class="form-control" name="content_contact_title_size" value="{{ $content->contact_title_size }}">
        <input id="contact_title_color" type="text" class="form-control" name="content_contact_title_color" value="{{ $content->contact_title_color }}">
        <input class="form-control" name="content_contact_text" value="{{ $content->contact_text }}">
        <input class="form-control" name="content_contact_text_size" value="{{ $content->contact_text_size }}">
        <input id="contact_text_color" type="text" class="form-control" name="content_contact_text_color" value="{{ $content->contact_text_color }}">
        <input class="form-control" name="content_contact_byline_text" value="{{ $content->contact_byline_text }}">
        <input class="form-control" name="content_contact_byline_text_size" value="{{ $content->contact_byline_text_size }}">
        <input id="contact_byline_text_color" type="text" class="form-control" name="content_contact_byline_text_color" value="{{ $content->contact_byline_text_color }}">
        <input id="contact_background_color" type="text" class="form-control" name="content_contact_background_color" value="{{ $content->contact_background_color }}">

        <input type="hidden" name="footer_id" value="{{ $footer->id }}">
        <input class="form-control" name="footer_text" value="{{ $footer->text }}">
        <input class="form-control" name="footer_text_size" value="{{ $footer->text_size }}">
        <input id="text_color" type="text" class="form-control" name="footer_text_color" value="{{ $footer->text_color }}">
        <input id="background_color" type="text" class="form-control" name="footer_background_color" value="{{ $footer->background_color }}">

    </form>

</div>


<style>
    .editable-mode-button {
        background-color : #31B0D5;
        color: white;
        padding: 5px 10px;
        border-radius: 4px;
        border-color: #46b8da;
    }

    #no-move-button {
        position: fixed;
        bottom: -4px;
        right: 10px;
    }
</style>
<div id="no-move-button">
    <button id="editable-mode-save" class="editable-mode-button">Editable mode >> Save </button>
</div>
