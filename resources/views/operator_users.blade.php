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
        <a href="/admin_area/user/add" class="button green m-3">Add User</a>
        <div class="card-content">
            <table>
                <thead>
                <tr>
                    <th></th>
                    <th>Nama</th>
                    <th>UserName</th>
                    <th>Role</th>
                    <th>Address</th>
                    <th>Number</th>
                    <th>Gender</th>
                    <th>Created At</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($data as $user)
                    <tr>
                        <td class="image-cell">
                            <div class="image">
                                <img src="https://avatars.dicebear.com/v2/initials/rebecca-bauch.svg"
                                     class="rounded-full" alt="">
                            </div>
                        </td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->username}}</td>
                        <td>{{Users::getRoleName($user->role)}}</td>
                        <td>{{$user->address}}</td>
                        <td>{{$user->number}}</td>
                        <td>{{Users::gender($user->gender)}}</td>
                        <td>
                            <small class="text-gray-500"
                                   title="{{$user->created_at->format('Y/m/d')}}">{{$user->created_at->format('Y/m/d')}}</small>
                        </td>
                        <td>
                            <div class="buttons right nowrap">
                                <form action="/api/v1/user/delete" method="post">
                                    @csrf
                                    <button name="user_id" value="{{$user->user_id}}" class="button red --jb-modal" type="submit">
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
