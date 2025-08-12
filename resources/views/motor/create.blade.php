@extends('layouts.main')

@section('title', 'Tambah Motor Baru - Baherindo Motors')

@section('content')

<div class="min-h-screen py-12 bg-gray-50">
    <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="text-center mb-8">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Tambah Motor Baru</h1>
            <p class="text-lg text-gray-600">Lengkapi informasi motor yang akan dijual</p>
        </div>

        <!-- Form Card -->
        <div class="bg-white rounded-3xl shadow-xl p-8">
            <form action="{{ route('motor.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                @csrf
                
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

                <!-- Upload Gambar -->
                <div class="space-y-2">
                    <label for="gambar_motor" class="block text-sm font-semibold text-gray-700">Foto Motor</label>
                    <div class="relative">
                        <input type="file" 
                               name="gambar_motor" 
                               id="gambar_motor"
                               accept="image/*"
                               required
                               class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 bg-gray-50 focus:bg-white file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                        <p class="text-xs text-gray-500 mt-1">Upload foto motor dengan format JPG, PNG, atau JPEG (Max: 2MB)</p>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 pt-6">
                    <button type="submit" 
                            class="flex-1 inline-flex items-center justify-center px-8 py-4 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold rounded-xl hover:from-blue-700 hover:to-purple-700 transition-all duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        <i class="fas fa-save mr-2"></i>
                        Simpan Motor
                    </button>
                    
                    <a href="/" 
                       class="flex-1 inline-flex items-center justify-center px-8 py-4 border-2 border-gray-300 text-gray-700 font-semibold rounded-xl hover:border-gray-400 hover:bg-gray-50 transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2">
                        <i class="fas fa-times mr-2"></i>
                        Batal
                    </a>
                </div>
            </form>
        </div>

        <!-- Tips Card -->
        <div class="mt-8 bg-blue-50 rounded-2xl p-6 border border-blue-200">
            <h3 class="text-lg font-semibold text-blue-900 mb-3 flex items-center">
                <i class="fas fa-lightbulb mr-2"></i>
                Tips Foto Motor yang Baik
            </h3>
            <ul class="text-blue-800 space-y-1 text-sm">
                <li>• Ambil foto dari berbagai sudut (depan, samping, belakang)</li>
                <li>• Pastikan pencahayaan yang cukup dan tidak blur</li>
                <li>• Bersihkan motor sebelum difoto</li>
                <li>• Hindari background yang mengganggu</li>
            </ul>
        </div>
    </div>
</div>

@endsection
