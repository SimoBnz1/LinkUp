@extends('layouts.app')

@section('content')
<div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-10 selection:bg-indigo-600/10 selection:text-indigo-600 bg-[#f8fafc] min-h-screen text-slate-700 antialiased font-sans relative">

    <!-- SUBTLE BACKGROUND BLURS -->
    <div class="absolute top-0 left-1/3 w-[600px] h-[600px] bg-gradient-to-tr from-indigo-500/5 to-emerald-500/5 rounded-full blur-[140px] pointer-events-none -z-10"></div>

    <!-- MAIN GRID LAYOUT -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start">

        <!-- LEFT SIDEBAR: PROFILE IDENTITY CARD -->
        <div class="lg:col-span-1 lg:sticky lg:top-8 space-y-6">
            <div class="bg-white border border-slate-200/80 rounded-3xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.02)] relative overflow-hidden group transition-all duration-300 hover:shadow-[0_15px_40px_rgba(0,0,0,0.04)]">

                <!-- Avatar Center Display -->
                <div class="flex flex-col items-center text-center">
                    <!-- Action Triggers -->
                    <div class="w-full space-y-2">

                        <!-- زر الـ Follow / Unfollow الديناميكي مأمن -->
                        @if(Auth::id() !== $user->id)
                        <form action="{{ route('users.follow', $user) }}" method="POST" class="w-full">
                            @csrf
                            @if(Auth::user()->followings->contains($user->id))
                            <!-- إيلا كنتي ديجا متبعو كيبان زر Unfollow بالأحمر أو الرمادي -->
                            <button type="submit" class="w-full bg-slate-100 hover:bg-rose-50 hover:text-rose-600 border border-slate-200 text-slate-700 font-bold text-xs py-3 rounded-xl transition-all duration-300 active:scale-[0.98] tracking-wider uppercase flex items-center justify-center gap-2">
                                <i class="fa-solid fa-user-minus text-[10px]"></i> Ne plus suivre
                            </button>
                            @else
                            <!-- إيلا مكنتيش متبعو كيبان زر Follow بالأسود -->
                            <button type="submit" class="w-full bg-slate-900 hover:bg-slate-800 text-white font-bold text-xs py-3 rounded-xl transition-all duration-300 shadow-sm active:scale-[0.98] tracking-wider uppercase flex items-center justify-center gap-2">
                                <i class="fa-solid fa-user-plus text-[10px]"></i> Suivre
                            </button>
                            @endif
                        </form>
                        @else
                        <!-- إيلا كان هذا هو البروفايل ديالي أنا، كيبان لِي زر التعديل عوض الفولو -->
                        <a href="{{ route('editProfile', $user) }}" class="w-full bg-indigo-600 hover:bg-indigo-500 text-white font-bold text-xs py-3 rounded-xl transition-all duration-300 text-center block tracking-wider uppercase">
                            <i class="fa-regular fa-pen-to-square mr-1"></i> Modifier mon profil
                        </a>
                        @endif

                        <button class="w-full bg-white hover:bg-slate-50 border border-slate-200 text-slate-700 font-bold text-xs py-3 rounded-xl transition-all duration-300 active:scale-[0.98] tracking-wider uppercase flex items-center justify-center gap-2">
                            <i class="fa-regular fa-paper-plane text-slate-500"></i> Message
                        </button>
                    </div>
                    <div class="relative group/avatar mb-5">
                        <!-- Premium Soft Squircle Avatar Frame -->
                        <div class="w-32 h-32 rounded-[2.2rem] bg-slate-50 border border-slate-200/60 p-1.5 shadow-[0_10px_25px_rgba(0,0,0,0.05)] transition-all duration-500 group-hover/avatar:scale-105 group-hover/avatar:rotate-2">
                            <div class="w-full h-full rounded-[1.8rem] bg-gradient-to-br from-slate-50 to-slate-100 flex items-center justify-center border border-slate-200/30">
                                <span class="font-black text-3xl tracking-tighter bg-gradient-to-r from-slate-800 via-slate-700 to-slate-900 bg-clip-text text-transparent uppercase">
                                    {{ substr(Auth::user()->name, 0, 2) }}
                                </span>
                            </div>
                        </div>
                        <!-- Live Status Dot -->
                        <span class="absolute bottom-2 right-2 flex h-4 w-4">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-4 w-4 bg-emerald-500 border-2 border-white"></span>
                        </span>
                    </div>

                    <!-- Meta Info -->
                    <h1 class="font-black text-xl text-slate-900 tracking-tight mb-1">
                        {{ Auth::user()->name }}
                    </h1>

                    <span class="text-[11px] text-indigo-600 font-bold tracking-wide uppercase bg-indigo-50 border border-indigo-100 px-3 py-1 rounded-full mb-4 block">
                        {{ Auth::user()->headline ?? 'Professionnel du Réseau' }}
                    </span>

                    <p class="text-xs text-slate-400 font-medium flex items-center gap-1.5 mb-6">
                        <i class="fa-solid fa-location-dot text-slate-400"></i> Casablanca, Maroc
                    </p>

                    <!-- Action Triggers -->
                    <div class="w-full space-y-2">
                        <button class="w-full bg-slate-900 hover:bg-slate-800 text-white font-bold text-xs py-3 rounded-xl transition-all duration-300 shadow-sm active:scale-[0.98] tracking-wider uppercase flex items-center justify-center gap-2">
                            <i class="fa-solid fa-user-plus text-[10px]"></i> Connecter
                        </button>
                        <button class="w-full bg-white hover:bg-slate-50 border border-slate-200 text-slate-700 font-bold text-xs py-3 rounded-xl transition-all duration-300 active:scale-[0.98] tracking-wider uppercase flex items-center justify-center gap-2">
                            <i class="fa-regular fa-paper-plane text-slate-500"></i> Message
                        </button>
                    </div>
                </div>

                <!-- Subtle Links Box -->
                <div class="mt-6 pt-5 border-t border-slate-100 text-center">
                    <a href="#" class="text-xs text-slate-400 hover:text-indigo-600 transition-colors font-semibold">Voir les coordonnées complètes</a>
                </div>
            </div>
        </div>

        <!-- RIGHT CONTENT AREA: METRICS, ABOUT & ACTIVITY -->
        <div class="lg:col-span-2 space-y-6">

            <!-- HORIZONTAL METRICS BAR -->
            <!-- HORIZONTAL METRICS BAR -->
            <div class="bg-white border border-slate-200/80 rounded-3xl p-5 grid grid-cols-3 gap-2 shadow-[0_8px_30px_rgb(0,0,0,0.02)]">
                <div class="text-center py-2 group/metric cursor-pointer border-r border-slate-100">
                    <span class="block text-[10px] uppercase font-bold text-slate-400 tracking-widest mb-1">Abonnés</span>
                    <span class="block font-black text-xl text-slate-800 font-mono group-hover/metric:text-indigo-600 transition-colors">
                        {{ $user->followers->count() }}
                    </span>
                </div>
                <div class="text-center py-2 group/metric cursor-pointer border-r border-slate-100">
                    <span class="block text-[10px] uppercase font-bold text-slate-400 tracking-widest mb-1">Abonnements</span>
                    <span class="block font-black text-xl text-slate-800 font-mono group-hover/metric:text-purple-600 transition-colors">
                        {{ $user->followings->count() }}
                    </span>
                </div>
                <div class="text-center py-2 group/metric cursor-pointer">
                    <span class="block text-[10px] uppercase font-bold text-slate-400 tracking-widest mb-1">Posts</span>
                    <span class="block font-black text-xl text-slate-800 font-mono group-hover/metric:text-emerald-600 transition-colors">
                        {{ $user->post->count() }}
                    </span>
                </div>
            </div>>

            <!-- ABOUT INFOCARD BOX -->
            <div class="bg-white border border-slate-200/80 rounded-3xl p-6 sm:p-8 shadow-[0_8px_30px_rgb(0,0,0,0.02)] space-y-5 relative overflow-hidden">

                <div class="flex items-center gap-2 border-b border-slate-100 pb-3">
                    <div class="w-1.5 h-3 bg-indigo-600 rounded-sm"></div>
                    <h3 class="text-xs font-black text-slate-400 uppercase tracking-widest">
                        Infos de fond / Résumé
                    </h3>
                </div>

                <p class="text-slate-600 text-sm sm:text-base leading-relaxed whitespace-pre-line font-medium tracking-wide">
                    Passionné par l'architecture logicielle et l'expérience utilisateur de pointe. J'accompagne les startups et les entreprises dans le déploiement d'interfaces web fluides, hautement performantes et à forte scalabilité.

                    Adepte du minimalisme, du clean-code et des micro-interactions qui font la différence. Parlons technologie, UI/UX ou opportunités de croissance !
                </p>

                <div class="flex flex-wrap gap-2 pt-1">
                    <span class="text-[10px] bg-slate-50 border border-slate-200 text-slate-600 font-mono px-3 py-1.5 rounded-xl hover:bg-slate-100 transition-colors cursor-default">#UIUX</span>
                    <span class="text-[10px] bg-indigo-50/50 border border-indigo-100/80 text-indigo-600 font-mono px-3 py-1.5 rounded-xl hover:bg-indigo-50 transition-colors cursor-default">#Laravel</span>
                    <span class="text-[10px] bg-purple-50/50 border border-purple-100/80 text-purple-600 font-mono px-3 py-1.5 rounded-xl hover:bg-purple-50 transition-colors cursor-default">#TailwindCSS</span>
                    <span class="text-[10px] bg-emerald-50/50 border border-emerald-100/80 text-emerald-500 font-mono px-3 py-1.5 rounded-xl hover:bg-emerald-50 transition-colors cursor-default">#ProductDesign</span>
                </div>
            </div>

            <!-- RECENT ACTIVITY HEADLINE -->
            <div class="bg-white border border-slate-200/80 rounded-3xl p-6 sm:p-8 shadow-[0_8px_30px_rgb(0,0,0,0.02)] space-y-5">
                <div class="flex items-center justify-between border-b border-slate-100 pb-3">
                    <div class="flex items-center gap-2">
                        <div class="w-1.5 h-3 bg-slate-900 rounded-sm"></div>
                        <h3 class="text-xs font-black text-slate-400 uppercase tracking-widest">
                            Activité récente
                        </h3>
                    </div>
                    <span class="text-[9px] bg-slate-50 text-slate-600 border border-slate-200 px-3 py-1 rounded-xl font-bold uppercase tracking-wider hover:bg-slate-100 cursor-pointer transition-colors">Tout voir</span>
                </div>

                <!-- Activity Content -->
                <div class="space-y-4">
                    <div class="group/activity cursor-pointer">
                        <p class="text-xs font-bold text-slate-400 mb-2">
                            <span class="text-slate-800 font-black group-hover/activity:text-indigo-600 transition-colors">{{ Auth::user()->name }}</span> a partagé un post
                        </p>
                        <div class="bg-slate-50/50 border border-slate-200/60 rounded-2xl p-4 group-hover/activity:border-slate-300 group-hover/activity:bg-white transition-all duration-300 relative">
                            <!-- Premium Subtle Left Highlight -->
                            <div class="absolute left-0 top-0 bottom-0 w-[3px] bg-slate-900 scale-y-0 group-hover/activity:scale-y-100 transition-transform duration-300 rounded-l-2xl"></div>
                            <p class="text-slate-600 text-xs sm:text-sm line-clamp-2 leading-relaxed font-medium pl-1">
                                Ravi de partager notre toute nouvelle refonet basée sur le paradigme Semi-Light Modern ! Le design minimaliste n'a jamais été aussi percutant...
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
@endsection