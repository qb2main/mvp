@extends('admin.layouts.main')
@section('content')
    @include('admin.parts.forms.top')
    <h2>Content</h2>

    <form action="{{ route('admin.content.save') }}" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="content_id" value="{{ $content->id }}">

        {{--Wrapper part--}}

        <div class="form-group col-sm-12">
            <label>Wrapper title</label>
            <input class="form-control" name="wrapper_title" value="{{ $content->wrapper_title }}">
            <div class="col-sm-1">
                size
                <div class="form-group">
                    <input class="form-control" name="wrapper_title_size" value="{{ $content->wrapper_title_size }}">
                </div>
            </div>
            <div class="col-sm-1">
                color
                <div class="form-group">
                    <input id="wrapper_title_color" type="text" class="form-control" name="wrapper_title_color" value="{{ $content->wrapper_title_color }}">
                </div>
            </div>
        </div>

        <div class="form-group col-sm-12">
            <label>Wrapper text</label>
            <input class="form-control" name="wrapper_text" value="{{ $content->wrapper_text }}">
            <div class="col-sm-1">
                size
                <div class="form-group">
                    <input class="form-control" name="wrapper_text_size" value="{{ $content->wrapper_text_size }}">
                </div>
            </div>
            <div class="col-sm-1">
                color
                <div class="form-group">
                    <input id="wrapper_text_color" type="text" class="form-control" name="wrapper_text_color" value="{{ $content->wrapper_text_color }}">
                </div>
            </div>
        </div>

        <div class="form-group col-sm-12">
            <label>Wrapper byline text</label>
            <input class="form-control" name="wrapper_byline_text" value="{{ $content->wrapper_byline_text }}">
            <div class="col-sm-1">
                size
                <div class="form-group">
                    <input class="form-control" name="wrapper_byline_text_size" value="{{ $content->wrapper_byline_text_size }}">
                </div>
            </div>
            <div class="col-sm-1">
                color
                <div class="form-group">
                    <input id="wrapper_byline_text_color" type="text" class="form-control" name="wrapper_byline_text_color" value="{{ $content->wrapper_byline_text_color }}">
                </div>
            </div>
        </div>

        <div class="form-group col-sm-12">
            <div class="col-sm-12">
                <label>Wrapper background color</label>
            </div>
            <div class="col-sm-1">
                <div class="form-group">
                    <input id="wrapper_background_color" type="text" class="form-control" name="wrapper_background_color" value="{{ $content->wrapper_background_color }}">
                </div>
            </div>
        </div>

        {{--Welcome part--}}

        <div class="form-group col-sm-12">
            <label>Welcome title</label>
            <input class="form-control" name="welcome_title" value="{{ $content->welcome_title }}">
            <div class="col-sm-1">
                size
                <div class="form-group">
                    <input class="form-control" name="welcome_title_size" value="{{ $content->welcome_title_size }}">
                </div>
            </div>
            <div class="col-sm-1">
                color
                <div class="form-group">
                    <input id="welcome_title_color" type="text" class="form-control" name="welcome_title_color" value="{{ $content->welcome_title_color }}">
                </div>
            </div>
        </div>

        <div class="form-group col-sm-12">
            <label>Welcome text</label>
            <input class="form-control" name="welcome_text" value="{{ $content->welcome_text }}">
            <div class="col-sm-1">
                size
                <div class="form-group">
                    <input class="form-control" name="welcome_text_size" value="{{ $content->welcome_text_size }}">
                </div>
            </div>
            <div class="col-sm-1">
                color
                <div class="form-group">
                    <input id="welcome_text_color" type="text" class="form-control" name="welcome_text_color" value="{{ $content->welcome_text_color }}">
                </div>
            </div>
        </div>

        <div class="form-group col-sm-12">
            <label>Welcome byline text</label>
            <input class="form-control" name="welcome_byline_text" value="{{ $content->welcome_byline_text }}">
            <div class="col-sm-1">
                size
                <div class="form-group">
                    <input class="form-control" name="welcome_byline_text_size" value="{{ $content->welcome_byline_text_size }}">
                </div>
            </div>
            <div class="col-sm-1">
                color
                <div class="form-group">
                    <input id="welcome_byline_text_color" type="text" class="form-control" name="welcome_byline_text_color" value="{{ $content->welcome_byline_text_color }}">
                </div>
            </div>
        </div>

        <div class="form-group col-sm-12">
            <div class="col-sm-12">
                <label>Welcome background color</label>
            </div>
            <div class="col-sm-1">
                <div class="form-group">
                    <input id="welcome_background_color" type="text" class="form-control" name="welcome_background_color" value="{{ $content->welcome_background_color }}">
                </div>
            </div>
        </div>

        {{--Contact part--}}

        <div class="form-group col-sm-12">
            <label>Contact title</label>
            <input class="form-control" name="contact_title" value="{{ $content->contact_title }}">
            <div class="col-sm-1">
                size
                <div class="form-group">
                    <input class="form-control" name="contact_title_size" value="{{ $content->contact_title_size }}">
                </div>
            </div>
            <div class="col-sm-1">
                color
                <div class="form-group">
                    <input id="contact_title_color" type="text" class="form-control" name="contact_title_color" value="{{ $content->contact_title_color }}">
                </div>
            </div>
        </div>

        <div class="form-group col-sm-12">
            <label>Contact text</label>
            <input class="form-control" name="contact_text" value="{{ $content->contact_text }}">
            <div class="col-sm-1">
                size
                <div class="form-group">
                    <input class="form-control" name="contact_text_size" value="{{ $content->contact_text_size }}">
                </div>
            </div>
            <div class="col-sm-1">
                color
                <div class="form-group">
                    <input id="contact_text_color" type="text" class="form-control" name="contact_text_color" value="{{ $content->contact_text_color }}">
                </div>
            </div>
        </div>

        <div class="form-group col-sm-12">
            <label>Contact byline text</label>
            <input class="form-control" name="contact_byline_text" value="{{ $content->contact_byline_text }}">
            <div class="col-sm-1">
                size
                <div class="form-group">
                    <input class="form-control" name="contact_byline_text_size" value="{{ $content->contact_byline_text_size }}">
                </div>
            </div>
            <div class="col-sm-1">
                color
                <div class="form-group">
                    <input id="contact_byline_text_color" type="text" class="form-control" name="contact_byline_text_color" value="{{ $content->contact_byline_text_color }}">
                </div>
            </div>
        </div>

        <div class="form-group col-sm-12">
            <div class="col-sm-12">
                <label>Contact background color</label>
            </div>
            <div class="col-sm-1">
                <div class="form-group">
                    <input id="contact_background_color" type="text" class="form-control" name="contact_background_color" value="{{ $content->contact_background_color }}">
                </div>
            </div>
        </div>
       
        <button type="submit" class="btn btn-success">Save</button>
    </form>
