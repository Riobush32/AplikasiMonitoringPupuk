<div class="join">
    <a href=""  class="btn btn-success join-item">
        <span class="material-symbols-outlined">
            folder_open
        </span>
    </a>
    <button class="btn btn-info join-item" onclick="edit_estate{{ $item->id }}.showModal()">
        <span class="material-symbols-outlined">
            edit_note
        </span>
    </button>
    <button class="btn btn-error join-item" onclick="delete_estate{{ $item->id }}.showModal()">
        <span class="material-symbols-outlined">
            delete
        </span>
    </button>
</div>