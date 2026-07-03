@extends('layouts.app')

@section('content')
<div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">

    <!-- LEFT SIDEBAR: User Profile Summary (3 Columns) -->
    @auth
    <aside class="hidden lg:block lg:col-span-3 bg-white border border-slate-200/70 rounded-3xl overflow-hidden shadow-sm shadow-slate-200/50 sticky top-24">
        <!-- Premium Tricolor Blend Top Cover -->
        <div class="h-20 bg-gradient-to-r from-indigo-600 via-violet-600 to-emerald-500 relative overflow-hidden">
            <div class="absolute inset-0 bg-[radial-gradient(circle_at_30%_20%,rgba(255,255,255,0.25),transparent_60%)]"></div>
            <svg class="absolute -bottom-2 right-3 opacity-40" width="70" height="40" viewBox="0 0 70 40" fill="none">
                <circle cx="8" cy="30" r="2.5" fill="white" />
                <circle cx="34" cy="14" r="2.5" fill="white" />
                <circle cx="60" cy="26" r="2.5" fill="white" />
                <line x1="8" y1="30" x2="34" y2="14" stroke="white" stroke-width="1" />
                <line x1="34" y1="14" x2="60" y2="26" stroke="white" stroke-width="1" />
            </svg>
        </div>

        <!-- Profile Details -->
        <div class="px-5 pb-6 pt-0 text-center relative">
            <div class="flex justify-center">
                <div class="w-[68px] h-[68px] rounded-2xl bg-white p-[3px] shadow-lg shadow-slate-300/40 -mt-9 mb-3 ring-4 ring-white">
                    <div class="w-full h-full bg-slate-50 rounded-[13px] flex items-center justify-center font-display font-semibold text-sm text-slate-700 border border-slate-100">
                        IB
                    </div>
                </div>
            </div>

            <h2 class="font-display font-semibold text-slate-900 text-[16px] tracking-tight hover:text-indigo-600 transition-colors cursor-pointer">{{Auth::user()->name}}</h2>
            <p class="text-[11.5px] text-violet-600 font-semibold mt-1">{{Auth::user()->headline}}</p>

            <div class="border-t border-slate-100 my-4 pt-4 text-left space-y-2.5 text-[11.5px] text-slate-500">
                <div class="flex justify-between items-center">
                    <span class="font-medium">Vues du profil</span>
                    <span class="font-extrabold text-emerald-700 bg-emerald-50 px-2.5 py-0.5 rounded-lg">142</span>
                </div>
                <div class="flex justify-between items-center">
                    <span class="font-medium">Impressions</span>
                    <span class="font-extrabold text-indigo-700 bg-indigo-50 px-2.5 py-0.5 rounded-lg font-mono">1.2K</span>
                </div>
            </div>
        </div>
    </aside>
    @endauth

    <!-- CENTER: Main Feed Content (6 Columns) -->
    <section class="col-span-1 lg:col-span-6">

        <!-- Section Header -->
        <div class="flex items-center justify-between px-1 flex-wrap gap-3 mb-6">
            <div class="flex items-center gap-2.5">
                <h1 class="font-display italic text-[19px] font-medium text-slate-800">Fil d'actualité</h1>
                <span class="relative flex h-2 w-2">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-500"></span>
                </span>
                <span class="text-[10px] bg-indigo-50 text-indigo-600 border border-indigo-100 px-2.5 py-0.5 rounded-full font-extrabold uppercase tracking-wide">Live</span>
            </div>

            <a href="{{ route('creatPost')}}" class="flex items-center gap-2 bg-gradient-to-r from-indigo-600 via-violet-600 to-indigo-700 hover:brightness-110 text-white px-4 py-2.5 rounded-xl text-xs sm:text-sm font-bold transition-all shadow-md shadow-indigo-300/40 cursor-pointer hover:scale-[1.02] active:scale-[0.97]">
                <i class="fa-solid fa-plus text-[11px]"></i>
                <span>Créer un post</span>
            </a>
        </div>

        <!-- Connected feed: each post sits as a node along the thread -->
        <div class="relative">
            <span class="hidden sm:block absolute left-5 top-3 bottom-3 w-px bg-gradient-to-b from-indigo-300 via-violet-300 to-emerald-300"></span>

            <div class="space-y-6">
                @forelse($posts as $post)
                <div class="flex gap-3 sm:gap-5">

                    <!-- Node marker aligned to the thread -->
                    <div class="hidden sm:flex flex-col items-center pt-6 w-10 shrink-0 relative z-10">
                        <span class="w-3.5 h-3.5 rounded-full bg-white border-[3px] border-indigo-500 shadow-sm shadow-indigo-200"></span>
                    </div>

                    <article class="flex-1 min-w-0 bg-white border border-slate-200/70 rounded-3xl p-5 sm:p-6 shadow-sm shadow-slate-200/50 hover:shadow-lg hover:shadow-slate-200/60 hover:border-violet-200 transition-all duration-300 group">

                        <!-- Post Header (Author Metadata) -->
                        <div class="flex items-start justify-between flex-wrap gap-3">
                            <div class="flex items-center gap-3">
                                <!-- Squircle Avatar Container -->
                                <div class="p-[2px] rounded-xl bg-gradient-to-br from-indigo-200 via-violet-200 to-emerald-200">
                                    <img src="{{ $post->user->image_url ?? 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?q=80&w=200&auto=format&fit=crop' }}"
                                        alt="{{ $post->user->name }}"
                                        class="w-11 h-11 rounded-[10px] object-cover shadow-xs bg-white">
                                </div>

                                <!-- Author Text Metadata -->
                                <div>
                                    <h3 class="font-display font-semibold text-slate-900 text-[15px] hover:text-indigo-600 cursor-pointer transition-all">
                                        {{ $post->user->name }}
                                    </h3>
                                    <p class="text-xs text-slate-400 font-medium line-clamp-1 mt-0.5">
                                        {{ $post->user->headline }}
                                        @if($post->user->company)
                                        <span class="text-slate-200 mx-1.5">•</span> <span class="text-violet-600 font-bold">{{ $post->user->company }}</span>
                                        @endif
                                    </p>
                                </div>
                            </div>

                            <!-- Post Actions (Update, Delete, Time) -->
                            <div class="flex items-center gap-1.5 ml-auto">
                                @can("update", $post)
                                <a href="{{ route('PageUpdate',$post)}}"
                                    class="update-post-btn text-[11px] text-indigo-600 font-bold bg-indigo-50 hover:bg-indigo-100 px-2.5 py-1.5 rounded-lg transition-all cursor-pointer">
                                    <i class="fa-solid fa-pen mr-1"></i> Modifier
                                </a>

                                @endcan

                                @can("delete", $post)
                                <form method="POST" action="{{route('deletePost',$post)}}" class="inline">
                                    @csrf
                                    @method('delete')
                                    <button class="text-[11px] text-rose-600 font-bold bg-rose-50 hover:bg-rose-100 px-2.5 py-1.5 rounded-lg transition-all cursor-pointer">
                                        <i class="fa-solid fa-trash mr-1"></i> Delete
                                    </button>
                                </form>
                                @endcan

                                <span class="text-[10px] text-slate-400 font-semibold bg-slate-50 px-2.5 py-1.5 rounded-lg border border-slate-100">
                                    {{ $post->created_at->diffForHumans(null, true) }}
                                </span>
                            </div>
                        </div>

                        <!-- Post Rich Content Body -->
                        <div class="mt-4 px-0.5">
                            <p class="text-slate-600 text-sm leading-relaxed select-text line-clamp-4 group-hover:line-clamp-none transition-all duration-500 ease-in-out whitespace-pre-line">
                                {{ $post->content }}
                            </p>
                        </div>

                        <!-- Footer Action Buttons Bar -->
                        <div class="flex justify-between items-center mt-5 pt-4 border-t border-slate-100 text-slate-500 font-bold text-xs sm:text-sm">
                            <button class="flex items-center gap-2 hover:bg-emerald-50 hover:text-emerald-600 px-4 py-2 rounded-xl transition-all cursor-pointer active:scale-95 group/btn">
                                <i class="fa-regular fa-thumbs-up text-base group-hover/btn:scale-110 transition-transform"></i> <span>J'aime</span>
                            </button>
                            <button class="flex items-center gap-2 hover:bg-indigo-50 hover:text-indigo-600 px-4 py-2 rounded-xl transition-all cursor-pointer active:scale-95 group/btn">
                                <i class="fa-regular fa-comment text-base group-hover/btn:scale-110 transition-transform"></i> <span>Commenter</span>
                            </button>
                            <button class="flex items-center gap-2 hover:bg-violet-50 hover:text-violet-600 px-4 py-2 rounded-xl transition-all cursor-pointer active:scale-95 group/btn">
                                <i class="fa-regular fa-share-from-square text-base group-hover/btn:scale-110 transition-transform"></i> <span>Partager</span>
                            </button>
                        </div>

                    </article>
                </div>
                @empty
                <!-- Empty State White Clean Placeholder -->
                <div class="bg-white border-2 border-dashed border-slate-200 p-14 rounded-3xl text-center shadow-sm shadow-slate-200/40 sm:ml-[52px]">
                    <div class="w-16 h-16 mx-auto mb-4 rounded-2xl bg-gradient-to-br from-indigo-50 to-emerald-50 flex items-center justify-center">
                        <i class="fa-solid fa-inbox text-2xl bg-gradient-to-br from-indigo-500 to-emerald-500 bg-clip-text text-transparent"></i>
                    </div>
                    <span class="font-display font-semibold text-[15px] block text-slate-700">Aucun post disponible pour le moment.</span>
                    <p class="text-xs text-slate-400 mt-1.5">Soyez le premier à partager quelque chose avec le réseau !</p>
                </div>
                @endforelse
            </div>
        </div>

    </section>

    <!-- RIGHT SIDEBAR: Online Active Members (3 Columns) -->
    <aside class="hidden lg:block lg:col-span-3 bg-white border border-slate-200/70 rounded-3xl p-5 shadow-sm shadow-slate-200/50 sticky top-24">
        <h3 class="text-[13px] font-extrabold text-slate-400 mb-4 uppercase tracking-wider flex items-center justify-between">
            <span>Membres en ligne</span>
            <span class="relative flex h-2 w-2">
                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                <span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-500"></span>
            </span>
        </h3>

        <div class="relative space-y-1">
            <span class="absolute left-[15px] top-4 bottom-4 w-px bg-gradient-to-b from-indigo-200 via-violet-200 to-emerald-200"></span>

            <!-- User 1 -->
            <div class="relative flex items-center justify-between group cursor-pointer p-2 -mx-2 rounded-xl hover:bg-slate-50 transition-colors">
                <div class="flex items-center gap-3 z-10">
                    <div class="relative">
                        <div class="w-9 h-9 rounded-xl bg-slate-100 text-slate-700 font-extrabold text-xs flex items-center justify-center border border-slate-200 shadow-xs">
                            AM
                        </div>
                        <span class="absolute -bottom-0.5 -right-0.5 w-2.5 h-2.5 bg-emerald-500 border-2 border-white rounded-full shadow-xs"></span>
                    </div>
                    <div class="min-w-0">
                        <p class="text-xs font-bold text-slate-700 group-hover:text-emerald-600 truncate transition-colors">Anas Mazouni</p>
                        <p class="text-[10.5px] text-slate-400 truncate">Tech Lead @Google</p>
                    </div>
                </div>
            </div>

            <!-- User 2 -->
            <div class="relative flex items-center justify-between group cursor-pointer p-2 -mx-2 rounded-xl hover:bg-slate-50 transition-colors">
                <div class="flex items-center gap-3 z-10">
                    <div class="relative">
                        <div class="w-9 h-9 rounded-xl bg-violet-50 text-violet-600 font-extrabold text-xs flex items-center justify-center border border-violet-100 shadow-xs">
                            SR
                        </div>
                        <span class="absolute -bottom-0.5 -right-0.5 w-2.5 h-2.5 bg-emerald-500 border-2 border-white rounded-full shadow-xs"></span>
                    </div>
                    <div class="min-w-0">
                        <p class="text-xs font-bold text-slate-700 group-hover:text-violet-600 truncate transition-colors">Sara Radi</p>
                        <p class="text-[10.5px] text-slate-400 truncate">UI/UX Designer</p>
                    </div>
                </div>
            </div>

            <!-- User 3 -->
            <div class="relative flex items-center justify-between group cursor-pointer p-2 -mx-2 rounded-xl hover:bg-slate-50 transition-colors">
                <div class="flex items-center gap-3 z-10">
                    <div class="relative">
                        <div class="w-9 h-9 rounded-xl bg-indigo-50 text-indigo-600 font-extrabold text-xs flex items-center justify-center border border-indigo-100 shadow-xs">
                            OK
                        </div>
                        <span class="absolute -bottom-0.5 -right-0.5 w-2.5 h-2.5 bg-emerald-500 border-2 border-white rounded-full shadow-xs"></span>
                    </div>
                    <div class="min-w-0">
                        <p class="text-xs font-bold text-slate-700 group-hover:text-indigo-600 truncate transition-colors">Omar Kabiri</p>
                        <p class="text-[10.5px] text-slate-400 truncate">DevOps Engineer</p>
                    </div>
                </div>
            </div>
        </div>
    </aside>

</div>
@endsection