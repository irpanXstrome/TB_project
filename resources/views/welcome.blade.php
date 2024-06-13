@php use App\Models\CustomerBillRecording;use App\Models\Customers;use App\Models\ImageData; @endphp
@extends('master')
@section('main')
    <section class="section main-section">
        <div class="grid gap-6 grid-cols-1 md:grid-cols-3 mb-6">
            <div class="card">
                <div class="card-content">
                    <div class="flex items-center justify-between">
                        <div class="widget-label">
                            <h3>
                                Customers
                            </h3>
                            <h1>
                                {{Customers::all()->count()}}
                            </h1>
                        </div>
                        <span class="icon widget-icon text-green-500"><i class="mdi mdi-account-multiple mdi-48px"></i></span>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                    <div class="flex items-center justify-between">
                        <div class="widget-label">
                            <h3>
                                Pencatatan
                            </h3>
                            <h1>
                                {{CustomerBillRecording::all()->count()}}
                            </h1>
                        </div>
                        <span class="icon widget-icon text-blue-500"><i
                                class="mdi mdi-account-check mdi-48px"></i></span>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                    <div class="flex items-center justify-between">
                        <div class="widget-label">
                            <h3>
                                Foto Terekam
                            </h3>
                            <h1>
                                {{ImageData::query()->count()}}
                            </h1>
                        </div>
                        <span class="icon widget-icon text-blue-500"><i
                                class="mdi mdi-archive-arrow-down mdi-48px"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
