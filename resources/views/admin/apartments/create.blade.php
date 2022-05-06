@extends('layouts.app')

@section('content')
    <form id="submit-form" action="{{ route('admin.apartments.store') }}" method="POST" enctype="multipart/form-data">
        @include('includes.form')
    </form>
@endsection
