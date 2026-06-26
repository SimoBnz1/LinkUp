@extends('layouts.app')

@section('content')
<div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
    
    <!-- LEFT SIDEBAR: User Profile Summary (3 Columns) -->
    <aside class="hidden lg:block lg:col-span-3 bg-white border border-slate-100 rounded-2xl overflow-hidden shadow-xs sticky top-24">
        <!-- Cover Photo Pattern -->
        <div class="h-16 bg-gradient-to-tr from-indigo-500 to-purple-600"></div>
        
        <!-- Profile Details -->
        <div class="px-5 pb-5 pt-0 text-center relative">
            <div class="flex justify-center">
                <div class="w-16 h-16 rounded-2xl bg-white p-0.5 shadow-md -mt-8 mb-3 ring-4 ring-white">
                    <div class="w-full h-full bg-slate-50 rounded-xl flex items-center justify-center font-bold text-lg text-slate-700 border border-slate-100">
                        IB
                    </div>
                </div>
            </div>
            <h2 class="font-bold text-slate-800 text-sm tracking-tight hover:text-indigo-600 transition-colors cursor-pointer">Mohamed Ben Izza</h2>
            <p class="text-[11px] text-indigo-600 font-medium mt-0.5">Développeuse Fullstack</p>
            
            <div class="border-t border-slate-100 my-4 pt-4 text-left space-y-2 text-[11px] text-slate-500">
                <div class="flex justify-between">
                    <span>Vues du profil</span>
                    <span class="font-semibold text-indigo-600">142</span>
                </div>
                <div class="flex justify-between">
                    <span>Impressions</span>
                    <span class="font-semibold text-indigo-600 font-mono">1.2K</span>
                </div>
            </div>
        </div>
    </aside>

    <!-- CENTER: Main Feed Content (6 Columns) -->
    <section class="col-span-1 lg:col-span-6 space-y-5">
        
        <!-- Section Header -->
        <div class="flex items-center justify-between px-1">
            <div class="flex items-center gap-2">
                <h1 class="text-base font-bold tracking-tight text-slate-800">Fil d'actualité</h1>
                <span class="w-1.5 h-1.5 bg-indigo-500 rounded-full animate-pulse"></span>
            </div>
            <span class="text-[10px] bg-slate-100 text-slate-500 px-2.5 py-0.5 rounded-full font-medium">Live</span>
        </div>

        <!-- Loop Target using Blade Structure -->
        @forelse($posts as $post)
            <article class="bg-white border border-slate-100 rounded-2xl p-5 shadow-xs hover:shadow-md transition-all duration-300 group">
                
                <!-- Post Header (Author Metadata) -->
                <div class="flex items-start justify-between">
                    <div class="flex items-center gap-3">
                        <!-- Squircle Avatar Container -->
                        <img src="{{ $post->user->image_url ?? 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?q=80&w=200&auto=format&fit=crop' }}" 
                             alt="{{ $post->user->name }}" 
                             class="w-11 h-11 rounded-xl object-cover ring-2 ring-slate-50 shadow-xs">
                        
                        <!-- Author Text Metadata -->
                        <div>
                            <h3 class="font-bold text-slate-800 text-sm hover:text-indigo-600 hover:underline cursor-pointer transition-all">
                                {{ $post->user->name }}
                            </h3>
                            <p class="text-xs text-slate-400 font-medium line-clamp-1 mt-0.5">
                                {{ $post->user->headline }} 
                                @if($post->user->company) 
                                    <span class="text-slate-200 mx-1">|</span> <span class="text-slate-500 font-normal">{{ $post->user->company }}</span> 
                                @endif
                            </p>
                        </div>
                    </div>
                    
                    <!-- Humanized Timestamp -->
                    <span class="text-[10px] text-slate-400 font-medium bg-slate-50 px-2 py-1 rounded-lg">
                        {{ $post->created_at->diffForHumans(null, true) }}
                    </span>
                </div>

                <!-- Post Rich Content Body -->
                <div class="mt-4 px-0.5">
                    <p class="text-slate-600 text-sm leading-relaxed select-text line-clamp-4 group-hover:line-clamp-none transition-all duration-500 ease-in-out whitespace-pre-line">
                        {{ $post->content }}
                    </p>
                </div>

                <!-- Footer Action Buttons Bar -->
                <div class="flex justify-between items-center mt-5 pt-3 border-t border-slate-50 text-slate-500 font-semibold text-xs sm:text-sm">
                    <button class="flex items-center gap-2 hover:bg-indigo-50 hover:text-indigo-600 px-3 py-2 rounded-xl transition-all cursor-pointer active:scale-95">
                        <i class="fa-regular fa-thumbs-up text-base"></i> <span>J'aime</span>
                    </button>
                    <button class="flex items-center gap-2 hover:bg-indigo-50 hover:text-indigo-600 px-3 py-2 rounded-xl transition-all cursor-pointer active:scale-95">
                        <i class="fa-regular fa-comment text-base"></i> <span>Commenter</span>
                    </button>
                    <button class="flex items-center gap-2 hover:bg-indigo-50 hover:text-indigo-600 px-3 py-2 rounded-xl transition-all cursor-pointer active:scale-95">
                        <i class="fa-regular fa-share-from-square text-base"></i> <span>Partager</span>
                    </button>
                </div>

            </article>
        @empty
            <!-- Empty State Illustration Placeholder -->
            <div class="bg-white border-2 border-dashed border-slate-100 p-12 rounded-2xl text-center text-slate-400 text-xs shadow-xs">
                <i class="fa-solid fa-inbox text-3xl text-slate-300 mb-3 block"></i>
                <span class="font-medium">Aucun post disponible pour le moment.</span>
            </div>
        @endforelse

    </section>

    <!-- RIGHT SIDEBAR: Online Active Members (3 Columns) -->
    <aside class="hidden lg:block lg:col-span-3 bg-white border border-slate-100 rounded-2xl p-4 shadow-xs sticky top-24">
        <h3 class="text-xs font-bold text-slate-800 mb-4 tracking-tight flex items-center justify-between">
            <span>Membres en ligne</span>
            <span class="w-2 h-2 bg-emerald-500 rounded-full animate-pulse"></span>
        </h3>
        
        <div class="space-y-3.5">
            <!-- Active Member Item -->
            <div class="flex items-center justify-between group cursor-pointer">
                <div class="flex items-center gap-2.5">
                    <div class="relative">
                        <div class="w-8 h-8 rounded-xl bg-slate-900 text-white font-bold text-[10px] flex items-center justify-center border border-slate-100 shadow-xs">
                            AM
                        </div>
                        <span class="absolute -bottom-0.5 -right-0.5 w-2.5 h-2.5 bg-emerald-500 border-2 border-white rounded-full"></span>
                    </div>
                    <div class="min-w-0">
                        <p class="text-xs font-semibold text-slate-700 group-hover:text-indigo-600 truncate transition-colors">Anas Mazouni</p>
                        <p class="text-[9px] text-slate-400 truncate">Tech Lead @Google</p>
                    </div>
                </div>
            </div>

            <!-- Active Member Item -->
            <div class="flex items-center justify-between group cursor-pointer">
                <div class="flex items-center gap-2.5">
                    <div class="relative">
                        <div class="w-8 h-8 rounded-xl bg-amber-500 text-white font-bold text-[10px] flex items-center justify-center border border-slate-100 shadow-xs">
                            SR
                        </div>
                        <span class="absolute -bottom-0.5 -right-0.5 w-2.5 h-2.5 bg-emerald-500 border-2 border-white rounded-full"></span>
                    </div>
                    <div class="min-w-0">
                        <p class="text-xs font-semibold text-slate-700 group-hover:text-indigo-600 truncate transition-colors">Sara Radi</p>
                        <p class="text-[9px] text-slate-400 truncate">UI/UX Designer</p>
                    </div>
                </div>
            </div>

            <!-- Active Member Item -->
            <div class="flex items-center justify-between group cursor-pointer">
                <div class="flex items-center gap-2.5">
                    <div class="relative">
                        <div class="w-8 h-8 rounded-xl bg-indigo-600 text-white font-bold text-[10px] flex items-center justify-center border border-slate-100 shadow-xs">
                            OK
                        </div>
                        <span class="absolute -bottom-0.5 -right-0.5 w-2.5 h-2.5 bg-emerald-500 border-2 border-white rounded-full"></span>
                    </div>
                    <div class="min-w-0">
                        <p class="text-xs font-semibold text-slate-700 group-hover:text-indigo-600 truncate transition-colors">Omar Kabiri</p>
                        <p class="text-[9px] text-slate-400 truncate">DevOps Engineer</p>
                    </div>
                </div>
            </div>
        </div>
    </aside>

</div>
@endsection