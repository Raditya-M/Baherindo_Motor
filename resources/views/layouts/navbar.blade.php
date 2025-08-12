<nav class="glass-effect sticky top-0 z-50 border-b border-gray-200/20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Logo -->
            <a href="/" class="flex items-center space-x-3 group">
                <div class="p-2 rounded-xl bg-gradient-to-r from-blue-600 to-purple-600 group-hover:from-blue-700 group-hover:to-purple-700 transition-all duration-300">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <span class="text-xl font-bold bg-gradient-to-r from-gray-900 to-gray-600 bg-clip-text text-transparent">
                    Baherindo Motors
                </span>
            </a>

            <!-- Desktop Navigation -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="/--" class="text-gray-700 hover:text-blue-600 font-medium transition-colors duration-200">Motors</a>
                <a href="/-" class="text-gray-700 hover:text-blue-600 font-medium transition-colors duration-200">Cars</a>
                <a href="/about" class="text-gray-700 hover:text-blue-600 font-medium transition-colors duration-200">About</a>
                <a href="/contact" class="text-gray-700 hover:text-blue-600 font-medium transition-colors duration-200">Contact</a>
            </div>

            <!-- Contact Info -->
            <div class="hidden lg:flex items-center space-x-3">
                <div class="p-2 rounded-full bg-green-100">
                    <i class="fab fa-whatsapp text-green-600"></i>
                </div>
                <div>
                    <a href="https://wa.me/6281385260075" target="_blank" class="text-sm font-semibold text-gray-900 hover:text-green-600 transition-colors">
                        R. Mahendar
                    </a>
                    <p class="text-xs text-gray-500">0813-8526-0075</p>
                </div>
            </div>

            <!-- Mobile menu button -->
            <button class="md:hidden p-2 rounded-lg hover:bg-gray-100 transition-colors" onclick="toggleMobileMenu()">
                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>

        <!-- Mobile Navigation -->
        <div id="mobile-menu" class="hidden md:hidden py-4 border-t border-gray-200/20">
            <div class="flex flex-col space-y-3">
                <a href="/--" class="text-gray-700 hover:text-blue-600 font-medium py-2 transition-colors">Motors</a>
                <a href="/-" class="text-gray-700 hover:text-blue-600 font-medium py-2 transition-colors">Cars</a>
                <a href="/about" class="text-gray-700 hover:text-blue-600 font-medium py-2 transition-colors">About</a>
                <a href="/contact" class="text-gray-700 hover:text-blue-600 font-medium py-2 transition-colors">Contact</a>
                <div class="pt-3 border-t border-gray-200/20">
                    <a href="https://wa.me/6281385260075" target="_blank" class="flex items-center space-x-2 text-green-600 font-medium">
                        <i class="fab fa-whatsapp"></i>
                        <span>WhatsApp: 0813-8526-0075</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script>
        function toggleMobileMenu() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        }
    </script>
</nav>
