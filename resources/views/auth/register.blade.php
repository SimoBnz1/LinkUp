<!DOCTYPE html>
<html lang="en" class="h-full bg-[#f6f8fc]">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <title>Créer un compte — LinkUp</title>
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-image: 
                radial-gradient(at 0% 0%, rgba(99, 102, 241, 0.05) 0px, transparent 50%),
                radial-gradient(at 100% 100%, rgba(139, 92, 246, 0.05) 0px, transparent 50%);
        }
    </style>
</head>

<body class="h-full antialiased selection:bg-indigo-600/10 selection:text-indigo-600 flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">

    <div class="max-w-4xl w-full bg-white border border-slate-200/60 rounded-3xl overflow-hidden shadow-[0_20px_50px_rgba(0,0,0,0.03)] flex flex-col lg:flex-row transition-all duration-300 hover:shadow-[0_20px_50px_rgba(99,102,241,0.04)]">

        <div class="lg:w-5/12 bg-gradient-to-tr from-indigo-600 via-purple-600 to-indigo-800 p-8 text-white flex flex-col justify-between relative overflow-hidden hidden lg:flex shrink-0">
      
            <div class="absolute -right-10 -bottom-10 w-40 h-40 bg-emerald-400/20 rounded-full blur-2xl"></div>
            <div class="absolute -left-10 top-10 w-32 h-32 bg-white/10 rounded-full blur-xl"></div>
            
         
            <div class="flex items-center gap-3 relative z-10">
                <div class="bg-white/10 backdrop-blur-md text-white font-extrabold text-xs px-3 py-2 rounded-xl border border-white/10 tracking-tight">
                    <a href="{{ route('/')}}">LU</a>
                </div>
                <span class="text-sm font-extrabold tracking-tight">LinkUp</span>
            </div>

           
            <div class="space-y-4 relative z-10 my-auto">
                <h2 class="text-2xl font-extrabold tracking-tight leading-tight">Rejoignez la commu' tech la plus sélective.</h2>
                <p class="text-indigo-100/80 text-xs leading-relaxed font-medium">Développez votre réseau, partagez vos idées sans friction, et propulsez votre carrière avec style.</p>
            </div>

            <!-- Footer مينيملست -->
            <p class="text-[10px] text-indigo-200/50 font-medium relative z-10">© 2026 LinkUp Inc. Design Épuré.</p>
        </div>

        <!-- FORM RIGHT SIDE: الحقول واللوجيك الأصلي مغلفين بديزاين فخم -->
        <div class="w-full lg:w-7/12 p-8 sm:p-10 flex flex-col justify-center bg-white">
            
            <!-- الرأس -->
            <div class="space-y-2 mb-6">
                <h3 class="text-xl font-extrabold text-slate-900 tracking-tight">Créer un compte !</h3>
                <p class="text-xs text-slate-400 font-medium">Commencez dès aujourd'hui en quelques clics.</p>
            </div>

          
            @if($errors->any())
            <div class="mb-4 bg-rose-50 border border-rose-100 p-4 rounded-xl space-y-1">
                @foreach ($errors->all() as $error )
                <div class="flex items-center gap-2 text-rose-600 text-xs font-semibold">
                    <i class="fa-solid fa-circle-exclamation text-[10px]"></i>
                    <p>{{ $error }}</p>
                </div>
                @endforeach
            </div>
            @endif

         
            <form method="POST" action="{{ route('register') }}" class="space-y-4">
                @csrf
                
          
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
          
                    <div class="space-y-1.5">
                        <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider" for="Name">
                            Full Name
                        </label>
                        <div class="relative group/input">
                            <input
                                class="w-full px-3.5 py-2.5 text-xs font-semibold text-slate-800 bg-slate-50/80 border border-slate-200 rounded-xl focus:outline-none focus:bg-white focus:border-indigo-500 focus:ring-4 focus:ring-indigo-500/5 transition-all placeholder-slate-400"
                                id="Name"
                                name="name"
                                type="text"
                                placeholder="John Doe" />
                        </div>
                    </div>

             
                    <div class="space-y-1.5">
                        <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider" for="lastName">
                            HeadLine
                        </label>
                        <div class="relative group/input">
                            <input
                                class="w-full px-3.5 py-2.5 text-xs font-semibold text-slate-800 bg-slate-50/80 border border-slate-200 rounded-xl focus:outline-none focus:bg-white focus:border-indigo-500 focus:ring-4 focus:ring-indigo-500/5 transition-all placeholder-slate-400"
                                id="lastName"
                                name="headline"
                                type="text"
                                placeholder="Full-Stack Developer" />
                        </div>
                    </div>
                </div>

             
                <div class="space-y-1.5">
                    <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider" for="email">
                        Email
                    </label>
                    <div class="relative group/input">
                        <input
                            class="w-full px-3.5 py-2.5 text-xs font-semibold text-slate-800 bg-slate-50/80 border border-slate-200 rounded-xl focus:outline-none focus:bg-white focus:border-indigo-500 focus:ring-4 focus:ring-indigo-500/5 transition-all placeholder-slate-400"
                            id="email"
                            name="email"
                            type="type"
                            placeholder="name@company.com" />
                    </div>
                </div>

            
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
 
                    <div class="space-y-1.5">
                        <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider" for="password">
                            Password
                        </label>
                        <input
                            class="w-full px-3.5 py-2.5 text-xs font-semibold text-slate-800 bg-slate-50/80 border border-rose-200 rounded-xl focus:outline-none focus:bg-white focus:border-rose-500 focus:ring-4 focus:ring-rose-500/5 transition-all placeholder-slate-400"
                            id="password"
                            name="password"
                            type="password"
                            placeholder="••••••••••••" />
                        <p class="text-[10px] font-semibold text-rose-500 flex items-center gap-1">
                            <i class="fa-solid fa-info-circle"></i> Please choose a password.
                        </p>
                    </div>

             
                    <div class="space-y-1.5">
                        <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider" for="c_password">
                            Confirm Password
                        </label>
                        <input
                            class="w-full px-3.5 py-2.5 text-xs font-semibold text-slate-800 bg-slate-50/80 border border-slate-200 rounded-xl focus:outline-none focus:bg-white focus:border-indigo-500 focus:ring-4 focus:ring-indigo-500/5 transition-all placeholder-slate-400"
                            id="c_password"
                            name="password_confirmation"
                            type="password"
                            placeholder="••••••••••••" />
                    </div>
                </div>

                <div class="pt-2">
                    <button class="w-full bg-gradient-to-r from-indigo-600 via-purple-600 to-indigo-700 hover:opacity-95 text-white font-bold text-xs px-4 py-3 rounded-xl transition-all shadow-md shadow-indigo-200/40 cursor-pointer hover:scale-[1.01] active:scale-[0.99] flex items-center justify-center gap-2"
                        type="submit">
                        <i class="fa-solid fa-user-plus text-[10px]"></i> Register Account
                    </button>
                </div>

                <div class="border-t border-slate-100 pt-4 flex flex-col items-center gap-2 text-[11px] font-bold">
                    <a class="text-slate-400 hover:text-indigo-600 transition-colors" href="#">
                        Forgot Password?
                    </a>
                    <a class="text-indigo-600 hover:text-indigo-800 transition-colors" href="./index.html">
                        Already have an account? Login!
                    </a>
                </div>
            </form>
        </div>
    </div>

</body>

</html>