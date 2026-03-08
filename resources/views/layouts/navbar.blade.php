<nav class="bg-white shadow-sm fixed w-full top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 md:px-6 py-4">
            <div class="flex items-center justify-between">
                <div class="text-2xl font-bold text-cyan-500 tracking-tighter">FutsalArena</div>

                <div class="hidden lg:flex space-x-8">
                    <a href="#" class="text-gray-400 hover:text-cyan-500 font-semibold transition-colors">Beranda</a>
                    <a href="#jelajahi_lapangan" class="text-gray-400 hover:text-cyan-500 font-semibold">Cari
                        Lapangan</a>
                    <a href="/#partner" class="text-gray-400 hover:text-cyan-500 font-semibold">Partner</a>
                </div>

                <div class="flex items-center space-x-2 md:space-x-4">
                    @auth('api')
                        <div
                            class="flex items-center gap-2 md:gap-3 bg-gray-50 px-2 md:px-4 py-2 rounded-2xl border border-gray-100">
                            <div
                                class="w-8 h-8 bg-cyan-500 rounded-full flex items-center justify-center text-white font-bold text-xs uppercase">
                                {{ substr(auth()->guard('api')->user()->name, 0, 1) }}
                            </div>
                            <span class="text-gray-700 text-xs font-black hidden sm:block uppercase tracking-tighter">
                                {{ explode(' ', auth()->guard('api')->user()->name)[0] }}
                            </span>
                        </div>
                        <a
                            href="{{ auth()->guard('api')->user()->role === 'admin' ? route('admin.dashboard') : route('customer.dashboard') }}">
                            <button
                                class="bg-cyan-500 text-white px-4 md:px-6 py-2 rounded-xl hover:bg-cyan-600 transition-all font-bold text-xs md:text-sm shadow-lg shadow-cyan-100">
                                Dashboard
                            </button>
                        </a>
                    @endauth

                    @guest('api')
                        <a href="{{ route('LoginPage') }}"
                            class="text-gray-600 hover:text-gray-900 font-bold text-xs md:text-sm px-2">Masuk</a>
                        <a href="{{ route('RegisterPage') }}">
                            <button
                                class="bg-cyan-500 text-white px-4 md:px-6 py-2 rounded-xl hover:bg-cyan-600 transition-all font-bold text-xs md:text-sm shadow-lg shadow-cyan-100">
                                Daftar
                            </button>
                        </a>
                    @endguest

                    <button id="mobile-menu-btn" class="lg:hidden text-gray-400 p-2">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16m-7 6h7" />
                        </svg>
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