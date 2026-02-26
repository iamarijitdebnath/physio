@extends('layouts.app')

@section('title', 'Contact Us & Book Appointment | Dr Sumalya Saha Physiotherapy Clinic')
@section('meta_description', 'Contact Dr. Sumalya Saha in Nabadwip for expert physiotherapy. Book your appointment online for stroke, pain management, and orthopedic rehabilitation.')

@section('content')
    <!-- Page Header -->
    <div class="bg-primary-900 py-16 text-center text-white relative overflow-hidden">
        <div class="absolute inset-0 z-0 opacity-20">
            <svg class="h-full w-full" fill="none" stroke="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none">
                <path stroke-width="0.5" d="M0 100 V 50 Q 25 25 50 50 T 100 50 V 100 z"></path>
            </svg>
        </div>
        <div class="max-w-7xl mx-auto px-4 relative z-10">
            <h1 class="text-4xl font-extrabold mb-4">Contact & Appointments</h1>
            <p class="text-lg text-primary-100 max-w-2xl mx-auto">We are here to help you get back to your best. Get in touch or book an appointment today.</p>
        </div>
    </div>

    <section class="py-20 bg-gray-50 relative z-10 -mt-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
                
                <!-- Contact Information & Map -->
                <div class="lg:col-span-5 space-y-8">
                    <div class="bg-white rounded-2xl shadow-xl p-8 border border-gray-100">
                        <h3 class="text-2xl font-bold text-gray-900 mb-6">Clinic Information</h3>
                        
                        <div class="space-y-6">
                            <div class="flex items-start">
                                <div class="flex-shrink-0 w-12 h-12 bg-primary-50 rounded-xl flex items-center justify-center border border-primary-100">
                                    <svg class="w-6 h-6 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-lg font-semibold text-gray-900">Our Location</h4>
                                    <p class="mt-1 text-gray-600">Nabadwip, Nadia<br>West Bengal, India - 741302</p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div class="flex-shrink-0 w-12 h-12 bg-primary-50 rounded-xl flex items-center justify-center border border-primary-100">
                                    <svg class="w-6 h-6 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-lg font-semibold text-gray-900">Phone Numbers</h4>
                                    <p class="mt-1"><a href="tel:+919332996663" class="text-primary-600 hover:text-primary-800 transition">+91 9332996663</a></p>
                                    <p><a href="tel:+916295304930" class="text-primary-600 hover:text-primary-800 transition">+91 6295304930</a></p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="flex-shrink-0 w-12 h-12 bg-primary-50 rounded-xl flex items-center justify-center border border-primary-100">
                                    <svg class="w-6 h-6 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-lg font-semibold text-gray-900">Email Address</h4>
                                    <p class="mt-1"><a href="mailto:info@drsumalyasaha.com" class="text-primary-600 hover:text-primary-800 transition">info@drsumalyasaha.com</a></p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div class="flex-shrink-0 w-12 h-12 bg-primary-50 rounded-xl flex items-center justify-center border border-primary-100">
                                    <svg class="w-6 h-6 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-lg font-semibold text-gray-900">Working Hours</h4>
                                    <p class="mt-1 text-gray-600">Mon - Sat: 3:30 PM - 6:00 PM<br>Sunday: Closed</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Map -->
                    <div class="bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-100 h-80 relative">
                        <!-- Placeholder for actual map embed -->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3661.415709350629!2d88.3738866273906!3d23.409345712026223!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f91d27c70e17a3%3A0xe5b95d43f925af3e!2sSpecialist%20PHYSIOTHERAPY%20Clinic%2CNABADWIP%2C%20DR.%20SUMALYA%20SAHA%20(PT)!5e0!3m2!1sen!2sin!4v1772001559410!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

                <!-- Appointment Form -->
                <div class="lg:col-span-7" id="appointment">
                    <div class="bg-white rounded-3xl shadow-xl overflow-hidden border border-gray-100">
                        <div class="bg-primary-600 py-6 px-8 sm:px-10">
                            <h3 class="text-2xl font-bold text-white mb-1">Book an Appointment</h3>
                            <p class="text-primary-100">Fill out the form below and we'll get back to you shortly to confirm your visit.</p>
                        </div>
                        
                        <div class="p-8 sm:p-10">
                            @if(session('success'))
                                <div class="mb-6 bg-green-50 border-l-4 border-green-500 p-4 rounded-md">
                                    <div class="flex">
                                        <div class="flex-shrink-0">
                                            <svg class="h-5 w-5 text-green-400" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" /></svg>
                                        </div>
                                        <div class="ml-3">
                                            <p class="text-sm text-green-700 font-medium">
                                                {{ session('success') }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            <form action="{{ route('appointment.store') }}" method="POST" class="space-y-6">
                                @csrf
                                
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                                    <div>
                                        <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Full Name <span class="text-red-500">*</span></label>
                                        <input type="text" name="name" id="name" required value="{{ old('name') }}" class="w-full rounded-lg border-gray-300 shadow-sm focus:border-primary-500 focus:ring-primary-500 py-3 px-4 bg-gray-50 hover:bg-white transition @error('name') border-red-500 @enderror" placeholder="John Doe">
                                        @error('name') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                                    </div>
                                    
                                    <div>
                                        <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Phone Number <span class="text-red-500">*</span></label>
                                        <input type="tel" name="phone" id="phone" required value="{{ old('phone') }}" class="w-full rounded-lg border-gray-300 shadow-sm focus:border-primary-500 focus:ring-primary-500 py-3 px-4 bg-gray-50 hover:bg-white transition @error('phone') border-red-500 @enderror" placeholder="+91 9876543210">
                                        @error('phone') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                                    </div>
                                </div>

                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                                    <div>
                                        <label for="date" class="block text-sm font-medium text-gray-700 mb-1">Preferred Date <span class="text-red-500">*</span></label>
                                        <input type="date" name="date" id="date" required value="{{ old('date') }}" class="w-full rounded-lg border-gray-300 shadow-sm focus:border-primary-500 focus:ring-primary-500 py-3 px-4 bg-gray-50 hover:bg-white transition @error('date') border-red-500 @enderror" min="{{ date('Y-m-d') }}">
                                        @error('date') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                                    </div>
                                    
                                    <div>
                                        <label for="treatment_type" class="block text-sm font-medium text-gray-700 mb-1">What do you need help with?</label>
                                        <select name="treatment_type" id="treatment_type" class="w-full rounded-lg border-gray-300 shadow-sm focus:border-primary-500 focus:ring-primary-500 py-3 px-4 bg-gray-50 hover:bg-white transition @error('treatment_type') border-red-500 @enderror">
                                            <option value="" disabled selected>Select a condition (optional)</option>
                                            <option value="Stroke Rehab" {{ old('treatment_type') == 'Stroke Rehab' ? 'selected' : '' }}>Stroke / Paralysis</option>
                                            <option value="Neck/Back Pain" {{ old('treatment_type') == 'Neck/Back Pain' ? 'selected' : '' }}>Neck/Back Pain (Spondylitis)</option>
                                            <option value="Joint Pain" {{ old('treatment_type') == 'Joint Pain' ? 'selected' : '' }}>Joint Pain / Arthritis</option>
                                            <option value="Post Surgical" {{ old('treatment_type') == 'Post Surgical' ? 'selected' : '' }}>Post-Surgical Rehab</option>
                                            <option value="Frozen Shoulder" {{ old('treatment_type') == 'Frozen Shoulder' ? 'selected' : '' }}>Frozen Shoulder</option>
                                            <option value="Sports Injury" {{ old('treatment_type') == 'Sports Injury' ? 'selected' : '' }}>Sports Injury</option>
                                            <option value="Pediatric" {{ old('treatment_type') == 'Pediatric' ? 'selected' : '' }}>Pediatric Physical Therapy</option>
                                            <option value="Other" {{ old('treatment_type') == 'Other' ? 'selected' : '' }}>Other</option>
                                        </select>
                                    </div>
                                </div>

                                <div>
                                    <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Additional Details (Optional)</label>
                                    <textarea name="message" id="message" rows="4" class="w-full rounded-lg border-gray-300 shadow-sm focus:border-primary-500 focus:ring-primary-500 py-3 px-4 bg-gray-50 hover:bg-white transition @error('message') border-red-500 @enderror" placeholder="Briefly describe your pain or condition...">{{ old('message') }}</textarea>
                                </div>
                                
                                <!-- Honeypot -->
                                <div class="hidden">
                                    <input type="text" name="bot_check" id="bot_check">
                                </div>

                                <div>
                                    <button type="submit" class="w-full flex justify-center items-center py-4 px-8 border border-transparent rounded-xl shadow-lg text-lg font-bold text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 transition-all transform hover:-translate-y-1">
                                        Request Appointment
                                        <svg class="ml-2 -mr-1 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                                    </button>
                                </div>
                                <p class="text-xs text-center text-gray-500 mt-4">
                                    By submitting this form, you agree to our clinic's <a href="#" class="underline hover:text-primary-600">privacy policy</a>.
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
