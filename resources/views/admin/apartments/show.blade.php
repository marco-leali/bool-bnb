@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <img src="{{ $apartment->image }}" class="card-img-top" alt="Immagine Appartamento">
            <div class="card-body">
                <h5 class="card-title">Appartamento: {{ $apartment->title_desc }}</h5>
                <p class="card-text">Stanze: {{ $apartment->room }}</p>
                <p class="card-text">Bagni: {{ $apartment->bathroom }}</p>
                <p class="card-text">Letti: {{ $apartment->bed }}</p>
                <p class="card-text">Metri quadrati: {{ $apartment->square_meters }}</p>
                <a href="{{ route('admin.apartments.index') }}" class="btn btn-primary text-light">Torna indietro</a>
            </div>
        </div>
    </div>
@endsection