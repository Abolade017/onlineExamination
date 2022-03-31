<x-layout>
    <section class="mx-auto max-w-4xl py-10">
        <div class="flex justify-between mt-10">
            <div>
                <div class="mb-6">
                    <h1 class="text-lg font-bold">Candidate Name:</h1>
                </div>
                <div class="mb-6">
                    <h1 class="text-lg font-bold">Matric No:</h1>
                </div>
                <div class="mb-6">
                    <h1 class=" text-lg font-bold">Exam Title:</h1>
                </div>
                <div class="mb-6">
                    <h1 class=" text-lg font-bold">Duration:30 mins</h1>
                </div>
            </div>
            <div class="mb-6"><img src="" class=" rounded-full w-24 h-24 " />
            </div>
        </div>
        <div class="my-10">
            <form action="{{ route('create-answer') }}" method="post">
                @csrf
               
                    <ol class="list-decimal">
                        @foreach ($exam_questions as $question)
                        <li>
                            <h1 class="font-bold text-lg">{{ $question->question }}</h1>
                        </li>
                    
                        <div class="mb-4">
                            <input type="hidden" name="question_id[]" value="{{$question->id}}" />
                            @foreach ($question->options as $option)
                                <ol class="option-list">
                                    <div>
                                        <label>
                                            <input type="radio" name="answer_{{$question->id}}"
                                                value="{{ $option->id }}">
                                            {{ $option->value }}
                                        </label>
                                    </div>
                                </ol>
                            @endforeach
                        </div>
                        @endforeach
                    </ol>
            
                <div class="mb-4 flex justify-end">
                    <x-form.button>Submit</x-form.button>
                </div>
            </form>
        </div>
    </section>
    <div id="app">
        <example-component></example-component>

    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</x-layout>
<style>
    .numeric{
        list-style-type: decimal;
    }
    .option-list {
        list-style-type: lower-alpha
    }

</style>
