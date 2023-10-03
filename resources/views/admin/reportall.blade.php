@extends('layouts')
@section('content')
    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <h1>กราฟสินค้าระบบ</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->

    <!-- category -->
    <div class="cart-section mt-5 mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <canvas id="myChart" width="400" height="150"></canvas>
                </div>
            </div>
        </div>
    </div>
    <!-- end order -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {

            const ctx = document.getElementById('myChart');
            var productNames = [];
            var productaty = [];

            console.log(productaty);

            @foreach ($productChart as $product)
                productNames.push('{{ $product['product_name'] }}');
                productaty.push('{{ $product['product_qty'] }}');
            @endforeach

            const myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: productNames,
                    datasets: [{
                        label: 'สินค้าในระบบ',
                        data: productaty,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                }
            });
        }, true);
    </script>
@endsection
