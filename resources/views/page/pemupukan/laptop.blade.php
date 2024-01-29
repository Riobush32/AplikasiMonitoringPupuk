{{-- laptop display --}}
<div class="card w-full overflow-auto max-h-[70vh] ">
    <div class="overflow-x-auto">
        <div class="flex flex-col gap-2 mt-4">
            <!-- Card component -->
            {{-- Recomendation --}}
            <div class="px-4 sm:px-0">
                <h3 class="text-base font-semibold leading-7 text-gray-900">Recomendation</h3>
                <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-500">Detail Pupuk Recomendasi.</p>
            </div>
            {{-- card pupuk --}}
            <div class="flex flex-wrap">
                @foreach($recomendation as $item)
                <div class="stats shadow m-1">
        
                    <div class="stat">
                        <div class="stat-title">Total Pupuk</div>
                        <div class="stat-value">{{ $item->pupuks->pupuk }}</div>
                        <div class="stat-desc mt-1 flex items-center">
                            <div class="mr-2">
                                {{ $item->total }} Kg
                            </div>
                            <div class="join ">
                                <button class="btn btn-info join-item btn-xs" onclick="edit{{ $item->id }}.showModal()">
                                    <span class="material-symbols-outlined">
                                        edit_note
                                    </span>
                                </button>
                                <button class="btn btn-error join-item btn-xs" onclick="delete{{ $item->id }}.showModal()">
                                    <span class="material-symbols-outlined">
                                        delete
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
        
                </div>
                @endforeach
            </div>
        </div>
        <!-- component -->
        <div class="flex flex-col gap-2 mt-4">
            <!-- Card component -->
            {{-- Actual --}}
            <div class="px-4 sm:px-0">
                <h3 class="text-base font-semibold leading-7 text-gray-900">Actual</h3>
                <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-500">Detail Pupuk Actual.</p>
            </div>
            {{-- card pupuk --}}
            <div class="flex flex-wrap">
                @foreach($actual as $item)
                    <div class="stats shadow m-1">

                        <div class="stat">
                            <div class="stat-title">Total Pupuk</div>
                            <div class="stat-value">{{ $item->pupuks->pupuk }}</div>
                            <div class="stat-desc mt-1 flex items-center">
                                <div class="mr-2">
                                    {{ $item->total }} Kg
                                </div>
                                <div class="join ">
                                    <button class="btn btn-info join-item btn-xs"
                                        onclick="edit{{ $item->id }}.showModal()">
                                        <span class="material-symbols-outlined">
                                            edit_note
                                        </span>
                                    </button>
                                    <button class="btn btn-error join-item btn-xs"
                                        onclick="delete{{ $item->id }}.showModal()">
                                        <span class="material-symbols-outlined">
                                            delete
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
