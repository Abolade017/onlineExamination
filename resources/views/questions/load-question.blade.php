<x-layout>
    <section class="mx-auto max-w-6xl py-10">
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
            @foreach ($exam_questions as $exam_question)
                <div class="">
                    <ol class="">
                        <li>
                            <h1 class="font-bold text-lg">{{ $exam_question->question }}</h1>
                            <div class="mb-4">
                                <form action="#" method="post">
                                    @csrf
                                    <div>
                                        <input type="radio" id="option_1" name="option_1" value="{{$exam_question->option_one}}">
                                        <label for="{{ $exam_question->option_one }}">{{ $exam_question->option_one }}</label>
                                    </div>
                                    <div>
                                        <input type="radio" id="option_1" name="option_2" value="{{ $exam_question->option_two }}">
                                        <label for="{{ $exam_question->option_two }}">{{ $exam_question->option_two }}</label>
                                    </div>
                                    <div>
                                        <input type="radio" id="option_1" name="option_3" value="{{ $exam_question->option_three }}">
                                        <label for="{{ $exam_question->option_three }}" class="">{{ $exam_question->option_three }}</label>
                                    </div>
                                    <div>
                                        <input type="radio" id="option_1" name="option_4" value="{{ $exam_question->option_four}}">
                                        <label for="{{ $exam_question->option_four}}">{{ $exam_question->option_four }}</label>
                                    </div>
                                </form>
                            </div>
                        </li>
                    </ol>
                </div>
            @endforeach
        </div>
    </section>
    <div class="flex justify-end items center pr-6">
        <div class="flex justify-center items-center w-48 h-20 bg-blue-500 text-white rounded-lg text-2xl ">Timer</div>
    </div>
</x-layout>
