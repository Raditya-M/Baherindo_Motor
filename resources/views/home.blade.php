@extends('layouts.main')

@section('title', 'Baherindo Motors - Premium Motorcycle Dealer')

@section('content')

<!-- Hero Section -->
<section class="relative min-h-screen flex items-center justify-center overflow-hidden">
    <!-- Background -->
    <div class="absolute inset-0 bg-gradient-to-br from-gray-900 via-blue-900 to-purple-900">
        <div class="absolute inset-0 bg-black/20"></div>
        <img src="/placeholder.svg?height=1080&width=1920&text=Showroom" alt="Showroom" class="w-full h-full object-cover opacity-30">
    </div>

    <!-- Content -->
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center animate-fade-in">
        <div class="max-w-4xl mx-auto">
            <h1 class="text-5xl md:text-7xl font-bold text-white mb-6 leading-tight">
                Kendaraan
                <span class="block bg-gradient-to-r from-blue-400 to-purple-400 bg-clip-text text-transparent">Impian Anda</span>
                Menanti
            </h1>

            <p class="text-xl md:text-2xl text-gray-300 mb-8 max-w-2xl mx-auto leading-relaxed">
                Temukan koleksi motor premium dengan kualitas terjamin dan harga terbaik di Baherindo Motors
            </p>

            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                <a href="#motorcycles" class="group inline-flex items-center px-8 py-4 bg-white text-gray-900 font-semibold rounded-2xl hover:bg-gray-100 transition-all duration-300 transform hover:scale-105">
                    Jelajahi Koleksi
                    <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
                </a>
                <a href="/contact" class="group inline-flex items-center px-8 py-4 border-2 border-white/30 text-white font-semibold rounded-2xl hover:bg-white/10 transition-all duration-300">
                    <i class="fas fa-phone mr-2"></i>
                    Hubungi Kami
                </a>
            </div>
        </div>

        <!-- Stats -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 mt-20 max-w-4xl mx-auto">
            <div class="text-center">
                <div class="text-3xl md:text-4xl font-bold text-white mb-2">500+</div>
                <div class="text-gray-300">Kendaraan Terjual</div>
            </div>
            <div class="text-center">
                <div class="text-3xl md:text-4xl font-bold text-white mb-2">10+</div>
                <div class="text-gray-300">Tahun Pengalaman</div>
            </div>
            <div class="text-center">
                <div class="text-3xl md:text-4xl font-bold text-white mb-2">98%</div>
                <div class="text-gray-300">Kepuasan Pelanggan</div>
            </div>
            <div class="text-center">
                <div class="text-3xl md:text-4xl font-bold text-white mb-2">24/7</div>
                <div class="text-gray-300">Layanan Support</div>
            </div>
        </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce-slow">
        <div class="w-6 h-10 border-2 border-white/30 rounded-full flex justify-center">
            <div class="w-1 h-3 bg-white/50 rounded-full mt-2"></div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 animate-slide-up">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Mengapa Memilih Kami?</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Pengalaman bertahun-tahun dalam industri otomotif membuat kami memahami kebutuhan Anda
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="text-center group">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-r from-blue-600 to-purple-600 rounded-2xl mb-6 group-hover:scale-110 transition-transform duration-300">
                    <i class="fas fa-shield-alt text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Kualitas Terjamin</h3>
                <p class="text-gray-600">Setiap kendaraan telah melalui inspeksi ketat untuk memastikan kualitas terbaik</p>
            </div>
            <div class="text-center group">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-r from-blue-600 to-purple-600 rounded-2xl mb-6 group-hover:scale-110 transition-transform duration-300">
                    <i class="fas fa-award text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Harga Terbaik</h3>
                <p class="text-gray-600">Kami menawarkan harga kompetitif dengan kualitas premium</p>
            </div>
            <div class="text-center group">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-r from-blue-600 to-purple-600 rounded-2xl mb-6 group-hover:scale-110 transition-transform duration-300">
                    <i class="fas fa-users text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Layanan Prima</h3>
                <p class="text-gray-600">Tim berpengalaman siap membantu Anda menemukan kendaraan impian</p>
            </div>
        </div>
    </div>
</section>

