@extends('admin.layouts.main')
@section('content')
    <h4><small>SET TEMPLATE ATTRIBUTES</small></h4>
    <hr>
    <h2>Schemas</h2>

    <form action="{{ route('admin.schema.set_active') }}" method="post">
        {{ csrf_field() }}
        <div class="form-group col-sm-12">
            <label>Active schema</label>
            <select id="select-active-schema" class="form-control" name="active_schema_id">
                @foreach($schemas as $schema)
                    <option value="{{ $schema->id }}" @if($schema->active == true) selected @endif>{{ $schema->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-success">Save</button>
    </form>

    <form action="{{ route('admin.schema.new') }}" method="post">
        {{ csrf_field() }}
        <div class="form-group col-sm-12">
            <label>Add new schema</label>
            <input class="form-control" name="new_schema_name">
        </div>

        <button type="submit" class="btn btn-success">Save</button>
    </form>
@endsection

@section('js')
    <script>
        // change submit button on select active schema
        $('#select-active-schema').on('change', function () {
            let selected_schema_name = $('#select-active-schema option:selected').text();
            $(this).closest('form').find('button[type=submit]').text('Set ' + selected_schema_name + ' as active schema');
        })
    </script>
@endsection