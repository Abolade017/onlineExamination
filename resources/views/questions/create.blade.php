<x-layout>
    <section class="max-w-3xl mx-auto">
        <form action="{{ route('questions') }}" method="post">
            @csrf
            <div class="mb-4 border border-gray-200 rounded-lg">
                <div class="p-6">
                    <div class="mb-4">
                        <label for="" class="text-md font-bold mb-4 block">Question</label>
                        <textarea name="question" id="question" class="w-full border border-gray-200"
                            value="{{ old('question') }}" required></textarea>
                        @error('question')
                            <p class="text-xs text-red-500 mt-2"> {{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="answer" name="answer" class=" text-md font-bold mb-4 block">Answer1</label>
                        <textarea name="answer1" id="answer1" class="w-full border border-gray-200"
                            value="{{ old('answer1') }}" required></textarea>
                        @error('answer1')
                            <p class="text-xs text-red-500 mt-2"> {{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="answer" name="answer" class=" text-md font-bold mb-4 block">Answer2</label>
                        <textarea name="answer2" id="answer2" class="w-full border border-gray-200"
                            value="{{ old('answer2') }}" required></textarea>
                        @error('answer2')
                            <p class="text-xs text-red-500 mt-2"> {{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="answer3" name="answer3" class="text-md font-bold mb-4 block">Answer3</label>
                        <textarea name="answer3" id="answer3" class="w-full border border-gray-200"
                            value="{{ old('answer3') }}" required></textarea>
                        @error('answer3')
                            <p class="text-xs text-red-500 mt-2"> {{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="answer4" name="answer4" class="text-md font-bold mb-4 block">Answer4</label>
                        <textarea name="answer4" id="answer4" class="w-full border border-gray-200"
                            value="{{ old('answer4') }}" required></textarea>
                        @error('question')
                            <p class="text-xs text-red-500 mt-2"> {{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="correctAnswer" name="correctAnswer" class="text-md font-bold mb-4 block">correct
                            Answer</label>
                        <textarea name="correctAnswer" id="correctAnswer" class="w-full border border-gray-200"
                            value="{{ old('correctAnswer') }}" required></textarea>
                        @error('correctAnswer')
                            <p class="text-xs text-red-500 mt-2"> {{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4 flex justify-end">
                        <x-form.button>Publish</x-form.button>
                    </div>
                </div>
            </div>
        </form>
    </section>
    @if (session('success'))
        <div class="alert alert-success rounded-2xl flex justify-end bg-blue-600 text-white">
            {{ session('success') }}
        </div>
    @endif
</x-layout>
