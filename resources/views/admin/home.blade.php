@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                        <p>
                            @if (Auth::user()->name && Auth::user()->surname)
                                Benvenuto {{ Auth::user()->name }} {{ Auth::user()->surname }}
                            @else
                                Benvenuto {{ Auth::user()->email }}
                            @endif
                        </p>
                        <a class="btn btn-primary text-white" href="{{ route('admin.apartments.index') }}">Appartamenti</a>
                        <a class="btn btn-secondary text-white" href="{{ route('admin.packs.index') }}">Paccheti
                            Sponsorizzazione</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
