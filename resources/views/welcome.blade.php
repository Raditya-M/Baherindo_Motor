@extends('layouts.main')

@section('title', 'Baherindo Motor')

@section('content')

<div class="bg-[#f1f5f9] py-5">
  <div class="flex justify-center">
    <h1 class="text-3xl font-bold mb-2">Welcome to Baherindo Motor</h1>
  </div>
  <p class="text-lg text-center">Tempat jual motor termantap</p>
</div>

<div class="max-w-7xl mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-5 mt-6 px-4">

  @foreach ($motor as $m)
  <div class="w-full bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 mb-10">
    <a href="#">
      <img class="rounded-t-lg w-full h-48 object-cover" src="image/dmitry-zmiy-nCVr1pBKNgQ-unsplash.jpg" />
    </a>
    <div class="p-5">
      <a href="#">
        <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $m['name'] }}</h5>
      </a>
      <p class="mb-3 text-sm text-gray-700 dark:text-gray-400">Harga : {{ $m['price'] }}</p>
      <p class="mb-3 text-sm text-gray-700 dark:text-gray-400">Tahun : {{ $m['tahun'] }}</p>
      <p class="mb-3 text-sm text-gray-700 dark:text-gray-400">Kilometer :  {{ $m['kilometer'] }}</p>
      <a href="#" class="inline-flex items-center px-3 py-2 text-sm text-white font-semibold bg-[#f59e0b] hover:bg-[#d97706] rounded-lg focus:ring-4 focus:outline-none focus:ring-blue-300">
        Cek Detail
        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" fill="none" viewBox="0 0 14 10">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M1 5h12m0 0L9 1m4 4L9 9" />
        </svg>
      </a>
    </div>
  </div>
  @endforeach
</div>


@endsection
