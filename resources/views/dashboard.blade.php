@extends('layouts.app')


@section('contents')
  <div class="row">
    <h2>Bienvenue {{ auth()->user()->name }}</h2>

    <!-- Add a container for the chart -->
    <canvas id="myChart" width="400" height="200"></canvas>

    {{-- Chart data --}}
    @php
        $chartData = json_encode([10, 20, 30, 40, 50]); // Replace this with your own data
    @endphp

    <script>
        // Script to initialize the chart with the provided data
        var ctx = document.getElementById('myChart').getContext('2d');
        var chartData = JSON.parse('{!! addslashes($chartData) !!}');
        var myChart = new Chart(ctx, {
            type: 'bar', // or 'line', 'pie', etc.
            data: {
                labels: ['Tv', 'Iphone', 'Chocolat', 'Parfum', 'Livres'],
                datasets: [{
                    label: 'Chart Name',
                    data: chartData,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
  </div>
@endsection
