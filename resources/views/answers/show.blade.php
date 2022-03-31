<x-layout>
<div>
    <main>
        <div class="flex items-center my-20  px-6">
            <section class="w-1/3">
                <div class="">
                    <x-sidebar></x-sidebar>
                </div>
            </section>
            <section class="w-2/3 h-96 ">
                <h1 class="text-bold text-xl pb-8">Result</h1>
                <table class="table-auto px-4 w-full border-collapse text-center">
                    <tr class="">
                        <th>Course Code</th>
                        <th>Course Name</th>
                        <th>Selected Answer</th>
                        <th>question value</th>
                        {{-- <th>Option Value</th> --}}
                        
                    </tr>
                    @foreach ($answers as $answer)
                        <tr class="">
                            <td>{{ $answer->question->course->course_code}}</td>
                            <td>{{ $answer->question->course->title}}</td>
                            <td>{{ $answer->is_correct}}</td>
                            <td>{{$answer->question->question}}</td>
                            {{-- <td>{{$answer->option->value}}</td> --}}
                        </tr>
                    @endforeach 
                </table>
            </section>
        </div>
    </main>
</div>
</x-layout>