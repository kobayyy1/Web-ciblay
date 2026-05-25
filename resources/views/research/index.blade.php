@extends('layouts.panel.app')

@section('content')
    <div>
        <section class="bg-white py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

                {{-- Wrapper: posisi relative agar gambar bisa absolute meluber --}}
                <div class="relative mb-10">

                    {{-- 1. SISI KIRI: icon-doc + icon-notice + dot pattern (DIGESER LEBIH ATAS DIKIT) --}}
                    <div class="absolute -top-9 left-6 sm:left-8 z-10 flex items-end gap-3 select-none">
                        <img src="{{ asset('images/icon-doc.png') }}" alt="Docs"
                            class="h-12 w-auto object-contain drop-shadow-md">
                        <img src="{{ asset('images/icon-notice.png') }}" alt="Notice"
                            class="h-7 object-contain drop-shadow-md">

                        <div class="inline-flex items-center gap-1.5">
                            <div class="grid grid-cols-2 gap-0.5">
                                <span class="w-2 h-2 bg-[#ff9f1c] rounded-[1px]"></span>
                                <span class="w-2 h-2 bg-transparent"></span>
                                <span class="w-2 h-2 bg-transparent"></span>
                                <span class="w-2 h-2 bg-[#ff9f1c] rounded-[1px]"></span>
                            </div>
                            <div class="grid grid-cols-2 gap-0.5">
                                <span class="w-2 h-2 bg-[#ff9f1c] rounded-[1px]"></span>
                                <span class="w-2 h-2 bg-transparent"></span>
                                <span class="w-2 h-2 bg-transparent"></span>
                                <span class="w-2 h-2 bg-[#ff9f1c] rounded-[1px]"></span>
                            </div>
                            <div class="grid grid-cols-2 gap-0.5">
                                <span class="w-2 h-2 bg-[#ff9f1c] rounded-[1px]"></span>
                                <span class="w-2 h-2 bg-transparent"></span>
                                <span class="w-2 h-2 bg-transparent"></span>
                                <span class="w-2 h-2 bg-[#ff9f1c] rounded-[1px]"></span>
                            </div>
                        </div>
                    </div>

                    {{-- 2. SISI KANAN: GARIS + PANAH BOLD (TERKUNCI DI KANAN TENGAH CARD) --}}
                    <div
                        class="absolute top-1/2 -translate-y-1/2 right-6 sm:right-8 z-10 flex flex-col items-end gap-1 select-none">
                        <div class="w-36 h-[1.5px] bg-white opacity-20"></div>
                        <div class="flex items-center gap-1.5">
                            <img src="{{ asset('images/icon/arrow-bold.png') }}" alt="Aksen"
                                class="h-10 w-auto object-contain drop-shadow-md">
                            <div class="inline-flex items-center gap-1"></div>
                        </div>
                    </div>

                    {{-- CARD CONTAINER NAVY (Padding atas pt-10 dikurangi ke pt-8 agar teks naik sedikit) --}}
                    <div
                        class="bg-[#0f2440] text-white px-6 sm:px-8 pt-8 pb-6 rounded-2xl shadow-sm overflow-hidden min-h-[100px] relative">
                        <div class="absolute bottom-0 left-0 w-full h-1.5 bg-[#ff9f1c]"></div>

                        {{-- Judul (Posisi naik mengikuti padding kontainer) --}}
                        <h1 class="text-2xl sm:text-4xl font-black tracking-tight">
                            Data Penelitian:
                        </h1>
                    </div>

                </div>

                <div class="flex justify-start mb-8 text-left">
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

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">

                    <div
                        class="w-full aspect-[4/3] rounded-2xl overflow-hidden shadow-xl bg-gray-900 relative border-2 border-purple-600 cursor-pointer group transition-all duration-300">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-[#0f2440]/95 via-transparent to-transparent z-10">
                        </div>
                        <img src="{{ asset('images/berita1.png') }}" alt="Data Penelitian"
                            class="w-full h-full object-cover group-hover:scale-103 transition-transform duration-500">
                        <div class="absolute bottom-0 inset-x-0 p-5 z-20 text-left">
                            <div class="flex items-start gap-1.5 mb-2">
                                <div class="grid grid-cols-2 gap-0.5 mt-1 flex-shrink-0"><span
                                        class="w-1.5 h-1.5 bg-[#ff9f1c] rounded-[1px]"></span><span
                                        class="w-1.5 h-1.5 bg-transparent"></span><span
                                        class="w-1.5 h-1.5 bg-transparent"></span><span
                                        class="w-1.5 h-1.5 bg-[#ff9f1c] rounded-[1px]"></span></div>
                                <h3 class="text-white font-extrabold text-sm sm:text-base leading-snug">Pilihan Bahasa
                                    Masyarakat Viqueque di Desa Oebelo</h3>
                            </div>
                            <p class="text-gray-300 text-[10px] sm:text-xs font-light pl-4.5 leading-normal">Studi Kasus
                                Identitas Bahasa di Kalangan Komunitas Pengungsi Eks Timor Timur</p>
                        </div>
                        <span
                            class="absolute bottom-3 right-4 text-[8px] text-gray-400 opacity-60 font-light flex items-center gap-1 z-20">Institut
                            Seni Indonesia Padangpanjang <svg class="w-2.5 h-2.5 text-[#ff9f1c]" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                            </svg></span>
                    </div>

                    <div
                        class="w-full aspect-[4/3] rounded-2xl overflow-hidden shadow-md bg-gray-900 relative border border-gray-100 hover:shadow-lg cursor-pointer group transition-all duration-300">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-[#0f2440]/95 via-transparent to-transparent z-10">
                        </div>
                        <img src="{{ asset('images/berita1.png') }}" alt="Data Penelitian"
                            class="w-full h-full object-cover group-hover:scale-103 transition-transform duration-500">
                        <div class="absolute bottom-0 inset-x-0 p-5 z-20 text-left">
                            <div class="flex items-start gap-1.5 mb-2">
                                <div class="grid grid-cols-2 gap-0.5 mt-1 flex-shrink-0"><span
                                        class="w-1.5 h-1.5 bg-[#ff9f1c] rounded-[1px]"></span><span
                                        class="w-1.5 h-1.5 bg-transparent"></span><span
                                        class="w-1.5 h-1.5 bg-transparent"></span><span
                                        class="w-1.5 h-1.5 bg-[#ff9f1c] rounded-[1px]"></span></div>
                                <h3 class="text-white font-extrabold text-sm sm:text-base leading-snug">Pilihan Bahasa
                                    Masyarakat Viqueque di Desa Oebelo</h3>
                            </div>
                            <p class="text-gray-300 text-[10px] sm:text-xs font-light pl-4.5 leading-normal">Studi Kasus
                                Identitas Bahasa di Kalangan Komunitas Pengungsi Eks Timor Timur</p>
                        </div>
                        <span
                            class="absolute bottom-3 right-4 text-[8px] text-gray-400 opacity-60 font-light flex items-center gap-1 z-20">Institut
                            Seni Indonesia Padangpanjang <svg class="w-2.5 h-2.5 text-[#ff9f1c]" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                            </svg></span>
                    </div>

                    <div
                        class="w-full aspect-[4/3] rounded-2xl overflow-hidden shadow-md bg-gray-900 relative border border-gray-100 hover:shadow-lg cursor-pointer group transition-all duration-300">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-[#0f2440]/95 via-transparent to-transparent z-10">
                        </div>
                        <img src="{{ asset('images/berita1.png') }}" alt="Data Penelitian"
                            class="w-full h-full object-cover group-hover:scale-103 transition-transform duration-500">
                        <div class="absolute bottom-0 inset-x-0 p-5 z-20 text-left">
                            <div class="flex items-start gap-1.5 mb-2">
                                <div class="grid grid-cols-2 gap-0.5 mt-1 flex-shrink-0"><span
                                        class="w-1.5 h-1.5 bg-[#ff9f1c] rounded-[1px]"></span><span
                                        class="w-1.5 h-1.5 bg-transparent"></span><span
                                        class="w-1.5 h-1.5 bg-transparent"></span><span
                                        class="w-1.5 h-1.5 bg-[#ff9f1c] rounded-[1px]"></span></div>
                                <h3 class="text-white font-extrabold text-sm sm:text-base leading-snug">Pilihan Bahasa
                                    Masyarakat Viqueque di Desa Oebelo</h3>
                            </div>
                            <p class="text-gray-300 text-[10px] sm:text-xs font-light pl-4.5 leading-normal">Studi Kasus
                                Identitas Bahasa di Kalangan Komunitas Pengungsi Eks Timor Timur</p>
                        </div>
                        <span
                            class="absolute bottom-3 right-4 text-[8px] text-gray-400 opacity-60 font-light flex items-center gap-1 z-20">Institut
                            Seni Indonesia Padangpanjang <svg class="w-2.5 h-2.5 text-[#ff9f1c]" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                            </svg></span>
                    </div>

                    <div
                        class="w-full aspect-[4/3] rounded-2xl overflow-hidden shadow-md bg-gray-900 relative border border-gray-100 hover:shadow-lg cursor-pointer group transition-all duration-300">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-[#0f2440]/95 via-transparent to-transparent z-10">
                        </div>
                        <img src="{{ asset('images/berita1.png') }}" alt="Data Penelitian"
                            class="w-full h-full object-cover group-hover:scale-103 transition-transform duration-500">
                        <div class="absolute bottom-0 inset-x-0 p-5 z-20 text-left">
                            <div class="flex items-start gap-1.5 mb-2">
                                <div class="grid grid-cols-2 gap-0.5 mt-1 flex-shrink-0"><span
                                        class="w-1.5 h-1.5 bg-[#ff9f1c] rounded-[1px]"></span><span
                                        class="w-1.5 h-1.5 bg-transparent"></span><span
                                        class="w-1.5 h-1.5 bg-transparent"></span><span
                                        class="w-1.5 h-1.5 bg-[#ff9f1c] rounded-[1px]"></span></div>
                                <h3 class="text-white font-extrabold text-sm sm:text-base leading-snug">Pilihan Bahasa
                                    Masyarakat Viqueque di Desa Oebelo</h3>
                            </div>
                            <p class="text-gray-300 text-[10px] sm:text-xs font-light pl-4.5 leading-normal">Studi Kasus
                                Identitas Bahasa di Kalangan Komunitas Pengungsi Eks Timor Timur</p>
                        </div>
                        <span
                            class="absolute bottom-3 right-4 text-[8px] text-gray-400 opacity-60 font-light flex items-center gap-1 z-20">Institut
                            Seni Indonesia Padangpanjang <svg class="w-2.5 h-2.5 text-[#ff9f1c]" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                            </svg></span>
                    </div>

                    <div
                        class="w-full aspect-[4/3] rounded-2xl overflow-hidden shadow-md bg-gray-900 relative border border-gray-100 hover:shadow-lg cursor-pointer group transition-all duration-300">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-[#0f2440]/95 via-transparent to-transparent z-10">
                        </div>
                        <img src="{{ asset('images/berita1.png') }}" alt="Data Penelitian"
                            class="w-full h-full object-cover group-hover:scale-103 transition-transform duration-500">
                        <div class="absolute bottom-0 inset-x-0 p-5 z-20 text-left">
                            <div class="flex items-start gap-1.5 mb-2">
                                <div class="grid grid-cols-2 gap-0.5 mt-1 flex-shrink-0"><span
                                        class="w-1.5 h-1.5 bg-[#ff9f1c] rounded-[1px]"></span><span
                                        class="w-1.5 h-1.5 bg-transparent"></span><span
                                        class="w-1.5 h-1.5 bg-transparent"></span><span
                                        class="w-1.5 h-1.5 bg-[#ff9f1c] rounded-[1px]"></span></div>
                                <h3 class="text-white font-extrabold text-sm sm:text-base leading-snug">Pilihan Bahasa
                                    Masyarakat Viqueque di Desa Oebelo</h3>
                            </div>
                            <p class="text-gray-300 text-[10px] sm:text-xs font-light pl-4.5 leading-normal">Studi Kasus
                                Identitas Bahasa di Kalangan Komunitas Pengungsi Eks Timor Timur</p>
                        </div>
                        <span
                            class="absolute bottom-3 right-4 text-[8px] text-gray-400 opacity-60 font-light flex items-center gap-1 z-20">Institut
                            Seni Indonesia Padangpanjang <svg class="w-2.5 h-2.5 text-[#ff9f1c]" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                            </svg></span>
                    </div>

                    <div
                        class="w-full aspect-[4/3] rounded-2xl overflow-hidden shadow-md bg-gray-900 relative border border-gray-100 hover:shadow-lg cursor-pointer group transition-all duration-300">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-[#0f2440]/95 via-transparent to-transparent z-10">
                        </div>
                        <img src="{{ asset('images/berita1.png') }}" alt="Data Penelitian"
                            class="w-full h-full object-cover group-hover:scale-103 transition-transform duration-500">
                        <div class="absolute bottom-0 inset-x-0 p-5 z-20 text-left">
                            <div class="flex items-start gap-1.5 mb-2">
                                <div class="grid grid-cols-2 gap-0.5 mt-1 flex-shrink-0"><span
                                        class="w-1.5 h-1.5 bg-[#ff9f1c] rounded-[1px]"></span><span
                                        class="w-1.5 h-1.5 bg-transparent"></span><span
                                        class="w-1.5 h-1.5 bg-transparent"></span><span
                                        class="w-1.5 h-1.5 bg-[#ff9f1c] rounded-[1px]"></span></div>
                                <h3 class="text-white font-extrabold text-sm sm:text-base leading-snug">Pilihan Bahasa
                                    Masyarakat Viqueque di Desa Oebelo</h3>
                            </div>
                            <p class="text-gray-300 text-[10px] sm:text-xs font-light pl-4.5 leading-normal">Studi Kasus
                                Identitas Bahasa di Kalangan Komunitas Pengungsi Eks Timor Timur</p>
                        </div>
                        <span
                            class="absolute bottom-3 right-4 text-[8px] text-gray-400 opacity-60 font-light flex items-center gap-1 z-20">Institut
                            Seni Indonesia Padangpanjang <svg class="w-2.5 h-2.5 text-[#ff9f1c]" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                            </svg></span>
                    </div>

                    <div
                        class="w-full aspect-[4/3] rounded-2xl overflow-hidden shadow-md bg-gray-900 relative border border-gray-100 hover:shadow-lg cursor-pointer group transition-all duration-300">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-[#0f2440]/95 via-transparent to-transparent z-10">
                        </div>
                        <img src="{{ asset('images/berita1.png') }}" alt="Data Penelitian"
                            class="w-full h-full object-cover group-hover:scale-103 transition-transform duration-500">
                        <div class="absolute bottom-0 inset-x-0 p-5 z-20 text-left">
                            <div class="flex items-start gap-1.5 mb-2">
                                <div class="grid grid-cols-2 gap-0.5 mt-1 flex-shrink-0"><span
                                        class="w-1.5 h-1.5 bg-[#ff9f1c] rounded-[1px]"></span><span
                                        class="w-1.5 h-1.5 bg-transparent"></span><span
                                        class="w-1.5 h-1.5 bg-transparent"></span><span
                                        class="w-1.5 h-1.5 bg-[#ff9f1c] rounded-[1px]"></span></div>
                                <h3 class="text-white font-extrabold text-sm sm:text-base leading-snug">Pilihan Bahasa
                                    Masyarakat Viqueque di Desa Oebelo</h3>
                            </div>
                            <p class="text-gray-300 text-[10px] sm:text-xs font-light pl-4.5 leading-normal">Studi Kasus
                                Identitas Bahasa di Kalangan Komunitas Pengungsi Eks Timor Timur</p>
                        </div>
                        <span
                            class="absolute bottom-3 right-4 text-[8px] text-gray-400 opacity-60 font-light flex items-center gap-1 z-20">Institut
                            Seni Indonesia Padangpanjang <svg class="w-2.5 h-2.5 text-[#ff9f1c]" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                            </svg></span>
                    </div>

                    <div
                        class="w-full aspect-[4/3] rounded-2xl overflow-hidden shadow-md bg-gray-900 relative border border-gray-100 hover:shadow-lg cursor-pointer group transition-all duration-300">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-[#0f2440]/95 via-transparent to-transparent z-10">
                        </div>
                        <img src="{{ asset('images/berita1.png') }}" alt="Data Penelitian"
                            class="w-full h-full object-cover group-hover:scale-103 transition-transform duration-500">
                        <div class="absolute bottom-0 inset-x-0 p-5 z-20 text-left">
                            <div class="flex items-start gap-1.5 mb-2">
                                <div class="grid grid-cols-2 gap-0.5 mt-1 flex-shrink-0"><span
                                        class="w-1.5 h-1.5 bg-[#ff9f1c] rounded-[1px]"></span><span
                                        class="w-1.5 h-1.5 bg-transparent"></span><span
                                        class="w-1.5 h-1.5 bg-transparent"></span><span
                                        class="w-1.5 h-1.5 bg-[#ff9f1c] rounded-[1px]"></span></div>
                                <h3 class="text-white font-extrabold text-sm sm:text-base leading-snug">Pilihan Bahasa
                                    Masyarakat Viqueque di Desa Oebelo</h3>
                            </div>
                            <p class="text-gray-300 text-[10px] sm:text-xs font-light pl-4.5 leading-normal">Studi Kasus
                                Identitas Bahasa di Kalangan Komunitas Pengungsi Eks Timor Timur</p>
                        </div>
                        <span
                            class="absolute bottom-3 right-4 text-[8px] text-gray-400 opacity-60 font-light flex items-center gap-1 z-20">Institut
                            Seni Indonesia Padangpanjang <svg class="w-2.5 h-2.5 text-[#ff9f1c]" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                            </svg></span>
                    </div>

                    <div
                        class="w-full aspect-[4/3] rounded-2xl overflow-hidden shadow-md bg-gray-900 relative border border-gray-100 hover:shadow-lg cursor-pointer group transition-all duration-300">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-[#0f2440]/95 via-transparent to-transparent z-10">
                        </div>
                        <img src="{{ asset('images/berita1.png') }}" alt="Data Penelitian"
                            class="w-full h-full object-cover group-hover:scale-103 transition-transform duration-500">
                        <div class="absolute bottom-0 inset-x-0 p-5 z-20 text-left">
                            <div class="flex items-start gap-1.5 mb-2">
                                <div class="grid grid-cols-2 gap-0.5 mt-1 flex-shrink-0"><span
                                        class="w-1.5 h-1.5 bg-[#ff9f1c] rounded-[1px]"></span><span
                                        class="w-1.5 h-1.5 bg-transparent"></span><span
                                        class="w-1.5 h-1.5 bg-transparent"></span><span
                                        class="w-1.5 h-1.5 bg-[#ff9f1c] rounded-[1px]"></span></div>
                                <h3 class="text-white font-extrabold text-sm sm:text-base leading-snug">Pilihan Bahasa
                                    Masyarakat Viqueque di Desa Oebelo</h3>
                            </div>
                            <p class="text-gray-300 text-[10px] sm:text-xs font-light pl-4.5 leading-normal">Studi Kasus
                                Identitas Bahasa di Kalangan Komunitas Pengungsi Eks Timor Timur</p>
                        </div>
                        <span
                            class="absolute bottom-3 right-4 text-[8px] text-gray-400 opacity-60 font-light flex items-center gap-1 z-20">Institut
                            Seni Indonesia Padangpanjang <svg class="w-2.5 h-2.5 text-[#ff9f1c]" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                            </svg></span>
                    </div>

                </div>

                <div
                    class="flex flex-col sm:flex-row items-center justify-between gap-6 border-t border-gray-100 pt-8 relative">

                    <div class="hidden sm:block w-24"></div>

                    <div class="flex items-center gap-2 select-none">
                        <button
                            class="w-8 h-8 rounded-full border border-gray-300 flex items-center justify-center text-[#0f2440] hover:bg-[#0f2440] hover:text-white transition-all focus:outline-none shadow-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3"
                                stroke="currentColor" class="w-3.5 h-3.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                            </svg>
                        </button>
                        <div class="flex items-center gap-1.5 text-xs font-bold font-mono">
                            <button class="w-8 h-8 rounded-lg bg-[#0f2440] text-white">01</button>
                            <button
                                class="w-8 h-8 rounded-lg text-gray-400 hover:bg-gray-100 hover:text-[#0f2440] transition-colors">02</button>
                            <button
                                class="w-8 h-8 rounded-lg text-gray-400 hover:bg-gray-100 hover:text-[#0f2440] transition-colors">03</button>
                            <button
                                class="w-8 h-8 rounded-lg text-gray-400 hover:bg-gray-100 hover:text-[#0f2440] transition-colors">04</button>
                        </div>
                        <button
                            class="w-8 h-8 rounded-full border border-gray-300 flex items-center justify-center text-[#0f2440] hover:bg-[#0f2440] hover:text-white transition-all focus:outline-none shadow-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3"
                                stroke="currentColor" class="w-3.5 h-3.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                            </svg>
                        </button>
                    </div>

                    <div class="flex items-center justify-center select-none self-end lg:self-auto">
                        <img src="{{ asset('images/icon/arrow-bold.png') }}" alt="Aksen"
                            class="w-36 h-36 object-contain transform -rotate-180 drop-shadow-md">
                    </div>

                </div>

            </div>
        </section>
    </div>
@endsection
