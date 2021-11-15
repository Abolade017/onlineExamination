<x-layout>
    <div class="mx-auto max-w-3xl my-40">
        <h1 class="text-center font-bold text-2xl text-blue-500 py-6">Log in</h1>
        <div class="border border-gray-100 h-auto w-full rounded-lg  ">
            <form action="/sessions" method="post">
                @csrf
                <div class="px-10 py-10">
                    <div class="mb-6">
                        <label for="email" class="block mb-6 font-bold text-md ">Email</label>

                        <input type="email" class="border   border-gray-100 w-full h-10 rounded-md " name="email"
                            value="{{ old('email') }}" required>
                            @error('email')
                            <p class="text-red-500 text-xs">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label for="password" class="block mb-6 font-bold text-md ">Password</label>

                        <input type="password" class="border   border-gray-100 w-full h-10 rounded-md " name="password"
                            value="{{ old('password') }}" required>
                            @error('password')
                            <p class="text-red-500 text-xs">{{$message}}</p>
                        @enderror
                    </div>
                <x-form.button>Login</x-form.button>
                </div>
            </form>
        </div>
    </div>
</x-layout>
