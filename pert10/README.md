Berikut adalah analisis untuk database MySQL berdasarkan permintaan Anda:

### 1. Menetapkan Produk Berdasarkan Nama Produk
Gunakan tabel `products` untuk menyimpan nama produk dengan tipe data `VARCHAR`.

### 2. Menetapkan Harga Produk
Tambahkan kolom `price` dengan tipe data `INTEGER` ke tabel `products`.

### 3. Kategori Produk dengan Enum
Buat tipe data `ENUM` untuk kategori produk. Nilainya meliputi kategori seperti `shoes`, `pants`, dan `clothes`.

### 4. Relasi Kategori dengan Nama Produk
Gunakan relasi antara tabel `categories` dan `products`. Tabel `categories` memiliki kolom `id` sebagai primary key, dan tabel `products` memiliki kolom `category_id` sebagai foreign key.

### Struktur dan Query MySQL

#### Membuat Tabel `categories` untuk Kategori Produk
```sql
CREATE TABLE categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    category_name ENUM('shoes', 'pants', 'clothes') NOT NULL
);
```

#### Membuat Tabel `products` untuk Produk
```sql
CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    product_name VARCHAR(255) NOT NULL,
    price INT NOT NULL,
    category_id INT NOT NULL,
    FOREIGN KEY (category_id) REFERENCES categories(id)
);
```

#### Menambahkan Data ke Tabel `categories`
```sql
INSERT INTO categories (category_name) VALUES
('shoes'),
('pants'),
('clothes');
```

#### Menambahkan Data ke Tabel `products`
```sql
INSERT INTO products (product_name, price, category_id) VALUES
('Adidas Running Shoes', 500000, 1),
('Jeans', 300000, 2),
('T-shirt', 150000, 3);
```

#### Menampilkan Relasi Produk dengan Kategorinya
```sql
SELECT 
    p.product_name,
    p.price,
    c.category_name
FROM 
    products p
JOIN 
    categories c
ON 
    p.category_id = c.id;
```

### Penjelasan
1. **Tabel `categories`** menyimpan kategori produk menggunakan tipe data `ENUM`.
2. **Tabel `products`** menyimpan nama produk, harga, dan referensi ke kategori menggunakan `category_id`.
3. Relasi `category_id` pada tabel `products` memastikan bahwa setiap produk memiliki kategori yang valid.