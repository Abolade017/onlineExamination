<x-layout>
    <div class="mx-auto max-w-3xl">
        <header class="py-10">
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-3xl font-bold text-center text-">Online Examination</h1>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="/reg"
                        class="font-bold text-lg text-blue-500 hover:text-blue-700 hover:underline">Register</a>
                    <a href="" class="font-bold text-lg text-blue-500 hover:text-blue-700 hover:underline">Login</a>
                </div>
            </div>
        </header>
        <main>
            <h1 class="text-bold text-xl my-10">Choose Your Exam</h1>
            <div class="bg-gray-300 border border-gray-100 rounded-md w-full h-auto">
                   <x-table.head>
                      <x-table.data />
                      <x-table.data />
                      <x-table.data />
                      <x-table.data />
                   </x-table.head>
                   

            </div>
        </main>
    </div>
</x-layout>

</html>
