@extends('layouts.app')
@section('title', 'Home')
@section('content')
<style>
.heart-svg:hover path {
    fill: black;
}
</style>
@yield('navbar')
  <!-- ✅ Grid Section - Starts Here 👇 -->
  <section class="w-fit mx-auto grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 justify-items-center justify-center gap-y-20 gap-x-14 mt-10 mb-5">
  


    <livewire:preview-component />










    <!--   ✅ Product card 1 - Starts Here 👇 -->
    {{-- <div class="w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
      <a href="#">
        <img src="https://images.unsplash.com/photo-1646753522408-077ef9839300?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwcm9maWxlLXBhZ2V8NjZ8fHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="Product" class="h-80 w-72 object-cover rounded-t-xl" />
        <div class="px-4 py-3 w-72">
          <span class="text-gray-400 mr-3 uppercase text-xs">Brand</span>
          <p class="text-lg font-bold text-black truncate block capitalize">Product Name</p>
          <div class="flex items-center">
            <p class="text-lg font-semibold text-black cursor-auto my-3">$149</p>
            <div class="ml-auto">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 heart-svg">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                </svg>
            </div>
          </div>
        </div>
      </a>
    </div> --}}
</section>
@endsection
