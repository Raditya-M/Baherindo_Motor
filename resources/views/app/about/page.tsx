import { Users, Award, Shield, Heart } from "lucide-react"

const values = [
  {
    icon: Shield,
    title: "Kepercayaan",
    description: "Kami membangun kepercayaan melalui transparansi dan kejujuran dalam setiap transaksi.",
  },
  {
    icon: Award,
    title: "Kualitas",
    description: "Setiap kendaraan yang kami jual telah melalui inspeksi ketat untuk memastikan kualitas terbaik.",
  },
  {
    icon: Users,
    title: "Pelayanan",
    description: "Tim profesional kami siap memberikan layanan terbaik dari konsultasi hingga after-sales.",
  },
  {
    icon: Heart,
    title: "Kepuasan",
    description: "Kepuasan pelanggan adalah prioritas utama dalam setiap aspek layanan kami.",
  },
]

export default function AboutPage() {
  return (
    <div className="min-h-screen">
      {/* Hero Section */}
      <section className="relative py-20 bg-gradient-to-br from-blue-50 to-purple-50">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="text-center">
            <h1 className="text-4xl md:text-6xl font-bold text-gray-900 mb-6">
              Tentang
              <span className="text-gradient block">Baherindo Motors</span>
            </h1>
            <p className="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
              Lebih dari sekedar dealer, kami adalah partner terpercaya dalam perjalanan Anda menemukan kendaraan impian
            </p>
          </div>
        </div>
      </section>

      {/* Story Section */}
      <section className="py-20 bg-white">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
              <h2 className="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Perjalanan Kami</h2>
              <div className="space-y-6 text-gray-600 leading-relaxed">
                <p>
                  Selamat datang di Baherindo Motors, tempat di mana impian berkendara Anda menjadi kenyataan. Kami
                  hadir sebagai solusi terpercaya untuk kebutuhan kendaraan bermotor Anda, baik motor maupun mobil.
                </p>
                <p>
                  Dengan pengalaman bertahun-tahun di industri otomotif, kami memahami bahwa setiap pelanggan memiliki
                  kebutuhan yang unik. Oleh karena itu, kami menyediakan berbagai pilihan kendaraan berkualitas tinggi
                  dari berbagai merek ternama dengan harga yang kompetitif.
                </p>
                <p>
                  Tim profesional kami yang berpengalaman siap membantu Anda dari proses konsultasi, pemilihan
                  kendaraan, hingga layanan purna jual. Kami juga menyediakan berbagai paket pembiayaan yang fleksibel
                  untuk memudahkan Anda dalam memiliki kendaraan impian.
                </p>
              </div>
            </div>

            <div className="relative">
              <div className="aspect-square rounded-3xl overflow-hidden shadow-2xl">
                <img
                  src="/placeholder-9hmi6.png"
                  alt="Baherindo Motors Showroom"
                  className="w-full h-full object-cover"
                />
              </div>
              <div className="absolute -bottom-6 -right-6 w-32 h-32 bg-gradient-to-r from-blue-600 to-purple-600 rounded-3xl opacity-20"></div>
            </div>
          </div>
        </div>
      </section>

      {/* Values Section */}
      <section className="py-20 bg-gray-50">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="text-center mb-16">
            <h2 className="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Nilai-Nilai Kami</h2>
            <p className="text-xl text-gray-600 max-w-3xl mx-auto">
              Prinsip-prinsip yang menjadi fondasi dalam setiap layanan yang kami berikan
            </p>
          </div>

          <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            {values.map((value, index) => (
              <div
                key={index}
                className="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow duration-300 text-center group"
              >
                <div className="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-r from-blue-600 to-purple-600 rounded-2xl mb-6 group-hover:scale-110 transition-transform duration-300">
                  <value.icon className="h-8 w-8 text-white" />
                </div>
                <h3 className="text-xl font-semibold text-gray-900 mb-3">{value.title}</h3>
                <p className="text-gray-600">{value.description}</p>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* Stats Section */}
      <section className="py-20 bg-gradient-to-r from-blue-600 to-purple-600">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="text-center mb-12">
            <h2 className="text-3xl md:text-4xl font-bold text-white mb-4">Pencapaian Kami</h2>
            <p className="text-xl text-blue-100">Angka-angka yang menunjukkan dedikasi kami</p>
          </div>

          <div className="grid grid-cols-2 md:grid-cols-4 gap-8">
            <div className="text-center">
              <div className="text-4xl md:text-5xl font-bold text-white mb-2">500+</div>
              <div className="text-blue-100">Kendaraan Terjual</div>
            </div>
            <div className="text-center">
              <div className="text-4xl md:text-5xl font-bold text-white mb-2">10+</div>
              <div className="text-blue-100">Tahun Pengalaman</div>
            </div>
            <div className="text-center">
              <div className="text-4xl md:text-5xl font-bold text-white mb-2">98%</div>
              <div className="text-blue-100">Kepuasan Pelanggan</div>
            </div>
            <div className="text-center">
              <div className="text-4xl md:text-5xl font-bold text-white mb-2">50+</div>
              <div className="text-blue-100">Mitra Dealer</div>
            </div>
          </div>
        </div>
      </section>

      {/* CTA Section */}
      <section className="py-20 bg-white">
        <div className="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
          <h2 className="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Siap Menemukan Kendaraan Impian?</h2>
          <p className="text-xl text-gray-600 mb-8">
            Tim profesional kami siap membantu Anda menemukan kendaraan yang tepat sesuai kebutuhan dan budget
          </p>
          <div className="flex flex-col sm:flex-row gap-4 justify-center">
            <a
              href="/contact"
              className="inline-flex items-center px-8 py-4 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold rounded-2xl hover:from-blue-700 hover:to-purple-700 transition-all duration-300 transform hover:scale-105"
            >
              Hubungi Kami
            </a>
            <a
              href="/"
              className="inline-flex items-center px-8 py-4 border-2 border-gray-300 text-gray-700 font-semibold rounded-2xl hover:border-blue-500 hover:text-blue-600 transition-colors"
            >
              Lihat Koleksi
            </a>
          </div>
        </div>
      </section>
    </div>
  )
}
