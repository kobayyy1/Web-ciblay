<nav class="flex-1 p-4 space-y-1.5 overflow-y-auto">
    {{-- MENU DASHBOARD --}}
    <a href="{{ route('admin.dashboard') }}"
        class="flex items-center gap-3 px-4 py-3 {{ request()->routeIs('admin.dashboard') ? 'bg-[#ff9f1c] text-[#0f2440] font-bold shadow-md' : 'text-slate-300 hover:text-white hover:bg-slate-800/50 font-medium' }} rounded-xl transition-all group">
        <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                d="M4 6a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 01-2 2H6a2 2 0 01-2-2v-4zM14 16a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 01-2 2h-2a2 2 0 01-2-2v-4z" />
        </svg>
        <span class="text-sm uppercase tracking-wider">Dashboard</span>
    </a>

    {{-- MENU DATA PENELITIAN --}}
    <a href="{{ route('admin.penelitian.index') }}"
        class="flex items-center gap-3 px-4 py-3 {{ request()->routeIs('admin.penelitian.index') ? 'bg-[#ff9f1c] text-[#0f2440] font-bold shadow-md' : 'text-slate-300 hover:text-white hover:bg-slate-800/50 font-medium' }} rounded-xl transition-all group">
        <svg class="w-5 h-5 opacity-70 group-hover:opacity-100" fill="none" stroke="currentColor"
            viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
        </svg>
        <span class="text-sm">Data Penelitian</span>
    </a>

    {{-- MENU KELOLA BERITA (Otomatis Aktif untuk semua rute admin.berita) --}}
    <a href="{{ route('admin.berita.index') }}"
        class="flex items-center gap-3 px-4 py-3 {{ request()->routeIs('admin.berita.*') ? 'bg-[#ff9f1c] text-[#0f2440] font-bold shadow-md' : 'text-slate-300 hover:text-white hover:bg-slate-800/50 font-medium' }} rounded-xl transition-all group">
        <svg class="w-5 h-5 opacity-70 group-hover:opacity-100" fill="none" stroke="currentColor"
            viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v12a2 2 0 01-2 2zM12 11l5 3H7l5-3z" />
        </svg>
        <span class="text-sm">Kelola Berita</span>
    </a>

    {{-- MENU KELOLA ABOUT --}}
    <a href="#"
        class="flex items-center gap-3 px-4 py-3 {{ request()->routeIs('admin.about.*') ? 'bg-[#ff9f1c] text-[#0f2440] font-bold shadow-md' : 'text-slate-300 hover:text-white hover:bg-slate-800/50 font-medium' }} rounded-xl transition-all group">
        <svg class="w-5 h-5 opacity-70 group-hover:opacity-100" fill="none" stroke="currentColor"
            viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
        <span class="text-sm">Kelola About</span>
    </a>
</nav>
