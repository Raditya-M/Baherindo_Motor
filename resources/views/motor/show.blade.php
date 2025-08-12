@extends('layouts.main')

@section('title', $motor->nama_motor . ' - Baherindo Motors')

@section('content')

<div class="min-h-screen py-12 bg-gray-50">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Breadcrumb -->
        <nav class="mb-8">
            <div class="flex items-center space-x-2 text-sm text-gray-600">
                <a href="/" class="hover:text-blue-600 transition-colors">Home</a>
                <i class="fas fa-chevron-right text-xs"></i>
                <a href="/" class="hover:text-blue-600 transition-colors">Motors</a>
                <i class="fas fa-chevron-right text-xs"></i>
                <span class="text-gray-900 font-medium">{{ $motor->nama_motor }}</span>
            </div>
        </nav>

        <!-- Main Content -->
        <div class="bg-white rounded-3xl shadow-xl overflow-hidden">
            <div class="grid grid-cols-1 lg:grid-cols-2">
                
                <!-- Image Section -->
                <div class="relative">
                    <img src="{{ asset('storage/' . $motor->gambar_motor) }}" 
                         alt="{{ $motor->nama_motor }}" 
                         class="w-full h-96 lg:h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
                </div>

                <!-- Details Section -->
                <div class="p-8 lg:p-12 flex flex-col justify-between">
                    <div>
                        <!-- Title -->
                        <h1 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-6">
                            {{ $motor->nama_motor }}
                        </h1>

                        <!-- Price -->
                        <div class="mb-8">
                            <span class="text-4xl font-bold text-blue-600">
                                Rp {{ number_format($motor->harga_motor) }}
                            </span>
                        </div>

                        <!-- Specifications -->
                        <div class="grid grid-cols-2 gap-6 mb-8">
                            <div class="bg-gray-50 rounded-2xl p-4">
                                <div class="flex items-center mb-2">
                                    <i class="fas fa-calendar text-blue-600 mr-2"></i>
                                    <span class="text-sm font-medium text-gray-600">Tahun</span>
                                </div>
                                <span class="text-xl font-bold text-gray-900">{{ $motor->tahun_motor }}</span>
                            </div>

                            <div class="bg-gray-50 rounded-2xl p-4">
                                <div class="flex items-center mb-2">
                                    <i class="fas fa-tachometer-alt text-blue-600 mr-2"></i>
                                    <span class="text-sm font-medium text-gray-600">Kilometer</span>
                                </div>
                                <span class="text-xl font-bold text-gray-900">{{ number_format($motor->km_motor) }} km</span>
                            </div>
                        </div>

                        <!-- Features -->
                        <div class="mb-8">
                            <h3 class="text-lg font-semibold text-gray-900 mb-4">Keunggulan</h3>
                            <div class="grid grid-cols-2 gap-3">
                                <div class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-check-circle text-green-500 mr-2"></i>
                                    Kondisi Prima
                                </div>
                                <div class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-check-circle text-green-500 mr-2"></i>
                                    Surat Lengkap
                                </div>
                                <div class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-check-circle text-green-500 mr-2"></i>
                                    Service Record
                                </div>
                                <div class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-check-circle text-green-500 mr-2"></i>
                                    Garansi Mesin
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="space-y-4">
                        <!-- WhatsApp Button -->
                        <a href="https://wa.me/081385260075?text=Halo,%20saya%20tertarik%20dengan%20{{ urlencode($motor->nama_motor) }}" 
                           class="w-full inline-flex items-center justify-center px-8 py-4 bg-green-500 text-white font-semibold rounded-xl hover:bg-green-600 transition-all duration-300 transform hover:scale-105">
                            <i class="fab fa-whatsapp mr-3 text-xl"></i>
                            Beli via WhatsApp
                        </a>

                        <!-- Action Buttons Row -->
                        <div class="flex space-x-3">
                            <a href="{{ route('motor.edit', $motor->id) }}" 
                               class="flex-1 inline-flex items-center justify-center px-6 py-3 bg-yellow-500 text-white font-semibold rounded-xl hover:bg-yellow-600 transition-colors">
                                <i class="fas fa-edit mr-2"></i>
                                Edit
                            </a>
                            
                            <form action="{{ route('motor.destroy', $motor->id) }}" 
                                  method="POST" 
                                  onsubmit="return confirm('Apakah Anda yakin ingin menghapus motor ini?')"
                                  class="flex-1">
                                @csrf
                                @method('DELETE')
                                <button type="submit" 
                                        class="w-full inline-flex items-center justify-center px-6 py-3 bg-red-500 text-white font-semibold rounded-xl hover:bg-red-600 transition-colors">
                                    <i class="fas fa-trash mr-2"></i>
                                    Hapus
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Additional Info -->
        <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Contact Info -->
            <div class="bg-white rounded-2xl p-6 shadow-lg">
                <h3 class="text-xl font-semibold text-gray-900 mb-4">Hubungi Penjual</h3>
                <div class="space-y-3">
                    <div class="flex items-center">
                        <i class="fas fa-user text-gray-400 mr-3"></i>
                        <span class="text-gray-700">Dolly Saputra</span>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-phone text-gray-400 mr-3"></i>
                        <span class="text-gray-700">0811-1111-1111</span>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-map-marker-alt text-gray-400 mr-3"></i>
                        <span class="text-gray-700">Jl. Poras No. 9, Bogor</span>
                    </div>
                </div>
            </div>

            <!-- Financing Info -->
            <div class="bg-gradient-to-r from-blue-500 to-purple-600 rounded-2xl p-6 text-white">
                <h3 class="text-xl font-semibold mb-4">Paket Kredit Tersedia</h3>
                <div class="space-y-2">
                    <div class="flex justify-between">
                        <span>DP Mulai:</span>
                        <span class="font-semibold">Rp {{ number_format($motor->harga_motor * 0.2) }}</span>
                    </div>
                    <div class="flex justify-between">
                        <span>Cicilan 12 Bulan:</span>
                        <span class="font-semibold">Rp {{ number_format(($motor->harga_motor * 0.8) / 12) }}/bulan</span>
                    </div>
                    <div class="flex justify-between">
                        <span>Cicilan 24 Bulan:</span>
                        <span class="font-semibold">Rp {{ number_format(($motor->harga_motor * 0.8) / 24) }}/bulan</span>
                    </div>
                </div>
                <p class="text-sm text-blue-100 mt-4">*Simulasi kredit, hubungi kami untuk detail lengkap</p>
            </div>
        </div>
    </div>
</div>

@endsection
