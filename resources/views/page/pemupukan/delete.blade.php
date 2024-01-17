@foreach ($data as $item)
<dialog id="delete{{ $item->id }}" class="modal">
    <div class="modal-box">
        <form method="dialog">
            <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
        </form>
        <h3 class="font-bold text-lg">Field No</h3>
        <p>Are you sure to delete {{ $item->pupuks->pupuk }} ?</p>
        <form action="{{ url("/field/$item->id/destroy") }}" method="POST">
            @csrf @method('delete')

            <div class="modal-action">
                <button class="btn btn-error btn-outline" type="submit">
                    <span class="material-symbols-outlined">
                        delete
                    </span>
                    delete
                </button>
            </div>

        </form>
    </div>
</dialog>
@endforeach