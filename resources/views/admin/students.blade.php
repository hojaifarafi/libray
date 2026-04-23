@extends('layouts.app')
@section('content')
    <main class="ml-[280px] pt-16 min-h-screen">
        <div class="p-container-padding">
            <!-- Page Header Actions -->
            <div class="flex flex-col md:flex-row md:items-center justify-between gap-card-gap mb-section-margin">
                <div class="relative w-full max-w-md">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <span class="material-symbols-outlined text-gray-400" data-icon="search">search</span>
                    </div>
                    <input
                        class="block w-full pl-10 pr-3 py-2.5 border border-gray-200 rounded-xl leading-5 bg-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 text-body-md font-body-md shadow-sm transition-all"
                        placeholder="Search student by name, ID or department..." type="text" />
                </div>
                <div class="flex items-center gap-inline-element-gap">
                    <button
                        class="flex items-center gap-2 px-4 py-2.5 bg-white border border-gray-200 text-gray-700 rounded-xl font-button text-button hover:bg-gray-50 transition-colors shadow-sm">
                        <span class="material-symbols-outlined" data-icon="filter_list">filter_list</span>
                        Filter
                    </button>
                    <button
                        class="flex items-center gap-2 px-6 py-2.5 bg-primary text-white rounded-xl font-button text-button hover:bg-primary-container transition-all shadow-md active:scale-95">
                        <span class="material-symbols-outlined" data-icon="add">add</span>
                        Add Student
                    </button>
                </div>
            </div>
            <!-- Table Container -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-gray-50 border-b border-gray-200">
                                <th class="px-6 py-4 text-label-sm font-label-sm uppercase text-gray-500">Student ID
                                </th>
                                <th class="px-6 py-4 text-label-sm font-label-sm uppercase text-gray-500">Name</th>
                                <th class="px-6 py-4 text-label-sm font-label-sm uppercase text-gray-500">Department
                                </th>
                                <th class="px-6 py-4 text-label-sm font-label-sm uppercase text-gray-500">Borrowed Books
                                </th>
                                <th class="px-6 py-4 text-label-sm font-label-sm uppercase text-gray-500 text-center">
                                    Status</th>
                                <th class="px-6 py-4 text-label-sm font-label-sm uppercase text-gray-500 text-right">
                                    Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            <!-- Row 1 -->
                            <tr class="hover:bg-gray-50 transition-colors duration-150 group">
                                <td class="px-6 py-4 font-mono text-xs font-semibold text-gray-600">LIB-2023-001</td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 rounded-full overflow-hidden border-2 border-white shadow-sm">
                                            <img class="w-full h-full object-cover"
                                                data-alt="portrait of a young college student smiling in a library setting with warm natural sunlight"
                                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuBP5DDXWoJo8ggTgRH-LDZpCP_tAylCmkZ86RStqMQ4izpKThfOFd0BkgC6-Al_Y3IOdo20GnC6r4mmd7aE85VFDs-P0KsRzmEROu2CZsHhOEauqGMLo_rAEJBpJ-LNjqz--_oIWfTyFoPOAPYI5__8ZKLZwgf7MsPavNQOrlQYEszXeSMasbDyj9nKBXfv6fFuWptcolUoZdYOeFpVmKTVpwPF7Q7kBua1rKa65uZIhHpaUT-Kb6R0RGNu4E2dwhwreJAiWkGUyio" />
                                        </div>
                                        <div>
                                            <div class="text-body-md font-semibold text-gray-900">Julian Casablancas
                                            </div>
                                            <div class="text-xs text-gray-500">j.casablancas@university.edu</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-body-md text-gray-600">Computer Science</td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-1.5">
                                        <span
                                            class="px-2 py-0.5 bg-indigo-50 text-indigo-700 rounded-md font-bold text-xs">03</span>
                                        <div class="flex -space-x-2">
                                            <div class="w-6 h-6 rounded border border-white bg-indigo-200"></div>
                                            <div class="w-6 h-6 rounded border border-white bg-indigo-300"></div>
                                            <div class="w-6 h-6 rounded border border-white bg-indigo-400"></div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <span
                                        class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                        <span class="w-1.5 h-1.5 rounded-full bg-green-500 mr-1.5"></span>
                                        Active
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <div
                                        class="flex justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                        <button class="p-2 text-gray-400 hover:text-indigo-600 transition-colors">
                                            <span class="material-symbols-outlined" data-icon="edit">edit</span>
                                        </button>
                                        <button class="p-2 text-gray-400 hover:text-error transition-colors">
                                            <span class="material-symbols-outlined" data-icon="delete">delete</span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <!-- Row 2 -->
                            <tr class="hover:bg-gray-50 transition-colors duration-150 group">
                                <td class="px-6 py-4 font-mono text-xs font-semibold text-gray-600">LIB-2023-042</td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 rounded-full overflow-hidden border-2 border-white shadow-sm">
                                            <img class="w-full h-full object-cover"
                                                data-alt="headshot of a male student wearing glasses in an academic environment with books in the background"
                                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuBGpvxyAUKr5AsjXeBcdt8zfNDASulyiDnw2DnWkjBlKuSYlDwbsbLmWDYtvhg0GB3YVDi7Q2iqj5NzZgtzqYwg-ZE54OM3Z8gyOgzvFFlcZaGyrME70fwNSZrJ25xLcdcWLmqopaSlk0_fBDPrqncQMvfplrXWFpBZngCExfZgnJyoPNAPGNlIlUMvu8WnKLQPzXqeOx9v0MRT9IN5wcN4HTSonsRUt5FniKP28ZOEqNDxK13TwmsRxr-0FwgQD7SceTWocTagW9w" />
                                        </div>
                                        <div>
                                            <div class="text-body-md font-semibold text-gray-900">Marcus Thorne</div>
                                            <div class="text-xs text-gray-500">m.thorne@university.edu</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-body-md text-gray-600">Mechanical Engineering</td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-1.5">
                                        <span
                                            class="px-2 py-0.5 bg-gray-50 text-gray-400 rounded-md font-bold text-xs">00</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <span
                                        class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-red-100 text-red-800">
                                        <span class="w-1.5 h-1.5 rounded-full bg-red-500 mr-1.5"></span>
                                        Blocked
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <div
                                        class="flex justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                        <button class="p-2 text-gray-400 hover:text-indigo-600 transition-colors">
                                            <span class="material-symbols-outlined" data-icon="edit">edit</span>
                                        </button>
                                        <button class="p-2 text-gray-400 hover:text-error transition-colors">
                                            <span class="material-symbols-outlined" data-icon="delete">delete</span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <!-- Row 3 -->
                            <tr class="hover:bg-gray-50 transition-colors duration-150 group">
                                <td class="px-6 py-4 font-mono text-xs font-semibold text-gray-600">LIB-2023-089</td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 rounded-full overflow-hidden border-2 border-white shadow-sm">
                                            <img class="w-full h-full object-cover"
                                                data-alt="portrait of a confident female student in a campus courtyard with soft bokeh background"
                                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuAp6fHKN4SGB4mdAVo2FYJ8pgRM9DOUx9RfbKHuYMtEh77yH4peymgKlj2wH2TAWh12gSeVUo3qjJtwBieSoooF6Sj3rpXm74tRxbkQ8qsqJ8cfEEfizgGGi1vThbYE4LrdjsSn6RfUdOGCtX94uuGCskBlypbYY0_TRiV_KZz-x6r-ULI6qm05sELkmN9hjwzWl2JWGfUWN4cEa6LOTuM2a2mOjIMIPoDSTOdEdLRcdltJGVz16x-RMn9r1ZhyTtGitpwPdJn2uS4" />
                                        </div>
                                        <div>
                                            <div class="text-body-md font-semibold text-gray-900">Sloane Stephens</div>
                                            <div class="text-xs text-gray-500">s.stephens@university.edu</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-body-md text-gray-600">Business Admin</td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-1.5">
                                        <span
                                            class="px-2 py-0.5 bg-indigo-50 text-indigo-700 rounded-md font-bold text-xs">01</span>
                                        <div class="w-6 h-6 rounded border border-white bg-indigo-200"></div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <span
                                        class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                        <span class="w-1.5 h-1.5 rounded-full bg-green-500 mr-1.5"></span>
                                        Active
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <div
                                        class="flex justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                        <button class="p-2 text-gray-400 hover:text-indigo-600 transition-colors">
                                            <span class="material-symbols-outlined" data-icon="edit">edit</span>
                                        </button>
                                        <button class="p-2 text-gray-400 hover:text-error transition-colors">
                                            <span class="material-symbols-outlined" data-icon="delete">delete</span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <!-- Row 4 -->
                            <tr class="hover:bg-gray-50 transition-colors duration-150 group">
                                <td class="px-6 py-4 font-mono text-xs font-semibold text-gray-600">LIB-2023-112</td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 rounded-full overflow-hidden border-2 border-white shadow-sm">
                                            <img class="w-full h-full object-cover"
                                                data-alt="young female student with a backpack walking through a modern university campus building"
                                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuBAtwitOemShnoyt5GlNp87HQ3Px50J9VGUymJp_MRUA57JeRd_zYr9b0UNSBh38TDyYxDwdnCXIRmjZ63fRyqT799EcuhrBqequeA4f7xPUMQU-aFvkg-1RxeOJ-s3ZZoDM27mJyr_gR-s9mkwrPQZvCjj3VxUrEXGwDildsN0Ylso28WUJBwhzVskeXClBGB2Hw8YkRrZsjII8W4ZFYR7hzeRZ4ZIdpZGJuKp-REFK1dOgYnspObhX72cQp7llpFakFk74HsHQFE" />
                                        </div>
                                        <div>
                                            <div class="text-body-md font-semibold text-gray-900">Evelyn Harper</div>
                                            <div class="text-xs text-gray-500">e.harper@university.edu</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-body-md text-gray-600">Arts &amp; Design</td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-1.5">
                                        <span
                                            class="px-2 py-0.5 bg-indigo-50 text-indigo-700 rounded-md font-bold text-xs">02</span>
                                        <div class="flex -space-x-2">
                                            <div class="w-6 h-6 rounded border border-white bg-indigo-200"></div>
                                            <div class="w-6 h-6 rounded border border-white bg-indigo-300"></div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <span
                                        class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                        <span class="w-1.5 h-1.5 rounded-full bg-green-500 mr-1.5"></span>
                                        Active
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <div
                                        class="flex justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                        <button class="p-2 text-gray-400 hover:text-indigo-600 transition-colors">
                                            <span class="material-symbols-outlined" data-icon="edit">edit</span>
                                        </button>
                                        <button class="p-2 text-gray-400 hover:text-error transition-colors">
                                            <span class="material-symbols-outlined" data-icon="delete">delete</span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- Pagination -->
                <div class="px-6 py-4 bg-white border-t border-gray-200 flex items-center justify-between">
                    <div class="text-xs text-gray-500 font-medium">
                        Showing <span class="text-gray-900">1</span> to <span class="text-gray-900">10</span> of <span
                            class="text-gray-900">156</span> students
                    </div>
                    <div class="flex items-center gap-2">
                        <button
                            class="p-2 rounded-lg border border-gray-200 text-gray-400 hover:bg-gray-50 transition-colors disabled:opacity-50"
                            disabled="">
                            <span class="material-symbols-outlined text-sm" data-icon="chevron_left">chevron_left</span>
                        </button>
                        <div class="flex items-center gap-1">
                            <button
                                class="w-8 h-8 rounded-lg bg-indigo-600 text-white text-xs font-bold shadow-sm">1</button>
                            <button
                                class="w-8 h-8 rounded-lg hover:bg-gray-50 text-gray-600 text-xs font-bold transition-colors">2</button>
                            <button
                                class="w-8 h-8 rounded-lg hover:bg-gray-50 text-gray-600 text-xs font-bold transition-colors">3</button>
                            <span class="px-1 text-gray-400 text-xs">...</span>
                            <button
                                class="w-8 h-8 rounded-lg hover:bg-gray-50 text-gray-600 text-xs font-bold transition-colors">16</button>
                        </div>
                        <button
                            class="p-2 rounded-lg border border-gray-200 text-gray-600 hover:bg-gray-50 transition-colors">
                            <span class="material-symbols-outlined text-sm" data-icon="chevron_right">chevron_right</span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Stats Overview Cards (Bento Style) -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-card-gap mt-section-margin">
                <div class="p-6 bg-white rounded-xl border border-gray-200 shadow-sm flex items-center gap-4">
                    <div class="w-12 h-12 rounded-xl bg-indigo-50 flex items-center justify-center text-indigo-600">
                        <span class="material-symbols-outlined text-2xl" data-icon="school">school</span>
                    </div>
                    <div>
                        <div class="text-xs font-bold text-gray-500 uppercase tracking-wider mb-1">Total Enrollment
                        </div>
                        <div class="text-2xl font-black text-gray-900">1,256</div>
                    </div>
                </div>
                <div class="p-6 bg-white rounded-xl border border-gray-200 shadow-sm flex items-center gap-4">
                    <div class="w-12 h-12 rounded-xl bg-orange-50 flex items-center justify-center text-orange-600">
                        <span class="material-symbols-outlined text-2xl" data-icon="pending_actions">pending_actions</span>
                    </div>
                    <div>
                        <div class="text-xs font-bold text-gray-500 uppercase tracking-wider mb-1">Active Borrows</div>
                        <div class="text-2xl font-black text-gray-900">423</div>
                    </div>
                </div>
                <div class="p-6 bg-white rounded-xl border border-gray-200 shadow-sm flex items-center gap-4">
                    <div class="w-12 h-12 rounded-xl bg-red-50 flex items-center justify-center text-red-600">
                        <span class="material-symbols-outlined text-2xl" data-icon="block">block</span>
                    </div>
                    <div>
                        <div class="text-xs font-bold text-gray-500 uppercase tracking-wider mb-1">Blocked Accounts
                        </div>
                        <div class="text-2xl font-black text-gray-900">18</div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection