<!DOCTYPE html>
<html lang="id" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang | LombaKita</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans min-h-screen relative overflow-x-hidden">

    <!-- Background Video -->
    <video autoplay muted loop playsinline class="fixed top-0 left-0 w-full h-full object-cover -z-10">
        <source src="https://v1.pinimg.com/videos/mc/expMp4/de/4a/f8/de4af847992667117f0ee6fe4a71f42e_t3.mp4" type="video/mp4">
        Browser kamu tidak mendukung video tag.
    </video>

    <!-- Konten -->
    <div class="relative z-10">

        <!-- Header -->
        <header class="flex justify-between items-center px-6 py-4 bg-white/60 shadow-md sticky top-0 backdrop-blur-md z-50">
            <h1 class="text-2xl font-bold text-indigo-600" style="color : #8ABB6C" >LombaKita</h1>
            <nav class="space-x-4">
                <a href="{{ route('login') }}" class="text-[#8ABB6C] hover:underline">Login</a>
                <a href="{{ route('register') }}"
   class="bg-[#8ABB6C] text-white px-4 py-2 rounded-full hover:bg-[#6D9B50] transition">
   Daftar
</a>
            </nav>
        </header>

        <!-- Hero Section -->
        <main class="text-center py-16 px-4">
            <h2 class="text-4xl md:text-6xl font-extrabold mb-4 text-white drop-shadow-lg animate-fade-in-up">
                Selamat Datang di <span style="color : #bde6a4ff">LombaKita</span>!
            </h2>
            <p class="text-lg md:text-xl text-white/80 max-w-2xl mx-auto mb-8 drop-shadow">
                🌿 Siap ikut lomba seru di alam terbuka?
Login sekarang dan daftarkan dirimu jadi peserta!
Petualangan dimulai di sini. 🍃
            </p>

            <!-- CTA -->
            <div class="flex flex-col md:flex-row justify-center items-center gap-4 mb-16">
                <a href="{{ route('login') }}"
                   class="px-6 py-3 rounded-full bg-white text-indigo-600 font-semibold shadow hover:shadow-lg transition" style="color : #8ABB6C" >
                    Masuk
                </a>
                <a href="{{ route('register') }}"
   class="bg-[#8ABB6C] px-6 py-3 rounded-full text-white font-semibold shadow hover:bg-[#6D9B50] transition">
    Daftar Sekarang
</a>

            </div>

            <!-- Fitur Section -->
            <section class="grid gap-6 md:grid-cols-3">
                <div class="bg-white/80 backdrop-blur p-6 rounded-2xl shadow hover:shadow-lg transition text-center text-gray-800">
                    <div class="mb-4 text-pink-500 text-4xl">🏆</div>
                    <h3 class="text-xl font-bold mb-2" style="color : #059212" >Beragam Lomba</h3>
                    <p class="text-sm text-[#059212]">Tersedia kompetisi akademik, seni, olahraga & lainnya.</p>
                </div>
                <div class="bg-white/80 backdrop-blur p-6 rounded-2xl shadow hover:shadow-lg transition text-center text-gray-800">
                    <div class="mb-4 text-blue-500 text-4xl">👥</div>
                    <h3 class="text-xl font-bold mb-2 text-[#059212]">Komunitas Peserta</h3>
                    <p class="text-sm text-[#059212]">Bertemu & bersaing dengan peserta dari seluruh Indonesia.</p>
                </div>
                <div class="bg-white/80 backdrop-blur p-6 rounded-2xl shadow hover:shadow-lg transition text-center text-gray-800">
                    <div class="mb-4 text-yellow-500 text-4xl">🎁</div>
                    <h3 class="text-xl font-bold mb-2 text-[#059212]">Hadiah Menarik</h3>
                    <p class="text-sm text-[#059212]">Sertifikat, uang tunai, dan banyak reward eksklusif!</p>
                </div>
            </section>
        </main>

        <!-- Footer -->
        <footer class="text-center text-sm text-white/80 py-6 text-[#bde6a4ff]">
            &copy; {{ date('Y') }} LombaKita. All rights reserved.
        </footer>

    </div>
</body>
</html>