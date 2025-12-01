<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Belajar Bekerja - Internship Platform</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                    colors: {
                        'brand-yellow': '#F4C200',
                        'brand-yellow-dark': '#d4a900',
                        'brand-dark': '#1a1a1a',
                        'brand-gray': '#3D3D3D',
                    }
                }
            }
        }
    </script>
</head>

<body class="font-sans antialiased text-gray-900 bg-white">

    <nav class="sticky top-0 z-50 w-full bg-white/90 backdrop-blur-md shadow-sm border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            
            <div class="flex items-center gap-12">
                <a href="/" class="text-2xl font-extrabold text-gray-900 tracking-tight hover:text-brand-yellow transition">
                    belajar bekerja
                </a>

                <div class="hidden md:flex gap-8">
                    <a href="#" class="text-sm font-semibold text-gray-600 hover:text-brand-yellow transition duration-300">Redeem</a>
                    <a href="#" class="text-sm font-semibold text-gray-600 hover:text-brand-yellow transition duration-300">Program</a>
                    <a href="#" class="text-sm font-semibold text-gray-600 hover:text-brand-yellow transition duration-300">FAQ</a>
                    <a href="#" class="text-sm font-semibold text-gray-600 hover:text-brand-yellow transition duration-300">Komunitas</a>
                </div>
            </div>

            <div class="flex items-center gap-3">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" 
                           class="bg-brand-yellow text-gray-900 px-5 py-2.5 rounded-xl text-sm font-bold hover:bg-brand-yellow-dark transition shadow-sm">
                            Dashboard &rarr;
                        </a>
                    @else
                        <a href="{{ route('login') }}" 
                           class="hidden md:inline-block px-5 py-2.5 text-sm font-bold text-gray-700 border border-gray-200 rounded-xl hover:bg-gray-50 transition">
                            Log in
                        </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" 
                               class="bg-brand-yellow text-gray-900 px-5 py-2.5 rounded-xl text-sm font-bold hover:bg-brand-yellow-dark hover:shadow-md transition">
                                Register
                            </a>
                        @endif
                    @endauth
                @endif
            </div>
        </div>
    </nav>

    <header class="relative w-full py-24 md:py-32 flex flex-col justify-center items-center text-center px-6 bg-gradient-to-b from-brand-gray to-brand-dark text-white">
        <div class="max-w-3xl z-10">
            <h1 class="text-4xl md:text-6xl font-extrabold leading-tight mb-6">
                Raih pengalaman kerja nyata dan bangun portofolio impianmu!
            </h1>

            <p class="text-lg md:text-xl font-light text-gray-300 mb-10 leading-relaxed max-w-2xl mx-auto">
                Project-based Internship ini cocok banget buat kamu yang mau dapetin basic
                experiences atau portfolio sebelum masuk dunia industri.
            </p>

            <button class="bg-brand-yellow text-gray-900 px-8 py-4 rounded-xl text-lg font-bold hover:bg-brand-yellow-dark hover:scale-105 transition transform duration-300 shadow-xl ring-4 ring-yellow-500/20">
                Lihat Program Tersedia
            </button>
        </div>
    </header>

    <section class="py-20 px-6 bg-gray-50">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 text-gray-900">
                Mentor Berpengalaman
            </h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                @for ($i = 1; $i <= 8; $i++)
                <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl hover:-translate-y-1 transition duration-300 border border-gray-100 group">
                    <div class="h-64 w-full bg-gray-200 overflow-hidden">
                         <img src="https://i.pravatar.cc/500?img={{ $i + 10 }}" 
                              class="w-full h-full object-cover group-hover:scale-110 transition duration-700 ease-out" 
                              alt="Mentor {{ $i }}">
                    </div>
                    
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-gray-900 mb-1">Mentor Profesional {{ $i }}</h3>
                        <p class="text-sm font-medium text-brand-yellow-dark">Expert in Digital Marketing</p>
                    </div>
                </div>
                @endfor
            </div>
        </div>
    </section>

    <section class="py-20 px-6 bg-white border-t border-gray-100">
        <div class="max-w-7xl mx-auto text-center">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-12">
                Kami telah diliput oleh media terkemuka
            </h2>

            <div class="flex flex-wrap justify-center items-center gap-10 md:gap-16 opacity-60">
                <img src="https://upload.wikimedia.org/wikipedia/commons/1/1e/Logo_RRI.png" class="h-12 w-auto object-contain hover:opacity-100 hover:scale-110 transition duration-300 grayscale hover:grayscale-0" alt="RRI">
                <img src="https://upload.wikimedia.org/wikipedia/commons/d/d0/Pikiran_Rakyat_logo.png" class="h-8 w-auto object-contain hover:opacity-100 hover:scale-110 transition duration-300 grayscale hover:grayscale-0" alt="Pikiran Rakyat">
                <img src="https://upload.wikimedia.org/wikipedia/commons/4/4a/Kompas_logo.png" class="h-10 w-auto object-contain hover:opacity-100 hover:scale-110 transition duration-300 grayscale hover:grayscale-0" alt="Kompas">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/29/Detikcom_logo.png/800px-Detikcom_logo.png" class="h-10 w-auto object-contain hover:opacity-100 hover:scale-110 transition duration-300 grayscale hover:grayscale-0" alt="Detik">
                <img src="https://upload.wikimedia.org/wikipedia/commons/4/4f/IDN_Times_Logo.png" class="h-8 w-auto object-contain hover:opacity-100 hover:scale-110 transition duration-300 grayscale hover:grayscale-0" alt="IDN Times">
            </div>
        </div>
    </section>

    <footer class="py-10 bg-brand-dark text-gray-400 border-t border-gray-800">
        <div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row justify-between items-center gap-6">
            <div class="text-2xl font-bold text-white tracking-tight">belajar bekerja</div>
            <div class="text-sm">
                &copy; {{ date('Y') }} Belajar Bekerja. All rights reserved.
            </div>
        </div>
    </footer>

</body>
</html>