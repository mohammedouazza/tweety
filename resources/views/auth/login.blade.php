<x-master>
<div class="container mx-auto flex justify-center ">
    <div class="px-12 py-8 border border-gray-300 bg-gray-200 rounded-lg">
        <div class="col-md-8">
                <div class="font-bold text-lg mb-4">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-6">
                            <label
                                for="email"
                                class="block mb-2 uppercase font-bold text-xs text-gray-700"
                            >
                                Email
                            </label>

                            <input
                                type="email"
                                class="border border-gray-700 p-2 w-full rounded"
                                id="email"
                                name="email"
                                required
                                autocomplete="email"
                                autofocus
                                value="{{ old('email') }}"

                                >
                            @error('email')
                                <p class="text-red-500 text-xs mt-2"> {{ $message }} </p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label
                                for="password"
                                class="block mb-2 uppercase font-bold text-xs text-gray-700"
                            >
                                Password
                            </label>

                            <input
                                type="password"
                                class="border border-gray-700 p-2 w-full rounded"
                                id="password"
                                name="password"
                                required
                                autocomplete="current-password"
                                autofocus
                                value="{{ old('password') }}"

                                >
                            @error('password')
                                <p class="text-red-500 text-xs mt-2"> {{ $message }} </p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <div>
                                <input
                                type="checkbox"
                                class="mr-1"
                                id="remember"
                                name="remember"
                                {{ old('remember') ? 'checked' : '' }}

                                >

                                <label
                                    for="remember"
                                    class="text-xs uppercase font-bold text-xs text-gray-700"
                                >
                                    Remember me
                                </label>
                            </div>
                            @error('remember')
                                <p class="text-red-500 text-xs mt-2"> {{ $message }} </p>
                            @enderror
                        </div>

                        <div>
                            <button
                                type="submit"
                                class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500"
                            >
                                Submit
                            </button>

                            <a href="{{ route('password.request') }}" class="text-xs text-gray-700">Forgot tour password?</a>
                        </div>


                    </form>
                </div>
        </div>
    </div>
</div>
</x-master>
