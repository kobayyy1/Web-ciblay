@extends('layouts.panel.app')

@section('content')
    <div>
        <section class="bg-white py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="relative mb-10">
                    <div class="absolute -top-9 left-6 sm:left-8 z-10 flex items-end gap-3 select-none">
                        <img src="{{ asset('images/icon-doc.png') }}" alt="Docs"
                            class="h-12 w-auto object-contain drop-shadow-md">
                        <img src="{{ asset('images/icon-notice.png') }}" alt="Notice"
                            class="h-7 object-contain drop-shadow-md">
                        <div class="inline-flex items-center gap-1.5">
                            @for ($i = 0; $i < 3; $i++)
                                <div class="grid grid-cols-2 gap-0.5">
                                    <span class="w-2 h-2 bg-[#ff9f1c] rounded-[1px]"></span>
                                    <span class="w-2 h-2 bg-transparent"></span>
                                    <span class="w-2 h-2 bg-transparent"></span>
                                    <span class="w-2 h-2 bg-[#ff9f1c] rounded-[1px]"></span>
                                </div>
                            @endfor
                        </div>
                    </div>
                    <div
                        class="absolute top-1/2 -translate-y-1/2 right-6 sm:right-8 z-10 flex flex-col items-end gap-1 select-none">
                        <div class="w-36 h-[1.5px] bg-white opacity-20"></div>
                        <img src="{{ asset('images/icon/arrow-bold.png') }}" alt="Aksen"
                            class="h-10 w-auto object-contain drop-shadow-md">
                    </div>
                    <div
                        class="bg-[#0f2440] text-white px-6 sm:px-8 pt-8 pb-6 rounded-2xl shadow-sm overflow-hidden min-h-[100px] relative">
                        <div class="absolute bottom-0 left-0 w-full h-1.5 bg-[#ff9f1c]"></div>
                        <h1 class="text-2xl sm:text-4xl font-black tracking-tight">Data Penelitian:</h1>
                    </div>
                </div>
                <div class="flex justify-start mb-8">
                    <button
                        class="inline-flex items-center gap-2 bg-[#0f2440] text-white text-xs font-bold px-4 py-2 rounded-lg shadow-sm hover:bg-[#ff9f1c] hover:text-[#0f2440] transition-colors group">
                        Terbaru
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3"
                            stroke="currentColor"
                            class="w-3 h-3 transform group-hover:translate-x-0.5 transition-transform text-[#ff9f1c] group-hover:text-[#0f2440]">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </button>
                </div>

                {{-- ===== DATA DUMMY ===== --}}
                @php
                    $penelitians = [
                        [
                            'gambar' => 'images/berita1.png',
                            'judul' => 'Pilihan Bahasa Masyarakat Viqueque di Desa Oebelo',
                            'sub' => 'Studi Kasus Identitas Bahasa di Kalangan Komunitas Pengungsi Eks Timor Timur',
                        ],
                        [
                            'gambar' => 'images/berita1.png',
                            'judul' => 'Revitalisasi Kesenian Tradisional Minangkabau di Era Digital',
                            'sub' => 'Kajian Etnografi terhadap Pertunjukan Randai di Kota Padangpanjang',
                        ],
                        [
                            'gambar' => 'images/berita1.png',
                            'judul' => 'Transformasi Estetika Batik Tanah Liek dalam Konteks Pariwisata',
                            'sub' => 'Analisis Visual dan Semiotika pada Produk Kerajinan Lokal Sumatera Barat',
                        ],
                        [
                            'gambar' => 'images/berita1.png',
                            'judul' => 'Pergeseran Fungsi Tari Piring dalam Upacara Adat Minangkabau',
                            'sub' => 'Studi Komparatif antara Generasi Muda dan Generasi Tua di Solok',
                        ],
                        [
                            'gambar' => 'images/berita1.png',
                            'judul' => 'Dokumentasi Musik Tradisional Talempong sebagai Warisan Budaya',
                            'sub' => 'Pendekatan Etnomusikologi dalam Pelestarian Alat Musik Daerah',
                        ],
                        [
                            'gambar' => 'images/berita1.png',
                            'judul' => 'Ekspresi Identitas Budaya Melalui Motif Songket Silungkang',
                            'sub' => 'Perspektif Antropologi Seni dalam Komunitas Penenun di Sawah Lunto',
                        ],
                        [
                            'gambar' => 'images/berita1.png',
                            'judul' => 'Peran Seni Pertunjukan dalam Pemberdayaan Ekonomi Kreatif',
                            'sub' => 'Studi Kasus Festival Budaya di Kabupaten Agam, Sumatera Barat',
                        ],
                        [
                            'gambar' => 'images/berita1.png',
                            'judul' => 'Kajian Makna Simbolik pada Arsitektur Rumah Gadang',
                            'sub' => 'Interpretasi Ornamen dan Ragam Hias dalam Tradisi Visual Minangkabau',
                        ],
                        [
                            'gambar' => 'images/berita1.png',
                            'judul' => 'Adaptasi Sastra Lisan Kaba dalam Media Kontemporer',
                            'sub' => 'Analisis Naratif dan Penerimaan Khalayak pada Platform Digital',
                        ],
                    ];
                    $perPage = 3; // TESTING: 3 item per halaman → pagination langsung terlihat
                    $total = count($penelitians);
                    $totalPages = (int) ceil($total / $perPage);
                @endphp

                {{-- ===== CAROUSEL WRAPPER ===== --}}
                <div id="carousel-wrapper">

                    {{-- Halaman carousel --}}
                    @for ($page = 0; $page < $totalPages; $page++)
                        <div class="carousel-page {{ $page === 0 ? '' : 'hidden' }}" data-page="{{ $page }}">
                            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
                                @foreach (array_slice($penelitians, $page * $perPage, $perPage) as $i => $item)
                                    @php $isFirst = ($page === 0 && $i === 0); @endphp
                                    <div
                                        class="w-full aspect-[4/3] rounded-2xl overflow-hidden shadow-xl bg-gray-900 relative
                                            {{ $isFirst ? 'border-2 border-purple-600' : 'border border-gray-100 hover:shadow-lg' }}
                                            cursor-pointer group transition-all duration-300">

                                        <div
                                            class="absolute inset-0 bg-gradient-to-t from-[#0f2440]/95 via-transparent to-transparent z-10">
                                        </div>

                                        <img src="{{ asset($item['gambar']) }}" alt="{{ $item['judul'] }}"
                                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">

                                        <div class="absolute bottom-0 inset-x-0 p-5 z-20 text-left">
                                            <div class="flex items-start gap-1.5 mb-2">
                                                <div class="grid grid-cols-2 gap-0.5 mt-1 flex-shrink-0">
                                                    <span class="w-1.5 h-1.5 bg-[#ff9f1c] rounded-[1px]"></span>
                                                    <span class="w-1.5 h-1.5 bg-transparent"></span>
                                                    <span class="w-1.5 h-1.5 bg-transparent"></span>
                                                    <span class="w-1.5 h-1.5 bg-[#ff9f1c] rounded-[1px]"></span>
                                                </div>
                                                <h3 class="text-white font-extrabold text-sm sm:text-base leading-snug">
                                                    {{ $item['judul'] }}
                                                </h3>
                                            </div>
                                            <p class="text-gray-300 text-[10px] sm:text-xs font-light pl-4 leading-normal">
                                                {{ $item['sub'] }}
                                            </p>
                                        </div>

                                        <span
                                            class="absolute bottom-3 right-4 text-[8px] text-gray-400 opacity-60 font-light flex items-center gap-1 z-20">
                                            Institut Seni Indonesia Padangpanjang
                                            <svg class="w-2.5 h-2.5 text-[#ff9f1c]" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                                            </svg>
                                        </span>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endfor

                </div>
                {{-- /CAROUSEL WRAPPER --}}

                {{-- ===== PAGINATION + AKSEN ===== --}}
                <div
                    class="flex flex-col sm:flex-row items-center justify-between gap-6 border-t border-gray-100 pt-8 relative">

                    {{-- Spacer kiri --}}
                    <div class="hidden sm:block w-24"></div>

                    {{-- Pagination controls --}}
                    <div class="flex items-center gap-2 select-none" id="pagination-controls">

                        {{-- Prev --}}
                        <button id="btn-prev"
                            class="w-8 h-8 rounded-full border border-gray-300 flex items-center justify-center text-[#0f2440] hover:bg-[#0f2440] hover:text-white transition-all focus:outline-none shadow-sm disabled:opacity-30 disabled:cursor-not-allowed"
                            disabled>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3"
                                stroke="currentColor" class="w-3.5 h-3.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                            </svg>
                        </button>

                        {{-- Page number buttons --}}
                        <div class="flex items-center gap-1.5 text-xs font-bold font-mono" id="page-numbers">
                            @for ($p = 0; $p < $totalPages; $p++)
                                <button
                                    class="page-btn w-8 h-8 rounded-lg transition-colors
                                       {{ $p === 0 ? 'bg-[#0f2440] text-white' : 'text-gray-400 hover:bg-gray-100 hover:text-[#0f2440]' }}"
                                    data-target="{{ $p }}">
                                    {{ str_pad($p + 1, 2, '0', STR_PAD_LEFT) }}
                                </button>
                            @endfor
                        </div>

                        {{-- Next --}}
                        <button id="btn-next"
                            class="w-8 h-8 rounded-full border border-gray-300 flex items-center justify-center text-[#0f2440] hover:bg-[#0f2440] hover:text-white transition-all focus:outline-none shadow-sm {{ $totalPages <= 1 ? 'disabled:opacity-30 disabled:cursor-not-allowed' : '' }}"
                            {{ $totalPages <= 1 ? 'disabled' : '' }}>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3"
                                stroke="currentColor" class="w-3.5 h-3.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                            </svg>
                        </button>

                    </div>

                    {{-- Aksen gambar kanan --}}
                    <div class="flex items-center justify-center select-none self-end lg:self-auto">
                        <img src="{{ asset('images/icon/arrow-bold.png') }}" alt="Aksen"
                            class="w-36 h-36 object-contain transform -rotate-180 drop-shadow-md">
                    </div>

                </div>
                {{-- /PAGINATION --}}

            </div>
        </section>
    </div>

    {{-- ===== CAROUSEL SCRIPT ===== --}}
    <script>
        (function() {
            const totalPages = {{ $totalPages }};
            let currentPage = 0;

            const pages = document.querySelectorAll('.carousel-page');
            const pageBtns = document.querySelectorAll('.page-btn');
            const btnPrev = document.getElementById('btn-prev');
            const btnNext = document.getElementById('btn-next');

            function goTo(page) {
                if (page < 0 || page >= totalPages) return;

                // Sembunyikan halaman aktif, tampilkan halaman baru
                pages[currentPage].classList.add('hidden');
                pages[page].classList.remove('hidden');

                // Update style tombol nomor halaman
                pageBtns[currentPage].classList.remove('bg-[#0f2440]', 'text-white');
                pageBtns[currentPage].classList.add('text-gray-400', 'hover:bg-gray-100', 'hover:text-[#0f2440]');

                pageBtns[page].classList.add('bg-[#0f2440]', 'text-white');
                pageBtns[page].classList.remove('text-gray-400', 'hover:bg-gray-100', 'hover:text-[#0f2440]');

                currentPage = page;

                // Update state disabled pada tombol prev/next
                btnPrev.disabled = currentPage === 0;
                btnNext.disabled = currentPage === totalPages - 1;

                // Scroll halus ke atas grid
                document.getElementById('carousel-wrapper').scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }

            // Tombol prev & next
            btnPrev.addEventListener('click', () => goTo(currentPage - 1));
            btnNext.addEventListener('click', () => goTo(currentPage + 1));

            // Tombol nomor halaman
            pageBtns.forEach(btn => {
                btn.addEventListener('click', () => goTo(parseInt(btn.dataset.target)));
            });
        })();
    </script>

@endsection
