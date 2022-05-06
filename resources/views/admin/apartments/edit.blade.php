@extends('layouts.app')

@section('content')
    <form action="{{ route('admin.apartments.update', $apartment) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @include('includes.form')
    </form>
@endsection
