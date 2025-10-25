<x-guest-layout>
    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold mb-4">{{ $course->title }}</h1>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <p class="text-gray-700">{{ $course->description }}</p>
        </div>
    </div>
</x-guest-layout>