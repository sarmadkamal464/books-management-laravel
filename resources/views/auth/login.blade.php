<!doctype html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
<div class="h-screen  flex items-center">
     <div class="container mx-auto ">
        <div class="flex justify-center">
            <div class="w-full md:w-8/12 lg:w-6/12">
                <div class="bg-white shadow-md rounded-lg">
                    <div class="bg-gray-100 text-center py-4 px-4">{{ __('Login') }}</div>

                    <div class="p-4">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="email" class="block text-md-end">{{ __('Email Address') }}</label>

                                <input id="email" type="email" class="w-full rounded border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50 @error('email') border-red-500 @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="text-red-500 text-sm" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="password" class="block text-md-end">{{ __('Password') }}</label>

                                <input id="password" type="password" class="w-full rounded border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50 @error('password') border-red-500 @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="text-red-500 text-sm" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <div class="flex items-center">
                                    <input class="form-checkbox h-4 w-4 text-blue-500" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="ml-2 text-gray-700" for="remember">{{ __('Remember Me') }}</label>
                                </div>
                            </div>

                            <div class="mb-0">
                                <button type="submit" class="w-full bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-600 focus:outline-none focus:bg-blue-600">{{ __('Login') }}</button>

                                @if (Route::has('password.request'))
                                    <a class="block mt-2 text-blue-500 text-sm text-center hover:underline" href="{{ route('password.request') }}">
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
</div>

</body>
</html>



