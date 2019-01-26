@extends('admin.layouts.main')
@section('content')
    <h4><small>SET TEMPLATE ATTRIBUTES</small></h4>
    <hr>
    <h2>Header</h2>

    <form action="{{ route('admin.header.save') }}" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="header_id" value="{{ $header->id }}">
        <label>Logo text</label>
        <div class="form-group">
            <input class="form-control" name="logo_text" value="{{ $header->logo_text }}">
        </div>
        <div class="col-sm-6">
            <label>color</label>
            <div class="form-group">
                <input type="text" class="form-control" name="logo_text_color" value="{{ $header->logo_text_color }}">
            </div>
        </div>
        <div class="col-sm-6">
            <label>size</label>
            <div class="form-group">
                <input class="form-control" name="logo_text_size" value="{{ $header->logo_text_size }}">
            </div>
        </div>

        <label>Text</label>
        <div class="form-group">
            <textarea class="form-control" rows="3" name="text">{{ $header->text }}</textarea>
        </div>
        <div class="col-sm-6">
            <label>color</label>
            <div class="form-group">
                <input type="text" class="form-control" name="text_color" value="{{ $header->text_color }}">
            </div>
        </div>
        <div class="col-sm-6">
            <label>size</label>
            <div class="form-group">
                <input class="form-control" name="text_size" value="{{ $header->text_size }}">
            </div>
        </div>

        <label>Byline text</label>
        <div class="form-group">
            <textarea class="form-control" rows="3" name="byline_text">{{ $header->byline_text }}</textarea>
        </div>
        <div class="col-sm-6">
            <label>color</label>
            <div class="form-group">
                <input type="text" class="form-control" name="byline_text_color" value="{{ $header->byline_text_color }}">
            </div>
        </div>
        <div class="col-sm-6">
            <label>size</label>
            <div class="form-group">
                <input class="form-control" name="byline_text_size" value="{{ $header->byline_text_size }}">
            </div>
        </div>

        <button type="submit" class="btn btn-success">Save</button>

    </form>

@endsection

