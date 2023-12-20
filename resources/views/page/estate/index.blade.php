@extends('main')

@section('content')

<div class="card w-full h-full bg-base-100 shadow-xl mt-5 max-h-[85vh]">

    <div class="card-body ">
        <div class="w-full flex items-center">
            <div class="flex-1">
                <h2 class="card-title text-md md:text-lg">{{ $title }}</h2>
            </div>
            <button class="btn btn-primary" onclick="add_estate.showModal()">
                <span class="material-symbols-outlined">
                    note_add
                </span>
            </button>
            
            @include('page.estate.add')


        </div>

            @include('page.estate.laptop')
            
            @include('page.estate.phone')

    </div>
</div>

@endsection
