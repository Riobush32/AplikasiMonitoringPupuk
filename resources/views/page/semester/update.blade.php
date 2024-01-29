@foreach($data as $item)

    <dialog id="edit{{ $item->id }}" class="modal">
        <div class="modal-box">
            <form method="dialog">
                <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
            </form>
            <h3 class="font-bold text-lg">Field No</h3>
            <form action="{{ url("/semester/$item->id/update") }}" method="POST">
                @csrf @method('PATCH')<input type="hidden" placeholder="Type here" class="input input-bordered w-full max-w-xs" name="field_id"
                    value="{{ $field }}" />
                <label class="form-control w-full max-w-xs">
                    <div class="label">
                        <span class="label-text">Semester</span>
                    </div>
                    <select class="input input-bordered" name="semester">
                        <option value="{{ $item->semester }}">Semester{{ $item->semester }}</option>
                        <option value="1">1 (satu)</option>
                        <option value="2">2 (dua)</option>
                    </select>
                </label>
                <label class="form-control w-full max-w-xs">
                    <div class="label">
                        <span class="label-text">Tanggal</span>
                    </div>
                    <input type="date" placeholder="Type here" class="input input-bordered w-full max-w-xs" name="date" value="{{ $item->date }}"/>
                
                </label>
                <label class="form-control w-full max-w-xs">
                    <div class="label">
                        <span class="label-text">Matherial</span>
                    </div>
                    <input value="{{ $item->matherial }}" type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs" name="matherial" />
                
                </label>
                <label class="form-control w-full max-w-xs">
                    <div class="label">
                        <span class="label-text">Type Of Soil</span>
                    </div>
                    <input value="{{ $item->type_of_soil }}" type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs" name="tos" />
                
                </label>
                <label class="form-control w-full max-w-xs">
                    <div class="label">
                        <span class="label-text">SLU</span>
                    </div>
                    <input value="{{ $item->slu }}" type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs" name="slu" />
                
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
