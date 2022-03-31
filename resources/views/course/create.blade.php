<x-layout>
    <main>
        <div class="flex items-center my-20  px-6">
            <section class="w-1/3">
                    <x-sidebar></x-sidebar>
            </section>
            <section class="w-2/3  ">
                <div class="mt-20">
                    <h1 class="text-xl font-bold text-center py-4 mt-16 mb-4">Add New Course</h1>
                    <form action="{{ route('course') }}" method="post">
                        @csrf
                        <div class="mb-4 border border-gray-200 rounded-lg">
                            <div class="p-6">
                                <div class="mb-4">
                                    <label for="title" class="text-md font-bold mb-4 block">Course Name</label>
                                    <select name="title" value="{{ old('title') }}"
                                        class="w-full border border-gray-200" required>
                                        <option value="HTML">HTML</option>
                                        <option value="Automata">Automata</option>
                                        <option value="Software Engineer">Software Engineer</option>
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <label for="course_unit" class="text-md font-bold mb-4 block">Course Unit</label>
                                    <select name="unit" value="{{ old('unit') }}"
                                        class="w-full border border-gray-200" required>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <label for="duration" class="text-md font-bold mb-4 block">Duration</label>
                                    <select name="duration" value="{{ old('duration') }}"
                                        class="w-full border border-gray-200" required>
                                        <option value="20">20</option>
                                        <option value="30">30</option>
                                        <option value="35">35</option>
                                        <option value="45">45</option>
                                        <option value="60">60</option>
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <label for="code" class="text-md font-bold mb-4 block">Course Code</label>
                                    <select name="code" value="{{ old('code') }}"
                                        class="w-full border border-gray-200" required>
                                        <option value="CSC 111">CSC 111</option>
                                        <option value="CSC 211">CSC 211</option>
                                        <option value="CSC 311">CSC 311</option>
                                        <option value="CSC 411">CSC 411</option>
                                        <option value="CSC 112">CSC 112</option>
                                    </select>
                                </div>
                                <div class="mb-4 flex justify-end">
                                    <x-form.button>Publish</x-form.button>
                                </div>
                            </div>
                    </form>
                </div>
            </section>
            @if (session('success'))
                <div class="alert alert-success rounded-2xl flex justify-end bg-blue-600 text-white">
                    {{ session('success') }}
                </div>
            @endif

        </div>
    </main>
</x-layout>
