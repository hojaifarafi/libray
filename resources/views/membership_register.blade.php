@extends('layouts.main')

@section('content')
<section class="relative bg-gradient-to-br from-blue-50 via-white to-indigo-50 min-h-[calc(100vh-100px)] flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <!-- Decorative background elements -->
    <div class="absolute top-0 left-0 w-72 h-72 bg-blue-200/30 rounded-full blur-3xl -translate-x-1/2 -translate-y-1/2"></div>
    <div class="absolute bottom-0 right-0 w-80 h-80 bg-indigo-100/40 rounded-full blur-3xl translate-x-1/3 translate-y-1/3"></div>

    <div class="relative w-full max-w-2xl bg-white rounded-3xl shadow-xl border border-blue-100 overflow-hidden z-10 animate-fade-in">
        <div class="bg-blue-700 px-8 py-6 text-center">
            <h2 class="text-3xl font-extrabold text-white">Membership Registration</h2>
            <p class="text-blue-100 mt-2">Join the Collage Library community today.</p>
        </div>
        
        <div class="p-8 sm:p-10">
            <form method="POST" action="{{ url('/membership-register') }}" enctype="multipart/form-data" class="space-y-6">
                @csrf

                <!-- Name -->
                <div>
                    <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">Full Name</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <i class="fas fa-user text-blue-400"></i>
                        </div>
                        <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" 
                            class="w-full pl-11 pr-4 py-3 rounded-xl border border-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 focus:outline-none transition-all text-gray-700 bg-gray-50 hover:bg-white focus:bg-white" placeholder="Enter your full name" />
                    </div>
                    @error('name')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">Email Address</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <i class="fas fa-envelope text-blue-400"></i>
                            </div>
                            <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" 
                                class="w-full pl-11 pr-4 py-3 rounded-xl border border-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 focus:outline-none transition-all text-gray-700 bg-gray-50 hover:bg-white focus:bg-white" placeholder="Enter your email address" />
                        </div>
                        @error('email')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Phone Number -->
                    <div>
                        <label for="phone" class="block text-sm font-semibold text-gray-700 mb-2">Phone Number</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <i class="fas fa-phone text-blue-400"></i>
                            </div>
                            <input id="phone" type="tel" name="phone" value="{{ old('phone') }}" required autocomplete="tel" 
                                class="w-full pl-11 pr-4 py-3 rounded-xl border border-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 focus:outline-none transition-all text-gray-700 bg-gray-50 hover:bg-white focus:bg-white" placeholder="Enter your phone number" />
                        </div>
                        @error('phone')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Department -->
                    <div>
                        <label for="department" class="block text-sm font-semibold text-gray-700 mb-2">Department</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <i class="fas fa-building text-blue-400"></i>
                            </div>
                            <select id="department" name="department" required 
                                class="w-full pl-11 pr-10 py-3 rounded-xl border border-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 focus:outline-none transition-all text-gray-700 bg-gray-50 hover:bg-white focus:bg-white appearance-none">
                                <option value="" disabled selected>Select Department</option>
                                <option value="Computer Science" {{ old('department') == 'Computer Science' ? 'selected' : '' }}>Computer Science</option>
                                <option value="Electrical Engineering" {{ old('department') == 'Electrical Engineering' ? 'selected' : '' }}>Electrical Engineering</option>
                                <option value="Mechanical Engineering" {{ old('department') == 'Mechanical Engineering' ? 'selected' : '' }}>Mechanical Engineering</option>
                                <option value="Civil Engineering" {{ old('department') == 'Civil Engineering' ? 'selected' : '' }}>Civil Engineering</option>
                                <option value="Business Administration" {{ old('department') == 'Business Administration' ? 'selected' : '' }}>Business Administration</option>
                            </select>
                            <div class="absolute inset-y-0 right-0 pr-4 flex items-center pointer-events-none">
                                <i class="fas fa-chevron-down text-gray-400 text-sm"></i>
                            </div>
                        </div>
                        @error('department')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Session -->
                    <div>
                        <label for="session" class="block text-sm font-semibold text-gray-700 mb-2">Session</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <i class="fas fa-calendar-alt text-blue-400"></i>
                            </div>
                            <select id="session" name="session" required 
                                class="w-full pl-11 pr-10 py-3 rounded-xl border border-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 focus:outline-none transition-all text-gray-700 bg-gray-50 hover:bg-white focus:bg-white appearance-none">
                                <option value="" disabled selected>Select Session</option>
                                <option value="2021-2022" {{ old('session') == '2021-2022' ? 'selected' : '' }}>2021-2022</option>
                                <option value="2022-2023" {{ old('session') == '2022-2023' ? 'selected' : '' }}>2022-2023</option>
                                <option value="2023-2024" {{ old('session') == '2023-2024' ? 'selected' : '' }}>2023-2024</option>
                                <option value="2024-2025" {{ old('session') == '2024-2025' ? 'selected' : '' }}>2024-2025</option>
                                <option value="2025-2026" {{ old('session') == '2025-2026' ? 'selected' : '' }}>2025-2026</option>
                            </select>
                            <div class="absolute inset-y-0 right-0 pr-4 flex items-center pointer-events-none">
                                <i class="fas fa-chevron-down text-gray-400 text-sm"></i>
                            </div>
                        </div>
                        @error('session')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Registration Number -->
                    <div>
                        <label for="registration_number" class="block text-sm font-semibold text-gray-700 mb-2">Registration Number</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <i class="fas fa-id-card text-blue-400"></i>
                            </div>
                            <input id="registration_number" type="text" name="registration_number" value="{{ old('registration_number') }}" required 
                                class="w-full pl-11 pr-4 py-3 rounded-xl border border-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 focus:outline-none transition-all text-gray-700 bg-gray-50 hover:bg-white focus:bg-white" placeholder="Enter Registration No." />
                        </div>
                        @error('registration_number')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Roll Number -->
                    <div>
                        <label for="roll_number" class="block text-sm font-semibold text-gray-700 mb-2">Roll Number</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <i class="fas fa-list-ol text-blue-400"></i>
                            </div>
                            <input id="roll_number" type="text" name="roll_number" value="{{ old('roll_number') }}" required 
                                class="w-full pl-11 pr-4 py-3 rounded-xl border border-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 focus:outline-none transition-all text-gray-700 bg-gray-50 hover:bg-white focus:bg-white" placeholder="Enter Roll No." />
                        </div>
                        @error('roll_number')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>


                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Password -->
                    <div>
                        <label for="password" class="block text-sm font-semibold text-gray-700 mb-2">Create Password</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <i class="fas fa-lock text-blue-400"></i>
                            </div>
                            <input id="password" type="password" name="password" required autocomplete="new-password" 
                                class="w-full pl-11 pr-4 py-3 rounded-xl border border-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 focus:outline-none transition-all text-gray-700 bg-gray-50 hover:bg-white focus:bg-white" placeholder="Min. 8 characters" />
                        </div>
                        @error('password')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Confirm Password -->
                    <div>
                        <label for="password_confirmation" class="block text-sm font-semibold text-gray-700 mb-2">Confirm Password</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <i class="fas fa-key text-blue-400"></i>
                            </div>
                            <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" 
                                class="w-full pl-11 pr-4 py-3 rounded-xl border border-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 focus:outline-none transition-all text-gray-700 bg-gray-50 hover:bg-white focus:bg-white" placeholder="Repeat your password" />
                        </div>
                        @error('password_confirmation')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Profile Photo -->
                <div>
                    <label for="profile_photo" class="block text-sm font-semibold text-gray-700 mb-2">Profile Photo</label>
                    <div class="flex items-center justify-center w-full">
                        <label for="profile_photo" class="flex flex-col items-center justify-center w-full h-32 border-2 border-blue-200 border-dashed rounded-xl cursor-pointer bg-blue-50 hover:bg-blue-100 transition-all">
                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                <i class="fas fa-cloud-upload-alt text-3xl text-blue-400 mb-3"></i>
                                <p class="text-sm text-gray-600"><span class="font-semibold text-blue-600">Click to upload</span> or drag and drop</p>
                                <p class="text-xs text-gray-500 mt-1">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                            </div>
                            <input id="profile_photo" type="file" name="profile_photo" class="hidden" accept="image/*" required />
                        </label>
                    </div>
                    @error('profile_photo')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="pt-4">
                    <button type="submit" class="w-full flex justify-center items-center py-3.5 px-4 border border-transparent rounded-xl shadow-md text-base font-bold text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-all transform hover:scale-[1.01]">
                        <i class="fas fa-user-check mr-2 text-lg"></i> Register Membership
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

@push('scripts')
<script>
    // Show selected file name
    document.getElementById('profile_photo').addEventListener('change', function(e) {
        const fileName = e.target.files[0]?.name;
        if (fileName) {
            const labelText = this.parentElement.querySelector('p.text-sm');
            labelText.innerHTML = `<span class="font-semibold text-blue-600">Selected file:</span> ${fileName}`;
        }
    });
</script>
@endpush
@endsection
