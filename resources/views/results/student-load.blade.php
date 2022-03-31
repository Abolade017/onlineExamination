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
                <div class=" border border-gray-100 rounded-md w-full h-auto">
                    <table class="table-auto px-4 w-full border-collapse text-center">
                        <tr class="">
                            <th>Course Code</th>
                            <th>Course Title</th>
                            <th>Score</th>
                            <th>user id</th>
                        </tr>
                        {{-- @if (auth()->user()->id) --}}
                        @foreach ($results as $result )
                        <tr>
                          <td>{{$result->course_code}}</td>
                          <td>{{$result->course_name}}</td>
                          <td>{{$result->score}}</td>
                          <td>{{$result->user_id}}</td>
                        </tr>
                        @endforeach
                        {{-- @endif --}}
                        
                       
                    </table>
                </div>
            </section>
        </div>
    </main>
</x-layout>
{{-- <style>
    tr:nth-child(even) {
        background-color: gray
    }

</style> --}}
