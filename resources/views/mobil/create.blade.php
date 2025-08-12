@extends('layouts.main')

@section('title', 'Tambah Mobil Baru - Baherindo Motors')

@section('content')

<div class="min-h-screen py-12 bg-gray-50">
    <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="text-center mb-8">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Tambah Mobil Baru</h1>
            <p class="text-lg text-gray-600">Lengkapi informasi mobil yang akan dijual</p>
        </div>

        <!-- Form Card -->
        <div class="bg-white rounded-3xl shadow-xl p-8">
            <form action="{{ route('mobil.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                @csrf
                
                <!-- Nama Mobil -->
                <div class="space-y-2">
                    <label for="nama_mobil" class="block text-sm font-semibold text-gray-700">Nama Mobil</label>
                    <input type="text" 
                           name="nama_mobil" 
                           id="nama_mobil" 
                           required
                           class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 bg-gray-50 focus:bg-white" 
                           placeholder="Contoh: Toyota Avanza 1.3 G">
                </div>

                <!-- Harga Mobil -->
                <div class="space-y-2">
                    <label for="harga_mobil" class="block text-sm font-semibold text-gray-700">Harga Mobil (Rp)</label>
                    <input type="number" 
                           name="harga_mobil" 
                           id="harga_mobil" 
                           required
                           class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 bg-gray-50 focus:bg-white" 
                           placeholder="150000000">
                </div>

                <!-- Grid untuk Tahun dan KM -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Tahun Mobil -->
                    <div class="space-y-2">
                        <label for="tahun_mobil" class="block text-sm font-semibold text-gray-700">Tahun Mobil</label>
                        <input type="number" 
                               name="tahun_mobil" 
                               id="tahun_mobil" 
                               required
                               min="2000"
                               max="{{ date('Y') + 1 }}"
                               class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 bg-gray-50 focus:bg-white" 
                               placeholder="2020">
                    </div>

                    <!-- KM Mobil -->
                    <div class="space-y-2">
                        <label for="km_mobil" class="block text-sm font-semibold text-gray-700">Kilometer (KM)</label>
                        <input type="number" 
                               name="km_mobil" 
                               id="km_mobil" 
                               required
                               min="0"
                               class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 bg-gray-50 focus:bg-white" 
                               placeholder="50000">
                    </div>
                </div>

                <!-- Upload Gambar -->
                <div class="space-y-2">
                    <label for="gambar_mobil" class="block text-sm font-semibold text-gray-700">Foto Mobil</label>
                    <div class="relative">
                        <input type="file" 
                               name="gambar_mobil" 
                               id="gambar_mobil"
                               accept="image/*"
                               required
                               class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 bg-gray-50 focus:bg-white file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                        <p class="text-xs text-gray-500 mt-1">Upload foto mobil dengan format JPG, PNG, atau JPEG (Max: 2MB)</p>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 pt-6">
                    <button type="submit" 
                            class="flex-1 inline-flex items-center justify-center px-8 py-4 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold rounded-xl hover:from-blue-700 hover:to-purple-700 transition-all duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        <i class="fas fa-save mr-2"></i>
                        Simpan Mobil
                    </button>
                    
                    <a href="/mobil" 
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
                Tips Foto Mobil yang Baik
            </h3>
            <ul class="text-blue-800 space-y-1 text-sm">
                <li>• Ambil foto dari berbagai sudut (depan, samping, belakang, interior)</li>
                <li>• Pastikan pencahayaan yang cukup dan tidak blur</li>
                <li>• Bersihkan mobil sebelum difoto</li>
                <li>• Hindari background yang mengganggu</li>
                <li>• Sertakan foto interior dan bagian mesin jika memungkinkan</li>
            </ul>
        </div>
    </div>
</div>

@endsection
