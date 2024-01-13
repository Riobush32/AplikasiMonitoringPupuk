<div class="card w-full h-full bg-base-100 shadow-xl mt-5 max-h-[85vh]">

    <div class="card-body ">
        <div class="w-full flex items-center">
            <div class="flex-1">
                
                <h2 class="card-title text-md md:text-lg">{{ $title }} </h2>
            </div>
            <button class="btn btn-primary" onclick="add.showModal()">
                <span class="material-symbols-outlined">
                    note_add
                </span>
            </button>
            <a href="{{ url("/estate/") }}" class="btn btn-outline btn-error ml-2">
                <span class="material-symbols-outlined">
                    undo
                </span>
            </a>
            <dialog id="add" class="modal">
                <div class="modal-box">
                    <form method="dialog">
                        <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                    </form>
                    <h3 class="font-bold text-lg">Add {{ $title }}</h3>
                    <form action="{{ url('/pemupukan') }}" method="POST">
                        @csrf
                        <input type="hidden" placeholder="Type here" class="input input-bordered w-full max-w-xs" name="semester" value="{{ $semester }}"/>
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
                                <span class="label-text">Pupuk</span>
                            </div>
                            <select class="input input-bordered" name="pupuk">
                                <option disabled selected>Pilih Pupuk</option>
                                @foreach ($pupuks as $pupuk)
                                    <option value="{{ $pupuk->id }}">{{ $pupuk->pupuk }}</option>
                                @endforeach
                            </select>
                        </label>
                        <label class="form-control w-full max-w-xs">
                            <div class="label">
                                <span class="label-text">Total</span>
                            </div>
                            <input type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs"
                                name="total" />

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
        </div>
