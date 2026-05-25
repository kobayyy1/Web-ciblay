<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ISI Padangpanjang - LPPM</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
    </style>
</head>

<body class="bg-[#fafafa] text-[#0f2440] antialiased overflow-x-hidden">

    {{-- =====================================================================
         HEADER / NAVBAR
         Aktif ditentukan dengan request()->routeIs('nama.route')
         ===================================================================== --}}
    <header class="w-full bg-white border-b border-gray-100 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">

            {{-- Logo --}}
            <div class="flex items-center gap-3">
                <img src="{{ asset('images/logo-isi.png') }}" alt="Logo ISI Padangpanjang"
                    class="h-12 w-auto object-contain">
            </div>

            {{-- Desktop Navigation --}}
            <nav class="hidden md:flex items-center gap-8 font-medium text-gray-500">

                <a href="{{ route('home') }}" @class([
                    'transition-colors pb-1',
                    'text-[#0f2440] font-semibold border-b-2 border-orange-500' => request()->routeIs(
                        'home'),
                    'hover:text-[#0f2440]' => !request()->routeIs('home'),
                ])>
                    Home
                </a>

                <a href="{{ route('research.index') }}" @class([
                    'transition-colors pb-1',
                    'text-[#0f2440] font-semibold border-b-2 border-orange-500' => request()->routeIs(
                        'research.*'),
                    'hover:text-[#0f2440]' => !request()->routeIs('research.*'),
                ])>
                    Researchers
                </a>

                <a href="#" @class([
                    'transition-colors pb-1',
                    'text-[#0f2440] font-semibold border-b-2 border-orange-500' => request()->routeIs(
                        'information*'),
                    'hover:text-[#0f2440]' => !request()->routeIs('information*'),
                ])>
                    Information
                </a>

                <a href="#" @class([
                    'transition-colors pb-1',
                    'text-[#0f2440] font-semibold border-b-2 border-orange-500' => request()->routeIs(
                        'about*'),
                    'hover:text-[#0f2440]' => !request()->routeIs('about*'),
                ])>
                    About
                </a>

            </nav>

            {{-- Right actions --}}
            <div class="flex items-center gap-4">
                <button
                    class="flex items-center gap-2 border border-gray-300 rounded-md px-3 py-1.5 text-sm text-gray-600 hover:bg-gray-50 transition-colors">
                    <span>English</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9s2.015-9 4.5-9m0 0a9.015 9.015 0 010 18M12 3a9.004 9.004 0 00-8.716 6.748M12 3a9.004 9.004 0 018.716 6.748" />
                    </svg>
                </button>

                <div
                    class="w-10 h-10 rounded-full bg-[#0f2440] flex items-center justify-center text-white cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-6 h-6">
                        <path fill-rule="evenodd"
                            d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
            </div>

        </div>
    </header>


    {{-- =====================================================================
         MAIN CONTENT
         ===================================================================== --}}
    <main>
        @yield('content')
    </main>


    {{-- =====================================================================
         FOOTER
         ===================================================================== --}}
    <footer class="w-full text-white font-sans mt-auto">

        {{-- Top bar: scroll-to-top + site name --}}
        <div class="bg-[#ff9f1c] h-10 w-full relative flex items-center justify-between px-4 sm:px-6 lg:px-8">
            <div class="max-w-7xl mx-auto w-full flex items-center justify-between relative h-full">

                <button onclick="window.scrollTo({top: 0, behavior: 'smooth'})"
                    class="absolute left-4 top-0 bg-[#ff9f1c] text-[#0f2440] hover:text-black w-24 h-24 rounded-b-3xl flex items-center justify-center shadow-lg transition-all transform hover:translate-y-1 z-20 group">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3"
                        stroke="currentColor"
                        class="w-10 h-10 transform group-hover:-translate-y-1 transition-transform">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 10.5L12 3m0 0l7.5 7.5M12 3v18" />
                    </svg>
                </button>

                <div class="ml-auto flex items-center gap-2 text-[#0f2440] text-xs sm:text-sm font-semibold opacity-90">
                    <span>Institut Seni Indonesia Padangpanjang</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9s2.015-9 4.5-9m0 0a9.015 9.015 0 0 1 0 18M12 3a9.004 9.004 0 0 0-8.716 6.748M12 3a9.004 9.004 0 0 1 8.716 6.748" />
                    </svg>
                </div>

            </div>
        </div>

        {{-- Main footer body --}}
        <div class="bg-[#0f2440] pt-12 pb-16 px-4 sm:px-6 lg:px-8 relative border-t border-white/10">
            <div class="max-w-7xl mx-auto flex flex-col gap-10">

                {{-- Social / contact icon row --}}
                <div class="flex items-center justify-end gap-4 flex-wrap">

                    {{-- YouTube --}}
                    <div class="relative group">
                        <span
                            class="absolute -top-10 left-1/2 -translate-x-1/2 whitespace-nowrap bg-white text-[#0f2440] text-[10px] font-bold px-2.5 py-1 rounded-md shadow-lg opacity-0 translate-y-1 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-200 pointer-events-none z-30">
                            YouTube
                            <span
                                class="absolute left-1/2 -translate-x-1/2 top-full border-4 border-transparent border-t-white"></span>
                        </span>
                        <a href="#"
                            class="relative flex items-center justify-center w-11 h-11 rounded-xl bg-[#ff9f1c] border-2 border-[#ff9f1c] hover:bg-white hover:border-white transition-all duration-300 shadow-md group-hover:scale-110 group-hover:shadow-[#ff9f1c]/30 group-hover:shadow-lg">
                            <img src="{{ asset('images/icon/icon-YT.png') }}" alt="YouTube"
                                class="w-6 h-6 object-contain transition-all duration-300 group-hover:scale-110">
                        </a>
                    </div>

                    {{-- Instagram --}}
                    <div class="relative group">
                        <span
                            class="absolute -top-10 left-1/2 -translate-x-1/2 whitespace-nowrap bg-white text-[#0f2440] text-[10px] font-bold px-2.5 py-1 rounded-md shadow-lg opacity-0 translate-y-1 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-200 pointer-events-none z-30">
                            Instagram
                            <span
                                class="absolute left-1/2 -translate-x-1/2 top-full border-4 border-transparent border-t-white"></span>
                        </span>
                        <a href="#"
                            class="relative flex items-center justify-center w-11 h-11 rounded-xl bg-[#ff9f1c] border-2 border-[#ff9f1c] hover:bg-white hover:border-white transition-all duration-300 shadow-md group-hover:scale-110 group-hover:shadow-[#ff9f1c]/30 group-hover:shadow-lg">
                            <img src="{{ asset('images/icon/icon-IG.png') }}" alt="Instagram"
                                class="w-6 h-6 object-contain transition-all duration-300 group-hover:scale-110">
                        </a>
                    </div>

                    {{-- Website --}}
                    <div class="relative group">
                        <span
                            class="absolute -top-10 left-1/2 -translate-x-1/2 whitespace-nowrap bg-white text-[#0f2440] text-[10px] font-bold px-2.5 py-1 rounded-md shadow-lg opacity-0 translate-y-1 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-200 pointer-events-none z-30">
                            Website
                            <span
                                class="absolute left-1/2 -translate-x-1/2 top-full border-4 border-transparent border-t-white"></span>
                        </span>
                        <a href="#"
                            class="relative flex items-center justify-center w-11 h-11 rounded-xl bg-[#ff9f1c] border-2 border-[#ff9f1c] hover:bg-white hover:border-white transition-all duration-300 shadow-md group-hover:scale-110 group-hover:shadow-[#ff9f1c]/30 group-hover:shadow-lg">
                            <img src="{{ asset('images/icon/icon-book.png') }}" alt="Website"
                                class="w-6 h-6 object-contain transition-all duration-300 group-hover:scale-110">
                        </a>
                    </div>

                    {{-- Email --}}
                    <div class="relative group">
                        <span
                            class="absolute -top-10 left-1/2 -translate-x-1/2 whitespace-nowrap bg-white text-[#0f2440] text-[10px] font-bold px-2.5 py-1 rounded-md shadow-lg opacity-0 translate-y-1 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-200 pointer-events-none z-30">
                            Email
                            <span
                                class="absolute left-1/2 -translate-x-1/2 top-full border-4 border-transparent border-t-white"></span>
                        </span>
                        <a href="#"
                            class="relative flex items-center justify-center w-11 h-11 rounded-xl bg-[#ff9f1c] border-2 border-[#ff9f1c] hover:bg-white hover:border-white transition-all duration-300 shadow-md group-hover:scale-110 group-hover:shadow-[#ff9f1c]/30 group-hover:shadow-lg">
                            <img src="{{ asset('images/icon/icon-SMS.png') }}" alt="Email"
                                class="w-6 h-6 object-contain transition-all duration-300 group-hover:scale-110">
                        </a>
                    </div>

                    {{-- Phone --}}
                    <div class="relative group">
                        <span
                            class="absolute -top-10 left-1/2 -translate-x-1/2 whitespace-nowrap bg-white text-[#0f2440] text-[10px] font-bold px-2.5 py-1 rounded-md shadow-lg opacity-0 translate-y-1 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-200 pointer-events-none z-30">
                            Telepon
                            <span
                                class="absolute left-1/2 -translate-x-1/2 top-full border-4 border-transparent border-t-white"></span>
                        </span>
                        <a href="#"
                            class="relative flex items-center justify-center w-11 h-11 rounded-xl bg-[#ff9f1c] border-2 border-[#ff9f1c] hover:bg-white hover:border-white transition-all duration-300 shadow-md group-hover:scale-110 group-hover:shadow-[#ff9f1c]/30 group-hover:shadow-lg">
                            <img src="{{ asset('images/icon/icon-HP.png') }}" alt="Phone"
                                class="w-6 h-6 object-contain transition-all duration-300 group-hover:scale-110">
                        </a>
                    </div>

                    {{-- Location --}}
                    <div class="relative group">
                        <span
                            class="absolute -top-10 left-1/2 -translate-x-1/2 whitespace-nowrap bg-white text-[#0f2440] text-[10px] font-bold px-2.5 py-1 rounded-md shadow-lg opacity-0 translate-y-1 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-200 pointer-events-none z-30">
                            Lokasi
                            <span
                                class="absolute left-1/2 -translate-x-1/2 top-full border-4 border-transparent border-t-white"></span>
                        </span>
                        <a href="#"
                            class="relative flex items-center justify-center w-11 h-11 rounded-xl bg-[#ff9f1c] border-2 border-[#ff9f1c] hover:bg-white hover:border-white transition-all duration-300 shadow-md group-hover:scale-110 group-hover:shadow-[#ff9f1c]/30 group-hover:shadow-lg">
                            <img src="{{ asset('images/icon/alamat.png') }}" alt="Location"
                                class="w-6 h-6 object-contain transition-all duration-300 group-hover:scale-110">
                        </a>
                    </div>

                </div>

                {{-- Bottom row: language switcher · copyright · logo --}}
                <div
                    class="flex flex-col md:flex-row items-center justify-between gap-6 border-t border-white/10 pt-8 w-full">

                    {{-- Language button --}}
                    <div class="w-full md:w-auto flex justify-center md:justify-start">
                        <button
                            class="flex items-center gap-4 border border-[#ff9f1c] rounded-full px-5 py-2 text-sm text-gray-300 hover:bg-white/5 hover:text-white transition-all">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-[#ff9f1c]">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9s2.015-9 4.5-9m0 0a9.015 9.015 0 010 18M12 3a9.004 9.004 0 00-8.716 6.748M12 3a9.004 9.004 0 018.716 6.748" />
                            </svg>
                            <span class="font-medium">English</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="2.5" stroke="currentColor" class="w-3.5 h-3.5 text-[#ff9f1c]">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
                            </svg>
                        </button>
                    </div>

                    {{-- Copyright --}}
                    <div class="text-center md:max-w-md">
                        <p class="text-xs sm:text-sm text-gray-400 font-normal leading-relaxed">
                            Copyright © 2026 IKSBM<br>
                            University Hub by WEN Themes
                        </p>
                    </div>

                    {{-- Logo --}}
                    <div class="w-full md:w-auto flex justify-center md:justify-end">
                        <div class="w-20 h-20 bg-white rounded-full p-1.5 flex items-center justify-center shadow-md">
                            <img src="{{ asset('images/logo-isi.png') }}" alt="Logo ISI Padangpanjang"
                                class="w-full h-full object-contain">
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </footer>

</body>

</html>
