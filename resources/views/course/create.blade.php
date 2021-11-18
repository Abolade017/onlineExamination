<x-layout>
    <section class="max-w-3xl mx-auto">
        <form action="" method="post">
            <div class="mb-4 border border-gray-200 rounded-lg">
                <div class="p-6">
                    <div class="mb-4">
                        <label for="" class="text-md font-bold mb-4 block">Course Name</label>
                        <input type="text" name="course_name" class="w-full border border-gray-200"
                            value="{{ old('course_name') }}" required />
                        @error('course_name')
                            <p class="text-xs text-red-500 mt-2"> {{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="course_unit" class="text-md font-bold mb-4 block">Course Unit</label>
                        <select name="course_unit" value="{{ old('course_unit') }}" required>
                            <option value="1">1 Unit</option>
                            <option value="2">2 Unit</option>
                            <option value="3">3 Unit</option>
                        </select>
                        @error('course_unit')
                            <p class="text-xs text-red-500 mt-2"> {{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="exam_duration" class="text-md font-bold mb-4 block">Exam Duration</label>
                        <input type="time" name="exam_duration" class="w-full border border-gray-200"
                            value="{{ old('exam_duration') }}" required />
                        @error('exam_duration')
                            <p class="text-xs text-red-500 mt-2"> {{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4 flex justify-end">
                        <x-form.button>Publish</x-form.button>
                    </div>
                </div>
        </form>
    </section>

    </div>
</x-layout>
