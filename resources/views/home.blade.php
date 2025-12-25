<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FutsalArena - Booking Lapangan Online</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        html {
            scroll-behavior: smooth;
            scroll-padding-top: 100px;
        }
        /* Custom scrollbar untuk filter horizontal di mobile */
        .filter-container::-webkit-scrollbar {
            display: none;
        }
        .filter-container {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
</head>

<body class="bg-gray-50">
    <nav class="bg-white shadow-sm fixed w-full top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 md:px-6 py-4">
            <div class="flex items-center justify-between">
                <div class="text-2xl font-bold text-cyan-500 tracking-tighter">FutsalArena</div>
                
                <div class="hidden lg:flex space-x-8">
                    <a href="#" class="text-gray-400 hover:text-cyan-500 font-semibold transition-colors">Beranda</a>
                    <a href="#jelajahi_lapangan" class="text-gray-400 hover:text-cyan-500 font-semibold">Cari Lapangan</a>
                    <a href="/#partner" class="text-gray-400 hover:text-cyan-500 font-semibold">Partner</a>
                </div>

                <div class="flex items-center space-x-2 md:space-x-4">
                    @auth('api')
                        <div class="flex items-center gap-2 md:gap-3 bg-gray-50 px-2 md:px-4 py-2 rounded-2xl border border-gray-100">
                            <div class="w-8 h-8 bg-cyan-500 rounded-full flex items-center justify-center text-white font-bold text-xs uppercase">
                                {{ substr(auth()->guard('api')->user()->name, 0, 1) }}
                            </div>
                            <span class="text-gray-700 text-xs font-black hidden sm:block uppercase tracking-tighter">
                                {{ explode(' ', auth()->guard('api')->user()->name)[0] }}
                            </span>
                        </div>
                        <a href="{{ auth()->guard('api')->user()->role === 'admin' ? route('admin.dashboard') : route('customer.dashboard') }}">
                            <button class="bg-cyan-500 text-white px-4 md:px-6 py-2 rounded-xl hover:bg-cyan-600 transition-all font-bold text-xs md:text-sm shadow-lg shadow-cyan-100">
                                Dashboard
                            </button>
                        </a>
                    @endauth

                    @guest('api')
                        <a href="{{ route('LoginPage') }}" class="text-gray-600 hover:text-gray-900 font-bold text-xs md:text-sm px-2">Masuk</a>
                        <a href="{{ route('RegisterPage') }}">
                            <button class="bg-cyan-500 text-white px-4 md:px-6 py-2 rounded-xl hover:bg-cyan-600 transition-all font-bold text-xs md:text-sm shadow-lg shadow-cyan-100">
                                Daftar
                            </button>
                        </a>
                    @endguest

                    <button id="mobile-menu-btn" class="lg:hidden text-gray-400 p-2">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/></svg>
                    </button>
                </div>
            </div>
        </div>

        <div id="mobile-menu" class="hidden lg:hidden bg-white border-t px-4 py-4 space-y-4 shadow-xl">
            <a href="#" class="block text-gray-600 font-bold">Beranda</a>
            <a href="#jelajahi_lapangan" class="block text-gray-600 font-bold">Cari Lapangan</a>
            <a href="#partner" class="block text-gray-600 font-bold">Partner</a>
        </div>
    </nav>

    <section class="pt-24 px-4 md:px-6 relative">
        <div class="max-w-7xl mx-auto relative">
            <div class="relative bg-gradient-to-r from-cyan-400 to-blue-500 rounded-[2rem] shadow-xl min-h-[450px] md:min-h-[550px] flex items-center justify-center p-6 md:p-12">
                <div class="absolute inset-0 rounded-[2rem] overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1574629810360-7efbbe195018?w=1400&h=600&fit=crop"
                        alt="Lapangan Futsal" class="w-full h-full object-cover mix-blend-overlay opacity-50">
                </div>

                <div class="relative z-10 text-center max-w-4xl mx-auto mb-16 md:mb-24">
                    <h1 class="text-3xl md:text-6xl font-bold text-white mb-6 leading-tight">
                        Jelajahi Dunia Futsal<br class="hidden md:block">dan Nikmati Pertandingannya
                    </h1>
                    <p class="text-white text-sm md:text-xl opacity-90 max-w-2xl mx-auto">
                        Temukan dan tuliskan pengalaman bertandingmu di berbagai lapangan terbaik.
                    </p>
                </div>

                <div class="absolute bottom-0 left-1/2 -translate-x-1/2 translate-y-1/2 w-[90%] lg:w-full max-w-5xl z-20">
                    <div data-aos="fade-up" class="bg-white rounded-[1.5rem] md:rounded-[2.5rem] p-5 md:p-10 shadow-[0_20px_50px_rgba(0,0,0,0.15)] border border-gray-100">
                        <div class="flex items-center justify-center gap-6 md:gap-10 mb-6 md:mb-8 border-b border-gray-100 relative">
                            <button class="pb-4 text-cyan-500 font-bold border-b-2 border-cyan-500 text-xs md:text-base whitespace-nowrap uppercase tracking-widest">
                                Cari Jadwal Lapangan
                            </button>
                        </div>

                        <form action="#" class="flex flex-col md:flex-row items-stretch md:items-end gap-4 md:gap-6 max-w-3xl mx-auto">
                            <div class="space-y-2 flex-grow text-left">
                                <label class="text-[10px] md:text-xs font-black text-gray-400 uppercase tracking-widest ml-1">
                                    Pilih Tanggal Main
                                </label>
                                <div class="flex items-center gap-3 bg-gray-50 p-3 md:p-4 rounded-2xl border border-transparent focus-within:border-cyan-200 transition-all">
                                    <input type="date" class="bg-transparent w-full focus:outline-none text-gray-800 font-bold text-sm cursor-pointer">
                                </div>
                            </div>

                            <div class="w-full md:w-auto">
                                <a href="#jelajahi_lapangan"
                                    class="bg-cyan-500 hover:bg-cyan-600 text-white px-8 rounded-2xl shadow-xl shadow-cyan-100 transition-all flex items-center justify-center h-[52px] md:h-[60px] w-full md:min-w-[200px] group">
                                    <svg class="w-5 h-5 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                    </svg>
                                    <span class="ml-2 font-black text-xs md:text-sm uppercase tracking-widest">Cari Lapangan</span>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="h-40 md:h-56"></div>

    <section class="py-16 px-4 md:px-6">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col lg:flex-row justify-between items-start lg:items-end mb-10 gap-6">
                <div data-aos="fade-right">
                    <h2 class="text-3xl md:text-4xl font-black text-gray-900 mb-2 tracking-tight">Lapangan Populer</h2>
                    <p class="text-gray-500 font-bold italic">Mari nikmati pertandinganmu</p>
                </div>
                <p class="text-gray-400 max-w-md text-sm md:text-base font-medium leading-relaxed" data-aos="fade-left">
                    Destinasi lapangan paling populer berdasarkan jumlah pesanan terbanyak oleh komunitas kami.
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8" data-aos="fade-up">
                @foreach($popularFields as $popular)
                <div class="bg-white rounded-[2rem] overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 group border border-gray-50">
                    <div class="relative overflow-hidden h-56">
                        <img src="{{ $popular->image_url ? asset('storage/' . $popular->image_url) : 'https://images.unsplash.com/photo-1529900748604-07564a03e7a6?w=400&h=300&fit=crop' }}"
                            alt="{{ $popular->nama_lapangan }}" 
                            class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
                        
                        <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm px-4 py-1.5 rounded-full shadow-lg">
                            <span class="text-cyan-600 text-[10px] font-black uppercase tracking-tighter">
                                {{ $popular->bookings_count }} Pesanan
                            </span>
                        </div>

                        <div class="absolute bottom-4 left-4">
                            <span class="px-4 py-1.5 bg-cyan-500 text-white text-[10px] font-black uppercase rounded-xl shadow-xl">
                                TOP #{{ $loop->iteration }}
                            </span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="font-black text-gray-900 text-lg mb-1 group-hover:text-cyan-500 transition-colors uppercase tracking-tight">
                            {{ $popular->nama_lapangan }}
                        </h3>
                        <div class="flex items-center justify-between mt-4">
                            <div class="flex items-center text-gray-400 text-[10px] font-black uppercase tracking-widest">
                                <span class="mr-2 text-cyan-500">{{ $popular->tipe_lapangan }}</span> 
                            </div>
                            <div class="text-right">
                                <p class="text-sm font-black text-gray-900">Rp {{ number_format($popular->harga_per_jam, 0, ',', '.') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-20 px-4 md:px-6 bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16 md:mb-24" data-aos="fade-up">
                <h2 class="text-3xl md:text-5xl font-black text-gray-900 mb-6 leading-tight">Bertanding untuk membuat<br class="hidden md:block"> kenangan manis</h2>
                <p class="text-gray-500 text-sm md:text-lg font-medium">Temukan jadwal pertandingan yang sesuai dengan gaya hidupmu</p>
            </div>

            <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-20">
                <div class="w-full lg:w-1/2 space-y-10 md:space-y-16" data-aos="fade-right">
                    <div class="flex gap-6">
                        <span class="flex-shrink-0 w-12 h-12 bg-blue-50 text-blue-500 rounded-2xl flex items-center justify-center text-sm font-black">01</span>
                        <div class="space-y-2">
                            <h3 class="text-xl md:text-2xl font-black text-gray-900 tracking-tight">Temukan jadwal sesuai kebebasanmu</h3>
                            <p class="text-gray-500 text-sm md:text-base leading-relaxed">Futsal menawarkan kebebasan dan fleksibilitas, melatih fokus dan spontanitas.</p>
                        </div>
                    </div>

                    <div class="flex gap-6">
                        <span class="flex-shrink-0 w-12 h-12 bg-cyan-50 text-cyan-500 rounded-2xl flex items-center justify-center text-sm font-black">02</span>
                        <div class="space-y-2">
                            <h3 class="text-xl md:text-2xl font-black text-gray-900 tracking-tight">Kembali aktif dengan berolahraga</h3>
                            <p class="text-gray-500 text-sm md:text-base leading-relaxed">Lapangan adalah tempat bermain di mana kamu akhirnya bisa mengeksplorasi kemampuan fisikmu.</p>
                        </div>
                    </div>

                    <div class="flex gap-6">
                        <span class="flex-shrink-0 w-12 h-12 bg-green-50 text-green-500 rounded-2xl flex items-center justify-center text-sm font-black">03</span>
                        <div class="space-y-2">
                            <h3 class="text-xl md:text-2xl font-black text-gray-900 tracking-tight">Bangkitkan semangat berkompetisi</h3>
                            <p class="text-gray-500 text-sm md:text-base leading-relaxed">Ada banyak alasan untuk mencintai futsal, salah satunya adalah kebersamaan tim.</p>
                        </div>
                    </div>
                </div>

                <div class="w-full lg:w-1/2" data-aos="fade-left">
                    <div class="relative w-full max-w-lg mx-auto aspect-[4/5] rounded-[3rem] overflow-hidden shadow-[0_30px_60px_rgba(0,0,0,0.15)]">
                        <img src="https://images.unsplash.com/photo-1510566337590-2fc1f21d0faa?w=600&h=800&fit=crop"
                            alt="Bola Futsal" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="jelajahi_lapangan" class="py-20 px-4 md:px-6 bg-gray-50">
        <div class="max-w-7xl mx-auto">
            <div class="mb-12">
                <h2 class="text-3xl md:text-4xl font-black text-gray-900 mb-2 tracking-tight">Jelajahi lebih banyak</h2>
                <p class="text-gray-500 font-bold italic">Mari kita mulai petualangan ini</p>
            </div>

            <div class="filter-container flex overflow-x-auto items-center gap-3 mb-12 pb-2">
                <button onclick="filterLapangan('Semua', this)" class="btn-filter flex-shrink-0 px-8 py-3 bg-cyan-500 text-white rounded-2xl text-xs font-black uppercase tracking-widest shadow-xl shadow-cyan-100 transition-all">Semua</button>
                <button onclick="filterLapangan('Besar', this)" class="btn-filter flex-shrink-0 px-8 py-3 bg-white text-gray-400 rounded-2xl text-xs font-black uppercase tracking-widest shadow-sm border border-gray-100 transition-all">Besar</button>
                <button onclick="filterLapangan('Sedang', this)" class="btn-filter flex-shrink-0 px-8 py-3 bg-white text-gray-400 rounded-2xl text-xs font-black uppercase tracking-widest shadow-sm border border-gray-100 transition-all">Sedang</button>
                <button onclick="filterLapangan('Kecil', this)" class="btn-filter flex-shrink-0 px-8 py-3 bg-white text-gray-400 rounded-2xl text-xs font-black uppercase tracking-widest shadow-sm border border-gray-100 transition-all">Kecil</button>
            </div>

            <div id="field-grid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 md:gap-10">
                @include('partials.field_list')
            </div>

            <div class="mt-20 text-center">
                <a href="{{ route('fields.explore') }}" class="px-12 py-5 bg-white text-gray-900 font-black text-xs uppercase tracking-[0.2em] rounded-[2rem] border border-gray-100 shadow-xl hover:bg-cyan-500 hover:text-white transition-all inline-block">
                    Lihat Lapangan Lainnya
                </a>
            </div>
        </div>
    </section>

    <section id="partner" class="py-16 md:py-24 bg-white border-y border-gray-50 overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <div class="relative inline-block mb-16" data-aos="fade-up">
            <p class="text-[11px] md:text-sm font-black uppercase tracking-[0.5em] text-cyan-500 mb-2">
                Trusted Partners
            </p>
            <h2 class="text-2xl md:text-4xl font-black text-gray-900 uppercase tracking-tight">
                Partner Resmi Kami
            </h2>
            <div class="w-12 md:w-20 h-1.5 bg-cyan-500 mx-auto mt-4 rounded-full"></div>
        </div>

        <div data-aos="fade-up" class="flex flex-wrap justify-center items-center gap-12 md:gap-24 opacity-40 grayscale hover:grayscale-0 transition-all duration-1000 ease-in-out px-4">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a6/Logo_NIKE.svg/1200px-Logo_NIKE.svg.png" 
                 alt="Nike" class="h-6 md:h-12 w-auto object-contain hover:scale-110 transition-transform">
            
            <img src="https://www.logo.wine/a/logo/Adidas/Adidas-Logo.wine.svg" 
                 alt="Adidas" class="h-12 md:h-20 w-auto object-contain hover:scale-110 transition-transform">
            
            <img src="https://www.logo.wine/a/logo/Puma_(brand)/Puma_(brand)-Logo.wine.svg" 
                 alt="Puma" class="h-14 md:h-24 w-auto object-contain hover:scale-110 transition-transform">
            
            <img src="https://www.logo.wine/a/logo/Mizuno_Corporation/Mizuno_Corporation-Logo.wine.svg" 
                 alt="Mizuno" class="h-12 md:h-20 w-auto object-contain hover:scale-110 transition-transform">
        </div>
    </div>
</section>

    <section class="py-20 px-4 md:px-6 bg-gary-50">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col md:flex-row items-center justify-between mb-12 gap-6">
                <h2 data-aos="fade-right" class="text-3xl md:text-4xl font-black text-gray-900 tracking-tight text-center md:text-left">Pesan tiket dan tanding sekarang!</h2>
                <a data-aos="fade-left" href="{{ route('fields.explore') }}" class="w-full md:w-auto">
                    <button class="w-full md:w-auto bg-cyan-500 hover:bg-cyan-600 text-white px-10 py-4 rounded-2xl font-black text-xs uppercase tracking-widest transition-all shadow-xl shadow-cyan-100">
                        Pesan sekarang
                    </button>
                </a>
            </div>

            <div data-aos="fade-up" class="overflow-hidden rounded-[2.5rem] aspect-video shadow-[0_30px_60px_rgba(0,0,0,0.15)] border-8 border-white">
                <iframe class="w-full h-full" src="https://www.youtube.com/embed/TuWMpxlRgio?si=ZeDBWNaBD6PeG0Q_" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
    </section>

    <footer class="bg-white py-20 px-4 md:px-6 border-t border-gray-50">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-12 md:gap-16">
                <div class="lg:col-span-2">
                    <div class="text-3xl font-black text-cyan-500 mb-8 tracking-tighter uppercase">FutsalArena</div>
                    <p class="text-gray-400 text-sm mb-8 max-w-xs leading-relaxed font-bold">
                        Rasakan pengalaman bertanding di tempat paling indah di planet ini. Booking lapangan favoritmu sekarang.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="w-12 h-12 bg-gray-50 text-gray-400 rounded-2xl flex items-center justify-center hover:bg-cyan-500 hover:text-white transition-all shadow-sm"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg></a>
                        <a href="#" class="w-12 h-12 bg-gray-50 text-gray-400 rounded-2xl flex items-center justify-center hover:bg-cyan-500 hover:text-white transition-all shadow-sm"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.84 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg></a>
                    </div>
                </div>

                <div class="space-y-6">
                    <h3 class="font-black text-gray-900 uppercase text-[10px] tracking-[0.3em]">Tentang</h3>
                    <ul class="space-y-4 text-gray-400 text-sm font-bold">
                        <li><a href="#" class="hover:text-cyan-500 transition-colors">Tentang kami</a></li>
                        <li><a href="#" class="hover:text-cyan-500 transition-colors">Fitur</a></li>
                        <li><a href="#" class="hover:text-cyan-500 transition-colors">Berita</a></li>
                    </ul>
                </div>

                <div class="space-y-6">
                    <h3 class="font-black text-gray-900 uppercase text-[10px] tracking-[0.3em]">Perusahaan</h3>
                    <ul class="space-y-4 text-gray-400 text-sm font-bold">
                        <li><a href="#" class="hover:text-cyan-500 transition-colors">Mitra Kami</a></li>
                        <li><a href="#" class="hover:text-cyan-500 transition-colors">FAQ</a></li>
                    </ul>
                </div>

                <div class="space-y-6">
                    <h3 class="font-black text-gray-900 uppercase text-[10px] tracking-[0.3em]">Dukungan</h3>
                    <ul class="space-y-4 text-gray-400 text-sm font-bold">
                        <li><a href="#" class="hover:text-cyan-500 transition-colors">Bantuan</a></li>
                        <li><a href="#" class="hover:text-cyan-500 transition-colors">Kontak</a></li>
                    </ul>
                </div>
            </div>
            <div class="mt-20 pt-8 border-t border-gray-50 text-center">
                <p class="text-[10px] font-black text-gray-300 uppercase tracking-[0.4em]">&copy; 2025 FutsalArena International Group</p>
            </div>
        </div>
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({ duration: 1000, once: false });

        // Mobile Menu Logic
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        function filterLapangan(ukuran, btn) {
            document.querySelectorAll('.btn-filter').forEach(el => {
                el.classList.remove('bg-cyan-500', 'text-white', 'shadow-xl', 'shadow-cyan-100');
                el.classList.add('bg-white', 'text-gray-400', 'border-gray-100');
            });

            btn.classList.add('bg-cyan-500', 'text-white', 'shadow-xl', 'shadow-cyan-100');
            btn.classList.remove('bg-white', 'text-gray-400', 'border-gray-100');

            const grid = document.getElementById('field-grid');
            grid.style.opacity = '0.5';

            fetch(`/?ukuran=${ukuran}`, {
                headers: { "X-Requested-With": "XMLHttpRequest" }
            })
            .then(response => response.text())
            .then(html => {
                grid.innerHTML = html;
                grid.style.opacity = '1';
                if (typeof AOS !== 'undefined') AOS.refresh();
            })
            .catch(error => {
                console.error('Error:', error);
                grid.style.opacity = '1';
            });
        }
    </script>
</body>

</html>