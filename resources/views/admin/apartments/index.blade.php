@extends('layouts.app')
@section('content')
    <div class="container my-5">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Immagine</th>
                    <th scope="col">Appartamento</th>
                    <th scope="col">Stanze</th>
                    <th scope="col">Bagni</th>
                    <th scope="col">Letti</th>
                    <th scope="col">MQ</th>
                    <th scope="col">Visibile</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($apartments as $apartment)
                    <tr>
                        <td><img src="{{ $apartment->image }}" alt="immagine appartamento" width='50' height='50'></td>
                        <td>{{ Str::limit($apartment->title_desc, 10) }}</td>
                        <td>{{ $apartment->room }}</td>
                        <td>{{ $apartment->bathroom }}</td>
                        <td>{{ $apartment->bed }}</td>
                        <td>{{ $apartment->square_meters }}</td>
                        <td>{{ $apartment->visible ? 'Sì' : 'No' }}</td>
                    @empty <td class="text-center fs-1" colspan="7">Non hai appartamenti registrati</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
