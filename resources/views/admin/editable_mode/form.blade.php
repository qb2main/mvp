<div style="display: none">
    <form id="editable-mode-save-form" action="{{ route('admin.editable_mode.save') }}" method="post">
        {{ csrf_field() }}
        <input name="some" value="some">

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
