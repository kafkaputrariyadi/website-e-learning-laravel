<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Add New Lesson to: <span class="font-bold">{{ $course->title }}</span>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('admin.courses.lessons.store', $course->id) }}" method="POST">
                        @csrf
                        <div>
                            <label for="title">Title</label>
                            <input id="title" class="block mt-1 w-full" type="text" name="title" required />
                        </div>
                        <div class="mt-4">
                            <label for="content">Content</label>
                            <textarea id="content" name="content" class="block mt-1 w-full" required></textarea>
                        </div>
                        <div class="mt-4">
                            <label for="order">Order</label>
                            <input id="order" class="block mt-1 w-full" type="number" name="order" value="0" required />
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <button class="bg-blue-500 text-white px-4 py-2 rounded">
                                Save Lesson
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>