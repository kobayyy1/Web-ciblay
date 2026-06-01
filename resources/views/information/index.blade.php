@extends('layouts.panel.app')

@section('content')
    {{-- =====================================================================
         SECTION 1: DATA PENELITIAN (DOKUMENTASI UTAMA)
         ===================================================================== --}}
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

            {{-- Card Detail Besar --}}
            <div
                class="flex flex-col md:flex-row w-full bg-white rounded-[2.5rem] overflow-hidden shadow-2xl h-auto md:h-[550px]">
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
                                    class="w-5 h-5 object-contain invert opacity-90 mx-auto">
                            </div>
                        </div>
                    </div>
                    <div class="flex-1 flex flex-col h-full pt-6 sm:pt-8 pb-4 pr-4 flex-shrink-0">
                        <div class="flex-1 w-full relative rounded-3xl overflow-hidden bg-gray-800 shadow-inner">
                            <img src="{{ asset('images/berita1.png') }}" alt="Sekretariat"
                                class="absolute inset-0 w-full h-full object-cover">
                        </div>
                    </div>
                </div>

                <div class="flex-1 flex flex-row h-full p-6 sm:p-8 pl-6 bg-white text-gray-800 relative overflow-hidden">
                    <div id="descScroll" class="flex-1 overflow-y-auto h-full pr-6 text-left space-y-4 scroll-smooth"
                        style="scrollbar-width: none; -ms-overflow-style: none;" onscroll="updateCustomScroll(this)">
                        <h3 class="text-xl font-black text-[#0f2440] uppercase tracking-tight mb-2">Detail Dokumentasi
                            Penelitian</h3>
                        <p class="text-sm sm:text-base text-gray-600 leading-relaxed">Masyarakat Viqueque di Oebelo
                            cenderung mempertahankan penggunaan bahasa Tetun dalam ranah domestik dan komunitas.</p>
                        <p class="text-sm sm:text-base text-gray-600 leading-relaxed">Dokumentasi koordinasi dari pihak ISI
                            Padangpanjang ini sangat krusial dalam memetakan pertahanan sosiokultural bahasa daerah asal
                            mereka.</p>
                    </div>
                    <div
                        class="w-2 h-full flex flex-col items-center justify-start py-2 select-none relative flex-shrink-0">
                        <div class="w-1.5 h-full bg-gray-100 rounded-full absolute inset-0"></div>
                        <div id="customBar"
                            class="w-1.5 h-1/4 bg-[#0f2440] rounded-full absolute top-0 shadow-sm transition-all duration-75">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Divider Bar --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 bg-white py-12">
        <div class="grid grid-cols-12 w-full h-3 rounded-full overflow-hidden shadow-sm">
            <div class="col-span-5 bg-[#ff9f1c]"></div>
            <div class="col-span-7 bg-[#0f2440]"></div>
        </div>
    </div>


    {{-- =====================================================================
         BERITA SECTION
         ===================================================================== --}}
    @php
        $formattedBeritas = $beritas->map(function ($berita) {
            return [
                'title' => $berita->title,
                'subTitle' => \Illuminate\Support\Str::limit(strip_tags($berita->content), 120, '...'),
                'date' => \Carbon\Carbon::parse($berita->start_date ?? $berita->created_at)->format('d-m-Y'),
                'image' => $berita->image ? asset('storage/' . $berita->image) : asset('images/berita1.png'),
            ];
        });
    @endphp

    <section x-data="newsComponent({{ $formattedBeritas->toJson() }})" class="bg-white py-16 border-t border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            {{-- Section Header Berita --}}
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
                    <h2 class="text-4xl font-extrabold text-[#0f2440] tracking-tight relative pb-2 uppercase"
                        style="font-family: 'Roboto', sans-serif;">
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

            {{-- Layout Grid Berita --}}
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-start">

                {{-- Left: Main Image Card --}}
                <div class="lg:col-span-6 flex flex-col items-center w-full">
                    <div
                        class="relative w-full aspect-[4/3] rounded-2xl overflow-hidden shadow-md group border border-gray-100 bg-gray-900">
                        <div class="absolute inset-0 w-full h-full cursor-pointer">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-[#0f2440]/90 via-transparent to-transparent z-10">
                            </div>
                            <div class="absolute inset-0 bg-slate-800 z-0"></div>
                            <img :src="beritaList[activeSlide].image" :alt="beritaList[activeSlide].title"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 relative z-10">
                            <div class="absolute bottom-0 inset-x-0 p-6 z-20 text-left">
                                <div class="flex items-center gap-1.5 mb-2">
                                    <div class="grid grid-cols-2 gap-0.5">
                                        <div class="w-1.5 h-1.5 bg-[#ff9f1c]"></div>
                                        <div class="w-1.5 h-1.5 bg-[#ff9f1c]"></div>
                                        <div class="w-1.5 h-1.5 bg-[#ff9f1c]"></div>
                                        <div class="w-1.5 h-1.5 bg-transparent"></div>
                                    </div>
                                    <h3 class="text-white font-bold text-sm sm:text-base md:text-lg leading-snug lg:max-w-md"
                                        x-text="beritaList[activeSlide].title"></h3>
                                </div>
                                <p class="text-gray-300 text-[11px] sm:text-xs font-light pl-4"
                                    x-text="beritaList[activeSlide].subTitle"></p>
                            </div>
                        </div>
                    </div>

                    {{-- Dot indicator bawah gambar --}}
                    <div class="flex items-center gap-2 mt-4">
                        <template x-for="(item, index) in beritaList" :key="index">
                            <button @click="activeSlide = index"
                                :class="activeSlide === index ? 'w-6 bg-[#0f2440]' : 'w-2 bg-gray-300'"
                                class="h-2 rounded-full transition-all duration-300"></button>
                        </template>
                    </div>
                </div>

                {{-- Right: Timeline List (GARIS UTAMA IKUT MELUNCUR SEIRAMA KLIK JON ADY) --}}
                <div class="lg:col-span-6 grid grid-cols-12 gap-4 w-full relative lg:aspect-[4/3] animate-fade-in">

                    {{-- Boks Pembungkus List --}}
                    <div class="col-span-11 relative h-full">
                        {{-- Area Box Scroll Teks Berita (Padding left disesuaikan pl-10 untuk jalur rel internal) --}}
                        <div class="w-full h-full overflow-y-auto pl-10 pr-2 flex flex-col scroll-smooth"
                            style="scrollbar-width: none; -ms-overflow-style: none;">
                            <div class="space-y-0 h-full">
                                <template x-for="(item, index) in beritaList" :key="index">
                                    <div @click="activeSlide = index"
                                        class="w-full h-[33.33%] flex-shrink-0 flex flex-col justify-center relative group cursor-pointer border-b border-gray-100/50 last:border-0 py-2">

                                        {{-- ─── TRICK SAKTI: SEGMEN GARIS DI DALAM LOOP (IKUT SCROLL & BERHENTI PAS DI TOMBOL AKTIF) ─── --}}
                                        <div class="absolute left-[-23px] top-0 bottom-0 w-1.5 pointer-events-none flex flex-col overflow-hidden"
                                            :class="index === 0 ? 'rounded-t-full' : (index === beritaList.length - 1 ?
                                                'rounded-b-full' : '')">
                                            {{-- Paruh Atas Segmen Garis --}}
                                            <div class="w-full h-1/2 transition-colors duration-300"
                                                :class="index <= activeSlide ? 'bg-[#0f2440]' : 'bg-slate-200'"></div>
                                            {{-- Paruh Bawah Segmen Garis --}}
                                            <div class="w-full h-1/2 transition-colors duration-300"
                                                :class="index < activeSlide ? 'bg-[#0f2440]' : 'bg-slate-200'"></div>
                                        </div>

                                        {{-- Tombol Bulat Indikator Menu Berita (Center Alignment Presisi di Nilai left-[-30px]) --}}
                                        <div :class="activeSlide === index ?
                                            'border-[#0f2440] bg-white scale-110 ring-4 ring-[#ff9f1c]/30' :
                                            'border-gray-300 bg-white group-hover:border-[#0f2440]'"
                                            class="absolute left-[-30px] top-1/2 -translate-y-1/2 w-5 h-5 rounded-full border-2 transition-all duration-300 z-10 flex items-center justify-center shadow-sm">
                                            <div x-show="activeSlide === index"
                                                class="w-2.5 h-2.5 rounded-full bg-[#0f2440]"></div>
                                        </div>

                                        {{-- Konten Teks --}}
                                        <div class="text-left w-full">
                                            <h3 :class="activeSlide === index ?
                                                'text-[#0f2440] font-extrabold underline decoration-sky-400 decoration-2 underline-offset-4' :
                                                'text-gray-400 font-bold group-hover:text-[#0f2440]'"
                                                class="text-sm sm:text-base md:text-lg transition-all duration-300 leading-tight mb-1 line-clamp-1"
                                                x-text="item.title"></h3>
                                            <p class="text-gray-400 text-xs font-normal leading-normal mb-1 line-clamp-2"
                                                x-text="item.subTitle"></p>
                                            <span class="text-[10px] text-gray-400 flex items-center gap-1">
                                                <span class="w-0.5 h-2.5 bg-[#ff9f1c]"></span>
                                                Upload <span x-text="item.date" class="ml-1"></span>
                                            </span>
                                        </div>

                                    </div>
                                </template>
                            </div>
                        </div>
                    </div>

                    {{-- Scrollbar Dekoratif Paling Kanan --}}
                    <div class="col-span-1 hidden lg:flex justify-end h-full pl-2">
                        <div
                            class="relative w-4 bg-slate-100 border border-slate-200/50 rounded-full h-full overflow-hidden shadow-inner">
                            <div class="absolute w-full bg-[#0f2440] rounded-full h-20 transition-all duration-500 shadow-md"
                                :style="`top: ${beritaList.length > 1 ? (activeSlide / (beritaList.length - 1)) * 75 : 0}%`">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ===== SCRIPT CAROUSEL DATA PENELITIAN ===== --}}
    <script>
        (function() {
            // Kita kasih ?? 1 biar kalau variabelnya gak dikirim dari InfoController, dia gak mleduk lagi
            const totalPages = {{ $totalPages ?? 1 }};
            let currentPage = 0;

            const pages = document.querySelectorAll('.carousel-page');
            const pageBtns = document.querySelectorAll('.page-btn');
            const btnPrev = document.getElementById('btn-prev');
            const btnNext = document.getElementById('btn-next');

            // Pengaman: Jika halaman Information ini emang gak punya carousel penelitian, stop script di sini
            if (pages.length === 0) return;

            function goTo(page) {
                if (page < 0 || page >= totalPages) return;

                pages[currentPage].classList.add('hidden');
                pages[page].classList.remove('hidden');

                pageBtns[currentPage].classList.remove('bg-[#0f2440]', 'text-white');
                pageBtns[currentPage].classList.add('text-gray-400', 'hover:bg-gray-100', 'hover:text-[#0f2440]');

                pageBtns[page].classList.add('bg-[#0f2440]', 'text-white');
                pageBtns[page].classList.remove('text-gray-400', 'hover:bg-gray-100', 'hover:text-[#0f2440]');

                currentPage = page;

                if (btnPrev) btnPrev.disabled = currentPage === 0;
                if (btnNext) btnNext.disabled = currentPage === totalPages - 1;

                document.getElementById('carousel-wrapper').scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }

            if (btnPrev) btnPrev.addEventListener('click', () => goTo(currentPage - 1));
            if (btnNext) btnNext.addEventListener('click', () => goTo(currentPage + 1));

            pageBtns.forEach(btn => {
                btn.addEventListener('click', () => goTo(parseInt(btn.dataset.target)));
            });
        })();
    </script>

    {{-- ===== SCRIPT UTILS CORNER ===== --}}
    <script>
        function updateCustomScroll(element) {
            const customBar = document.getElementById('customBar');
            const totalScrollHeight = element.scrollHeight - element.clientHeight;

            if (totalScrollHeight > 0) {
                const scrollPercentage = (element.scrollTop / totalScrollHeight) * 100;
                const topPosition = (scrollPercentage * 0.75);
                customBar.style.top = topPosition + '%';
            }
        }

        function newsComponent(laravelBerita) {
            const defaultPlaceholder = [{
                title: "Belum Ada Berita Terbaru, Dy!",
                subTitle: "Silakan isi data berita utama dari dashboard control panel admin terlebih dahulu.",
                date: "---",
                image: "{{ asset('images/berita1.png') }}"
            }];

            return {
                activeSlide: 0,
                beritaList: laravelBerita && laravelBerita.length > 0 ? laravelBerita : defaultPlaceholder
            }
        }
    </script>
@endsection
