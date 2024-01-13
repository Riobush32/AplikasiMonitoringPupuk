@extends('main')

@section('content')

@include('page.pemupukan.create')
{{-- laptop display --}}
@include('page.pemupukan.laptop')
{{-- smartphone display --}}
@include('page.pemupukan.phone')
@include('page.pemupukan.update')
@include('page.pemupukan.delete')


@endsection