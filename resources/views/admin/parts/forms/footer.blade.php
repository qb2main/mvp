@extends('admin.layouts.main')
@section('content')
    <h4><small>SET TEMPLATE ATTRIBUTES</small></h4>
    <hr>
    <h2>Footer</h2>

    <form action="{{ route('admin.footer.save') }}" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="footer_id" value="{{ $footer->id }}">

        <div class="form-group col-sm-12">
            <label>Footer text</label>
            <input class="form-control" name="text" value="{{ $footer->text }}">
            <div class="col-sm-1">
                size
                <div class="form-group">
                    <input class="form-control" name="text_size" value="{{ $footer->text_size }}">
                </div>
            </div>
            <div class="col-sm-1">
                color
                <div class="form-group">
                    <input id="text_color" type="text" class="form-control" name="text_color" value="{{ $footer->text_color }}">
                </div>
            </div>
        </div>

        <div class="form-group col-sm-12">
            <div class="col-sm-12">
                <label>Background color</label>
            </div>
            <div class="col-sm-1">
                <div class="form-group">
                    <input id="background_color" type="text" class="form-control" name="background_color" value="{{ $footer->background_color }}">
                </div>
            </div>
        </div>
       
        <button type="submit" class="btn btn-success">Save</button>
    </form>
@endsection

@section('js')
    <script>
        let text_color = $("#text_color");
        text_color.spectrum({
            color: text_color.val(),
            change: function(color) {
                text_color.val(color.toHexString());
                console.log(text_color.val());
            }
        });

        let background_color = $("#background_color");
        background_color.spectrum({
            color: background_color.val(),
            change: function(color) {
                background_color.val(color.toHexString());
                console.log(background_color.val());
            }
        });
    </script>
@endsection