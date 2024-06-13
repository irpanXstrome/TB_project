@extends('master')
@section('main')
            <div class="card w-screen has-table">
                <header class="card-header">
                    <p class="card-header-title">
                        <span class="icon"><i class="mdi mdi-account-multiple"></i></span>
                        Clients
                    </p>
                    <a href="#" class="card-header-icon">
                        <span class="icon"><i class="mdi mdi-reload"></i></span>
                    </a>
                </header>
                <div class="container mx-auto bg-white-200 border border-black p-4">
                    <button id="updateUrlButton" class="button green mx-auto w-auto">
                        Foto Meter
                    </button>
                    <div class="flex w-full overflow-x-auto">
                        <table class="table-hover table">
                            <thead>
                            <tr>
                                <th>Usage</th>
                                <th>Water Costs</th>
                                <th>Load Costs</th>
                                <th>Denda</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>{{$data->usage}}</td>
                                <td>{{$data->water_costs}}</td>
                                <td>{{$data->load_costs}}</td>
                                <td>{{$data->fine}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-content">
                    <table>
                        <thead>
                        <tr>
                            <th>Bulan</th>
                            <th>Biaya</th>
                            <th>Loket</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data->paymentHistories()->get() as $history)
                            <tr>
                                <td>{{$history->created_at->format('Ymd')}}</td>
                                <td>{{$history->paid_total}}</td>
                                <td>{{$history->counter}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <script>
                document.getElementById('updateUrlButton').addEventListener('click', function(event) {
                    event.preventDefault();
                    let currentUrl = window.location.href;
                    let newUrl = currentUrl + '/meter';
                    window.location.href = newUrl;
                });
            </script>
@endsection
