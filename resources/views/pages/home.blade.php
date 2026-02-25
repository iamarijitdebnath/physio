@extends('layouts.app')

@section('title', 'Best Physiotherapist in Nabadwip | Dr Sumalay Saha Physiotherapy Clinic')
@section('meta_description', 'Expert physiotherapy treatment in Nabadwip for stroke, paralysis, knee pain, frozen shoulder, and rehabilitation by Dr Sumalay Saha.')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-white overflow-hidden pb-16 pt-8 md:pt-16 md:pb-24 lg:pb-32 lg:pt-24 z-10 w-full min-h-[90vh] flex items-center">
        <!-- Background Pattern -->
        <div class="hidden lg:block absolute inset-0 z-0">
            <svg class="absolute right-0 top-0 h-full w-1/2 transform translate-x-1/3 text-primary-50 opacity-50" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
                <polygon points="50,0 100,0 50,100 0,100" />
            </svg>
            <div class="absolute right-0 top-1/4 w-96 h-96 bg-primary-100 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob"></div>
            <div class="absolute right-32 top-1/3 w-72 h-72 bg-secondary-100 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob animation-delay-2000"></div>
            <div class="absolute right-16 bottom-1/4 w-80 h-80 bg-blue-100 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob animation-delay-4000"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full">
            <div class="lg:grid lg:grid-cols-12 lg:gap-8 items-center">
                <div class="sm:text-center md:max-w-2xl md:mx-auto lg:col-span-6 lg:text-left">
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-semibold tracking-wide uppercase bg-primary-50 text-primary-600 mb-6 border border-primary-100 shadow-sm animate-fade-in-up">
                        <span class="w-2 h-2 rounded-full bg-primary-500 mr-2 animate-pulse"></span>
                        Top Rated in Nabadwip
                    </span>
                    <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl lg:text-5xl xl:text-6xl leading-tight mb-4 animate-fade-in-up" style="animation-delay: 0.1s;">
                        <span class="block">Regain Your Strength</span>
                        <span class="block text-primary-600">& Mobility Today</span>
                    </h1>
                    <p class="mt-3 text-base text-gray-600 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0 font-medium leading-relaxed animate-fade-in-up" style="animation-delay: 0.2s;">
                        Expert physiotherapy care by Dr. Sumalay Saha. Specializing in stroke rehab, pain management, and personalized recovery plans to help you live pain-free.
                    </p>
                    
                    <div class="mt-8 sm:max-w-lg sm:mx-auto sm:text-center lg:text-left lg:mx-0 animate-fade-in-up flex flex-col sm:flex-row gap-4 justify-center lg:justify-start" style="animation-delay: 0.3s;">
                        <a href="{{ url('/contact') }}#appointment" class="inline-flex items-center justify-center px-8 py-4 border border-transparent text-base font-bold rounded-xl text-white bg-primary-600 hover:bg-primary-700 md:text-lg shadow-lg hover:shadow-xl hover:-translate-y-1 transition-all duration-300 w-full sm:w-auto">
                            Book Appointment
                            <svg class="ml-2 -mr-1 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </a>
                        <a href="tel:+919332996663" class="inline-flex items-center justify-center px-8 py-4 border-2 border-primary-100 text-base font-bold rounded-xl text-primary-700 bg-white hover:bg-primary-50 hover:border-primary-200 md:text-lg shadow-sm hover:shadow-md transition-all duration-300 w-full sm:w-auto">
                            <svg class="mr-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                            Call Us Now
                        </a>
                    </div>
                    
                    <!-- Trust Indicators -->
                    <div class="mt-8 flex items-center justify-center lg:justify-start gap-4 text-sm text-gray-500 font-medium animate-fade-in-up"  style="animation-delay: 0.4s;">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            Certified Professional
                        </div>
                        <div class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            Modern Facilities
                        </div>
                    </div>
                </div>
                
                <div class="mt-12 relative sm:max-w-lg sm:mx-auto lg:mt-0 lg:max-w-none lg:mx-0 lg:col-span-6 lg:flex lg:items-center">
                    <div class="relative mx-auto w-full lg:max-w-md animate-fade-in float-animation block">
                        <div class="relative block w-full bg-white rounded-3xl overflow-hidden shadow-2xl pb-[100%] sm:pb-[80%] border-4 border-white aspect-[4/5] lg:aspect-square">
                            <img class="absolute inset-0 w-full h-full object-cover rounded-2xl transform hover:scale-105 transition-transform duration-700" src="{{ asset('photo2.png') }}" alt="Physiotherapy treatment in progress">
                            <div class="absolute inset-0 bg-gradient-to-t from-gray-900/60 to-transparent"></div>
                            <div class="absolute bottom-6 left-6 right-6">
                                <div class="bg-white/95 backdrop-blur-sm p-4 rounded-xl shadow-lg border border-white/20">
                                    <div class="flex items-center gap-4">
                                        <div class="bg-primary-100 p-3 rounded-full flex-shrink-0">
                                            <svg class="w-6 h-6 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                        </div>
                                        <div>
                                            <p class="text-sm text-gray-500 font-medium">Quick Recovery</p>
                                            <p class="font-bold text-gray-900 leading-tight">Personalized Care</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Decorative elements -->
                        <div class="absolute -top-6 -right-6 w-24 h-24 bg-secondary-100 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob"></div>
                        <div class="absolute -bottom-6 -left-6 w-32 h-32 bg-primary-100 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob animation-delay-2000"></div>
                        
                        <div class="absolute top-1/2 -right-12 bg-white p-3 rounded-2xl shadow-xl flex items-center gap-3 animate-float hidden md:flex border border-gray-50">
                            <div class="flex -space-x-2">
                                <img class="w-8 h-8 rounded-full border-2 border-white" src="https://ui-avatars.com/api/?name=J+D&color=fff&background=3b82f6" alt="" />
                                <img class="w-8 h-8 rounded-full border-2 border-white" src="https://ui-avatars.com/api/?name=S+M&color=fff&background=10b981" alt="" />
                                <img class="w-8 h-8 rounded-full border-2 border-white" src="https://ui-avatars.com/api/?name=R+K&color=fff&background=f59e0b" alt="" />
                            </div>
                            <div>
                                <p class="text-xs font-bold text-gray-900">500+ Patients</p>
                                <p class="text-[10px] text-gray-500">Treated Successfully</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section Prefix -->
    <section class="py-20 bg-gray-50 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div class="order-2 lg:order-1">
                    <div class="relative inline-block w-full">
                        <div class="absolute -inset-4 bg-gradient-to-r from-primary-100 to-secondary-100 rounded-[2.5rem] transform rotate-3 scale-105 opacity-50 blur-sm"></div>
                        <img src="{{ asset('photo3.png') }}" alt="Dr Sumalay Saha" class="relative rounded-3xl shadow-xl w-full object-cover aspect-[4/3] lg:aspect-[3/4] border-4 border-white z-10">
                        <div class="absolute -bottom-6 -right-6 bg-white p-6 rounded-2xl shadow-xl z-20 border border-gray-50">
                            <p class="text-3xl font-extrabold text-primary-600 mb-1">10+</p>
                            <p class="text-sm font-semibold text-gray-600 uppercase tracking-wide">Years Experience</p>
                        </div>
                    </div>
                </div>
                <div class="order-1 lg:order-2">
                    <span class="text-primary-600 font-bold tracking-wider uppercase text-sm mb-4 block">About Our Doctor</span>
                    <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl mb-6">Expert Care by <br/><span class="text-primary-600">Dr. Sumalay Saha</span></h2>
                    <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                        With over a decade of experience in advanced physiotherapy, Dr. Sumalay Saha provides comprehensive care for various orthopedic and neurological conditions.
                    </p>
                    
                    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 mb-8">
                        <h3 class="font-bold text-gray-900 mb-4 border-b pb-2">Credentials</h3>
                        <ul class="space-y-4">
                            <li class="flex items-start">
                                <div class="flex-shrink-0 h-6 w-6 rounded-full bg-primary-100 flex items-center justify-center mt-0.5">
                                    <svg class="h-4 w-4 text-primary-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                </div>
                                <p class="ml-3 text-base font-medium text-gray-700">DPT (SMFWB), BPT (WBUHS)</p>
                            </li>
                            <li class="flex items-start">
                                <div class="flex-shrink-0 h-6 w-6 rounded-full bg-primary-100 flex items-center justify-center mt-0.5">
                                    <svg class="h-4 w-4 text-primary-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                </div>
                                <p class="ml-3 text-base font-medium text-gray-700">Senior Physiotherapist</p>
                            </li>
                            <li class="flex items-start">
                                <div class="flex-shrink-0 h-6 w-6 rounded-full bg-primary-100 flex items-center justify-center mt-0.5">
                                    <svg class="h-4 w-4 text-primary-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                </div>
                                <p class="ml-3 text-base font-medium text-gray-700">Attached with Ministry of Defence (Govt. of India)</p>
                            </li>
                        </ul>
                    </div>

                    <a href="{{ url('/about') }}" class="inline-flex items-center text-primary-600 font-semibold hover:text-primary-800 text-lg transition group">
                        Learn more about Dr. Saha
                        <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-24 bg-white relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-primary-600 font-bold tracking-wider uppercase text-sm mb-4 block">Treatments & Services</span>
                <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl mb-4">Comprehensive Physiotherapy Care</h2>
                <p class="text-xl text-gray-600">We offer specialized treatments for a wide range of conditions using modern evidence-based techniques.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <x-service-card 
                    title="Stroke & Paralysis Rehab" 
                    description="Specialized neurological rehabilitation programs to restore mobility, strength, and independence after a stroke."
                    icon='<svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 002-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>'
                />
                
                <x-service-card 
                    title="Pain Management" 
                    description="Effective treatment for acute and chronic pain conditions like neck pain, backache, sciatica, and joint pain."
                    icon='<svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>'
                />
                
                <x-service-card 
                    title="Post-Surgical Rehab" 
                    description="Structured rehabilitation for knee & hip replacements, fractures, and other orthopedic surgeries to ensure optimal recovery."
                    icon='<svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.121 14.121L19 19m-7-7l7-7m-7 7l-2.879 2.879M12 12L9.121 9.121m0 5.758a3 3 0 10-4.243 4.243 3 3 0 004.243-4.243zm0-5.758a3 3 0 10-4.243-4.243 3 3 0 004.243 4.243z"></path></svg>'
                />

                <x-service-card 
                    title="Spondylitis Treatment" 
                    description="Targeted exercises and manual therapy to relieve stiffness and pain caused by cervical and lumbar spondylosis."
                    icon='<svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"></path></svg>'
                />

                <x-service-card 
                    title="Frozen Shoulder" 
                    description="Advanced mobilization techniques and exercises to restore range of motion and reduce pain in the shoulder joint."
                    icon='<svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 11.5V14m0-2.5v-6a1.5 1.5 0 113 0m-3 6a1.5 1.5 0 00-3 0v2a7.5 7.5 0 0015 0v-5a1.5 1.5 0 00-3 0m-6-3V11m0-5.5v-1a1.5 1.5 0 013 0v1m0 0V11m0-5.5a1.5 1.5 0 013 0v3m0 0V11"></path></svg>'
                />

                <x-service-card 
                    title="Pediatric Therapy" 
                    description="Compassionate care and specialized therapy programs tailored for handicapped and specially-abled children."
                    icon='<svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>'
                />
            </div>

            <div class="mt-12 text-center">
                <a href="{{ url('/services') }}" class="inline-flex items-center px-6 py-3 border border-gray-300 shadow-sm text-base font-medium rounded-lg text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 transition">
                    View All Treatments
                </a>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="py-20 bg-primary-900 text-white relative overflow-hidden">
        <!-- SVG background pattern -->
        <svg class="absolute inset-0 w-full h-full opacity-10" fill="none" stroke="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none">
            <path stroke-width="0.5" d="M0 100 V 50 Q 25 25 50 50 T 100 50 V 100 z"></path>
        </svg>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
                <div>
                    <h2 class="text-3xl font-extrabold sm:text-4xl mb-6">Why Choose Our Clinic?</h2>
                    <p class="text-lg text-primary-100 mb-8 leading-relaxed">
                        We blend clinical expertise with compassionate care. Our goal is not just to treat symptoms, but to address the root cause of your condition to prevent future recurrence.
                    </p>
                    
                    <ul class="space-y-6">
                        <li class="flex items-start">
                            <div class="flex-shrink-0 h-10 w-10 rounded-lg bg-primary-800 flex items-center justify-center border border-primary-700">
                                <svg class="h-6 w-6 text-primary-300" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-lg font-bold">Experienced Specialist</h4>
                                <p class="mt-1 text-primary-200">Highly qualified physiotherapist with extensive government hospital experience.</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <div class="flex-shrink-0 h-10 w-10 rounded-lg bg-primary-800 flex items-center justify-center border border-primary-700">
                                <svg class="h-6 w-6 text-primary-300" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-lg font-bold">Personalized Treatment Plans</h4>
                                <p class="mt-1 text-primary-200">Customized rehabilitation programs tailored to your specific needs and goals.</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <div class="flex-shrink-0 h-10 w-10 rounded-lg bg-primary-800 flex items-center justify-center border border-primary-700">
                                <svg class="h-6 w-6 text-primary-300" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-lg font-bold">Modern Techniques</h4>
                                <p class="mt-1 text-primary-200">Utilizing the latest evidence-based physical therapy methods and equipment.</p>
                            </div>
                        </li>
                    </ul>
                </div>
                
                <div class="relative">
                    <div class="bg-white rounded-2xl p-8 shadow-2xl pb-10">
                        <h3 class="text-2xl font-bold text-gray-900 mb-6 text-center">Clinic Hours</h3>
                        <div class="space-y-4">
                            <div class="flex justify-between items-center py-3 border-b border-gray-100">
                                <span class="text-gray-600 font-medium">Monday</span>
                                <span class="text-gray-900 font-bold">3:30 PM - 6:00 PM</span>
                            </div>
                            <div class="flex justify-between items-center py-3 border-b border-gray-100">
                                <span class="text-gray-600 font-medium">Tuesday</span>
                                <span class="text-gray-900 font-bold">3:30 PM - 6:00 PM</span>
                            </div>
                            <div class="flex justify-between items-center py-3 border-b border-gray-100">
                                <span class="text-gray-600 font-medium">Wednesday</span>
                                <span class="text-gray-900 font-bold">3:30 PM - 6:00 PM</span>
                            </div>
                            <div class="flex justify-between items-center py-3 border-b border-gray-100">
                                <span class="text-gray-600 font-medium">Thursday</span>
                                <span class="text-gray-900 font-bold">3:30 PM - 6:00 PM</span>
                            </div>
                            <div class="flex justify-between items-center py-3 border-b border-gray-100">
                                <span class="text-gray-600 font-medium">Friday</span>
                                <span class="text-gray-900 font-bold">3:30 PM - 6:00 PM</span>
                            </div>
                            <div class="flex justify-between items-center py-3 border-b border-gray-100">
                                <span class="text-gray-600 font-medium">Saturday</span>
                                <span class="text-gray-900 font-bold">3:30 PM - 6:00 PM</span>
                            </div>
                            <div class="flex justify-between items-center py-3">
                                <span class="text-red-500 font-medium">Sunday</span>
                                <span class="text-red-500 font-bold">Closed</span>
                            </div>
                        </div>
                        <div class="mt-8 text-center">
                            <a href="{{ url('/contact') }}#appointment" class="inline-block w-full bg-primary-600 hover:bg-primary-700 text-white font-bold py-3 px-6 rounded-lg transition shadow-md">
                                Request an Appointment
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-primary-600 font-bold tracking-wider uppercase text-sm mb-4 block">Patient Stories</span>
                <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl mb-4">What Our Patients Say</h2>
                <p class="text-xl text-gray-600">Real stories of recovery and healing from our clinic.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <x-testimonial-card 
                    name="Arijit Debnath"
                    condition="Muscle Weakness"
                    text="I visited the clinic after my collar bone fracture because I was having severe muscle weakness and difficulty moving my shoulder and arm. Dr. Sumalay Saha guided me through proper physiotherapy exercises and treatment sessions very patiently. Within a few weeks, I noticed significant improvement in my strength and mobility. His behavior with patients is very friendly and motivating, which helped me recover faster and regain confidence. I highly recommend this clinic for post-fracture rehabilitation and muscle recovery."
                />
                
                <x-testimonial-card 
                    name="Ayan Mahato"
                    condition="Ligament Injury"
                    text="I had a knee ligament injury that caused pain, instability, and difficulty walking. After starting treatment with Dr. Sumalay Saha, my condition improved greatly. The therapy sessions, exercises, and guidance were very effective, and the doctor explained everything clearly. Now I can walk comfortably with much less pain. The clinic environment is very supportive, and the care provided is excellent. I would strongly recommend this clinic for knee injuries and ligament problems."
                />
                
                <x-testimonial-card 
                    name="Sankar Ghosh"
                    condition="Knee Pain & Arthritis"
                    text="The pain management techniques used by Dr. Sumalay are superb. I avoided a knee replacement surgery through his guided physiotherapy plan. He explains the condition very well and builds confidence."
                />
            </div>
        </div>
    </section>

    <!-- Location & CTA Section -->
    <section class="py-0 bg-white" id="contact">
        <div class="grid grid-cols-1 lg:grid-cols-2">
            <!-- Map Container -->
            <div class="h-[400px] lg:h-auto w-full bg-gray-200">
                <!-- Replace with actual Google Maps Embed Iframe. Using a placeholder for now -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3661.415709350629!2d88.3738866273906!3d23.409345712026223!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f91d27c70e17a3%3A0xe5b95d43f925af3e!2sSpecialist%20PHYSIOTHERAPY%20Clinic%2CNABADWIP%2C%20DR.%20SUMALYA%20SAHA%20(PT)!5e0!3m2!1sen!2sin!4v1772001559410!5m2!1sen!2sin" class="w-full h-full object-cover" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <!-- Quick Contact Form -->
            <div class="p-8 sm:p-12 lg:p-16 xl:p-20 bg-white">
                <h2 class="text-3xl font-extrabold text-gray-900 mb-2">Visit Our Clinic</h2>
                <p class="text-gray-600 mb-8">Located in the heart of Nabadwip. Easy access and comfortable environment.</p>
                
                <div class="space-y-6 mb-10">
                    <div class="flex items-start">
                        <div class="flex-shrink-0 mt-1">
                            <svg class="w-6 h-6 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        </div>
                        <div class="ml-4">
                            <h4 class="text-lg font-bold text-gray-900">Address</h4>
                            <p class="mt-1 text-gray-600">Nabadwip, Nadia<br>West Bengal, India - 741302</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start">
                        <div class="flex-shrink-0 mt-1">
                            <svg class="w-6 h-6 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        </div>
                        <div class="ml-4">
                            <h4 class="text-lg font-bold text-gray-900">Phone</h4>
                            <p class="mt-1"><a href="tel:+919332996663" class="text-primary-600 hover:text-primary-800 transition font-medium">+91 9332996663</a></p>
                            <p><a href="tel:+919332996000" class="text-primary-600 hover:text-primary-800 transition font-medium">+91 9332996000</a></p>
                        </div>
                    </div>
                </div>

                <div class="bg-primary-50 rounded-2xl p-6 border border-primary-100">
                    <h3 class="text-xl font-bold text-primary-900 mb-2">Ready to start recovery?</h3>
                    <p class="text-primary-700 mb-6">Call us directly to schedule your appointment.</p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="tel:+919332996663" class="flex-1 text-center bg-primary-600 hover:bg-primary-700 text-white font-bold py-3 px-6 rounded-lg transition shadow-md">
                            Call Now
                        </a>
                        <a href="https://wa.me/919332996663" target="_blank" class="flex-1 text-center bg-green-500 hover:bg-green-600 text-white font-bold py-3 px-6 rounded-lg transition shadow-md flex items-center justify-center">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.347-.272.297-1.04 1.016-1.04 2.479 0 1.463 1.065 2.876 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                            WhatsApp
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
