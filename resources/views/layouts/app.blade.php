<!DOCTYPE html>
<html lang="fr" class="bg-[#f6f8fc] text-slate-800">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LinkUp — Professional Network</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-image:
                radial-gradient(at 0% 0%, rgba(99, 102, 241, 0.04) 0px, transparent 50%),
                radial-gradient(at 100% 100%, rgba(139, 92, 246, 0.04) 0px, transparent 50%);
        }
    </style>
</head>

<body class="antialiased selection:bg-indigo-600/10 selection:text-indigo-600">

    <!-- Navbar زجاجية منورة نقية بزاف مع مربع البحث الجديد -->
    <nav class="sticky top-0 z-50 bg-white/80 backdrop-blur-xl border-b border-slate-200/60 shadow-[0_2px_20px_rgba(0,0,0,0.01)]">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 h-16 flex items-center justify-between gap-4">

            <!-- Left Brand Side & Search Input -->
            <div class="flex items-center gap-3 sm:gap-6 flex-1 max-w-md">
                <!-- Brand Logo Unique -->
                <div class="flex items-center gap-3 group cursor-pointer shrink-0">
                    <div class="bg-gradient-to-tr from-indigo-600 via-purple-600 to-emerald-500 text-white font-extrabold text-sm px-3 py-2 rounded-xl tracking-tight shadow-md shadow-indigo-200/50 transform group-hover:scale-105 transition-all duration-300">
                        LU
                    </div>
                    <span class="text-base font-extrabold tracking-tight text-slate-900 hidden md:block">
                        Link<span class="bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent">Up</span>
                    </span>
                </div>

                <!-- Premium Search Bar Container (Premium Minimal Design) -->
                <div class="relative w-full group/search">
                    <div class="absolute inset-y-0 left-3 flex items-center pointer-events-none text-slate-400 group-focus-within/search:text-indigo-500 transition-colors">
                        <i class="fa-solid fa-magnifying-glass text-xs"></i>
                    </div>
                    <input type="text" placeholder="Rechercher un membre, un post..."
                        class="w-full bg-slate-100/80 border border-transparent rounded-xl pl-9 pr-4 py-2 text-xs font-medium text-slate-700 placeholder-slate-400 focus:outline-none focus:bg-white focus:border-indigo-500/80 focus:ring-4 focus:ring-indigo-500/5 transition-all duration-200 shadow-inner">
                </div>
            </div>

            <!-- Navigation Links Minimal -->
            <div class="flex items-center gap-1 sm:gap-2 shrink-0">
                <a href="{{ route('feed')}}" class="flex items-center gap-2 bg-indigo-50/80 border border-indigo-100/50 text-indigo-600 px-4 py-2 rounded-xl text-xs sm:text-sm font-bold transition-all">
                    <i class="fa-solid fa-house text-xs"></i>
                    <span class="hidden sm:block">Home</span>
                </a>
                <a href="#" class="flex items-center gap-2 text-slate-500 hover:text-purple-600 hover:bg-purple-50/50 px-3 py-2 rounded-xl text-xs sm:text-sm font-semibold transition-all group">
                    <i class="fa-solid fa-users text-xs group-hover:scale-105 transition-transform"></i>
                    <span class="hidden sm:block">Réseau</span>
                </a>
                <a href="#" class="flex items-center gap-2 text-slate-500 hover:text-emerald-600 hover:bg-emerald-50/50 px-3 py-2 rounded-xl text-xs sm:text-sm font-semibold transition-all group">
                    <i class="fa-solid fa-envelope text-xs group-hover:scale-105 transition-transform"></i>
                    <span class="hidden sm:block">Messages</span>
                </a>

            </div>

            <!-- Floating Right Profile Side Control -->
            <div class="fixed top-1/2 mt-36 right-0 -translate-y-1/2 flex flex-col gap-4 bg-white/90 backdrop-blur-xl border border-slate-200/80 p-3 rounded-2xl shadow-xl shadow-slate-200/30 z-50 hidden xl:flex">
                <div class="flex items-center justify-center group relative cursor-pointer">
                    <button class="flex items-center gap-2 cursor-pointer">
                        <div class="w-10 h-10 rounded-xl bg-gradient-to-tr from-indigo-500 via-purple-500 to-emerald-400 p-[2px] shadow-sm transform group-hover:scale-110 transition-all duration-300">
                            <div onclick="{{ route('profile')}}" class="w-full h-full bg-white rounded-[10px] flex items-center justify-center font-bold text-xs text-slate-700">
                                <a href="{{ route('profile')}}">MY</a>
                            </div>
                        </div>
                    </button>
                    <span class="absolute right-14 scale-0 group-hover:scale-100 transition-all duration-300 bg-slate-900 text-white text-xs px-2.5 py-1.5 rounded-lg shadow-md font-medium whitespace-nowrap">Mon Profil</span>
                </div>

                <div class="h-[1px] w-6 bg-slate-100 mx-auto"></div>

                <div class="flex items-center justify-center group relative cursor-pointer">
                    <form action="{{route('logout')}}" method="POST">
                        @csrf
                        <button class="text-slate-400 hover:text-rose-500 transition-colors p-2 rounded-xl hover:bg-rose-50 cursor-pointer">
                            <i class="fa-solid fa-power-off text-sm"></i>
                        </button>
                    </form>
                    <span class="absolute right-14 scale-0 group-hover:scale-100 transition-all duration-300 bg-slate-900 text-white text-xs px-2.5 py-1.5 rounded-lg shadow-md font-medium whitespace-nowrap">Déconnexion</span>
                </div>
            </div>


        </div>
    </nav>



    <!-- Main Entry Point -->
    <main class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        @if($errors->has('content'))
        <div class="max-w-2xl mx-auto mb-6 flex items-center gap-3 text-rose-600 text-xs font-semibold bg-rose-50 border border-rose-100 p-4 rounded-xl shadow-xs">
            <i class="fa-solid fa-circle-exclamation text-sm"></i>
            <p>Erreur de publication: {{ $errors->first('content') }}</p>
        </div>
        @endif

        @yield('content')
    </main>

    <!-- Global Interactivity Script (Do Not Touch) -->

</body>

</html>