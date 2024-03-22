<header class="border-b md:flex md:items-center md:justify-between p-4 pb-0 shadow-lg md:pb-4">

    <!-- Logo text or image -->
    <div class="flex items-center justify-between mb-4 md:mb-0">
      <h1 class="leading-none text-2xl text-grey-darkest">
<<<<<<< HEAD
        <a class="no-underline text-grey-darkest hover:text-black" href="/">
=======
        <a class="no-underline text-grey-darkest hover:text-black" href="#">
>>>>>>> 60908db36afdff8f36f71144bfc958a52016e250
          BookBliss
        </a>
      </h1>
    
      <a class="text-black hover:text-orange md:hidden" href="#">
        <i class="fa fa-2x fa-bars"></i>
      </a>
    </div>
    <!-- END Logo text or image -->

    <!-- Search field -->
    @yield('search')

    <!-- END Search field -->

    <!-- Global navigation -->
    <nav>
      <ul class="list-reset md:flex md:items-center">
        <li class="md:ml-4">
          <a class="block no-underline hover:underline py-2 text-grey-darkest hover:text-black md:border-none md:p-0" href="#">
            Books
          </a>
        </li>
<<<<<<< HEAD
        <li class="md:ml-4 flex">
          @auth
              <a class="border-t block no-underline hover:underline py-2 text-grey-darkest hover:text-black md:border-none md:p-0 mr-2" href="{{ route('profile') }}">Profile</a>
=======
        <li class="md:ml-4">
          <a class="border-t block no-underline hover:underline py-2 text-grey-darkest hover:text-black md:border-none md:p-0" href="#">
            About
          </a>
        </li>
        <li class="md:ml-4">
          @auth
              <a class="border-t block no-underline hover:underline py-2 text-grey-darkest hover:text-black md:border-none md:p-0" href="{{ route('profile') }}">Profile</a>
>>>>>>> 60908db36afdff8f36f71144bfc958a52016e250
              <a class="border-t block no-underline hover:underline py-2 text-grey-darkest hover:text-black md:border-none md:p-0" wire:click="logoutUser" href="#">Logout</a>
          @else
              <a class="border-t block no-underline hover:underline py-2 text-grey-darkest hover:text-black md:border-none md:p-0" href="{{ route('login') }}">Login</a>
          @endauth
      </li>
      
      
      </ul>
    </nav>
    <!-- END Global navigation -->

  </header>
