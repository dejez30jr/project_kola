<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Smk nurul iman</title>
  <link rel="stylesheet" href="<?= $base_url ?>/assets/css/style.css">
  <link rel="icon" href="img/logo.png" type="image/x-icon">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link rel="stylesheet" type="text/css"
    href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.1/src/regular/style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
  /* Floating icon container */
  .floating-icon {
    position: fixed;
    bottom: 20px;
    right: 20px;
    /* width: 60px;
      height: 60px; */
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 1000;
    cursor: pointer;
    transition: transform 0.3s ease;
  }

  .floating-icon:hover {
    transform: scale(1.1);
  }

  .floating-icon img {
    width: 100px;
    height: 100px;
  }

  @media(max-width: 600px) {
    .floating-icon {
      width: 50px;
      height: 50px;
    }

    .floating-icon img {
      width: 80px;
      height: 80px;
    }
  }
</style>

<body>
  <!-- nav -->
  <?php require "components/nav.php"; ?>

  <!-- section hero -->
  <section class="hero">
    <div class="hero-content" data-aos="fade-up" data-aos-duration="3000">
      <h1>Smk Nurul Iman Pisangan Baru Jaktim</h1>
      <p>Sekolah yang sudah di percaya oleh pemerintah yang terakredetasi A</p>
      <a href="#" class="btn">View more</a>
      <br>
      <div class="stats">
        <div><strong class="counter" data-target="35">0</strong><br />Years</div>
        <div><strong class="counter" data-target="35">0</strong><br />Teacher</div>
        <div><strong class="counter" data-target="200">0</strong><br />Student</div>
        <div><strong class="counter" data-target="80">0</strong><br />Educational Staff</div>
      </div>
    </div>
  </section>

  <!-- section sambutan -->
  <div class="hiasan-left">
    <div></div>
    <div></div>
  </div>
  <section class="sambutan" data-aos="fade-up" data-aos-delay="300" data-aos-duration="3000">
    <h1><span class="garis">|</span> Sambutan Kepsek</h1>
    <br>
    <div class="container-sambutan">
      <div class="sambutan-img">
        <div class="card-label">click view more</div>
        <div style="padding: 10px; display: flex; gap: 10px; flex-direction: column;">
          <b style="margin: 0px 0px 10px; background: ; color: white text-align: center;">Details</b>
          <p>Nama : bapak ero rohada M.M</p>
          <p>Jabatan : kepala sekolah</p>
          <p>Alamat : jaktim</p>
          <p>Pendidikan : jaktim</p>
        </div>
      </div>
      <div class="sambutan-text">
        <p>Assalamu’alaikum warahmatullahi wabarakatuh.</p>
        <p>Salam sejahtera bagi kita semua. <br>
          yang pertama yang paling utama kita panjatkan puja puji serta syukur khadirat allah swt yang telah memberikan
          nikmat sehat dan iman</p>
        <p>yang terhormat kepada pimpinan smk nurul iman yakni bapak ero rohada.MM selaku kepala sekolah di smk serta
          yang terhormat guru guru dan staf sekolah.</p>
        <p>yang terhormat kepada pimpinan smk nurul iman yakni bapak ero rohada.MM selaku kepala sekolah di smk serta
          yang terhormat guru guru dan staf sekolah.</p>
      </div>
    </div>
  </section>
  <div class="hiasan-right">
    <div></div>
    <div></div>
  </div>

  <!-- section berita -->
  <div class="div-berita" data-aos="fade-up" data-aos-delay="300" data-aos-duration="3000">
    <h1><span class="garis">|</span>Update terkini</h1>
    <div class="berita-container" id="Berita">

      <!-- Berita Samping Kiri -->
