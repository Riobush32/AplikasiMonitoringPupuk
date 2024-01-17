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
            <a href="javascript:history.back()" class="btn btn-outline btn-error ml-2">
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
                    <form action="{{ url('/semester') }}" method="POST">
                        @csrf
                        <input type="hidden" placeholder="Type here" class="input input-bordered w-full max-w-xs" name="field_id" value="{{ $field }}"/>
                        <label class="form-control w-full max-w-xs">
                            <div class="label">
                                <span class="label-text">Semester</span>
                            </div>
                            <select class="input input-bordered" name="semester">
                                <option disabled selected>Semester Ke?</option>
                                <option value="1">1 (satu)</option>
                                <option value="2">2 (dua)</option>
                            </select>
                        </label>
                        <label class="form-control w-full max-w-xs">
                            <div class="label">
                                <span class="label-text">Tanggal</span>
                            </div>
                            <input type="date" placeholder="Type here" class="input input-bordered w-full max-w-xs"
                                name="date" />

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
