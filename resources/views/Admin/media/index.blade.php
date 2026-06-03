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
        </div>

        <div class="flex-1 flex flex-col min-w-0 overflow-x-hidden">
            <header
                class="bg-white h-16 border-b border-gray-200 flex items-center justify-between px-6 md:px-8 flex-shrink-0 shadow-sm">
                <h2 class="text-xl font-black text-[#0f2440] uppercase tracking-tight">Kelola Media</h2>
                <div class="flex items-center gap-4">
                    <div class="text-right hidden sm:block">
                        <p class="text-sm font-black text-[#0f2440]">Administrator LPPM</p>
                        <p class="text-[10px] text-gray-400 uppercase font-bold tracking-wider">Super Admin</p>
                    </div>
                    <div
                        class="w-10 h-10 bg-[#0f2440] text-[#ff9f1c] font-black rounded-full flex items-center justify-center border-2 border-[#ff9f1c] shadow-sm select-none">
                        A</div>
                </div>
            </header>

            <main class="flex-1 p-6 md:p-8 space-y-8 overflow-y-auto">
                @if (session('success'))
                    <div
                        class="bg-emerald-50 border-l-4 border-emerald-500 text-emerald-700 p-4 rounded-xl text-sm font-bold shadow-sm">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden">
                    <div
                        class="p-6 border-b border-gray-100 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                        <div>
                            <h3 class="text-lg font-black text-[#0f2440] uppercase tracking-tight">Daftar Galeri Media</h3>
                            <p class="text-xs text-gray-400 font-normal">Kumpulan data publikasi media cetak/digital yang
                                tampil pada halaman depan.</p>
                        </div>
                        <a href="{{ route('admin.media.create') }}"
                            class="bg-[#0f2440] text-white hover:bg-slate-800 font-bold text-xs px-5 py-3 rounded-xl uppercase tracking-wider transition-all select-none text-center">
                            Tambah Media Baru
                        </a>
                    </div>

                    <div class="w-full overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr
                                    class="bg-gray-50 text-[11px] font-bold uppercase tracking-wider text-gray-400 border-b border-gray-100">
                                    <th class="py-4 px-6 w-24">Cover</th>
                                    <th class="py-4 px-6">Judul Media</th>
                                    <th class="py-4 px-6">Deskripsi Singkat</th>
                                    <th class="py-4 px-6 text-center w-40">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100 text-sm font-normal text-gray-600">
                                @forelse($medias as $media)
                                    <tr class="hover:bg-gray-50/80 transition-colors">
                                        <td class="py-4 px-6">
                                            <div
                                                class="w-16 h-12 rounded-lg overflow-hidden bg-slate-100 border border-gray-200">
                                                <img src="{{ $media->image ? asset('storage/' . $media->image) : asset('images/berita1.png') }}"
                                                    class="w-full h-full object-cover">
                                            </div>
                                        </td>
                                        <td class="py-4 px-6 font-bold text-gray-800 max-w-xs truncate">
                                            {{ $media->title }}
                                        </td>
                                        <td class="py-4 px-6 max-w-sm truncate">
                                            {{ $media->deskripsi_singkat }}
                                        </td>
                                        <td class="py-4 px-6">
                                            <div class="flex items-center justify-center gap-2">
                                                <a href="{{ route('admin.media.edit', $media->id) }}"
                                                    class="p-2 text-blue-600 hover:bg-blue-50 rounded-xl transition-all">
                                                    <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                    </svg>
                                                </a>
                                                <form action="{{ route('admin.media.destroy', $media->id) }}" method="POST"
                                                    onsubmit="return confirm('Yakin ingin menghapus data media ini, Jon?')"
                                                    class="inline-block">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="p-2 text-red-600 hover:bg-red-50 rounded-xl transition-all">
                                                        <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                                            viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-4v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                        </svg>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="py-12 text-center text-gray-400 italic font-medium">
                                            Belum ada data media di database, Jon.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    @if ($medias->hasPages())
                        <div class="p-6 border-t border-gray-100">
                            {{ $medias->links() }}
                        </div>
                    @endif
                </div>
            </main>
        </div>
    </div>
@endsection
