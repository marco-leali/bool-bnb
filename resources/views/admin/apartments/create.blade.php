@extends('layouts.app')

@section('content')
    <form action="{{ route('admin.apartments.store') }}" method="POST">
        @include('includes.form')
    </form>
@endsection
