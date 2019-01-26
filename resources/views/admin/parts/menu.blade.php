<h4>Admin</h4>
<ul class="nav nav-pills nav-stacked">
    <li @if(Route::currentRouteName() === 'admin.index') class="active" @endif><a href="{{ route('admin.index') }}">Main</a></li>
    <li @if(Route::currentRouteName() === 'admin.header.form') class="active" @endif><a href="{{ route('admin.header.form') }}"> Header </a></li>
    <li @if(Route::currentRouteName() === 'admin.content.form') class="active" @endif><a href="{{ route('admin.content.form') }}">Content</a></li>
    <li @if(Route::currentRouteName() === 'admin.footer.form') class="active" @endif><a href="{{ route('admin.footer.form') }}">Footer</a></li>
</ul>