<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Administrator | LPPM ISI Padangpanjang</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            overflow: hidden;
            background: #fff;
        }
    </style>
</head>

<body class="h-screen flex font-['Roboto'] select-none overflow-hidden" style="font-family:'Roboto',sans-serif;">

    <div class="flex-1 flex flex-col min-w-0 relative">

        <div class="px-14 pt-12 pb-0">
            <div class="flex items-center gap-3 mb-1 select-none">
                <img src="{{ asset('images/icon-notice.png') }}" alt="Notice" class="h-6 object-contain">
                <div class="flex items-center gap-1.5">
                    @for ($i = 0; $i < 3; $i++)
                        <div class="grid grid-cols-2 gap-0.5">
                            <span class="w-2.5 h-2.5 bg-[#ff9f1c] rounded-[2px]"></span>
                            <span class="w-2.5 h-2.5 bg-transparent"></span>
                            <span class="w-2.5 h-2.5 bg-transparent"></span>
                            <span class="w-2.5 h-2.5 bg-[#ff9f1c] rounded-[2px]"></span>
                        </div>
                    @endfor
                </div>
            </div>
            <h1 class="text-6xl font-black text-[#0f2440] tracking-tight uppercase leading-none mt-1">Login</h1>
            <div class="flex items-center mt-2" style="gap:4px;">
                <div class="bg-[#0f2440] rounded-full" style="width:80px;height:3px;"></div>
                <div class="bg-[#0f2440] rounded-full" style="width:20px;height:3px;"></div>
                <div class="bg-[#0f2440] rounded-full" style="width:6px;height:3px;"></div>
                <div class="bg-[#0f2440] rounded-full" style="width:6px;height:3px;"></div>
                <div class="bg-[#0f2440] rounded-full" style="width:6px;height:3px;"></div>
            </div>
        </div>

        <div class="flex-1 flex items-center justify-center min-h-0 px-10 py-6">
            <img src="{{ asset('images/hero-isometric.png') }}" alt="Hero Isometrik LPPM"
                class="max-w-full max-h-full object-contain">
        </div>
    </div>

    <div class="w-[480px] flex-shrink-0 flex flex-col justify-center px-14 py-12">

        <div class="mb-8">
            <div class="flex items-center justify-end gap-3 mb-2">
                <img src="{{ asset('images/icon-arrow.png') }}" alt="Aksen" class="w-4 h-4 object-contain">
                <img src="{{ asset('images/icon-doc.png') }}" alt="Docs" class="h-8 w-auto object-contain">
            </div>
            <div class="flex items-center justify-end" style="gap:4px;">
                <div class="bg-[#0f2440] rounded-full" style="width:6px;height:3px;"></div>
                <div class="bg-[#0f2440] rounded-full" style="width:6px;height:3px;"></div>
                <div class="bg-[#0f2440] rounded-full" style="width:6px;height:3px;"></div>
                <div class="bg-[#0f2440] rounded-full" style="width:20px;height:3px;"></div>
                <div class="bg-[#0f2440] rounded-full" style="width:80px;height:3px;"></div>
            </div>
        </div>

        <div class="mb-8">
            <h2 class="text-4xl font-black text-[#0f2440] tracking-tight leading-none">Welcome Back!</h2>
            <p class="text-sm text-gray-400 font-light mt-3">Log in in to start explore documents</p>
        </div>

        <form action="{{ route('admin.login.submit') }}" method="POST" class="space-y-5">
            @csrf

            @if (session('status'))
                <div
                    class="bg-emerald-50 text-emerald-600 p-3 rounded-xl text-xs font-bold uppercase border border-emerald-100">
                    {{ session('status') }}
                </div>
            @endif

            <div class="space-y-1.5">
                <label for="email" class="text-sm font-medium text-[#0f2440] block">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required
                    class="w-full px-4 py-3 bg-white border border-gray-300 rounded-xl text-sm focus:outline-none focus:border-[#0f2440] transition-all @error('email') border-red-500 @enderror"
                    placeholder="Input your email">
                @error('email')
                    <p class="text-xs text-red-500 font-medium mt-0.5">{{ $message }}</p>
                @enderror
            </div>

            <div class="space-y-1.5">
                <label for="password" class="text-sm font-medium text-[#0f2440] block">Password</label>
                <input type="password" id="password" name="password" required
                    class="w-full px-4 py-3 bg-white border border-gray-300 rounded-xl text-sm focus:outline-none focus:border-[#0f2440] transition-all @error('password') border-red-500 @enderror"
                    placeholder="Input your password">
                @error('password')
                    <p class="text-xs text-red-500 font-medium mt-0.5">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex items-center justify-between pt-1">
                <label class="flex items-center gap-2 cursor-pointer text-sm text-gray-500 hover:text-gray-700">
                    <input type="checkbox" name="remember"
                        class="w-4 h-4 rounded border border-gray-300 accent-[#0f2440] focus:ring-0">
                    <span>Remember me</span>
                </label>
                <a href="#" class="text-sm text-gray-400 hover:underline hover:text-[#0f2440]">Forget
                    Password?</a>
            </div>

            <div class="pt-2 flex justify-center">
                <button type="submit"
                    class="bg-[#0f2440] text-white font-bold text-sm px-12 py-3.5 rounded-xl uppercase tracking-widest hover:bg-slate-800 transition-all">
                    | &nbsp; Login
                </button>
            </div>
        </form>
    </div>

    <div class="w-24 sm:w-28 flex-shrink-0 flex justify-center py-6 sm:py-8 overflow-visible">
        <div
            class="bg-[#ff9f1c] w-10 sm:w-11 rounded-full h-full flex flex-col items-center justify-between py-6 relative overflow-visible shadow-inner">
            <div class="flex items-start justify-center pt-6 w-full relative overflow-visible">
                <h2 class="text-white font-black text-3xl sm:text-4xl tracking-widest uppercase drop-shadow-[2px_4px_3px_rgba(0,0,0,0.3)] absolute left-[55%] z-10 whitespace-nowrap"
                    style="writing-mode: vertical-rl;">
                    LPPM
                </h2>
            </div>
            <div class="mt-auto flex flex-col items-center gap-4 w-full text-center pb-2 select-none">
                <p class="text-[#0f2440] font-bold text-[9px] sm:text-[10px] tracking-wider uppercase whitespace-nowrap mx-auto"
                    style="writing-mode: vertical-rl;">
                    Institut Seni Indonesia Padangpanjang
                </p>
                <img src="{{ asset('images/icon/globe.png') }}" alt="Globe"
                    class="w-5 h-5 object-contain opacity-90 mx-auto">
            </div>
        </div>
    </div>

</body>

</html>
