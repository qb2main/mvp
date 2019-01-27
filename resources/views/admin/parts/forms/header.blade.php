@extends('admin.layouts.main')
@section('content')
    @include('admin.parts.forms.top')
    <h2>Header</h2>

    <form action="{{ route('admin.header.save') }}" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="header_id" value="{{ $header->id }}">

        <div class="form-group col-sm-12">
            <label>Logo text</label>
            <input class="form-control" name="logo_text" value="{{ $header->logo_text }}">
            <div class="col-sm-1">
                size
                <div class="form-group">
                    <input class="form-control" name="logo_text_size" value="{{ $header->logo_text_size }}">
                </div>
            </div>
            <div class="col-sm-1">
                color
                <div class="form-group">
                    <input id="logo_text_color" type="text" class="form-control" name="logo_text_color" value="{{ $header->logo_text_color }}">
                </div>
            </div>
        </div>

        <div class="form-group col-sm-12">
            <label>Text</label>
            <input class="form-control" name="text" value="{{ $header->text }}">
            <div class="col-sm-1">
                size
                <div class="form-group">
                    <input class="form-control" name="text_size" value="{{ $header->text_size }}">
                </div>
            </div>
            <div class="col-sm-1">
                color
                <div class="form-group">
                    <input id="text_color" type="text" class="form-control" name="text_color" value="{{ $header->text_color }}">
                </div>
            </div>
        </div>

        <div class="form-group col-sm-12">
            <label>Byline text</label>
            <input class="form-control" name="byline_text" value="{{ $header->byline_text }}">
            <div class="col-sm-1">
                size
                <div class="form-group">
                    <input class="form-control" name="byline_text_size" value="{{ $header->byline_text_size }}">
                </div>
            </div>
            <div class="col-sm-1">
                color
                <div class="form-group">
                    <input id="byline_text_color" type="text" class="form-control" name="byline_text_color" value="{{ $header->byline_text_color }}">
                </div>
            </div>
        </div>

        <div class="form-group col-sm-12">
            <div class="col-sm-12">
            <label>Menu</label>
            </div>
            <div class="col-sm-1">
                size
                <div class="form-group">
                    <input class="form-control" name="menu_text_size" value="{{ $header->menu_text_size }}">
                </div>
            </div>
            <div class="col-sm-1">
                color
                <div class="form-group">
                    <input id="menu_text_color" type="text" class="form-control" name="menu_text_color" value="{{ $header->menu_text_color }}">
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-success">Save</button>
    </form>
@endsection

@section('js')
    <script>
        let logo_text_color = $("#logo_text_color");
        logo_text_color.spectrum({
            color: logo_text_color.val(),
            change: function(color) {
                logo_text_color.val(color.toHexString());
                console.log(logo_text_color.val());
            }
        });

        let text_color = $("#text_color");
        text_color.spectrum({
            color: text_color.val(),
            change: function(color) {
                text_color.val(color.toHexString());
                console.log(text_color.val());
            }
        });

        let byline_text_color = $("#byline_text_color");
        byline_text_color.spectrum({
            color: byline_text_color.val(),
            change: function(color) {
                byline_text_color.val(color.toHexString());
                console.log(byline_text_color.val());
            }
        });
        
        let menu_text_color = $("#menu_text_color");
        menu_text_color.spectrum({
            color: menu_text_color.val(),
            change: function(color) {
                menu_text_color.val(color.toHexString());
                console.log(menu_text_color.val());
            }
        });
    </script>
@endsection