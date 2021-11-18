<!-- I begin to speak only when I am certain what I will say is not better left unsaid. - Cato the Younger -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

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

            <div class="flex items-center space-x-4">
                @auth
                    <span class="font-bold uppercase text-xs px-4">welcome,{{ auth()->user()->name }}</span>
                    <form action="/logout" method="post">
                        @csrf
                        <x-form.button>Logout</x-form.button>
                    </form>
                @else
                    <a href="/reg" class="font-bold text-lg text-blue-500 hover:text-blue-700 hover:underline">Register</a>
                    <a href="{{ route('login') }}"
                        class="font-bold text-lg text-blue-500 hover:text-blue-700 hover:underline">Login</a>
                @endauth
            </div>
        </div>
    </header>

    {{ $slot }}
</body>
