<x-layout>
    <div class="mx-auto max-w-3xl my-40">
        <h1 class="text-center font-bold text-2xl text-blue-500 py-6">Register</h1>
        <div class="border border-gray-100 h-auto w-full rounded-lg  ">
            <form action="/reg" method="post">
                @csrf
                <div class="px-10 py-10">
                    <div class="mb-6">
                        <label for="name" class="block mb-6 font-bold text-md ">Name</label>

                        <input type="text" class="border   border-gray-100 w-full h-10 rounded-md " name="name" value="{{old('name')}}" required>
                        @error('name')
                            <p class="text-red-500 text-xs">{{$message}}</p>
                        @enderror
                        {{-- <x-form.error class="error" :name={{$name}} /> --}}
                    </div>
                    <div class="mb-6">
                        <label for="name" class="block mb-6 font-bold text-md ">Username</label>

                        <input type="text" class=" border border-gray-100 w-full h-10 rounded-md " name="username" value="{{old('name')}}" required>
                    </div>
                    <div class="mb-6">
                        <label for="email" class=" block mb-6 font-bold text-md">Email</label>

                        <input type="text" class=" border border-gray-100 w-full h-10 rounded-md " name="email" value="{{old('name')}}" required>
                    </div>
                    <div class="mb-6">
                        <label for="password" class=" mb-6 block font-bold text-md">Password</label>

                        <input type="text" class=" border border-gray-100 w-full h-10 rounded-md " name="password" value="{{old('name')}}" required>
                    </div>
                    <div class="flex justify-end mt-6 ">
                        <x-form.button>Register</x-form.button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</x-layout>
