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
                    <div class="px-6 py-4 bg-gray-200">{{ __('Reset Password') }}</div>

                    <div class="px-6 py-4">
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <div class="mb-4">
                                <label for="email" class="block mb-2">{{ __('Email Address') }}</label>

                                <input id="email" type="email" class="w-full px-3 py-2 border rounded @error('email') border-red-500 @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-0">
                                <button type="submit" class="w-full py-2 px-4 bg-blue-500 text-white rounded hover:bg-blue-600">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>
