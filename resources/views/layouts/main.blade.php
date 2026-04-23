<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Faridpur Engineering College Library</title>
    <!-- <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script> -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    @vite('resources/css/app.css')
    <!-- <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary1": "#137fec",
                        "background-light": "#f6f7f8",
                        "background-dark": "#101922",
                    },
                    fontFamily: {
                        "display": ["Inter", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script> -->
    <style>
        body {
            min-height: max(884px, 100dvh);
        }

        html {
            scroll-behavior: smooth;
        }
    </style>
</head>

<body class="font-display bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100">
    <!-- TopAppBar & Navbar -->
    <header class="bg-white dark:bg-slate-900 border-b border-slate-200 dark:border-slate-800 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="flex items-center justify-between h-20">
                <div class="flex items-center gap-4">
                    <div class="size-12 bg-primary1 rounded-full flex items-center justify-center text-white">
                        <span class="material-symbols-outlined text-3xl">school</span>
                    </div>
                    <div class="flex flex-col">
                        <h1
                            class="text-xl font-bold leading-none text-slate-900 dark:text-white uppercase tracking-tight">
                            FEC Library</h1>
                        <p class="text-[10px] text-slate-500 font-medium tracking-widest uppercase mt-1">Faridpur
                            Engineering College</p>
                    </div>
                </div>
                @if (request()->routeIs('home'))
                <nav class="hidden lg:flex items-center gap-1">
                    <a class="px-4 py-2 text-sm font-semibold text-primary1 border-b-2 border-primary1" href="#home">Home</a>
                    <a class="px-4 py-2 text-sm font-semibold text-slate-600 dark:text-slate-400 hover:text-primary1 transition-colors"
                        href="#about">About Library</a>
                    <a class="px-4 py-2 text-sm font-semibold text-slate-600 dark:text-slate-400 hover:text-primary1 transition-colors"
                        href="#featured-books">Book Catalog</a>
                    <a class="px-4 py-2 text-sm font-semibold text-slate-600 dark:text-slate-400 hover:text-primary1 transition-colors"
                        href="#notices">Notices</a>
                    <a class="px-4 py-2 text-sm font-semibold text-slate-600 dark:text-slate-400 hover:text-primary1 transition-colors"
                        href="#contact">Contact</a>
                </nav>
                @endif
                <div class="flex items-center gap-3">
                    <a href="{{ route('login') }}"
                        class="flex items-center gap-2 px-5 py-2.5 bg-primary1 text-white rounded-lg text-sm font-bold shadow-lg shadow-primary1/20 hover:bg-primary1/90 transition-all">
                        <span class="material-symbols-outlined text-lg">login</span>
                        <span>Login</span>
                    </a>
                    <button class="lg:hidden p-2 text-slate-600">
                        <span class="material-symbols-outlined">menu</span>
                    </button>
                </div>
            </div>
        </div>
    </header>

    @yield('content')

    <!-- Footer -->
    <footer class="bg-slate-900 text-slate-400 pt-20 pb-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">
                <div>
                    <div class="flex items-center gap-3 mb-6">
                        <div class="size-10 bg-primary1 rounded-lg flex items-center justify-center text-white">
                            <span class="material-symbols-outlined">school</span>
                        </div>
                        <h2 class="text-xl font-bold text-white uppercase tracking-tighter">FEC Library</h2>
                    </div>
                    <p class="text-sm leading-relaxed mb-6">
                        Providing the highest quality engineering resources to the next generation of engineers and
                        researchers at Faridpur Engineering College.
                    </p>
                    <div class="flex gap-4">
                        <a class="size-10 bg-slate-800 rounded-lg flex items-center justify-center hover:bg-primary1 hover:text-white transition-all"
                            href="#"><span class="material-symbols-outlined">social_leaderboard</span></a>
                        <a class="size-10 bg-slate-800 rounded-lg flex items-center justify-center hover:bg-primary1 hover:text-white transition-all"
                            href="#"><span class="material-symbols-outlined">share</span></a>
                        <a class="size-10 bg-slate-800 rounded-lg flex items-center justify-center hover:bg-primary1 hover:text-white transition-all"
                            href="#"><span class="material-symbols-outlined">mail</span></a>
                    </div>
                </div>
                <div>
                    <h4 class="text-white font-bold mb-6 uppercase tracking-widest text-sm">Quick Links</h4>
                    <ul class="space-y-4 text-sm">
                        <li><a class="hover:text-primary1 transition-colors" href="#">Digital Repository</a></li>
                        <li><a class="hover:text-primary1 transition-colors" href="#">Research Guides</a></li>
                        <li><a class="hover:text-primary1 transition-colors" href="#">Library Rules</a></li>
                        <li><a class="hover:text-primary1 transition-colors" href="#">Student Login</a></li>
                        <li><a class="hover:text-primary1 transition-colors" href="#">Faculty Support</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white font-bold mb-6 uppercase tracking-widest text-sm">Contact Us</h4>
                    <ul class="space-y-4 text-sm">
                        <li class="flex gap-3">
                            <span class="material-symbols-outlined text-primary1 text-lg">location_on</span>
                            <span>Faridpur Engineering College,<br />Faridpur-7800, Bangladesh</span>
                        </li>
                        <li class="flex gap-3">
                            <span class="material-symbols-outlined text-primary1 text-lg">call</span>
                            <span>+880 1234 567 890</span>
                        </li>
                        <li class="flex gap-3">
                            <span class="material-symbols-outlined text-primary1 text-lg">alternate_email</span>
                            <span>library@fec.ac.bd</span>
                        </li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white font-bold mb-6 uppercase tracking-widest text-sm">Library Map</h4>
                    <div
                        class="w-full h-32 bg-slate-800 rounded-xl overflow-hidden grayscale contrast-125 opacity-50 hover:opacity-100 transition-opacity cursor-pointer">
                        <div class="w-full h-full bg-cover bg-center"
                            data-alt="Map location of Faridpur Engineering College" data-location="Faridpur, Bangladesh"
                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCfjstOJgiMAXpxAHc1m8MJ6RCKLBeTO8Gr5Zj9D569htDyAx3yuYJl5jbh2P0JWdCGtpDMGKM5ikRCneog3RDFAv1vikgtA4tn3iRn2Ak4NZ0pQzh2bhuk8FpdOEzUfN9FIVedHeUZ7jwc7W5OWygFBzbrFJQsGC7vWPc2zFN8L1yLuEVKeT5iLuXyXJHt19X8NDam89rWp6e5CYDnza6_XiW7seT5fJEGTpO1av_syzEBwwhDpNJ71IO2AFInycqqg--9V-3mN0A");'>
                        </div>
                    </div>
                    <p class="text-[10px] uppercase mt-2 font-bold tracking-widest">Floor 2, Academic Building B</p>
                </div>
            </div>
            <div class="border-t border-slate-800 pt-8 flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-xs">© 2023 Faridpur Engineering College Library. All Rights Reserved.</p>
                <div class="flex gap-6 text-xs font-bold uppercase tracking-widest">
                    <a class="hover:text-white transition-colors" href="#">Privacy Policy</a>
                    <a class="hover:text-white transition-colors" href="#">Terms of Use</a>
                    <a class="hover:text-white transition-colors" href="#">Cookies</a>
                </div>
            </div>
        </div>
    </footer>
    @vite('resources/js/app.js')
    @stack('scripts')
    <script>

    </script>
</body>

</html>