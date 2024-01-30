@foreach($data as $item)

    <dialog id="edit{{ $item->id }}" class="modal">
        <div class="modal-box">
            <form method="dialog">
                <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
            </form>
            <h3 class="font-bold text-lg">{{ $title }}</h3>
            <form action="{{ url("/pemupukan/$item->id/update") }}" method="POST">
                @csrf @method('PATCH')
                
                <label class="form-control w-full max-w-xs">
                    <div class="label">
                        <span class="label-text">Status</span>
                    </div>
                    <select class="input input-bordered" name="status" disabled>
                        <option value="{{ $item->status }}">{{ $item->status }}</option>
                    </select>
                </label>
                <label class="form-control w-full max-w-xs">
                    <div class="label">
                        <span class="label-text">Pupuk</span>
                    </div>
                    <select class="input input-bordered" name="pupuk">
                        <option selected value="{{ $item->pupuk_id}}">{{ $item->pupuks->pupuk }}</option>
                        @foreach ($pupuks as $pupuk)
                        <option value="{{ $pupuk->id }}">{{ $pupuk->pupuk }}</option>
                        @endforeach
                    </select>
                </label>
                <label class="form-control w-full max-w-xs">
                    <div class="label">
                        <span class="label-text">Total</span>
                    </div>
                    <input type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs" name="total" value="{{ $item->total }}"/>
                
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
