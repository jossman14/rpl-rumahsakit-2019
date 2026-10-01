# Sistem Informasi Rumah Sakit (RPL 2019)

Aplikasi web sistem informasi rumah sakit berbasis Laravel 6, dibuat untuk proyek Rekayasa Perangkat Lunak (2019). Akses menu dibatasi per peran pengguna melalui middleware `checkRole`.

## Fitur Utama (per peran)
- **Admin** — data pegawai, dokter, jadwal dokter, jabatan, obat, kamar, poli, pasien
- **Dokter** — pemeriksaan pasien, hasil pemeriksaan, surat rujukan, pemeriksaan penunjang
- **Apoteker** — data obat
- **Petugas Medis Penunjang** — pemeriksaan penunjang, surat rujukan
- **Petugas Pendaftaran** — registrasi pasien baru/lama, jadwal dokter, tujuan poliklinik, cetak data pasien
- **Petugas Rawat Inap** — rawat inap, monitoring pasien, ketersediaan ruangan
- **Petugas Rekam Medis** — surat rujukan (buat, ubah, cetak)
- Peran **Kasir** dikenali di tampilan, tetapi belum ada rute khusus.

## Tech Stack
PHP (^7.2|^8.0), Laravel 6, MySQL, Laravel Mix (webpack).

## Struktur Ringkas
- `app/Http/Controllers/` — controller per modul/peran
- `database/migrations/`, `database/seeds/` — skema tabel, view, dan seeder user
- `resources/views/` — tampilan Blade per peran (`admin`, `dokter`, `apoteker`, `kasir`, `petugas`, dll.)
- `routes/web.php` — rute per peran

## Menjalankan
```bash
composer install
npm install && npm run dev
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
php artisan serve
```

## Konfigurasi Env
Atur di `.env` minimal: `APP_KEY`, `APP_URL`, `DB_CONNECTION`, `DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`.
