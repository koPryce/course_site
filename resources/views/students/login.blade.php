<x-wrapper>
    <x-card class="bg-gray-50 border border-gray-200 mx-auto mt-24 max-w-lg">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-5"> Login </h2>
        </header>

        <form method="POST" action="/students/validate">
            @csrf
            <div class="mb-6">
                <label for="email" class="inline-block text-lg mb-2">Email</label>
                <input type="email" name="email" class="border border-gray-200 rounded p-2 w-full" value="{{old('email')}}" />

                @error('email')
                    <p class="text-red-500 text-xs mt-1"> {{$message}} </p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="password" class="inline-block text-lg mb-2"> Password </label>
                <input type="password" name="password" class="border border-gray-200 rounded p-2 w-full" value="{{old('password')}}"/>

                @error('password')
                    <p class="text-red-500 text-xs mt-1"> {{$message}} </p>
                @enderror
            </div>

            <div class="mb-6">
                <button class="bg-black text-white rounded py-2 px-4 hover:bg-purple-800" type="submit">Login</button>
            </div>

            <div class="mt-8">
                <p>
                    Don't have an account?
                    <a href="/register" class="text-purple-800">Register</a>
                </p>
            </div>
        </form>
    </x-card>
</x-wrapper>