import { Car, Shield, Award, Users } from "lucide-react"
import VehicleCard from "@/components/vehicle-card"
import HeroSection from "@/components/hero-section"

// Mock data - replace with actual data fetching
const motorcycles = [
  {
    id: 1,
    name: "Honda Vario 150",
    price: 25000000,
    year: 2022,
    km: 5000,
    image: "/honda-vario-150.png",
  },
  {
    id: 2,
    name: "Yamaha NMAX 155",
    price: 28000000,
    year: 2023,
    km: 2000,
    image: "/yamaha-nmax-155.png",
  },
  {
    id: 3,
    name: "Suzuki GSX-R150",
    price: 32000000,
    year: 2023,
    km: 1500,
    image: "/suzuki-gsxr150.png",
  },
]

const features = [
  {
    icon: Shield,
    title: "Kualitas Terjamin",
    description: "Setiap kendaraan telah melalui inspeksi ketat untuk memastikan kualitas terbaik",
  },
  {
    icon: Award,
    title: "Harga Terbaik",
    description: "Kami menawarkan harga kompetitif dengan kualitas premium",
  },
  {
    icon: Users,
    title: "Layanan Prima",
    description: "Tim berpengalaman siap membantu Anda menemukan kendaraan impian",
  },
]

export default function HomePage() {
  return (
    <div className="min-h-screen">
      <HeroSection />

      {/* Features Section */}
      <section className="py-20 bg-white">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="text-center mb-16">
            <h2 className="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Mengapa Memilih Kami?</h2>
            <p className="text-xl text-gray-600 max-w-3xl mx-auto">
              Pengalaman bertahun-tahun dalam industri otomotif membuat kami memahami kebutuhan Anda
            </p>
          </div>

          <div className="grid grid-cols-1 md:grid-cols-3 gap-8">
            {features.map((feature, index) => (
              <div key={index} className="text-center group">
                <div className="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-r from-blue-600 to-purple-600 rounded-2xl mb-6 group-hover:scale-110 transition-transform duration-300">
                  <feature.icon className="h-8 w-8 text-white" />
                </div>
                <h3 className="text-xl font-semibold text-gray-900 mb-3">{feature.title}</h3>
                <p className="text-gray-600">{feature.description}</p>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* Motorcycles Section */}
      <section className="py-20 bg-gray-50">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="text-center mb-16">
            <h2 className="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Koleksi Motor Premium</h2>
            <p className="text-xl text-gray-600">Pilihan motor berkualitas dengan harga terbaik</p>
          </div>

          <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            {motorcycles.map((motorcycle) => (
              <VehicleCard key={motorcycle.id} vehicle={motorcycle} type="motor" />
            ))}
          </div>

          <div className="text-center mt-12">
            <button className="inline-flex items-center px-8 py-4 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold rounded-2xl hover:from-blue-700 hover:to-purple-700 transition-all duration-300 transform hover:scale-105">
              Lihat Semua Motor
              <Car className="ml-2 h-5 w-5" />
            </button>
          </div>
        </div>
      </section>
    </div>
  )
}
