import { Calendar, Gauge, MessageCircle, Edit, Trash2 } from "lucide-react"
import Link from "next/link"

interface Vehicle {
  id: number
  name: string
  price: number
  year: number
  km: number
  image: string
}

interface VehicleCardProps {
  vehicle: Vehicle
  type: "motor" | "mobil"
  showActions?: boolean
}

export default function VehicleCard({ vehicle, type, showActions = false }: VehicleCardProps) {
  const formatPrice = (price: number) => {
    return new Intl.NumberFormat("id-ID", {
      style: "currency",
      currency: "IDR",
      minimumFractionDigits: 0,
    }).format(price)
  }

  const formatKm = (km: number) => {
    return new Intl.NumberFormat("id-ID").format(km)
  }

  return (
    <div className="group bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden card-hover">
      {/* Image */}
      <div className="relative overflow-hidden">
        <img
          src={vehicle.image || "/placeholder.svg"}
          alt={vehicle.name}
          className="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-700"
        />
        <div className="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>

        {/* Quick Actions Overlay */}
        {showActions && (
          <div className="absolute top-4 right-4 flex space-x-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <Link
              href={`/${type}/edit/${vehicle.id}`}
              className="p-2 bg-white/90 backdrop-blur-sm rounded-full hover:bg-yellow-500 hover:text-white transition-colors"
            >
              <Edit className="h-4 w-4" />
            </Link>
            <button className="p-2 bg-white/90 backdrop-blur-sm rounded-full hover:bg-red-500 hover:text-white transition-colors">
              <Trash2 className="h-4 w-4" />
            </button>
          </div>
        )}
      </div>

      {/* Content */}
      <div className="p-6">
        <h3 className="text-xl font-bold text-gray-900 mb-3 group-hover:text-blue-600 transition-colors">
          {vehicle.name}
        </h3>

        <div className="space-y-2 mb-4">
          <div className="flex items-center justify-between">
            <span className="text-2xl font-bold text-gray-900">{formatPrice(vehicle.price)}</span>
          </div>

          <div className="flex items-center space-x-4 text-sm text-gray-600">
            <div className="flex items-center space-x-1">
              <Calendar className="h-4 w-4" />
              <span>{vehicle.year}</span>
            </div>
            <div className="flex items-center space-x-1">
              <Gauge className="h-4 w-4" />
              <span>{formatKm(vehicle.km)} km</span>
            </div>
          </div>
        </div>

        {/* Actions */}
        <div className="flex space-x-2">
          <Link
            href={`https://wa.me/081385260075?text=Halo,%20saya%20tertarik%20dengan%20${encodeURIComponent(vehicle.name)}`}
            className="flex-1 inline-flex items-center justify-center px-4 py-3 bg-green-500 text-white font-semibold rounded-xl hover:bg-green-600 transition-colors"
          >
            <MessageCircle className="h-4 w-4 mr-2" />
            WhatsApp
          </Link>

          <Link
            href={`/${type}/${vehicle.id}`}
            className="px-4 py-3 border-2 border-gray-200 text-gray-700 font-semibold rounded-xl hover:border-blue-500 hover:text-blue-600 transition-colors"
          >
            Detail
          </Link>
        </div>
      </div>
    </div>
  )
}
