@extends('layouts.app')

@section('title', 'Physiotherapy Services & Treatments in Nabadwip | Dr Sumalya Saha')
@section('meta_description', 'Comprehensive physiotherapy services including stroke rehab, pain management, post-surgical recovery, and frozen shoulder treatment by Dr. Sumalya Saha.')

@section('content')
    <!-- Page Header -->
    <div class="bg-primary-900 py-16 text-center text-white relative overflow-hidden">
        <div class="absolute inset-0 z-0 opacity-20">
            <svg class="h-full w-full" fill="none" stroke="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none">
                <path stroke-width="0.5" d="M0 100 V 50 Q 25 25 50 50 T 100 50 V 100 z"></path>
            </svg>
        </div>
        <div class="max-w-7xl mx-auto px-4 relative z-10">
            <h1 class="text-4xl font-extrabold mb-4">Our Services & Treatments</h1>
            <p class="text-lg text-primary-100 max-w-2xl mx-auto">Evidence-based physiotherapy tailored to your individual condition and goals.</p>
        </div>
    </div>

    <!-- Main Content -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-3xl font-extrabold text-gray-900 mb-6">What We Treat</h2>
                <p class="text-lg text-gray-600">At Dr. Sumalya Saha Physiotherapy Clinic, we specialize in a wide array of conditions, focusing on both rapid symptom relief and long-term functional improvement.</p>
            </div>

            <!-- Conditions Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Neurological -->
                <div class="bg-white rounded-2xl p-8 shadow-sm border border-gray-100 hover:shadow-md transition">
                    <div class="w-12 h-12 bg-primary-100 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 002-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Neurological Rehab</h3>
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex items-start"><svg class="w-5 h-5 text-primary-500 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Stroke / Hemiplegia</li>
                        <li class="flex items-start"><svg class="w-5 h-5 text-primary-500 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Paralysis Recovery</li>
                        <li class="flex items-start"><svg class="w-5 h-5 text-primary-500 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Parkinson's Disease</li>
                        <li class="flex items-start"><svg class="w-5 h-5 text-primary-500 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Multiple Sclerosis Rehab</li>
                        <li class="flex items-start"><svg class="w-5 h-5 text-primary-500 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Nerve Injuries (Foot/Wrist drop)</li>
                    </ul>
                </div>

                <!-- Orthopedic -->
                <div class="bg-white rounded-2xl p-8 shadow-sm border border-gray-100 hover:shadow-md transition">
                    <div class="w-12 h-12 bg-primary-100 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.121 14.121L19 19m-7-7l7-7m-7 7l-2.879 2.879M12 12L9.121 9.121m0 5.758a3 3 0 10-4.243 4.243 3 3 0 004.243-4.243zm0-5.758a3 3 0 10-4.243-4.243 3 3 0 004.243 4.243z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Orthopedic Therapy & Postsurgical</h3>
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex items-start"><svg class="w-5 h-5 text-primary-500 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Knee/Hip Replacement Rehab</li>
                        <li class="flex items-start"><svg class="w-5 h-5 text-primary-500 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Fracture Rehabilitation</li>
                        <li class="flex items-start"><svg class="w-5 h-5 text-primary-500 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Ligament (ACL/PCL) Tears</li>
                        <li class="flex items-start"><svg class="w-5 h-5 text-primary-500 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Osteoarthritis Management</li>
                        <li class="flex items-start"><svg class="w-5 h-5 text-primary-500 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Rheumatoid Arthritis Care</li>
                    </ul>
                </div>

                <!-- Spine & Musculoskeletal -->
                <div class="bg-white rounded-2xl p-8 shadow-sm border border-gray-100 hover:shadow-md transition">
                    <div class="w-12 h-12 bg-primary-100 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Spine & Joint Conditions</h3>
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex items-start"><svg class="w-5 h-5 text-primary-500 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Cervical Pattern (Neck Pain)</li>
                        <li class="flex items-start"><svg class="w-5 h-5 text-primary-500 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Lumbar Spondylosis (Back Pain)</li>
                        <li class="flex items-start"><svg class="w-5 h-5 text-primary-500 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Sciatica Neuralgia</li>
                        <li class="flex items-start"><svg class="w-5 h-5 text-primary-500 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Frozen Shoulder (Adhesive Capsulitis)</li>
                        <li class="flex items-start"><svg class="w-5 h-5 text-primary-500 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Postural Corrections</li>
                    </ul>
                </div>

                <!-- Pediatrics -->
                <div class="bg-white rounded-2xl p-8 shadow-sm border border-gray-100 hover:shadow-md transition">
                    <div class="w-12 h-12 bg-primary-100 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Pediatric Therapy</h3>
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex items-start"><svg class="w-5 h-5 text-primary-500 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Cerebral Palsy (CP) Management</li>
                        <li class="flex items-start"><svg class="w-5 h-5 text-primary-500 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Delayed Motor Milestones</li>
                        <li class="flex items-start"><svg class="w-5 h-5 text-primary-500 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Congenital Deformities Re-alignment</li>
                        <li class="flex items-start"><svg class="w-5 h-5 text-primary-500 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Post-botox Rehab for Spasticity</li>
                        <li class="flex items-start"><svg class="w-5 h-5 text-primary-500 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Handicapped Child Care</li>
                    </ul>
                </div>

                <!-- Sports Injuries -->
                <div class="bg-white rounded-2xl p-8 shadow-sm border border-gray-100 hover:shadow-md transition">
                    <div class="w-12 h-12 bg-primary-100 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Sports Injuries</h3>
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex items-start"><svg class="w-5 h-5 text-primary-500 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Muscle Strains & Ligament Sprains</li>
                        <li class="flex items-start"><svg class="w-5 h-5 text-primary-500 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Tennis/Golfer's Elbow</li>
                        <li class="flex items-start"><svg class="w-5 h-5 text-primary-500 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Plantar Fasciitis (Heel Pain)</li>
                        <li class="flex items-start"><svg class="w-5 h-5 text-primary-500 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Rotator Cuff Injuries</li>
                        <li class="flex items-start"><svg class="w-5 h-5 text-primary-500 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Return-to-sport Rehab Programs</li>
                    </ul>
                </div>

                <!-- Treatment Techniques -->
                <div class="bg-primary-50 rounded-2xl p-8 shadow-sm border border-primary-100 transition">
                    <h3 class="text-xl font-bold text-primary-900 mb-4">Our Techniques</h3>
                    <p class="text-primary-700 mb-4 text-sm font-medium">We utilize modern physiotherapeutic modalities combined with manual therapy:</p>
                    <ul class="space-y-2 text-primary-800 text-sm">
                        <li class="flex items-center"><span class="w-1.5 h-1.5 bg-primary-500 rounded-full mr-2"></span> Electrotherapy (TENS, IFT, Ultrasound)</li>
                        <li class="flex items-center"><span class="w-1.5 h-1.5 bg-primary-500 rounded-full mr-2"></span> Joint Mobilization Techniques</li>
                        <li class="flex items-center"><span class="w-1.5 h-1.5 bg-primary-500 rounded-full mr-2"></span> Soft Tissue Manipulation</li>
                        <li class="flex items-center"><span class="w-1.5 h-1.5 bg-primary-500 rounded-full mr-2"></span> Prescriptive Exercise Therapy</li>
                        <li class="flex items-center"><span class="w-1.5 h-1.5 bg-primary-500 rounded-full mr-2"></span> Gait Training</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-16 bg-white border-t border-gray-100">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold text-gray-900 mb-6">Unsure if physiotherapy can help your specific condition?</h2>
            <p class="text-lg text-gray-600 mb-8">Consult with Dr. Sumalya Saha to get a professional assessment and personalized advice.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ url('/contact') }}" class="px-8 py-4 bg-primary-600 hover:bg-primary-700 text-white font-bold rounded-xl shadow-md transition">
                    Contact Clinic Now
                </a>
                <a href="https://wa.me/919332996663" target="_blank" class="px-8 py-4 bg-green-500 hover:bg-green-600 text-white font-bold rounded-xl shadow-md transition flex items-center justify-center">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.347-.272.297-1.04 1.016-1.04 2.479 0 1.463 1.065 2.876 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                    Chat on WhatsApp
                </a>
            </div>
        </div>
    </section>
@endsection
