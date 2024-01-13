@extends('main')

@section('content')

@include('page.semester.create')
{{-- laptop display --}}
@include('page.semester.laptop')
{{-- smartphone display --}}
@include('page.semester.phone')
@include('page.semester.update')
@include('page.semester.delete')


@endsection