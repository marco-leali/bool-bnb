@extends('layouts.app')

@section('content')

@foreach($apartment->messages as $currentMessage)
<p>{{ $currentMessage->email }}</p>
<p>{{ $currentMessage->content }}</p>
@endforeach
@endsection