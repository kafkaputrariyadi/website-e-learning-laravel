<x-guest-layout>
    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold mb-6">Our Courses</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse ($courses as $course)
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="bg-gray-200 h-48"></div>
                <div class="p-6">
                    <h2 class="text-xl font-bold mb-2">{{ $course->title }}</h2>
                    <p class="text-gray-700 mb-4">{{ Str::limit($course->description, 100) }}</p>
                    <a href="{{ route('courses.show', $course->slug) }}"
                        class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                        View Details
                    </a>
                </div>
            </div>
            @empty
            <p>No courses available at the moment.</p>
            @endforelse
        </div>
    </div>
</x-guest-layout>