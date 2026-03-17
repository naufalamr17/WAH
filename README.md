# Yayasan Warung Amal Haunan

[![Laravel version](https://img.shields.io/badge/Laravel-12.x-red.svg)](https://laravel.com)
[![PHP version](https://img.shields.io/badge/PHP-8.2%2B-blue.svg)](https://php.net)

Website resmi **Yayasan Warung Amal Haunan**, sebuah lembaga sosial, kemanusiaan, dan keagamaan yang berkomitmen memberikan manfaat bagi masyarakat melalui berbagai kegiatan amal, pendidikan, kesehatan, dan pemberdayaan sosial.

## 📋 Tentang Proyek

Proyek ini adalah platform digital untuk memperkenalkan profil yayasan, program kerja, visi-misi, serta memfasilitasi kolaborasi dan transparansi kegiatan kepada masyarakat luas.

### Fitur Utama
- **Profil Yayasan**: Informasi lengkap mengenai sejarah, visi, misi, dan legalitas.
- **Program Kegiatan**: Dokumentasi dan informasi bidang Sosial, Kemanusiaan, dan Keagamaan.
- **Informasi Kontak**: Integrasi dengan WhatsApp dan formulir kontak.
- **Desain Modern**: Menggunakan Laravel 12 dengan antarmuka yang responsif dan premium.

## 🚀 Teknologi yang Digunakan

- **Framework**: [Laravel 12](https://laravel.com)
- **Styling**: [Tailwind CSS](https://tailwindcss.com) (via CDN)
- **Database**: MySQL/SQLite
- **Icon**: Font Awesome
- **Animasi**: AOS (Animate On Scroll)
- **Aset Lokal**: CSS & JS kustom di direktori `public/assets/`

## 🛠 Panduan Instalasi

Ikuti langkah-langkah berikut untuk menjalankan proyek di lingkungan lokal:

### Prasyarat
- PHP >= 8.2
- Composer
- Database (MySQL atau SQLite)

### Langkah Instalasi

1. **Clone Repository**
   ```bash
   git clone https://github.com/naufalamr17/WAH.git
   cd WAH
   ```

2. **Instalasi Dependensi PHP**
   ```bash
   composer install
   ```

3. **Pengaturan Environment**
   Salin file `.env.example` menjadi `.env` dan sesuaikan pengaturan database Anda.
   ```bash
   cp .env.example .env
   ```

4. **Generate Application Key**
   ```bash
   php artisan key:generate
   ```

5. **Migrasi Database**
   Pastikan database sudah dibuat di server lokal Anda (atau menggunakan SQLite).
   ```bash
   php artisan migrate
   ```

---

### Cara Praktis (Batch Setup)
Proyek ini menyediakan script setup otomatis di `composer.json`:
```bash
composer setup
```

## 💻 Jalankan di Lokal

Untuk menjalankan server pengembangan:

```bash
php artisan serve
```

---

## 📄 Lisensi
Proyek ini bersifat open-source di bawah lisensi [MIT](LICENSE).

---
**Yayasan Warung Amal Haunan**  
*Menebar Kebaikan untuk Sesama*
