{{-- smartphone display --}}
<div class="md:hidden overflow-auto max-h-[70vh]">

    <?php $n = 0 ?>
    @foreach ($data as $item)
    <?php $n++ ?>


        <div tabindex="0" class="collapse bg-base-200 w-full mb-2">
            <div class="collapse-title text-xl font-medium">
                {{ $n; }}: <span class="font-normal">{{ $item->divisi }}</span>
                @include('components.control-button')
            </div>

        </div>
    @endforeach

</div>