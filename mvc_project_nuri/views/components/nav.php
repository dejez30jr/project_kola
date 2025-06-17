<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
   <title><?= $title ?? 'Judul Default' ?></title>
  <title>SMK NURUL IMAN</title>
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      font-family: Arial, sans-serif;
      scroll-behavior: smooth;
    }

    .navbar {
      position: fixed;
      width: 100%;
      z-index: 10;
    }

    .container {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 1rem 2rem;
    }

    nav {
      display: flex;
      align-items: center;
    }

    .logo {
      display: flex;
      align-items: center;
      gap: 10px;
      font-weight: bold;
      font-size: 30px;
      color: white;
    }

    .logo img {
      width: 40px;
    }

    .nav-links {
      display: flex;
      gap: 1rem;
    }

    .nav-links a {
      color: white;
      text-decoration: none;
    }

    .nav-links .btn {
      background: white;
      color: black;
      padding: 0.5rem 1rem;
      border-radius: 8px;
    }

    .hamburger {
      display: none;
      font-size: 2rem;
      cursor: pointer;
      color: white;
    }

    .dropdown {
      position: relative;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background: #222;
      top: 100%;
      left: 0;
      min-width: 150px;
      z-index: 100;
    }

    .dropdown:hover .dropdown-content {
      display: block;
    }

    .dropdown-content a {
      display: block;
      padding: 0.5rem;
      color: white;
      text-decoration: none;
    }

    .close-sidebar {
      display: none;
      font-size: 28px;
      color: white;
      text-align: right;
      padding: 10px 20px;
      cursor: pointer;
    }
    .nav-links img{
      display: none;
    }
    @media(max-width: 400px) and (min-width: 900px) {
     .container .logo img{
      width: 10  0px;
     }
    }
    @media (max-width: 900px) {
      .navbar {
        display: flex;
        justify-content: center;
      }
      .container {
        width: 90%;
        padding: 10px;
        border-radius: 20px;
        margin: 10px auto;
      }
      .nav-links img{
      display: flex;
      }
      .nav-links {
        position: fixed;
        top: 0;
        left: -100%;
        width: 70%;
        height: 100dvh;
        background-color: green;
        flex-direction: column;
        border-radius: 0px 20px 20px 0px;
        text-align: center;
        padding: 50px 20px 20px;
        gap: 20px;
        transition: left 0.3s ease-in-out;
        z-index: 1000;
      }

      .nav-links.active {
        left: 0;
      }

      .hamburger {
        display: block;
      }

      .navbar .logo span {
        font-size: 17px;
      }

      .dropdown-content {
        position: static;
      }

      .close-sidebar {
        display: block;
        right: 0;
        top: 10px;
        position: absolute;
      }
    }

    /* Popup */
    .popup-overlay {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: rgba(0, 0, 0, 0.6);
      display: none;
      align-items: center;
      justify-content: center;
      z-index: 2000;
    }

    .popup-overlay.show {
      display: flex;
      animation: fadeIn 0.3s forwards;
    }

    .popup-content {
      background: white;
      padding: 20px;
      border-radius: 12px;
      width: 90%;
      max-width: 400px;
      transform: scale(0.5);
      animation: scaleUp 0.3s forwards;
      position: relative;
    }

    .popup-content h2 {
      margin-top: 0;
      text-align: center;
      color: black;
    }

    .popup-content form {
      display: flex;
      flex-direction: column;
      gap: 10px;
    }

    .popup-content input,
    .popup-content textarea {
      width: 100%;
      padding: 10px;
      border: 1px solid #ddd;
      border-radius: 8px;
      font-size: 14px;
    }

    .popup-content button {
      padding: 10px;
      background: black;
      color: white;
      border: none;
      border-radius: 8px;
      cursor: pointer;
    }

    .close-btn {
      color: black;
      position: absolute;
      top: 8px;
      right: 15px;
      font-size: 20px;
      cursor: pointer;
    }

    @keyframes scaleUp {
      to {
        transform: scale(1);
      }
    }

    @keyframes fadeIn {
      from {
        background: rgba(0, 0, 0, 0);
      }
      to {
        background: rgba(0, 0, 0, 0.6);
      }
    }
  </style>
</head>
<body>
  <header class="navbar">
    <div class="container" id="navbar">
      <div class="logo">
        <img src="assets/img/logonuri.png" alt="Logo" />
        <span>SMK NURUL IMAN</span>
      </div>

      <nav id="nav-menu" class="nav-links">
        <div class="close-sidebar" onclick="toggleMenu()">✕</div>
        <br>
        <img src="img/logonuri.png" alt="" width="100px">
        <a href="#Berita">Info terkini</a>
        <a href="#eskul">Ekstrakulikuler</a>
        <a href="#jurusan">Jurusan</a>
        <a href="#fasilitas">Fasilitas</a>
        <div class="dropdown">
          <a href="#">Profil sekolah ▾</a>
          <div class="dropdown-content">
              <a href="">Sejarah</a>
              <a href="">Visi & Misi</a>
              <a href="">Identitas</a>
          </div>
        </div>
        <div class="dropdown">
          <a href="#">SPMB ▾</a>
          <div class="dropdown-content">
            <?php foreach ($info_spmb as $row): ?>
              <a href="nuri_artikel.php?slug=<?= $row['slug'] ?>">Info</a>
            <?php endforeach; ?>
          </div>
        </div>
        <a href="#" class="btn">Contact</a>
      </nav>

      <div class="hamburger" onclick="toggleMenu()">☰</div>
    </div>
  </header>

  <div class="popup-overlay" id="popup">
    <div class="popup-content">
      <span class="close-btn" onclick="closePopup()">&times;</span>
      <h2>Kontak Kami</h2>
      <form>
        <label>Nama</label>
        <input type="text" placeholder="Nama lengkap" required>
        <label>Email</label>
        <input type="email" placeholder="Alamat email" required>
        <label>Pesan</label>
        <textarea rows="4" placeholder="Tulis pesan Anda" required></textarea>
        <button type="submit">Kirim</button>
      </form>
    </div>
  </div>

  <script>
    function toggleMenu() {
      const menu = document.getElementById("nav-menu");
      menu.classList.toggle("active");
    }

    // Smooth scroll fix dan auto close di mobile
    document.querySelectorAll("#nav-menu a[href^='#']").forEach(link => {
      link.addEventListener("click", function (e) {
        const target = document.querySelector(this.getAttribute("href"));
        if (target) {
          e.preventDefault();
          window.scrollTo({
            top: target.offsetTop - 80,
            behavior: "smooth"
          });
          if (window.innerWidth <= 900) {
            document.getElementById("nav-menu").classList.remove("active");
          }
        }
      });
    });

    window.onscroll = function () {
      const navbar = document.getElementById('navbar');
      if (document.documentElement.scrollTop > 600) {
        navbar.style.background = "rgba(0,0,0,0.5)";
      } else {
        navbar.style.background = "none";
      }
    }

    document.querySelector(".btn").addEventListener("click", function (e) {
      e.preventDefault();
      document.getElementById("popup").classList.add("show");
    });

    function closePopup() {
      document.getElementById("popup").classList.remove("show");
    }
  </script>
</body>
</html>
