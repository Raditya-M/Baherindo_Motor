import { MapPin, Phone, Mail, Clock, MessageCircle, Send } from "lucide-react"

const contactInfo = [
  {
    icon: MapPin,
    title: "Alamat",
    content: "Jl. Poras No. 9, Bogor",
    description: "Kunjungi showroom kami untuk melihat koleksi lengkap",
  },
  {
    icon: Phone,
    title: "Telepon",
    content: "0811-1111-1111",
    description: "Hubungi kami untuk konsultasi dan informasi",
  },
  {
    icon: Mail,
    title: "Email",
    content: "cs@baherindo.com",
    description: "Kirim pertanyaan Anda melalui email",
  },
  {
    icon: Clock,
    title: "Jam Operasional",
    content: "Senin - Sabtu, 08.00 - 17.00 WIB",
    description: "Kami siap melayani Anda setiap hari kerja",
  },
]

export default function ContactPage() {
  return (
    <div className="min-h-screen">
      {/* Hero Section */}
      <section className="relative py-20 bg-gradient-to-br from-blue-50 to-purple-50">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="text-center">
            <h1 className="text-4xl md:text-6xl font-bold text-gray-900 mb-6">
              Hubungi
              <span className="text-gradient block">Kami</span>
            </h1>
            <p className="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
              Punya pertanyaan tentang motor, mobil, harga, atau cicilan? Tim profesional kami siap membantu Anda
            </p>
          </div>
        </div>
      </section>

      {/* Contact Info Section */}
      <section className="py-20 bg-white">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-16">
            {contactInfo.map((info, index) => (
              <div
                key={index}
                className="bg-gray-50 rounded-2xl p-8 text-center hover:shadow-lg transition-shadow duration-300 group"
              >
                <div className="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-r from-blue-600 to-purple-600 rounded-2xl mb-6 group-hover:scale-110 transition-transform duration-300">
                  <info.icon className="h-8 w-8 text-white" />
                </div>
                <h3 className="text-xl font-semibold text-gray-900 mb-2">{info.title}</h3>
                <p className="text-lg font-medium text-blue-600 mb-2">{info.content}</p>
                <p className="text-sm text-gray-600">{info.description}</p>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* Contact Form & Map Section */}
      <section className="py-20 bg-gray-50">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="grid grid-cols-1 lg:grid-cols-2 gap-12">
            {/* Contact Form */}
            <div className="bg-white rounded-3xl p-8 shadow-lg">
              <h2 className="text-3xl font-bold text-gray-900 mb-6">Kirim Pesan</h2>
              <p className="text-gray-600 mb-8">Isi form di bawah ini dan kami akan segera menghubungi Anda</p>

              <form className="space-y-6">
                <div className="grid grid-cols-1 md:grid-cols-2 gap-6">
                  <div>
                    <label className="block text-sm font-medium text-gray-700 mb-2">Nama Lengkap</label>
                    <input
                      type="text"
                      className="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-colors"
                      placeholder="Masukkan nama lengkap"
                    />
                  </div>
                  <div>
                    <label className="block text-sm font-medium text-gray-700 mb-2">Nomor WhatsApp</label>
                    <input
                      type="tel"
                      className="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-colors"
                      placeholder="08xx-xxxx-xxxx"
                    />
                  </div>
                </div>

                <div>
                  <label className="block text-sm font-medium text-gray-700 mb-2">Email</label>
                  <input
                    type="email"
                    className="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-colors"
                    placeholder="nama@email.com"
                  />
                </div>

                <div>
                  <label className="block text-sm font-medium text-gray-700 mb-2">Jenis Kendaraan</label>
                  <select className="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-colors">
                    <option>Pilih jenis kendaraan</option>
                    <option>Motor</option>
                    <option>Mobil</option>
                    <option>Keduanya</option>
                  </select>
                </div>

                <div>
                  <label className="block text-sm font-medium text-gray-700 mb-2">Pesan</label>
                  <textarea
                    rows={4}
                    className="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-colors resize-none"
                    placeholder="Ceritakan kebutuhan kendaraan Anda..."
                  ></textarea>
                </div>

                <button
                  type="submit"
                  className="w-full inline-flex items-center justify-center px-8 py-4 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold rounded-xl hover:from-blue-700 hover:to-purple-700 transition-all duration-300 transform hover:scale-105"
                >
                  <Send className="mr-2 h-5 w-5" />
                  Kirim Pesan
                </button>
              </form>
            </div>

            {/* Map & Quick Contact */}
            <div className="space-y-8">
              {/* Map */}
              <div className="bg-white rounded-3xl overflow-hidden shadow-lg">
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.5454264781692!2d106.7699491758721!3d-6.578905264313998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c457bdedb2a5%3A0xb8982f60d5bec706!2sPuskesmas%20Gang%20Kelor!5e0!3m2!1sid!2sid!4v1754898173589!5m2!1sid!2sid"
                  width="100%"
                  height="300"
                  style={{ border: 0 }}
                  allowFullScreen
                  loading="lazy"
                  referrerPolicy="no-referrer-when-downgrade"
                  className="w-full"
                />
              </div>

              {/* Quick Contact */}
              <div className="bg-gradient-to-r from-green-500 to-green-600 rounded-3xl p-8 text-white">
                <div className="flex items-center mb-4">
                  <MessageCircle className="h-8 w-8 mr-3" />
                  <h3 className="text-2xl font-bold">Butuh Respon Cepat?</h3>
                </div>
                <p className="mb-6 text-green-100">
                  Hubungi langsung via WhatsApp untuk mendapatkan informasi real-time tentang stok dan harga terbaru
                </p>
                <a
                  href="https://wa.me/6281111111111?text=Halo,%20saya%20ingin%20bertanya%20tentang%20kendaraan%20di%20Baherindo%20Motors"
                  target="_blank"
                  className="inline-flex items-center px-6 py-3 bg-white text-green-600 font-semibold rounded-xl hover:bg-gray-100 transition-colors"
                  rel="noreferrer"
                >
                  <MessageCircle className="mr-2 h-5 w-5" />
                  Chat WhatsApp
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* FAQ Section */}
      <section className="py-20 bg-white">
        <div className="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="text-center mb-12">
            <h2 className="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Pertanyaan Umum</h2>
            <p className="text-xl text-gray-600">Jawaban untuk pertanyaan yang sering diajukan</p>
          </div>

          <div className="space-y-6">
            <div className="bg-gray-50 rounded-2xl p-6">
              <h3 className="text-lg font-semibold text-gray-900 mb-2">Apakah tersedia layanan kredit?</h3>
              <p className="text-gray-600">
                Ya, kami menyediakan berbagai paket kredit dengan bunga kompetitif dan proses yang mudah. Tim kami akan
                membantu Anda memilih paket yang sesuai dengan kemampuan finansial.
              </p>
            </div>

            <div className="bg-gray-50 rounded-2xl p-6">
              <h3 className="text-lg font-semibold text-gray-900 mb-2">Bagaimana dengan garansi kendaraan?</h3>
              <p className="text-gray-600">
                Setiap kendaraan yang kami jual dilengkapi dengan garansi sesuai standar pabrikan. Untuk kendaraan
                bekas, kami juga memberikan garansi terbatas untuk komponen utama.
              </p>
            </div>

            <div className="bg-gray-50 rounded-2xl p-6">
              <h3 className="text-lg font-semibold text-gray-900 mb-2">Apakah bisa tukar tambah kendaraan lama?</h3>
              <p className="text-gray-600">
                Tentu saja! Kami menerima tukar tambah kendaraan lama Anda dengan harga yang fair. Tim penilai kami akan
                memberikan estimasi harga terbaik untuk kendaraan lama Anda.
              </p>
            </div>
          </div>
        </div>
      </section>
    </div>
  )
}
