<header class="bg-white shadow-sm sticky top-0 z-40 transition-all duration-300" x-data="{ mobileMenuOpen: false }">
    <!-- Top Bar (Visible on larger screens) -->
    <div class="bg-primary-700 text-white text-sm py-2 px-4 hidden md:block">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <div class="flex space-x-6">
                <a href="mailto:info@drsumalyasaha.com" class="flex items-center hover:text-primary-200 transition">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    info@drsumalyasaha.com
                </a>
                <span class="flex items-center">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    Nabadwip, West Bengal
                </span>
            </div>
            <div class="flex space-x-4 items-center">
                <span class="font-medium flex items-center">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    Mon - Sat: 3:30 PM - 6:00 PM
                </span>
            </div>
        </div>
    </div>

    <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="{{ url('/') }}" class="flex items-center gap-3">
                    <div class="bg-primary-600 text-white rounded-lg p-2 flex items-center justify-center h-10 w-10">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                    </div>
                    <div>
                        <span class="text-xl font-bold text-gray-900 leading-tight block">Dr. Sumalya Saha</span>
                        <span class="text-xs text-primary-600 font-medium tracking-wide uppercase">Physiotherapy Clinic</span>
                    </div>
                </a>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="{{ url('/') }}" class="{{ request()->is('/') ? 'text-primary-600 font-semibold border-b-2 border-primary-600' : 'text-gray-600 hover:text-primary-600' }} px-1 py-1 transition-colors">Home</a>
                <a href="{{ url('/about') }}" class="{{ request()->is('about') ? 'text-primary-600 font-semibold border-b-2 border-primary-600' : 'text-gray-600 hover:text-primary-600' }} px-1 py-1 transition-colors">About Doctor</a>
                <a href="{{ url('/services') }}" class="{{ request()->is('services') ? 'text-primary-600 font-semibold border-b-2 border-primary-600' : 'text-gray-600 hover:text-primary-600' }} px-1 py-1 transition-colors">Services</a>
                <a href="{{ url('/contact') }}" class="{{ request()->is('contact') ? 'text-primary-600 font-semibold border-b-2 border-primary-600' : 'text-gray-600 hover:text-primary-600' }} px-1 py-1 transition-colors">Contact</a>
                
                <a href="tel:+919332996663" class="flex items-center text-primary-700 font-semibold hover:text-primary-900 transition ml-4">
                    <div class="bg-primary-100 p-2 rounded-full mr-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                    </div>
                    <div>
                        <div class="text-xs text-gray-500 font-normal">Call to Book</div>
                        <div class="text-sm">+91 9332996663</div>
                    </div>
                </a>

                <a href="{{ url('/contact') }}#appointment" class="bg-primary-600 hover:bg-primary-700 text-white px-5 py-2.5 rounded-lg font-medium transition shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                    Book Appointment
                </a>
            </div>

            <!-- Mobile menu button -->
            <div class="flex items-center md:hidden gap-4">
                <a href="tel:+919332996663" class="bg-primary-100 text-primary-700 p-2 rounded-full" aria-label="Call clinic">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                </a>
                <button type="button" @click="mobileMenuOpen = !mobileMenuOpen" class="inline-flex items-center justify-center p-2 rounded-md text-gray-600 hover:text-primary-600 hover:bg-primary-50 focus:outline-none transition-colors" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <!-- Icon when menu is closed -->
                    <svg x-show="!mobileMenuOpen" class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <!-- Icon when menu is open -->
                    <svg x-show="mobileMenuOpen" x-cloak class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </nav>

    <!-- Mobile Menu, show/hide based on menu state. -->
    <div x-show="mobileMenuOpen" 
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-2"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-2"
         @click.away="mobileMenuOpen = false"
         x-cloak
         class="md:hidden bg-white border-t border-gray-100 absolute w-full shadow-lg">
        <div class="px-4 pt-2 pb-6 space-y-1 sm:px-6">
            <a href="{{ url('/') }}" class="block px-3 py-3 rounded-md text-base font-medium {{ request()->is('/') ? 'bg-primary-50 text-primary-700' : 'text-gray-700 hover:bg-gray-50 hover:text-primary-600' }}">Home</a>
            <a href="{{ url('/about') }}" class="block px-3 py-3 rounded-md text-base font-medium {{ request()->is('about') ? 'bg-primary-50 text-primary-700' : 'text-gray-700 hover:bg-gray-50 hover:text-primary-600' }}">About Doctor</a>
            <a href="{{ url('/services') }}" class="block px-3 py-3 rounded-md text-base font-medium {{ request()->is('services') ? 'bg-primary-50 text-primary-700' : 'text-gray-700 hover:bg-gray-50 hover:text-primary-600' }}">Services</a>
            <a href="{{ url('/contact') }}" class="block px-3 py-3 rounded-md text-base font-medium {{ request()->is('contact') ? 'bg-primary-50 text-primary-700' : 'text-gray-700 hover:bg-gray-50 hover:text-primary-600' }}">Contact</a>
            
            <div class="pt-4 border-t border-gray-100 flex flex-col gap-3">
                <a href="{{ url('/contact') }}#appointment" class="w-full text-center bg-primary-600 text-white px-4 py-3 rounded-lg font-medium shadow">
                    Book Appointment
                </a>
            </div>
        </div>
    </div>
</header>
