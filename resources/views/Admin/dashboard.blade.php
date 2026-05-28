@extends('admin.app')

@section('content')
    <div class="flex min-h-screen bg-gray-100 font-['Roboto']" style="font-family: 'Roboto', sans-serif;">

        {{-- ===== SIDEBAR NAVIGASI ===== --}}
        <div class="w-64 bg-[#0f2440] text-white flex-shrink-0 hidden md:flex flex-col shadow-xl">
            <div class="p-6 border-b border-slate-700/50 flex items-center gap-3">
                <div class="bg-[#ff9f1c] p-2 rounded-lg select-none">
                    <img src="{{ asset('images/icon/globe.png') }}" alt="Logo" class="w-5 h-5 object-contain invert">
                </div>
                <div>
                    <h1 class="font-black text-lg tracking-tight text-white uppercase">Admin Panel</h1>
                    <p class="text-[9px] text-[#ff9f1c] font-bold tracking-wider uppercase">LPPM ISI Padangpanjang</p>
                </div>
            </div>

            <nav class="flex-1 p-4 space-y-1.5 overflow-y-auto">
                <a href="{{ route('admin.dashboard') }}"
                    class="flex items-center gap-3 px-4 py-3 bg-[#ff9f1c] text-[#0f2440] font-bold rounded-xl transition-all shadow-md">
                    <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                            d="M4 6a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 01-2 2H6a2 2 0 01-2-2v-4zM14 16a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 01-2 2h-2a2 2 0 01-2-2v-4z" />
                    </svg>
                    <span class="text-sm uppercase tracking-wider">Dashboard</span>
                </a>

                <a href="#"
                    class="flex items-center gap-3 px-4 py-3 text-slate-300 hover:text-white hover:bg-slate-800/50 font-medium rounded-xl transition-all group">
                    <svg class="w-5 h-5 opacity-70 group-hover:opacity-100" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                    <span class="text-sm">Data Penelitian</span>
                </a>

                <a href="#"
                    class="flex items-center gap-3 px-4 py-3 text-slate-300 hover:text-white hover:bg-slate-800/50 font-medium rounded-xl transition-all group">
                    <svg class="w-5 h-5 opacity-70 group-hover:opacity-100" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v12a2 2 0 01-2 2zM12 11l5 3H7l5-3z" />
                    </svg>
                    <span class="text-sm">Kelola Berita</span>
                </a>

                <a href="#"
                    class="flex items-center gap-3 px-4 py-3 text-slate-300 hover:text-white hover:bg-slate-800/50 font-medium rounded-xl transition-all group">
                    <svg class="w-5 h-5 opacity-70 group-hover:opacity-100" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span class="text-sm">Kelola About</span>
                </a>
            </nav>

            <div class="p-4 border-t border-slate-700/50 space-y-1">
                <a href="{{ route('home') }}" target="_blank"
                    class="flex items-center gap-3 px-4 py-2.5 text-xs text-slate-400 hover:text-[#ff9f1c] transition-all">
                    <span>Lihat Website Front-end</span>
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                    </svg>
                </a>
            </div>
        </div>

        {{-- ===== PANEL UTAMA KONTEN ===== --}}
        <div class="flex-1 flex flex-col min-w-0 overflow-x-hidden">

            {{-- HEADER DASHBOARD --}}
            <header
                class="bg-white h-16 border-b border-gray-200 flex items-center justify-between px-6 md:px-8 flex-shrink-0 shadow-sm">
                <div class="flex items-center gap-4">
                    <h2 class="text-xl font-black text-[#0f2440] uppercase tracking-tight"
                        style="font-family: 'Roboto', sans-serif;">Dashboard Overview</h2>
                </div>

                <div class="flex items-center gap-4">
                    <div class="text-right hidden sm:block">
                        <p class="text-sm font-black text-[#0f2440]">Administrator LPPM</p>
                        <p class="text-[10px] text-gray-400 uppercase font-bold tracking-wider">Super Admin</p>
                    </div>

                    {{-- TOMBOL LOGOUT AMAN METHOD POST --}}
                    <form action="{{ route('admin.logout') }}" method="POST" class="inline-block">
                        @csrf
                        <button type="submit"
                            class="flex items-center gap-2 text-red-600 hover:text-red-700 hover:bg-red-50 px-3 py-2 rounded-xl transition-all text-xs font-bold uppercase tracking-widest select-none">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                            </svg>
                            <span>Logout</span>
                        </button>
                    </form>

                    <div
                        class="w-10 h-10 bg-[#0f2440] text-[#ff9f1c] font-black rounded-full flex items-center justify-center border-2 border-[#ff9f1c] shadow-sm select-none">
                        A
                    </div>
                </div>
            </header>

            {{-- MAIN AREA KONTEN --}}
            <main class="flex-1 p-6 md:p-8 space-y-8 overflow-y-auto">

                {{-- Card Welcome --}}
                <div
                    class="bg-gradient-to-r from-[#0f2440] to-[#173761] p-6 rounded-3xl text-white shadow-md relative overflow-hidden">
                    <div class="relative z-10 space-y-1">
                        <h3 class="text-2xl font-black uppercase tracking-tight" style="font-family: 'Roboto', sans-serif;">
                            Selamat Datang Kembali, Admin!</h3>
                        <p class="text-sm text-slate-300 font-light max-w-xl">
                            Melalui panel ini Anda dapat mengelola seluruh aset digital penelitian, pengabdian masyarakat,
                            serta data publikasi institut dengan mudah dan cepat.
                        </p>
                    </div>
                    <div class="absolute top-4 right-4 opacity-10 select-none">
                        <div class="grid grid-cols-4 gap-1">
                            @for ($i = 0; $i < 16; $i++)
                                <div class="w-1.5 h-1.5 bg-white rounded-full"></div>
                            @endfor
                        </div>
                    </div>
                </div>

                {{-- Grid Statistik Singkat --}}
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div
                        class="bg-white p-6 rounded-2xl border-l-4 border-[#ff9f1c] shadow-sm flex items-center justify-between">
                        <div class="space-y-1">
                            <p class="text-xs font-bold text-gray-400 uppercase tracking-wider">Total Penelitian</p>
                            <h4 class="text-3xl font-black text-[#0f2440]" style="font-family: 'Roboto', sans-serif;">124
                            </h4>
                        </div>
                        <div class="p-3 bg-orange-50 text-[#ff9f1c] rounded-xl">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                            </svg>
                        </div>
                    </div>

                    <div
                        class="bg-white p-6 rounded-2xl border-l-4 border-[#0f2440] shadow-sm flex items-center justify-between">
                        <div class="space-y-1">
                            <p class="text-xs font-bold text-gray-400 uppercase tracking-wider">Berita Aktif</p>
                            <h4 class="text-3xl font-black text-[#0f2440]" style="font-family: 'Roboto', sans-serif;">42
                            </h4>
                        </div>
                        <div class="p-3 bg-blue-50 text-[#0f2440] rounded-xl">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v12a2 2 0 01-2 2zM12 11l5 3H7l5-3z" />
                            </svg>
                        </div>
                    </div>

                    <div
                        class="bg-white p-6 rounded-2xl border-l-4 border-emerald-500 shadow-sm flex items-center justify-between">
                        <div class="space-y-1">
                            <p class="text-xs font-bold text-gray-400 uppercase tracking-wider">Unduhan Jurnal</p>
                            <h4 class="text-3xl font-black text-[#0f2440]" style="font-family: 'Roboto', sans-serif;">
                                1,829</h4>
                        </div>
                        <div class="p-3 bg-emerald-50 text-emerald-500 rounded-xl">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                            </svg>
                        </div>
                    </div>

                    <div
                        class="bg-white p-6 rounded-2xl border-l-4 border-indigo-500 shadow-sm flex items-center justify-between">
                        <div class="space-y-1">
                            <p class="text-xs font-bold text-gray-400 uppercase tracking-wider">Pengabdian</p>
                            <h4 class="text-3xl font-black text-[#0f2440]" style="font-family: 'Roboto', sans-serif;">68
                            </h4>
                        </div>
                        <div class="p-3 bg-indigo-50 text-indigo-500 rounded-xl">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                    </div>
                </div>

                {{-- Tabel Konten Terbaru --}}
                <div class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden">
                    <div
                        class="p-6 border-b border-gray-100 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                        <div>
                            <h3 class="text-lg font-black text-[#0f2440] uppercase tracking-tight"
                                style="font-family: 'Roboto', sans-serif;">Aktivitas Konten Terbaru</h3>
                            <p class="text-xs text-gray-400 font-normal">Data penelitian atau berita yang baru saja
                                ditambahkan oleh tim LPPM.</p>
                        </div>
                        <button
                            class="bg-[#0f2440] text-white hover:bg-slate-800 font-bold text-xs px-4 py-2 rounded-xl uppercase tracking-wider transition-all select-none">
                            Kelola Semua Data
                        </button>
                    </div>

                    <div class="w-full overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr
                                    class="bg-gray-50 text-[11px] font-bold uppercase tracking-wider text-gray-400 border-b border-gray-100">
                                    <th class="py-4 px-6">Konten / Judul</th>
                                    <th class="py-4 px-6">Kategori</th>
                                    <th class="py-4 px-6">Tanggal Upload</th>
                                    <th class="py-4 px-6">Status</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100 text-sm font-normal text-gray-600">
                                <tr class="hover:bg-gray-50/80 transition-colors">
                                    <td class="py-4 px-6 font-medium text-gray-800 max-w-xs md:max-w-md truncate">
                                        Pilihan Bahasa Masyarakat Viqueque di Desa Oebelo
                                    </td>
                                    <td class="py-4 px-6">
                                        <span
                                            class="inline-block bg-orange-100 text-[#ff9f1c] font-bold text-[10px] px-2.5 py-1 rounded-full uppercase">Penelitian</span>
                                    </td>
                                    <td class="py-4 px-6 text-xs font-mono">28-05-2026</td>
                                    <td class="py-4 px-6">
                                        <span class="inline-flex items-center gap-1.5 text-emerald-600 font-bold text-xs">
                                            <span class="w-2 h-2 rounded-full bg-emerald-500"></span> Published
                                        </span>
                                    </td>
                                </tr>
                                <tr class="hover:bg-gray-50/80 transition-colors">
                                    <td class="py-4 px-6 font-medium text-gray-800 max-w-xs md:max-w-md truncate">
                                        Rapat Koordinasi Sekretariat UTBK - SNBT 2026 LPPM
                                    </td>
                                    <td class="py-4 px-6">
                                        <span
                                            class="inline-block bg-blue-100 text-[#0f2440] font-bold text-[10px] px-2.5 py-1 rounded-full uppercase">Berita</span>
                                    </td>
                                    <td class="py-4 px-6 text-xs font-mono">20-05-2026</td>
                                    <td class="py-4 px-6">
                                        <span class="inline-flex items-center gap-1.5 text-emerald-600 font-bold text-xs">
                                            <span class="w-2 h-2 rounded-full bg-emerald-500"></span> Published
                                        </span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </main>
        </div>
    </div>
@endsection
