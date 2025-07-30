<x-app-layout>
    @include('layout.header')

    <div class="px-6 py-10 bg-white min-h-screen">
        <!-- Judul -->
        <div class="flex items-center justify-between mb-6">
            <h1 class="text-3xl font-bold text-green-800">📋 Daftar Lomba</h1>

            <!-- Tombol Tambah Lomba -->
            <a href="{{ route('lomba.create') }}" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 transition">
                ➕ Tambah Lomba
            </a>
        </div>

        <!-- Daftar Lomba -->
        <!-- <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($lombas as $lomba)
                <div class="bg-green-50 p-4 rounded-lg shadow hover:shadow-md transition">
                    <h2 class="text-xl font-semibold text-green-900">{{ $lomba->judul }}</h2>
                    <p class="text-gray-700 mt-2">{{ Str::limit($lomba->deskripsi, 100) }}</p>
                    <div class="mt-4 flex justify-between items-center">
                        <a href="{{ route('lomba.show', $lomba->id) }}" class="text-blue-600 hover:underline">Lihat Detail</a>
                        <a href="{{ route('lomba.syarat', $lomba->id) }}" class="text-amber-600 hover:underline">Syarat & Ketentuan</a>
                    </div>
                </div> -->
            @endforeach
        </div>

        <!-- Tidak ada data -->
        @if($lombas->isEmpty())
            <p class="text-center text-gray-500 mt-10">Belum ada lomba yang tersedia.</p>
        @endif
    </div>
    @include(layout.footer)
</x-app-layout>
