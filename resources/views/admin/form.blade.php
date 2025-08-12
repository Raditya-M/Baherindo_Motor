@extends('layouts.main')

@section('title', 'Admin Panel - Baherindo Motors')

@section('content')

<div class="min-h-screen py-12 bg-gray-50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Header -->
        <div class="text-center mb-8">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Admin Panel</h1>
            <p class="text-lg text-gray-600">Kelola data kendaraan dengan mudah</p>
        </div>

        <!-- Quick Actions -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
            <a href="/motor/create" class="group bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 text-center">
                <div class="inline-flex items-center justify-center w-12 h-12 bg-blue-100 rounded-xl mb-4 group-hover:bg-blue-200 transition-colors">
                    <i class="fas fa-motorcycle text-blue-600 text-xl"></i>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Tambah Motor</h3>
                <p class="text-sm text-gray-600">Tambah motor baru ke inventory</p>
            </a>

            <a href="/mobil/create" class="group bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 text-center">
                <div class="inline-flex items-center justify-center w-12 h-12 bg-green-100 rounded-xl mb-4 group-hover:bg-green-200 transition-colors">
                    <i class="fas fa-car text-green-600 text-xl"></i>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Tambah Mobil</h3>
                <p class="text-sm text-gray-600">Tambah mobil baru ke inventory</p>
            </a>

            <a href="/" class="group bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 text-center">
                <div class="inline-flex items-center justify-center w-12 h-12 bg-purple-100 rounded-xl mb-4 group-hover:bg-purple-200 transition-colors">
                    <i class="fas fa-list text-purple-600 text-xl"></i>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Lihat Motor</h3>
                <p class="text-sm text-gray-600">Kelola daftar motor</p>
            </a>

            <a href="/mobil" class="group bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 text-center">
                <div class="inline-flex items-center justify-center w-12 h-12 bg-orange-100 rounded-xl mb-4 group-hover:bg-orange-200 transition-colors">
                    <i class="fas fa-list-alt text-orange-600 text-xl"></i>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Lihat Mobil</h3>
                <p class="text-sm text-gray-600">Kelola daftar mobil</p>
            </a>
        </div>

        <!-- Quick Add Form -->
        <div class="bg-white rounded-3xl shadow-xl p-8">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">Quick Add Motor</h2>
            
            <form class="space-y-6">
                <!-- Nama Motor -->
                <div class="space-y-2">
                    <label for="nama_motor" class="block text-sm font-semibold text-gray-700">Nama Motor</label>
                    <input type="text" 
                           name="nama_motor" 
                           id="nama_motor" 
                           required
                           class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 bg-gray-50 focus:bg-white" 
                           placeholder="Contoh: Honda Vario 150">
                </div>

                <!-- Harga Motor -->
                <div class="space-y-2">
                    <label for="harga_motor" class="block text-sm font-semibold text-gray-700">Harga Motor (Rp)</label>
                    <input type="number" 
                           name="harga_motor" 
                           id="harga_motor" 
                           required
                           class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 bg-gray-50 focus:bg-white" 
                           placeholder="25000000">
                </div>

                <!-- Grid untuk Tahun dan KM -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Tahun Motor -->
                    <div class="space-y-2">
                        <label for="tahun_motor" class="block text-sm font-semibold text-gray-700">Tahun Motor</label>
                        <input type="number" 
                               name="tahun_motor" 
                               id="tahun_motor" 
                               required
                               min="2000"
                               max="{{ date('Y') + 1 }}"
                               class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 bg-gray-50 focus:bg-white" 
                               placeholder="2023">
                    </div>

                    <!-- KM Motor -->
                    <div class="space-y-2">
                        <label for="km_motor" class="block text-sm font-semibold text-gray-700">Kilometer (KM)</label>
                        <input type="number" 
                               name="km_motor" 
                               id="km_motor" 
                               required
                               min="0"
                               class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 bg-gray-50 focus:bg-white" 
                               placeholder="5000">
                    </div>
                </div>

                <!-- Action Button -->
                <div class="pt-6">
                    <button type="submit" 
                            class="w-full inline-flex items-center justify-center px-8 py-4 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold rounded-xl hover:from-blue-700 hover:to-purple-700 transition-all duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        <i class="fas fa-plus mr-2"></i>
                        Tambah Motor
                    </button>
                </div>
            </form>
        </div>

        <!-- Statistics -->
        <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-gradient-to-r from-blue-500 to-blue-600 rounded-2xl p-6 text-white">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-blue-100">Total Motor</p>
                        <p class="text-3xl font-bold">25</p>
                    </div>
                    <i class="fas fa-motorcycle text-4xl text-blue-200"></i>
                </div>
            </div>

            <div class="bg-gradient-to-r from-green-500 to-green-600 rounded-2xl p-6 text-white">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-green-100">Total Mobil</p>
                        <p class="text-3xl font-bold">15</p>
                    </div>
                    <i class="fas fa-car text-4xl text-green-200"></i>
                </div>
            </div>

            <div class="bg-gradient-to-r from-purple-500 to-purple-600 rounded-2xl p-6 text-white">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-purple-100">Total Kendaraan</p>
                        <p class="text-3xl font-bold">40</p>
                    </div>
                    <i class="fas fa-chart-bar text-4xl text-purple-200"></i>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