<!-- Motorcycles Section -->
<section id="motorcycles" class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Koleksi Motor Premium</h2>
            <p class="text-xl text-gray-600">Pilihan motor berkualitas dengan harga terbaik</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($motor->take(3) as $m)
            <div class="group bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden card-hover">
                <!-- Image -->
                <div class="relative overflow-hidden">
                    <a href="{{ route('motor.show', $m->id) }}">
                        <img src="{{ asset('storage/' . $m->gambar_motor) }}" alt="{{ $m->nama_motor }}" 
                             class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-700">
                    </a>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </div>

                <!-- Content -->
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-blue-600 transition-colors">
                        {{ $m->nama_motor }}
                    </h3>

                    <div class="space-y-2 mb-4">
                        <div class="flex items-center justify-between">
                            <span class="text-2xl font-bold text-gray-900">Rp {{ number_format($m->harga_motor) }}</span>
                        </div>

                        <div class="flex items-center space-x-4 text-sm text-gray-600">
                            <div class="flex items-center space-x-1">
                                <i class="fas fa-calendar text-gray-400"></i>
                                <span>{{ $m->tahun_motor }}</span>
                            </div>
                            <div class="flex items-center space-x-1">
                                <i class="fas fa-tachometer-alt text-gray-400"></i>
                                <span>{{ number_format($m->km_motor) }} km</span>
                            </div>
                        </div>
                    </div>

                    <!-- Actions -->
                    <div class="flex space-x-2">
                        <a href="https://wa.me/081385260075?text=Halo,%20saya%20tertarik%20dengan%20{{ urlencode($m->nama_motor) }}" 
                           class="flex-1 inline-flex items-center justify-center px-4 py-3 bg-green-500 text-white font-semibold rounded-xl hover:bg-green-600 transition-colors">
                            <i class="fab fa-whatsapp mr-2"></i>
                            WhatsApp
                        </a>
                        <a href="{{ route('motor.show', $m->id) }}" 
                           class="px-4 py-3 border-2 border-gray-200 text-gray-700 font-semibold rounded-xl hover:border-blue-500 hover:text-blue-600 transition-colors">
                            Detail
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Cars Section -->
<section id="cars" class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Koleksi Mobil Premium</h2>
            <p class="text-xl text-gray-600">Pilihan mobil berkualitas dengan harga kompetitif</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($mobil->take(3) as $m)

            <div class="group bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden card-hover">
                <!-- Image -->
                <div class="relative overflow-hidden">
                    <img src="{{ asset('storage/' . $m->gambar_mobil) }}" alt="{{ $m->nama_mobil }}" 
                         class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </div>

                <!-- Content -->
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-blue-600 transition-colors">
                        {{ $m->nama_mobil }}
                    </h3>

                    <div class="space-y-2 mb-4">
                        <div class="flex items-center justify-between">
                            <span class="text-2xl font-bold text-gray-900">Rp {{ number_format($m->harga_mobil) }}</span>
                        </div>

                        <div class="flex items-center space-x-4 text-sm text-gray-600">
                            <div class="flex items-center space-x-1">
                                <i class="fas fa-calendar text-gray-400"></i>
                                <span>{{ $m->tahun_mobil }}</span>
                            </div>
                            <div class="flex items-center space-x-1">
                                <i class="fas fa-tachometer-alt text-gray-400"></i>
                                <span>{{ number_format($m->km_mobil) }} km</span>
                            </div>
                        </div>
                    </div>

                    <!-- Actions -->
                    <div class="flex space-x-2">
                        <a href="https://wa.me/081385260075?text=Halo,%20saya%20tertarik%20dengan%20{{ urlencode($m->nama_mobil) }}" 
                           class="flex-1 inline-flex items-center justify-center px-4 py-3 bg-green-500 text-white font-semibold rounded-xl hover:bg-green-600 transition-colors">
                            <i class="fab fa-whatsapp mr-2"></i>
                            WhatsApp
                        </a>
                        <button class="px-4 py-3 border-2 border-gray-200 text-gray-700 font-semibold rounded-xl hover:border-blue-500 hover:text-blue-600 transition-colors">
                            Detail
                        </button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        {{-- <div class="text-center mt-12">
            <a href="/motor/create" class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold rounded-2xl hover:from-blue-700 hover:to-purple-700 transition-all duration-300 transform hover:scale-105">
                <i class="fas fa-plus mr-2"></i>
                Tambah Motor Baru
            </a>
        </div> --}}
    </div>
</section>

@endsection
