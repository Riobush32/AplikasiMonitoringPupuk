<dialog id="delete_estate{{ $item->id }}" class="modal">
    <div class="modal-box">
        <form method="dialog">
            <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
        </form>
        <h3 class="font-bold text-lg">Estate Name</h3>
        <p>Are you sure to delete {{ $item->estate }} Estate?</p>
        <form action="{{ url("/estate/$item->id/destroy") }}" method="POST">
            @csrf @method('delete')

            <div class="modal-action">
                <button class="btn btn-primary btn-outline" type="submit">
                    <span class="material-symbols-outlined">
                        delete
                    </span>
                    delete
                </button>
            </div>

        </form>
        <p class="py-4">Press ESC key or click on ✕ button to close</p>
    </div>
</dialog>