<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title><?php echo htmlspecialchars($data['title']); ?> | Smk nurul iman</title>
  <meta name="description" content="<?php echo substr(strip_tags($data['content']), 0, 150); ?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    body { font-family: Arial, sans-serif; margin: 0; padding: 0; }
    nav { padding: 12px 30px; background: #f9f9f9; }
    nav a { text-decoration: none; margin-right: 10px; font-weight: bold; }
    .container { max-width: 1200px; margin: auto; padding: 20px; display: flex; gap: 20px; }
    .main-content { flex: 3; }
    .sidebar { flex: 1; background: #f1f1f1; padding: 10px; border-radius: 8px; }
    .sidebar h2 { border-left: 4px solid #14342b; padding-left: 10px; }
    .blog-item { display: flex; margin-bottom: 10px; }
    .blog-item img { width: 100px; height: 80px; border-radius: 8px; object-fit: cover; }
    .blog-item-content { padding-left: 10px; }
    .blog-item-content h4 { margin: 0; font-size: 16px; }
    .blog-item-content p { margin: 5px 0 0; font-size: 12px; color: #777; }
  </style>
</head>
<body>

<nav>
  <a href="../home">Home</a> | <a href="../home#berita">Berita</a>
</nav>

<div class="container">
  <div class="main-content">
    <?php if (!empty($data['image'])): ?>
      <img src="<?= $base_url ?>/assets/uploads/<?php echo htmlspecialchars($data['image']); ?>" alt="<?php echo htmlspecialchars($data['title']); ?>" style="width:100%; border-radius:10px;">
    <?php endif; ?>

    <div>
      <h1><?php echo htmlspecialchars($data['title']); ?></h1>
      <p><strong>SMK Nurul Iman</strong> - <?php echo $data['content']; ?></p>
      <p><i>By: <?php echo htmlspecialchars($data['penulis']); ?> | <?php echo $data['created_at']; ?></i></p>
    </div>
  </div>

  <div class="sidebar">
    <h2>Update Terkini</h2>
    <?php foreach ($related as $r): ?>
      <div class="blog-item">
        <a href="../artikel/<?php echo $r['slug']; ?>" style="display:flex; text-decoration:none; color:inherit;">
          <img src="../uploads/<?php echo $r['image']; ?>" alt="thumb">
          <div class="blog-item-content">
            <h4><?php echo htmlspecialchars($r['title']); ?></h4>
            <p><?php echo date('d M Y', strtotime($r['created_at'])); ?></p>
          </div>
        </a>
      </div>
    <?php endforeach; ?>
  </div>
</div>

</body>
</html>
