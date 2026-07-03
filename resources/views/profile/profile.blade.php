@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-8 selection:bg-indigo-600/10 selection:text-indigo-600">

    <!-- MAIN PROFILE CONTAINER: Linear & Stripe Premium Inspired Design -->
    <div class="space-y-6">
        
        <!-- HERO HEADER CARD -->
        <div class="bg-white border border-slate-200/60 rounded-3xl overflow-hidden shadow-[0_8px_30px_rgb(0,0,0,0.015)] relative group transition-all duration-300 hover:shadow-[0_12px_40px_rgba(99,102,241,0.03)]">
            <!-- Dynamic Micro-Pattern Cover Background -->
            <div class="h-44 sm:h-56 bg-gradient-to-r from-indigo-600 via-purple-600 to-emerald-500 relative overflow-hidden">
                <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_top_right,_var(--tw-gradient-stops))] from-white/20 via-transparent to-transparent opacity-60"></div>
                <div class="absolute -right-20 -top-20 w-64 h-64 bg-white/10 rounded-full blur-3xl"></div>
                <div class="absolute left-10 bottom-0 w-48 h-48 bg-emerald-400/20 rounded-full blur-2xl"></div>
            </div>

            <!-- Profile Identity Blocks -->
            <div class="px-6 sm:px-8 pb-8 relative flex flex-col sm:flex-row sm:items-end justify-between gap-6 -mt-16 sm:-mt-20">
                
                <div class="flex flex-col sm:flex-row items-start sm:items-end gap-4 sm:gap-6">
                    <!-- Squircle Avatar Frame with High-End Ring Cover -->
                    <div class="w-28 h-28 sm:w-36 sm:h-36 rounded-3xl bg-white p-[4px] shadow-[0_10px_30px_rgba(0,0,0,0.12)] ring-4 ring-white relative z-10 shrink-0 transform transition-all duration-500 hover:scale-[1.02] hover:rotate-2">
                        <div class="w-full h-full bg-gradient-to-tr from-slate-50 to-slate-100 rounded-2xl flex items-center justify-center font-extrabold text-2xl sm:text-3xl text-slate-700 border border-slate-200/50 uppercase tracking-widest">
                            {{ substr(Auth::user()->name, 0, 2) }}
                        </div>
                    </div>

                    <!-- Meta text parameters -->
                    <div class="sm:mb-2 space-y-1">
                        <div class="flex items-center gap-2">
                            <h1 class="font-extrabold text-slate-900 text-xl sm:text-2xl tracking-tight">{{ Auth::user()->name }}</h1>
                            <span class="w-2 h-2 bg-emerald-500 rounded-full shadow-[0_0_8px_rgba(16,185,129,0.5)]" title="En ligne"></span>
                        </div>
                        <p class="text-xs sm:text-sm text-purple-600 font-bold bg-purple-50 inline-block px-3 py-0.5 rounded-full tracking-wide">
                            {{ Auth::user()->headline ?? 'Professionnel du Réseau' }}
                        </p>
                        <div class="flex items-center gap-2 text-xs text-slate-400 font-medium pt-1">
                            <i class="fa-solid fa-location-dot text-slate-300"></i>
                            <span>Casablanca, Maroc</span>
                            <span class="text-slate-200">•</span>
                            <a href="#" class="text-indigo-600 hover:underline font-semibold">Coordonnées</a>
                        </div>
                    </div>
                </div>

                <!-- Custom Profile Action Triggers (Do Not Touch Logic/Routes) -->
                <div class="flex items-center gap-2 sm:mb-2 shrink-0">
                    <button class="bg-gradient-to-r from-indigo-600 via-purple-600 to-indigo-700 text-white font-bold text-xs px-5 py-2.5 rounded-xl transition-all shadow-md shadow-indigo-200/40 cursor-pointer hover:scale-[1.02] active:scale-[0.98] flex items-center gap-2">
                        <i class="fa-solid fa-user-plus text-[10px]"></i> Connecter
                    </button>
                    <button class="bg-slate-50 hover:bg-slate-100 border border-slate-200 text-slate-700 font-bold text-xs px-4 py-2.5 rounded-xl transition-all cursor-pointer flex items-center gap-2">
                        <i class="fa-regular fa-paper-plane"></i> Message
                    </button>
                </div>

            </div>

            <!-- Profile Dashboard Metrics Segment -->
            <div class="border-t border-slate-100 bg-slate-50/50 px-6 sm:px-8 py-4 grid grid-cols-3 gap-4 text-center sm:text-left">
                <div class="space-y-0.5 group/metric cursor-pointer">
                    <span class="block text-[10px] uppercase font-bold text-slate-400 tracking-wider">Relations</span>
                    <span class="block font-extrabold text-sm sm:text-base text-slate-800 font-mono group-hover/metric:text-indigo-600 transition-colors">500+</span>
                </div>
                <div class="space-y-0.5 group/metric cursor-pointer border-x border-slate-200/60 px-2">
                    <span class="block text-[10px] uppercase font-bold text-slate-400 tracking-wider">Vues du profil</span>
                    <span class="block font-extrabold text-sm sm:text-base text-slate-800 font-mono group-hover/metric:text-purple-600 transition-colors">1,420</span>
                </div>
                <div class="space-y-0.5 group/metric cursor-pointer">
                    <span class="block text-[10px] uppercase font-bold text-slate-400 tracking-wider">Articles & Posts</span>
                    <span class="block font-extrabold text-sm sm:text-base text-slate-800 font-mono group-hover/metric:text-emerald-600 transition-colors">84</span>
                </div>
            </div>
        </div>

        <!-- ABOUT INFOCARD BOX -->
        <div class="bg-white border border-slate-200/60 rounded-3xl p-6 sm:p-8 shadow-[0_8px_30px_rgb(0,0,0,0.015)] space-y-4">
            <h3 class="text-xs font-bold text-slate-400 uppercase tracking-widest flex items-center gap-2">
                <i class="fa-regular fa-user text-indigo-500"></i> Infos de fond / Résumé
            </h3>
            <p class="text-slate-600 text-sm leading-relaxed whitespace-pre-line font-medium">
                Passionné par l'architecture logicielle et l'expérience utilisateur de pointe. J'accompagne les startups et les entreprises dans le déploiement d'interfaces web fluides, hautement performantes et à forte scalabilité. 
                
                Adepte du minimalisme, du clean-code et des micro-interactions qui font la différence. Parlons technologie, UI/UX ou opportunités de croissance !
            </p>
            <div class="flex flex-wrap gap-2 pt-2">
                <span class="text-[11px] bg-slate-50 border border-slate-200 text-slate-600 font-bold px-3 py-1 rounded-xl">#UIUX</span>
                <span class="text-[11px] bg-indigo-50/60 border border-indigo-100/60 text-indigo-600 font-bold px-3 py-1 rounded-xl">#Laravel</span>
                <span class="text-[11px] bg-purple-50/60 border border-purple-100/60 text-purple-600 font-bold px-3 py-1 rounded-xl">#TailwindCSS</span>
                <span class="text-[11px] bg-emerald-50/60 border border-emerald-100/60 text-emerald-600 font-bold px-3 py-1 rounded-xl">#ProductDesign</span>
            </div>
        </div>

        <!-- RECENT ACTIVITY HEADLINE (Do Not Change Blade Controls/Looping Structure if applied in future) -->
        <div class="bg-white border border-slate-200/60 rounded-3xl p-6 sm:p-8 shadow-[0_8px_30px_rgb(0,0,0,0.015)] space-y-4">
            <div class="flex items-center justify-between">
                <h3 class="text-xs font-bold text-slate-400 uppercase tracking-widest flex items-center gap-2">
                    <i class="fa-regular fa-newspaper text-purple-500"></i> Activité récente
                </h3>
                <span class="text-[10px] bg-indigo-50 text-indigo-600 border border-indigo-100/60 px-2.5 py-0.5 rounded-full font-bold uppercase tracking-wider">Tout voir</span>
            </div>

            <!-- Activity Row Sample -->
            <div class="space-y-4 division-y divide-slate-100">
                <div class="group/activity cursor-pointer pt-2">
                    <p class="text-xs font-bold text-slate-400 flex items-center gap-1.5 mb-1.5">
                        <span class="text-slate-800">{{ Auth::user()->name }}</span> a partagé un post
                    </p>
                    <div class="bg-slate-50/80 border border-slate-200/50 rounded-2xl p-4 group-hover/activity:border-indigo-200 group-hover/activity:bg-white transition-all duration-300">
                        <p class="text-slate-600 text-xs sm:text-sm line-clamp-2 leading-relaxed font-medium">
                            Ravi de partager notre toute nouvelle refonte basée sur le paradigme Semi-Light Modern ! Le design minimaliste n'a jamais été aussi percutant...
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection