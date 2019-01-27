@extends('admin.layouts.main')
@section('content')
    <h4><small>SET TEMPLATE ATTRIBUTES</small></h4>
    <hr>
    <h2>Main (image in header)</h2>

    <img src="/images/header-bg.jpg" alt="Present image in header" height="360" width="620">

    <form action="{{ route('admin.image.save') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group col-sm-12">
            <label>New image upload</label>
            <input  type="file" class="form-control" name="file">
        </div>

        <button type="submit" class="btn btn-success">Save</button>
    </form>
@endsection