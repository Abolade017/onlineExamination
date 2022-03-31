<x-layout>
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
                        <th>User Id</th>
                        <th>Question Value</th>
                        <th>Course Code</th>
                        <th>Course Name</th>
                        <th>score</th>
                    </tr>
                    @foreach ($results as $result)
                        <tr class="">
                            <td>{{$result->user_id}}</td>
                            <td>{{ $result->attempted_question}}</td>
                            <td>{{ $result->course_code }}</td>
                            <td>{{$result->course_name}}</td>
                            <td>{{$result->score}}</td>
                            
                        </tr>
                    @endforeach
                </table>
            </section>
        </div>
    </main>
</x-layout>
