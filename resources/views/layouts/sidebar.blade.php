<!-- Sidebar -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">

<div class="w-64 flex  hidden sm:block">
    <ul class="text-gray-700">

        <li class="block cursor-pointer p-2 hover:bg-gray-800 hover:text-gray-300">
            <a class="" href="{{route('admin.dashboard')}}">
                <span class="w-8 mb-5 relative">
                    <i class="w-8 fas fa-file-alt p-2 rounded-full mx-2"></i>
                </span>
                Dashboard
            </a>
        </li>
        <li class="block cursor-pointer p-2 hover:bg-gray-800 hover:text-gray-300">
            <a class="" href="{{ route('admin.books') }}">
                <i class="w-8 fas fa-paper-plane p-2 rounded-full mx-2"></i>
                Books
            </a>
        </li>
        <li class="block cursor-pointer p-2 hover:bg-gray-800 hover:text-gray-300">
            <a class="" href="{{ route('admin.users') }}">
                <i class="w-8 fas fa-user p-2 rounded-full mx-2"></i>
                Users
            </a>
        </li>
    </ul>
</div>
