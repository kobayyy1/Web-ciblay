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

                @if (session('success'))
                    <div
                        class="bg-emerald-50 text-emerald-600 p-4 rounded-xl text-xs font-bold uppercase border border-emerald-100 shadow-sm flex items-center gap-2 animate-fade-in">
                        <svg class="w-4 h-4 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        {{ session('success') }}
                    </div>
                @endif

                <div class="flex items-center justify-between border-b border-gray-200 pb-4">
                    <div>
                        <h2 class="text-2xl font-black text-[#0f2440] uppercase tracking-tight">Kelola About</h2>
                        <p class="text-xs text-gray-400">Daftar seluruh profil pimpinan, berkas visi, dan misi tim LPPM.</p>
                    </div>
                    <a href="{{ route('admin.about.create') }}"
                        class="bg-[#0f2440] text-white hover:bg-slate-800 font-bold text-xs px-5 py-3 rounded-xl uppercase tracking-wider transition-all shadow-md flex items-center gap-2 select-none">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 4v16m8-8H4" />
                        </svg>
                        Tambah Data About
                    </a>
                </div>

                <div class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden">
                    <div class="w-full overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr
                                    class="bg-gray-50 text-[11px] font-bold uppercase tracking-wider text-gray-400 border-b border-gray-100 whitespace-nowrap">
                                    <th class="py-4 px-6 w-24">Cover</th>
                                    <th class="py-4 px-6">Pimpinan / Jabatan</th>
                                    <th class="py-4 px-6">Headline Lembaga</th>
                                    <th class="py-4 px-6 text-center w-40">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100 text-sm font-normal text-gray-600">
                                @forelse ($abouts as $item)
                                    <tr class="hover:bg-gray-50/80 transition-colors">
                                        <td class="py-4 px-6">
                                            <div
                                                class="w-16 h-12 rounded-lg overflow-hidden bg-gray-100 border border-gray-200 shadow-sm flex items-center justify-center">
                                                @if ($item->image)
                                                    <img src="{{ asset('storage/' . $item->image) }}" alt="Cover"
                                                        class="w-full h-full object-cover">
                                                @else
                                                    <img src="{{ asset('images/foto-ketua.png') }}" alt="Placeholder"
                                                        class="w-full h-full object-cover opacity-50">
                                                @endif
                                            </div>
                                        </td>

                                        <td class="py-4 px-6 font-medium text-gray-800 max-w-xs md:max-w-sm">
                                            <div class="truncate text-base font-bold text-[#0f2440] mb-0.5">
                                                {{ $item->name }}</div>
                                            <span class="text-xs text-gray-400 font-mono">{{ $item->title }}</span>
                                        </td>

                                        <td class="py-4 px-6 text-gray-500 max-w-xs truncate">
                                            {{ $item->headline }}
                                        </td>

                                        <td class="py-4 px-6 text-center whitespace-nowrap">
                                            <div class="flex items-center justify-center gap-1">
                                                <a href="{{ route('admin.about.edit', $item->id) }}"
                                                    class="p-2 text-blue-600 hover:bg-blue-50 rounded-xl transition-all"
                                                    title="Edit About">
                                                    <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                    </svg>
                                                </a>

                                                <form action="{{ route('admin.about.destroy', $item->id) }}" method="POST"
                                                    onsubmit="return confirm('Yakin mau hapus data about ini, Jon?')"
                                                    class="inline-block">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="p-2 text-red-600 hover:bg-red-50 rounded-xl transition-all"
                                                        title="Hapus About">
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
                                        <td colspan="4" class="py-12 text-center text-gray-400 italic font-medium">
                                            Belum ada dokumentasi data About yang tersimpan, Jon. Klik "Tambah Data About"
                                            di atas buat mengisi data.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    @if ($abouts->hasPages())
                        <div class="p-6 border-t border-gray-100 bg-gray-50/50">
                            {{ $abouts->links() }}
                        </div>
                    @endif
                </div>

            </main>
        </div>
    </div>
@endsection
