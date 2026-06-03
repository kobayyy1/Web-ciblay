<nav class="flex-1 p-4 space-y-1.5 overflow-y-auto">
    <a href="{{ route('admin.dashboard') }}"
        class="flex items-center gap-3 px-4 py-3 {{ request()->routeIs('admin.dashboard') ? 'bg-[#ff9f1c] text-[#0f2440] font-bold shadow-md' : 'text-slate-300 hover:text-white hover:bg-slate-800/50 font-medium' }} rounded-xl transition-all group">
        <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                d="M4 6a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 01-2 2H6a2 2 0 01-2-2v-4zM14 16a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 01-2 2h-2a2 2 0 01-2-2v-4z" />
        </svg>
        <span class="text-sm uppercase tracking-wider">Dashboard</span>
    </a>

    <a href="{{ route('admin.penelitian.index') }}"
        class="flex items-center gap-3 px-4 py-3 {{ request()->routeIs('admin.penelitian.*') ? 'bg-[#ff9f1c] text-[#0f2440] font-bold shadow-md' : 'text-slate-300 hover:text-white hover:bg-slate-800/50 font-medium' }} rounded-xl transition-all group">
        <svg class="w-5 h-5 opacity-70 group-hover:opacity-100" fill="none" stroke="currentColor"
            viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
        </svg>
        <span class="text-sm">Data Penelitian</span>
    </a>

    <a href="{{ route('admin.berita.index') }}"
        class="flex items-center gap-3 px-4 py-3 {{ request()->routeIs('admin.berita.*') ? 'bg-[#ff9f1c] text-[#0f2440] font-bold shadow-md' : 'text-slate-300 hover:text-white hover:bg-slate-800/50 font-medium' }} rounded-xl transition-all group">
        <svg class="w-5 h-5 opacity-70 group-hover:opacity-100" fill="none" stroke="currentColor"
            viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v12a2 2 0 01-2 2zM12 11l5 3H7l5-3z" />
        </svg>
        <span class="text-sm">Kelola Berita</span>
    </a>

    <a href="{{ route('admin.media.index') }}"
        class="flex items-center gap-3 px-4 py-3 {{ request()->routeIs('admin.media.*') ? 'bg-[#ff9f1c] text-[#0f2440] font-bold shadow-md' : 'text-slate-300 hover:text-white hover:bg-slate-800/50 font-medium' }} rounded-xl transition-all group">
        <svg class="w-5 h-5 opacity-70 group-hover:opacity-100" fill="none" stroke="currentColor"
            viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
        </svg>
        <span class="text-sm">Kelola Media</span>
    </a>

    <a href="{{ route('admin.information.index') }}"
        class="flex items-center gap-3 px-4 py-3 {{ request()->routeIs('admin.information.*') ? 'bg-[#ff9f1c] text-[#0f2440] font-bold shadow-md' : 'text-slate-300 hover:text-white hover:bg-slate-800/50 font-medium' }} rounded-xl transition-all group">
        <svg class="w-5 h-5 opacity-70 group-hover:opacity-100" fill="none" stroke="currentColor"
            viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
        </svg>
        <span class="text-sm">Kelola Informasi</span>
    </a>

    <a href="{{ route('admin.about.index') }}"
        class="flex items-center gap-3 px-4 py-3 {{ request()->routeIs('admin.about.*') ? 'bg-[#ff9f1c] text-[#0f2440] font-bold shadow-md' : 'text-slate-300 hover:text-white hover:bg-slate-800/50 font-medium' }} rounded-xl transition-all group">
        <svg class="w-5 h-5 opacity-70 group-hover:opacity-100" fill="none" stroke="currentColor"
            viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
        <span class="text-sm">Kelola About</span>
    </a>

    <div class="border-t border-slate-700/40 my-3"></div>

    <div x-data="{
        open: false,
        currentLang: localStorage.getItem('goog_lang') || 'id',
        langNames: { id: 'Indonesia', en: 'English', ar: 'Arb (العربية)', ja: 'Jpn (日本語)', ko: 'Kor (한국어)', 'zh-CN': 'Chn (中文)' },
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
    }" class="relative">
        <button @click="open = !open"
            class="w-full flex items-center justify-between px-4 py-3 text-slate-300 hover:text-white hover:bg-slate-800/50 font-medium rounded-xl transition-all focus:outline-none group">
            <div class="flex items-center gap-3">
                <svg class="w-5 h-5 opacity-70 group-hover:opacity-100 transition-opacity" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 002 2h2a2 2 0 012 2v2.935M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span class="text-sm">Lang: <strong class="text-[#ff9f1c]"
                        x-text="langNames[currentLang]"></strong></span>
            </div>
            <svg class="w-4 h-4 transform transition-transform duration-200 text-slate-400 group-hover:text-white"
                :class="open ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                    d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
            </svg>
        </button>

        <div x-show="open" @click.away="open = false"
            class="mt-1 bg-slate-900/40 rounded-xl overflow-hidden border border-slate-800/60 space-y-0.5"
            style="display: none;">
            <template x-for="(name, code) in langNames" :key="code">
                <button @click="changeLang(code)"
                    :class="currentLang === code ? 'bg-[#ff9f1c] text-[#0f2440] font-bold' :
                        'text-slate-400 hover:bg-slate-800 hover:text-white'"
                    class="w-full text-left px-12 py-2 text-xs transition-colors focus:outline-none" x-text="name">
                </button>
            </template>
        </div>
    </div>
</nav>
