@extends('app')

@section('content')
<div class="min-h-screen bg-white flex items-center justify-center px-4">

    <div class="max-w-xl w-full relative">

        <!-- Glow background -->
        <div class="absolute inset-0 bg-gradient-to-r from-blue-100 to-indigo-100 blur-2xl opacity-40 rounded-3xl"></div>

        <div class="relative bg-white shadow-2xl rounded-3xl p-8 border border-gray-100">

            <h2 class="text-3xl font-bold text-gray-800 text-center mb-2">
                Hubungi Kami
            </h2>
            <p class="text-gray-500 text-center mb-6">
                Kirim pesan, kami akan segera membalas
            </p>

            <form class="space-y-4">

                <div class="relative">
                    <input type="text" placeholder="Nama"
                        class="w-full border border-gray-300 rounded-xl p-3 focus:ring-2 focus:ring-blue-400 focus:outline-none">
                </div>

                <div class="relative">
                    <input type="email" placeholder="Email"
                        class="w-full border border-gray-300 rounded-xl p-3 focus:ring-2 focus:ring-blue-400 focus:outline-none">
                </div>

                <div class="relative">
                    <textarea placeholder="Pesan"
                        class="w-full border border-gray-300 rounded-xl p-3 h-32 focus:ring-2 focus:ring-blue-400 focus:outline-none"></textarea>
                </div>

                <button type="submit"
                    class="w-full bg-gradient-to-r from-blue-500 to-indigo-500 text-white py-3 rounded-xl hover:scale-[1.02] hover:shadow-lg transition duration-300">
                    Kirim Pesan 🚀
                </button>

            </form>

        </div>

    </div>

</div>
@endsection