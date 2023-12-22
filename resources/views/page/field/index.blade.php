@extends('main')

@section('content')

@include('page.field.create')


{{-- laptop display --}}
@include('page.field.laptop')
{{-- smartphone display --}}
@include('page.field.phone')
@include('page.field.update')
@include('page.field.delete')


@endsection