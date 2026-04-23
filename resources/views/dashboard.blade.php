@extends('layouts.app')
@section('content')
    <main class="pt-20 pb-20 md:pb-8 md:pl-[280px] min-h-screen">
        <div class="p-container-padding max-w-[1600px] mx-auto">
            <!-- Summary Cards Bento Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-card-gap mb-section-margin">
                <div
                    class="bg-white p-6 rounded-xl shadow-[0px_1px_3px_rgba(0,0,0,0.1)] border border-gray-100 flex flex-col justify-between hover:shadow-[0px_10px_15px_-3px_rgba(0,0,0,0.1)] transition-shadow duration-150">
                    <div class="flex justify-between items-start">
                        <span class="text-label-sm font-label-sm text-on-surface-variant">TOTAL STUDENTS</span>
                        <div class="p-2 bg-blue-50 rounded-lg text-blue-600">
                            <span class="material-symbols-outlined" data-icon="group">group</span>
                        </div>
                    </div>
                    <div>
                        <h2 class="text-h2 font-h2 mt-4 text-on-surface">4,200</h2>
                        <div class="flex items-center mt-2 text-xs text-green-600 font-semibold">
                            <span class="material-symbols-outlined text-sm mr-1" data-icon="trending_up">trending_up</span>
                            +12% from last sem
                        </div>
                    </div>
                </div>
                <div
                    class="bg-white p-6 rounded-xl shadow-[0px_1px_3px_rgba(0,0,0,0.1)] border border-gray-100 flex flex-col justify-between hover:shadow-[0px_10px_15px_-3px_rgba(0,0,0,0.1)] transition-shadow duration-150">
                    <div class="flex justify-between items-start">
                        <span class="text-label-sm font-label-sm text-on-surface-variant">TOTAL BOOKS</span>
                        <div class="p-2 bg-indigo-50 rounded-lg text-indigo-600">
                            <span class="material-symbols-outlined" data-icon="menu_book">menu_book</span>
                        </div>
                    </div>
                    <div>
                        <h2 class="text-h2 font-h2 mt-4 text-on-surface">25,000+</h2>
                        <div class="flex items-center mt-2 text-xs text-gray-500 font-semibold">
                            <span class="material-symbols-outlined text-sm mr-1"
                                data-icon="check_circle">check_circle</span>
                            In inventory
                        </div>
                    </div>
                </div>
                <div
                    class="bg-white p-6 rounded-xl shadow-[0px_1px_3px_rgba(0,0,0,0.1)] border border-gray-100 flex flex-col justify-between hover:shadow-[0px_10px_15px_-3px_rgba(0,0,0,0.1)] transition-shadow duration-150">
                    <div class="flex justify-between items-start">
                        <span class="text-label-sm font-label-sm text-on-surface-variant">BORROWED BOOKS</span>
                        <div class="p-2 bg-amber-50 rounded-lg text-amber-600">
                            <span class="material-symbols-outlined" data-icon="outbound">outbound</span>
                        </div>
                    </div>
                    <div>
                        <h2 class="text-h2 font-h2 mt-4 text-on-surface">842</h2>
                        <div class="flex items-center mt-2 text-xs text-amber-600 font-semibold">
                            <span class="material-symbols-outlined text-sm mr-1" data-icon="sync">sync</span>
                            Active circulation
                        </div>
                    </div>
                </div>
                <div
                    class="bg-white p-6 rounded-xl shadow-[0px_1px_3px_rgba(0,0,0,0.1)] border border-gray-100 flex flex-col justify-between hover:shadow-[0px_10px_15px_-3px_rgba(0,0,0,0.1)] transition-shadow duration-150">
                    <div class="flex justify-between items-start">
                        <span class="text-label-sm font-label-sm text-on-surface-variant">OVERDUE BOOKS</span>
                        <div class="p-2 bg-red-50 rounded-lg text-red-600">
                            <span class="material-symbols-outlined" data-icon="warning">warning</span>
                        </div>
                    </div>
                    <div>
                        <h2 class="text-h2 font-h2 mt-4 text-on-surface">24</h2>
                        <div class="flex items-center mt-2 text-xs text-red-600 font-semibold">
                            <span class="material-symbols-outlined text-sm mr-1" data-icon="report">report</span>
                            Action required
                        </div>
                    </div>
                </div>
            </div>
            <!-- Charts Section -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-card-gap mb-section-margin">
                <!-- Borrow Activity Line Chart (Placeholder Illustration) -->
                <div class="lg:col-span-2 bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                    <div class="flex justify-between items-center mb-8">
                        <h3 class="text-h3 font-h3 text-on-surface">Borrow Activity</h3>
                        <select
                            class="text-xs font-semibold border-gray-200 rounded-lg bg-gray-50 py-1.5 focus:ring-indigo-500">
                            <option>Last 6 Months</option>
                            <option>Last Year</option>
                        </select>
                    </div>
                    <div class="h-64 flex items-end justify-between gap-2 px-2 relative">
                        <!-- Simulated Chart Grid Lines -->
                        <div
                            class="absolute inset-x-0 top-0 bottom-0 flex flex-col justify-between pointer-events-none opacity-10">
                            <div class="border-b border-gray-900 w-full"></div>
                            <div class="border-b border-gray-900 w-full"></div>
                            <div class="border-b border-gray-900 w-full"></div>
                            <div class="border-b border-gray-900 w-full"></div>
                        </div>
                        <!-- Simulated SVG Line Chart Logic -->
                        <div class="absolute inset-0 pt-8 pb-4">
                            <svg class="w-full h-full overflow-visible" preserveaspectratio="none" viewbox="0 0 600 200">
                                <path d="M0 160 Q 50 140 100 150 T 200 100 T 300 120 T 400 60 T 500 80 T 600 40" fill="none"
                                    stroke="#4f46e5" stroke-linecap="round" stroke-width="3"></path>
                                <path
                                    d="M0 160 Q 50 140 100 150 T 200 100 T 300 120 T 400 60 T 500 80 T 600 40 L 600 200 L 0 200 Z"
                                    fill="url(#gradient-indigo)" opacity="0.1"></path>
                                <defs>
                                    <lineargradient id="gradient-indigo" x1="0%" x2="0%" y1="0%" y2="100%">
                                        <stop offset="0%" stop-color="#4f46e5"></stop>
                                        <stop offset="100%" stop-color="#4f46e5" stop-opacity="0"></stop>
                                    </lineargradient>
                                </defs>
                            </svg>
                        </div>
                    </div>
                    <div class="flex justify-between mt-4 px-2 text-xs font-semibold text-gray-400">
                        <span>JAN</span><span>FEB</span><span>MAR</span><span>APR</span><span>MAY</span><span>JUN</span>
                    </div>
                </div>
                <!-- Most Borrowed Categories Bar Chart -->
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                    <h3 class="text-h3 font-h3 text-on-surface mb-8">Most Borrowed</h3>
                    <div class="space-y-6">
                        <div>
                            <div class="flex justify-between text-xs font-bold text-gray-500 mb-2 uppercase">
                                <span>Engineering</span>
                                <span class="text-indigo-600">1,240</span>
                            </div>
                            <div class="w-full h-2 bg-gray-100 rounded-full overflow-hidden">
                                <div class="h-full bg-indigo-600 w-[85%] rounded-full"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between text-xs font-bold text-gray-500 mb-2 uppercase">
                                <span>Computer Science</span>
                                <span class="text-indigo-600">980</span>
                            </div>
                            <div class="w-full h-2 bg-gray-100 rounded-full overflow-hidden">
                                <div class="h-full bg-indigo-500 w-[70%] rounded-full"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between text-xs font-bold text-gray-500 mb-2 uppercase">
                                <span>Physics</span>
                                <span class="text-indigo-600">650</span>
                            </div>
                            <div class="w-full h-2 bg-gray-100 rounded-full overflow-hidden">
                                <div class="h-full bg-sky-400 w-[50%] rounded-full"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between text-xs font-bold text-gray-500 mb-2 uppercase">
                                <span>Mathematics</span>
                                <span class="text-indigo-600">420</span>
                            </div>
                            <div class="w-full h-2 bg-gray-100 rounded-full overflow-hidden">
                                <div class="h-full bg-teal-400 w-[35%] rounded-full"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Recent Activity Table -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
                <div class="px-6 py-4 border-b border-gray-100 flex justify-between items-center">
                    <h3 class="text-h3 font-h3 text-on-surface">Recent Transactions</h3>
                    <button class="text-indigo-600 text-sm font-semibold hover:underline">View All</button>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-left">
                        <thead>
                            <tr class="bg-gray-50/50">
                                <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase tracking-wider">Student
                                </th>
                                <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase tracking-wider">Book</th>
                                <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase tracking-wider">Date</th>
                                <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase tracking-wider">Status
                                </th>
                                <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase tracking-wider"></th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            <tr class="hover:bg-gray-50/50 transition-colors">
                                <td class="px-6 py-4">
                                    <div class="flex items-center">
                                        <div
                                            class="w-8 h-8 rounded-full bg-blue-100 flex items-center justify-center text-blue-700 font-bold text-[10px] mr-3">
                                            AS</div>
                                        <div>
                                            <div class="text-sm font-semibold text-gray-900">Arjun Sharma</div>
                                            <div class="text-xs text-gray-500">ID: #4021</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-sm font-medium text-gray-700 italic">Structural Analysis (9th
                                    Ed.)</td>
                                <td class="px-6 py-4 text-sm text-gray-500">Oct 12, 2023</td>
                                <td class="px-6 py-4">
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-semibold bg-green-100 text-green-700">
                                        Returned
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <span class="material-symbols-outlined text-gray-400 cursor-pointer"
                                        data-icon="more_vert">more_vert</span>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-50/50 transition-colors">
                                <td class="px-6 py-4">
                                    <div class="flex items-center">
                                        <div
                                            class="w-8 h-8 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-700 font-bold text-[10px] mr-3">
                                            MP</div>
                                        <div>
                                            <div class="text-sm font-semibold text-gray-900">Maya Patel</div>
                                            <div class="text-xs text-gray-500">ID: #4210</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-sm font-medium text-gray-700 italic">Quantum Mechanics Vol. II
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-500">Oct 14, 2023</td>
                                <td class="px-6 py-4">
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-semibold bg-amber-100 text-amber-700">
                                        Pending
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <span class="material-symbols-outlined text-gray-400 cursor-pointer"
                                        data-icon="more_vert">more_vert</span>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-50/50 transition-colors">
                                <td class="px-6 py-4">
                                    <div class="flex items-center">
                                        <div
                                            class="w-8 h-8 rounded-full bg-teal-100 flex items-center justify-center text-teal-700 font-bold text-[10px] mr-3">
                                            RK</div>
                                        <div>
                                            <div class="text-sm font-semibold text-gray-900">Rohan Kumar</div>
                                            <div class="text-xs text-gray-500">ID: #3992</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-sm font-medium text-gray-700 italic">Discrete Mathematics</td>
                                <td class="px-6 py-4 text-sm text-gray-500">Oct 14, 2023</td>
                                <td class="px-6 py-4">
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-semibold bg-amber-100 text-amber-700">
                                        Pending
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <span class="material-symbols-outlined text-gray-400 cursor-pointer"
                                        data-icon="more_vert">more_vert</span>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-50/50 transition-colors">
                                <td class="px-6 py-4">
                                    <div class="flex items-center">
                                        <div
                                            class="w-8 h-8 rounded-full bg-pink-100 flex items-center justify-center text-pink-700 font-bold text-[10px] mr-3">
                                            LW</div>
                                        <div>
                                            <div class="text-sm font-semibold text-gray-900">Lisa Wong</div>
                                            <div class="text-xs text-gray-500">ID: #4055</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-sm font-medium text-gray-700 italic">Advanced Algorithms</td>
                                <td class="px-6 py-4 text-sm text-gray-500">Oct 15, 2023</td>
                                <td class="px-6 py-4">
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-semibold bg-green-100 text-green-700">
                                        Returned
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <span class="material-symbols-outlined text-gray-400 cursor-pointer"
                                        data-icon="more_vert">more_vert</span>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-50/50 transition-colors">
                                <td class="px-6 py-4">
                                    <div class="flex items-center">
                                        <div
                                            class="w-8 h-8 rounded-full bg-gray-100 flex items-center justify-center text-gray-700 font-bold text-[10px] mr-3">
                                            JS</div>
                                        <div>
                                            <div class="text-sm font-semibold text-gray-900">James Smith</div>
                                            <div class="text-xs text-gray-500">ID: #4122</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-sm font-medium text-gray-700 italic">Principles of Economics
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-500">Oct 15, 2023</td>
                                <td class="px-6 py-4">
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-semibold bg-amber-100 text-amber-700">
                                        Pending
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <span class="material-symbols-outlined text-gray-400 cursor-pointer"
                                        data-icon="more_vert">more_vert</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection