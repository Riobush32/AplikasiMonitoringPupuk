<div class="join">
    <button class="btn btn-info join-item" onclick="edit{{ $item->id }}.showModal()">
        <span class="material-symbols-outlined">
            edit_note
        </span>
    </button>
    <button class="btn btn-error join-item" onclick="delete{{ $item->id }}.showModal()">
        <span class="material-symbols-outlined">
            delete
        </span>
    </button>
</div>