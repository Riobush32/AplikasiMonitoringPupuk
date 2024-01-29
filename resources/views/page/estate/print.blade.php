@foreach($data as $item)
<dialog id="print{{ $item->id }}" class="modal">
    <div class="modal-box">
        <form method="dialog">
            <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
        </form>
        <h3 class="font-bold text-lg">Print Laporan</h3>
        <form action="{{ url('/laporan/print') }}" method="GET">
            @csrf
            <input type="hidden" placeholder="Type here" class="input input-bordered w-full max-w-xs" name="estate" value="{{ $item->id }}"/>
            <label class="form-control w-full max-w-xs">
                <div class="label">
                    <span class="label-text">Status</span>
                </div>
                <select class="input input-bordered" name="status">
                    <option disabled selected>Pilih Status</option>
                    <option value="actual">Actual</option>
                    <option value="recomendation">Recomendation</option>
                </select>
            </label>
            <label class="form-control w-full max-w-xs">
                <div class="label">
                    <span class="label-text">Dari Tanggal</span>
                </div>
                <input type="date" placeholder="Type here" class="input input-bordered w-full max-w-xs" name="start" />

            </label>
            <label class="form-control w-full max-w-xs">
                <div class="label">
                    <span class="label-text">Sampai Tanggal</span>
                </div>
                <input type="date" placeholder="Type here" class="input input-bordered w-full max-w-xs" name="end" />
            
            </label>
            <div class="modal-action">
                <button class="btn btn-primary btn-outline" type="submit">
                    <span class="material-symbols-outlined">
                        save
                    </span>
                    Save
                </button>
            </div>


        </form>

        <p class="py-4">Press ESC key or click on ✕ button to close</p>
    </div>
</dialog>
@endforeach