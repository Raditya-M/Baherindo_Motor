"use client"

import { useState } from "react"
import Link from "next/link"
import { Menu, X, Car, MessageCircle } from "lucide-react"

export default function Navbar() {
  const [isOpen, setIsOpen] = useState(false)

  return (
    <nav className="glass-effect sticky top-0 z-50 border-b border-gray-200/20">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="flex justify-between items-center h-16">
          {/* Logo */}
          <Link href="/" className="flex items-center space-x-2 group">
            <div className="p-2 rounded-xl bg-gradient-to-r from-blue-600 to-purple-600 group-hover:from-blue-700 group-hover:to-purple-700 transition-all duration-300">
              <Car className="h-6 w-6 text-white" />
            </div>
            <span className="text-xl font-bold bg-gradient-to-r from-gray-900 to-gray-600 bg-clip-text text-transparent">
              Baherindo Motors
            </span>
          </Link>

          {/* Desktop Navigation */}
          <div className="hidden md:flex items-center space-x-8">
            <Link href="/" className="text-gray-700 hover:text-blue-600 font-medium transition-colors duration-200">
              Motors
            </Link>
            <Link
              href="/mobil"
              className="text-gray-700 hover:text-blue-600 font-medium transition-colors duration-200"
            >
              Cars
            </Link>
            <Link
              href="/about"
              className="text-gray-700 hover:text-blue-600 font-medium transition-colors duration-200"
            >
              About
            </Link>
            <Link
              href="/contact"
              className="text-gray-700 hover:text-blue-600 font-medium transition-colors duration-200"
            >
              Contact
            </Link>
          </div>

          {/* Contact Info */}
          <div className="hidden lg:flex items-center space-x-3">
            <div className="p-2 rounded-full bg-green-100">
              <MessageCircle className="h-5 w-5 text-green-600" />
            </div>
            <div>
              <a
                href="https://wa.me/6281111111111"
                target="_blank"
                className="text-sm font-semibold text-gray-900 hover:text-green-600 transition-colors"
                rel="noreferrer"
              >
                Dolly Saputra
              </a>
              <p className="text-xs text-gray-500">0811-1111-1111</p>
            </div>
          </div>

          {/* Mobile menu button */}
          <button
            onClick={() => setIsOpen(!isOpen)}
            className="md:hidden p-2 rounded-lg hover:bg-gray-100 transition-colors"
          >
            {isOpen ? <X className="h-6 w-6" /> : <Menu className="h-6 w-6" />}
          </button>
        </div>

        {/* Mobile Navigation */}
        {isOpen && (
          <div className="md:hidden py-4 border-t border-gray-200/20">
            <div className="flex flex-col space-y-3">
              <Link href="/" className="text-gray-700 hover:text-blue-600 font-medium py-2 transition-colors">
                Motors
              </Link>
              <Link href="/mobil" className="text-gray-700 hover:text-blue-600 font-medium py-2 transition-colors">
                Cars
              </Link>
              <Link href="/about" className="text-gray-700 hover:text-blue-600 font-medium py-2 transition-colors">
                About
              </Link>
              <Link href="/contact" className="text-gray-700 hover:text-blue-600 font-medium py-2 transition-colors">
                Contact
              </Link>
              <div className="pt-3 border-t border-gray-200/20">
                <a
                  href="https://wa.me/6281111111111"
                  target="_blank"
                  className="flex items-center space-x-2 text-green-600 font-medium"
                  rel="noreferrer"
                >
                  <MessageCircle className="h-4 w-4" />
                  <span>WhatsApp: 0811-1111-1111</span>
                </a>
              </div>
            </div>
          </div>
        )}
      </div>
    </nav>
  )
}
