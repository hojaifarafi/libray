@extends('layouts.app')
@section('content')
   <main class="ml-[280px] pt-16 min-h-screen p-container-padding">
        <!-- Tabs Header -->
        <div class="max-w-[1200px] mx-auto mb-section-margin">
            <div class="flex border-b border-outline-variant">
                <button class="px-8 py-4 text-primary font-button border-b-2 border-primary">Issue Book</button>
                <button
                    class="px-8 py-4 text-on-surface-variant font-button hover:text-primary transition-colors">Return
                    Book</button>
            </div>
        </div>
        <!-- Issue Book Section -->
        <div class="max-w-[1200px] mx-auto grid grid-cols-12 gap-card-gap">
            <!-- Issue Form Column -->
            <div class="col-span-12 lg:col-span-8">
                <div
                    class="bg-surface-container-lowest rounded-xl shadow-[0px_1px_3px_rgba(0,0,0,0.1)] p-8 border border-gray-100">
                    <div class="mb-8">
                        <h2 class="text-h2 font-h2 text-on-surface mb-2">Issue New Book</h2>
                        <p class="text-body-md font-body-md text-on-surface-variant">Complete the form below to record a
                            new loan.</p>
                    </div>
                    <form class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Student Search -->
                            <div class="space-y-unit">
                                <label class="text-label-sm font-label-sm text-on-surface-variant uppercase">Student
                                    Selection</label>
                                <div class="relative">
                                    <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-400">
                                        <span class="material-symbols-outlined text-[20px]"
                                            data-icon="person_search">person_search</span>
                                    </span>
                                    <input
                                        class="w-full pl-10 pr-4 py-3 bg-white border border-outline-variant rounded-lg focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all font-body-md"
                                        placeholder="Search by name or ID..." type="text" />
                                </div>
                                <p class="text-[11px] text-gray-500 mt-1">E.g., "John Doe" or "ID-2023-001"</p>
                            </div>
                            <!-- Book Search -->
                            <div class="space-y-unit">
                                <label class="text-label-sm font-label-sm text-on-surface-variant uppercase">Book
                                    Selection</label>
                                <div class="relative">
                                    <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-400">
                                        <span class="material-symbols-outlined text-[20px]"
                                            data-icon="library_books">library_books</span>
                                    </span>
                                    <input
                                        class="w-full pl-10 pr-4 py-3 bg-white border border-outline-variant rounded-lg focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all font-body-md"
                                        placeholder="Search by title or ISBN..." type="text" />
                                </div>
                                <p class="text-[11px] text-gray-500 mt-1">E.g., "The Great Gatsby" or "978-0..."</p>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Issue Date -->
                            <div class="space-y-unit">
                                <label class="text-label-sm font-label-sm text-on-surface-variant uppercase">Issue
                                    Date</label>
                                <div class="relative">
                                    <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-400">
                                        <span class="material-symbols-outlined text-[20px]"
                                            data-icon="calendar_today">calendar_today</span>
                                    </span>
                                    <input
                                        class="w-full pl-10 pr-4 py-3 bg-gray-50 border border-outline-variant rounded-lg text-gray-500 font-body-md cursor-not-allowed"
                                        readonly="" type="text" value="Oct 24, 2023" />
                                </div>
                            </div>
                            <!-- Due Date Picker -->
                            <div class="space-y-unit">
                                <label class="text-label-sm font-label-sm text-on-surface-variant uppercase">Due
                                    Date</label>
                                <div class="relative">
                                    <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-400">
                                        <span class="material-symbols-outlined text-[20px]"
                                            data-icon="event_busy">event_busy</span>
                                    </span>
                                    <input
                                        class="w-full pl-10 pr-4 py-3 bg-white border border-outline-variant rounded-lg focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all font-body-md"
                                        type="date" />
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center gap-4 pt-4">
                            <button
                                class="px-8 py-3 bg-primary text-white font-button rounded-lg hover:shadow-lg active:opacity-80 transition-all flex items-center gap-2"
                                type="submit">
                                <span class="material-symbols-outlined text-[20px]"
                                    data-icon="check_circle">check_circle</span>
                                Confirm Issue
                            </button>
                            <button
                                class="px-8 py-3 bg-white border border-outline-variant text-on-surface font-button rounded-lg hover:bg-gray-50 transition-all"
                                type="reset">
                                Clear Form
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Context Info Sidebar -->
            <div class="col-span-12 lg:col-span-4 space-y-card-gap">
                <!-- Live Summary Card -->
                <div class="bg-white rounded-xl shadow-[0px_1px_3px_rgba(0,0,0,0.1)] p-6 border border-gray-100">
                    <h3 class="text-h3 font-h3 mb-4">Loan Summary</h3>
                    <div class="space-y-4">
                        <div class="flex items-center justify-between py-3 border-b border-gray-50">
                            <span class="text-body-md text-on-surface-variant">Selected Student</span>
                            <span class="text-body-md font-semibold text-on-surface">None</span>
                        </div>
                        <div class="flex items-center justify-between py-3 border-b border-gray-50">
                            <span class="text-body-md text-on-surface-variant">Selected Book</span>
                            <span class="text-body-md font-semibold text-on-surface">None</span>
                        </div>
                        <div class="flex items-center justify-between py-3 border-b border-gray-50">
                            <span class="text-body-md text-on-surface-variant">Loan Duration</span>
                            <span class="text-body-md font-semibold text-on-surface">14 Days</span>
                        </div>
                        <div class="bg-indigo-50 p-4 rounded-lg flex items-start gap-3">
                            <span class="material-symbols-outlined text-indigo-600" data-icon="info">info</span>
                            <p class="text-xs text-indigo-800 leading-relaxed">
                                Standard undergraduate students are allowed a maximum of 5 books for 14 days. Ensure the
                                ID matches before confirming.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Quick Help Card -->
                <div
                    class="bg-gradient-to-br from-indigo-600 to-indigo-800 rounded-xl shadow-lg p-6 text-white overflow-hidden relative">
                    <div class="relative z-10">
                        <h3 class="text-lg font-bold mb-2">Need Assistance?</h3>
                        <p class="text-sm opacity-90 mb-4">Quickly scan barcodes for students and books to speed up the
                            process.</p>
                        <button
                            class="w-full py-2 bg-white/20 hover:bg-white/30 backdrop-blur-sm rounded-lg text-sm font-semibold transition-all">
                            Open Scanner
                        </button>
                    </div>
                    <div class="absolute -right-4 -bottom-4 opacity-10">
                        <span class="material-symbols-outlined text-[120px]"
                            data-icon="barcode_scanner">barcode_scanner</span>
                    </div>
                </div>
            </div>
            <!-- Recent Loans Table Section -->
            <div class="col-span-12">
                <div
                    class="bg-white rounded-xl shadow-[0px_1px_3px_rgba(0,0,0,0.1)] border border-gray-100 overflow-hidden">
                    <div class="px-6 py-4 border-b border-gray-100 flex items-center justify-between">
                        <h3 class="text-h3 font-h3">Today's Issued Books</h3>
                        <span class="px-3 py-1 bg-indigo-100 text-indigo-700 text-xs font-bold rounded-full">12
                            TOTAL</span>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-left">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-4 text-label-sm font-bold uppercase text-on-surface-variant">
                                        Student</th>
                                    <th class="px-6 py-4 text-label-sm font-bold uppercase text-on-surface-variant">Book
                                        Title</th>
                                    <th class="px-6 py-4 text-label-sm font-bold uppercase text-on-surface-variant">
                                        Issue Time</th>
                                    <th class="px-6 py-4 text-label-sm font-bold uppercase text-on-surface-variant">Due
                                        Date</th>
                                    <th class="px-6 py-4 text-label-sm font-bold uppercase text-on-surface-variant">
                                        Status</th>
                                    <th class="px-6 py-4 text-label-sm font-bold uppercase text-on-surface-variant">
                                        Action</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100">
                                <tr class="hover:bg-gray-50 transition-colors">
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-3">
                                            <img alt="Student" class="w-8 h-8 rounded-full"
                                                data-alt="close-up profile photo of a young female university student in a casual sweatshirt with a friendly expression"
                                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuAKJLU8C0Ilg79DZx1Qazg7GUUk52s93oeZSfyYPtpoUyA9ZLhTTx-r7NYeI4RWij3_FFgWs9koFiWEtx05I3pPZI_VoY6Qeo3ZmW9Chrrjmh7dqoVqGCmQxIGYQlw8aCTUScP6EpLL2x9vLsI1WKeT2mer8YaYXJ6jExTIFiLMxVNNG6rfzlDGkGC9G6U2GZhrtvvisvTQ5krvdNnM6HkNX00gOvSr0WVhWujfNlx66koCFNo6EUyKz4ClfJAG_3l1cpFf_eMEvnU" />
                                            <div>
                                                <div class="text-sm font-semibold text-gray-900">Sarah Jenkins</div>
                                                <div class="text-xs text-gray-500">U-2023-4412</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="text-sm text-gray-900 font-medium">Artificial Intelligence: A Modern
                                            Approach</div>
                                        <div class="text-xs text-gray-500">ISBN: 978-0134610993</div>
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-600">10:45 AM</td>
                                    <td class="px-6 py-4 text-sm text-gray-600">Nov 07, 2023</td>
                                    <td class="px-6 py-4">
                                        <span
                                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                            Successful
                                        </span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <button class="text-indigo-600 hover:text-indigo-900 text-sm font-medium">Print
                                            Receipt</button>
                                    </td>
                                </tr>
                                <tr class="hover:bg-gray-50 transition-colors">
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-3">
                                            <img alt="Student" class="w-8 h-8 rounded-full"
                                                data-alt="close-up profile photo of a male student with glasses wearing a denim jacket in a brightly lit academic hall"
                                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuBHIM4ikICCilISZwmLTau0e5_a88XufMQW-7E6-JQbZfzG0Hxwnl-rNz30Lvk_i6VzRAP4A8PfiZGC9OlMbN82uZ6kJ1sqeiz33Bu1CSK9XOUQGWNTd5QQ1teuFueKd5FkiUdXS2yj_suLINCkpNBlWtweiFWyWiyAvxHhFK2QatvQpi7K1lDf7KkeUzlYDtAXw569_CqCF0lDm4chPdSyeZ7KyPY_95CxfUHhpbcVegNRAetiTcmr6Zn2oeKGpC6ZoAMRLNh13XY" />
                                            <div>
                                                <div class="text-sm font-semibold text-gray-900">Michael Chen</div>
                                                <div class="text-xs text-gray-500">U-2023-5582</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="text-sm text-gray-900 font-medium">The Pragmatic Programmer</div>
                                        <div class="text-xs text-gray-500">ISBN: 978-0135957059</div>
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-600">09:12 AM</td>
                                    <td class="px-6 py-4 text-sm text-gray-600">Nov 07, 2023</td>
                                    <td class="px-6 py-4">
                                        <span
                                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                            Successful
                                        </span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <button class="text-indigo-600 hover:text-indigo-900 text-sm font-medium">Print
                                            Receipt</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@push('styles')
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8f9fb;
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }
        body {
            min-height: max(884px, 100dvh);
        }
    </style>
@endpush