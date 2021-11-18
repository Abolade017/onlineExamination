<x-layout>
        <main>
        <div class="mx-auto max-w-3xl">
            <h1 class="text-bold text-xl my-10">Choose Your Exam</h1>
            <div class="bg-gray-300 border border-gray-100 rounded-md w-full h-auto">
                <table class="table-auto px-4 w-full border-collapse" >
                    <tr class="border  border-gray-200">
                        <th class="w-4/6 border border-gray-200 ">
                            <h3 class="text-bold text-md uppercase text-left">Course Title</h3>
                        </th>
                        <th class="w-1/6 border  border-gray-200 px-2 text-left">
                            <h3 class="text-bold text-md uppercase">Duration</h3>
                        </th>
                        <th class="w-1/6 border  border-gray-200 px-2 text-left">
                            <h3 class="text-bold text-md uppercase ">Course Unit</h3>
                        </th>
                    </tr>
                    @foreach ($exams as $exam)
                    <tr class="border border-gray-200">
                            <td class="border border-gray-200"><a href="#" class="text-sm ">{{ $exam->course_name }}</a></td>
                            <td class="border border-gray-200"><a href="#" class="text-sm ">{{ $exam->exam_duration }}</a></td>
                            <td class="border border-gray-200"><a href="#" class="text-sm ">{{ $exam->course_unit }}</a></td> 
                    </tr>
                    @endforeach
                    </table>
                
            </div>
        </div>
    </main>
</x-layout>

</html>
