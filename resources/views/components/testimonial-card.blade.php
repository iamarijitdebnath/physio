@props([
    'name',
    'condition',
    'image' => 'https://ui-avatars.com/api/?name=' . urlencode('Patient') . '&color=1e40af&background=eff6ff',
    'rating' => 5,
    'text'
])

<div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 hover:shadow-lg transition flex flex-col h-full relative">
    <!-- Quote Icon watermark -->
    <div class="absolute top-6 right-6 text-primary-100 opacity-50">
        <svg class="w-16 h-16" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" /></svg>
    </div>

    <!-- Rating Stars -->
    <div class="flex space-x-1 mb-4 z-10">
        @for($i = 0; $i < $rating; $i++)
            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
        @endfor
    </div>
    
    <!-- Testimonial Text -->
    <p class="text-gray-600 mb-8 italic z-10 flex-grow relative">
        "{{ $text }}"
    </p>
    
    <!-- Patient Info -->
    <div class="flex items-center mt-auto z-10 border-t border-gray-50 pt-4">
        <img src="{{ Str::startsWith($image, 'http') ? $image : 'https://ui-avatars.com/api/?name=' . urlencode($name) . '&color=1e40af&background=eff6ff' }}" 
             alt="{{ $name }}" 
             class="w-12 h-12 rounded-full object-cover border-2 border-primary-100 shadow-sm"
             loading="lazy">
        <div class="ml-4">
            <h4 class="text-gray-900 font-bold">{{ $name }}</h4>
            <span class="text-primary-600 text-sm font-medium">{{ $condition }}</span>
        </div>
    </div>
</div>
