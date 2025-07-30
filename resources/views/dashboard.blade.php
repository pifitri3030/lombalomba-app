<x-app-layout>
    @include('layout.header')

    <main class="px-6 py-10 bg-green-50 min-h-screen text-gray-800">
        <!-- Selamat Datang -->
        <section class="mb-10 text-center">
            <h2 class="text-3xl font-bold mb-4 text-green-800">🌿 Selamat Datang di LombaKita!</h2>
            <p class="text-lg max-w-2xl mx-auto">
                Ayo, jelajahi serunya perlombaan bernuansa alam yang menyegarkan dan penuh semangat!
                Jangan lewatkan kesempatan emas untuk menunjukkan bakat dan semangat kompetisimu bersama alam!
            </p>
        </section>

        <!-- 3 Contoh Lomba -->
        <section class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
            <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
                <h3 class="text-xl font-semibold text-green-700 mb-2">Lomba Fotografi Alam</h3>
                <p>Abadikan keindahan alam sekitarmu dan jadikan setiap momen berharga!</p>
            </div>
            <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
                <h3 class="text-xl font-semibold text-green-700 mb-2">Lomba Menulis Cerita Alam</h3>
                <p>Tuliskan kisah terbaikmu tentang alam yang menyentuh hati dan penuh makna.</p>
            </div>
            <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
                <h3 class="text-xl font-semibold text-green-700 mb-2">Lomba Video Pendek Peduli Lingkungan</h3>
                <p>Bagikan pesan pedulimu terhadap lingkungan lewat kreativitas video singkatmu!</p>
            </div>
        </section>

        <!-- Tombol ke Daftar Lomba -->
        <div class="text-center mb-10">
            <a href= "{{ route('lomba.index') }}" class="inline-block bg-green-700 hover:bg-green-800 text-white font-semibold px-6 py-3 rounded-full transition">
                📋 Lihat Daftar Lomba
            </a>
        </div>

        <!-- Kalimat Ajakan -->
        <section class="text-center mb-12 max-w-3xl mx-auto text-gray-700">
            <p class="text-lg mb-2">Sudah ratusan peserta bergabung dan menunjukkan kreativitasnya. Kini giliran kamu!</p>
            <p class="italic">Gabung bersama komunitas yang peduli pada alam, seni, dan masa depan bumi kita.</p>
        </section>

        
</x-app-layout>
