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
2. **Konfigurasi Token API Bot:** Buka file `config.php` dan temukan variabel `TELEGRAM_API_TOKEN`. Gantilah `YOUR_BOT_API_TOKEN` dengan token API bot Telegram Anda.
3. Sesuaikan pesan selamat datang, opsi keyboard inline, dan pesan lain di file `config.php`.
4. Unggah file-file ke server web Anda.

## Config.php

Edit file `config.php` untuk mengkonfigurasi pengaturan bot dan menyesuaikan pesan. File ini berisi:

- `TELEGRAM_API_TOKEN`: Token API bot Telegram Anda.
- Teks pesan selamat datang yang dapat diubah.
- Opsi keyboard inline yang dapat diubah.

## setWebhook.php

1. Setelah Anda memasukkan token bot di `config.php`, buka file `setWebhook.php`.
2. Ganti `https://your-domain.com/path/to/your/endpoint.php` dengan URL endpoint yang Anda inginkan untuk webhook. Pastikan URL ini dapat diakses publik.
3. Simpan perubahan pada file `setWebhook.php`.
4. **Jalankan Webhook:** Untuk menjalankan webhook, akses atau jalankan URL `https://your-domain.com/path/to/setWebhook.php` melalui peramban web Anda.

## deleteWebhook.php

1. **Mencabut Akses Webhook:** Jika Anda ingin mencabut akses webhook dari bot Anda, Anda dapat menggunakan `deleteWebhook.php`.
2. Buka file `deleteWebhook.php`.
3. Ganti `YOUR_BOT_API_TOKEN` dengan token API bot Telegram Anda.
4. **Jalankan deleteWebhook:** Untuk mencabut akses webhook, akses atau jalankan URL `https://your-domain.com/path/to/deleteWebhook.php` melalui peramban web Anda.
5. 
## Kontribusi

Kontribusi terhadap proyek sumber terbuka ini sangat disambut! Silakan fork repositori, lakukan perubahan, dan kirimkan permintaan pull. Tolong jangan menjual kode ini atau menggunakannya untuk tujuan komersial.

## Kontak

Jika Anda memiliki pertanyaan lebih lanjut atau pertanyaan, Anda dapat menghubungi kami melalui email [uen.csr@gmail.com](mailto:uen.csr@gmail.com).

Kunjungi juga akun Instagram kami [@misteruen](https://www.instagram.com/misteruen/) untuk informasi dan pembaruan lebih lanjut.

## Sekian Dan Terimakasih Semoga Bermanfaat ##
