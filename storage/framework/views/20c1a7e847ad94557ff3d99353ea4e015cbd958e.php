<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <!--Import materialize.css-->
    <!-- AOS -->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- My CSS -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- My Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet" />

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TKDN SUCOFINDO</title>
  </head>

  <body id="home" class="scrollspy">
    <!-- Dropdown Structure -->
    <ul id="dropdown1" class="dropdown-content">
      <li><a href="/login">Pelanggan Terdaftar</a></li>
      <li><a href="https://www.operations.tkdnsucofindo.id/">Verifikator</a></li>
    </ul>
    <!-- Navbar -->
    <div class="navbar-fixed">
      <nav class="blue darken-2">
        <div class="container">
          <div class="nav-wrapper">
            <a href="#home" class="brand-logo responsive-img"> easy TKDN </a>
            <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
              <li><a href="#about">Tentang TKDN</a></li>
              <li><a href="#clients">Pelanggan</a></li>
              <li><a href="#services">Registrasi</a></li>
              <li><a href="#portfolio">Galeri</a></li>
              <li><a href="#contact">Kontak</a></li>
              <li>
                <a class="dropdown-trigger" href="#!" data-target="dropdown1">Login<i class="material-icons right">person</i></a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>

    <!-- Sidenav -->
    <ul class="sidenav" id="mobile-nav">
      <li><a href="#about">Tentang TKDN</a></li>
      <li><a href="#clients">Pelanggan</a></li>
      <li><a href="#services">Registrasi</a></li>
      <li><a href="#portfolio">Galeri</a></li>
      <li><a href="#contact">Kontak</a></li>
    </ul>

    <!-- Slider -->
    <div class="slider">
      <ul class="slides">
        <li>
          <img src="img/wall.jpg" />
          <!-- random image -->
          <div class="caption left-align">
            <h3>Visi Kami</h3>
            <h5 class="light grey-text text-lighten-3">Menjadi Perusahaan Kelas Dunia yang kompetitif, andal dan terpercaya di bidang inspeksi, pengujian, sertifikasi, konsultansi dan pelatihan.</h5>
          </div>
        </li>
        <li>
          <img src="img/wall4.jpg" />
          <!-- random image -->
          <div class="caption right-align">
            <h3>Misi Kami</h3>
            <h5 class="light grey-text text-lighten-3">
              Menciptakan nilai ekonomi kepada para pemangku kepentingan terutama pelanggan, pemegang saham dan pegawai melalui layanan jasa inspeksi, pengujian, sertifikasi, konsultansi serta jasa terkait lainnya untuk menjamin kepastian
              berusaha.
            </h5>
          </div>
        </li>
        <li>
          <img src="img/wall3.jpg" />
          <!-- random image -->
          <div class="caption center-align responsive-img">
            <h3>SUCOFINDO</h3>
            <h5 class="light grey-text text-lighten-3">Assure Your Confidence.</h5>
          </div>
        </li>
      </ul>
    </div>

    <!-- About Us -->
    <section id="about" class="about scrollspy" data-aos="fade-up" data-aos-offset="300">
      <div class="container">
        <div class="row">
          <div class="col m12 light">
            <img src="img/sucofindo.png" />
            <p>
              Perusahaan di Indonesia umumnya masih perlu mengimpor barang yang dibutuhkan pabrik di Indonesia guna mendukung proses produksi. namun demikian Pemerintah juga berupaya mendorong peningkatan penggunaan produk dalam negeri.
              Dalam proses impor inilah pemerintah menetapkan peraturan tentang tingkat kandungan dalam negeri (TKDN) yang harus diikuti oleh importir.
            </p>
            <p>Perusahaan akan mendapatkan sertifikat TKDN yang dikeluarkan oleh lembaga yang ditunjuk, setelah melakukan inspeksi dan pengujian dari perusahaan inspeksi independen Sucofindo.</p>
            <p>
              Sebagai perusahaan milik negara yang bergerak di bidang inspeksi dan pengujian, Sucofindo selama ini melayani pengujian dan sertifikasi TKDN untuk pemerintah maupun industri. Dalam hal keperluan sertifikasi TKDN, Kementerian
              Perindustrian telah menunjuk beberapa lembaga surveyor yang akan menilai dan memverifikasi, salah satunya adalah PT Sucofindo.
            </p>
            <p>Dengan importir telah memiliki sertifikat TKDN, pemerintah akan memberikan izin impor untuk mendukung proses produksi pabrik di Indonesia.</p>
            <p>
              Dengan adanya ketentuan tentang TKDN, pemerintah ingin tetap memberikan keseimbangan pada perusahaan untuk berproduksi di Indonesia. Produksi perusahaan tetap dapat berlangsung, namun harus memberikan porsi secara proporsional
              terhadap hasil-hasil produksi dalam negeri. Agar para produsen di Indonesia ikut berkembang.
            </p>
            <p>
              TKDN adalah besaran kandungan yang berasal dari dalam negeri, yakni Indonesia, pada barang, jasa serta gabungan barang dan jasa. Ketentuan tentang TKDN bersifat wajib untuk sejumlah kegiatan produksi sehingga setiap
              perusahaan, terutama perusahaan berskala nasional dan internasional harus mengikutinya.
            </p>
            <p>
              Sejumlah aturan telah dikeluarkan oleh pemerintah untuk mengatur pemberlakuan TKDN di Indonesia. Yakni, Peraturan Pemerintah (PP) Nomor 29 tahun 2018 tentang Pemberdayaan Industri, Keputusan Presiden Nomor 24 Tahun 2018
              tentang Tim Nasional Peningkatan Penggunaan Produk Dalam Negeri, dan beberapa aturan turunan setingkat peraturan menteri, sesuai bidang masing-masing kementerian dan lembaga.
            </p>
            <p>
              Di dalam PP Nomor 29 Tahun 2018 tentang Perberdayaan Industri, pemerintah mewajibkan penggunaan komponen dan produk dalam negeri pada lembaga pemerintah, Badan Usaha Milik Negara (BUMN), Badan Usaha Milik Daerah (BUMD) hingga
              lembaga pemerintah yang menggunakan dana hibah.
            </p>
            <p>
              Dalam pasal 61 PP Nomor 29 Tahun 2018 disebutkan, “Dalam pengadaan barang dan jasa, wajib menggunakan Produk Dalam Negeri apabila terdapat Produk Dalam Negeri yang memiliki penjumlahan nilai TKDN dan nilai Bobot Manfaat
              Perusahaan minimal 4O% (empat puluh persen)”. Selain itu disebutkan pula, “Produk Dalam Negeri yang wajib digunakan sebagaimana dimaksud pada ayat (1) harus memiliki nilai TKDN paling sedikit 25% (dua puluh lima persen)”.
            </p>
            <p>
              Dalam mengukur TKDN suatu barang, misalnya, Tim Nasional Peningkatan Penggunaan Produk Dalam Negeri (Tim Nasional) telah menetapkan cara pengukuran berdasarkan faktor produksi. Seperti bahan/material langsung, tenaga kerja
              langsung, dan biaya tidak langsung pabrik. Sementara TKDN jasa dihitung berdasarkan tenaga kerja, alat kerja/fasilitas, dan jasa umum.
            </p>
            <p></p>
            <h5>Verifikasi TKDN</h5>
            <p>
              Untuk memastikan industri mematuhi regulasi tersebut, pemerintah melakukan verifikasi dengan cara menghitung nilai TKDN barang/jasa serta bobot manfaat perusahaan. Proses verifikasi meliputi proses produksi, mesin yang
              digunakan, tenaga kerja baik langsung maupun tidak langsung, biaya tidak langsung pabrik seperti penggunaan listrik, gas, telepon dan lain-lain.
            </p>
            <p>Berdasarkan data Kementerian Perindustrian, hingga saat ini sudah diterbitkan sertifikat TKDN terhadap proses produksi 19 kelompok barang, beberapa diantaranya adalah:</p>
            <p>1. Bahan Penunjang Pertanian</p>
            <p>2. Mesin dan Peralatan Pertanian</p>
            <p>3. Mesin dan Peralatan Pertambangan</p>
            <p>4. Mesin dan Peralatan Migas</p>
            <p>5. Alat Berat, Konstrukti dan Material Handling</p>
            <p>6. Mesin dan Peralatan Pabrik</p>
            <p>7. Bahan Bangunan/Konstruksi</p>
            <p>8. Logam dan Barang Logam Bahan Kimia dan barang Kimia</p>
            <p>9. Peralatan Elektronika</p>
            <p>10. Peralatan Kelistrikan</p>
            <p>11. Peralatan telekomunikasi</p>
            <p>12. Alat Transport</p>
            <p>13. Bahan dan Peralatan Kesehatan</p>
            <p>14. Pakaian dan Perlengkapan Kerja</p>
            <p>15. Peralatan Olahraga dan Pendidikan</p>
            <p>16. Sarana Pertahanan</p>
            <p>17. Barang Lainnya</p>
            <p>18. Maritim</p>
            <p>Perusahan Anda yang ingin mendapatkan sertifikat penggunaan TKDN, Anda mengajukan pendaftaran kepada Lembaga yang telah ditunjuk oleh pemerintah untuk melakukan verifikasi. Salah satunya adalah PT Sucofindo (Persero).</p>
            <p>
              Beberapa persyaratan dokumen harus dipenuhi oleh pengguna layanan TKDN dari Sucofindo, diantaranya adalah akta pendirian perusahaan, tanda daftar perusahaan, laporan hasil produksi satu tahun terakhir, dan beberapa syarat
              lainnya.
            </p>
            <p>Jadi perusahaan dalam negeri yang ingin memverifikasi tingkat TKDN, dapat menghubungi Sucofindo melalui email (customer.service@sucofindo.co.id), telepon (+62-21-7983666) atau layanan chat di website Sucofindo.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Clients -->
    <div id="clients" class="parallax-container scrollspy">
      <div class="parallax"><img src="img/jumbotron-bg.jpg" /></div>

      <div class="container clients">
        <h3 class="center light white-text">Pelanggan</h3>
        <div class="row">
          <div class="col m4 s12 center">
            <img src="img/DAHANA.png" alt="" />
          </div>
          <div class="col m4 s12 center">
            <img src="img/kemenperin.png" alt="" />
          </div>
          <div class="col m4 s12 center">
            <img src="img/PINDAD.png" alt="" />
          </div>
        </div>
        <div class="row">
          <div class="col m4 s12 center">
            <img src="img/kemenhan.png" alt="" />
          </div>
          <div class="col m4 s12 center">
            <img src="img/Pertamina.png" alt="" />
          </div>
          <div class="col m4 s12 center">
            <img src="img/esdm.png" alt="" />
          </div>
        </div>
        <div class="row">
          <div class="col m4 s12 center">
            <img src="img/eni.png" alt="" />
          </div>
          <div class="col m4 s12 center">
            <img src="img/medcoenergi.png" alt="" />
          </div>
          <div class="col m4 s12 center">
            <img src="img/skk.png" alt="" />
          </div>
        </div>
      </div>
    </div>

    <!-- Services -->
    <section id="services" class="services grey lighten-3 scrollspy">
      <div class="container">
        <div class="row">
          <h3 class="light center grey-text text-darken-3">Registrasi</h3>
          <div class="col m4 s12">
            <div class="card-panel center" data-aos="flip-left" data-aos-duration="2000">
              <i class="material-icons medium">assignment_turned_in</i>
              <h5>TKDN Barang</h5>
              <p>Perusahan Anda ingin mendapatkan sertifikat TKDN Barang? Anda dapat mengajukan pendaftaran dengan klik link di bawah ini!</p>
              <a href="/login" class="btn btn-primary blue darken-2">Daftar</a>
            </div>
          </div>
          <div class="col m4 s12">
            <div class="card-panel center" data-aos="flip-up" data-aos-duration="2000">
              <i class="material-icons medium">accessibility</i>
              <h5>TKDN Jasa</h5>
              <p>Perusahan Anda ingin mendapatkan sertifikat TKDN Jasa? Anda dapat mengajukan pendaftaran dengan klik link di bawah ini!</p>
              <a href="" class="btn btn-primary blue darken-2">Under Development</a>
            </div>
          </div>
          <div class="col m4 s12">
            <div class="card-panel center" data-aos="flip-right" data-aos-duration="2000">
              <i class="material-icons medium">compare</i>
              <h5>TKDN Barang & Jasa</h5>
              <p>Perusahan Anda ingin mendapatkan sertifikat TKDN Barang & Jasa? Anda dapat mengajukan pendaftaran dengan klik link di bawah ini!</p>
              <a href="" class="btn btn-primary blue darken-2">Under Development</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Portfolio -->
    <section id="portfolio" class="portfolio scrollspy">
      <div class="container">
        <h3 class="light center grey-text text-darken-3">Galeri</h3>
        <div class="row">
          <div class="col m3 s12">
            <img src="img/1.jpg" class="responsive-img materialboxed" />
          </div>
          <div class="col m3 s12">
            <img src="img/2.jpg" class="responsive-img materialboxed" />
          </div>
          <div class="col m3 s12">
            <img src="img/3.jpg" class="responsive-img materialboxed" />
          </div>
          <div class="col m3 s12">
            <img src="img/4.jpg" class="responsive-img materialboxed" />
          </div>
        </div>
        <div class="row">
          <div class="col m3 s12">
            <img src="img/5.jpg" class="responsive-img materialboxed" />
          </div>
          <div class="col m3 s12">
            <img src="img/6.jpg" class="responsive-img materialboxed" />
          </div>
          <div class="col m3 s12">
            <img src="img/7.jpg" class="responsive-img materialboxed" />
          </div>
          <div class="col m3 s12">
            <img src="img/brg.jpg" class="responsive-img materialboxed" />
          </div>
        </div>
        <div class="row">
          <div class="col m3 s12">
            <img src="img/20.jpg" class="responsive-img materialboxed" />
          </div>
          <div class="col m3 s12">
            <img src="img/21.jpg" class="responsive-img materialboxed" />
          </div>
          <div class="col m3 s12">
            <img src="img/22.jpg" class="responsive-img materialboxed" />
          </div>
          <div class="col m3 s12">
            <img src="img//23.jpg" class="responsive-img materialboxed" />
          </div>
        </div>

        <!-- Video -->
        <div>
          <h3 class="light center grey-text text-darken-3">Verifikasi Lapangan</h3>
          <div class="video-container">
            <iframe width="853" height="480" src="img/VIDEO-2022-08-10-15-42-59.mp4" frameborder="0" allowfullscreen></iframe>
          </div>
        </div>
        <div>
          <h3 class="light center grey-text text-darken-3">Testimoni</h3>
          <div class="video-container">
            <iframe width="853" height="480" src="img/VIDEO-2022-08-10-15-44-51.mp4" frameborder="10" allowfullscreen></iframe>
          </div>
        </div>
        <div>
          <div class="video-container">
            <iframe width="853" height="480" src="img/VIDEO-2022-08-10-15-59-37.mp4" frameborder="10" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact Us -->
    <section id="contact" class="contact grey lighten-3 scrollspy">
      <div class="container">
        <h3 class="light grey-text text-darken-3 center">Kontak</h3>
        <div class="row">
          <div class="col m5 s12">
            <div class="card-panel blue darken-2 center white-text">
              <i class="material-icons">email</i>
              <h5>Kontak Kami</h5>
              <p>Johan Permana (081294570241), Nano Suprayogi (08174833612), Muhammad Fazri Faturrahman (081299437108)</p>
            </div>
            <ul class="collection with-header">
              <li class="collection-header"><h4>Kantor Kami</h4></li>
              <li class="collection-item">SBU Perdagangan, Industri, Kelautan dan Kandungan Lokal (PIK)</li>
              <li class="collection-item">Graha Sucofindo 4th Floor</li>
              <li class="collection-item">Jl. Raya Pasar Minggu Kav. 34 Jakarta Selatan DKI Jakarta, Indonesia</li>
            </ul>
          </div>

          <div class="col m7 s12">
            <form>
              <div class="card-panel">
                <h5>Silahkan isi formulir berikut.</h5>
                <div class="input-field">
                  <input type="text" name="name" id="name" class="validate" required />
                  <label for="name">Nama</label>
                </div>
                <div class="input-field">
                  <input type="email" name="email" id="email" class="validate" />
                  <label for="email">Email</label>
                </div>
                <div class="input-field">
                  <input type="text" name="phone" id="phone" />
                  <label for="phone">Nomor Telepon</label>
                </div>
                <div class="input-field">
                  <textarea name="message" id="message" class="materialize-textarea"></textarea>
                  <label for="message">Pesan</label>
                </div>
                <button type="submit" class="btn blue darken-2">Kirim</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="blue darken-2 white-text center">
      <p class="flow-text">PT SUCOFINDO, Copyright 2022.</p>
    </footer>

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      const galleryImage = document.querySelectorAll("portfolio.img");

      galleryImage.forEach((img, i) => {
        img.dataset.aos = "";
      });

      AOS.init({
        once: true,
        duration: 400,
      });
    </script>

    <script>
      const sidenav = document.querySelectorAll(".sidenav");
      M.Sidenav.init(sidenav);

      const slider = document.querySelectorAll(".slider");
      M.Slider.init(slider, {
        indicators: false,
        height: 666,
        transition: 600,
        interval: 3000,
      });

      const parallax = document.querySelectorAll(".parallax");
      M.Parallax.init(parallax);

      const materialbox = document.querySelectorAll(".materialboxed");
      M.Materialbox.init(materialbox);

      const scroll = document.querySelectorAll(".scrollspy");
      M.ScrollSpy.init(scroll, {
        scrollOffset: 50,
      });

      document.addEventListener("DOMContentLoaded", function () {
        var drop = document.querySelectorAll(".dropdown-trigger");
        M.Dropdown.init(drop);
      });
    </script>
  </body>
</html>
<?php /**PATH C:\xampp\htdocs\landing_page_tkdn\resources\views/auth/landing.blade.php ENDPATH**/ ?>