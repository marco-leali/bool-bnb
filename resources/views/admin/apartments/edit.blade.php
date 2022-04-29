@extends('layouts.app')

@section('content')
    <form action="{{ route('admin.apartments.update') }}" method="POST">
        @method('PUT')
        @include('includes.form')
    </form>
@endsection
