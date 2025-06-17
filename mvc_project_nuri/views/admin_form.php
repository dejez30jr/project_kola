<!DOCTYPE html>
<html>
<head><title>Tambah Artikel</title></head>
<body>
<h2>Form Tambah Artikel</h2>
<form method="POST" action="admin.php?action=store" enctype="multipart/form-data">
    Judul: <input type="text" name="title" required><br>
    Slug: <input type="text" name="slug" required><br>
    Tag: <input type="text" name="tag_content" required><br>
    Penulis: <input type="text" name="penulis" required><br>
    Gambar: <input type="file" name="image" required><br>
    Konten:<br>
    <textarea name="content" rows="8" cols="50" required></textarea><br>
    <button type="submit">Simpan</button>
</form>
<a href="admin.php">Kembali ke daftar artikel</a>
</body>
</html>
