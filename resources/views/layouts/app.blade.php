<!DOCTYPE html>
<html lang="fr" class="bg-slate-50 text-slate-800">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LinkUp — Professional Network</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <!-- FontAwesome لأيقونات نظيفة وعصرية -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="font-sans antialiased selection:bg-indigo-500 selection:text-white">


    <nav class="sticky top-0 z-50 bg-white/80 backdrop-blur-md border-b border-slate-100 shadow-xs">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 h-16 flex items-center justify-between">
            
        
            <div class="flex items-center gap-3">
                <div class="bg-gradient-to-r from-indigo-600 to-violet-600 text-white font-black text-xl px-3 py-1.5 rounded-xl tracking-tight shadow-md shadow-indigo-100">
                    LU
                </div>
                <span class="text-xl font-bold tracking-tight text-slate-800 hidden sm:block">
                    Link<span class="text-indigo-600">Up</span>
                </span>
            </div>

        
            <div class="flex items-center gap-2 sm:gap-6">
                <a href="#" class="flex flex-col sm:flex-row items-center gap-1 bg-indigo-50 text-indigo-600 px-4 py-2 rounded-xl text-xs sm:text-sm font-semibold transition-all">
                    <i class="fa-solid fa-house text-sm sm:text-base"></i>
                    <span class="hidden sm:block">Feed</span>
                </a>
                <a href="#" class="flex flex-col sm:flex-row items-center gap-1 text-slate-500 hover:text-indigo-600 px-3 py-2 rounded-xl text-xs sm:text-sm font-medium transition-colors group">
                    <i class="fa-solid fa-users text-sm sm:text-base group-hover:scale-105 transition-transform"></i>
                    <span class="hidden sm:block">Réseau</span>
                </a>
                <a href="#" class="flex flex-col sm:flex-row items-center gap-1 text-slate-500 hover:text-indigo-600 px-3 py-2 rounded-xl text-xs sm:text-sm font-medium transition-colors group">
                    <i class="fa-solid fa-envelope text-sm sm:text-base group-hover:scale-105 transition-transform"></i>
                    <span class="hidden sm:block">Messages</span>
                </a>
            </div>

            <div class="flex items-center space-x-3 border-l border-slate-100 pl-4">
                <button class="flex items-center gap-2 cursor-pointer group">
                    <div class="w-9 h-9 rounded-xl bg-gradient-to-tr from-indigo-500 to-purple-600 text-white font-bold text-sm flex items-center justify-center shadow-xs ring-2 ring-slate-100 group-hover:ring-indigo-500 transition-all">
                        I
                    </div>
                </button>
            </div>

        </div>
    </nav>

    <main class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        @yield('content')
    </main>

</body>
</html>