{{-- smartphone display --}}
<div class="md:hidden overflow-auto max-h-[70vh]">

    <?php $n = 0 ?>
    @foreach ($data as $item)
    <?php $n++ ?>


        <div tabindex="0" class="collapse bg-base-200 w-full mb-2">
            <div class="collapse-title text-xl font-medium">
                {{ $n; }}: <span class="font-normal">{{ $item->field_bantu }}</span>
                <h1 class="text-xl font-semibold">{{ $item->field_no }}</h1>
                @include('components.control-button')
            </div>
            <div class="collapse-content">
                <h3 class="text-sm font-normal">Hektar: <span class="font-semibold">{{ $item->hektar }}</span> </h3>
                <h3 class="text-sm font-normal">Treess: <span class="font-semibold">{{ $item->treess }}</span> </h3>
            </div>
        </div>
    @endforeach

</div>