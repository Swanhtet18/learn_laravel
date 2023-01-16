<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 p-6 rounded-xl border border-gray-200">
            <h1 class="text-xl font-bold text-center">Register Here!</h1>
            <form method="POST" action="/register" class="mt-10">
                @csrf
                <div class="mb-6">
                    <label for="name" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Name
                    </label>
                    <input type="text" name="name" class="border  border-gray-400 rounded-lg p-2 w-full" type="text"
                        id="name" value="{{ old('name') }}" required>

                </div>

                <div class="mb-6">
                    <label for="username" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Username
                    </label>
                    <input type="text" name="username" value="{{ old('username') }}"
                        class="border border-gray-400 rounded-lg p-2 w-full" type="text" id="username" required>
                    @error('username')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Email
                    </label>
                    <input type="email" name="email" value="{{ old('email') }}"
                        class="border border-gray-400 rounded-lg p-2 w-full" type="text" id="email" required>
                    @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Password
                    </label>
                    <input type="password" name="password" class="border border-gray-400 rounded-lg p-2 w-full"
                        type="text" id="password" required>
                    @error('password')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
                        Submit
                    </button>
                </div>

                @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)

                    <li class="text-red-500 text-xs">{{ $error }}</li>

                    @endforeach
                </ul>
                @endif

            </form>
        </main>
    </section>
</x-layout>