@extends('main')

@section('content')

@include('page.pupuk.create')
{{-- laptop display --}}
@include('page.pupuk.laptop')
@include('page.pupuk.update')
@include('page.pupuk.delete')


@endsection