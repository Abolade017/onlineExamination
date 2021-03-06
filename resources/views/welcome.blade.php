<x-layout>
        <main>
        <div class="flex items-center my-20  px-6">
            <section class="w-1/3">
                <div class="">
                    <x-sidebar></x-sidebar>
                </div>
            </section>
            <section class="w-2/3 h-96 ">
            <h1 class="text-bold text-xl pb-8">Choose Your Course</h1>
            <div class="bg-gray-300 border border-gray-100 rounded-md w-full h-auto">
                <table class="table-auto px-4 w-full border-collapse" >
                    <tr class="border  border-gray-200">
                        <th class="w-4/6 border border-gray-200 ">
                            <h3 class="text-bold text-md uppercase text-left">Course Title</h3>
                        </th>
                        <th class="w-1/6 border  border-gray-200 px-2 text-left">
                            <h3 class="text-bold text-md uppercase ">Course Unit</h3>
                        </th>
                        <th class="w-1/6 border  border-gray-200 px-2 text-left">
                            <h3 class="text-bold text-md uppercase">Duration</h3>
                        </th>
                        <th class="w-1/6 border  border-gray-200 px-2 text-left">
                            <h3 class="text-bold text-md uppercase">Course_code</h3>
                        </th>
                    </tr>
                    @foreach ($courses as $course)
                    <tr class="border border-gray-200">
                            <td class="border border-gray-200"><a href="{{route('questions')}}" class="text-sm ">{{ $course->title }}</a></td>
                            <td class="border border-gray-200"><a href="{{route('questions')}}" class="text-sm ">{{ $course->unit }} unit</a></td>
                            <td class="border border-gray-200"><a href="{{route('questions')}}" class="text-sm ">{{ $course->duration }} mins</a></td>
                            <td class="border border-gray-200"><a href="{{route('questions')}}" class="text-sm ">{{ $course->course_code }} </a></td>
                    </tr>
                    @endforeach
                    </table>
                
            </div>
        </div>
    </section>
    </main>
</x-layout>

</html>