@endsection

@section('js')
    <script>
        // wrapper
        let wrapper_title_color = $("#wrapper_title_color");
        wrapper_title_color.spectrum({
            color: wrapper_title_color.val(),
            change: function(color) {
                wrapper_title_color.val(color.toHexString());
                console.log(wrapper_title_color.val());
            }
        });

        let wrapper_text_color = $("#wrapper_text_color");
        wrapper_text_color.spectrum({
            color: wrapper_text_color.val(),
            change: function(color) {
                wrapper_text_color.val(color.toHexString());
                console.log(wrapper_text_color.val());
            }
        });

        let wrapper_byline_text_color = $("#wrapper_byline_text_color");
        wrapper_byline_text_color.spectrum({
            color: wrapper_byline_text_color.val(),
            change: function(color) {
                wrapper_byline_text_color.val(color.toHexString());
                console.log(wrapper_byline_text_color.val());
            }
        });

        let wrapper_background_color = $("#wrapper_background_color");
        wrapper_background_color.spectrum({
            color: wrapper_background_color.val(),
            change: function(color) {
                wrapper_background_color.val(color.toHexString());
                console.log(wrapper_background_color.val());
            }
        });


        // welcome
        let welcome_title_color = $("#welcome_title_color");
        welcome_title_color.spectrum({
            color: welcome_title_color.val(),
            change: function(color) {
                welcome_title_color.val(color.toHexString());
                console.log(welcome_title_color.val());
            }
        });

        let welcome_text_color = $("#welcome_text_color");
        welcome_text_color.spectrum({
            color: welcome_text_color.val(),
            change: function(color) {
                welcome_text_color.val(color.toHexString());
                console.log(welcome_text_color.val());
            }
        });

        let welcome_byline_text_color = $("#welcome_byline_text_color");
        welcome_byline_text_color.spectrum({
            color: welcome_byline_text_color.val(),
            change: function(color) {
                welcome_byline_text_color.val(color.toHexString());
                console.log(welcome_byline_text_color.val());
            }
        });

        let welcome_background_color = $("#welcome_background_color");
        welcome_background_color.spectrum({
            color: welcome_background_color.val(),
            change: function(color) {
                welcome_background_color.val(color.toHexString());
                console.log(welcome_background_color.val());
            }
        });


        // contact
        let contact_title_color = $("#contact_title_color");
        contact_title_color.spectrum({
            color: contact_title_color.val(),
            change: function(color) {
                contact_title_color.val(color.toHexString());
                console.log(contact_title_color.val());
            }
        });

        let contact_text_color = $("#contact_text_color");
        contact_text_color.spectrum({
            color: contact_text_color.val(),
            change: function(color) {
                contact_text_color.val(color.toHexString());
                console.log(contact_text_color.val());
            }
        });

        let contact_byline_text_color = $("#contact_byline_text_color");
        contact_byline_text_color.spectrum({
            color: contact_byline_text_color.val(),
            change: function(color) {
                contact_byline_text_color.val(color.toHexString());
                console.log(contact_byline_text_color.val());
            }
        });

        let contact_background_color = $("#contact_background_color");
        contact_background_color.spectrum({
            color: contact_background_color.val(),
            change: function(color) {
                contact_background_color.val(color.toHexString());
                console.log(contact_background_color.val());
            }
        });

    </script>
@endsection