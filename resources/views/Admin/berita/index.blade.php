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
            <main class="flex-1 p-6 md:p-8 space-y-6 overflow-y-auto">

                @if (session('status'))
                    <div
                        class="bg-emerald-50 text-emerald-600 p-4 rounded-xl text-xs font-bold uppercase border border-emerald-100 shadow-sm flex items-center gap-2 animate-fade-in">
                        <svg class="w-4 h-4 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        {{ session('status') }}
                    </div>
                @endif

                <div class="flex items-center justify-between border-b border-gray-200 pb-4">
                    <div>
                        <h2 class="text-2xl font-black text-[#0f2440] uppercase tracking-tight">Kelola Berita</h2>
                        <p class="text-xs text-gray-400">Daftar seluruh berita, artikel, dan pengumuman aktif tim LPPM.</p>
                    </div>
                    <a href="{{ route('admin.berita.create') }}"
                        class="bg-[#0f2440] text-white hover:bg-slate-800 font-bold text-xs px-5 py-3 rounded-xl uppercase tracking-wider transition-all shadow-md flex items-center gap-2 select-none">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 4v16m8-8H4" />
                        </svg>
                        Tambah Berita
                    </a>
                </div>

                <div class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden">
                    <div class="w-full overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr
                                    class="bg-gray-50 text-[11px] font-bold uppercase tracking-wider text-gray-400 border-b border-gray-100">
                                    <th class="py-4 px-6 w-24">Cover</th>
                                    <th class="py-4 px-6">Informasi Berita</th>
                                    <th class="py-4 px-6">Masa Aktif</th>
                                    <th class="py-4 px-6">Status</th>
                                    <th class="py-4 px-6 text-center w-40">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100 text-sm font-normal text-gray-600">
                                @forelse ($beritas as $berita)
                                    <tr class="hover:bg-gray-50/80 transition-colors">
                                        <td class="py-4 px-6">
                                            <div
                                                class="w-16 h-12 rounded-lg overflow-hidden bg-gray-100 border border-gray-200 shadow-sm flex items-center justify-center">
                                                @if ($berita->image)
                                                    <img src="{{ asset('storage/' . $berita->image) }}" alt="Cover"
                                                        class="w-full h-full object-cover">
                                                @else
                                                    <img src="{{ asset('images/berita1.png') }}" alt="Placeholder"
                                                        class="w-full h-full object-cover opacity-50">
                                                @endif
                                            </div>
                                        </td>

                                        <td class="py-4 px-6 font-medium text-gray-800 max-w-xs md:max-w-sm">
                                            <div class="truncate text-base font-bold text-[#0f2440] mb-0.5">
                                                {{ $berita->title }}</div>
                                            <span class="text-xs text-gray-400 font-mono select-all">slug:
                                                {{ $berita->slug }}</span>
                                        </td>

                                        <td class="py-4 px-6 text-xs text-gray-500 font-medium">
                                            @if ($berita->start_date || $berita->end_date)
                                                <div class="flex flex-col gap-0.5">
                                                    <span>📅
                                                        {{ $berita->start_date ? \Carbon\Carbon::parse($berita->start_date)->format('d M Y') : 'Mulai Sekarang' }}</span>
                                                    <span class="text-gray-300 font-light">s/d</span>
                                                    <span>🏁
                                                        {{ $berita->end_date ? \Carbon\Carbon::parse($berita->end_date)->format('d M Y') : 'Selamanya' }}</span>
                                                </div>
                                            @else
                                                <span class="text-gray-400 font-normal italic">Selalu Aktif</span>
                                            @endif
                                        </td>

                                        <td class="py-4 px-6">
                                            @php
                                                $now = \Carbon\Carbon::now()->startOfDay();
                                                $start = $berita->start_date
                                                    ? \Carbon\Carbon::parse($berita->start_date)->startOfDay()
                                                    : null;
                                                $end = $berita->end_date
                                                    ? \Carbon\Carbon::parse($berita->end_date)->endOfDay()
                                                    : null;

                                                $active = true;
                                                if ($start && $now->lt($start)) {
                                                    $active = false;
                                                }
                                                if ($end && $now->gt($end)) {
                                                    $active = false;
                                                }
                                            @endphp

                                            @if ($active)
                                                <span
                                                    class="inline-flex items-center gap-1.5 text-emerald-600 bg-emerald-50 px-2.5 py-1 rounded-full text-xs font-bold uppercase tracking-wider border border-emerald-100">
                                                    <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                                                    Active
                                                </span>
                                            @else
                                                <span
                                                    class="inline-flex items-center gap-1.5 text-red-600 bg-red-50 px-2.5 py-1 rounded-full text-xs font-bold uppercase tracking-wider border border-red-100">
                                                    <span class="w-2 h-2 rounded-full bg-red-400"></span> Non-Active
                                                </span>
                                            @endif
                                        </td>

                                        <td class="py-4 px-6 text-center whitespace-nowrap">
                                            <div class="flex items-center justify-center gap-1">
                                                <a href="{{ route('admin.berita.edit', $berita->id) }}"
                                                    class="p-2 text-blue-600 hover:bg-blue-50 rounded-xl transition-all"
                                                    title="Edit Berita">
                                                    <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                    </svg>
                                                </a>

                                                <form action="{{ route('admin.berita.destroy', $berita->id) }}"
                                                    method="POST"
                                                    onsubmit="return confirm('Yakin mau hapus berita ini, Jon?')"
                                                    class="inline-block">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="p-2 text-red-600 hover:bg-red-50 rounded-xl transition-all"
                                                        title="Hapus Berita">
                                                        <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                                            viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                        </svg>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="py-12 text-center text-gray-400 italic font-medium">
                                            Belum ada berita yang diterbitkan, Jon. Klik "Tambah Berita" di atas buat
                                            mengisi data.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    @if ($beritas->hasPages())
                        <div class="p-6 border-t border-gray-100 bg-gray-50/50">
                            {{ $beritas->links() }}
                        </div>
                    @endif
                </div>

            </main>
        </div>
    </div>
@endsection
