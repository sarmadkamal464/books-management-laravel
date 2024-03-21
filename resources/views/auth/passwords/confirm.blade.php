<!doctype html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="container mx-auto">
        <div class="flex justify-center">
            <div class="w-full md:w-8/12 lg:w-6/12 xl:w-4/12">
                <div class="bg-white shadow-md rounded-lg">
                    <div class="px-6 py-4 bg-gray-200">{{ __('Confirm Password') }}</div>

                    <div class="px-6 py-4">
                        {{ __('Please confirm your password before continuing.') }}

                        <form method="POST" action="{{ route('password.confirm') }}">
                            @csrf

                            <div class="mb-4">
                                <label for="password" class="block mb-2">{{ __('Password') }}</label>

                                <input id="password" type="password" class="w-full px-3 py-2 border rounded @error('password') border-red-500 @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="flex items-center justify-between">
                                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
                                    {{ __('Confirm Password') }}
                                </button>

                                @if (Route::has('password.request'))
                                <a class="text-blue-500 hover:underline" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
