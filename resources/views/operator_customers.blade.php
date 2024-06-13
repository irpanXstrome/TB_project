@php use App\Models\Users; @endphp
@extends('master')
@section('main')
    <div class="border border-border bg-backgroundSecondary has-table">
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
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No Handphone</th>
                    <th>Jenis Kelamin</th>
                    <th>Rayon</th>
                    <th>Stand</th>
                    <th>Created At</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($data as $customer)
                    <tr>
                        <td class="image-cell">
                            <div class="image">
                                <img src="https://avatars.dicebear.com/v2/initials/rebecca-bauch.svg"
                                     class="rounded-full" alt="">
                            </div>
                        </td>
                        <td>{{$customer->no_sl}}</td>
                        <td>{{$customer->user?->name}}</td>
                        <td>{{$customer->user?->address}}</td>
                        <td>{{$customer->user?->number}}</td>
                        <td>{{Users::gender($customer->user?->gender)}}</td>
                        <td>{{$customer->rayon}}</td>
                        <td>{{$customer->stand}}</td>
                        <td>
                            <small class="text-gray-500"
                                   title="{{$customer->created_at->format('Y/m/d')}}">{{$customer->created_at->format('Y/m/d')}}</small>
                        </td>
                        <td>
                            <div class="buttons right nowrap">
                                <a href="/operator_area/pencatatan/view/{{$customer->no_sl}}" class="button small green --jb-modal">
                                    <span class="icon"><i class="mdi mdi-eye"></i></span>
                                </a>
                                <form action="/api/v1/customer/delete" method="post">
                                    @csrf
                                    <button name="no_sl" value="{{$customer->no_sl}}" class="button small red --jb-modal" type="submit">
                                        <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
