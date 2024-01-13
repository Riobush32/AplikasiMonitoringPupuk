@foreach($data as $item)

    <dialog id="edit{{ $item->id }}" class="modal">
        <div class="modal-box">
            <form method="dialog">
                <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
            </form>
            <h3 class="font-bold text-lg">Devisi</h3>
            <form action="{{ url("/divisi/$item->id/update") }}" method="POST">
                @csrf @method('PATCH')
                <input type="hidden" class="input input-bordered w-full max-w-xs" name="estate"
                    value="{{ $estate }}" />
                <label class="form-control w-full max-w-xs">
                    <div class="label">
                        <span class="label-text">Devisi</span>
                    </div>
                    <input type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs"
                        name="devisi" value="{{ $item->divisi }}"/>

                </label>
                <div class="modal-action">
                    <button class="btn btn-info btn-outline" type="submit">
                        <span class="material-symbols-outlined">
                            edit
                        </span>
                        update
                    </button>
                </div>

            </form>
            <p class="py-4">Press ESC key or click on ✕ button to close</p>
        </div>
    </dialog>
@endforeach
