@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center h-100 ">
            <div class="col-md-12 p-0 ">
                <div id="jumbotron" class="shadow">
                    <div class="container-fluid h-100">
                        <div class="row h-100 align-items-center">
                            <div class="col-12 z-index">
                                <div class="title text-center  m-5">
                                    <h1 style="font-size: 3rem" class="fw-bold">Benvenuto {{ Auth::user()->name }}
                                        {{ Auth::user()->surname }} </h1>
                                    <p class="fs-3 fw-bold">Qui troverai tutti gli strumenti per gestire e vendere i tuoi
                                        servizi
                                        <br> Accedi alla sidebar per scoprire i tuoi contenuti
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row align-items-top ms-4 my-4">


            <div class="col-sm-12 col-md-12 col-lg-4 d-flex justify-content-center">

                <div class="card shadow" style="width: 18rem;">
                    <img class="card-img-top d-none d-lg-block"
                        src="https://s.tmimgcdn.com/scr/800x500/160700/web-dashboard-tables-design-ui_160768-original.jpg"
                        alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-text">Organizza al meglio i tuoi servizi
                        </h5>
                    </div>
                </div>


                {{-- <div class="card">
            <div class="card-header">{{ __('Le tue sezioni') }}</div>

            <div class="card-body">
               {{--  @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <p>
                    @if (Auth::user()->name && Auth::user()->surname)
                        Benvenuto {{ Auth::user()->name }} {{ Auth::user()->surname }}
                    @else
                        Benvenuto {{ Auth::user()->email }}
                    @endif
                </p> --}}
                {{-- <a class="btn btn-primary text-white" href="{{ route('admin.apartments.index') }}">Appartamenti</a>
                <a class="btn btn-secondary text-white" href="{{ route('admin.packs.index') }}">
                    Sponsorizzazione</a>
            </div> --}}
            </div>

            <div class="col-sm-12 col-md-12 col-lg-4 d-flex justify-content-center">
                <div class="card shadow" style="width: 18rem;">
                    <img class="card-img-top d-none d-lg-block"
                        src="https://images.unsplash.com/photo-1584438784894-089d6a62b8fa?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
                        alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-text">Tieniti sempre in contatto con i possibili acquirenti</h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4 d-flex justify-content-center">
                <div class="card shadow" style="width: 18rem;">
                    <img class="card-img-top d-none d-lg-block"
                        src="https://www.tuttocampo.it/Web/Images/News/Original/1444197.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-text">Scopri i vantaggi delle nostre promozioni</h5>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="col-md-12">
                <h1>BENVENUTO {{ Auth::user()->name }} {{ Auth::user()->surname  }} </h1>
                <p>Qui troverai tutti gli strumenti per gestire e vendere i tuoi servizi 
                <br> <br> Accedi alla sidebar per scoprire i tuoi contenuti</p>
    
            </div> --}}
    </div>
    </div>
@endsection
