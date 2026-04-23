@extends('layouts.app')

@section('content')
    <main class="ml-[280px] pt-16 min-h-screen p-container-padding">
        <!-- Filter Bar -->
        <div
            class="flex flex-wrap items-center justify-between mb-8 gap-4 bg-white p-4 rounded-xl shadow-[0px_1px_3px_rgba(0,0,0,0.1)]">
            <div class="flex flex-wrap items-center gap-3">
                <div class="flex flex-col gap-1">
                    <label class="font-label-sm text-label-sm text-on-surface-variant">Category</label>
                    <select
                        class="border-outline-variant rounded-lg text-body-md font-body-md py-1.5 focus:border-primary focus:ring-primary min-w-[160px]">
                        <option>All Categories</option>
                        <option>Technology</option>
                        <option>Science</option>
                        <option>History</option>
                        <option>Mathematics</option>
                    </select>
                </div>
                <div class="flex flex-col gap-1">
                    <label class="font-label-sm text-label-sm text-on-surface-variant">Author</label>
                    <select
                        class="border-outline-variant rounded-lg text-body-md font-body-md py-1.5 focus:border-primary focus:ring-primary min-w-[160px]">
                        <option>All Authors</option>
                        <option>J.K. Rowling</option>
                        <option>Isaac Asimov</option>
                        <option>Carl Sagan</option>
                    </select>
                </div>
                <div class="flex items-end h-full mt-5">
                    <button
                        class="flex items-center gap-2 px-4 py-2 text-primary font-button text-button hover:bg-primary/5 rounded-lg transition-colors">
                        <span class="material-symbols-outlined text-lg" data-icon="filter_list">filter_list</span>
                        More Filters
                    </button>
                </div>
            </div>
            <div class="flex gap-3">
                <div class="flex items-end flex-col justify-center">
                    <button
                        class="flex items-center gap-2 px-4 py-2 bg-primary text-white font-button text-button hover:bg-primary/5 hover:text-black rounded-lg transition-colors">
                        <span class="material-symbols-outlined text-lg" data-icon="add">add</span>
                        Add Book
                    </button>
                </div>
            <div class="flex bg-surface-container rounded-lg p-1">
                <button class="p-1.5 bg-white shadow-sm rounded-md text-primary">
                    <span class="material-symbols-outlined" data-icon="grid_view">grid_view</span>
                </button>
                <button class="p-1.5 text-on-surface-variant hover:text-primary transition-colors">
                    <span class="material-symbols-outlined" data-icon="view_list">view_list</span>
                </button>
            </div>
            </div>
        </div>
        <!-- Books Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-card-gap">
            <!-- Book Card 1 -->
            <div
                class="group bg-white rounded-xl overflow-hidden shadow-[0px_1px_3px_rgba(0,0,0,0.1)] border border-gray-100 hover:shadow-[0px_10px_15px_-3px_rgba(0,0,0,0.1)] transition-all duration-300">
                <div class="relative h-64 overflow-hidden">
                    <img alt="Book Cover"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                        data-alt="front cover of a modern blue book with minimalist white typography on a clean studio background with soft shadows"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuBsKNbXq0bNZZVvVqLnvo1r6Lott_DDrXUFOnGv2iIn3qYnympMYngMXNyKSrYNsC3xfc9nVpaH4_OYjah0vCk18Ig9XoGb6TqyHjdgNiw3c5URWVxLYxaU7YaAgCEw6L5HHpZeasV47HPLWOl3ISedapUMbAflR6SYtCrOgeNZ_V2cX0yk9SK-6WqEPK3MMbPxufpWualMKchJZikj1lU-r3t8uO6SMFa5d7AGag6IL6jvDXSw0NzO9MD9Dm9QUqh3Jj-CrVN94mk" />
                    <div class="absolute top-3 left-3">
                        <span
                            class="px-2 py-1 bg-green-100 text-green-700 text-[10px] font-bold uppercase rounded tracking-wider">Available</span>
                    </div>
                </div>
                <div class="p-4">
                    <p class="font-label-sm text-label-sm text-outline mb-1">ID: #LB-4921</p>
                    <h3 class="font-h3 text-h3 text-on-surface line-clamp-1 mb-1">Architecture of Tomorrow</h3>
                    <p class="font-body-md text-body-md text-on-surface-variant mb-3">David A. Miller</p>
                    <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                        <div class="flex flex-col">
                            <span class="text-[10px] font-bold uppercase text-outline">Category</span>
                            <span class="text-xs font-semibold text-secondary">Technology</span>
                        </div>
                        <div class="text-right">
                            <span class="text-[10px] font-bold uppercase text-outline">Stock</span>
                            <span class="block text-sm font-bold text-on-surface">12 Copies</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Book Card 2 -->
            <div
                class="group bg-white rounded-xl overflow-hidden shadow-[0px_1px_3px_rgba(0,0,0,0.1)] border border-gray-100 hover:shadow-[0px_10px_15px_-3px_rgba(0,0,0,0.1)] transition-all duration-300">
                <div class="relative h-64 overflow-hidden">
                    <img alt="Book Cover"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                        data-alt="thick classic hardcover book lying on a dark wooden table with elegant gold leaf embossing and warm library lighting"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuBT36dPEHTbc9rsGKI2d1B9_os4j_Gqec9tj6BXKMV9OAaclXpLo3FooD0yZL0tPdZXcuNU9cpqVxFGxwl_o78rJvqS6JkdyYdnn0rXKQSjgnAP_g0V9xa5tCbtHnNMv1Dco1t75jig6zZs2PrF6QiQYteHQuYs3crP88Fq4oyEOTC-C2_UjZYPM08iSLi1vFPmkOjb_4YAvN0fXYR-PxJn46QIAYZNkMegrXjS6GrYPVn_13BmhdRnsoUr4sJLOJndTcwRNLsJ4k0" />
                    <div class="absolute top-3 left-3">
                        <span
                            class="px-2 py-1 bg-orange-100 text-orange-700 text-[10px] font-bold uppercase rounded tracking-wider">Low
                            Stock</span>
                    </div>
                </div>
                <div class="p-4">
                    <p class="font-label-sm text-label-sm text-outline mb-1">ID: #LB-8832</p>
                    <h3 class="font-h3 text-h3 text-on-surface line-clamp-1 mb-1">The Great Gatsby</h3>
                    <p class="font-body-md text-body-md text-on-surface-variant mb-3">F. Scott Fitzgerald</p>
                    <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                        <div class="flex flex-col">
                            <span class="text-[10px] font-bold uppercase text-outline">Category</span>
                            <span class="text-xs font-semibold text-secondary">Literature</span>
                        </div>
                        <div class="text-right">
                            <span class="text-[10px] font-bold uppercase text-outline">Stock</span>
                            <span class="block text-sm font-bold text-on-surface">3 Copies</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Book Card 3 -->
            <div
                class="group bg-white rounded-xl overflow-hidden shadow-[0px_1px_3px_rgba(0,0,0,0.1)] border border-gray-100 hover:shadow-[0px_10px_15px_-3px_rgba(0,0,0,0.1)] transition-all duration-300">
                <div class="relative h-64 overflow-hidden">
                    <img alt="Book Cover"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                        data-alt="open book with old yellowish pages on a rustic surface showing fine texture and depth of field blur"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuAFNXOTYzodcG_mwG-PCmCr-IvF-ivagnCWErXXg6Zhj5DLxuHvv5wd9MIUvLSLTh1k--2Pa5K4yF2PFG9kHpFd65xVrrNPsh7LmjpTBd2k9cDQndUs7ohCPonAK8GJiblI-R-VG7QpNIG0VcQdzQltSWzQgnOiYyBt0JmI6IP34_rKm6bhSZCdWORQF45cf8hQoEPKfWuHywbOfqca2brRIALuLBfzBaSIzq3bMuB_oyhWIf7q9drUg5EZbz43zD50-eJaWYY_klY" />
                    <div class="absolute top-3 left-3">
                        <span
                            class="px-2 py-1 bg-green-100 text-green-700 text-[10px] font-bold uppercase rounded tracking-wider">Available</span>
                    </div>
                </div>
                <div class="p-4">
                    <p class="font-label-sm text-label-sm text-outline mb-1">ID: #LB-3104</p>
                    <h3 class="font-h3 text-h3 text-on-surface line-clamp-1 mb-1">Histories of Time</h3>
                    <p class="font-body-md text-body-md text-on-surface-variant mb-3">Sarah J. Wellington</p>
                    <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                        <div class="flex flex-col">
                            <span class="text-[10px] font-bold uppercase text-outline">Category</span>
                            <span class="text-xs font-semibold text-secondary">History</span>
                        </div>
                        <div class="text-right">
                            <span class="text-[10px] font-bold uppercase text-outline">Stock</span>
                            <span class="block text-sm font-bold text-on-surface">24 Copies</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Book Card 4 -->
            <div
                class="group bg-white rounded-xl overflow-hidden shadow-[0px_1px_3px_rgba(0,0,0,0.1)] border border-gray-100 hover:shadow-[0px_10px_15px_-3px_rgba(0,0,0,0.1)] transition-all duration-300">
                <div class="relative h-64 overflow-hidden">
                    <img alt="Book Cover"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                        data-alt="colorful scientific textbooks stacked neatly against a white wall with bright airy lighting and minimalist aesthetic"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuAY9zhApggtyxUGJIpgW0s3QkbXfS9BLppXck4_TjkcnkOdTyUul5j4Xn61B0hROT0z-KNIcbcIHWnTBC3Rtb1Q2n-X_k76Yt88_AG2xeOJLMBDVWALqiWn6VfQ-m0I4_nD_9duUPruTSAoAW--jLdppBDAHLtM55TLS_1zxp3pM60STKnKugtZ41JozXUa3-lKoxW6q9ozJ-tp49ahXewmHJVjyd6sQhInPKttq1kPdyHTtFC9E0n8YOU61Y_iiW-oJcT6tr3ghEM" />
                    <div class="absolute top-3 left-3">
                        <span
                            class="px-2 py-1 bg-red-100 text-red-700 text-[10px] font-bold uppercase rounded tracking-wider">Out
                            of Stock</span>
                    </div>
                </div>
                <div class="p-4">
                    <p class="font-label-sm text-label-sm text-outline mb-1">ID: #LB-1277</p>
                    <h3 class="font-h3 text-h3 text-on-surface line-clamp-1 mb-1">Quantum Physics</h3>
                    <p class="font-body-md text-body-md text-on-surface-variant mb-3">Dr. Richard Feynman</p>
                    <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                        <div class="flex flex-col">
                            <span class="text-[10px] font-bold uppercase text-outline">Category</span>
                            <span class="text-xs font-semibold text-secondary">Science</span>
                        </div>
                        <div class="text-right">
                            <span class="text-[10px] font-bold uppercase text-outline">Stock</span>
                            <span class="block text-sm font-bold text-on-surface">0 Copies</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Book Card 5 -->
            <div
                class="group bg-white rounded-xl overflow-hidden shadow-[0px_1px_3px_rgba(0,0,0,0.1)] border border-gray-100 hover:shadow-[0px_10px_15px_-3px_rgba(0,0,0,0.1)] transition-all duration-300">
                <div class="relative h-64 overflow-hidden">
                    <img alt="Book Cover"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                        data-alt="bookshelf detail showing a variety of book spines with neutral colors and soft indoor light creating an academic mood"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuB1bzNvtfw-cyJFT_X8J4hwieoC26_1u11V9you9UbWWmtqK3dupPDCeErfAE7GwpJ_S6flfA13mjgiVtuV9ZH2FScHf5sgBEs9a6vCWnHwqSbKxcHycBZGJYlkjI7JnUGpXhuJqLNyWe1fMsLzeZzvSFXmOk89kgQFXw1W06KqEFtK3KoUmIz0hge4EbVH6zZ-ZRfCkIs9AvfCpBVkMZEmPzzdaWZz-x7aNUAP7v8bA3rV4HpUMac7KLFy5D761ZlAaF55GTDHC8I" />
                    <div class="absolute top-3 left-3">
                        <span
                            class="px-2 py-1 bg-green-100 text-green-700 text-[10px] font-bold uppercase rounded tracking-wider">Available</span>
                    </div>
                </div>
                <div class="p-4">
                    <p class="font-label-sm text-label-sm text-outline mb-1">ID: #LB-5512</p>
                    <h3 class="font-h3 text-h3 text-on-surface line-clamp-1 mb-1">Web Standards</h3>
                    <p class="font-body-md text-body-md text-on-surface-variant mb-3">Jeffrey Zeldman</p>
                    <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                        <div class="flex flex-col">
                            <span class="text-[10px] font-bold uppercase text-outline">Category</span>
                            <span class="text-xs font-semibold text-secondary">Technology</span>
                        </div>
                        <div class="text-right">
                            <span class="text-[10px] font-bold uppercase text-outline">Stock</span>
                            <span class="block text-sm font-bold text-on-surface">18 Copies</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Book Card 6 -->
            <div
                class="group bg-white rounded-xl overflow-hidden shadow-[0px_1px_3px_rgba(0,0,0,0.1)] border border-gray-100 hover:shadow-[0px_10px_15px_-3px_rgba(0,0,0,0.1)] transition-all duration-300">
                <div class="relative h-64 overflow-hidden">
                    <img alt="Book Cover"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                        data-alt="close up of a modern book with a vibrant red cover standing on a light grey concrete surface in bright sunlight"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuBCbSJf9T1Ee8XtG74q1aAsrZh-iovNUySsWsb4hBKzriAk4hqF94dLWlT9nYQYAZezknpK2KVwcYEueVzI4nY3eHsPKNx5pdQMcz30S-Qh2tjSL_ZGB4AUxfSVfw16UWX4895kdpyZFVPU8zMGCCW1pSHRm5ieBnI2TOppjQDLrTJ1CvGvrs-Exy8es3pDW_zZTUzCkLfjEEyLkv7ZTTj9QV91vaRpB1CGMAVcJFrPk3LO37stolaM6_Pcvlb1rCDvAGrsEjdjUdw" />
                    <div class="absolute top-3 left-3">
                        <span
                            class="px-2 py-1 bg-green-100 text-green-700 text-[10px] font-bold uppercase rounded tracking-wider">Available</span>
                    </div>
                </div>
                <div class="p-4">
                    <p class="font-label-sm text-label-sm text-outline mb-1">ID: #LB-9022</p>
                    <h3 class="font-h3 text-h3 text-on-surface line-clamp-1 mb-1">The Art of War</h3>
                    <p class="font-body-md text-body-md text-on-surface-variant mb-3">Sun Tzu</p>
                    <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                        <div class="flex flex-col">
                            <span class="text-[10px] font-bold uppercase text-outline">Category</span>
                            <span class="text-xs font-semibold text-secondary">Philosophy</span>
                        </div>
                        <div class="text-right">
                            <span class="text-[10px] font-bold uppercase text-outline">Stock</span>
                            <span class="block text-sm font-bold text-on-surface">45 Copies</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Pagination -->
        <div class="mt-8 flex items-center justify-between border-t border-gray-200 pt-6">
            <p class="text-body-md font-body-md text-on-surface-variant">Showing 1 to 6 of 1,240 books</p>
            <div class="flex gap-2">
                <button
                    class="px-4 py-2 bg-white border border-outline-variant rounded-lg text-body-md font-medium hover:bg-gray-50 transition-colors">Previous</button>
                <button
                    class="px-4 py-2 bg-primary text-on-primary rounded-lg text-body-md font-medium shadow-sm active:opacity-80 transition-all">Next</button>
            </div>
        </div>
    </main>
@endsection