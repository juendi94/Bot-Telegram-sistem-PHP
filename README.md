# Bot-Telegram-sistem-PHP
Bot TELEGRAM sederhana yang umum digunakan pemula 
# Sistem Bot Telegram dengan PHP (Open Source)

Ini adalah sistem bot Telegram sumber terbuka yang dibangun menggunakan PHP. Sistem ini menyediakan fitur-fitur berikut:

- **Perintah /start:** Mengirimkan pesan selamat datang beserta keyboard inline.
- **Perintah Kustom Lainnya:** Merespons perintah kustom dengan balasan teks dan keyboard inline.
- **Pengaturan Teks dan Keyboard Inline yang Dapat Dikonfigurasi:** Pesan dan opsi keyboard inline dapat diubah sesuai dengan file `config.php`.
- **Konfigurasi Webhook:** File `setWebhook.php` digunakan untuk mengkonfigurasi webhook dengan URL endpoint.
- **Konfigurasi API Token:** File `config.php` berisi konfigurasi token API Telegram.

## Penggunaan

1. Klon atau unduh repositori.
2. Konfigurasi token API bot Anda di file `config.php`.
3. Sesuaikan pesan selamat datang, opsi keyboard inline, dan pesan lain di file `config.php`.
4. Unggah file-file ke server web Anda.

## Config.php

Edit file `config.php` untuk mengkonfigurasi pengaturan bot dan menyesuaikan pesan. File ini berisi:

- `TELEGRAM_API_TOKEN`: Token API bot Telegram Anda.
- Teks pesan selamat datang yang dapat diubah.
- Opsi keyboard inline yang dapat diubah.

## setWebhook.php

Gunakan file ini untuk mengonfigurasi webhook untuk bot Anda. Tetapkan URL endpoint tempat Telegram akan mengirimkan pembaruan. Jalankan skrip ini dengan mengunjungi URL di peramban web Anda.

## Kontribusi

Kontribusi terhadap proyek sumber terbuka ini sangat disambut! Silakan fork repositori, lakukan perubahan, dan kirimkan permintaan pull. Tolong jangan menjual kode ini atau menggunakannya untuk tujuan komersial.

## Kontak

Jika Anda memiliki pertanyaan lebih lanjut atau pertanyaan, Anda dapat menghubungi kami melalui email uen.csr@gmail.com.
