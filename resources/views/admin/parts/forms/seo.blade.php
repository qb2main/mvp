@extends('admin.layouts.main')
@section('content')
    @include('admin.parts.forms.top')
    <h2>Seo properties</h2>

    <form action="{{ route('admin.seo.save') }}" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="seo_property_id" value="{{ $seo_property->id }}">

        <div class="form-group col-sm-12">
            <label>Title</label>
            <input class="form-control" name="title" value="{{ $seo_property->title }}">
        </div>
        <div class="form-group col-sm-12">
            <label>Keywords</label>
            <textarea class="form-control" name="keywords" rows="3">{{ $seo_property->keywords }}</textarea>
        </div>
        <div class="form-group col-sm-12">
            <label>Description</label>
            <textarea class="form-control" name="description" rows="3">{{ $seo_property->description }}</textarea>
        </div>

        <button type="submit" class="btn btn-success">Save</button>
    </form>
@endsection
