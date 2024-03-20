<!doctype html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
  

<div class="flex items-center min-h-screen p-4 bg-gray-100 lg:justify-center">
      <div
        class="flex flex-col overflow-hidden bg-white rounded-md shadow-lg max md:flex-row md:flex-1 lg:max-w-screen-md"
      >
        <div
          class="p-4 py-6 text-white bg-blue-500 md:w-80 md:flex-shrink-0 md:flex md:flex-col md:items-center md:justify-evenly"
        >
          <div class="my-3 text-4xl font-bold tracking-wider text-center">
            <a href="#">BookBliss</a>
          </div>

          <p class="mt-6 font-normal text-center text-gray-300 md:mt-0">
            Unlock the Magic of Reading: Your Adventure Awaits at Our Book Emporium!
          </p>
          <p class="flex flex-col items-center justify-center mt-10 text-center">
            <span>Already have an account?</span>
            <a href="{{ route('login') }}" class="underline">Login here</a>
          </p>
        </div>
        <div class="p-5 bg-white md:flex-1">
          <h3 class="my-4 text-2xl font-semibold text-gray-700">Register</h3>
          <form class="flex flex-col space-y-5" method="POST" action="{{ route('register') }}">
            @csrf
            <div class="flex flex-col space-y-1">
                <label for="name" class="text-sm font-semibold text-gray-500">{{ __('Name') }}</label>
                <input
                  type="text"
                  id="name"
                  autofocus
                  class="px-4 py-2 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4 focus:ring-blue-200 @error('name') @enderror" name="name" value="{{ old('name') }}" required autocomplete="name"/>
                  @error('name')
                  <span class="text-red-500 text-sm" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
              </div>
            <div class="flex flex-col space-y-1">
              <label for="email" class="text-sm font-semibold text-gray-500">{{ __('Email Address') }}</label>
              <input
                type="email"
                id="email"
                class="px-4 py-2 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4 focus:ring-blue-200 @error('email') @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"/>
                @error('email')
                <span class="text-red-500 text-sm" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="flex flex-col space-y-1">
              <div class="flex items-center justify-between">
                <label for="password" class="text-sm font-semibold text-gray-500">{{ __('Password') }}</label>
              </div>
              <input
                type="password"
                id="password"
                class="px-4 py-2 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4 focus:ring-blue-200  @error('password') @enderror" name="password" required autocomplete="new-password"
              />
              @error('password')
              <span class="text-red-500 text-sm" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
            <div class="flex flex-col space-y-1">
              <div class="flex items-center justify-between">
                <label for="password-confirm" class="text-sm font-semibold text-gray-500">{{ __('Confirm Password') }}</label>
              </div>
              <input
                type="password"
                id="password-confirm"
                class="px-4 py-2 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4 focus:ring-blue-200  @error('password') @enderror" name="password_confirmation" required autocomplete="new-password"
              />
            </div>
            <div>
              <button
                type="submit"
                class="w-full px-4 py-2 text-lg font-semibold text-white transition-colors duration-300 bg-blue-500 rounded-md shadow hover:bg-blue-600 focus:outline-none focus:ring-blue-200 focus:ring-4"
              >
              {{ __('Register') }}
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
  </html>