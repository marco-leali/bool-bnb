@extends('layouts.app')
@section('content')
    <div class="container my-5">
        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif

        <a class="btn btn-success text-light my-3" href="{{ route('admin.apartments.create') }}">Aggiungi appartamento</a>

        <table class="table text-center">
            <thead>
                <tr>
                    <th scope="col">Immagine</th>
                    <th scope="col">Appartamento</th>
                    <th scope="col">Stanze</th>
                    <th scope="col">Bagni</th>
                    <th scope="col">Letti</th>
                    <th scope="col">MQ</th>
                    <th scope="col">Visibile</th>
                    <th scope="col">Visualizzazioni</th>
                    <th scope="col">Messaggi</th>
                    <th scope="col">Azioni</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($apartments as $apartment)
                    <tr class="align-middle">
                        <td>
                            <a href="{{ route('admin.apartments.show', $apartment->id) }}">
                                <img class="img-scale" src="{{ $apartment->image }}" alt="immagine appartamento"
                                    width='50' height='50'>
                            </a>
                        </td>
                        <td>{{ Str::limit($apartment->title_desc, 10) }}</td>
                        <td>{{ $apartment->room }}</td>
                        <td>{{ $apartment->bathroom }}</td>
                        <td>{{ $apartment->bed }}</td>
                        <td>{{ $apartment->square_meters }}</td>
                        <td> {!! $apartment->visible ? '<i class="fa-solid fa-eye fa-lg"></i>' : '<i class="fa-solid fa-eye-slash fa-lg"></i>' !!}</td>
                        <td>{{ count($apartment->ipaddresses) }}</td>
                        <td><a class="btn btn-small btn-secondary rounded-circle position-relative" href="{{ route('admin.apartments.show-messages', $apartment) }}"><i
                                    class="fa-solid fa-envelope"></i><span
                                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                   {{ count($apartment->messages)}}
                                    <span class="visually-hidden">unread messages</span>
                                </span></a></td>
                               {{--  @foreach ($apartment->messages as $message)
                                    {{ $message->email }}
                                @endforeach --}}
                        <td>
                            <a href="{{ route('admin.apartments.show', $apartment->id) }}"
                                class="btn btn-small btn-primary rounded-circle text-light"><i
                                    class="fa-solid fa-magnifying-glass"></i></a>
                            <a href="{{ route('admin.apartments.edit', $apartment->id) }}"
                                class="btn btn-small btn-warning rounded-circle"><i class="fa-solid fa-pencil"></i></a>
                            @include('includes.modal-confirm')
                        </td>
                    @empty <td class="text-center fs-1" colspan="9">Non hai appartamenti registrati</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
