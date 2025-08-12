@extends('layouts.main')

@section('title', 'Baherindo Motors - About Us')

@section('content')

<!-- Hero Section -->
<section class="relative py-20 bg-gradient-to-br from-blue-50 to-purple-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center animate-fade-in">
            <h1 class="text-4xl md:text-6xl font-bold text-gray-900 mb-6">
                Tentang
                <span class="block bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">Baherindo Motors</span>
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                Lebih dari sekedar dealer, kami adalah partner terpercaya dalam perjalanan Anda menemukan kendaraan impian
            </p>
        </div>
    </div>
</section>

<!-- Story Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="animate-slide-up">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Perjalanan Kami</h2>
                <div class="space-y-6 text-gray-600 leading-relaxed">
                    <p>
                        Selamat datang di Baherindo Motors, tempat di mana impian berkendara Anda menjadi kenyataan. Kami hadir sebagai solusi terpercaya untuk kebutuhan kendaraan bermotor Anda, baik motor maupun mobil.
                    </p>
                    <p>
                        Dengan pengalaman bertahun-tahun di industri otomotif, kami memahami bahwa setiap pelanggan memiliki kebutuhan yang unik. Oleh karena itu, kami menyediakan berbagai pilihan kendaraan berkualitas tinggi dari berbagai merek ternama dengan harga yang kompetitif.
                    </p>
                    <p>
                        Tim profesional kami yang berpengalaman siap membantu Anda dari proses konsultasi, pemilihan kendaraan, hingga layanan purna jual. Kami juga menyediakan berbagai paket pembiayaan yang fleksibel untuk memudahkan Anda dalam memiliki kendaraan impian.
                    </p>
                </div>
            </div>

            <div class="relative">
                <div class="aspect-square rounded-3xl overflow-hidden shadow-2xl">
                    <img src="image/2022-01-otre-bmwastrasunter-1.png" alt="Baherindo Motors Showroom" class="w-full h-full object-cover">
                </div>
                <div class="absolute -bottom-6 -right-6 w-32 h-32 bg-gradient-to-r from-blue-600 to-purple-600 rounded-3xl opacity-20"></div>
            </div>
        </div>
    </div>
</section>

<!-- Values Section -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Nilai-Nilai Kami</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Prinsip-prinsip yang menjadi fondasi dalam setiap layanan yang kami berikan
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow duration-300 text-center group">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-r from-blue-600 to-purple-600 rounded-2xl mb-6 group-hover:scale-110 transition-transform duration-300">
                    <i class="fas fa-shield-alt text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Kepercayaan</h3>
                <p class="text-gray-600">Kami membangun kepercayaan melalui transparansi dan kejujuran dalam setiap transaksi.</p>
            </div>

            <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow duration-300 text-center group">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-r from-blue-600 to-purple-600 rounded-2xl mb-6 group-hover:scale-110 transition-transform duration-300">
                    <i class="fas fa-award text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Kualitas</h3>
                <p class="text-gray-600">Setiap kendaraan yang kami jual telah melalui inspeksi ketat untuk memastikan kualitas terbaik.</p>
            </div>

            <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow duration-300 text-center group">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-r from-blue-600 to-purple-600 rounded-2xl mb-6 group-hover:scale-110 transition-transform duration-300">
                    <i class="fas fa-users text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Pelayanan</h3>
                <p class="text-gray-600">Tim profesional kami siap memberikan layanan terbaik dari konsultasi hingga after-sales.</p>
            </div>

            <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow duration-300 text-center group">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-r from-blue-600 to-purple-600 rounded-2xl mb-6 group-hover:scale-110 transition-transform duration-300">
                    <i class="fas fa-heart text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Kepuasan</h3>
                <p class="text-gray-600">Kepuasan pelanggan adalah prioritas utama dalam setiap aspek layanan kami.</p>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="py-20 bg-gradient-to-r from-blue-600 to-purple-600">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Pencapaian Kami</h2>
            <p class="text-xl text-blue-100">Angka-angka yang menunjukkan dedikasi kami</p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
            <div class="text-center">
                <div class="text-4xl md:text-5xl font-bold text-white mb-2">500+</div>
                <div class="text-blue-100">Kendaraan Terjual</div>
            </div>
            <div class="text-center">
                <div class="text-4xl md:text-5xl font-bold text-white mb-2">10+</div>
                <div class="text-blue-100">Tahun Pengalaman</div>
            </div>
            <div class="text-center">
                <div class="text-4xl md:text-5xl font-bold text-white mb-2">98%</div>
                <div class="text-blue-100">Kepuasan Pelanggan</div>
            </div>
            <div class="text-center">
                <div class="text-4xl md:text-5xl font-bold text-white mb-2">50+</div>
                <div class="text-blue-100">Mitra Dealer</div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Siap Menemukan Kendaraan Impian?</h2>
        <p class="text-xl text-gray-600 mb-8">
            Tim profesional kami siap membantu Anda menemukan kendaraan yang tepat sesuai kebutuhan dan budget
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="/contact" class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold rounded-2xl hover:from-blue-700 hover:to-purple-700 transition-all duration-300 transform hover:scale-105">
                Hubungi Kami
            </a>
            <a href="/" class="inline-flex items-center px-8 py-4 border-2 border-gray-300 text-gray-700 font-semibold rounded-2xl hover:border-blue-500 hover:text-blue-600 transition-colors">
                Lihat Koleksi
            </a>
        </div>
    </div>
</section>

@endsection
