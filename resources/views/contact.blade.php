@extends('layouts.main')

@section('title', 'Baherindo Motors - Contact Us')

@section('content')

<!-- Hero Section -->
<section class="relative py-20 bg-gradient-to-br from-blue-50 to-purple-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center animate-fade-in">
            <h1 class="text-4xl md:text-6xl font-bold text-gray-900 mb-6">
                Hubungi
                <span class="block bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">Kami</span>
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                Punya pertanyaan tentang motor, mobil, harga, atau cicilan? Tim profesional kami siap membantu Anda
            </p>
        </div>
    </div>
</section>

<!-- Contact Info Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-16">
            <div class="bg-gray-50 rounded-2xl p-8 text-center hover:shadow-lg transition-shadow duration-300 group">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-r from-blue-600 to-purple-600 rounded-2xl mb-6 group-hover:scale-110 transition-transform duration-300">
                    <i class="fas fa-map-marker-alt text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Alamat</h3>
                <p class="text-lg font-medium text-blue-600 mb-2">Perfection Auto Gallery Jakarta</p>
                <p class="text-sm text-gray-600">Kunjungi showroom kami untuk melihat koleksi lengkap</p>
            </div>

            <div class="bg-gray-50 rounded-2xl p-8 text-center hover:shadow-lg transition-shadow duration-300 group">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-r from-blue-600 to-purple-600 rounded-2xl mb-6 group-hover:scale-110 transition-transform duration-300">
                    <i class="fas fa-phone text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Telepon</h3>
                <p class="text-lg font-medium text-blue-600 mb-2">0813-8526-0075</p>
                <p class="text-sm text-gray-600">Hubungi kami untuk konsultasi dan informasi</p>
            </div>

            <div class="bg-gray-50 rounded-2xl p-8 text-center hover:shadow-lg transition-shadow duration-300 group">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-r from-blue-600 to-purple-600 rounded-2xl mb-6 group-hover:scale-110 transition-transform duration-300">
                    <i class="fas fa-envelope text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Email</h3>
                <p class="text-lg font-medium text-blue-600 mb-2">cs@baherindo.com</p>
                <p class="text-sm text-gray-600">Kirim pertanyaan Anda melalui email</p>
            </div>

            <div class="bg-gray-50 rounded-2xl p-8 text-center hover:shadow-lg transition-shadow duration-300 group">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-r from-blue-600 to-purple-600 rounded-2xl mb-6 group-hover:scale-110 transition-transform duration-300">
                    <i class="fas fa-clock text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Jam Operasional</h3>
                <p class="text-lg font-medium text-blue-600 mb-2">Senin - Sabtu, 08.00 - 17.00 WIB</p>
                <p class="text-sm text-gray-600">Kami siap melayani Anda setiap hari kerja</p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Form & Map Section -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Contact Form -->
            <div class="bg-white rounded-3xl p-8 shadow-lg">
                <h2 class="text-3xl font-bold text-gray-900 mb-6">Kirim Pesan</h2>
                <p class="text-gray-600 mb-8">Isi form di bawah ini dan kami akan segera menghubungi Anda</p>

                <form class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Nama Lengkap</label>
                            <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-colors" placeholder="Masukkan nama lengkap">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Nomor WhatsApp</label>
                            <input type="tel" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-colors" placeholder="08xx-xxxx-xxxx">
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                        <input type="email" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-colors" placeholder="nama@email.com">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Jenis Kendaraan</label>
                        <select class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-colors">
                            <option>Pilih jenis kendaraan</option>
                            <option>Motor</option>
                            <option>Mobil</option>
                            <option>Keduanya</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Pesan</label>
                        <textarea rows="4" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-colors resize-none" placeholder="Ceritakan kebutuhan kendaraan Anda..."></textarea>
                    </div>

                    <button type="submit" class="w-full inline-flex items-center justify-center px-8 py-4 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold rounded-xl hover:from-blue-700 hover:to-purple-700 transition-all duration-300 transform hover:scale-105">
                        <i class="fas fa-paper-plane mr-2"></i>
                        Kirim Pesan
                    </button>
                </form>
            </div>

            <!-- Map & Quick Contact -->
            <div class="space-y-8">
                <!-- Map -->
                <div class="bg-white rounded-3xl overflow-hidden shadow-lg">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8116365.512604197!2d104.39259176205725!3d-6.638341479285437!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6a1dde9126161d%3A0xdae6e715362ce851!2sPerfection%20Auto%20Gallery%20Jakarta%20%7C%20Perfection%20Auto%20Detailing%3A%20PPF%20-%20Glass%20Coating%20-%20Car%20Wash%20-%20Window%20Film%20-%20Car%20Accessories!5e0!3m2!1sid!2sid!4v1754970100492!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <!-- Quick Contact -->
                <div class="bg-gradient-to-r from-green-500 to-green-600 rounded-3xl p-8 text-white">
                    <div class="flex items-center mb-4">
                        <i class="fab fa-whatsapp text-3xl mr-3"></i>
                        <h3 class="text-2xl font-bold">Butuh Respon Cepat?</h3>
                    </div>
                    <p class="mb-6 text-green-100">
                        Hubungi langsung via WhatsApp untuk mendapatkan informasi real-time tentang stok dan harga terbaru
                    </p>
                    <a href="https://wa.me/6281385260075?text=Halo,%20saya%20ingin%20bertanya%20tentang%20kendaraan%20di%20Baherindo%20Motors" 
                       target="_blank" 
                       class="inline-flex items-center px-6 py-3 bg-white text-green-600 font-semibold rounded-xl hover:bg-gray-100 transition-colors">
                        <i class="fab fa-whatsapp mr-2"></i>
                        Chat WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-20 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Pertanyaan Umum</h2>
            <p class="text-xl text-gray-600">Jawaban untuk pertanyaan yang sering diajukan</p>
        </div>

        <div class="space-y-6">
            <div class="bg-gray-50 rounded-2xl p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Apakah tersedia layanan kredit?</h3>
                <p class="text-gray-600">
                    Ya, kami menyediakan berbagai paket kredit dengan bunga kompetitif dan proses yang mudah. Tim kami akan membantu Anda memilih paket yang sesuai dengan kemampuan finansial.
                </p>
            </div>

            <div class="bg-gray-50 rounded-2xl p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Bagaimana dengan garansi kendaraan?</h3>
                <p class="text-gray-600">
                    Setiap kendaraan yang kami jual dilengkapi dengan garansi sesuai standar pabrikan. Untuk kendaraan bekas, kami juga memberikan garansi terbatas untuk komponen utama.
                </p>
            </div>

            <div class="bg-gray-50 rounded-2xl p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Apakah bisa tukar tambah kendaraan lama?</h3>
                <p class="text-gray-600">
                    Tentu saja! Kami menerima tukar tambah kendaraan lama Anda dengan harga yang fair. Tim penilai kami akan memberikan estimasi harga terbaik untuk kendaraan lama Anda.
                </p>
            </div>
        </div>
    </div>
</section>

@endsection
