@extends('main')

@section('content')

<div class="card w-full h-full bg-base-100 shadow-xl mt-5 max-h-[85vh]">

    <div class="card-body ">
        <div class="w-full flex items-center">
            <div class="flex-1">
                <h2 class="card-title text-md md:text-lg">{{ $title }}</h2>
            </div>
            <button class="btn btn-primary" onclick="input_estate.showModal()">
                <span class="material-symbols-outlined">
                    note_add
                </span>
            </button>
            
            @include('page.estate.add')
            @include('page.estate.edit')


        </div>


        {{-- laptop display --}}
        <div class="card w-full overflow-auto max-h-[70vh] hidden md:block">
            <div class="overflow-x-auto">
                <table class="table table-lg table-pin-rows table-pin-cols">
                    <thead>
                        <tr>
                            <th>No</th>
                            <td>Estate</td>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $n=0; ?>
                        @foreach ($data as $item)
                        <?php $n++; ?>
                        <tr>
                            <th>{{ $n; }}</th>
                            <td>{{ $item->estate }}</td>
                            <td>
                                @include('page.estate.control-button')
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <td>Estate</td>
                            <th></th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>

        <div class="md:hidden overflow-auto max-h-[70vh]">
            {{-- smartphone display --}}
            <?php $n = 0 ?>
            @foreach ($data as $item)
            <?php $n++ ?>

            <div class="card w-full bg-base-200 shadow-xl text-sm font-bold mb-2">
                <div class="card-body">
                    <h2 class="card-title">{{ $n; }} {{ $item->estate }}</h2>

                    @include('page.estate.control-button')
                </div>
            </div>
            @endforeach

        </div>





    </div>
</div>

@endsection
