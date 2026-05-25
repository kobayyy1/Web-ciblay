@extends('layouts.panel.app')

@section('content')
    {{-- =====================================================================
         HERO SECTION
         ===================================================================== --}}
    <section class="relative min-h-[calc(100vh-80px)] w-full overflow-hidden bg-white flex items-center">
        <div
            class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-12 gap-8 items-center w-full relative z-10 py-12 lg:py-0">

            {{-- Left: Headline --}}
            <div class="order-1 lg:order-none lg:col-span-5 flex flex-col justify-center text-left items-start z-20">
                <h1
                    class="text-3xl sm:text-5xl lg:text-5xl xl:text-6xl font-extrabold text-[#0f2440] leading-[1.15] tracking-tight mb-6">
                    Mentransformasi Data Menjadi Solusi Nyata Bagi Industri Nasional

                    <div class="inline-flex items-center gap-3 ml-3 align-middle select-none">
                        <span
                            class="bg-[#ff9f1c] text-white text-[10px] sm:text-xs font-bold px-2.5 py-1 rounded-md tracking-wide normal-case font-sans">
                            LPPM
                        </span>
                        <div class="flex items-center gap-1.5">
                            <div class="grid grid-cols-2 gap-0.5">
                                <span class="w-2.5 h-2.5 bg-[#ff9f1c] rounded-[2px]"></span>
                                <span class="w-2.5 h-2.5 bg-transparent"></span>
                                <span class="w-2.5 h-2.5 bg-transparent"></span>
                                <span class="w-2.5 h-2.5 bg-[#ff9f1c] rounded-[2px]"></span>
                            </div>
                            <div class="grid grid-cols-2 gap-0.5">
                                <span class="w-2.5 h-2.5 bg-[#ff9f1c] rounded-[2px]"></span>
                                <span class="w-2.5 h-2.5 bg-transparent"></span>
                                <span class="w-2.5 h-2.5 bg-transparent"></span>
                                <span class="w-2.5 h-2.5 bg-[#ff9f1c] rounded-[2px]"></span>
                            </div>
                            <div class="grid grid-cols-2 gap-0.5">
                                <span class="w-2.5 h-2.5 bg-[#ff9f1c] rounded-[2px]"></span>
                                <span class="w-2.5 h-2.5 bg-transparent"></span>
                                <span class="w-2.5 h-2.5 bg-transparent"></span>
                                <span class="w-2.5 h-2.5 bg-[#ff9f1c] rounded-[2px]"></span>
                            </div>
                        </div>
                    </div>
                </h1>

                <p class="text-gray-500 text-sm sm:text-base lg:text-lg max-w-xl leading-relaxed">
                    Eksplorasi riset multidisiplin
                </p>
                <p class="text-gray-500 text-sm sm:text-base lg:text-lg max-w-xl leading-relaxed">
                    untuk solusi masa depan.
                </p>
            </div>

            {{-- Right: Hero Image --}}
            <div
                class="order-2 lg:order-none lg:col-span-7 relative flex items-center justify-center w-full h-full min-h-[380px] sm:min-h-[480px] lg:min-h-[calc(100vh-80px)] lg:-mr-24 xl:-mr-36 overflow-visible">
                <div class="relative w-full h-full flex items-center justify-center lg:justify-end z-10 overflow-visible">
                    <img src="{{ asset('images/hero-isometric.png') }}" alt="Mentransformasi Data Menjadi Solusi Nyata"
                        class="w-full max-w-[380px] sm:max-w-[500px] lg:max-w-[640px] xl:max-w-[720px] h-auto object-contain transition-transform duration-300 transform scale-105 sm:scale-110 lg:scale-115 lg:translate-x-16 xl:translate-x-24 origin-center lg:origin-right">
                </div>
            </div>

        </div>

        {{-- Bottom accent bar --}}
        <div class="absolute bottom-0 left-0 w-full h-2 flex z-20">
            <div class="w-[20%] sm:w-[25%] bg-[#ff9f1c] h-full"></div>
            <div class="w-[80%] sm:w-[75%] bg-[#0f2440] h-full"></div>
        </div>
    </section>


    {{-- =====================================================================
         BERITA SECTION
         ===================================================================== --}}
    <section x-data="newsComponent()" class="bg-white py-16 border-t border-gray-100">
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

                <div class="flex items-center gap-3 text-[#0f2440]">
                    <a href="#" class="block opacity-80 hover:opacity-100 transition-opacity">
                        <img src="{{ asset('images/icon-arrow.png') }}" alt="Download" class="w-6 h-6 object-contain">
                    </a>
                    <a href="#" class="block opacity-80 hover:opacity-100 transition-opacity">
                        <img src="{{ asset('images/icon-doc.png') }}" alt="Document" class="w-6 h-6 object-contain">
                    </a>
                </div>
            </div>

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

                    {{-- Dot indicator --}}
                    <div class="flex items-center gap-2 mt-4">
                        <template x-for="(item, index) in beritaList" :key="index">
                            <button @click="activeSlide = index"
                                :class="activeSlide === index ? 'w-6 bg-[#0f2440]' : 'w-2 bg-gray-300'"
                                class="h-2 rounded-full transition-all duration-300"></button>
                        </template>
                    </div>
                </div>

                {{-- Right: Timeline List --}}
                <div class="lg:col-span-6 grid grid-cols-12 gap-4 w-full relative">
                    <div class="col-span-11 relative pl-6 lg:pl-8">
                        <div class="absolute left-1.5 top-2 bottom-2 w-[3px] bg-[#0f2440] rounded-full opacity-20"></div>
                        <div class="absolute left-1.5 top-2 w-[3px] bg-[#0f2440] rounded-full transition-all duration-500"
                            :style="`height: ${(activeSlide / (beritaList.length - 1)) * 100}%`"></div>

                        <div class="space-y-6">
                            <template x-for="(item, index) in beritaList" :key="index">
                                <div @click="activeSlide = index" class="relative pl-6 group cursor-pointer">
                                    <div :class="activeSlide === index ?
                                        'border-[#0f2440] bg-white scale-110 ring-4 ring-blue-50' :
                                        'border-gray-300 bg-white'"
                                        class="absolute left-[-22px] top-1 w-4 h-4 rounded-full border-2 transition-all duration-300 z-10 flex items-center justify-center">
                                        <div x-show="activeSlide === index" class="w-1.5 h-1.5 rounded-full bg-[#0f2440]">
                                        </div>
                                    </div>
                                    <div class="text-left w-full">
                                        <h3 :class="activeSlide === index ?
                                            'text-[#0f2440] font-extrabold underline decoration-sky-400 decoration-2 underline-offset-4' :
                                            'text-gray-400 font-bold group-hover:text-[#0f2440]'"
                                            class="text-base sm:text-lg transition-all duration-300 leading-tight mb-1"
                                            x-text="item.title"></h3>
                                        <p class="text-gray-400 text-xs sm:text-sm font-normal leading-normal mb-1"
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

                    {{-- Scrollbar dekoratif --}}
                    <div class="col-span-1 hidden lg:flex justify-end h-full pr-1">
                        <div class="relative w-2 bg-gray-200 rounded-full h-full min-h-[220px] overflow-hidden">
                            <div class="absolute w-full bg-[#0f2440] rounded-full h-20 transition-all duration-500"
                                :style="`top: ${(activeSlide / (beritaList.length - 1)) * 60}%`"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    {{-- =====================================================================
         MEDIA SECTION
         ===================================================================== --}}
    <section x-data="mediaComponent()"
        class="relative min-h-[550px] sm:min-h-[650px] lg:min-h-[700px] w-full overflow-hidden bg-[#0f2440] text-white">

        {{-- Background image reaktif --}}
        <div class="absolute inset-0 w-full h-full z-0 transition-all duration-700">
            <div class="absolute inset-0 bg-gradient-to-t from-[#0f2440] via-[#0f2440]/70 to-[#0f2440]/50 z-10"></div>
            <div class="absolute inset-0 bg-black/30 z-10"></div>
            <img :src="mediaList[activeMedia].image" alt="Background Media"
                class="w-full h-full object-cover transition-all duration-500">
        </div>

        {{-- Top accent bar --}}
        <div class="absolute top-0 left-0 w-full h-2 flex z-30">
            <div class="w-[45%] bg-white h-full opacity-90"></div>
            <div class="w-[40%] bg-[#0f2440] h-full"></div>
            <div class="w-[15%] bg-[#ff9f1c] h-full"></div>
        </div>

        <div
            class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-20 pt-16 pb-12 flex flex-col justify-between min-h-[550px] sm:min-h-[650px] lg:min-h-[700px]">

            {{-- Section Header --}}
            <div class="flex flex-col items-start text-left">
                <div class="flex items-center gap-2 mb-1">
                    <span class="inline-flex items-center justify-center select-none w-auto h-auto">
                        <img src="{{ asset('images/icon-notice.png') }}" alt="Notice"
                            class="w-auto h-5 sm:h-6 object-contain">
                    </span>
                    <div class="flex items-center gap-1.5">
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
                <h2 class="text-4xl font-extrabold text-white tracking-tight relative pb-1 mt-2">
                    Media
                    <span
                        class="absolute bottom-0 left-0 w-24 h-0.5 bg-white border-dashed border-b border-white/50"></span>
                </h2>
            </div>

            {{-- Main Content Grid --}}
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center mt-12 w-full">

                {{-- Left: Info teks media aktif --}}
                <div class="lg:col-span-5 flex flex-col items-start text-left">
                    <span class="text-xs text-gray-300 font-medium mb-2 flex items-center gap-1.5">
                        <span class="w-1 h-3 bg-[#ff9f1c] rounded-full"></span>
                        Upload <span x-text="mediaList[activeMedia].date" class="ml-1"></span>
                    </span>
                    <h1 class="text-2xl sm:text-3xl lg:text-4xl font-black text-white leading-tight tracking-tight mb-3 max-w-xl"
                        x-text="mediaList[activeMedia].title"></h1>
                    <p class="text-gray-300 text-xs sm:text-sm font-light leading-relaxed max-w-lg mb-8"
                        x-text="mediaList[activeMedia].subTitle"></p>

                    <div class="flex items-center gap-4 flex-wrap">
                        <button
                            class="w-12 h-12 rounded-xl bg-[#ff9f1c] text-[#0f2440] hover:bg-white hover:text-[#0f2440] flex items-center justify-center font-bold shadow-lg transition-all transform hover:scale-105">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-6 h-6">
                                <path fill-rule="evenodd"
                                    d="M4.5 5.653c0-1.426 1.529-2.33 2.779-1.643l11.54 6.348c1.295.712 1.295 2.573 0 3.285L7.28 19.991c-1.25.687-2.779-.217-2.779-1.643V5.653z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                        <a href="#"
                            class="inline-flex items-center gap-3 bg-[#0f2440]/60 backdrop-blur-md border border-white/20 text-white font-semibold text-xs tracking-wide px-5 py-3.5 rounded-xl hover:bg-white hover:text-[#0f2440] hover:border-white transition-all shadow-md">
                            <span class="w-1 h-3 bg-[#ff9f1c] rounded-full"></span>Lihat Selengkapnya
                        </a>
                    </div>
                </div>

                {{-- Right: Thumbnail carousel --}}
                <div class="lg:col-span-7 w-full flex items-center justify-center lg:justify-end gap-3 select-none">

                    {{-- Prev Button --}}
                    <button @click="prevMedia()"
                        class="flex-shrink-0 bg-white text-[#0f2440] hover:bg-[#ff9f1c] w-10 h-10 rounded-full flex items-center justify-center shadow-lg border border-gray-100 z-30 transition-all focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3"
                            stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                        </svg>
                    </button>

                    {{-- Thumbnails --}}
                    <div class="flex items-center gap-3 overflow-hidden w-full lg:max-w-[600px] py-3">
                        <template x-for="(media, index) in mediaList" :key="index">
                            <div @click="activeMedia = index"
                                :class="activeMedia === index ?
                                    'border-2 border-[#ff9f1c] opacity-100 shadow-2xl z-10' :
                                    'border border-white/10 opacity-40 hover:opacity-70'"
                                class="relative w-[160px] sm:w-[185px] h-[120px] sm:h-[140px] rounded-xl overflow-hidden cursor-pointer transition-all duration-300 bg-slate-800 flex-shrink-0">
                                <img :src="media.image" class="w-full h-full object-cover">
                                <div
                                    class="absolute bottom-2 right-2 bg-black/60 backdrop-blur-sm px-2 py-0.5 rounded text-[10px] text-white/90 font-medium">
                                    <span x-text="'0' + (index + 1)"></span> / <span
                                        x-text="'0' + mediaList.length"></span>
                                </div>
                            </div>
                        </template>
                    </div>

                    {{-- Next Button --}}
                    <button @click="nextMedia()"
                        class="flex-shrink-0 bg-white text-[#0f2440] hover:bg-[#ff9f1c] w-10 h-10 rounded-full flex items-center justify-center shadow-lg border border-gray-100 z-30 transition-all focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3"
                            stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </button>

                </div>
            </div>
        </div>
    </section>


    {{-- =====================================================================
         INFORMATION SECTION
         ===================================================================== --}}
    <section x-data="informationComponent()" class="bg-white py-16 border-t border-gray-100 overflow-hidden">
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
                    <h2 class="text-4xl font-extrabold text-[#0f2440] tracking-tight relative pb-2 mt-2">
                        Information
                        <span class="absolute bottom-0 left-0 w-24 h-0.5 bg-[#0f2440] border-dashed border-b"></span>
                    </h2>
                    <span class="text-xs text-gray-400 mt-3 flex items-center gap-1.5">
                        <span class="w-1 h-3 bg-[#ff9f1c] rounded-full"></span>Upload 03-03-2026
                    </span>
                </div>

                <div class="flex items-center gap-3 text-[#0f2440]">
                    <a href="#" class="block opacity-80 hover:opacity-100 transition-opacity">
                        <img src="{{ asset('images/icon-arrow.png') }}" alt="Download" class="w-6 h-6 object-contain">
                    </a>
                    <a href="#" class="block opacity-80 hover:opacity-100 transition-opacity">
                        <img src="{{ asset('images/icon-doc.png') }}" alt="Document" class="w-6 h-6 object-contain">
                    </a>
                </div>
            </div>

        </div>

        {{-- Horizontal scroll cards --}}
        <div x-ref="infoSlider"
            class="flex items-center gap-6 overflow-x-auto pb-6 pt-2 scrollbar-none w-full snap-x snap-mandatory scroll-smooth">
            <template x-for="(info, index) in infoList" :key="index">
                <div :class="index === 1 ? 'border-2 border-purple-600 shadow-xl opacity-100' :
                    'border border-gray-100 shadow-md opacity-80'"
                    class="snap-start w-[85vw] sm:w-[420px] md:w-[450px] lg:w-[480px] aspect-[4/3] rounded-2xl overflow-hidden bg-gray-900 relative cursor-pointer group flex-shrink-0 transition-all duration-300">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#0f2440]/95 via-transparent to-transparent z-10">
                    </div>
                    <img :src="info.image" :alt="info.title"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute bottom-0 inset-x-0 p-6 z-20 text-left">
                        <div class="flex items-center gap-1.5 mb-2">
                            <div class="grid grid-cols-2 gap-0.5">
                                <span class="w-1.5 h-1.5 bg-[#ff9f1c] rounded-[1px]"></span>
                                <span class="w-1.5 h-1.5 bg-transparent"></span>
                                <span class="w-1.5 h-1.5 bg-transparent"></span>
                                <span class="w-1.5 h-1.5 bg-[#ff9f1c] rounded-[1px]"></span>
                            </div>
                            <h3 class="text-white font-extrabold text-base sm:text-lg leading-tight" x-text="info.title">
                            </h3>
                        </div>
                        <p class="text-gray-300 text-xs font-light pl-5" x-text="info.subTitle"></p>
                    </div>
                    <span
                        class="absolute bottom-4 right-4 text-[9px] text-gray-400 opacity-80 font-light flex items-center gap-1 z-20">
                        Institut Seni Indonesia Padangpanjang
                        <svg class="w-3 h-3 text-[#ff9f1c]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                        </svg>
                    </span>
                </div>
            </template>
        </div>

        {{-- Navigation --}}
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center gap-6 mt-4 justify-start w-full">
                <div class="flex items-center gap-2.5">
                    <button @click="scrollInfo('prev')"
                        class="w-10 h-10 rounded-full border border-gray-300 flex items-center justify-center text-[#0f2440] hover:bg-[#0f2440] hover:text-white transition-all focus:outline-none shadow-sm active:scale-95">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5"
                            stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                        </svg>
                    </button>
                    <button @click="scrollInfo('next')"
                        class="w-10 h-10 rounded-full border border-gray-300 flex items-center justify-center text-[#0f2440] hover:bg-[#0f2440] hover:text-white transition-all focus:outline-none shadow-sm active:scale-95">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5"
                            stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </button>
                </div>
                <a href="#"
                    class="inline-flex items-center gap-3 bg-[#0f2440] text-white font-bold text-xs tracking-wide px-6 py-3.5 rounded-xl hover:bg-[#ff9f1c] hover:text-[#0f2440] transition-all shadow-md">
                    <span class="w-0.5 h-3 bg-[#ff9f1c] rounded-full"></span>Lihat Selengkapnya
                </a>
            </div>
        </div>
    </section>


    {{-- =====================================================================
         ALPINE.JS COMPONENTS
         ===================================================================== --}}
    <script>
        function newsComponent() {
            return {
                activeSlide: 0,
                beritaList: [{
                        title: "Pilihan Bahasa Masyarakat Viqueque di Desa Oebelo",
                        subTitle: "Studi Kasus Identitas Bahasa di Kalangan Komunitas Pengungsi Eks Timor Timur",
                        date: "03-03-2026",
                        image: "{{ asset('images/berita1.png') }}"
                    },
                    {
                        title: "Pilihan Bahasa Masyarakat Viqueque di Desa Oebelo (Slide 2)",
                        subTitle: "Studi Kasus Identitas Bahasa di Kalangan Komunitas Pengungsi Eks Timor Timur",
                        date: "03-03-2026",
                        image: "{{ asset('images/berita1.png') }}"
                    },
                    {
                        title: "Pilihan Bahasa Masyarakat Viqueque di Desa Oebelo (Slide 3)",
                        subTitle: "Studi Kasus Identitas Bahasa di Kalangan Komunitas Pengungsi Eks Timor Timur",
                        date: "03-03-2026",
                        image: "{{ asset('images/berita1.png') }}"
                    }
                ]
            }
        }

        function mediaComponent() {
            return {
                activeMedia: 0,
                mediaList: [{
                        title: "Pilihan Bahasa Masyarakat Viqueque di Desa Oebelo",
                        subTitle: "Studi Kasus Identitas Bahasa di Kalangan Komunitas Pengungsi Eks Timor Timur",
                        date: "03-03-2026",
                        image: "{{ asset('images/berita1.png') }}"
                    },
                    {
                        title: "Festival Kesenian Indonesia Ke-XII Selenggara Sukses",
                        subTitle: "Dokumentasi penampilan akbar perwakilan delegasi Institut Seni se-Indonesia",
                        date: "12-05-2026",
                        image: "{{ asset('images/berita1.png') }}"
                    },
                    {
                        title: "Rapat Koordinasi Sekretariat UTBK - SNBT 2026 LPPM",
                        subTitle: "Evaluasi kesiapan sarana prasarana penunjang ujian nasional berbasis komputer",
                        date: "20-05-2026",
                        image: "{{ asset('images/berita1.png') }}"
                    }
                ],
                prevMedia() {
                    this.activeMedia = this.activeMedia === 0 ? this.mediaList.length - 1 : this.activeMedia - 1;
                },
                nextMedia() {
                    this.activeMedia = this.activeMedia === this.mediaList.length - 1 ? 0 : this.activeMedia + 1;
                }
            }
        }

        function informationComponent() {
            return {
                infoList: [{
                        title: "Pilihan Bahasa Masyarakat Viqueque di Desa Oebelo",
                        subTitle: "Studi Kasus Identitas Bahasa di Kalangan Komunitas Pengungsi Eks Timor Timur",
                        image: "{{ asset('images/berita1.png') }}"
                    },
                    {
                        title: "Rapat Koordinasi Sekretariat UTBK - SNBT 2026 LPPM",
                        subTitle: "Evaluasi kesiapan sarana prasarana penunjang ujian nasional berbasis komputer",
                        image: "{{ asset('images/berita1.png') }}"
                    },
                    {
                        title: "Festival Kesenian Indonesia Ke-XII Selenggara Sukses",
                        subTitle: "Dokumentasi penampilan akbar perwakilan delegasi Institut Seni se-Indonesia",
                        image: "{{ asset('images/berita1.png') }}"
                    },
                    {
                        title: "Arsip Informasi Tambahan Solusi Industri Nasional",
                        subTitle: "Eksplorasi riset multidisiplin untuk solusi praktis masa depan",
                        image: "{{ asset('images/berita1.png') }}"
                    }
                ],
                scrollInfo(direction) {
                    const slider = this.$refs.infoSlider;
                    if (!slider) return;

                    const cardElement = slider.firstElementChild;
                    if (!cardElement) return;

                    const cardWidth = cardElement.getBoundingClientRect().width;
                    const gap = 24;
                    const totalScrollStep = cardWidth + gap;

                    if (direction === 'next') {
                        if (slider.scrollLeft + slider.clientWidth >= slider.scrollWidth - 20) {
                            slider.scrollLeft = 0;
                        } else {
                            slider.scrollLeft += totalScrollStep;
                        }
                    } else {
                        if (slider.scrollLeft <= 0) {
                            slider.scrollLeft = slider.scrollWidth;
                        } else {
                            slider.scrollLeft -= totalScrollStep;
                        }
                    }
                }
            }
        }
    </script>
@endsection
