# DTMK PENS Landing Page

Landing page single-page modern untuk Departemen Teknologi Multimedia Kreatif (DTMK) PENS.

## Fitur

- Landing page responsive mobile-first.
- Navbar sticky dengan anchor section.
- Hero futuristik untuk identitas DTMK PENS.
- Section profil, program studi, portal aplikasi, Teaching Factory/PBL, riset dan karya, mitra, dan kontak.
- Data program studi, portal aplikasi, highlight, riset, dan mitra dipisah di `config/dtmk.php` agar mudah dipindahkan ke database.
- Styling memakai Tailwind CSS 4 via Vite.

## Tech Stack

- Laravel 12
- Blade
- Tailwind CSS
- Vite

## Struktur Penting

- `routes/web.php` - route landing page `/`
- `config/dtmk.php` - data konten landing page
- `resources/views/landing.blade.php` - halaman utama
- `resources/views/components/dtmk` - komponen Blade untuk card, icon, heading, dan badge status
- `resources/css/app.css` - import Tailwind dan styling tambahan

## Instalasi

```bash
composer install
npm install
cp .env.example .env
php artisan key:generate
```

Jika memakai SQLite default Laravel:

```bash
php artisan migrate
```

## Menjalankan Aplikasi

```bash
php artisan serve --host=127.0.0.1 --port=8055
```

Buka:

```text
http://127.0.0.1:8055
```

Untuk build asset production:

```bash
npm run build
```

Untuk development dengan Vite:

```bash
npm run dev
```

## Mengubah Data

Edit file `config/dtmk.php`.

Setiap item program studi dan portal aplikasi memakai struktur:

```php
[
    'title' => 'Nama Layanan',
    'description' => 'Deskripsi singkat layanan.',
    'icon' => 'target',
    'url' => 'https://example.dtmkpens.id',
    'status' => 'active',
]
```

Status yang tersedia:

- `active`
- `development`
- `planned`

Item dengan status `development` atau `planned` otomatis menampilkan badge.

## Validasi

```bash
php artisan test
npm run build
```
