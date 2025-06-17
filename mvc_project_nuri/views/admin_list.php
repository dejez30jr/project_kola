<!DOCTYPE html>
<html>
<head><title>Admin - Daftar Artikel</title></head>
<body>
<h2>Daftar Artikel</h2>
<a href="admin.php?action=create">+ Tambah Artikel</a>
<table border="1" cellpadding="5" cellspacing="0">
    <tr><th>No</th><th>Judul</th><th>Slug</th><th>Gambar</th><th>Tanggal</th></tr>
    <?php $no=1; foreach ($artikel as $a): ?>
    <tr>
        <td><?= $no++ ?></td>
        <td><?= $a['title'] ?></td>
        <td><?= $a['slug'] ?></td>
        <td><img src="../uploads/<?= $a['image'] ?>" width="100"></td>
        <td><?= $a['created_at'] ?></td>
    </tr>
    <?php endforeach; ?>
</table>
</body>
</html>
