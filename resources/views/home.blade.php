<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FutsalArena - Booking Lapangan Online</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        html, body {
        scroll-behavior: smooth;
        scroll-padding-top: 100px;
        max-width: 100%;
        overflow-x: hidden;
        position: relative;
    }

    body {
        font-family: 'Plus Jakarta Sans', sans-serif;
    }

    .filter-container::-webkit-scrollbar { display: none; }
    .filter-container { -ms-overflow-style: none; scrollbar-width: none; }
    </style>
</head>

<body class="bg-gray-50">
    

    @include('layouts.navbar')

    <section class="relative min-h-screen flex items-center justify-center overflow-hidden bg-white pt-20">
    <div class="absolute inset-0 z-0 opacity-40" style="background-image: radial-gradient(#e5e7eb 1.5px, transparent 1.5px); background-size: 30px 30px;"></div>

    <div class="container mx-auto px-4 relative z-10 text-center">
        <div class="inline-flex items-center gap-2 bg-indigo-50 text-cyan-500 px-4 py-1.5 rounded-full mb-8 border border-indigo-100 shadow-sm">
            <span class="w-2 h-2 bg-cyan-600 rounded-full animate-ping"></span>
            <span class="text-xs font-bold uppercase tracking-wider">Platform Booking Futsal #1 di Indonesia</span>
        </div>

        <h1 class="text-4xl md:text-7xl font-extrabold text-slate-900 leading-[1.1] mb-6">
            Jelajahi Dunia Futsal yang <br> 
            <span class="relative inline-block text-cyan-500">
                Menambah Semangat
                <svg class="absolute -bottom-2 left-0 w-full h-3 text-yellow-400" viewBox="0 0 100 10" preserveAspectRatio="none">
                    <path d="M0 5 Q 50 10 100 5" stroke="currentColor" stroke-width="4" fill="transparent" stroke-linecap="round"/>
                </svg>
            </span>
        </h1>

        <p class="text-slate-500 text-lg md:text-xl max-w-2xl mx-auto mb-10 leading-relaxed font-medium">
            Platform all-in-one untuk booking lapangan, cari lawan tanding, dan ikut turnamen terbaik. 
            Dengan proses instan, pembayaran aman, dan lapangan berkualitas.
        </p>

        <div class="flex flex-col sm:flex-row items-center justify-center gap-4 mb-12">
            <a href="{{ route('fields.explore') }}" class="group relative px-8 py-4 bg-cyan-500 text-white rounded-full font-bold text-lg shadow-[0_15px_30px_-10px_rgba(30,27,75,0.5)] hover:scale-105 transition-all">
                Mulai Booking Sekarang
            </a>
            <a href="#jelajahi_lapangan" class="flex items-center gap-2 px-8 py-4 bg-white text-slate-700 border border-slate-200 rounded-full font-bold text-lg hover:bg-slate-50 transition-all">
                Lihat Daftar Lapangan
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                </svg>
            </a>
        </div>

        <div class="flex flex-col items-center gap-2">
            <div class="flex gap-1 text-yellow-400">
                <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
            </div>
            <p class="text-slate-400 text-sm font-semibold">Dipercaya oleh <span class="text-slate-900">10,000+ pemain futsal</span> di seluruh Indonesia</p>
        </div>
    </div>
