<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>LibraryAdmin Dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
    <style>
        body {
            min-height: max(884px, 100dvh);
        }
    </style>
    @stack('styles')
</head>

<body class="bg-background text-on-surface font-body-md">
    <!-- NavigationDrawer -->
    <aside class="fixed left-0 top-0 h-screen z-40 w-[280px] bg-white border-r border-gray-200 hidden md:block">
        <div class="h-16 flex items-center px-6 border-b border-gray-200">
            <span class="text-xl font-bold text-indigo-600">LibraryAdmin</span>
        </div>
        <nav class="py-4">
            <a href="{{ route('admin.dashboard') }}">
                <div
                    class="flex items-center px-4 py-3 {{ Route::is('admin.dashboard') ? 'text-indigo-600 bg-indigo-50 border-r-4 border-indigo-600' : 'text-gray-600 hover:bg-gray-50' }} cursor-pointer active:opacity-80 transition-colors duration-150 font-sans text-sm font-medium tracking-tight">
                    <span class="material-symbols-outlined mr-3" data-icon="dashboard">dashboard</span>
                    Dashboard
                </div>
            </a>
            <a href="{{ route('admin.students') }}">
                <div
                    class="flex items-center px-4 py-3 {{ Route::is('admin.students') ? 'text-indigo-600 bg-indigo-50 border-r-4 border-indigo-600' : 'text-gray-600 hover:bg-gray-50' }} cursor-pointer active:opacity-80 transition-colors duration-150 font-sans text-sm font-medium tracking-tight">
                    <span class="material-symbols-outlined mr-3" data-icon="group">group</span>
                    Students
                </div>
            </a>
            <a href="{{ route('admin.books') }}">
                <div
                class="flex items-center px-4 py-3 {{ Route::is('admin.books') ? 'text-indigo-600 bg-indigo-50 border-r-4 border-indigo-600' : 'text-gray-600 hover:bg-gray-50' }} cursor-pointer active:opacity-80 transition-colors duration-150 font-sans text-sm font-medium tracking-tight">
                <span class="material-symbols-outlined mr-3" data-icon="menu_book">menu_book</span>
                Books
            </div>
            </a>
            <a href="{{ route('admin.issueBooks') }}">
            <div
                class="flex items-center px-4 py-3 {{ Route::is('admin.issueBooks') ? 'text-indigo-600 bg-indigo-50 border-r-4 border-indigo-600' : 'text-gray-600 hover:bg-gray-50' }} cursor-pointer active:opacity-80 transition-colors duration-150 font-sans text-sm font-medium tracking-tight">
                <span class="material-symbols-outlined mr-3" data-icon="outbound">outbound</span>
                Issue/Borrow
            </div>
            </a>
            <a href="{{ route('admin.returnBooks') }}">
            <div
                class="flex items-center px-4 py-3 {{ Route::is('admin.returnBooks') ? 'text-indigo-600 bg-indigo-50 border-r-4 border-indigo-600' : 'text-gray-600 hover:bg-gray-50' }} cursor-pointer active:opacity-80 transition-colors duration-150 font-sans text-sm font-medium tracking-tight">
                <span class="material-symbols-outlined mr-3" data-icon="assignment_return">assignment_return</span>
                Return
            </div>
            </a>
            <a href="{{ route('admin.fine') }}">
            <div
                class="flex items-center px-4 py-3 {{ Route::is('admin.fine') ? 'text-indigo-600 bg-indigo-50 border-r-4 border-indigo-600' : 'text-gray-600 hover:bg-gray-50' }} cursor-pointer active:opacity-80 transition-colors duration-150 font-sans text-sm font-medium tracking-tight">
                <span class="material-symbols-outlined mr-3" data-icon="payments">payments</span>
                Fines
            </div>
            </a>
            <div
                class="flex items-center px-4 py-3 {{ Route::is('admin.reports') ? 'text-indigo-600 bg-indigo-50 border-r-4 border-indigo-600' : 'text-gray-600 hover:bg-gray-50' }} cursor-pointer active:opacity-80 transition-colors duration-150 font-sans text-sm font-medium tracking-tight">
                <span class="material-symbols-outlined mr-3" data-icon="assessment">assessment</span>
                Reports
            </div>
            <div
                class="flex items-center px-4 py-3 text-gray-600 hover:bg-gray-50 cursor-pointer active:opacity-80 transition-colors duration-150 font-sans text-sm font-medium tracking-tight">
                <span class="material-symbols-outlined mr-3" data-icon="settings">settings</span>
                Settings
            </div>
        </nav>
    </aside>
    <!-- Mobile Navigation (Bottom Nav) -->
    <nav
        class="fixed bottom-0 left-0 right-0 h-16 bg-white border-t border-gray-200 flex items-center justify-around z-40 md:hidden">
        <div class="flex flex-col items-center text-indigo-600">
            <span class="material-symbols-outlined" data-icon="dashboard" data-weight="fill"
                style="font-variation-settings: 'FILL' 1;">dashboard</span>
            <span class="text-[10px] font-medium">Dash</span>
        </div>
        <div class="flex flex-col items-center text-gray-500">
            <span class="material-symbols-outlined" data-icon="menu_book">menu_book</span>
            <span class="text-[10px] font-medium">Books</span>
        </div>
        <div class="flex flex-col items-center text-gray-500">
            <span class="material-symbols-outlined" data-icon="outbound">outbound</span>
            <span class="text-[10px] font-medium">Issue</span>
        </div>
        <div class="flex flex-col items-center text-gray-500">
            <span class="material-symbols-outlined" data-icon="group">group</span>
            <span class="text-[10px] font-medium">Students</span>
        </div>
    </nav>
    <!-- TopAppBar -->
    <header
        class="fixed top-0 right-0 left-0 md:left-[280px] h-16 flex items-center justify-between px-6 bg-white/80 backdrop-blur-md border-b border-gray-200 shadow-sm z-30">
        <div class="flex items-center gap-4">
            <button class="md:hidden text-gray-600">
                <span class="material-symbols-outlined" data-icon="menu">menu</span>
            </button>
            <h1 class="text-lg font-black text-gray-900 font-h1">Dashboard</h1>
        </div>
        <div class="flex items-center gap-6">
            <div
                class="hidden sm:flex items-center bg-surface-container px-3 py-1.5 rounded-lg border border-outline-variant">
                <span class="material-symbols-outlined text-gray-500 text-sm mr-2" data-icon="search">search</span>
                <input class="bg-transparent border-none focus:ring-0 text-sm w-48 text-on-surface"
                    placeholder="Search catalog..." type="text" />
                <span class="text-[10px] text-gray-400 font-bold ml-2">⌘K</span>
            </div>
            <div class="flex items-center gap-2 cursor-pointer duration-200 ease-in-out hover:text-indigo-600">
                <div
                    class="w-8 h-8 rounded-full bg-primary flex items-center justify-center text-white text-xs font-bold">
                    JD</div>
                <span class="text-sm font-semibold font-sans hidden lg:inline">Admin Profile</span>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="text-sm font-semibold font-sans hidden lg:inline">Logout</button>
                </form>
            </div>
        </div>
    </header>
        @yield('content')
    <!-- FAB for quick book issue -->
    <button
        class="fixed bottom-20 md:bottom-8 right-8 w-14 h-14 bg-primary text-white rounded-full shadow-lg flex items-center justify-center z-50 hover:scale-105 active:scale-95 transition-all">
        <span class="material-symbols-outlined" data-icon="add">add</span>
    </button>
    @stack('scripts')
</body>

</html>