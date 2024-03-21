<!doctype html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>


    <div class="flex items-center min-h-screen p-4 bg-gray-100 lg:justify-center">
        <div class="container">
            <div class="lg:flex lg:items-center lg:justify-center">
                <div class="lg:w-3/4">
                    <div class="bg-white shadow-md rounded-lg">
                        <div class="px-6 py-4 bg-gray-200">{{ __('Reset Password') }}</div>

                        <div class="px-6 py-4">
                            <form method="POST" action="{{ route('password.update') }}">
                                @csrf

                                <input type="hidden" name="token" value="{{ $token }}">

                                <div class="mb-4">
                                    <label for="email" class="block mb-2 text-right">{{ __('Email Address') }}</label>

                                    <input id="email" type="email" class="w-full px-3 py-2 border rounded @error('email') border-red-500 @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <label for="password" class="block mb-2 text-right">{{ __('Password') }}</label>

                                    <input id="password" type="password" class="w-full px-3 py-2 border rounded @error('password') border-red-500 @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                    <span class="text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <label for="password-confirm" class="block mb-2 text-right">{{ __('Confirm Password') }}</label>

                                    <input id="password-confirm" type="password" class="w-full px-3 py-2 border rounded" name="password_confirmation" required autocomplete="new-password">
                                </div>

                                <div class="mb-0">
                                    <button type="submit" class="w-full py-2 px-4 bg-blue-500 text-white rounded hover:bg-blue-600">{{ __('Reset Password') }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
