<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Administrator | LPPM ISI Padangpanjang</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center p-4 sm:p-6 md:p-8 font-['Roboto']" style="font-family: 'Roboto', sans-serif;">

    <div class="flex flex-col md:flex-row w-full max-w-4xl bg-white rounded-[2.5rem] overflow-hidden shadow-2xl min-h-[500px] md:h-[550px] border border-gray-100">

        <div class="w-full md:w-[45%] flex bg-[#0f2440] flex-shrink-0 relative overflow-hidden">
            
            <div class="w-20 sm:w-24 flex-shrink-0 flex justify-center py-6 md:py-8 overflow-visible">
                <div class="bg-[#ff9f1c] w-9 rounded-full h-full flex flex-col items-center justify-between py-8 relative overflow-visible shadow-inner border-r border-orange-400/30">
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
                        <img src="{{ asset('images/icon/globe.png') }}" alt="Globe" class="w-4 h-4 object-contain opacity-80 invert">
                    </div>
                </div>
            </div>

            <div class="flex-1 flex flex-col justify-center items-start p-6 text-white relative z-10 select-none">
                <span class="text-[#ff9f1c] text-[10px] font-bold tracking-[0.2em] uppercase mb-1">Internal System</span>
                <h3 class="text-2xl font-black uppercase tracking-tight leading-none mb-2" style="font-family: 'Roboto', sans-serif;">
                    Admin Portal
                </h3>
                <p class="text-xs text-slate-300 font-light leading-relaxed">
                    Silakan masukkan kredensial akun Anda untuk mengakses dashboard manajemen data.
                </p>
            </div>

            <div class="absolute -top-4 -right-4 opacity-10 select-none">
                <div class="grid grid-cols-4 gap-1">
                    @for ($i = 0; $i < 16; $i++) <div class="w-1.5 h-1.5 bg-white rounded-full"></div> @endfor
                </div>
            </div>
        </div>
        <div class="flex-1 bg-white p-8 sm:p-12 flex flex-col justify-center relative">
            
            <div class="mb-8 relative inline-block">
                <h1 class="text-3xl font-black text-[#0f2440] tracking-tight uppercase" style="font-family: 'Roboto', sans-serif;">
                    Sign In
                </h1>
                <div class="absolute -bottom-2 left-0 w-12 h-1 bg-[#ff9f1c]"></div>
            </div>

            <form action="{{ route('admin.login.submit') }}" method="POST" class="space-y-5">
                @csrf

                @if (session('status'))
                    <div class="bg-emerald-50 text-emerald-600 p-4 rounded-xl text-xs font-bold uppercase tracking-wide border border-emerald-100 mb-2">
                        {{ session('status') }}
                    </div>
                @endif

                <div class="space-y-1.5">
                    <label for="email" class="text-xs font-bold text-[#0f2440] uppercase tracking-wider block">Alamat Email</label>
                    <div class="relative">
                        <input type="email" id="email" name="email" value="{{ old('email') }}" required
                               class="w-full px-4 py-3.5 bg-gray-50 border border-gray-200 rounded-xl text-sm focus:outline-none focus:border-[#ff9f1c] focus:bg-white transition-all @error('email') border-red-500 @enderror"
                               placeholder="admin@lppm.isi-padangpanjang.ac.id">
                    </div>
                    @error('email')
                        <p class="text-xs text-red-500 font-medium mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="space-y-1.5">
                    <label for="password" class="text-xs font-bold text-[#0f2440] uppercase tracking-wider block">Kata Sandi</label>
                    <div class="relative">
                        <input type="password" id="password" name="password" required
                               class="w-full px-4 py-3.5 bg-gray-50 border border-gray-200 rounded-xl text-sm focus:outline-none focus:border-[#ff9f1c] focus:bg-white transition-all @error('password') border-red-500 @enderror"
                               placeholder="••••••••">
                    </div>
                    @error('password')
                        <p class="text-xs text-red-500 font-medium mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex items-center justify-between pt-1 select-none">
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="checkbox" name="remember" class="w-4 h-4 rounded text-[#0f2440] focus:ring-0 border-gray-300 accent-[#0f2440]">
                        <span class="text-xs text-gray-500 font-medium">Ingat saya di perangkat ini</span>
                    </label>
                </div>

                <button type="submit" 
                        class="w-full bg-[#ff9f1c] text-[#0f2440] font-black text-sm py-4 rounded-xl uppercase tracking-widest shadow-md hover:bg-amber-500 hover:-translate-y-0.5 active:translate-y-0 transition-all mt-4 select-none">
                    Masuk Ke Sistem
                </button>
            </form>

            <div class="absolute bottom-4 right-8 text-[9px] text-gray-300 font-bold uppercase tracking-wider hidden sm:block select-none">
                LPPM © 2026
            </div>
        </div>
        </div>
</body>
</html>