@extends('layouts.app')

@section('title', 'About Dr Sumalya Saha | Expert Physiotherapist in Nabadwip')
@section('meta_description', 'Learn about Dr. Sumalya Saha, a highly qualified and experienced physiotherapist in Nabadwip specializing in neurological and orthopedic rehabilitation.')

@section('content')
    <!-- Page Header -->
    <div class="bg-primary-900 py-16 text-center text-white relative overflow-hidden">
        <div class="absolute inset-0 z-0 opacity-20">
            <svg class="h-full w-full" fill="none" stroke="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none">
                <path stroke-width="0.5" d="M0 100 V 50 Q 25 25 50 50 T 100 50 V 100 z"></path>
            </svg>
        </div>
        <div class="max-w-7xl mx-auto px-4 relative z-10">
            <h1 class="text-4xl font-extrabold mb-4">About Dr. Sumalya Saha</h1>
            <p class="text-lg text-primary-100 max-w-2xl mx-auto">Dedicated to restoring your mobility, strength, and quality of life through advanced physiotherapy.</p>
        </div>
    </div>

    <!-- Main About Content -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:grid lg:grid-cols-12 lg:gap-16 items-start">
                
                <!-- Image Column -->
                <div class="lg:col-span-5 mb-12 lg:mb-0">
                    <div class="sticky top-28">
                        <div class="relative">
                            <div class="absolute inset-0 bg-primary-100 rounded-3xl transform translate-x-4 translate-y-4"></div>
                            <img src="{{ asset('photo.png') }}" alt="Dr Sumalya Saha Portrait" class="relative rounded-3xl shadow-xl w-full object-cover border-4 border-white aspect-[3/4]">
                        </div>
                        
                        <div class="mt-8 bg-gray-50 p-6 rounded-2xl border border-gray-100">
                            <h3 class="font-bold text-gray-900 mb-4 text-lg border-b pb-2">Quick Facts</h3>
                            <ul class="space-y-3">
                                <li class="flex items-center text-gray-700">
                                    <svg class="w-5 h-5 text-primary-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                    10+ Years Experience
                                </li>
                                <li class="flex items-center text-gray-700">
                                    <svg class="w-5 h-5 text-primary-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                                    Govt. of India Attached
                                </li>
                                <li class="flex items-center text-gray-700">
                                    <svg class="w-5 h-5 text-primary-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                                    1000+ Patients Treated
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Text Content Column -->
                <div class="lg:col-span-7 prose prose-lg prose-primary max-w-none text-gray-600">
                    <h2 class="text-3xl font-extrabold text-gray-900 mb-6 font-sans">Passion for Healing, Commitment to Excellence</h2>
                    
                    <p class="lead text-xl text-gray-500 font-medium mb-6">
                        Dr. Sumalya Saha is a highly esteemed physiotherapist based in Nabadwip, recognized for his patient-centric approach and exceptional clinical success rates, especially in neurological and post-surgical rehabilitation.
                    </p>

                    <p class="mb-6">
                        With formal medical training and extensive practical experience, Dr. Saha believes that complete recovery requires more than just temporary pain relief. He focuses on comprehensive diagnosis, biomechanical correction, and sustained strengthening to ensure long-term wellness for his patients.
                    </p>

                    <h3 class="text-2xl font-bold text-gray-900 mt-10 mb-4 border-b border-gray-200 pb-2">Academic Credentials</h3>
                    <ul class="space-y-4 list-none pl-0">
                        <li class="flex items-start bg-gray-50 p-4 rounded-lg">
                            <div class="flex-shrink-0 mt-1 mr-4">
                                <div class="w-8 h-8 rounded-full bg-primary-100 flex items-center justify-center text-primary-600 font-bold">1</div>
                            </div>
                            <div>
                                <h4 class="text-lg font-bold text-gray-900 m-0">Bachelor of Physiotherapy (BPT)</h4>
                                <p class="m-0 text-sm">West Bengal University of Health Sciences (WBUHS)</p>
                            </div>
                        </li>
                        <li class="flex items-start bg-gray-50 p-4 rounded-lg">
                            <div class="flex-shrink-0 mt-1 mr-4">
                                <div class="w-8 h-8 rounded-full bg-primary-100 flex items-center justify-center text-primary-600 font-bold">2</div>
                            </div>
                            <div>
                                <h4 class="text-lg font-bold text-gray-900 m-0">Diploma in Physiotherapy (DPT)</h4>
                                <p class="m-0 text-sm">State Medical Faculty of West Bengal (SMFWB)</p>
                            </div>
                        </li>
                    </ul>

                    <h3 class="text-2xl font-bold text-gray-900 mt-10 mb-4 border-b border-gray-200 pb-2">Professional Affiliations</h3>
                    <div class="bg-blue-50 border-l-4 border-blue-500 p-6 rounded-r-lg mb-8">
                        <h4 class="text-lg font-bold text-gray-900 m-0 flex items-center gap-2">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                            Ministry of Defence (Government of India)
                        </h4>
                        <p class="mt-2 text-gray-700">Currently serving as an attached Senior Physiotherapist, providing elite rehabilitative care and structural assessment to defense personnel.</p>
                    </div>

                    <h3 class="text-2xl font-bold text-gray-900 mt-10 mb-4 border-b border-gray-200 pb-2">Treatment Philosophy</h3>
                    <p class="mb-4">
                        "I believe that the human body has an incredible capacity to heal itself, provided it is given the correct physical guidance and biomechanical environment. My role is to facilitate that healing process through evidence-based manual therapy, targeted movement, and patient education."
                    </p>
                    <p>
                        Every treatment plan is highly individualized. A protocol that works for one patient's frozen shoulder might not perfectly suit another depending on their age, lifestyle, and underlying conditions.
                    </p>

                    <div class="mt-12 pt-8 border-t border-gray-200 text-center lg:text-left">
                        <p class="text-lg font-medium text-gray-900 mb-4">Start your journey to recovery today.</p>
                        <a href="{{ url('/contact') }}#appointment" class="inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-bold rounded-xl text-white bg-primary-600 hover:bg-primary-700 shadow-md transition-colors">
                            Book a Consultation
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
