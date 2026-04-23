@extends('layouts.main')

@section('content')
    <!-- Hero Section primary1 -->
    <section class="relative bg-slate-900 overflow-hidden" id="home">
        <div class="absolute inset-0 opacity-40">
            <div class="w-full h-full bg-cover bg-center"
                data-alt="Modern university library interior with bookshelves and study tables"
                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuA1Che1uQb1eppDXskZx_JafQwJWv9946uNeYhOUppHXg3taUfYwvp1LbChmUnCOp50TMWIZO7Rcn4Ecfx79GfacNHtzzGp-UHeEPpZ1DvFiZ72o2WXhL2cltZFSZ6JXX-Bb3nCr-4F7uffvhTfZj9Kbopdhal13r8bHnzytY02Tf4aNhO1fIdtGE1-BubnJz9mXq3cCow-G9RZCPChn43aWSLSKJZL33Il8kAE-4v4ozk53uvln-yuP9iV6UrSVQttz6uxfej4dcU");'>
            </div>
            <div class="absolute inset-0 bg-gradient-to-r from-slate-900 via-slate-900/80 to-transparent"></div>
        </div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 py-24 lg:py-40">
            <div class="max-w-2xl">
                <span
                    class="inline-block px-4 py-1.5 mb-6 text-xs font-bold tracking-widest text-primary1 uppercase bg-primary1/10 border border-primary1/20 rounded-full">Academic
                    Excellence</span>
                <h2 class="text-4xl md:text-6xl font-black text-white leading-tight mb-6">
                    Welcome to Faridpur Engineering College Library
                </h2>
                <p class="text-lg md:text-xl text-slate-300 mb-10 leading-relaxed font-light">
                    A modern digital library system designed to empower students, teachers, and researchers with
                    state-of-the-art academic resources.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <button
                        class="flex items-center justify-center gap-2 px-8 py-4 bg-primary1 text-white rounded-xl text-base font-bold transition-all hover:scale-105">
                        <span class="material-symbols-outlined">search</span>
                        <span>Search Books</span>
                    </button>
                    <button
                        class="flex items-center justify-center gap-2 px-8 py-4 bg-white/10 text-white border border-white/20 rounded-xl text-base font-bold backdrop-blur-sm transition-all hover:bg-white/20">
                        <span class="material-symbols-outlined">cloud_download</span>
                        <span>Explore Digital Library</span>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <!-- Stats Section -->
    <section class="relative -mt-16 z-10 px-4 sm:px-6" id="stats">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6">
                <div
                    class="bg-white dark:bg-slate-800 p-6 rounded-2xl shadow-xl shadow-slate-200/50 dark:shadow-none border border-slate-100 dark:border-slate-700 flex flex-col items-center text-center">
                    <div class="size-12 bg-primary1/10 text-primary1 rounded-xl flex items-center justify-center mb-4">
                        <span class="material-symbols-outlined text-3xl">menu_book</span>
                    </div>
                    <p class="text-3xl font-black text-slate-900 dark:text-white">25,000+</p>
                    <p class="text-sm font-medium text-slate-500 uppercase tracking-wider mt-1">Total Books</p>
                </div>
                <div
                    class="bg-white dark:bg-slate-800 p-6 rounded-2xl shadow-xl shadow-slate-200/50 dark:shadow-none border border-slate-100 dark:border-slate-700 flex flex-col items-center text-center">
                    <div class="size-12 bg-green-500/10 text-green-500 rounded-xl flex items-center justify-center mb-4">
                        <span class="material-symbols-outlined text-3xl">check_circle</span>
                    </div>
                    <p class="text-3xl font-black text-slate-900 dark:text-white">18,500</p>
                    <p class="text-sm font-medium text-slate-500 uppercase tracking-wider mt-1">Available Now</p>
                </div>
                <div
                    class="bg-white dark:bg-slate-800 p-6 rounded-2xl shadow-xl shadow-slate-200/50 dark:shadow-none border border-slate-100 dark:border-slate-700 flex flex-col items-center text-center">
                    <div class="size-12 bg-blue-500/10 text-blue-500 rounded-xl flex items-center justify-center mb-4">
                        <span class="material-symbols-outlined text-3xl">group</span>
                    </div>
                    <p class="text-3xl font-black text-slate-900 dark:text-white">3,200+</p>
                    <p class="text-sm font-medium text-slate-500 uppercase tracking-wider mt-1">Registered Students</p>
                </div>
                <div
                    class="bg-white dark:bg-slate-800 p-6 rounded-2xl shadow-xl shadow-slate-200/50 dark:shadow-none border border-slate-100 dark:border-slate-700 flex flex-col items-center text-center">
                    <div class="size-12 bg-purple-500/10 text-purple-500 rounded-xl flex items-center justify-center mb-4">
                        <span class="material-symbols-outlined text-3xl">devices</span>
                    </div>
                    <p class="text-3xl font-black text-slate-900 dark:text-white">12,000+</p>
                    <p class="text-sm font-medium text-slate-500 uppercase tracking-wider mt-1">Digital Resources</p>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section -->
    <section class="py-24 max-w-7xl mx-auto px-4 sm:px-6" id="about">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div class="relative">
                <div class="aspect-square bg-slate-200 rounded-3xl overflow-hidden shadow-2xl">
                    <div class="w-full h-full bg-cover bg-center" data-alt="Close up of books on a shelf in a clean library"
                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCUP5f3H2FVZ9tC8TJb8FPrv-3A_Xmgo60L5WnnJq4DYUBWtWrIxu8TgguK4ZXYztqJyoyGRWntDlhylxbOxHHDbEbR11lcu6yPvLIxZQaF75Fka0GsN7CI_uZr9HXxVILLinBY0ScwYn0E_I89oMqV1HTccs65mVQ3iCvKimOgOkyIFmxmdjuC-RgtSnKMPGC6KfcFENQqeRuZrqIgWaTS1aCoaeV5dVKcLdCi-4PJOLHdWJkYgxdFS82Jb-7AyONCrhc8b-VigVI");'>
                    </div>
                </div>
                <div class="absolute -bottom-8 -right-8 bg-primary1 p-8 rounded-3xl hidden md:block max-w-xs shadow-xl">
                    <p class="text-white text-lg font-medium italic">"The only thing that you absolutely have to know,
                        is the location of the library."</p>
                    <p class="text-white/70 text-sm mt-4 font-bold">— Albert Einstein</p>
                </div>
            </div>
            <div>
                <h3 class="text-primary1 font-bold tracking-widest uppercase text-sm mb-4">About the Library</h3>
                <h2 class="text-3xl md:text-4xl font-black text-slate-900 dark:text-white mb-6 leading-tight">Nurturing
                    Engineering Excellence through Knowledge</h2>
                <p class="text-slate-600 dark:text-slate-400 mb-6 text-lg leading-relaxed">
                    Faridpur Engineering College Library is more than just a room full of books. It is a vibrant hub of
                    academic activity and intellectual discovery. We provide an extensive collection of engineering
                    textbooks, journals, and reference materials that cater specifically to the curricula of our diverse
                    departments.
                </p>
                <div class="space-y-4 mb-8">
                    <div class="flex items-start gap-4">
                        <span class="material-symbols-outlined text-primary1 mt-1">verified</span>
                        <p class="text-slate-700 dark:text-slate-300 font-medium">Quiet, climate-controlled study
                            environments for deep focus.</p>
                    </div>
                    <div class="flex items-start gap-4">
                        <span class="material-symbols-outlined text-primary1 mt-1">verified</span>
                        <p class="text-slate-700 dark:text-slate-300 font-medium">High-speed Wi-Fi and dedicated
                            computer labs for digital research.</p>
                    </div>
                    <div class="flex items-start gap-4">
                        <span class="material-symbols-outlined text-primary1 mt-1">verified</span>
                        <p class="text-slate-700 dark:text-slate-300 font-medium">Professional librarian assistance
                            available during all opening hours.</p>
                    </div>
                </div>
                <button
                    class="px-8 py-3 border-2 border-primary1 text-primary1 font-bold rounded-lg hover:bg-primary1 hover:text-white transition-all">
                    Read Our History
                </button>
            </div>
        </div>
    </section>
    <!-- Services Section -->
    <section class="bg-slate-100 dark:bg-slate-800/50 py-24" id="services">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-black text-slate-900 dark:text-white mb-4">Our Services</h2>
                <p class="text-slate-500 max-w-2xl mx-auto">Comprehensive facilities designed to support your academic
                    journey from first year to graduation.</p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service Card -->
                <div
                    class="bg-white dark:bg-slate-800 p-8 rounded-2xl shadow-sm border border-slate-200 dark:border-slate-700 hover:shadow-xl transition-all group">
                    <div
                        class="size-14 bg-primary1/10 text-primary1 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-primary1 group-hover:text-white transition-colors">
                        <span class="material-symbols-outlined text-3xl">auto_stories</span>
                    </div>
                    <h3 class="text-xl font-bold mb-3 dark:text-white">Book Borrowing</h3>
                    <p class="text-slate-500 dark:text-slate-400">Easy automated borrowing and renewal process for
                        students and faculty members.</p>
                </div>
                <div
                    class="bg-white dark:bg-slate-800 p-8 rounded-2xl shadow-sm border border-slate-200 dark:border-slate-700 hover:shadow-xl transition-all group">
                    <div
                        class="size-14 bg-primary1/10 text-primary1 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-primary1 group-hover:text-white transition-colors">
                        <span class="material-symbols-outlined text-3xl">cloud_queue</span>
                    </div>
                    <h3 class="text-xl font-bold mb-3 dark:text-white">Digital Access</h3>
                    <p class="text-slate-500 dark:text-slate-400">Access thousands of IEEE journals, e-books, and
                        research papers from anywhere.</p>
                </div>
                <div
                    class="bg-white dark:bg-slate-800 p-8 rounded-2xl shadow-sm border border-slate-200 dark:border-slate-700 hover:shadow-xl transition-all group">
                    <div
                        class="size-14 bg-primary1/10 text-primary1 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-primary1 group-hover:text-white transition-colors">
                        <span class="material-symbols-outlined text-3xl">science</span>
                    </div>
                    <h3 class="text-xl font-bold mb-3 dark:text-white">Research Support</h3>
                    <p class="text-slate-500 dark:text-slate-400">Specialized help for final year projects, thesis
                        writing, and literature reviews.</p>
                </div>
                <div
                    class="bg-white dark:bg-slate-800 p-8 rounded-2xl shadow-sm border border-slate-200 dark:border-slate-700 hover:shadow-xl transition-all group">
                    <div
                        class="size-14 bg-primary1/10 text-primary1 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-primary1 group-hover:text-white transition-colors">
                        <span class="material-symbols-outlined text-3xl">chair_alt</span>
                    </div>
                    <h3 class="text-xl font-bold mb-3 dark:text-white">Quiet Zones</h3>
                    <p class="text-slate-500 dark:text-slate-400">Designated silent areas and individual carrels for
                        undisturbed study sessions.</p>
                </div>
                <div
                    class="bg-white dark:bg-slate-800 p-8 rounded-2xl shadow-sm border border-slate-200 dark:border-slate-700 hover:shadow-xl transition-all group">
                    <div
                        class="size-14 bg-primary1/10 text-primary1 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-primary1 group-hover:text-white transition-colors">
                        <span class="material-symbols-outlined text-3xl">support_agent</span>
                    </div>
                    <h3 class="text-xl font-bold mb-3 dark:text-white">Expert Assistance</h3>
                    <p class="text-slate-500 dark:text-slate-400">On-demand support for navigating catalog systems and
                        locating resources.</p>
                </div>
                <div
                    class="bg-white dark:bg-slate-800 p-8 rounded-2xl shadow-sm border border-slate-200 dark:border-slate-700 hover:shadow-xl transition-all group">
                    <div
                        class="size-14 bg-primary1/10 text-primary1 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-primary1 group-hover:text-white transition-colors">
                        <span class="material-symbols-outlined text-3xl">search_insights</span>
                    </div>
                    <h3 class="text-xl font-bold mb-3 dark:text-white">Online Catalog</h3>
                    <p class="text-slate-500 dark:text-slate-400">Search and reserve books from your mobile device or
                        hostel room.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Featured Books Section -->
    <section class="py-24 max-w-7xl mx-auto px-4 sm:px-6" id="featured-books">
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-12">
            <div>
                <h2 class="text-3xl md:text-4xl font-black text-slate-900 dark:text-white mb-4">Featured New Arrivals
                </h2>
                <p class="text-slate-500">The latest engineering titles added to our collection this month.</p>
            </div>
            <a class="text-primary1 font-bold flex items-center gap-2 mt-4 md:mt-0 group" href="#">
                View Full Catalog
                <span class="material-symbols-outlined group-hover:translate-x-1 transition-transform">arrow_forward</span>
            </a>
        </div>
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Book Card -->
            <div class="flex flex-col">
                <div class="aspect-[3/4] bg-slate-100 dark:bg-slate-800 rounded-xl mb-4 overflow-hidden shadow-md group">
                    <div class="w-full h-full bg-cover bg-center group-hover:scale-110 transition-transform duration-500"
                        data-alt="Cover of an electrical engineering textbook"
                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDorbF9ZlILtnkFvmuQWwgkUyrNh21yTrSCEmTh_pGBHS30UwboSwTlEhzS-tmQF27qlEDybSudziC5driQPbOS8NgOCNCSBlk2RrQaoeKJtg-LoDG1MpYD6GzdhN8sAb2L85fDx9pcn6wGdKxx8TlZGEB50qCzae9BBMtpoDR6Ezr8HJjsjs5QASGQ4mzLJfzzmY8YTizo3aU8IP8S5MEgXVbvOj3z8GxQ8m035WpBKNDHMlZRXx1CUpcB7m7LKZ0Nw0_pNxkZDWo");'>
                    </div>
                </div>
                <span class="text-[10px] font-bold text-primary1 uppercase tracking-widest mb-1">Electrical</span>
                <h4 class="font-bold text-slate-900 dark:text-white line-clamp-2">Principles of Electric Circuits</h4>
                <p class="text-sm text-slate-500 mt-1">Thomas L. Floyd</p>
            </div>
            <div class="flex flex-col">
                <div class="aspect-[3/4] bg-slate-100 dark:bg-slate-800 rounded-xl mb-4 overflow-hidden shadow-md group">
                    <div class="w-full h-full bg-cover bg-center group-hover:scale-110 transition-transform duration-500"
                        data-alt="Cover of a civil engineering textbook"
                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDEswa-R0ipi2efe4O7GRQzdxE9aPvZbq6WPvkN7qKQ0GGbSRRgW7h8lz_q9KOY5uZERFkIxnYhvaC-1GA91OTb6HENbh-BBhEkFEgLXVmohjvVAHRSOq9kEk4rFfFZjl29FJ3J1OGm3n7iFpGQ8RJxpUyrV8CQc0eXl1fw8FZmd6HO-aMfFZnwIXmPqzs3HRw9rIWphCrXlWUSS9b7Y19M-mK-PxUIpOeZoJKOg13ky77xd1Kk8usfXIdIyF8FfdNTv1sr7frvw_M");'>
                    </div>
                </div>
                <span class="text-[10px] font-bold text-primary1 uppercase tracking-widest mb-1">Civil</span>
                <h4 class="font-bold text-slate-900 dark:text-white line-clamp-2">Structural Analysis (10th Ed)</h4>
                <p class="text-sm text-slate-500 mt-1">Russell C. Hibbeler</p>
            </div>
            <div class="flex flex-col">
                <div class="aspect-[3/4] bg-slate-100 dark:bg-slate-800 rounded-xl mb-4 overflow-hidden shadow-md group">
                    <div class="w-full h-full bg-cover bg-center group-hover:scale-110 transition-transform duration-500"
                        data-alt="Cover of a computer science textbook"
                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAmOJAy4avtNKM9TRM8VkGYgVPGOyYeHxL1OFJV0xDdU1P8wAYfJ00_uIZ2UA0rh3FNG44fDSBZAbkIsXOSmHEUzGUUkxlttoC5sbhhtRi3iCIzqt9x_5gzn5meiHELzcaAxp5sJunmgMFmvm-w829BVn2AkJvWrGwCcQY4FjB4NPFEnW3nkv-2bcgho8g53_aCzDJyu2J5cB_DuuRpMgwpenODJIAqbE91DhCJskpQUOY_JDP_dfMEHlAUPwBfNRSLDocbfQxKBao");'>
                    </div>
                </div>
                <span class="text-[10px] font-bold text-primary1 uppercase tracking-widest mb-1">Computer Science</span>
                <h4 class="font-bold text-slate-900 dark:text-white line-clamp-2">Algorithms Unlocked</h4>
                <p class="text-sm text-slate-500 mt-1">Thomas H. Cormen</p>
            </div>
            <div class="flex flex-col">
                <div class="aspect-[3/4] bg-slate-100 dark:bg-slate-800 rounded-xl mb-4 overflow-hidden shadow-md group">
                    <div class="w-full h-full bg-cover bg-center group-hover:scale-110 transition-transform duration-500"
                        data-alt="Cover of a physics textbook"
                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCTg3CiZ5eGG-Xc9oFURppSFVBR1ocAdUCeHhb88Hkd3XNfJj46AzXJX_giJsaYSkNChZLPPcEy_ri0oczSigicx6WpftbgtuTofeH5I4Oa3yuY2qv4pEsECXvxkAglKz30Lx2LfYNEJHv7q6A_qqCm1TuAdxa0hd1GyH8Px2LdYhb811oINNttEZHE4vXJkvPpZ6ESIUv7zFF8ZKhy_kL1M6EQAcPhxKJIZ6Tfv-2ZbiPuEkUqMHQUkAWjs4o9Y1cWVHG6Sugod4Q");'>
                    </div>
                </div>
                <span class="text-[10px] font-bold text-primary1 uppercase tracking-widest mb-1">General Science</span>
                <h4 class="font-bold text-slate-900 dark:text-white line-clamp-2">University Physics with Modern Physics
                </h4>
                <p class="text-sm text-slate-500 mt-1">Young &amp; Freedman</p>
            </div>
        </div>
    </section>
    <!-- Notices & Hours Section -->
    <section class="bg-white dark:bg-slate-900 py-24" id="notices">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="grid lg:grid-cols-3 gap-12">
                <!-- Notice Board -->
                <div class="lg:col-span-2">
                    <div class="flex items-center gap-3 mb-8">
                        <span class="material-symbols-outlined text-primary1 text-3xl">campaign</span>
                        <h2 class="text-2xl font-black text-slate-900 dark:text-white uppercase tracking-tight">Library
                            Notice Board</h2>
                    </div>
                    <div class="space-y-4">
                        <!-- Notice Item -->
                        <div
                            class="p-6 bg-slate-50 dark:bg-slate-800/50 rounded-xl border-l-4 border-primary1 group cursor-pointer hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors">
                            <div class="flex justify-between items-start mb-2">
                                <h4
                                    class="font-bold text-slate-900 dark:text-white group-hover:text-primary1 transition-colors">
                                    Late Fee Waiver Policy Update</h4>
                                <span class="text-xs font-bold text-slate-400">Oct 24, 2023</span>
                            </div>
                            <p class="text-sm text-slate-600 dark:text-slate-400">All students are notified that the
                                late fee for overdue books will be waived for the upcoming exam week...</p>
                        </div>
                        <div
                            class="p-6 bg-slate-50 dark:bg-slate-800/50 rounded-xl border-l-4 border-primary1 group cursor-pointer hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors">
                            <div class="flex justify-between items-start mb-2">
                                <h4
                                    class="font-bold text-slate-900 dark:text-white group-hover:text-primary1 transition-colors">
                                    New IEEE Xplore Access Credentials</h4>
                                <span class="text-xs font-bold text-slate-400">Oct 20, 2023</span>
                            </div>
                            <p class="text-sm text-slate-600 dark:text-slate-400">Access to IEEE Xplore digital library
                                has been renewed. Collect your department-specific login credentials from...</p>
                        </div>
                        <div
                            class="p-6 bg-slate-50 dark:bg-slate-800/50 rounded-xl border-l-4 border-primary1 group cursor-pointer hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors">
                            <div class="flex justify-between items-start mb-2">
                                <h4
                                    class="font-bold text-slate-900 dark:text-white group-hover:text-primary1 transition-colors">
                                    Library Maintenance Closure Notice</h4>
                                <span class="text-xs font-bold text-slate-400">Oct 15, 2023</span>
                            </div>
                            <p class="text-sm text-slate-600 dark:text-slate-400">The library will remain closed on
                                Saturday for annual inventory check and digital system maintenance...</p>
                        </div>
                    </div>
                    <button class="mt-8 text-sm font-bold text-primary1 flex items-center gap-1">
                        Read All Notices <span class="material-symbols-outlined text-sm">keyboard_double_arrow_right</span>
                    </button>
                </div>
                <!-- Opening Hours -->
                <div>
                    <div class="flex items-center gap-3 mb-8">
                        <span class="material-symbols-outlined text-primary1 text-3xl">schedule</span>
                        <h2 class="text-2xl font-black text-slate-900 dark:text-white uppercase tracking-tight">Opening
                            Hours</h2>
                    </div>
                    <div class="bg-primary1/5 dark:bg-slate-800 p-8 rounded-3xl border border-primary1/10">
                        <ul class="space-y-4">
                            <li
                                class="flex justify-between items-center pb-4 border-b border-slate-200 dark:border-slate-700">
                                <span class="font-semibold dark:text-slate-300">Sunday - Thursday</span>
                                <span class="text-primary1 font-bold">8:00 AM - 8:00 PM</span>
                            </li>
                            <li
                                class="flex justify-between items-center pb-4 border-b border-slate-200 dark:border-slate-700">
                                <span class="font-semibold dark:text-slate-300">Saturday</span>
                                <span class="text-primary1 font-bold">9:00 AM - 4:00 PM</span>
                            </li>
                            <li class="flex justify-between items-center pb-4">
                                <span class="font-semibold text-slate-400">Friday</span>
                                <span class="text-red-500 font-bold uppercase tracking-widest text-xs">Closed</span>
                            </li>
                        </ul>
                        <div class="mt-8 p-4 bg-white dark:bg-slate-700 rounded-xl shadow-sm text-center">
                            <p class="text-xs font-bold text-slate-500 uppercase mb-1">Current Status</p>
                            <p class="text-green-500 font-black flex items-center justify-center gap-2">
                                <span class="relative flex h-3 w-3">
                                    <span
                                        class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                                    <span class="relative inline-flex rounded-full h-3 w-3 bg-green-500"></span>
                                </span>
                                Open Now
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call to Action -->
    <section class="py-16 px-4" id="contact">
        <div class="max-w-7xl mx-auto">
            <div
                class="bg-primary1 rounded-[2rem] p-8 md:p-16 text-center text-white relative overflow-hidden shadow-2xl shadow-primary1/30">
                <div class="absolute top-0 right-0 p-8 opacity-10">
                    <span class="material-symbols-outlined text-[150px]">library_books</span>
                </div>
                <h2 class="text-3xl md:text-4xl font-black mb-6 relative z-10">Start Your Discovery Today</h2>
                <p class="text-primary1-100 text-lg md:text-xl max-w-2xl mx-auto mb-10 relative z-10 opacity-90">
                    Search the library catalog and discover thousands of books and academic resources available at your
                    fingertips.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center relative z-10">
                    <button
                        class="px-10 py-4 bg-white text-primary1 font-black rounded-xl hover:bg-slate-100 transition-all shadow-xl">
                        Search Library Catalog
                    </button>
                    <button
                        class="px-10 py-4 bg-primary1/20 border border-white/30 text-white font-black rounded-xl backdrop-blur-sm hover:bg-primary1/30 transition-all">
                        Register as Member
                    </button>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
@push('scripts')
<script>
function updateActiveHash() {
  const currentHash = window.location.hash;
  document.querySelectorAll('nav a').forEach(link => {
    link.classList.toggle('active', link.getAttribute('href') === currentHash);
  });
}

window.addEventListener('hashchange', updateActiveHash);
window.addEventListener('load', updateActiveHash);

</script>
@endpush

