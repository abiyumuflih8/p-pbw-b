# 📰 LaraPress
> Proyek Laravel sederhana — latihan membuat halaman statis (Home, Tentang Kami, Kontak).  
> Praktikum Laravel Pertemuan 1 – Universitas Pancasila  

---

## 📖 Deskripsi Proyek
**LaraPress** merupakan proyek latihan pertama menggunakan framework **Laravel 12**.  
Tujuan proyek ini adalah memahami cara kerja dasar Laravel dengan membuat beberapa halaman statis dan memodifikasi route serta view menggunakan Blade.

---

## 🎯 Tujuan Pembelajaran
- Menginstal proyek Laravel melalui **Composer**  
- Menjalankan server lokal dengan **php artisan serve**  
- Memahami struktur folder Laravel  
- Membuat dan memodifikasi **Route** serta **View**  
- Mengetahui alur kerja Laravel: **Request → Route → View → Response**

---

## ⚙️ Alat & Persiapan
| Alat | Fungsi |
|------|---------|
| Laragon / XAMPP | Server lokal |
| Composer | Manajer paket PHP |
| VS Code | Code editor |
| Browser (Chrome/Edge/Firefox) | Menjalankan aplikasi |
| PHP ≥ 8.2 | Versi minimal agar Laravel 12 berjalan |

---

## 🔧 Modifikasi yang Dilakukan

Sesuai dengan panduan praktikum dan tugas mandiri, beberapa modifikasi dan penambahan telah dilakukan sebagai berikut:

1. *Modifikasi Halaman Utama (welcome.blade.php)*  
   Mengubah konten default Laravel menjadi halaman selamat datang untuk blog LaraPress.

2. *Pembuatan Halaman "Tentang Kami" (about.blade.php)*  
   Membuat halaman statis baru yang berisi informasi mengenai proyek LaraPress.

3. *Pembuatan Halaman "Kontak" (kontak.blade.php)*  
   Mengerjakan tugas mandiri untuk membuat halaman statis baru yang dapat diakses melalui URL /kontak.

4. *Konfigurasi Rute (routes/web.php)*  
   Menambahkan definisi rute baru untuk halaman /tentang-kami dan /kontak agar dapat diakses melalui browser.

5. *Menambahkan Navigasi*  
   Menambahkan tautan antar halaman (Utama, Tentang Kami, dan Kontak) untuk memudahkan navigasi pengguna.

---

## 🖼️ Hasil Screenshot

Berikut adalah dokumentasi hasil modifikasi yang telah dilakukan:

### 1. Halaman Utama (Welcome)

code

<img width="500" height="306" alt="image" src="https://github.com/user-attachments/assets/148a951c-8ca9-4341-bdc9-e9a6cf993209" />

Tampilan halaman utama setelah dimodifikasi.
*(<img width="1600" height="900" alt="image" src="https://github.com/user-attachments/assets/0693ba85-6c27-4ec1-af85-3eef4b3c903a" />
)*

---

### 2. Halaman Tentang Kami (About)
code
<img width="528" height="289" alt="image" src="https://github.com/user-attachments/assets/f79dcd2c-7c2b-4153-8c71-ef4e23d94b26" />


Tampilan halaman "Tentang Kami" yang baru dibuat.

*(<img width="1600" height="900" alt="image" src="https://github.com/user-attachments/assets/6408634a-593e-4737-931d-b21f25d97c5c" />
)*

---

### 3. Halaman Kontak (Contact)
code
<img width="627" height="293" alt="image" src="https://github.com/user-attachments/assets/502d0ba5-3f2d-4c95-8c73-80b746ecd876" />

Tampilan halaman "Kontak" sebagai hasil dari tugas mandiri.

*(<img width="1600" height="900" alt="image" src="https://github.com/user-attachments/assets/aa7c3e39-f9df-4e6e-9e56-9f7080b07899" />
)*

---

### 4. Modifikasi File Rute (routes/web.php)
Tangkapan layar dari kode di routes/web.php yang menunjukkan definisi rute untuk ketiga halaman.

*(<img width="499" height="358" alt="image" src="https://github.com/user-attachments/assets/7ca78b9e-f672-4d74-a69d-dcce8ea95fe3" />)*

## 📚 Kesimpulan

Pada praktikum ini, telah dilakukan proses instalasi dan eksplorasi dasar framework **Laravel 12** melalui proyek sederhana bernama **LaraPress**.  
Dari kegiatan ini, diperoleh pemahaman mengenai:

- Alur kerja Laravel mulai dari *request* → *route* → *view* → *response*  
- Cara membuat dan memodifikasi tampilan menggunakan **Blade Template**
- Penambahan halaman baru serta konfigurasi rute menggunakan file **web.php**
- Implementasi navigasi antar halaman untuk meningkatkan pengalaman pengguna  

Secara keseluruhan, praktikum ini memberikan dasar yang kuat untuk memahami konsep **MVC (Model–View–Controller)** pada Laravel serta membangun pondasi untuk pengembangan aplikasi web yang lebih kompleks di tahap berikutnya.

