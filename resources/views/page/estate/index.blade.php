@extends('main')

@section('content')
            
            @include('page.estate.create')
            

            {{-- laptop display --}}
            @include('page.estate.laptop')
            {{-- smartphone display --}}
            @include('page.estate.phone')
            @include('page.estate.update')
            @include('page.estate.delete')


@endsection
