@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ $apartment->image }}" class="card-img-top" alt="Immagine Appartamento">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Appartamento: {{ $apartment->title_desc }} </h5>
                        <h5> Visibile:
                            {!! $apartment->visible ? '<i class="fa-solid fa-eye fa-lg text-success"></i>' : '<i class="fa-solid fa-eye-slash fa-lg text-danger"></i>' !!}
                        </h5>
                        <hr>
                        <p class="card-text">Servizi:</p>
                        <div class="d-flex">
                            @forelse ($apartment->services as $service)
                                <span class="badge rounded-pill bg-info text-dark mx-2 fs-6">{{ $service->name }}</span>
                            @empty
                                Nessun Servizio
                            @endforelse
                        </div>
                        <hr>
                        <p class="card-text">Stanze: {{ $apartment->room }}</p>
                        <p class="card-text">Bagni: {{ $apartment->bathroom }}</p>
                        <p class="card-text">Letti: {{ $apartment->bed }}</p>
                        <p class="card-text">Metri quadrati: {{ $apartment->square_meters }}</p>
                        <p class="card-text">Indirizzo:</p>
                        <ul>
                            <li>Provincia: {{ $apartment->position->province }}</li>
                            <li>Città: {{ $apartment->position->city }},{{ $apartment->position->postal_code }}</li>
                            <li>Via: {{ $apartment->position->street }}</li>
                        </ul>
                        <a href="{{ route('admin.apartments.index') }}" class="btn btn-primary text-light">Torna
                            indietro</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
