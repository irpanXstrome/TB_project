@extends('master')
@section('main')
            <div class="border w-screen border-border bg-backgroundSecondary has-table">
                <header class="card-header">
                    <p class="card-header-title">
                        <span class="icon"><i class="mdi mdi-account-multiple"></i></span>
                        Clients
                    </p>
                    <a href="#" class="card-header-icon">
                        <span class="icon"><i class="mdi mdi-reload"></i></span>
                    </a>
                </header>
                <div class="card-content">
                    <table>
                        <thead>
                        <tr>
                            <th></th>
                            <th>No SL</th>
                            <th>Pemakaian</th>
                            <th>Biaya Air</th>
                            <th>Biaya Beban</th>
                            <th>Denda</th>
                            <th>Created At</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $pelanggan)
                            <tr>
                                <td class="image-cell">
                                    <div class="image">
                                        <img src="https://avatars.dicebear.com/v2/initials/rebecca-bauch.svg" class="rounded-full" alt="">
                                    </div>
                                </td>
                                <td>{{$pelanggan->no_sl}}</td>
                                <td>{{$pelanggan->usage}}</td>
                                <td>{{$pelanggan->water_costs}}</td>
                                <td>{{$pelanggan->load_costs}}</td>
                                <td>{{$pelanggan->fine}}</td>
                                <td>
                                    <small class="text-gray-500" title="{{$pelanggan->created_at->format('Y/m/d')}}">{{$pelanggan->created_at->format('Y/m/d')}}</small>
                                </td>
                                <td>
                                    <div class="buttons right nowrap">
                                        <a href="/operator_area/pencatatan/view/{{$pelanggan->no_sl}}" class="button green --jb-modal">
                                            <span class="icon"><i class="mdi mdi-draw"></i></span>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
@endsection
