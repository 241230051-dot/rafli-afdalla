@extends('app')

@section('content')
<div class="min-h-screen bg-white flex items-center justify-center px-4">
    
    <div class="max-w-md w-full relative">

        <!-- Glow effect halus -->
        <div class="absolute inset-0 bg-gradient-to-r from-blue-100 to-purple-100 blur-2xl opacity-40 rounded-3xl"></div>

        <div class="relative bg-white rounded-3xl shadow-2xl p-8 text-center border border-gray-100">

            <img src="https://via.placeholder.com/120"
                class="w-28 h-28 mx-auto rounded-full shadow-lg border-4 border-white -mt-16">

            <h2 class="text-2xl font-bold text-gray-800 mt-4">Rafli</h2>
            <p class="text-gray-500">Frontend Developer</p>

            <div class="mt-6 space-y-3 text-left">
                <div class="flex justify-between border-b pb-2">
                    <span class="text-gray-500">Email</span>
                    <span class="font-medium">rafli@email.com</span>
                </div>
                <div class="flex justify-between border-b pb-2">
                    <span class="text-gray-500">No HP</span>
                    <span class="font-medium">0812xxxxxxx</span>
                </div>
                <div class="flex justify-between">
                    <span class="text-gray-500">Alamat</span>
                    <span class="font-medium">Pontianak</span>
                </div>
            </div>

            <button class="mt-6 w-full bg-gradient-to-r from-blue-500 to-indigo-500 hover:scale-105 hover:shadow-lg text-white py-2 rounded-xl transition duration-300">
                Edit Profil
            </button>

        </div>
    </div>

</div>
@endsection