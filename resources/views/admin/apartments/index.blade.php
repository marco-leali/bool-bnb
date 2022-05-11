@extends('layouts.app')
@section('content')
    <div class="container mt-5">
        @if (session('message'))
            <div class="alert alert-success">
                {!! session('message') !!}
            </div>
        @endif

        <div class="d-flex justify-content-between align-items-center">
            <h3 class="text-muted">La tua lista appartamenti</h3>
            <a class="btn btn-success shadow text-light my-3" href="{{ route('admin.apartments.create') }}">Aggiungi
                appartamento</a>
        </div>

        <table class="table border bg-light shadow text-center">
            <thead>
                <tr>
                    <th scope="col">Sponsor</th>
                    <th scope="col">Immagine</th>
                    <th scope="col">Appartamento</th>
                    <th scope="col">Stanze</th>
                    <th scope="col">Bagni</th>
                    <th scope="col">Letti</th>
                    <th scope="col">MQ</th>
                    <th scope="col">Visibile</th>
                    <th scope="col">Views</th>
                    <th scope="col">Messaggi</th>
                    <th scope="col">Azioni</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($apartments as $apartment)
                    <tr class="align-middle">
                        <td>
                            @forelse ($apartment->packs as $pack)
                                @if (\Carbon\Carbon::now() <= $pack->pivot->expire)
                                    <div class="btn-group dropstart">
                                        <button type="button" class="btn btn-outline-secondary rounded-circle"
                                            data-bs-toggle="dropdown" aria-expanded="false"><i
                                                class="fa-solid fa-medal @if ($pack->name == 'Gold') text-warning 
                                    @elseif ($pack->name == 'Bronze') text-danger @endif"></i></button>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <p class="dropdown-item m-0">Scadenza:
                                                    {{ date('F j Y g:i a', strtotime($pack->pivot->expire)) }}</p>
                                            </li>
                                            <li>
                                                <p class="dropdown-item m-0">Pacchetto {{ $pack->name }}</p>
                                            </li>
                                        </ul>
                                    </div>
                                @else
                                    <a href="{{ route('admin.packs.show', $apartment) }}"
                                        class="btn btn-outline-secondary rounded-circle" title="Rinnova ora"><i
                                            class="fa-solid fa-arrows-rotate text-info"></i></a>
                                @endif
                            @empty
                                <a href="{{ route('admin.packs.show', $apartment) }}"
                                    class="btn btn-outline-secondary rounded-circle" title="Sponsorizza ora"><i
                                        class="fa-solid fa-chart-line"></i></a>
                            @endforelse

                        </td>
                        <td>
                            <a href="{{ route('admin.apartments.show', $apartment->id) }}">
                                <img class="img-scale"
                                    src="{{ $apartment->image ?? 'https://www.edengi.it/vendor/paginesi/custom_sdk/src/php_classes/placeholder.jpg' }}"
                                    alt="immagine appartamento" width='50' height='50'>

                            </a>
                        </td>
                        <td>{{ Str::limit($apartment->title_desc, 20) }}</td>
                        <td>{{ $apartment->room }}</td>
                        <td>{{ $apartment->bathroom }}</td>
                        <td>{{ $apartment->bed }}</td>
                        <td>{{ $apartment->square_meters }}</td>
                        <td> {!! $apartment->visible ? '<i class="fa-solid fa-eye fa-lg text-success"></i>' : '<i class="fa-solid fa-eye-slash fa-lg text-danger"></i>' !!}</td>
                        <td>{{ count($apartment->ipaddresses) }}</td>
                        <td><a class="btn btn-small btn-secondary rounded-circle position-relative"
                                href="{{ route('admin.apartments.show-messages', $apartment) }}"><i
                                    class="fa-solid fa-envelope"></i><span
                                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                    {{ count($apartment->messages) }}
                                    <span class="visually-hidden">unread messages</span>
                                </span></a></td>
                        {{-- @foreach ($apartment->messages as $message)
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
                    @empty <td class="text-center fs-1" colspan="11">Non hai appartamenti registrati</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
