    <div class="w-64 bg-gray-200  h-96 grid grid-row space-y-4 items-center border border-black">
        <a href="/" class="font-bold  text-lg text-center pt-8">Dashboard</a>
        @if (auth()->user()->is_admin == 1)
            <a href="/admin/question/create" class="font-bold text-center text-lg">Create Exam</a>
            <a href="/admin/course/create" class="font-bold text-center text-lg">Create Course</a>
            <a href="/admin/options/create" class="font-bold text-center text-lg">Create Options</a>
            <a href="/answers" class="font-bold text-center text-lg"> Answers</a>
            <a href="/results" class="font-bold text-center text-lg"> Results</a>
        @endif
        <a href="/load-questions" class="font-bold  text-center text-lg"> Start Exam</a>
        <a href="{{route('print-result')}}" class="font-bold text-center text-lg">print result</a>
    </div>
