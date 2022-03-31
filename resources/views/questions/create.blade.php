<x-layout>
    <div class="flex items-center my-20  px-6">
        <section class="w-1/3">
            <x-sidebar></x-sidebar>
        </section>
        <section class="w-2/3">
            <div class="mt-20">
                <h1 class="text-xl font-bold text-center py-4 mt-16 mb-4">Add New Course</h1>
            </div>
        <form action="{{ route('questions') }}" method="post">
            @csrf
            <div class="mb-4 border border-gray-200 rounded-lg">
                <div class="p-6">
                    <div class="mb-4">
                        <label for="" class="text-md font-bold mb-4 block">Question</label>
                        <textarea name="question" id="question" class="w-full border border-gray-200" value="{{ old('question') }}"
                            required></textarea>
                        @error('question')
                            <p class="text-xs text-red-500 mt-2"> {{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="course_id" name="course_id" class=" text-md font-bold mb-4 block">Course Id</label>
                        <select name="course_id" id="course_id" class="w-full border border-gray-200"
                            value="{{ old('course_id') }}" required>
                            @foreach ($courses as $course)
                                <option value="{{ $course->id }}">{{ $course->title }}</option>
                            @endforeach
                        </select>
                        @error('answer2')
                            <p class="text-xs text-red-500 mt-2"> {{ $message }}</p>
                        @enderror
                    </div>
                    {{-- <div>
                        @foreach ( as )
                            
                        @endforeach
                    </div> --}}
                    <div class="mb-4 flex justify-end">
                        <x-form.button>Publish</x-form.button>
                    </div>
                </div>
            </div>
        </form>
    </section>
    {{-- <div
        x-data= "{show: true}"
        x-init="setTimeout(()=>show=false, 5000)"
        x-show="show"
    </div> --}}
    @if (session('success'))
        <div class="alert alert-success rounded-2xl flex justify-end bg-blue-600 text-white w-48 h-14  mb-10">
            <div class="text-center items-center flex justify-center w-48 h-14"> {{ session('success') }}</div>
        </div>
    @endif

</div>
</x-layout>
