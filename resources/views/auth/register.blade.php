<!doctype html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
<div class="h-screen  flex items-center">
    <div class="container mx-auto">
        <div class="flex justify-center">
            <div class="w-full md:w-8/12 lg:w-6/12">
                <div class="bg-white shadow-md rounded-lg">
                    <div class="bg-gray-100 text-center py-4">{{ __('Register') }}</div>

                    <div class="p-4">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="name" class="block text-md-end">{{ __('Name') }}</label>

                                <input id="name" type="text" class="w-full rounded border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50 @error('name') border-red-500 @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="text-red-500 text-sm" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="email" class="block text-md-end">{{ __('Email Address') }}</label>

                                <input id="email" type="email" class="w-full rounded border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50 @error('email') border-red-500 @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="text-red-500 text-sm" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="password" class="block text-md-end">{{ __('Password') }}</label>

                                <input id="password" type="password" class="w-full rounded border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50 @error('password') border-red-500 @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="text-red-500 text-sm" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="password-confirm" class="block text-md-end">{{ __('Confirm Password') }}</label>

                                <input id="password-confirm" type="password" class="w-full rounded border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50" name="password_confirmation" required autocomplete="new-password">
                            </div>

                            <div class="mb-0">
                                <div class="flex justify-end">
                                    <button type="submit" class="bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-600 focus:outline-none focus:bg-blue-600">{{ __('Register') }}</button>
                                </div>
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
