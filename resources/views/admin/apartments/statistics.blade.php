@extends('layouts.app')
@section('content')
    <div class="container py-3">
        <div class="text-center">
            <h2>Aggiungi un appartamento qui <a class="btn btn-success rounded-circle"
                    href="{{ route('admin.apartments.create') }}"><i class="fa-solid fa-plus"></i></a> </h2>
        </div>
        <div class="row">
            <div class="offset-1 col-10 ">
                <canvas id="myChart"></canvas>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const labels = [
            'Visualizzazioni',
            'Media visite totali di tutti gli appartamenti',
            'Messaggi',
        ];

        const data = {
            labels: labels,
            datasets: [{
                label: 'My First dataset',
                backgroundColor: ['rgb(181, 29, 29)',
                    'rgb(54, 162, 235)', 'rgb(255, 205, 86)',
                ],
                borderColor: 'rgb(0, 0, 0)',
                data: [{{ $ipCount }}, {{ $ipAllCount }}, {{ $messageCount }}],
            }]
        };

        const config = {
            type: 'doughnut',
            data: data,
            options: {

                plugins: {
                    legend: {
                        labels: {
                            // This more specific font property overrides the global property
                            font: {
                                size: 22
                            }
                        }
                    }
                }
            }
        };


        const myChart = new Chart(
            document.getElementById('myChart'),
            config
        );
    </script>
@endsection
