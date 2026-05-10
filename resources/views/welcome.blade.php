@extends('layouts.main')

@section('content')
    <!-- ========== HERO SECTION (Blue/White theme + Register & Search) ========== -->
    <section class="relative bg-gradient-to-br from-blue-50 via-white to-indigo-50 overflow-hidden">
        <div class="absolute top-0 left-0 w-72 h-72 bg-blue-200/30 rounded-full blur-3xl -translate-x-1/2 -translate-y-1/2">
        </div>
        <div
            class="absolute bottom-0 right-0 w-80 h-80 bg-indigo-100/40 rounded-full blur-3xl translate-x-1/3 translate-y-1/3">
        </div>

        <div class="relative max-w-7xl mx-auto px-5 sm:px-8 py-16 md:py-24 lg:py-28">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Left Text + CTA + Search -->
                <div class="space-y-7 animate-fade-in">
                    <span
                        class="inline-block px-4 py-1.5 rounded-full bg-blue-100 text-blue-800 text-sm font-semibold tracking-wide shadow-sm">
                        <i class="fas fa-university mr-2"></i> Knowledge Hub
                    </span>
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold tracking-tight text-gray-900 leading-tight">
                        Welcome to <span
                            class="text-blue-700 bg-gradient-to-r from-blue-700 to-indigo-700 bg-clip-text text-transparent">Collage
                            Library</span>
                    </h1>
                    <p class="text-lg text-gray-600 max-w-xl leading-relaxed">
                        Your gateway to thousands of books, journals, and digital resources. Join our vibrant community of
                        learners and unlock unlimited knowledge.
                    </p>

                    <div class="flex flex-wrap items-center gap-5 pt-2">
                        <a href="{{ route('membership.register') }}" id="heroRegisterBtn"
                            class="inline-flex items-center justify-center px-8 py-3.5 text-base font-semibold text-white bg-blue-700 rounded-xl shadow-lg hover:bg-blue-800 transition-all duration-200 transform hover:scale-[1.02]">
                            <i class="fas fa-user-plus mr-2.5 text-lg"></i> Register for Membership
                        </a>
                        <p class="text-sm text-gray-500 flex items-center gap-1"><i class="fas fa-id-card"></i> Free &
                            instant access</p>
                    </div>

                    <!-- Search Box -->
                    <div
                        class="mt-8 max-w-xl bg-white/80 backdrop-blur-sm rounded-2xl p-1.5 shadow-md border border-blue-200">
                        <div class="relative flex items-center">
                            <i class="fas fa-search absolute left-4 text-blue-500 text-lg"></i>
                            <input type="text" id="bookSearchInput" placeholder="Search by title, author, or department..."
                                class="w-full py-3.5 pl-12 pr-24 rounded-xl border-0 bg-transparent focus:ring-2 focus:ring-blue-300 focus:outline-none text-gray-800 placeholder:text-gray-400">
                            <button id="searchButton"
                                class="absolute right-2 bg-blue-700 hover:bg-blue-800 text-white px-5 py-2 rounded-lg text-sm font-medium transition">Search</button>
                        </div>
                        <p id="searchFeedback" class="text-xs text-gray-500 px-3 pb-2 hidden"></p>
                    </div>
                    <div class="text-xs text-gray-400 flex items-center gap-2"><i class="fas fa-arrow-right"></i> Try:
                        “science”, “history”, “engineering”</div>
                </div>

                <!-- Right Illustration -->
                <div class="hidden lg:flex justify-center items-center relative">
                    <div class="relative w-80 h-80 bg-blue-100 rounded-full shadow-xl flex items-center justify-center">
                        <div class="absolute inset-0 bg-blue-200 rounded-full blur-2xl opacity-40 animate-pulse"></div>
                        <i class="fas fa-landmark text-8xl text-blue-700/80"></i>
                    </div>
                    <div class="absolute -bottom-6 -right-6 bg-white p-3 rounded-full shadow-lg border border-blue-200">
                        <i class="fas fa-bookmark text-blue-700 text-2xl"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== BOOKS DEPARTMENT WISE SECTION ========== -->
    <section class="py-16 md:py-20 bg-white" id="books-section">
        <div class="max-w-7xl mx-auto px-5 sm:px-8">
            <div class="text-center mb-12 md:mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 inline-block">Explore by <span
                        class="text-blue-700 border-b-4 border-blue-300">Departments</span></h2>
                <p class="text-gray-500 max-w-2xl mx-auto mt-4">Discover handpicked collections from each academic
                    department. Find your next great read.</p>
            </div>

            <!-- Department Tabs -->
            <div class="flex flex-wrap justify-center gap-3 mb-12 pb-2 border-b border-gray-200">
                <button data-dept="all"
                    class="dept-tab active-tab px-5 py-2.5 rounded-full font-medium text-gray-700 bg-gray-100 hover:bg-blue-100 transition-all">All
                    Books</button>
                <button data-dept="science"
                    class="dept-tab px-5 py-2.5 rounded-full font-medium text-gray-700 bg-gray-100 hover:bg-blue-100 transition-all">🔬
                    Science</button>
                <button data-dept="humanities"
                    class="dept-tab px-5 py-2.5 rounded-full font-medium text-gray-700 bg-gray-100 hover:bg-blue-100 transition-all">📜
                    Humanities</button>
                <button data-dept="engineering"
                    class="dept-tab px-5 py-2.5 rounded-full font-medium text-gray-700 bg-gray-100 hover:bg-blue-100 transition-all">⚙️
                    Engineering</button>
                <button data-dept="business"
                    class="dept-tab px-5 py-2.5 rounded-full font-medium text-gray-700 bg-gray-100 hover:bg-blue-100 transition-all">📊
                    Business</button>
                <button data-dept="arts"
                    class="dept-tab px-5 py-2.5 rounded-full font-medium text-gray-700 bg-gray-100 hover:bg-blue-100 transition-all">🎨
                    Fine Arts</button>
            </div>

            <!-- Books Grid Container -->
            <div id="booksGridContainer" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-7">
                <!-- JS injected -->
            </div>
            <div id="noBooksMessage" class="text-center py-12 hidden">
                <i class="fas fa-book-open text-5xl text-gray-300"></i>
                <p class="text-gray-400 mt-3">No books found in this department. Try another category!</p>
            </div>
        </div>
    </section>

    <!-- ========== NOTICE BOARD & OPENING HOURS ========== -->
    <section class="py-16 bg-blue-50/40" id="notice-hours">
        <div class="max-w-7xl mx-auto px-5 sm:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-12">
                <!-- Notice Board -->
                <div
                    class="bg-white rounded-2xl shadow-md p-6 md:p-8 border border-blue-100 transition-all hover:shadow-lg">
                    <div class="flex items-center gap-3 border-b border-blue-200 pb-4 mb-6">
                        <i class="fas fa-bullhorn text-blue-700 text-2xl"></i>
                        <h3 class="text-2xl font-bold text-gray-800">📢 Library Notice Board</h3>
                    </div>
                    <div class="space-y-5" id="noticeList"></div>
                    <div class="mt-6 pt-2 text-right">
                        <a href="#"
                            class="text-blue-700 text-sm font-semibold inline-flex items-center gap-1 hover:underline">View
                            all announcements <i class="fas fa-arrow-right text-xs"></i></a>
                    </div>
                </div>

                <!-- Opening Hours -->
                <div class="bg-white rounded-2xl shadow-md p-6 md:p-8 border border-blue-100">
                    <div class="flex items-center gap-3 border-b border-blue-200 pb-4 mb-6">
                        <i class="far fa-clock text-blue-700 text-2xl"></i>
                        <h3 class="text-2xl font-bold text-gray-800">⏰ Opening Hours</h3>
                    </div>
                    <div class="space-y-4 text-gray-700">
                        <div class="flex justify-between items-center py-2 border-b border-gray-100">
                            <span class="font-medium"><i class="far fa-calendar-alt mr-2 text-blue-600"></i> Monday –
                                Friday</span>
                            <span class="text-gray-800 font-semibold">8:00 AM – 9:00 PM</span>
                        </div>
                        <div class="flex justify-between items-center py-2 border-b border-gray-100">
                            <span class="font-medium"><i class="fas fa-calendar-week mr-2 text-blue-600"></i>
                                Saturday</span>
                            <span class="text-gray-800 font-semibold">9:00 AM – 6:00 PM</span>
                        </div>
                        <div class="flex justify-between items-center py-2 border-b border-gray-100">
                            <span class="font-medium"><i class="fas fa-calendar-day mr-2 text-blue-600"></i> Sunday</span>
                            <span class="text-gray-800 font-semibold">10:00 AM – 4:00 PM</span>
                        </div>
                        <div class="flex justify-between items-center py-2">
                            <span class="font-medium"><i class="fas fa-umbrella-beach mr-2 text-blue-600"></i> Public
                                Holidays</span>
                            <span class="text-gray-600">Closed</span>
                        </div>
                    </div>
                    <div class="mt-8 bg-blue-50 rounded-xl p-4 flex items-start gap-3">
                        <i class="fas fa-id-card text-blue-600 text-xl mt-0.5"></i>
                        <div>
                            <p class="text-sm font-medium text-gray-700">Membership benefits</p>
                            <p class="text-xs text-gray-500">24/7 e-resources, study rooms, printing services & workshops.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
@push('scripts')

@endpush