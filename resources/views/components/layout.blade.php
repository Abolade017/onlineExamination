<!-- I begin to speak only when I am certain what I will say is not better left unsaid. - Cato the Younger -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://unpkg.com/tailwindcss-jit-cdn"></script>
    <script src="js/app.js"></script>
    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}

    {{-- <script src="{{ mix('/js/app.js') }}"></script> --}}



    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->


</head>

<body class="antialiased">
    <header class="py-10 px-6">
        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-3xl font-bold text-center text-">Online Examination</h1>
            </div>
            @auth
                <div class="flex items-center space-x-4">
                    <span class="font-bold uppercase text-xs px-4">welcome,{{ auth()->user()->name }}</span>
                    <form action="/logout" method="post">
                        @csrf
                        <x-form.button>Logout</x-form.button>

                    </form>
                </div>
            @else
                <a href="/reg" class="font-bold text-lg text-blue-500 hover:text-blue-700 hover:underline">Register</a>
                <a href="{{ route('login') }}"
                    class="font-bold text-lg text-blue-500 hover:text-blue-700 hover:underline">Login</a>
            @endauth
        </div>

        {{-- <div class="flex items-center space-x-4">
            <form action="/admin/question/create">
                <x-form.button>create Questions</x-form.button>
            </form>
            <form action="/admin/course/create">
                <x-form.button>create course</x-form.button>
            </form>
        </div> --}}

        </div>
        </div>
    </header>
    <div class="">
        {{ $slot }}
    </div>
    <script>
        @if (session('success'))
            <div class="alert alert-success rounded-2xl flex justify-end bg-blue-600 text-white w-48 h-14  mb-10">
                <p class="text-center items-center flex justify-center w-48 h-14"> {{ session('success') }}</p>
            </div>
        @endif
    </script>
</body>
