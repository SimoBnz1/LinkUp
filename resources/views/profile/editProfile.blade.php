@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-[radial-gradient(ellipse_at_top_right,_var(--tw-gradient-stops))] from-slate-900 via-indigo-950 to-slate-950 py-12 px-4 sm:px-6 lg:px-8 font-sans antialiased text-slate-200">
    
    <div class="max-w-3xl mx-auto space-y-8">
        
        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-3xl font-extrabold tracking-tight bg-clip-text text-transparent bg-gradient-to-r from-white via-indigo-200 to-indigo-400">
                    Modifier le Profil
                </h1>
                <p class="mt-2 text-sm text-slate-400">Personnalisez votre identité professionnelle sur LinkUp.</p>
            </div>
            
            <a href="{{ route('profile', $user) }}" class="flex items-center gap-2 px-4 py-2 text-xs font-bold text-indigo-400 bg-indigo-500/10 border border-indigo-500/20 rounded-xl hover:bg-indigo-500/20 transition-all backdrop-blur-md">
                <i class="fa-solid fa-arrow-left"></i> Retour au profil
            </a>
        </div>

        <form action="{{ route('updateProfile', $user) }}" method="POST" class="bg-white/[0.03] border border-white/[0.07] backdrop-blur-xl shadow-[0_20px_50px_rgba(0,0,0,0.3)] rounded-3xl p-6 sm:p-10 space-y-8">
            @csrf
            @method('PUT')

            <div class="flex flex-col sm:flex-row items-center gap-6 pb-6 border-b border-white/[0.06]">
                <div class="relative group">
                    <img src="{{ $user->image_url ?? 'https://ui-avatars.com/api/?name='.urlencode(Auth::user()->name).'&background=6366f1&color=fff' }}" 
                         id="avatar-preview"
                         class="w-24 h-24 rounded-2xl object-cover border-2 border-indigo-500/30 p-1 bg-slate-900 transition-all group-hover:border-indigo-400" 
                         alt="Avatar">
                    <div class="absolute inset-0 bg-black/40 rounded-2xl opacity-0 group-hover:opacity-100 flex items-center justify-center transition-opacity cursor-pointer">
                        <i class="fa-solid fa-camera text-white text-lg"></i>
                    </div>
                </div>
                
                <div class="flex-1 text-center sm:text-left space-y-3">
                    <h3 class="text-sm font-semibold text-slate-300">Photo de profil & Disponibilité</h3>
                    
                    <label class="inline-flex items-center cursor-pointer select-none">
                        <input type="checkbox" name="is_open_to_work" value="1" class="sr-only peer" {{ $user->is_open_to_work ? 'checked' : '' }}>
                        <div class="w-11 h-6 bg-slate-800 rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-slate-400 peer-checked:after:bg-white after:border-slate-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-indigo-600 relative"></div>
                        <span class="ms-3 text-xs font-bold uppercase tracking-wider {{  Auth::user()->is_open_to_work ? 'text-emerald-400' : 'text-slate-400' }}">
                            <i class="fa-solid fa-briefcase mr-1"></i> Open to work
                        </span>
                    </label>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                
                <div class="space-y-2">
                    <label class="text-xs font-bold text-slate-400 uppercase tracking-wider">Nom complet <span class="text-rose-500">*</span></label>
                    <div class="relative">
                        <i class="fa-regular fa-user absolute left-4 top-1/2 -translate-y-1/2 text-slate-500 text-sm"></i>
                        <input type="text" name="name" value="{{ old('name', Auth::user()->name) }}" required
                               class="w-full bg-slate-900/50 border border-white/[0.08] rounded-xl pl-11 pr-4 py-3 text-sm text-white focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500/30 transition-all placeholder:text-slate-600">
                    </div>
                    @error('name') <p class="text-xs text-rose-500 mt-1">{{ $message }}</p> @enderror
                </div>

                <div class="space-y-2 opacity-60">
                    <label class="text-xs font-bold text-slate-400 uppercase tracking-wider">Adresse Email (Non modifiable)</label>
                    <div class="relative">
                        <i class="fa-regular fa-envelope absolute left-4 top-1/2 -translate-y-1/2 text-slate-500 text-sm"></i>
                        <input type="email" value="{{ Auth::user()->email }}" disabled
                               class="w-full bg-slate-950 border border-white/[0.04] rounded-xl pl-11 pr-4 py-3 text-sm text-slate-500 cursor-not-allowed">
                    </div>
                </div>

                <div class="sm:col-span-2 space-y-2">
                    <label class="text-xs font-bold text-slate-400 uppercase tracking-wider">Titre professionnel (Headline) <span class="text-rose-500">*</span></label>
                    <div class="relative">
                        <i class="fa-solid fa-bolt absolute left-4 top-1/2 -translate-y-1/2 text-slate-500 text-sm"></i>
                        <input type="text" name="headline" value="{{ old('headline', Auth::user()->headline) }}" required placeholder="Ex: Développeur Full-Stack | Laravel & React"
                               class="w-full bg-slate-900/50 border border-white/[0.08] rounded-xl pl-11 pr-4 py-3 text-sm text-white focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500/30 transition-all placeholder:text-slate-600">
                    </div>
                    @error('headline') <p class="text-xs text-rose-500 mt-1">{{ $message }}</p> @enderror
                </div>

                <div class="space-y-2">
                    <label class="text-xs font-bold text-slate-400 uppercase tracking-wider">Entreprise / École</label>
                    <div class="relative">
                        <i class="fa-solid fa-building absolute left-4 top-1/2 -translate-y-1/2 text-slate-500 text-sm"></i>
                        <input type="text" name="company" value="{{ old('company', Auth::user()->company) }}" placeholder="Ex: OpenLab ou Freelance"
                               class="w-full bg-slate-900/50 border border-white/[0.08] rounded-xl pl-11 pr-4 py-3 text-sm text-white focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500/30 transition-all placeholder:text-slate-600">
                    </div>
                    @error('company') <p class="text-xs text-rose-500 mt-1">{{ $message }}</p> @enderror
                </div>

                <div class="space-y-2">
                    <label class="text-xs font-bold text-slate-400 uppercase tracking-wider">Lien de la photo (URL)</label>
                    <div class="relative">
                        <i class="fa-solid fa-link absolute left-4 top-1/2 -translate-y-1/2 text-slate-500 text-sm"></i>
                        <input type="url" name="image_url" value="{{ old('image_url', Auth::user()->image_url) }}" placeholder="https://example.com/avatar.jpg"
                               class="w-full bg-slate-900/50 border border-white/[0.08] rounded-xl pl-11 pr-4 py-3 text-sm text-white focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500/30 transition-all placeholder:text-slate-600">
                    </div>
                    @error('image_url') <p class="text-xs text-rose-500 mt-1">{{ $message }}</p> @enderror
                </div>

            </div>

            <div class="flex items-center justify-end gap-4 pt-4 border-t border-white/[0.06]">
                <a href="{{ route('profile', $user) }}" class="px-5 py-2.5 rounded-xl text-xs font-bold text-slate-400 hover:text-white transition-colors">
                    Annuler
                </a>
                <button type="submit" class="px-6 py-2.5 rounded-xl text-xs font-bold text-white bg-indigo-600 hover:bg-indigo-500 shadow-lg shadow-indigo-600/20 hover:shadow-indigo-600/30 transition-all">
                    Enregistrer les modifications
                </button>
            </div>

        </form>
    </div>
</div>
@endsection