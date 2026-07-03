<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier le post — LinkUp</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { 
            font-family: 'Plus Jakarta Sans', sans-serif; 
            background-image: 
                radial-gradient(at 0% 0%, rgba(99, 102, 241, 0.04) 0px, transparent 50%),
                radial-gradient(at 100% 100%, rgba(139, 92, 246, 0.04) 0px, transparent 50%);
        }
    </style>
</head>
<body class="bg-[#f6f8fc] text-slate-800 antialiased flex items-center justify-center min-h-screen p-4">

    <!-- Card الـ Edit المطور بتأثير زجاجي ونقي -->
    <div class="w-full max-w-lg bg-white/90 backdrop-blur-xl border border-slate-200/80 rounded-2xl p-6 shadow-xl shadow-slate-200/40 relative overflow-hidden group">
        
        <!-- خط علوي تجميلي بمزيج الألوان الثلاثي -->
        <div class="absolute top-0 left-0 right-0 h-[3px] bg-gradient-to-r from-indigo-600 via-purple-600 to-emerald-500"></div>

        <!-- Header -->
        <div class="flex justify-between items-center mb-6">
            <div class="flex items-center gap-2">
                <div class="w-2 h-2 bg-purple-600 rounded-full animate-pulse"></div>
                <h1 class="text-xs font-extrabold text-slate-400 uppercase tracking-wider">Modifier la publication</h1>
            </div>
            <a href="{{ route('feed') }}" class="text-xs text-slate-400 hover:text-indigo-600 bg-slate-50 hover:bg-indigo-50 px-3 py-1.5 rounded-xl font-bold transition-all flex items-center gap-1">
                <i class="fa-solid fa-xmark text-[10px]"></i> Annuler
            </a>
        </div>

        <!-- Form -->
        <form action="{{ route('storPost')}}" method="POST" class="space-y-5">
            @csrf
            <div>
                <label class="block text-[10px] font-extrabold text-slate-400 uppercase tracking-wider mb-2.5 flex items-center gap-1.5">
                    <i class="fa-regular fa-pen-to-square text-indigo-500"></i> Contenu du post
                </label>
                
                <!-- Textarea احترافي مع فوكس ملون -->
                <textarea name="content" rows="6" required placeholder="Qu'avez-vous en tête ?"
                          class="w-full bg-slate-50/60 border border-slate-200 rounded-xl p-4 text-sm text-slate-700 focus:outline-none focus:border-purple-500/80 focus:bg-white focus:ring-4 focus:ring-purple-500/5 transition-all resize-none leading-relaxed shadow-inner placeholder-slate-400"></textarea>
                
                @error('content')
                    <p class="text-rose-600 text-xs mt-2 font-semibold flex items-center gap-1 bg-rose-50 border border-rose-100 px-3 py-1.5 rounded-lg">
                        <i class="fa-solid fa-circle-exclamation"></i> {{ $message }}
                    </p>
                @enderror
            </div>

            <!-- زر الحفظ المطور بالـ Gradient التريبل -->
            <button type="submit" class="w-full bg-gradient-to-r from-indigo-600 via-purple-600 to-indigo-700 hover:opacity-95 text-white font-bold text-xs py-3 rounded-xl transition-all shadow-md shadow-indigo-200 cursor-pointer hover:scale-[1.01] active:scale-[0.99] flex items-center justify-center gap-2">
                <i class="fa-regular fa-circle-check text-sm"></i> Publier le post
            </button>
        </form>
    </div>

</body>
</html>