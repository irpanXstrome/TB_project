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
                <div class="container mx-auto px-4 py-8">
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                        <!-- Input for photo upload -->
                        <div class="flex justify-center items-center bg-white border border-gray-300 rounded-lg p-4">
                            <div class="mb-6 overflow-x-scroll">
                                <form action="/operator_area/pencatatan/view/{{$id}}/meter" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="file" name="photo" class="mb-2">
                                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Upload</button>
                                </form>
                            </div>
                        </div>
                        @foreach($photos as $i => $photo)
                            <div class="bg-white border border-gray-300 rounded-lg overflow-hidden">
                                <img src="data:image/jpeg;base64,{{ $photo->image_data }}" alt="Dummy Photo {{$i}}" class="w-full h-full object-cover">
                            </div>
                        @endforeach
                        <!-- Dummy Photos -->
                    </div>
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
