KEDAI SORE - UTS PEMROGRAMAN WEB

Pada project UTS Pemrograman Web kali ini, saya membuat sebuah website sederhana bernama Kedai Sore. Website ini merupakan aplikasi pengelolaan coffee shop yang digunakan untuk menampilkan informasi kedai serta mengelola daftar menu yang tersedia. Dalam pembuatannya, saya menggunakan framework Laravel dengan bahasa pemrograman PHP dan Blade sebagai template engine untuk mengatur tampilan halaman website.

Saya memilih tema coffee shop karena ingin membuat sebuah sistem sederhana yang menggambarkan pengelolaan menu pada sebuah kedai kopi. Website ini memiliki empat halaman utama, yaitu Login, Dashboard, Profil, dan Pengelolaan Menu.

CARA MENJALANKAN
1. Buat project Laravel baru:
   composer create-project laravel/laravel kedai-sore

2. Salin folder routes, app/Http/Controllers, dan resources/views dari paket ini
   ke dalam project Laravel yang baru.

3. Jalankan dari folder project Laravel:
   php artisan serve

4. Buka alamat yang muncul di terminal, biasanya:
   http://127.0.0.1:8000

ALUR APLIKASI
- Halaman awal menampilkan form login.
- Form mengirim username dengan method GET ke halaman dashboard.
- Username diteruskan melalui query parameter ke halaman profil dan pengelolaan.
- Data ringkasan dan daftar menu disiapkan di PageController.
- Blade menampilkan daftar menu menggunakan @foreach.

Screenshot KEDAI SORE - UTS PEMROGRAMAN WEB

Pada project UTS Pemrograman Web kali ini, saya membuat sebuah website sederhana bernama Kedai Sore. Website ini merupakan aplikasi pengelolaan coffee shop yang digunakan untuk menampilkan informasi kedai serta mengelola daftar menu yang tersedia. Dalam pembuatannya, saya menggunakan framework Laravel dengan bahasa pemrograman PHP dan Blade sebagai template engine untuk mengatur tampilan halaman website.

Saya memilih tema coffee shop karena ingin membuat sebuah sistem sederhana yang menggambarkan pengelolaan menu pada sebuah kedai kopi. Website ini memiliki empat halaman utama, yaitu Login, Dashboard, Profil, dan Pengelolaan Menu.

CARA MENJALANKAN
1. Buat project Laravel baru:
   composer create-project laravel/laravel kedai-sore

2. Salin folder routes, app/Http/Controllers, dan resources/views dari paket ini
   ke dalam project Laravel yang baru.

3. Jalankan dari folder project Laravel:
   php artisan serve

4. Buka alamat yang muncul di terminal, biasanya:
   http://127.0.0.1:8000

ALUR APLIKASI
- Halaman awal menampilkan form login.
- Form mengirim username dengan method GET ke halaman dashboard.
- Username diteruskan melalui query parameter ke halaman profil dan pengelolaan.
- Data ringkasan dan daftar menu disiapkan di PageController.
- Blade menampilkan daftar menu menggunakan @foreach.

Screenshot WEB