<div class="berita-samping-kiri">
  <?php foreach ($berita_terkini as $row): ?>
    <div class="kartu-berita tinggi-sama">
      <a href="<?= $base_url ?>/artikel/<?= urlencode($row['slug']) ?>">
        <img src="<?= $base_url ?>/assets/uploads/<?= htmlspecialchars($row['image']) ?>" loading="lazy" alt="Smk nurul iman">
        <div class="isi-kartu">
          <div class="label-kategori">
            <?= htmlspecialchars($row['tag_content']) ?>
          </div>
          <div class="judul-berita">
            <?= htmlspecialchars($row['title']) ?>
          </div>
        </div>
      </a>
    </div>
  <?php endforeach; ?>
</div>


      <!-- Berita Utama Tengah -->
      <?php foreach ($info_spmb as $row): ?>
      <div class="berita-utama">
        <div class="kartu-berita tinggi-sama">
          <a style="text-decoration: none;" href="artikel/<?= htmlspecialchars($row['slug']) ?>">
            <img src="<?= $base_url ?>/assets/uploads/<?= htmlspecialchars($row['image']) ?>" loading="lazy" alt="Smk nurul iman">
            <div class="isi-kartu">
              <div class="label-kategori">
                <?= htmlspecialchars($row['tag_content']) ?>
              </div>
              <div class="judul-berita">
                <?= htmlspecialchars($row['title']) ?>
              </div>
            </div>
          </a>
        </div>
      </div>
      <?php endforeach; ?>

      <!-- Berita Samping Kanan -->
      <div class="berita-samping-kanan">
        <div class="daftar-berita">
          <div class="tema-berita">
            <h3 style="color: black; width: fit-content; padding: 5px; background: #ddd; border-radius: 10px;">🎖️
              Seputar Prestasi</h3>
          </div>
          <?php foreach ($artikel_prestasi as $row): ?>
          <div class="item-berita">
            <a style="text-decoration: none;" href="artikel/<?= htmlspecialchars($row['slug']) ?>">
               <img src="<?= $base_url ?>/assets/uploads/<?= htmlspecialchars($row['image']) ?>" loading="lazy" alt="Smk nurul iman">
              <div>
                <h2 class="judul-berita">
                  <?= htmlspecialchars($row['title']) ?>
                </h2>
                <p style="color: tomato; font-size: 13px;">
                  <?= htmlspecialchars($row['tag_content']) ?>
                </p>
                <p>
                  <?= date('d F Y', strtotime($row['created_at'])) ?>
                </p>
              </div>
            </a>
          </div>
          <hr>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>

  <!-- xection eskul -->
  <section class="ekskul-section" id="eskul" data-aos="fade-up" data-aos-delay="300" data-aos-duration="3000">
    <h1><span class="garis">|</span> Ekstrakurikuler</h1>
    <div class="ekskul-grid">
      <div class="ekskul-card">
        <h1>Pramuka</h1>
        <!-- <img src="https://tse3.mm.bing.net/th/id/OIP.snzaZNdM7ISvYP-lDSk9LgHaG4?r=0&w=880&h=817&rs=1&pid=ImgDetMain&cb=idpwebp1&o=7&rm=3" alt=""> -->
      </div>
      <div class="ekskul-card">
        <h1>PMR</h1>
      </div>
      <div class="ekskul-card">
        <h1>Basket</h1>
      </div>
      <div class="ekskul-card">
        <h1>Tari</h1>
      </div>
      <div class="ekskul-card">
        <h1>Paskibra</h1>
      </div>
      <div class="ekskul-card">
        <h1>Drumband military</h1>
      </div>
      <div class="ekskul-card">
        <h1>Rohis</h1>
      </div>
      <div class="ekskul-card">
        <h1>Hadroh</h1>
      </div>
      <div class="ekskul-card">
        <h1>Badminton</h1>
      </div>
    </div>
  </section>


  <!-- section jurusan -->
  <section class="section-jurusan" data-aos="fade-up" data-aos-delay="300" data-aos-duration="3000" id="jurusan">
    <div class="hiasan-left">
      <div></div>
      <div></div>
    </div>

    <div class="jurusan-kolom">
      <h1><span class="garis">|</span>Program Keahlian</h1>
      <!-- Rekayasa Perangkat Lunak -->
      <div class="item-kj rpl popklik" data-popup="popupbox7">
        <div class="i-kj">
          <p id="p"></p>
        </div>
        <h2 class="h2">Rekayasa prangkat lunak</h2>
      </div>

      <!-- Akuntansi -->
      <div class="item-kj akuntansi popklik" data-popup="popupbox8">
        <div class="i-kj">
          <p id="p"></p>
        </div>
        <h2 class="h2">Akuntansi Keuangan Lembaga</h2>
      </div>

      <!-- Management Perkantoran -->
      <div class="item-kj perkantoran popklik" data-popup="popupbox9">
        <div class="i-kj">
          <p id="p"></p>
        </div>
        <h2 class="h2">Management perkantoran</h2>
      </div>
    </div>

    <div class="hiasan-right">
      <div></div>
      <div></div>
    </div>
  </section>

  <!-- fasilitas -->
  <section class="fasilitas-galeri" id="fasilitas" data-aos="fade-up" data-aos-delay="300" data-aos-duration="3000">
    <h1><span class="garis">|</span>Fasilitas sekolah</h1>

    <!-- HIASAN -->
    <div class="hiasan-fasilitas1"><span></span></div>
    <div class="hiasan-fasilitas2"><span></span></div>

    <div class="fasilitas-grid">
      <div class="fasilitas-item">
        <img loading="lazy" src="https://i.pinimg.com/736x/c1/b7/99/c1b799fe955eada68e7b9f64ab9ae43d.jpg"
          alt="Ruang Kelas">
        <div class="img-title">Ruang Kelas</div>
      </div>
      <div class="fasilitas-item">
        <img loading="lazy" src="https://i.pinimg.com/736x/6a/c6/52/6ac652d866f818853c77df213af00680.jpg"
          alt="Lab Komputer">
        <div class="img-title">Lab Komputer</div>
      </div>
      <div class="fasilitas-item">
        <img loading="lazy" src="https://i.pinimg.com/736x/ee/bf/d1/eebfd12d1348e49f395d1e391de58e52.jpg"
          alt="Perpustakaan">
        <div class="img-title">Perpustakaan</div>
      </div>
      <div class="fasilitas-item">
        <img loading="lazy" src="https://i.pinimg.com/736x/34/4c/60/344c609bff4ae466d824357b8b78aad8.jpg"
          alt="Lapangan Olahraga">
        <div class="img-title">Lapangan Olahraga</div>
      </div>
      <div class="fasilitas-item">
        <img loading="lazy" src="https://i.pinimg.com/736x/67/42/3e/67423e252f5ae6bf15149e138d145608.jpg"
          alt="Ruang Guru">
        <div class="img-title">Ruang Guru</div>
      </div>
      <div class="fasilitas-item">
        <img loading="lazy" src="https://i.pinimg.com/736x/a9/a4/09/a9a409f0c629e968690b70784674980b.jpg"
          alt="Kantin Sekolah">
        <div class="img-title">Kantin Sekolah</div>
      </div>
      <div class="fasilitas-item">
        <img loading="lazy" src="https://i.pinimg.com/736x/d7/1b/ac/d71bac0b2df5434d78ee18dfe148df1b.jpg"
          alt="Masjid Sekolah">
        <div class="img-title">Masjid Sekolah</div>
      </div>
    </div>
  </section>

  <!-- guru -->
  <div class="guru-wrapper" data-aos="fade-up" data-aos-delay="300" data-aos-duration="3000">
    <h1><span class="garis">|</span>Guru & Tendik</h1>
    <button class="arrow left" onclick="slideGuru(-1)">&#10094;</button>

    <div class="guru-container" id="guruContainer">
      <div class="guru">
        <img src="assets/img//paisa.png" alt="Wiwit Yulian Ismail">
        <div class="guru-info">
          <h3>Wiwit Yulian Ismail, S.Pd</h3>
          <p>Seni Budaya</p>
        </div>
      </div>
      <div class="guru">
        <img src="assets/img//paendang.jpg" alt="Wiwit Yulian Ismail">
        <div class="guru-info">
          <h3>Wiwit Yulian Ismail, S.Pd</h3>
          <p>Seni Budaya</p>
        </div>
      </div>
      <div class="guru">
        <img src="assets/img//pabudi.jpg" alt="Andri Kretanto">
        <div class="guru-info">
          <h3>Andri Kretanto, S.Pd</h3>
          <p>Pendidikan Jasmani, Olah Raga dan Kesehatan</p>
        </div>
      </div>
      <div class="guru">
        <img src="assets/img//pasul.jpg" alt="Bambang Kusnanto">
        <div class="guru-info">
          <h3>Bambang Kusnanto, S.Pd</h3>
          <p>Pendidikan Jasmani, Olah Raga dan Kesehatan</p>
        </div>
      </div>
      <div class="guru">
        <img src="assets/img//buepon.jpg" alt="Bambang Kusnanto">
        <div class="guru-info">
          <h3>Bambang Kusnanto, S.Pd</h3>
          <p>Pendidikan Jasmani, Olah Raga dan Kesehatan</p>
        </div>
      </div>
      <div class="guru">
        <img src="assets/img//budwi.jpg" alt="Bambang Kusnanto">
        <div class="guru-info">
          <h3>Bambang Kusnanto, S.Pd</h3>
          <p>Pendidikan Jasmani, Olah Raga dan Kesehatan</p>
        </div>
      </div>
      <div class="guru">
        <img src="assets/img//bumetri.jpg" alt="Bambang Kusnanto">
        <div class="guru-info">
          <h3>Bambang Kusnanto, S.Pd</h3>
          <p>Pendidikan Jasmani, Olah Raga dan Kesehatan</p>
        </div>
      </div>
      <div class="guru">
        <img src="assets/img//buliah.jpg" alt="Bambang Kusnanto">
        <div class="guru-info">
          <h3>Bambang Kusnanto, S.Pd</h3>
          <p>Pendidikan Jasmani, Olah Raga dan Kesehatan</p>
        </div>
      </div>
      <div class="guru">
        <img src="assets/img//pawahyu.jpg" alt="Bambang Kusnanto">
        <div class="guru-info">
          <h3>Bambang Kusnanto, S.Pd</h3>
          <p>Pendidikan Jasmani, Olah Raga dan Kesehatan</p>
        </div>
      </div>
      <div class="guru">
        <img src="assets/img//padeni.jpg" alt="Djoko Sutrisno">
        <div class="guru-info">
          <h3>Djoko Sutrisno, S.Pd</h3>
          <p>Pendidikan Jasmani, Olah Raga dan Kesehatan</p>
        </div>
      </div>
    </div>

    <button class="arrow right" onclick="slideGuru(1)">&#10095;</button>
  </div>


  <!-- testimmonials -->
  <div class="testimonial-container" data-aos="fade-up" data-aos-delay="300" data-aos-duration="3000">
    <div class="hiasan-left">
      <div></div>
      <div></div>
    </div>
    <br>
    <h1><span class="garis">|</span>Apa kata mereka?</h1>
    <div class="testimonial-track" id="sliderTrack">
      <!-- Testimonial Item -->
      <div class="testimonial">
        <div class="testimonial-content">
          <p class="testimonial-quote">"Sekolah nya bagus dan bersih"</p>
          <div class="testimonial-author">
            <img src="https://i.pravatar.cc/40?img=1" alt="">
            <div>
              <div class="testimonial-name">John</div>
            </div>
          </div>
        </div>
      </div>
      <div class="testimonial">
        <div class="testimonial-content">
          <p class="testimonial-quote">"Tiap kelas nya ada acc nya keren"</p>
          <div class="testimonial-author">
            <img src="https://i.pravatar.cc/40?img=2" alt="">
            <div>
              <div class="testimonial-name">Ema12</div>
            </div>
          </div>
        </div>
      </div>
      <div class="testimonial">
        <div class="testimonial-content">
          <p class="testimonial-quote">"Drumband nya keren"</p>
          <div class="testimonial-author">
            <img src="https://i.pravatar.cc/40?img=3" alt="">
            <div>
              <div class="testimonial-name">Aliiska11</div>
            </div>
          </div>
        </div>
      </div>
      <div class="testimonial">
        <div class="testimonial-content">
          <p class="testimonial-quote">"Masuk sini cuman ngincer eskul drumband nya"</p>
          <div class="testimonial-author">
            <img src="https://i.pravatar.cc/40?img=4" alt="">
            <div>
              <div class="testimonial-name">Charlie335</div>
            </div>
          </div>
        </div>
      </div>
      <div class="testimonial">
        <div class="testimonial-content">
          <p class="testimonial-quote">"semoga sukses salalu para alumni!"</p>
          <div class="testimonial-author">
            <img src="https://i.pravatar.cc/40?img=5" alt="">
            <div>
              <div class="testimonial-name">Usher14</div>
            </div>
          </div>
        </div>
      </div>
      <div class="testimonial">
        <div class="testimonial-content">
          <p class="testimonial-quote">"Top sekolah dengan drumband military."</p>
          <div class="testimonial-author">
            <img src="https://i.pravatar.cc/40?img=6" alt="">
            <div>
              <div class="testimonial-name">Emily</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- btn to form komen -->
    <a href="" onclick="belumTersedia()">Tambahkan Komentar anda</a>
    <br>
    <div class="hiasan-right">
      <div></div>
      <div></div>
    </div>
  </div>

  <!-- section PARTNER LIST -->
  <div class="slider" data-aos="fade-up" data-aos-delay="300" data-aos-duration="3000">
    <p>Kami bekersama dengan:</p>
    <br>
    <div class="slide-track">
      <img src="https://www.linkqu.id/wp-content/uploads/2021/08/Logo-Alfamart-Linkqu.png" alt="Logo 1" />
      <img src="https://vectorseek.com/wp-content/uploads/2023/11/BANK-SYARIAH-INDONESIA-Logo-Vector.svg-.png"
        alt="Logo 2" />
      <img src="https://tse2.mm.bing.net/th/id/OIP.frPtLulUbS4dgipkBHhhjwHaCx?cb=iwp2&w=500&h=187&rs=1&pid=ImgDetMain"
        alt="Logo 3" />
      <img
        src="https://www.telkom.co.id/minio/show/data/image_upload/page/1594112773573_compress_PNG%20Logo%20Sekunder%20Telkom.png"
        alt="Logo 4" />
      <img
        src="https://designoneprinting.com/wp-content/uploads/2023/04/Design-One-Printing-Logo-Background-Video-Fallback-1024x277.png"
        alt="Logo 5" />
      <img
        src="https://2.bp.blogspot.com/-Ayja515d2fc/Wb1SekiM7sI/AAAAAAAAQeQ/wfMHPhPuGusBOL3hlJwvQh7m7Ro5_clVgCLcBGAs/s1600/Logo%2BKementerian%2BKeuangan.png"
        alt="Logo 6" />
      <img src="https://i.pinimg.com/originals/c3/cc/4a/c3cc4a79463b552eb0c592501c44b576.png" alt="Logo 1" />
      <img
        src="https://2.bp.blogspot.com/-Ayja515d2fc/Wb1SekiM7sI/AAAAAAAAQeQ/wfMHPhPuGusBOL3hlJwvQh7m7Ro5_clVgCLcBGAs/s1600/Logo%2BKementerian%2BKeuangan.png"
        alt="Logo 2" />
      <img src="https://rsham.co.id/wp-content/uploads/2024/03/Logo-Kemenkes-1536x474.png" alt="Logo 3" />
      <img src="https://rsham.co.id/wp-content/uploads/2024/03/Logo-Kemenkes-1536x474.png" alt="Logo 4" />
      <img src="https://sindoshipping.com/wp-content/uploads/2016/06/logo-tiki.png" alt="Logo 5" />
      <img src="https://tse2.mm.bing.net/th/id/OIP.frPtLulUbS4dgipkBHhhjwHaCx?cb=iwp2&w=500&h=187&rs=1&pid=ImgDetMain"
        alt="Logo 6" />
    </div>
  </div>

  <!-- footer -->
  <?php include "components/footer.php"; ?>

  <!-- Floating Logo -->
  <a href="https://wa.me/6281234567890" target="_blank" class="floating-icon">
    <img src="https://spmb.fkunswagati.ac.id/asset/foto_berita/bg-informasi.png" alt="informasi Logo">
  </a>

  <script>
    // stats detail
    document.addEventListener("DOMContentLoaded", function () {
      const counters = document.querySelectorAll(".counter");

      counters.forEach(counter => {
        const updateCount = () => {
          const target = +counter.getAttribute("data-target");
          let count = +counter.innerText.replace("+", "");
          const increment = Math.max(1, Math.floor(target / 100)); // makin kecil, makin lambat

          if (count < target) {
            count += increment;
            if (count > target) count = target;
            counter.innerText = count + "+";
            setTimeout(updateCount, 30); // delay antar hitungan (ms)
          } else {
            counter.innerText = target + "+";
          }
        };

        updateCount();
      });
    });

    // slide loop
    document.querySelectorAll('.slider-track').forEach(track => {
      const clone = track.cloneNode(true);
      track.append(...clone.children);
    });

    // GURU
    function slideGuru(direction) {
      const container = document.getElementById('guruContainer');
      const card = container.querySelector('.guru');
      if (!card) return;

      const scrollAmount = card.offsetWidth + 20; // termasuk gap
      const maxScrollLeft = container.scrollWidth - container.clientWidth;

      if (container.scrollLeft >= maxScrollLeft && direction > 0) {
        // Kembali ke awal jika sudah mentok kanan
        container.scrollTo({ left: 0, behavior: 'smooth' });
      } else {
        container.scrollBy({ left: direction * scrollAmount, behavior: 'smooth' });
      }
    }

    // Auto-slide setiap 3 detik
    let autoSlide = setInterval(() => {
      slideGuru(1);
    }, 3000);

    // Reset auto-slide kalau tombol diklik
    document.querySelectorAll('.arrow').forEach(btn => {
      btn.addEventListener('click', () => {
        clearInterval(autoSlide);
        autoSlide = setInterval(() => {
          slideGuru(1);
        }, 3000);
      });
    });

    // testimonial
    const track = document.getElementById("sliderTrack");
    const cards = document.querySelectorAll(".testimonial");
    const totalCards = cards.length;
    let index = 0;

    function getVisibleCards() {
      if (window.innerWidth <= 600) return 1;
      if (window.innerWidth <= 992) return 2;
      return 3;
    }

    function slideCards() {
      const visibleCards = getVisibleCards();
      index += visibleCards;
      if (index >= totalCards) index = 0;
      const cardWidthPercent = 100 / visibleCards;
      const translateX = -(index * cardWidthPercent);
      track.style.transform = `translateX(${translateX}%)`;
    }

    setInterval(slideCards, 3000);
    window.addEventListener("resize", () => {
      index = 0;
      track.style.transform = "translateX(0)";
    });

    // aler cooming soon
    function belumTersedia() {
      alert("Maaf, mungkin Anda bisa coba di kemudian hari.");
    }
  </script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <script src="main.js"></script>
</body>

</html>