@extends('layouts.panel.app')

@section('content')
    @php
        $formattedPenelitians = $penelitians->map(function ($p) {
            $cover = asset('images/berita1.png');
            if (!empty($p->image) && is_array($p->image) && isset($p->image[0])) {
                $cover = asset('storage/' . $p->image[0]);
            } elseif (!empty($p->image) && is_string($p->image)) {
                $cover = asset('storage/' . $p->image);
            }
            return [
                'id' => $p->id,
                'judul' => $p->judul,
                'nama_peneliti' => $p->nama_peneliti ?? 'Dr. Yusril, S.S., M.Sn.',
                'deskripsi_singkat' => $p->deskripsi_singkat,
                'image' => $cover,
                'url' => route('detail.penelitian', $p->id),
            ];
        });

        $formattedBeritas = $beritas->map(function ($berita) {
            return [
                'title' => $berita->title,
                'subTitle' => \Illuminate\Support\Str::limit(strip_tags($berita->content), 120, '...'),
                'date' => \Carbon\Carbon::parse($berita->start_date ?? $berita->created_at)->format('d-m-Y'),
                'image' => $berita->image ? asset('storage/' . $berita->image) : asset('images/berita1.png'),
            ];
        });

        $formattedInformations = $informations->map(function ($info) {
            return [
                'title' => $info->title,
                'deskripsi_singkat' => $info->deskripsi_singkat ?? $info->sub_title,
                'deskripsi_lengkap' => nl2br(e($info->deskripsi_lengkap)),
                'image' => $info->image ? asset('storage/' . $info->image) : null,
                'date' => \Carbon\Carbon::parse($info->created_at)->format('d F Y'),
            ];
        });
    @endphp

    <div x-data="researchComponent({{ $formattedPenelitians->toJson() }})">
        <section class="bg-white pt-16 pb-0">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

                <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4 mb-10">
                    <div class="flex flex-col items-start gap-2 text-left">
                        <div class="flex items-center gap-4 select-none">
                            <img src="{{ asset('images/icon-notice.png') }}" alt="Notice" class="h-6 object-contain">
                            <div class="flex items-center gap-[3px]">
                                @for ($i = 0; $i < 3; $i++)
                                    <div class="grid grid-cols-2 gap-[1px]">
                                        <span class="w-1.5 h-1.5 bg-[#ff9f1c] rounded-[1px]"></span>
                                        <span class="w-1.5 h-1.5 bg-transparent"></span>
                                        <span class="w-1.5 h-1.5 bg-transparent"></span>
                                        <span class="w-1.5 h-1.5 bg-[#ff9f1c] rounded-[1px]"></span>
                                    </div>
                                @endfor
                            </div>
                        </div>
                        <h1 class="text-3xl sm:text-4xl md:text-5xl font-black text-[#0f2440] tracking-tight uppercase"
                            style="font-family: 'Roboto', sans-serif;">
                            Data Penelitian
                        </h1>
                    </div>

                    <div class="flex items-center justify-end gap-4 mb-2 select-none">
                        <img src="{{ asset('images/icon-arrow.png') }}" alt="Aksen" class="w-8 h-8 object-contain">
                        <img src="{{ asset('images/icon-doc.png') }}" alt="Docs" class="h-12 w-auto object-contain">
                    </div>
                </div>

                <div
                    class="flex flex-col lg:flex-row items-stretch w-full bg-white rounded-[2.5rem] overflow-hidden shadow-2xl p-6 sm:p-8 gap-8 border border-gray-100">

                    <div class="w-full lg:w-[45%] flex flex-col justify-between gap-4 flex-shrink-0">
                        <div
                            class="w-full aspect-video sm:aspect-[4/3] relative rounded-2xl overflow-hidden bg-slate-950 shadow-md">
                            <template x-if="total > 0">
                                <img :src="list[activeIdx].image" alt="Sorotan Riset Utama"
                                    class="absolute inset-0 w-full h-full object-cover transition-all duration-500 animate-fade-in">
                            </template>
                            <template x-if="total === 0">
                                <img src="{{ asset('images/berita1.png') }}" alt="Default"
                                    class="absolute inset-0 w-full h-full object-cover">
                            </template>
                        </div>

                        <div class="flex items-center justify-center gap-2 py-2 flex-wrap select-none" x-show="total > 1">
                            <template x-for="(item, index) in list" :key="index">
                                <button @click="activeIdx = index"
                                    :class="activeIdx === index ? 'w-8 bg-black' : 'w-2 bg-gray-300 hover:bg-slate-400'"
                                    class="h-2 rounded-full transition-all duration-300 focus:outline-none"></button>
                            </template>
                        </div>
                    </div>

                    <div class="flex-1 h-[320px] sm:h-[450px] overflow-y-auto pr-2 text-left space-y-2 scroll-smooth"
                        style="scrollbar-width: thin; -ms-overflow-style: auto;">
                        <template x-if="total > 0">
                            <div class="w-full">
                                <template x-for="(item, index) in list" :key="item.id">
                                    <div class="w-full">
                                        <div @click="activeIdx = index"
                                            :class="activeIdx === index ? 'bg-transparent border-l-4 border-black pl-4' :
                                                'border-l-4 border-transparent pl-4 hover:bg-slate-50/80'"
                                            class="py-4 pr-4 rounded-r-2xl transition-all duration-200 cursor-pointer group min-w-0">

                                            <h3 :class="activeIdx === index ? 'text-black font-black' :
                                                'text-slate-400 font-bold group-hover:text-[#0f2440]'"
                                                class="text-base sm:text-lg tracking-tight transition-colors leading-snug break-all"
                                                x-text="item.judul"></h3>

                                            <div :class="activeIdx === index ? 'text-black' : 'text-slate-400'"
                                                class="text-[10px] font-bold uppercase tracking-wider mt-1.5 select-none transition-colors"
                                                x-text="'Peneliti: ' + item.nama_peneliti"></div>

                                            <p class="text-xs sm:text-sm text-slate-600 font-light leading-relaxed mt-2 break-all"
                                                x-text="item.deskripsi_singkat"></p>

                                            <div class="pt-3 mt-1 select-none" x-show="activeIdx === index">
                                                <a :href="item.url"
                                                    class="inline-flex items-center text-xs font-black text-black hover:text-slate-600 transition-colors uppercase tracking-wider">
                                                    Lihat Publikasi Utuh &rarr;
                                                </a>
                                            </div>
                                        </div>
                                        <div class="w-full px-4" x-show="index < total - 1">
                                            <div class="border-b border-slate-100 my-1"></div>
                                        </div>
                                    </div>
                                </template>
                            </div>
                        </template>

                        <template x-if="total === 0">
                            <div class="py-12 text-center text-gray-400 font-medium italic select-none">
                                Belum ada berkas riset penelitian resmi yang diterbitkan, Dy. Silakan isi melalui dashboard
                                control panel admin.
                            </div>
                        </template>
                    </div>

                </div>
            </div>
        </section>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 bg-white py-12">
            <div class="grid grid-cols-12 w-full h-3 rounded-full overflow-hidden shadow-sm">
                <div class="col-span-5 bg-[#ff9f1c]"></div>
                <div class="col-span-7 bg-[#0f2440]"></div>
            </div>
        </div>

        <section x-data="informationComponent({{ $formattedInformations->toJson() }})" class="bg-white py-16 border-t border-gray-100 relative">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between mb-10">
                    <div class="flex flex-col text-left">
                        <div class="flex items-center gap-3 mb-1 select-none">
                            <img src="{{ asset('images/icon-notice.png') }}" alt="Notice" class="h-6 object-contain">
                            <div class="flex items-center gap-[3px]">
                                @for ($i = 0; $i < 3; $i++)
                                    <div class="grid grid-cols-2 gap-[1px]">
                                        <span class="w-1.5 h-1.5 bg-[#ff9f1c] rounded-[1px]"></span>
                                        <span class="w-1.5 h-1.5 bg-transparent"></span>
                                        <span class="w-1.5 h-1.5 bg-transparent"></span>
                                        <span class="w-1.5 h-1.5 bg-[#ff9f1c] rounded-[1px]"></span>
                                    </div>
                                @endfor
                            </div>
                        </div>
                        <h2 class="text-4xl font-extrabold text-[#0f2440] tracking-tight relative pb-2 mt-2 uppercase">
                            Informasi Terkini
                            <span class="absolute bottom-0 left-0 w-24 h-0.5 bg-[#0f2440] border-dashed border-b"></span>
                        </h2>
                    </div>

                    <div class="flex items-center justify-end gap-4 mb-2 select-none">
                        <img src="{{ asset('images/icon-arrow.png') }}" alt="Aksen" class="w-8 h-8 object-contain">
                        <img src="{{ asset('images/icon-doc.png') }}" alt="Docs" class="h-12 w-auto object-contain">
                    </div>
                </div>

                <div class="space-y-10 w-full">
                    <template x-for="(info, index) in infoList" :key="index">
                        <div
                            class="bg-white rounded-[2rem] border border-gray-100 shadow-xl shadow-slate-100/60 p-6 sm:p-8 flex flex-col md:flex-row gap-6 sm:gap-8 items-stretch min-w-0">

                            <template x-if="info.image">
                                <div
                                    class="w-full md:w-[35%] aspect-[4/3] md:aspect-auto rounded-2xl overflow-hidden bg-slate-50 flex-shrink-0 shadow-inner">
                                    <img :src="info.image" :alt="info.title" class="w-full h-full object-cover">
                                </div>
                            </template>

                            <div class="flex-1 flex flex-col justify-between min-w-0 text-left space-y-4">
                                <div class="space-y-4 min-w-0 w-full">
                                    <div class="flex flex-wrap items-center gap-2 select-none">
                                        <span
                                            class="inline-flex items-center gap-1.5 bg-orange-50 border border-orange-100 text-orange-700 px-3.5 py-1 rounded-full text-[10px] font-bold tracking-wider uppercase">
                                            <span class="w-1 h-1 bg-[#ff9f1c] rounded-full animate-pulse"></span>
                                            Diumumkan: <span x-text="info.date"></span>
                                        </span>
                                    </div>

                                    <h3 class="text-xl sm:text-2xl font-black text-[#0f2440] uppercase tracking-tight break-all"
                                        x-text="info.title"></h3>

                                    <div class="flex min-w-0 w-full">
                                        <div class="w-1 bg-[#ff9f1c] flex-shrink-0"></div>
                                        <div class="bg-orange-50/50 px-4 py-3 rounded-r-xl w-full">
                                            <p class="text-slate-600 text-sm sm:text-base italic leading-relaxed font-normal break-all"
                                                x-text="info.deskripsi_singkat"></p>
                                        </div>
                                    </div>

                                    <div class="text-sm sm:text-base text-gray-600 leading-relaxed space-y-3 font-light break-all w-full"
                                        x-html="info.deskripsi_lengkap"></div>
                                </div>
                            </div>

                        </div>
                    </template>

                    <template x-if="infoList.length === 1 && infoList[0].date === '---'">
                        <div
                            class="w-full text-center py-12 text-gray-400 italic font-medium bg-gray-50 border border-dashed border-gray-200 rounded-3xl select-none">
                            Belum ada data informasi terbaru yang diterbitkan.
                        </div>
                    </template>
                </div>
            </div>
        </section>
    </div>

    <script>
        function researchComponent(laravelData) {
            return {
                activeIdx: 0,
                list: laravelData ? laravelData : [],
                get total() {
                    return this.list.length;
                }
            }
        }

        function newsComponent(laravelBerita) {
            const defaultPlaceholder = [{
                title: "Belum Ada Berita Terbaru, Dy!",
                subTitle: "Silakan isi data berita utama dari dashboard control panel admin terlebih dahulu.",
                date: "---",
                image: "{{ asset('images/berita1.png') }}"
            }];

            return {
                activeSlide: 0,
                beritaList: laravelBerita && laravelBerita.length > 0 ? laravelBerita : defaultPlaceholder
            }
        }

        function informationComponent(laravelInformation) {
            const defaultPlaceholder = [{
                title: "Belum Ada Informasi Terbaru, Dy!",
                deskripsi_singkat: "Silakan isi data papan pengumuman informasi dari dashboard control panel admin terlebih dahulu.",
                deskripsi_lengkap: "Konten papan informasi kosong.",
                date: "---",
                image: null
            }];

            return {
                infoList: laravelInformation && laravelInformation.length > 0 ? laravelInformation : defaultPlaceholder
            }
        }
    </script>
@endsection
