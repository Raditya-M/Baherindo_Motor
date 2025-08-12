@extends('layouts.main')

@section('title', 'Edit Motor - ' . $motor->nama_motor)

@section('content')

<div class="min-h-screen py-12 bg-gray-50">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Header -->
        <div class="text-center mb-8">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Edit Data Motor</h1>
            <p class="text-lg text-gray-600">Perbarui informasi motor {{ $motor->nama_motor }}</p>
        </div>

        <!-- Main Content -->
        <div class="bg-white rounded-3xl shadow-xl overflow-hidden">
            <div class="grid grid-cols-1 lg:grid-cols-2">
                
                <!-- Current Image -->
                <div class="relative">
                    <img src="{{ asset('storage/' . $motor->gambar_motor) }}" 
                         alt="{{ $motor->nama_motor }}" 
                         class="w-full h-96 lg:h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
                    <div class="absolute bottom-4 left-4 bg-white/90 backdrop-blur-sm rounded-lg px-3 py-2">
                        <span class="text-sm font-medium text-gray-700">Foto Saat Ini</span>
                    </div>
                </div>

                <!-- Edit Form -->
                <div class="p-8 lg:p-12">
                    <form action="{{ route('motor.update', $motor->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                        @csrf
                        @method('PUT')

                        <!-- Nama Motor -->
                        <div class="space-y-2">
                            <label for="nama_motor" class="block text-sm font-semibold text-gray-700">Nama Motor</label>
                            <input type="text" 
                                   name="nama_motor" 
                                   id="nama_motor" 
                                   value="{{ $motor->nama_motor }}"
                                   required
                                   class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 bg-gray-50 focus:bg-white">
                        </div>

                        <!-- Harga Motor -->
                        <div class="space-y-2">
                            <label for="harga_motor" class="block text-sm font-semibold text-gray-700">Harga Motor (Rp)</label>
                            <input type="number" 
                                   name="harga_motor" 
                                   id="harga_motor" 
                                   value="{{ $motor->harga_motor }}"
                                   required
                                   class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 bg-gray-50 focus:bg-white">
                        </div>

                        <!-- Grid untuk Tahun dan KM -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Tahun Motor -->
                            <div class="space-y-2">
                                <label for="tahun_motor" class="block text-sm font-semibold text-gray-700">Tahun Motor</label>
                                <input type="number" 
                                       name="tahun_motor" 
                                       id="tahun_motor" 
                                       value="{{ $motor->tahun_motor }}"
                                       required
                                       min="2000"
                                       max="{{ date('Y') + 1 }}"
                                       class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 bg-gray-50 focus:bg-white">
                            </div>

                            <!-- KM Motor -->
                            <div class="space-y-2">
                                <label for="km_motor" class="block text-sm font-semibold text-gray-700">Kilometer (KM)</label>
                                <input type="number" 
                                       name="km_motor" 
                                       id="km_motor" 
                                       value="{{ $motor->km_motor }}"
                                       required
                                       min="0"
                                       class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 bg-gray-50 focus:bg-white">
                            </div>
                        </div>

                        <!-- Upload Gambar Baru (Optional) -->
                        <div class="space-y-2">
                            <label for="gambar_motor" class="block text-sm font-semibold text-gray-700">Ganti Foto Motor (Opsional)</label>
                            <div class="relative">
                                <input type="file" 
                                       name="gambar_motor" 
                                       id="gambar_motor"
                                       accept="image/*"
                                       class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 bg-gray-50 focus:bg-white file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                                <p class="text-xs text-gray-500 mt-1">Kosongkan jika tidak ingin mengganti foto</p>
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="flex flex-col sm:flex-row gap-4 pt-6">
                            <button type="submit" 
                                    class="flex-1 inline-flex items-center justify-center px-8 py-4 bg-gradient-to-r from-yellow-500 to-orange-500 text-white font-semibold rounded-xl hover:from-yellow-600 hover:to-orange-600 transition-all duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-offset-2">
                                <i class="fas fa-save mr-2"></i>
                                Simpan Perubahan
                            </button>
                            
                            <a href="{{ route('motor.show', $motor->id) }}" 
                               class="flex-1 inline-flex items-center justify-center px-8 py-4 border-2 border-gray-300 text-gray-700 font-semibold rounded-xl hover:border-gray-400 hover:bg-gray-50 transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2">
                                <i class="fas fa-times mr-2"></i>
                                Batal
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
