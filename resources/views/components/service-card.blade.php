@props([
    'icon' => '<svg class="w-6 h-6 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>',
    'title',
    'description',
    'link' => '/services'
])

<div class="bg-white rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 p-8 transition-all duration-300 transform hover:-translate-y-1 group">
    <div class="w-14 h-14 bg-primary-50 rounded-xl flex items-center justify-center mb-6 group-hover:bg-primary-600 transition-colors duration-300">
        <div class="text-primary-600 group-hover:text-white transition-colors duration-300">
            {!! $icon !!}
        </div>
    </div>
    <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-primary-700 transition">{{ $title }}</h3>
    <p class="text-gray-600 mb-6 leading-relaxed flex-grow">
        {{ $description }}
    </p>
    <a href="{{ url($link) }}" class="inline-flex items-center text-primary-600 font-semibold hover:text-primary-800 transition">
        Learn more
        <svg class="w-4 h-4 ml-1 transform group-hover:translate-x-1 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
    </a>
</div>
