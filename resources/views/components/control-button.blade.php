<div class="join">
    @if ($title != 'Pupuk')
    <a href="{{ url("/$active/$item->id/") }}" class="btn btn-success join-item">
        <span class="material-symbols-outlined">
            folder_open
        </span>
    </a>
    @endif

    @if ($title == 'Semester')
    <a class="btn btn-neutral join-item" href="{{ url("/$active/print") }}">
        <span class="material-symbols-outlined">
            print
        </span>
    </a>
    @endif

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
