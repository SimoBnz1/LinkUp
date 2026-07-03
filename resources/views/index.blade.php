<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LinkUp | Next-Gen Platform</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style>
        /* Glow Effect Custom Animation */
        @keyframes pulse-slow {
            0%, 100% { opacity: 0.4; transform: scale(1); }
            50% { opacity: 0.8; transform: scale(1.05); }
        }
        .animate-pulse-slow {
            animation: pulse-slow 8s infinite ease-in-out;
        }
    </style>
</head>
<body class="bg-[#090d16] text-slate-200 font-sans antialiased overflow-x-hidden selection:bg-indigo-500 selection:text-white">

    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full max-w-7xl h-[600px] pointer-events-none overflow-hidden z-0">
        <div class="absolute top-[-10%] left-[-10%] w-[400px] h-[400px] rounded-full bg-gradient-to-br from-indigo-600/30 to-purple-600/0 blur-[120px] animate-pulse-slow"></div>
        <div class="absolute top-[20%] right-[-10%] w-[500px] h-[500px] rounded-full bg-gradient-to-br from-cyan-500/20 to-blue-600/0 blur-[150px] animate-pulse-slow [animation-delay:2s]"></div>
    </div>

    <header class="sticky top-0 z-50 w-full border-b border-slate-800/60 bg-[#090d16]/70 backdrop-blur-xl">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
            
            <a href="#" class="flex items-center gap-2 group">
                <div class="h-9 w-9 rounded-xl bg-gradient-to-tr from-indigo-500 via-purple-500 to-cyan-400 flex items-center justify-center shadow-[0_0_20px_rgba(99,102,241,0.4)] transition-transform group-hover:rotate-6">
                    <span class="text-white font-black text-xl">L</span>
                </div>
                <span class="text-xl font-black tracking-wider text-white bg-gradient-to-r from-white via-slate-200 to-slate-400 bg-clip-text">
                    LinkUp<span class="text-indigo-400">.</span>
                </span>
            </a>

            <nav class="hidden md:flex items-center gap-10 text-sm font-medium tracking-wide text-slate-400">
                <a href="#features" class="hover:text-white transition-colors relative after:absolute after:bottom-[-4px] after:left-0 after:w-0 after:h-[2px] after:bg-indigo-400 hover:after:w-full after:transition-all">Ecosystème</a>
                <a href="#metrics" class="hover:text-white transition-colors relative after:absolute after:bottom-[-4px] after:left-0 after:w-0 after:h-[2px] after:bg-indigo-400 hover:after:w-full after:transition-all">Performances</a>
                <a href="#" class="hover:text-white transition-colors relative after:absolute after:bottom-[-4px] after:left-0 after:w-0 after:h-[2px] after:bg-indigo-400 hover:after:w-full after:transition-all">Tarifs</a>
            </nav>

            <div class="flex items-center gap-4">
                <a href="{{route('auth.register')}}" class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-semibold rounded-xl group bg-gradient-to-br from-indigo-500 via-purple-500 to-cyan-400 group-hover:from-indigo-500 group-hover:to-cyan-400 text-white focus:ring-4 focus:outline-none focus:ring-indigo-800 transition-all duration-300">
                    <span class="relative px-5 py-2 transition-all ease-in duration-75 bg-[#090d16] rounded-xl group-hover:bg-opacity-0">
                        Register
                    </span>
                </a>
                <a href="{{route('auth.login')}}" class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-semibold rounded-xl group bg-gradient-to-br from-indigo-500 via-purple-500 to-cyan-400 group-hover:from-indigo-500 group-hover:to-cyan-400 text-white focus:ring-4 focus:outline-none focus:ring-indigo-800 transition-all duration-300">
                    <span class="relative px-5 py-2 transition-all ease-in duration-75 bg-[#090d16] rounded-xl group-hover:bg-opacity-0">
                        Connexion
                    </span>
                </a>
            </div>
        </div>
    </header>

    <main class="relative z-10">
        
        <section class="pt-24 pb-20 md:pt-36 md:pb-32">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                
                <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-slate-800/40 border border-slate-700/50 backdrop-blur-md mb-6 animate-fade-in">
                    <span class="w-2 h-2 rounded-full bg-cyan-400 animate-ping"></span>
                    <span class="text-xs font-medium text-slate-300 tracking-wide">Version 2.0 Bêta disponible</span>
                </div>

                <h1 class="text-4xl sm:text-6xl lg:text-7xl font-black tracking-tight text-white max-w-5xl mx-auto leading-[1.15] mb-8">
                    Propulsez votre Workflow avec une <span class="bg-gradient-to-r from-indigo-400 via-purple-400 to-cyan-400 bg-clip-text text-transparent">Vitesse Absolue</span>
                </h1>

                <p class="text-lg sm:text-xl text-slate-400 max-w-2xl mx-auto font-light leading-relaxed mb-12">
                    Connectez vos outils, analysez vos metrics en temps réel o khli kolchi f blassa wehda. L'interface li katsme3 lik t-gérer bla sda3.
                </p>

                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center mb-20">
                    <a href="login.php" class="w-full sm:w-auto px-8 py-4 bg-gradient-to-r from-indigo-500 to-purple-600 hover:from-indigo-600 hover:to-purple-700 text-white font-semibold rounded-xl shadow-[0_4px_30px_rgba(99,102,241,0.4)] hover:shadow-[0_4px_40px_rgba(99,102,241,0.6)] transition-all duration-300 transform hover:-translate-y-0.5 text-center">
                        Ouvrir le Dashboard &rarr;
                    </a>
                    <a href="#features" class="w-full sm:w-auto px-8 py-4 bg-slate-800/60 hover:bg-slate-800 border border-slate-700/80 hover:border-slate-600 text-slate-200 font-semibold rounded-xl transition-all duration-300 backdrop-blur-sm text-center">
                        Découvrir les features
                    </a>
                </div>

                <div class="relative mx-auto max-w-5xl rounded-2xl border border-slate-800 bg-slate-900/40 p-4 backdrop-blur-xl shadow-[0_0_50px_rgba(0,0,0,0.8)]">
                    <div class="absolute -top-12 left-1/3 w-72 h-72 bg-purple-500/10 rounded-full blur-[80px] pointer-events-none"></div>
                    <div class="flex items-center justify-between border-b border-slate-800 pb-3 mb-4">
                        <div class="flex items-center gap-2">
                            <span class="w-3 h-3 rounded-full bg-rose-500/70"></span>
                            <span class="w-3 h-3 rounded-full bg-amber-500/70"></span>
                            <span class="w-3 h-3 rounded-full bg-emerald-500/70"></span>
                        </div>
                        <div class="text-xs text-slate-500 font-mono bg-slate-950 px-4 py-1 rounded-md border border-slate-800/50">
                            dashboard.linkup.com/analytics
                        </div>
                        <div class="w-12"></div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 h-48 md:h-64">
                        <div class="rounded-xl border border-slate-800/80 bg-slate-950/60 p-4 flex flex-col justify-between">
                            <span class="text-left text-xs font-semibold uppercase tracking-wider text-slate-500">Flux d'activité</span>
                            <div class="h-24 bg-gradient-to-t from-indigo-500/20 to-transparent rounded-lg border border-indigo-500/20 relative overflow-hidden">
                                <div class="absolute bottom-4 left-0 right-0 h-[2px] bg-indigo-400 shadow-[0_0_10px_#6366f1]"></div>
                            </div>
                        </div>
                        <div class="rounded-xl border border-slate-800/80 bg-slate-950/60 p-4 flex flex-col justify-between">
                            <span class="text-left text-xs font-semibold uppercase tracking-wider text-slate-500">Performances API</span>
                            <div class="space-y-2">
                                <div class="h-2 w-full bg-slate-800 rounded-full overflow-hidden"><div class="h-full w-4/5 bg-purple-500"></div></div>
                                <div class="h-2 w-full bg-slate-800 rounded-full overflow-hidden"><div class="h-full w-11/12 bg-cyan-400"></div></div>
                                <div class="h-2 w-full bg-slate-800 rounded-full overflow-hidden"><div class="h-full w-2/3 bg-indigo-500"></div></div>
                            </div>
                        </div>
                        <div class="rounded-xl border border-slate-800/80 bg-slate-950/60 p-4 flex items-center justify-center">
                            <div class="text-center">
                                <span class="block text-3xl font-black text-white">99.9%</span>
                                <span class="text-xs text-emerald-400 tracking-wide font-mono">Uptime Garanti</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section id="features" class="py-24 border-t border-slate-900 bg-slate-950/40 relative">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <h2 class="text-3xl sm:text-4xl font-bold tracking-tight text-white mb-4">
                        Conçu pour la nouvelle génération de développeurs
                    </h2>
                    <p class="text-slate-400 font-light">
                        Plus besoin d'empiler 10 outils différents. LinkUp centralise tout de manière fluide.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    
                    <div class="group relative rounded-2xl border border-slate-800 bg-slate-900/20 p-8 hover:bg-slate-900/50 transition-all duration-300">
                        <div class="absolute inset-0 bg-gradient-to-br from-indigo-500/5 to-purple-500/5 opacity-0 group-hover:opacity-100 transition-opacity rounded-2xl"></div>
                        <div class="h-12 w-12 rounded-xl bg-indigo-500/10 border border-indigo-500/30 flex items-center justify-center text-indigo-400 font-bold text-xl mb-6 group-hover:scale-110 transition-transform">
                            ⚡
                        </div>
                        <h3 class="text-xl font-bold text-white mb-3">Vélocité Ultra</h3>
                        <p class="text-slate-400 text-sm font-light leading-relaxed">
                            Architecture asynchrone optimisée. Les requêtes se font en arrière-plan sans rechargement de page.
                        </p>
                    </div>

                    <div class="group relative rounded-2xl border border-slate-800 bg-slate-900/20 p-8 hover:bg-slate-900/50 transition-all duration-300">
                        <div class="absolute inset-0 bg-gradient-to-br from-purple-500/5 to-pink-500/5 opacity-0 group-hover:opacity-100 transition-opacity rounded-2xl"></div>
                        <div class="h-12 w-12 rounded-xl bg-purple-500/10 border border-purple-500/30 flex items-center justify-center text-purple-400 font-bold text-xl mb-6 group-hover:scale-110 transition-transform">
                            🛡️
                        </div>
                        <h3 class="text-xl font-bold text-white mb-3">Sécurité Absolue</h3>
                        <p class="text-slate-400 text-sm font-light leading-relaxed">
                            Protection CSRF, sessions chiffrées o gestion fine des rôles pour sécuriser l'accès au Dashboard.
                        </p>
                    </div>

                    <div class="group relative rounded-2xl border border-slate-800 bg-slate-900/20 p-8 hover:bg-slate-900/50 transition-all duration-300">
                        <div class="absolute inset-0 bg-gradient-to-br from-cyan-500/5 to-blue-500/5 opacity-0 group-hover:opacity-100 transition-opacity rounded-2xl"></div>
                        <div class="h-12 w-12 rounded-xl bg-cyan-400/10 border border-cyan-400/30 flex items-center justify-center text-cyan-400 font-bold text-xl mb-6 group-hover:scale-110 transition-transform">
                            🔮
                        </div>
                        <h3 class="text-xl font-bold text-white mb-3">Design Intuitif</h3>
                        <p class="text-slate-400 text-sm font-light leading-relaxed">
                            Une interface pensée pour le confort visuel. Réduction de la fatigue o navigation ultra-rapide.
                        </p>
                    </div>

                </div>
            </div>
        </section>

    </main>

    <footer class="border-t border-slate-900 bg-[#060910] py-12 relative z-10 text-center text-sm text-slate-500">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col sm:flex-row items-center justify-between gap-4">
            <div class="font-bold text-slate-400">LinkUp<span class="text-indigo-500">.</span></div>
            <p>&copy; 2026 LinkUp. Code fait avec précision pour des performances maximales.</p>
            <div class="flex gap-6 text-xs">
                <a href="#" class="hover:text-white transition">Privacy</a>
                <a href="#" class="hover:text-white transition">Terms</a>
            </div>
        </div>
    </footer>

</body>
</html>