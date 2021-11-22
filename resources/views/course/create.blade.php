<x-layout>
    <section class="max-w-3xl mx-auto">
        <h1 class="text-xl font-bold text-center py-4">Add New Course</h1>
        <form action="{{route('course')}}" method="post">
            @csrf
            <div class="mb-4 border border-gray-200 rounded-lg">
                <div class="p-6">
                    <div class="mb-4">
                        <label for="course_name" class="text-md font-bold mb-4 block">Course Name</label>
                        <input type="text" name="course_name" class="w-full border border-gray-200"
                            value="{{ old('course_name') }}" required />

                    </div>
                    <div class="mb-4">
                        <label for="course_unit" class="text-md font-bold mb-4 block">Course Unit</label>
                        <select name="course_unit" value="{{ old('course_unit') }}"
                            class="w-full border border-gray-200" required>
                            <option value="1">1 Unit</option>
                            <option value="2">2 Unit</option>
                            <option value="3">3 Unit</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="duration" class="text-md font-bold mb-4 block">Duration</label>
                        <select name="duration" value="{{ old('duration') }}" class="w-full border border-gray-200"
                            required>
                            <option value="1">20</option>
                            <option value="2">30</option>
                            <option value="3">35</option>
                            <option value="3">45</option>
                            <option value="3">60</option>
                        </select>
                    </div>
                    <div class="mb-4 flex justify-end">
                        <x-form.button>Publish</x-form.button>
                    </div>
                </div>
        </form>
    </section>
    @if (session('success'))
        <div class="alert alert-success rounded-2xl flex justify-end bg-blue-600 text-white">
            {{ session('success') }}
        </div>
    @endif
    </div>
</x-layout>
