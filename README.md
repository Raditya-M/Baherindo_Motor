# 🚗 Baherindo Mobil

**Baherindo Mobil** adalah website katalog & penjualan mobil premium yang dibangun dengan **Laravel** + **TailwindCSS** supaya tampilannya modern, responsif, dan gampang dipake.

---

## ✨ Fitur
- 📌 **Katalog Mobil Premium** – Lihat daftar mobil dengan foto & spesifikasi.
- 🔍 **Pencarian & Filter** – Cari mobil sesuai harga, merk, atau tahun.
- 📷 **Upload Gambar Mobil** – Admin bisa upload foto mobil langsung.
- 📝 **Manajemen Data Mobil** – Tambah, edit, hapus data mobil dengan mudah.
- 📱 **Responsive Design** – Tampil keren di desktop maupun HP.

---

## 🚀 Cara Install (Langsung Kelar Sekali Jalan)
```bash
# Clone repository
git clone https://github.com/username/baherindo-mobil.git

# Masuk ke folder project
cd baherindo-mobil

# Install semua dependencies PHP & JS + build assets
composer install && npm install && npm run dev

# Copy file env & generate key
cp .env.example .env && php artisan key:generate

# Setting database di file .env sesuai kebutuhan, contoh:
# DB_DATABASE=baherindo_mobil
# DB_USERNAME=root
# DB_PASSWORD=

# Migrasi database
php artisan migrate

# Jalankan server
php artisan serve
