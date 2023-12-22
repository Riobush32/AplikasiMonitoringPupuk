{{-- smartphone display --}}
<div class="md:hidden overflow-auto max-h-[70vh]">

    <?php $n = 0 ?>
    @foreach ($data as $item)
    <?php $n++ ?>

    <div class="card w-full bg-base-200 shadow-xl text-sm font-bold mb-2">
        <div class="card-body">
            <h2 class="card-title">{{ $n; }} {{ $item->estate }}</h2>

            @include('components.control-button')
            
        </div>
    </div>
    @endforeach

</div>