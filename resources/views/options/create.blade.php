<x-layout>
    <main>
        <div class="flex items-center my-20  px-6">
            <section class="w-1/3">
                <x-sidebar></x-sidebar>
            </section>
            <section class="w-2/3">
                <div class="mt-20">
                    <h1 class="text-xl font-bold text-center py-4 mt-16 mb-4">Add Options</h1>
                    <form action="{{ route('options') }}" method="POST">
                        @csrf
                        <div class="mb-4 border border-gray-200 rounded-lg">
                            <div class="p-6">
                                <div class="mb-4">
                                    <label for="option" name="options "
                                        class=" text-md font-bold mb-4 block">Option</label>
                                    <textarea name="value" id="option" class="w-full border border-gray-200" value="{{ old('option') }}"
                                        required></textarea>
                                    @error('option')
                                        <p class="text-xs text-red-500 mt-2"> {{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="correctAnswer" name="correctAnswer"
                                        class=" text-md font-bold mb-4 block">Correct Answer</label>
                                    <select name="is_correct" id="" class="w-full border border-gray-200">
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <label for="question_id" name="question_id"
                                        class=" text-md font-bold mb-4 block">Question_id</label>
                                    <select name="question_id" id="" class="w-full border border-gray-200">
                                        @foreach ($questions as $question)
                                            <option value="{{ $question->id }}" class="w-full border border-gray-200">
                                                {{ $question->question }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="mb-4 flex justify-end">
                                <x-form.button>Publish</x-form.button>
                            </div>
                    </form>

                    @if (session('success'))
                        <div
                            class="alert alert-success rounded-2xl flex justify-end bg-blue-600 text-white w-48 h-14  mb-10">
                            <div class="text-center items-center flex justify-center w-48 h-14">
                                {{ session('success') }}
                            </div>
                        </div>
                    @endif
            </section>
        </div>
    </main>
</x-layout>
