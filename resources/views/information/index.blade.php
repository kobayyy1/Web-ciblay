@extends('layouts.panel.app')

@section('content')
    <section class="bg-white pt-16 pb-0">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4 mb-8 border-b-2 border-transparent">
                <div class="flex flex-col items-start gap-2 text-left">
                    <div class="flex items-center gap-4 select-none">
                        <img src="{{ asset('images/icon-notice.png') }}" alt="Notice" class="h-6 object-contain">
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
                    <h1 class="text-3xl sm:text-4xl md:text-5xl font-black text-[#0f2440] tracking-tight uppercase"
                        style="font-family: 'Roboto', sans-serif;">
                        Data Penelitian
                    </h1>
                </div>

                <div class="flex items-center justify-end gap-4 mb-2">
                    <img src="{{ asset('images/icon-arrow.png') }}" alt="Aksen" class="w-8 h-8 object-contain">
                    <img src="{{ asset('images/icon-doc.png') }}" alt="Docs" class="h-12 w-auto object-contain">
                </div>
            </div>

            <div
                class="flex flex-col md:flex-row w-full bg-white rounded-[2.5rem] overflow-hidden shadow-2xl h-[500px] md:h-[550px]">

                <div class="w-full md:w-[60%] lg:w-[65%] flex bg-[#0f2440] flex-shrink-0">

                    <div class="w-24 sm:w-28 flex-shrink-0 flex justify-center py-6 sm:py-8 overflow-visible">
                        <div
                            class="bg-[#ff9f1c] w-10 sm:w-11 rounded-full h-full flex flex-col items-center justify-between py-6 relative overflow-visible shadow-inner">
                            <div class="flex items-start justify-center pt-6 w-full relative overflow-visible">
                                <h2 class="text-white font-black text-3xl sm:text-4xl tracking-widest uppercase drop-shadow-[2px_4px_3px_rgba(0,0,0,0.3)] absolute left-[55%] z-10 whitespace-nowrap"
                                    style="writing-mode: vertical-rl;">
                                    LPPM
                                </h2>
                            </div>
                            <div class="mt-auto flex flex-col items-center gap-4 w-full text-center pb-2 select-none">
                                <p class="text-[#0f2440] font-bold text-[9px] sm:text-[10px] tracking-wider uppercase whitespace-nowrap mx-auto"
                                    style="writing-mode: vertical-rl;">
                                    Institut Seni Indonesia Padangpanjang
                                </p>
                                <img src="{{ asset('images/icon/globe.png') }}" alt="Globe"
                                    class="w-5 h-5 object-contain opacity-90 mx-auto">
                            </div>
                        </div>
                    </div>

                    <div class="flex-1 flex flex-col h-full pt-6 sm:pt-8 pb-4 pr-4 flex-shrink-0">
                        <div class="flex-1 w-full relative rounded-3xl overflow-hidden bg-gray-800 shadow-inner">
                            <img src="{{ asset('images/berita1.png') }}" alt="Sekretariat UTBK SNBT 2026"
                                class="absolute inset-0 w-full h-full object-cover">
                        </div>
                        <div class="flex items-center justify-center gap-2 pt-4 select-none">
                            <span class="w-6 h-2 rounded-full bg-[#002e62] transition-all"></span>
                            <span class="w-2.5 h-2.5 rounded-full bg-gray-400 opacity-60"></span>
                            <span class="w-2.5 h-2.5 rounded-full bg-gray-400 opacity-60"></span>
                        </div>
                    </div>

                </div>
                <div class="flex-1 flex flex-row h-full p-6 sm:p-8 pl-6 bg-white text-gray-800 relative overflow-hidden">

                    <div id="descScroll" class="flex-1 overflow-y-auto h-full pr-6 text-left space-y-4 scroll-smooth"
                        style="scrollbar-width: none; -ms-overflow-style: none;" onscroll="updateCustomScroll(this)">

                        <h3 class="text-xl font-black text-[#0f2440] uppercase tracking-tight mb-2"
                            style="font-family: 'Roboto', sans-serif;">
                            Detail Dokumentasi Penelitian
                        </h3>

                        <p class="text-sm sm:text-base text-gray-600 leading-relaxed font-normal">
                            Masyarakat Viqueque di Oebelo cenderung mempertahankan penggunaan bahasa Tetun (khususnya dialek
                            yang mereka bawa dari Viqueque) dalam ranah domestik dan komunitas.
                        </p>
                        <p class="text-sm sm:text-base text-gray-600 leading-relaxed font-normal">
                            Sebagai komunitas pengungsi yang menetap di Indonesia, mereka berinteraksi dalam lingkungan
                            multilingual, yang melibatkan penggunaan bahasa Indonesia dan bahasa lokal Kupang.
                        </p>
                        <p class="text-sm sm:text-base text-gray-600 leading-relaxed font-normal">
                            Dokumentasi koordinasi dari pihak Institut Seni Indonesia Padangpanjang ini sangat krusial dalam
                            memetakan pertahanan sosiokultural bahasa daerah asal mereka.
                        </p>

                        <p class="text-sm sm:text-base text-gray-600 leading-relaxed font-normal">
                            Langkah selanjutnya dari LPPM Institut Seni Indonesia Padangpanjang adalah menyusun modul
                            pembelajaran seni budaya kontekstual yang dapat diintegrasikan ke dalam kurikulum lokal
                            masyarakat terdampak di kawasan tersebut.
                        </p>
                        <p class="text-sm sm:text-base text-gray-600 leading-relaxed font-normal">
                            Melalui pendekatan seni, diharapkan proses asimilasi budaya dan pemeliharaan bahasa ibu dapat
                            berjalan beriringan tanpa menghilangkan esensi identitas asli sosiolinguistik mereka. Evaluasi
                            berkala akan terus digulirkan setiap semester oleh tim peneliti utama.
                        </p>
                    </div>

                    <div
                        class="w-2 h-full flex flex-col items-center justify-start py-2 select-none relative flex-shrink-0">
                        <div class="w-1.5 h-full bg-gray-100 rounded-full absolute inset-0"></div>
                        <div id="customBar"
                            class="w-1.5 h-1/4 bg-[#0f2440] rounded-full absolute top-0 shadow-sm transition-all duration-75">
                        </div>
                    </div>
                </div>
                <div class="w-2 h-full flex flex-col items-center justify-start py-2 select-none relative flex-shrink-0">
                    <div class="w-1.5 h-full bg-[#002e62] rounded-full absolute inset-0 opacity-80"></div>
                    <div class="w-1.5 h-2/5 bg-gray-300 rounded-full absolute top-0 shadow-sm"></div>
                </div>
            </div>

        </div>
        </div>
    </section>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 bg-white py-12">
        <div class="grid grid-cols-12 w-full h-3 rounded-full overflow-hidden shadow-sm">
            <div class="col-span-5 bg-[#ff9f1c]"></div>
            <div class="col-span-7 bg-[#0f2440]"></div>
        </div>
    </div>

    <section x-data="newsComponent()" class="bg-white pt-0 pb-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            {{-- Section Header --}}
            <div class="flex items-center justify-between mb-8">
                <div class="flex flex-col">
                    <div class="flex items-center gap-3 mb-1 select-none">
                        <img src="{{ asset('images/icon-notice.png') }}" alt="Notice" class="h-6 object-contain">
                        <div class="inline-flex items-center gap-1.5">
                            <template x-for="i in 3">
                                <div class="grid grid-cols-2 gap-0.5">
                                    <span class="w-2.5 h-2.5 bg-[#ff9f1c] rounded-[2px]"></span>
                                    <span class="w-2.5 h-2.5 bg-transparent"></span>
                                    <span class="w-2.5 h-2.5 bg-transparent"></span>
                                    <span class="w-2.5 h-2.5 bg-[#ff9f1c] rounded-[2px]"></span>
                                </div>
                            </template>
                        </div>
                    </div>
                    <h2 class="text-4xl font-extrabold text-[#0f2440] tracking-tight relative pb-2">
                        Berita
                        <span class="absolute bottom-0 left-0 w-16 h-0.5 bg-[#0f2440] border-dashed border-b"></span>
                    </h2>
                    <span class="text-xs text-gray-400 mt-3 flex items-center gap-1.5">
                        <span class="w-1 h-3 bg-[#ff9f1c] rounded-full"></span>
                        Upload <span x-text="beritaList[activeSlide].date" class="ml-1"></span>
                    </span>
                </div>

                <div class="flex items-center justify-end gap-4 mb-2">
                    <img src="{{ asset('images/icon-arrow.png') }}" alt="Aksen" class="w-8 h-8 object-contain">
                    <img src="{{ asset('images/icon-doc.png') }}" alt="Docs" class="h-12 w-auto object-contain">
                </div>
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
    <script>
        function updateCustomScroll(element) {
            const customBar = document.getElementById('customBar');

            // Hitung total tinggi yang bisa di-scroll
            const totalScrollHeight = element.scrollHeight - element.clientHeight;

            if (totalScrollHeight > 0) {
                // Ambil persentase posisi scroll saat ini
                const scrollPercentage = (element.scrollTop / totalScrollHeight) * 100;

                // Batasi pergerakan tuas agar tidak kebablasan keluar dari rel bawah (maksimal top 75% karena tinggi tuas adalah 1/4 atau 25%)
                const topPosition = (scrollPercentage * 0.75);

                // Tembak posisinya ke style top CSS tuas customBar
                customBar.style.top = topPosition + '%';
            }
        }
    </script>
@endsection
