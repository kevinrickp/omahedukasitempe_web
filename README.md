# Omah Edukasi Tempe

**Omah Edukasi Tempe** adalah website company profile edukatif yang menampilkan informasi seputar produk tempe, edukasi pembuatan tempe, galeri, dan sistem admin untuk manajemen konten.

## Fitur

- 🌐 Halaman Beranda interaktif
- 🧆 Daftar Produk Tempe
- 📚 Edukasi pembuatan tempe
- 🖼️ Galeri foto
- 🔐 Halaman admin (dengan login, tanpa fitur register publik)
- 🛠️ CRUD untuk Produk dan Edukasi (admin-only)
- 📷 Upload gambar untuk Produk dan Edukasi
- 💅 Styling menggunakan Tailwind CSS
- 🧪 Testing menggunakan PHPUnit

## Teknologi yang Digunakan

- **Framework**: Laravel 11
- **Frontend**: Blade + Tailwind CSS
- **Bundler**: Vite
- **Autentikasi**: Laravel Breeze (stack Blade)
- **Database**: MySQL (terhubung ke phpMyAdmin)

## Instalasi

1. **Clone repositori**
   ```bash
   git clone https://github.com/username/omahedukasitempe.git
   cd omahedukasitempe
   ```

2. **Install dependensi backend**
   ```bash
   composer install
   ```

3. **Install dependensi frontend**
   ```bash
   npm install && npm run build
   ```

4. **Salin file environment dan konfigurasi**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Konfigurasi database**  
   Sesuaikan file `.env` dengan kredensial database MySQL kamu (phpMyAdmin).

6. **Migrasi dan seeder**
   ```bash
   php artisan migrate --seed
   ```

7. **Jalankan server**
   ```bash
   php artisan serve
   ```

8. **Login Admin**
   - Email: `omahedukasitempe@gmail.com`
   - Password: `omahedukasitempe`
   *(akun dibuat melalui seeder)*

## Struktur Direktori

Beberapa folder penting dalam proyek ini:
- `app/`: Logika backend (model, controller, dll)
- `resources/views/`: Tampilan antarmuka pengguna (Blade)
- `routes/web.php`: Routing web
- `public/`: Aset publik
- `database/seeders/`: Seeder untuk data awal
- `tailwind.config.js`: Konfigurasi Tailwind CSS
