<!DOCTYPE html>
<html lang="en" class="bg-[#f6f8fc]">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <title>Sign In — LinkUp</title>
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-image: 
                radial-gradient(at 0% 0%, rgba(99, 102, 241, 0.04) 0px, transparent 50%),
                radial-gradient(at 100% 100%, rgba(139, 92, 246, 0.04) 0px, transparent 50%);
        }
    </style>
</head>

<body class="antialiased flex min-h-screen items-center justify-center p-4 selection:bg-indigo-600/10 selection:text-indigo-600">

    <div class="w-full max-w-md bg-white/95 backdrop-blur-xl border border-slate-200/80 rounded-3xl p-6 sm:p-8 shadow-[0_8px_30px_rgb(0,0,0,0.02)] relative overflow-hidden">
        
        <div class="absolute top-0 left-0 right-0 h-[3px] bg-gradient-to-r from-indigo-600 via-purple-600 to-emerald-500"></div>

        <div class="text-center mb-8">
            <div class="inline-flex items-center justify-center bg-gradient-to-tr from-indigo-600 via-purple-600 to-emerald-500 text-white font-extrabold text-sm px-3.5 py-2 rounded-xl tracking-tight shadow-md shadow-indigo-200/50 mb-4">
               <a href="{{ route('/')}}">LU</a>
            </div>
            <h2 class="text-xl font-extrabold text-slate-900 tracking-tight">Sign in to LinkUp</h2>
            <p class="text-xs text-slate-400 font-medium mt-1.5">Welcome back! Enter your details to access your network.</p>
        </div>

        <form method="POST" action="{{ route('login') }}" class="space-y-5">
            @csrf
            
            <div>
                <label for="email" class="block text-[10px] font-extrabold text-slate-400 uppercase tracking-widest mb-2 flex items-center gap-1.5">
                    <i class="fa-regular fa-envelope text-indigo-500"></i> Email address
                </label>
                <div class="relative">
                    <input id="email" type="email" name="email" required autocomplete="email" placeholder="name@example.com"
                           class="w-full bg-slate-50/60 border border-slate-200 rounded-xl px-4 py-3 text-sm text-slate-700 placeholder-slate-400 focus:outline-none focus:border-indigo-500 focus:bg-white focus:ring-4 focus:ring-indigo-500/5 transition-all shadow-inner" />
                </div>
            </div>

            <div>
                <div class="flex items-center justify-between mb-2">
                    <label for="password" class="block text-[10px] font-extrabold text-slate-400 uppercase tracking-widest flex items-center gap-1.5">
                        <i class="fa-solid fa-lock text-purple-500"></i> Password
                    </label>
                    <a href="#" class="text-[11px] font-bold text-indigo-600 hover:text-indigo-700 transition-colors">Forgot password?</a>
                </div>
                <div class="relative">
                    <input id="password" type="password" name="password" required autocomplete="current-password" placeholder="••••••••"
                           class="w-full bg-slate-50/60 border border-slate-200 rounded-xl px-4 py-3 text-sm text-slate-700 placeholder-slate-400 focus:outline-none focus:border-purple-500 focus:bg-white focus:ring-4 focus:ring-purple-500/5 transition-all shadow-inner" />
                </div>
            </div>

            <button type="submit" class="w-full bg-gradient-to-r from-indigo-600 via-purple-600 to-indigo-700 hover:opacity-95 text-white font-bold text-xs py-3.5 rounded-xl transition-all shadow-md shadow-indigo-200 cursor-pointer hover:scale-[1.01] active:scale-[0.99] flex items-center justify-center gap-2">
                <i class="fa-solid fa-right-to-bracket text-xs"></i> Sign in to account
            </button>
        </form>

        <div class="mt-6 pt-5 border-t border-slate-100 text-center">
            <p class="text-xs text-slate-400 font-medium">
                Not a member?
                <a href="#" class="font-bold text-purple-600 hover:text-purple-700 transition-colors">Start a 14 day free trial</a>
            </p>
        </div>

        @if($errors->any())
        <div class="mt-5 space-y-1.5">
            @foreach ($errors->all() as $error )
                <div class="flex items-center gap-2 text-rose-600 text-xs font-semibold bg-rose-50 border border-rose-100 px-3 py-2 rounded-xl">
                    <i class="fa-solid fa-circle-exclamation text-[11px]"></i>
                    <li>{{$error}}</li>
                </div>
            @endforeach
        </div>
        @endif
        
    </div>

</body>

</html>