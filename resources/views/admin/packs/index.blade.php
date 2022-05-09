@extends('layouts.app')

@section('content')
    <div class="container">
        <h3 class="text-muted my-3">
            <span class="text-uppercase">&egrave;</span> possibile sponsorizzare il proprio appartamento mostrandolo in
            evidenza in homepage e nella pagina di
            ricerca
            tramite l'acquisto di uno dei seguenti pacchetti.
        </h3>
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">Pacchetto</th>
                    <th scope="col">Prezzo</th>
                    <th scope="col">Tempo</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($packs as $pack)
                    <tr>
                        <td class="fs-4">
                            <i
                                class="fa-solid fa-medal fa-lg @if ($pack->name == 'Gold') text-warning 
                                @elseif ($pack->name == 'Bronze') text-danger @endif "></i>
                            {{ $pack->name }}
                        </td>
                        <td class="fs-4">{{ $pack->price }}€</td>
                        <td class="fs-4">{{ $pack->time }} ore</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">Non ci Sono Pacchetti</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            <a class="btn btn-lg btn-outline-success" href="{{ route('admin.apartments.index') }}">Sponsorizza ora i tuoi
                appartamenti!</a>
        </div>
    </div>
@endsection
