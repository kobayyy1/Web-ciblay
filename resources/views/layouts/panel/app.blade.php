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

    <header class="w-full bg-white border-b border-gray-100 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">

            <div class="flex items-center gap-3">
                <img src="{{ asset('images/logo-isi.png') }}" alt="Logo ISI Padangpanjang"
                    class="h-12 w-auto object-contain">
            </div>

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

                <a href="{{ route('information.index') }}" @class([
                    'transition-colors pb-1',
                    'text-[#0f2440] font-semibold border-b-2 border-orange-500' => request()->routeIs(
                        'information*'),
                    'hover:text-[#0f2440]' => !request()->routeIs('information*'),
                ])>
                    Information
                </a>

                <a href="{{ route('about.index') }}" @class([
                    'transition-colors pb-1',
                    'text-[#0f2440] font-semibold border-b-2 border-orange-500' => request()->routeIs(
                        'about*'),
                    'hover:text-[#0f2440]' => !request()->routeIs('about*'),
                ])>
                    About
                </a>
            </nav>

            <div class="flex items-center gap-4">

                <div x-data="{
                    open: false,
                    currentLang: localStorage.getItem('goog_lang') || 'id',
                    langNames: { id: 'Indonesia', en: 'English', ar: 'العربية', ja: '日本語', ko: '한국어', 'zh-CN': '简体中文' },
                    changeLang(code) {
                        this.currentLang = code;
                        localStorage.setItem('goog_lang', code);
                        this.open = false;
                
                        let selectBox = document.querySelector('.goog-te-combo');
                        if (selectBox) {
                            selectBox.value = code;
                            selectBox.dispatchEvent(new Event('change'));
                        }
                    }
                }" @click.away="open = false"
                    class="relative inline-block text-left select-none">

                    <button @click="open = !open"
                        class="flex items-center gap-2 border border-gray-300 rounded-md px-3 py-1.5 text-sm text-gray-600 hover:bg-gray-50 transition-colors focus:outline-none">
                        <span x-text="langNames[currentLang]"></span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-4 h-4 transform transition-transform duration-200"
                            :class="open ? 'rotate-180' : ''">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </button>

                    <div x-show="open" x-transition:enter="transition ease-out duration-100"
                        x-transition:enter-start="transform opacity-0 scale-95"
                        x-transition:enter-end="transform opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-75"
                        x-transition:leave-start="transform opacity-100 scale-100"
                        x-transition:leave-end="transform opacity-0 scale-95"
                        class="absolute right-0 mt-2 w-40 rounded-xl bg-white shadow-xl border border-gray-100 py-1 z-50 overflow-hidden"
                        style="display: none;">

                        <template x-for="(name, code) in langNames" :key="code">
                            <button @click="changeLang(code)"
                                :class="currentLang === code ? 'bg-slate-50 text-black font-bold' :
                                    'text-gray-600 hover:bg-slate-50'"
                                class="w-full text-left px-4 py-2 text-xs transition-colors focus:outline-none"
                                x-text="name">
                            </button>
                        </template>
                    </div>
                </div>

                <div id="google_translate_element" style="display: none !important;"></div>

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

    <main>
        @yield('content')
    </main>

    <footer class="w-full text-white font-sans mt-auto">
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

        <div class="bg-[#0f2440] pt-12 pb-16 px-4 sm:px-6 lg:px-8 relative border-t border-white/10">
            <div class="max-w-7xl mx-auto flex flex-col gap-10">
                <div class="flex items-center justify-end gap-4 flex-wrap">
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

                <div
                    class="flex flex-col md:flex-row items-center justify-between gap-6 border-t border-white/10 pt-8 w-full">
                    <div class="w-full md:w-auto flex justify-center md:justify-start text-xs text-gray-500 italic">
                        LPPM - Multi Language Enabled
                    </div>

                    <div class="text-center md:max-w-md">
                        <p class="text-xs sm:text-sm text-gray-400 font-normal leading-relaxed">
                            Copyright © 2026 IKSBM<br>
                            University Hub by WEN Themes
                        </p>
                    </div>

                    <div class="w-full md:w-auto flex justify-center md:justify-end">
                        <div class="w-20 h-20 bg-white rounded-full flex items-center justify-center overflow-hidden">
                            <img src="{{ asset('images/logo-isi.png') }}" alt="Logo ISI Padangpanjang"
                                class="w-full h-full object-cover">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'id',
                includedLanguages: 'id,en,ar,ja,ko,zh-CN',
                autoDisplay: false
            }, 'google_translate_element');
        }
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>

    <style>
        .goog-te-banner-frame.skiptranslate,
        .goog-te-banner-frame {
            display: none !important;
        }

        body {
            top: 0px !important;
        }

        iframe.goog-te-banner-frame {
            display: none !important;
        }

        .goog-te-balloon-frame {
            display: none !important;
        }
    </style>
</body>

</html>
