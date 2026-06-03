<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Data Penelitian - LPPM ISI Padangpanjang</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }

        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }

        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        /* BANNER CLEANER ANTI-GOOGLE */
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
</head>

<body class="bg-white antialiased">
    <section class="relative min-h-screen w-full overflow-hidden flex items-center py-16 lg:py-12 pr-0 xl:pr-16">

        <div
            class="absolute top-0 left-1/2 -translate-x-1/2 opacity-[0.04] pointer-events-none select-none z-0 hidden lg:block">
            <svg width="240" height="140" viewBox="0 0 100 60" fill="none">
                <path d="M10 50 L50 10 L90 50" stroke="#0f2440" stroke-width="9" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
        </div>
        <div class="absolute bottom-4 left-44 opacity-[0.04] pointer-events-none select-none z-0 hidden lg:block">
            <svg width="200" height="200" viewBox="0 0 100 100" fill="none">
                <path d="M90 10 L10 10 L10 90 M10 10 L90 90" stroke="#0f2440" stroke-width="10" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
        </div>

        @php
            $imageUrls = [];
            if (!empty($penelitian->image) && is_array($penelitian->image)) {
                foreach (array_values(array_filter($penelitian->image)) as $img) {
                    $imageUrls[] = asset('storage/' . $img);
                }
            }
            if (empty($imageUrls)) {
                $imageUrls[] = asset('images/berita1.png');
            }
            $totalImages = count($imageUrls);
        @endphp

        <div
            class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-12 gap-12 items-center w-full relative z-10">
            <div class="lg:col-span-5 flex flex-col justify-center text-left items-start z-20 space-y-6">

                <div class="flex flex-col items-start gap-1">
                    <div class="flex items-center gap-3 select-none">
                        <img src="{{ asset('images/icon-notice.png') }}" alt="Notice" class="h-6 object-contain">

                        <div class="flex items-center gap-[3px]">
                            <div class="grid grid-cols-2 gap-[1px]">
                                <span class="w-1.5 h-1.5 bg-[#ff9f1c] rounded-[1px]"></span>
                                <span class="w-1.5 h-1.5 bg-transparent"></span>
                                <span class="w-1.5 h-1.5 bg-transparent"></span>
                                <span class="w-1.5 h-1.5 bg-[#ff9f1c] rounded-[1px]"></span>
                            </div>
                            <div class="grid grid-cols-2 gap-[1px]">
                                <span class="w-1.5 h-1.5 bg-[#ff9f1c] rounded-[1px]"></span>
                                <span class="w-1.5 h-1.5 bg-transparent"></span>
                                <span class="w-1.5 h-1.5 bg-transparent"></span>
                                <span class="w-1.5 h-1.5 bg-[#ff9f1c] rounded-[1px]"></span>
                            </div>
                            <div class="grid grid-cols-2 gap-[1px]">
                                <span class="w-1.5 h-1.5 bg-[#ff9f1c] rounded-[1px]"></span>
                                <span class="w-1.5 h-1.5 bg-transparent"></span>
                                <span class="w-1.5 h-1.5 bg-transparent"></span>
                                <span class="w-1.5 h-1.5 bg-[#ff9f1c] rounded-[1px]"></span>
                            </div>
                        </div>
                    </div>
                    <h2
                        class="text-3xl sm:text-4xl md:text-5xl font-black text-[#0f2440] tracking-tight uppercase mt-1 leading-none">
                        Data Penelitian
                    </h2>
                    <span class="block w-24 h-[3.5px] bg-[#0f2440] rounded-full mt-1.5"></span>
                </div>

                <div class="flex items-center gap-4 w-full max-w-md">
                    <div class="relative w-44 h-28 flex-shrink-0 select-none">
                        <img src="{{ asset('images/icon/border-foto.png') }}" alt="Card Background"
                            class="w-full h-full object-contain relative z-10 pointer-events-none">

                        <div
                            class="absolute right-[8px] top-[8px] w-24 h-24 rounded-full overflow-hidden bg-transparent z-20">
                            <img src="{{ $penelitian->avatar ? asset('storage/' . $penelitian->avatar) : asset('images/avatar-default.png') }}"
                                alt="Foto Peneliti" class="w-full h-full object-cover"
                                onerror="this.src='{{ asset('images/avatar-default.png') }}'">
                        </div>
                    </div>

                    <div class="flex flex-col text-left space-y-0.5">
                        <span class="font-extrabold text-base sm:text-lg text-[#0f2440] leading-tight">
                            {{ $penelitian->nama_peneliti ?? 'Dr. Yusril, S.S., M.Sn.' }}
                        </span>
                        <div class="flex items-center">
                            <span
                                class="bg-[#0f2440] text-white text-[9px] font-bold px-2 py-0.5 rounded uppercase tracking-wider">Ketua</span>
                        </div>
                        <span class="text-[10px] text-gray-400 font-medium flex items-center gap-1 pt-0.5">
                            <span class="w-1 h-2.5 bg-[#ff9f1c] rounded-full"></span>
                            Upload &nbsp;{{ \Carbon\Carbon::parse($penelitian->tanggal_penelitian)->format('d-m-Y') }}
                        </span>
                    </div>
                </div>

                <div class="space-y-3 text-left w-full">
                    <h1 class="text-2xl sm:text-3xl font-black text-[#0f2440] leading-snug tracking-tight break-words">
                        {{ $penelitian->judul }}
                    </h1>
                    <p
                        class="text-gray-500 text-xs sm:text-sm font-normal leading-relaxed border-l-2 border-slate-200 pl-3 break-words">
                        {{ $penelitian->deskripsi_singkat }}
                    </p>
                </div>

                <div x-data="{ buka: false }" class="w-full text-left">
                    <div :class="buka ? 'max-h-none' : 'max-h-32 overflow-y-auto no-scrollbar'"
                        class="text-left text-gray-600 text-xs sm:text-sm leading-relaxed max-w-xl font-light space-y-2 transition-all duration-300">
                        <p class="break-words">{!! nl2br(e($penelitian->deskripsi_lengkap)) !!}</p>
                    </div>

                    <button @click="buka = !buka"
                        class="inline-flex items-center gap-1 text-xs font-black text-[#ff9f1c] hover:text-[#0f2440] transition-colors mt-3 uppercase tracking-widest focus:outline-none select-none">
                        <span x-text="buka ? 'Sembunyikan' : 'Selengkapnya'"></span>
                        <img src="{{ asset('images/icon-arrow.png') }}"
                            class="w-2.5 h-2.5 object-contain transition-transform duration-300"
                            :class="buka ? '-rotate-90' : 'rotate-90'">
                    </button>
                </div>

                <div class="flex flex-col gap-2.5 pt-1 w-full">
                    <div class="flex items-center gap-2 select-none">
                        <div
                            class="w-10 h-10 bg-[#ff9f1c] rounded-xl flex items-center justify-center shadow-md flex-shrink-0">
                            <img src="{{ asset('images/icon/download.png') }}"
                                class="w-5 h-5 object-contain text-[#0f2440]">
                        </div>
                        <img src="{{ asset('images/icon/arrow-2.png') }}" class="w-4 h-4 object-contain transform">
                    </div>

                    @if ($penelitian->file_pdf)
                        <a href="{{ asset('storage/' . $penelitian->file_pdf) }}" target="_blank"
                            class="inline-flex items-center justify-center bg-[#0f2440] text-white hover:bg-slate-800 font-bold text-xs uppercase tracking-widest px-8 h-12 rounded-xl shadow-md transition-all active:scale-95 w-fit">
                            <span class="w-1 h-3.5 bg-[#ff9f1c] rounded-full mr-3.5"></span>
                            Download
                        </a>
                    @else
                        <span class="text-xs text-gray-400 italic font-medium">Berkas PDF lampiran belum
                            tersedia.</span>
                    @endif
                </div>
            </div>

            <div x-data="{ activeIdx: 0, images: @js($imageUrls), total: {{ $totalImages }} }"
                class="lg:col-span-7 w-full flex flex-col items-center select-none space-y-4 max-w-[540px] xl:max-w-[580px] lg:ml-auto relative">
                <div
                    class="relative w-full aspect-[4/3] rounded-[2.5rem] overflow-hidden shadow-2xl bg-slate-900 border border-gray-100">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/10 via-transparent to-transparent z-10">
                    </div>
                    <img :src="images[activeIdx]" alt="Riset LPPM"
                        class="w-full h-full object-cover transition-all duration-300"
                        onerror="this.src='{{ asset('images/berita1.png') }}'">
                </div>

                <div class="flex items-center justify-center gap-4 w-full pt-2" x-show="total > 1">

                    <div @click="activeIdx = (activeIdx - 1 + total) % total"
                        class="relative w-28 h-16 rounded-xl overflow-hidden opacity-50 border border-gray-200 hidden sm:block bg-slate-900 shadow-sm flex-shrink-0 cursor-pointer hover:opacity-75 transition-opacity">
                        <img :src="images[(activeIdx - 1 + total) % total]"
                            class="w-full h-full object-cover opacity-20">
                        <div
                            class="absolute inset-0 bg-black/40 flex flex-col items-center justify-center text-white p-1">
                            <span class="text-[9px] font-mono font-bold tracking-tight"
                                x-text="String(((activeIdx - 1 + total) % total) + 1).padStart(2, '0') + ' / ' + String(total).padStart(2, '0')"></span>
                            <span
                                class="text-[9px] font-black uppercase tracking-wider mt-0.5 flex items-center gap-1">
                                <img src="{{ asset('images/icon-arrow.png') }}"
                                    class="w-2 h-2 object-contain transform -rotate-180"> Back
                            </span>
                        </div>
                    </div>

                    <div class="relative flex items-center px-4 flex-shrink-0">
                        <button @click="activeIdx = (activeIdx - 1 + total) % total"
                            class="absolute -left-1 z-30 bg-white text-[#0f2440] w-7 h-7 rounded-full flex items-center justify-center shadow-md border border-gray-100 hover:scale-105 transition-transform focus:outline-none">
                            <img src="{{ asset('images/icon-arrow.png') }}"
                                class="w-3 h-3 object-contain transform -rotate-180">
                        </button>

                        <div
                            class="w-32 h-[76px] rounded-xl overflow-hidden border-2 border-[#ff9f1c] shadow-md bg-slate-900 transform scale-105 z-10">
                            <img :src="images[activeIdx]" class="w-full h-full object-cover">
                        </div>

                        <button @click="activeIdx = (activeIdx + 1) % total"
                            class="absolute -right-1 z-30 bg-white text-[#0f2440] w-7 h-7 rounded-full flex items-center justify-center shadow-md border border-gray-100 hover:scale-105 transition-transform focus:outline-none">
                            <img src="{{ asset('images/icon-arrow.png') }}" class="w-3 h-3 object-contain">
                        </button>
                    </div>

                    <div @click="activeIdx = (activeIdx + 1) % total"
                        class="relative w-28 h-16 rounded-xl overflow-hidden opacity-50 border border-gray-200 hidden sm:block bg-slate-900 shadow-sm flex-shrink-0 cursor-pointer hover:opacity-75 transition-opacity">
                        <img :src="images[(activeIdx + 1) % total]" class="w-full h-full object-cover opacity-20">
                        <div
                            class="absolute inset-0 bg-black/40 flex flex-col items-center justify-center text-white p-1">
                            <span class="text-[9px] font-black uppercase tracking-wider flex items-center gap-1">
                                Next <img src="{{ asset('images/icon-arrow.png') }}" class="w-2 h-2 object-contain">
                            </span>
                            <span class="text-[9px] font-mono font-bold tracking-tight mt-0.5"
                                x-text="String(((activeIdx + 1) % total) + 1).padStart(2, '0') + ' / ' + String(total).padStart(2, '0')"></span>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <div
            class="absolute right-0 top-0 bottom-0 w-20 bg-[#0f2440] hidden xl:flex flex-col items-center justify-center py-6 select-none z-30 shadow-2xl border-l border-white/5 overflow-visible">
            <div
                class="bg-[#ff9f1c] w-9 rounded-full h-[90%] flex flex-col items-center justify-between py-8 relative overflow-visible shadow-inner border-r border-orange-400/30">

                <div class="flex items-start justify-center pt-2 w-full relative overflow-visible">
                    <h2 class="text-white font-black text-4xl tracking-widest uppercase drop-shadow-[2px_4px_3px_rgba(0,0,0,0.4)] absolute left-[60%] z-10 whitespace-nowrap"
                        style="writing-mode: vertical-rl; font-family: 'Roboto', sans-serif;">
                        LPPM
                    </h2>
                </div>

                <div class="mt-auto flex flex-col items-center gap-4 w-full text-center pb-2 select-none">
                    <p class="text-[#0f2440] font-bold text-[8px] tracking-wider uppercase whitespace-nowrap mx-auto"
                        style="writing-mode: vertical-rl;">
                        Institut Seni Indonesia Padangpanjang
                    </p>
                    <img src="{{ asset('images/icon/globe.png') }}" alt="Globe"
                        class="w-4 h-4 object-contain opacity-80">
                </div>

            </div>
        </div>

    </section>

   
    <div id="google_translate_element" style="display: none !important;"></div>

    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'id',
                includedLanguages: 'en,id',
                autoDisplay: false
            }, 'google_translate_element');
        }
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            let savedLang = localStorage.getItem('goog_lang') || 'id';

            if (savedLang !== 'id') {
                setTimeout(() => {
                    let selectBox = document.querySelector('.goog-te-combo');
                    if (selectBox) {
                        selectBox.value = savedLang;
                        selectBox.dispatchEvent(new Event('change'));
                    }
                }, 700); 
            }
        });
    </script>
</body>

</html>
