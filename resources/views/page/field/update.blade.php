@foreach($data as $item)

    <dialog id="edit{{ $item->id }}" class="modal">
        <div class="modal-box">
            <form method="dialog">
                <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
            </form>
            <h3 class="font-bold text-lg">Field No</h3>
            <form action="{{ url("/field/$item->id/update") }}" method="POST">
                @csrf @method('PATCH')
                <input type="hidden" class="input input-bordered w-full max-w-xs" name="divisi"
                    value="{{ $divisi }}" />
                    <input type="hidden" placeholder="Type here" class="input input-bordered w-full max-w-xs" name="estate_id"
                        value="{{ $estate_id }}" />
                <label class="form-control w-full max-w-xs">
                    <div class="label">
                        <span class="label-text">Field No</span>
                    </div>
                    <input type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs"
                        name="field_no" value="{{ $item->field_no }}"/>

                </label>
                <label class="form-control w-full max-w-xs">
                    <div class="label">
                        <span class="label-text">Field Bantu</span>
                    </div>
                    <input type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs"
                        name="field_bantu" value="{{ $item->field_bantu }}"/>

                </label>
                <label class="form-control w-full max-w-xs">
                    <div class="label">
                        <span class="label-text">Hektar</span>
                    </div>
                    <input type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs"
                        name="hektar" value="{{ $item->hektar }}"/>

                </label>
                <label class="form-control w-full max-w-xs">
                    <div class="label">
                        <span class="label-text">Treess</span>
                    </div>
                    <input type="number" placeholder="Type here" class="input input-bordered w-full max-w-xs"
                        name="treess" value="{{ $item->treess }}"/>

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
