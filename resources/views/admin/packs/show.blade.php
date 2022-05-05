@extends('layouts.app')



@section('content')
    <div class="container">

        <h1>Seleziona Pacchetto</h1>
        <div class="row">
            @forelse ($packs as $pack)
                <div class="col-4">
                    <div class="card @if ($pack->name == 'Gold') text-dark bg-warning
                        @elseif ($pack->name == 'Bronze') text-white bg-danger @endif text-light bg-secondary mb-3"
                        style="max-width: 18rem;">
                        <div class="card-header">{{ $pack->name }}</div>
                        <div class="card-body">
                            <h5 class="card-title">Prezzo: {{ $pack->price }}€</h5>
                            <p class="card-text">Ore: {{ $pack->time }} ore</p>

                            <form action="{{ route('admin.packs.store') }}" method="post" class="save">
                                @csrf
                                <input type="text" name="pack_id" class="d-none" value="{{ $pack->id }}"
                                    readonly>
                                <input type="text" name="apartment_id" class="d-none" value="{{ $apartment->id }}"
                                    readonly>
                                <input type="text" name="time" class="d-none" value="{{ $pack->time }}" readonly>
                                <button type="submit" class="btn btn-primary sponsor-btn">Sponsorizza</button>
                            </form>
                        </div>
                    </div>
                </div>

            @empty <h2>Non ci sono pacchetti</h2>
            @endforelse
        </div>
        <div id="pay" class="row d-none">
            <div class="col-md-8 col-md-offset-2">
                <div id="dropin-container"></div>
                <button class="btn btn-success" id="submit-button">Paga</button>
                <button class="btn btn-danger" id="cancel-button">Annulla</button>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://js.braintreegateway.com/web/dropin/1.8.1/js/dropin.min.js"></script>

    <script>
        const saveButton = document.querySelectorAll('.save');
        const pay = document.getElementById('pay');
        const cancelButton = document.getElementById('cancel-button');
        const sponsorBtn = document.querySelectorAll('.sponsor-btn')


        saveButton.forEach((element) => {
            element.addEventListener('submit', function(e) {

                sponsorBtn.forEach(btn => {
                    btn.disabled = true;
                });
                e.preventDefault();

                pay.classList.remove('d-none')

                /* const submitButton = document.getElementById('submit-button');

                submitButton.onclick = () => {
                    setTimeout(() => {
                        element.submit();
                        pay.classList.add('d-none');
                    }, 1000);
                }; */
                var button = document.querySelector('#submit-button');

                braintree.dropin.create({
                    authorization: "<?php
use Braintree\ClientToken;
echo $clientToken = ClientToken::generate(); ?>",
                    container: '#dropin-container'
                }, function(createErr, instance) {
                    button.addEventListener('click', function() {
                        instance.requestPaymentMethod(function(err, payload) {



                            $.get('{{ route('payment.process') }}', {
                                payload
                            }, function(response) {
                                if (response.success) {
                                    element.submit();
                                    console.log('Payment successfull!');
                                } else {
                                    alert('Payment failed');
                                }
                            }, 'json');
                        });
                    });
                });
            })


        })

        cancelButton.onclick = () => {
            location.reload();
        }
    </script>
@endsection
