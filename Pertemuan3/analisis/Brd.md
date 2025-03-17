# **Document Requirement business** ##
## **Project :** Aplikasi Cek Buku
 

## **1. Tujuan Project**
- **Objective:** Menyajikan judul, penulis, rating, dan ulasan buku yang relevan untuk membantu pengguna dalam memilih buku yang tepat
- **Target:** Menyediakan setidaknya 3 ulasan pengguna atau sumber tepercaya per buku.

## **2. Fitur Utama**
### **To User**
- **Melihat Buku**: Akses untuk melihat rincian informasi mengenai buku yang tersedia, seperti:
  - Judul
  - Penulis
  - Rating
  - Ulasan
  - Tahun Terbit
  - Genre

### **To Admin**
- **Pengelolaan Buku**: Menambah, mengubah, dan menghapus informasi mengenai buku yang tersedia.


## **3. Persyaratan Fungsional**
### **Sistem Login**
- **Akses Berdasarkan Role**: User dan admin dapat login dengan hak aksesnya masing-masing.

### **Pengaturan & Tampilan Jadwal**
- **Admin**: Mengelola Informasi Buku (input, update, delete).
- **Mahasiswa**: Hanya dapat melihat rincian informasi terkait buku yang dibuat oleh admin.
 
## **4. Persyaratan Non-Fungsional**
- **Kegunaan**: Antarmuka yang sederhana dan responsif agar memudahkan user dan admin dalam menggunakan aplikasi.
- **Keamanan**:
  - Hanya admin yang bisa mengelola informasi bukku.
  - User hanya dapat melihat informasi tanpa memiliki akses untuk pengelolaan.

## **5. Model, Migrasi, Seeder, dan Resource yang Perlu Dibuat Pada Container `docker exec -it sample bash`**

### **Schedules**
- **Model**: `Books`. Menyimpan rincian informasi mengenai buku (judul, penulis, rating, ulasan, tahun terbit, genre).
- **Migration**: Struktur tabel berikut ini akan dibuat pada database:
  - `id`: `bigint UNSIGNED` (Primary Key)
  - `title`: `varchar(255)` - Menyimpan judul buku
  - `author`: `varchar(255)` - Nama penulis buku
  - `rating`: `float` - Rating buku berdasarkan ulasan
  - `reviews`: `text` - Menyimpan ulasan dari pengguna atau sumber tepercaya
  - `publication_year`: `int` - Tahun terbit buku
  - `genre`: `varchar(255)` - Kategori atau genre buku
  - `created_at`: `timestamp` - Waktu data dibuat
  - `updated_at`: `timestamp` - Waktu data diubah
- **Seeder**: Data buku awal untuk keperluan pengujian dan pengisian awal katalog.
- **Resource**: Endpoint API untuk data buku, dengan akses untuk melihat rincian buku bagi user dan hak penuh bagi admin untuk mengelola data buku.
  
### **Permissions**
- **Model**: `Permission`. Mengelola daftar permissions yang mengatur hak akses user.
  
- **Seeder**: `PermissionsSeeder`, yang bertugas menambahkan permissions dan menetapkannya ke role `user`.

  - **Permissions untuk User**:
    - `view_books`: Mengizinkan user melihat daftar dan rincian informasi buku.
    - `view_any_books`: Mengizinkan user mengakses rincian seluruh koleksi buku yang tersedia.

#### Mengapa Migration Permissions Tidak Dibuat? 

Pada saat proyek baru dibuat dengan perintah `composer create-project --prefer-dist raugadh/fila-starter .`, migrasi untuk tabel permissions sudah disediakan oleh paket spatie/laravel-permission. Paket ini mengatur pembuatan tabel dan kolom permissions dan roles secara otomatis, sehingga tidak perlu membuat migrasi permissions secara manual.

---

## **6. Analisis Permissions untuk User dan Admin**

Dalam proyek Aplikasi Cek Buku, permissions diperlukan untuk membatasi akses user terhadap fitur yang dapat diakses sesuai dengan keperluan dan peran mereka. Sedangkan Admin memiliki akses penuh ke seluruh fungsi aplikasi, sementara user memiliki akses terbatas yang mana hanya diberi akses untuk melihat informasi buku. Permissions ini ditujukan untuk memastikan user hanya bisa melihat informasi tanpa dapat melakukan perubahan.

### **Permissions yang Diperlukan**

User diberikan akses terbatas yaitu hanya dapat melihat detail buku, tanpa hak untuk mengedit atau menghapus data buku. Berikut permissions yang diberikan kepada role user:

1. **Permissions untuk User**
   - `view_books`: Akses agar user dapat melihat daftar buku.
   - `view_any_books`: Akses agar user dapat mengakses seluruh rincian buku yang tersedia.

### **Implementasi Model dan Seeder untuk Permissions**

#### **Model: `Permission`**

Model `Permission` disediakan oleh paket Spatie Laravel Permission yang berfungsi untuk menyimpan data permissions dengan atribut berikut:
- `id`: Primary key permission.
- `name`: Nama permission (contoh: `view_books`).
- `guard_name`: Guard permission (default: `web`).

#### **Seeder: PermissionsSeeder**
Seeder PermissionsSeeder berfungsi untuk membuat dan menetapkan permissions pada role user, sehingga user dapat mengakses informasi buku sesuai dengan hak akses yang telah ditetapkan. Hal ini dikarenakan admin sudah memiliki akses penuh secara default, maka tidak diperlukan seeder tambahan khusus untuk admin.

---

## **Changelog**

|-------|---------------|--------------------|-------------------------------------------------|
| Versi | Tanggal       | Penulis            | Deskripsi                                       |
|-------|---------------|--------------------|-------------------------------------------------|
| 1.0   | 11-11-2024    | Faiz Izaz Fathoni  | Pembuatan draft awal dokumen proyek, termasuk   |
|       |               |                    | tujuan proyek, fitur utama, dan akses role.     |
|-------|---------------|--------------------|-------------------------------------------------|
| 1.1   | 11-11-2024    | Faiz Izaz Fathoni  | Penyesuaian fitur role pada user untuk membatasi| 
|       |               |                    | akses dan memastikan hak akses yang tepat.      |
|-------|---------------|--------------------|-------------------------------------------------|
| 1.2   | 14-11-2024    | Faiz Izaz Fathoni  | Penambahan permissions pada user dan admin untuk| 
|       |               |                    | pengelolaan informasi buku secara terpisah.     |
|-------|---------------|--------------------|-------------------------------------------------|
| 1.3   | 14-11-2024    | Faiz Izaz Fathoni  | Implementasi model Books, migrasi tabel, dan    |
|       |               |                    | seeder data awal untuk pengujian fitur utama.   |
|-------|---------------|--------------------|-------------------------------------------------|
| 1.4   | 15-11-2024    | Faiz Izaz Fathoni  | Penambahan API resource untuk akses data buku   |
|       |               |                    | (untuk user) dan manajemen buku (untuk admin).  |
|-------|---------------|--------------------|-------------------------------------------------|
| 1.5   | 15-11-2024    | Faiz Izaz Fathoni  | Pengaturan permissions user dan admin           |
|       |               |                    | menggunakan PermissionsSeeder dari paket Spatie.|
|-------|---------------|--------------------|-------------------------------------------------|

---