</section>

    <!-- <div class="h-40 md:h-56"></div> -->

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
                    <div
                        class="bg-white rounded-[2rem] overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 group border border-gray-50">
                        <div class="relative overflow-hidden h-56">
                            <img src="{{ $popular->image_url ? asset('storage/' . $popular->image_url) : 'https://images.unsplash.com/photo-1529900748604-07564a03e7a6?w=400&h=300&fit=crop' }}"
                                alt="{{ $popular->nama_lapangan }}"
                                class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">

                            <div
                                class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm px-4 py-1.5 rounded-full shadow-lg">
                                <span class="text-cyan-600 text-[10px] font-black uppercase tracking-tighter">
                                    {{ $popular->bookings_count }} Pesanan
                                </span>
                            </div>

                            <div class="absolute bottom-4 left-4">
                                <span
                                    class="px-4 py-1.5 bg-cyan-500 text-white text-[10px] font-black uppercase rounded-xl shadow-xl">
                                    TOP #{{ $loop->iteration }}
                                </span>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3
                                class="font-black text-gray-900 text-lg mb-1 group-hover:text-cyan-500 transition-colors uppercase tracking-tight">
                                {{ $popular->nama_lapangan }}
                            </h3>
                            <div class="flex items-center justify-between mt-4">
                                <div
                                    class="flex items-center text-gray-400 text-[10px] font-black uppercase tracking-widest">
                                    <span class="mr-2 text-cyan-500">{{ $popular->tipe_lapangan }}</span>
                                </div>
                                <div class="text-right">
                                    <p class="text-sm font-black text-gray-900">Rp
                                        {{ number_format($popular->harga_per_jam, 0, ',', '.') }}</p>
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
                <h2 class="text-3xl md:text-5xl font-black text-gray-900 mb-6 leading-tight">Bertanding untuk membuat<br
                        class="hidden md:block"> kenangan manis</h2>
                <p class="text-gray-500 text-sm md:text-lg font-medium">Temukan jadwal pertandingan yang sesuai dengan
                    gaya hidupmu</p>
            </div>

            <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-20">
                <div class="w-full lg:w-1/2 space-y-10 md:space-y-16" data-aos="fade-right">
                    <div class="flex gap-6">
                        <span
                            class="flex-shrink-0 w-12 h-12 bg-blue-50 text-blue-500 rounded-2xl flex items-center justify-center text-sm font-black">01</span>
                        <div class="space-y-2">
                            <h3 class="text-xl md:text-2xl font-black text-gray-900 tracking-tight">Temukan jadwal
                                sesuai kebebasanmu</h3>
                            <p class="text-gray-500 text-sm md:text-base leading-relaxed">Futsal menawarkan kebebasan
                                dan fleksibilitas, melatih fokus dan spontanitas.</p>
                        </div>
                    </div>

                    <div class="flex gap-6">
                        <span
                            class="flex-shrink-0 w-12 h-12 bg-cyan-50 text-cyan-500 rounded-2xl flex items-center justify-center text-sm font-black">02</span>
                        <div class="space-y-2">
                            <h3 class="text-xl md:text-2xl font-black text-gray-900 tracking-tight">Kembali aktif dengan
                                berolahraga</h3>
                            <p class="text-gray-500 text-sm md:text-base leading-relaxed">Lapangan adalah tempat bermain
                                di mana kamu akhirnya bisa mengeksplorasi kemampuan fisikmu.</p>
                        </div>
                    </div>

                    <div class="flex gap-6">
                        <span
                            class="flex-shrink-0 w-12 h-12 bg-green-50 text-green-500 rounded-2xl flex items-center justify-center text-sm font-black">03</span>
                        <div class="space-y-2">
                            <h3 class="text-xl md:text-2xl font-black text-gray-900 tracking-tight">Bangkitkan semangat
                                berkompetisi</h3>
                            <p class="text-gray-500 text-sm md:text-base leading-relaxed">Ada banyak alasan untuk
                                mencintai futsal, salah satunya adalah kebersamaan tim.</p>
                        </div>
                    </div>
                </div>

                <div class="w-full lg:w-1/2" data-aos="fade-left">
                    <div
                        class="relative w-full max-w-lg mx-auto aspect-[4/5] rounded-[3rem] overflow-hidden shadow-[0_30px_60px_rgba(0,0,0,0.15)]">
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
                <button onclick="filterLapangan('Semua', this)"
                    class="btn-filter flex-shrink-0 px-8 py-3 bg-cyan-500 text-white rounded-2xl text-xs font-black uppercase tracking-widest shadow-xl shadow-cyan-100 transition-all">Semua</button>
                <button onclick="filterLapangan('Besar', this)"
                    class="btn-filter flex-shrink-0 px-8 py-3 bg-white text-gray-400 rounded-2xl text-xs font-black uppercase tracking-widest shadow-sm border border-gray-100 transition-all">Besar</button>
                <button onclick="filterLapangan('Sedang', this)"
                    class="btn-filter flex-shrink-0 px-8 py-3 bg-white text-gray-400 rounded-2xl text-xs font-black uppercase tracking-widest shadow-sm border border-gray-100 transition-all">Sedang</button>
                <button onclick="filterLapangan('Kecil', this)"
                    class="btn-filter flex-shrink-0 px-8 py-3 bg-white text-gray-400 rounded-2xl text-xs font-black uppercase tracking-widest shadow-sm border border-gray-100 transition-all">Kecil</button>
            </div>

            <div id="field-grid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 md:gap-10">
                @include('partials.field_list')
            </div>

            <div class="mt-20 text-center">
                <a href="{{ route('fields.explore') }}"
                    class="px-12 py-5 bg-white text-gray-900 font-black text-xs uppercase tracking-[0.2em] rounded-[2rem] border border-gray-100 shadow-xl hover:bg-cyan-500 hover:text-white transition-all inline-block">
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

            <div data-aos="fade-up"
                class="flex flex-wrap justify-center items-center gap-12 md:gap-24 opacity-40 grayscale hover:grayscale-0 transition-all duration-1000 ease-in-out px-4">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a6/Logo_NIKE.svg/1200px-Logo_NIKE.svg.png"
                    alt="Nike" class="h-6 md:h-12 w-auto object-contain hover:scale-110 transition-transform">

                <img src="https://www.logo.wine/a/logo/Adidas/Adidas-Logo.wine.svg" alt="Adidas"
                    class="h-12 md:h-20 w-auto object-contain hover:scale-110 transition-transform">

                <img src="https://www.logo.wine/a/logo/Puma_(brand)/Puma_(brand)-Logo.wine.svg" alt="Puma"
                    class="h-14 md:h-24 w-auto object-contain hover:scale-110 transition-transform">

                <img src="https://www.logo.wine/a/logo/Mizuno_Corporation/Mizuno_Corporation-Logo.wine.svg" alt="Mizuno"
                    class="h-12 md:h-20 w-auto object-contain hover:scale-110 transition-transform">
            </div>
        </div>
    </section>

    <section class="py-20 px-4 md:px-6 bg-gary-50">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col md:flex-row items-center justify-between mb-12 gap-6">
                <h2 data-aos="fade-right"
                    class="text-3xl md:text-4xl font-black text-gray-900 tracking-tight text-center md:text-left">Pesan
                    tiket dan tanding sekarang!</h2>
                <a data-aos="fade-left" href="{{ route('fields.explore') }}" class="w-full md:w-auto">
                    <button
                        class="w-full md:w-auto bg-cyan-500 hover:bg-cyan-600 text-white px-10 py-4 rounded-2xl font-black text-xs uppercase tracking-widest transition-all shadow-xl shadow-cyan-100">
                        Pesan sekarang
                    </button>
                </a>
            </div>

            <div data-aos="fade-up"
                class="overflow-hidden rounded-[2.5rem] aspect-video shadow-[0_30px_60px_rgba(0,0,0,0.15)] border-8 border-white">
                <iframe class="w-full h-full" src="https://www.youtube.com/embed/TuWMpxlRgio?si=ZeDBWNaBD6PeG0Q_"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>
        </div>
    </section>

    @include('layouts.footer')

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