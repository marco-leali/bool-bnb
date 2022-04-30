@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            @forelse($apartment->messages as $message)
                <div class="offset-1 col-10 card my-5 text-center">
                    <div class="card-header">
                        Messaggio N {{ $loop->iteration }}
                    </div>
                    <div class="card-body">
                        <h6 class="card-title fw-bold">Ricevuto Da:</h6>
                        <h5 class="card-title"> <a class="text-decoration-none"
                                href="mailto:{{ $message->email }}">{{ $message->email }}</a>
                        </h5>
                        <hr>
                        <h6 class="card-text fw-bold">Testo del messaggio:</h6>
                        <p class="card-text w-75 mx-auto">{{ $message->content }}</p>
                    </div>
                    <div class="card-footer text-muted">
                        {{ date('F j Y g:i a', strtotime($message->created_at)) }}
                    </div>
                </div>
            @empty
                <p>Non ci sono messaggi per l'appartamento <strong>{{ $apartment->title_desc }}</strong> </p>
            @endforelse
        </div>
    </div>
@endsection
