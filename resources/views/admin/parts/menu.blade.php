<div class="nav-logo">
    <h4>Admin</h4>
    <a href="{{ route('admin.logout') }}">Logout</a>
</div>
<ul style="margin-top: 20px" class="nav nav-pills nav-stacked">
    <li @if(Route::currentRouteName() === 'admin.index') class="active" @endif><a href="{{ route('admin.index') }}">Schemas</a></li>
    <li @if(Route::currentRouteName() === 'admin.seo') class="active" @endif><a href="{{ route('admin.seo') }}">SEO</a></li>
    <li @if(Route::currentRouteName() === 'admin.header.form') class="active" @endif><a href="{{ route('admin.header.form') }}">Header</a></li>
    <li @if(Route::currentRouteName() === 'admin.content.form') class="active" @endif><a href="{{ route('admin.content.form') }}">Content</a></li>
    <li @if(Route::currentRouteName() === 'admin.footer.form') class="active" @endif><a href="{{ route('admin.footer.form') }}">Footer</a></li>
    <li @if(Route::currentRouteName() === 'admin.editable_mode.edit') class="active" @endif><a href="{{ route('admin.editable_mode.edit') }}" target="_blank">Editable mode</a></li>
</ul>