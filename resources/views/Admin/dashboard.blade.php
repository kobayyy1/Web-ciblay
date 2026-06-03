@extends('admin.app')

@section('content')
    <div class="flex min-h-screen bg-gray-100 font-['Roboto']" style="font-family: 'Roboto', sans-serif;">

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
            @include('Admin.sidebar')
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

        <div class="flex-1 flex flex-col min-w-0 overflow-x-hidden">

            <header
                class="bg-white h-16 border-b border-gray-200 flex items-center justify-between px-6 md:px-8 flex-shrink-0 shadow-sm">
                <div class="flex items-center gap-4">
                    <h2 class="text-xl font-black text-[#0f2440] uppercase tracking-tight">Dashboard Overview</h2>
                </div>

                <div class="flex items-center gap-4">
                    <div class="text-right hidden sm:block">
                        <p class="text-sm font-black text-[#0f2440]">Administrator LPPM</p>
                        <p class="text-[10px] text-gray-400 uppercase font-bold tracking-wider">Super Admin</p>
                    </div>

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

            <main class="flex-1 p-6 md:p-8 space-y-8 overflow-y-auto">

                <div
                    class="bg-gradient-to-r from-[#0f2440] to-[#173761] p-6 rounded-3xl text-white shadow-md relative overflow-hidden">
                    <div class="relative z-10 space-y-1">
                        <h3 class="text-2xl font-black uppercase tracking-tight">Selamat Datang Kembali, Admin!</h3>
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

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div
                        class="bg-white p-6 rounded-2xl border-l-4 border-[#ff9f1c] shadow-sm flex items-center justify-between">
                        <div class="space-y-1">
                            <p class="text-xs font-bold text-gray-400 uppercase tracking-wider">Total Penelitian</p>
                            <h4 class="text-3xl font-black text-[#0f2440]">{{ $totalPenelitian ?? 0 }}</h4>
                        </div>
                        <div class="p-3 bg-orange-50 text-[#ff9f1c] rounded-xl">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" />
                            </svg>
                        </div>
                    </div>

                    <div
                        class="bg-white p-6 rounded-2xl border-l-4 border-[#0f2440] shadow-sm flex items-center justify-between">
                        <div class="space-y-1">
                            <p class="text-xs font-bold text-gray-400 uppercase tracking-wider">Total Berita</p>
                            <h4 class="text-3xl font-black text-[#0f2440]">{{ $totalBerita ?? 0 }}</h4>
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
                            <p class="text-xs font-bold text-gray-400 uppercase tracking-wider">Total Media</p>
                            <h4 class="text-3xl font-black text-[#0f2440]">{{ $totalMedia ?? 0 }}</h4>
                        </div>
                        <div class="p-3 bg-emerald-50 text-emerald-500 rounded-xl">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                        </div>
                    </div>

                    <div
                        class="bg-white p-6 rounded-2xl border-l-4 border-indigo-500 shadow-sm flex items-center justify-between">
                        <div class="space-y-1">
                            <p class="text-xs font-bold text-gray-400 uppercase tracking-wider">Total Informasi</p>
                            <h4 class="text-3xl font-black text-[#0f2440]">{{ $totalInformasi ?? 0 }}</h4>
                        </div>
                        <div class="p-3 bg-indigo-50 text-indigo-500 rounded-xl">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden">
                    <div
                        class="p-6 border-b border-gray-100 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                        <div>
                            <h3 class="text-lg font-black text-[#0f2440] uppercase tracking-tight">Aktivitas Konten Terbaru
                            </h3>
                            <p class="text-xs text-gray-400 font-normal">Data publikasi riset ilmiah kebudayaan dan seni
                                yang baru saja ditambahkan.</p>
                        </div>
                        <a href="{{ route('admin.penelitian.index') }}"
                            class="bg-[#0f2440] text-white hover:bg-slate-800 font-bold text-xs px-4 py-2 rounded-xl uppercase tracking-wider transition-all select-none text-center">
                            Kelola Semua Data
                        </a>
                    </div>

                    <div class="w-full overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr
                                    class="bg-gray-50 text-[11px] font-bold uppercase tracking-wider text-gray-400 border-b border-gray-100">
                                    <th class="py-4 px-6">Konten / Judul</th>
                                    <th class="py-4 px-6">Peneliti Utama</th>
                                    <th class="py-4 px-6">Tanggal Upload</th>
                                    <th class="py-4 px-6">Status</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100 text-sm font-normal text-gray-600">
                                @forelse($latestPenelitians as $activity)
                                    <tr class="hover:bg-gray-50/80 transition-colors">
                                        <td class="py-4 px-6 font-medium text-gray-800 max-w-xs md:max-w-md truncate">
                                            {{ $activity->judul }}
                                        </td>
                                        <td class="py-4 px-6 font-semibold text-[#0f2440]">
                                            {{ $activity->nama_peneliti }}
                                        </td>
                                        <td class="py-4 px-6 text-xs font-mono">
                                            {{ $activity->tanggal_penelitian ? \Carbon\Carbon::parse($activity->tanggal_penelitian)->format('d-m-Y') : $activity->created_at->format('d-m-Y') }}
                                        </td>
                                        <td class="py-4 px-6">
                                            <span
                                                class="inline-flex items-center gap-1.5 text-emerald-600 font-bold text-xs">
                                                <span class="w-2 h-2 rounded-full bg-emerald-500"></span> Published
                                            </span>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="py-12 text-center text-gray-400 italic font-medium">
                                            Belum ada data aktivitas penelitian terbaru di sistem.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>

            </main>
        </div>
    </div>
@endsection
