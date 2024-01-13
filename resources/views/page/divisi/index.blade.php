@extends('main')

@section('content')

@include('page.divisi.create')
{{-- laptop display --}}
@include('page.divisi.laptop')
{{-- smartphone display --}}
@include('page.divisi.phone')
@include('page.divisi.update')
@include('page.divisi.delete')


@endsection