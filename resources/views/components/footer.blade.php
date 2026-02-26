<footer class="bg-gray-900 text-gray-300 pt-16 pb-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-12">
            
            <!-- Clinic Info -->
            <div>
                <a href="{{ url('/') }}" class="inline-block mb-6">
                    <span class="text-2xl font-bold text-white block">Dr. Sumalya Saha</span>
                    <span class="text-sm text-primary-400 font-medium tracking-wide uppercase">Physiotherapy Clinic</span>
                </a>
                <p class="text-gray-400 mb-6 leading-relaxed text-sm">
                    Providing expert corporate and personal physiotherapy treatment in Nabadwip. Specialized in stroke rehabilitation, pain management, and post-surgical recovery.
                </p>
                <div class="flex space-x-4 pr-4">
                    <a href="#" class="text-gray-400 hover:text-primary-400 transition" aria-label="Facebook">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"/></svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-primary-400 transition" aria-label="Twitter">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"/></svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-primary-400 transition" aria-label="WhatsApp">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.347-.272.297-1.04 1.016-1.04 2.479 0 1.463 1.065 2.876 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="px-0 lg:px-6">
                <h3 class="text-white text-lg font-semibold mb-6 pb-2 border-b border-gray-800">Quick Links</h3>
                <ul class="space-y-3">
                    <li><a href="{{ url('/') }}" class="text-gray-400 hover:text-primary-400 transition flex items-center"><svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>Home</a></li>
                    <li><a href="{{ url('/about') }}" class="text-gray-400 hover:text-primary-400 transition flex items-center"><svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>About Doctor</a></li>
                    <li><a href="{{ url('/services') }}" class="text-gray-400 hover:text-primary-400 transition flex items-center"><svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>Services & Treatments</a></li>
                    <li><a href="{{ url('/contact') }}" class="text-gray-400 hover:text-primary-400 transition flex items-center"><svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>Contact Clinic</a></li>
                    <li><a href="{{ url('/contact') }}#appointment" class="text-primary-400 hover:text-primary-300 font-medium transition flex items-center mt-2">Book an Appointment &rarr;</a></li>
                </ul>
            </div>

            <!-- Treatments -->
            <div>
                <h3 class="text-white text-lg font-semibold mb-6 pb-2 border-b border-gray-800">Key Treatments</h3>
                <ul class="space-y-3">
                    <li class="flex items-start text-gray-400 text-sm">
                        <svg class="w-5 h-5 text-primary-500 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        Stroke & Paralysis Rehab
                    </li>
                    <li class="flex items-start text-gray-400 text-sm">
                        <svg class="w-5 h-5 text-primary-500 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        Spondylitis Treatment
                    </li>
                    <li class="flex items-start text-gray-400 text-sm">
                        <svg class="w-5 h-5 text-primary-500 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        Handicapped Child Therapy
                    </li>
                    <li class="flex items-start text-gray-400 text-sm">
                        <svg class="w-5 h-5 text-primary-500 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        Knee & Hip Rep. Rehab
                    </li>
                    <li class="flex items-start text-gray-400 text-sm">
                        <svg class="w-5 h-5 text-primary-500 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        Frozen Shoulder & Pain Relief
                    </li>
                </ul>
            </div>

            <!-- Contact Information -->
            <div>
                <h3 class="text-white text-lg font-semibold mb-6 pb-2 border-b border-gray-800">Contact Us</h3>
                <ul class="space-y-4 shadow-sm pb-1">
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-primary-500 mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        <span class="text-gray-400 text-sm leading-relaxed">
                            Nabadwip, Nadia<br>
                            West Bengal, India - 741302
                        </span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-primary-500 mr-3 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        <div class="flex flex-col">
                            <a href="tel:+9332996663" class="text-gray-400 hover:text-white transition text-sm">+91 9332996663</a>
                            <a href="tel:+916295304930" class="text-gray-400 hover:text-white transition text-sm">+91 6295304930</a>
                        </div>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-primary-500 mr-3 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        <span class="text-gray-400 text-sm leading-relaxed">
                            <strong>Mon - Sat:</strong><br>
                            3:30 PM - 6:00 PM<br>
                            <span class="text-xs italic mt-1 block">Prior appointment recommended</span>
                        </span>
                    </li>
                </ul>
            </div>

        </div>

        <div class="border-t border-gray-800 pt-8 mt-4 md:flex md:items-center md:justify-between text-center md:text-left">
            <p class="text-gray-500 text-sm">
                &copy; {{ date('Y') }} Dr. Sumalya Saha Physiotherapy Clinic. All rights reserved.
            </p>
            <p class="text-gray-500 text-sm mt-2 md:mt-0">
                Designed & Developed for Local Excellence
            </p>
        </div>
    </div>
</footer>
