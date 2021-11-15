<x-layout>
    <header class="py-10 px-6">
        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-3xl font-bold text-center text-">Online Examination</h1>
            </div>

            <div class="flex items-center space-x-4">
                @auth
                    <span class="font-bold uppercase text-xs px-4">welcome,{{ auth()->user()->name }}</span>
                    <form action="/logout" method="post">
                        @csrf
                        <x-form.button>Logout</x-form.button>
                    </form>
                @else
                    <a href="/reg" class="font-bold text-lg text-blue-500 hover:text-blue-700 hover:underline">Register</a>
                    <a href="/sessions" class="font-bold text-lg text-blue-500 hover:text-blue-700 hover:underline">Login</a>
                    @endauth
            </div>
        </div>
    </header>
    <main>
        <div class="mx-auto max-w-3xl">
            <h1 class="text-bold text-xl my-10">Choose Your Exam</h1>
            <div class="bg-gray-300 border border-gray-100 rounded-md w-full h-auto">
                <x-table.head>
                    <x-table.data />
                    <x-table.data />
                    <x-table.data />
                    <x-table.data />
                </x-table.head>


            </div>
        </div>
    </main>
</x-layout>

</html>
