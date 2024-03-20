<!doctype html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>


    <div class="flex items-center min-h-screen p-4 bg-gray-100 lg:justify-center">
        <div
            class="flex flex-col overflow-hidden bg-white rounded-md shadow-lg max md:flex-row md:flex-1 lg:max-w-screen-md">
            <div
                class="p-4 py-6 text-white bg-blue-500 md:w-80 md:flex-shrink-0 md:flex md:flex-col md:items-center md:justify-evenly">
                <div class="my-3 text-4xl font-bold tracking-wider text-center">
                    <a href="#">BookBliss</a>
                </div>
                <p class="mt-6 font-normal text-center text-gray-300 md:mt-0">
                    Where Every Page Holds Possibility: Welcome to our Book Haven!
                </p>
                <p class="flex flex-col items-center justify-center mt-10 text-center">
                    <span>Don't have an account?</span>
                    <a href="{{ route('register') }}" class="underline">Get Started!</a>
                </p>
            </div>
            <div class="p-5 bg-white md:flex-1">
                <h3 class="my-4 text-2xl font-semibold text-gray-700">Account Login</h3>
                <form class="flex flex-col space-y-5" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="flex flex-col space-y-1">
                        <label for="email"
                            class="text-sm font-semibold text-gray-500">{{ __('Email Address') }}</label>
                        <input type="email" id="email" autofocus
                            class="px-4 py-2 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4 focus:ring-blue-200 @error('email') @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />
                        @error('email')
                            <span class="text-red-500 text-sm" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>
                    <div class="flex flex-col space-y-1">
                        <div class="flex items-center justify-between">
                            <label for="password"
                                class="text-sm font-semibold text-gray-500">{{ __('Password') }}</label>
                        </div>
                        <input type="password" id="password"
                            class="px-4 py-2 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4 focus:ring-blue-200  @error('password') @enderror"
                            name="password" required autocomplete="current-password" />
                        @error('password')
                            <span class="text-red-500 text-sm" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="flex items-center space-x-2">
                        <input type="checkbox" id="remember"
                            class="w-4 h-4 transition duration-300 rounded focus:ring-2 focus:ring-offset-0 focus:outline-none focus:ring-blue-200"
                            type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} />
                        <label for="remember"
                            class="text-sm font-semibold text-gray-500">{{ __('Remember Me') }}</label>
                    </div>
                    <div>
                        <button type="submit"
                            class="w-full px-4 py-2 text-lg font-semibold text-white transition-colors duration-300 bg-blue-500 rounded-md shadow hover:bg-blue-600 focus:outline-none focus:ring-blue-200 focus:ring-4">
                            {{ __('Login') }}
                        </button>
                        @if (Route::has('password.request'))
                            <a class="block mt-2 text-blue-500 text-sm text-center hover:underline"
                                href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
