
---

# Business Document Requirement (BRD) - Aplikasi Kendaraan

## 1. Ringkasan Eksekutif
**Tujuan**  
Aplikasi Kendaraan bertujuan untuk mengelola data kendaraan dengan efisien, termasuk nama, jenis, dan fungsi kendaraan, serta mendukung pengelolaan peran pengguna.

**Manfaat Utama**  
Dengan aplikasi ini, pengelolaan data kendaraan menjadi lebih terstruktur, mengurangi kesalahan, dan mendukung pengambilan keputusan yang lebih baik.

## 2. Ruang Lingkup Pada Proyek
**Lingkup Utama**  
- Penyimpanan dan pengelolaan informasi kendaraan, seperti:
  - Nama kendaraan
  - Jenis kendaraan
  - Fungsi kendaraan
- Manajemen peran pengguna (contohnya, admin super).

## 3. Kebutuhan Fungsional
**Pengguna dan Peran**  
- **Admin Super**: Memiliki akses penuh untuk mengelola data kendaraan (CRUD).

**Fungsi Utama**  
- **CRUD Kendaraan**: Admin dapat menambah, membaca, memperbarui, dan menghapus data kendaraan.
- **Data Seeding**: Penyediaan data awal kendaraan menggunakan seeder.

**Manajemen Basis Data**  
- Pembuatan tabel `kendaraans` dengan kolom-kolom berikut:
  - `name` (string)
  - `type` (string)
  - `functioned_for` (string)

## 4. Kebutuhan Non-Fungsional
- **Keamanan**: Hak akses pengguna diatur sesuai peran.
- **Kinerja**: Aplikasi harus mampu menangani sejumlah data kendaraan dengan respons cepat.
- **Kepatuhan**: Mengikuti konvensi Laravel untuk migrasi, seeders, dan ORM (Eloquent).

## 5. Pihak Berkepentingan Pada Proyek
- **Administrator Sistem**: Bertanggung jawab atas pengelolaan aplikasi dan data kendaraan.
- **Pengguna Akhir (User)**: Dapat melihat data kendaraan sesuai hak akses yang diberikan.

## 6. Asumsi & Keterbatasan
- Aplikasi berjalan di lingkungan berbasis Laravel dan menggunakan database yang kompatibel, seperti MySQL.
- Versi ini hanya fokus pada pengelolaan data kendaraan, tanpa fitur tambahan.
- Migrasi database harus dilakukan tanpa konflik sebelum data seeding.
