<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/style.index.css')}}" />
    <!-- Fonts google poppins-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <title>HOME</title>
  </head>
  <body>
    <header class="beranda" id="beranda">
      <!-- NAVIGATION BAR-->
      <section class="navigation fixed-top" id="home">
        <div class="container">
          <div class="box-navigation animate__animated animate__bounce animate__fadeInDown">
            <div class="animate__animated animate__lightSpeedInRight animate__zoomIn">
              <img src="img/logo-kpu.png" width="65px">
            </div>
            <div class="box menu-navigation">
              <ul>
                <li class="btn btn-danger">
                  <i class="ri-login-box-fill"></i>
                  <a href="/login">Login</a>
                </li>
                <li class="btn">
                  <i class="ri-home-8-fill"></i>
                  <a href="#beranda">Home</a>
                </li>
                <li class="btn">
                  <i class="ri-information-fill"></i>
                  <a href="#about">About</a>
                </li>
                <li class="btn">
                  <i class="ri-bookmark-fill"></i>
                  <a href="#famous">Famous</a>
                </li>
                <li class="btn">
                  <i class="ri-gallery-fill"></i>
                  <a href="#gallery">Gallery</a>
                </li>
                <!--<li class="btn btn-outline-transparant">
                  <i class="ri-contacts-line"></i>
                  <a href="#contact">Contact</a>
                </li> -->
              </ul>
            </div>
            <div class="box menu-bar">
              <i class="ri-menu-fill" style="color: rgb(255, 255, 255)"></i>
            </div>
          </div>
        </div>
      </section>
      <!-- NAVIGATION BAR-->

      <!-- Hero -->
      <section class="hero" id="hero">
          <div class="animate__animated animate__jackInTheBox">
          <h1 >KOMISI PEMILIHAN UMUM REPUBLIK INDONESIA</h1>
          </div>
      </section>
      <!-- Hero -->
    </header>

    <!-- about -->
    <section class="about" id="about">
      <div class="container">
        <div class="box-about">
          <div class="box" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="150">
            <h1>Mountainer</h1>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit debitis dolor ratione adipisci eius consequatur magni, eaque culpa dolorum recusandae voluptates dolorem dolore similique tempora alias consectetur nulla facere
              repellendus?
            </p>
          </div>
          <div class="box" data-aos="fade-left" data-aos-duration="1800" data-aos-delay="200">
            <img src="/img/1.jpg" alt="" />
          </div>
        </div>
      </div>
    </section>
    <!-- about -->

    <!--Famous-->
    <section class="famous" id="famous">
      <div class="container">
        <div class="box">
          <div class="box-famous">
            <div class="box" data-aos="fade-up">
              <img src="/img/everest-famous.jpg" alt="" />
              <h1>Everest Mountain</h1>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam, nisi. Dolores repellat iusto voluptates consectetur dolore laborum commodi dolorum sit nisi ex nostrum itaque animi, pariatur vero tempora nam maxime.</p>
            </div>
            <div class="box" data-aos="fade-up">
              <img src="/img/fuji-famous.jpg" alt="" />
              <h1>Fuji Mountain</h1>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam, nisi. Dolores repellat iusto voluptates consectetur dolore laborum commodi dolorum sit nisi ex nostrum itaque animi, pariatur vero tempora nam maxime.</p>
            </div>
            <div class="box" data-aos="fade-up">
              <img src="/img/k2-famous.jpg" alt="" />
              <h1>K2 Mountain</h1>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam, nisi. Dolores repellat iusto voluptates consectetur dolore laborum commodi dolorum sit nisi ex nostrum itaque animi, pariatur vero tempora nam maxime.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--Famous-->

    <!-- gallery -->
    <section class="gallery" id="gallery">
      <div class="container">
        <div class="box-gallery">
          <img src="/img/1.jpg" alt="" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="100" />
          <img src="/img/2.jpg" alt="" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300" />
          <img src="/img/3.jpg" alt="" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="500" />
          <img src="/img/4.jpg" alt="" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="700" />
          <img src="/img/5.jpg" alt="" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="900" />
          <img src="/img/6.jpg" alt="" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="1100" />
        </div>
      </div>
    </section>
    <!-- gallery -->

    <!-- contact
    <section class="contact" id="contact">
      <div class="container">
        <div class="box-contact">
          <h1>Contact</h1>
          <form action="">
            <table>
              <tr>
                <td><label for="nama">Nama</label></td>
                <td><input type="text" id="nama" name="nama" placeholder="Masukan Nama" autocomplete="off" /></td>
              </tr>
              <tr>
                <td><label for="email">Email</label></td>
                <td><input type="email" id="email" name="email" placeholder="Masukan Email" autocomplete="off" /></td>
              </tr>
              <tr>
                <td><label for="pesan">Pesan</label></td>
                <td><textarea name="pesan" id="pesan" placeholder="Masukan Pesan....." autocomplete="off"></textarea></td>
              </tr>
            </table>
          </form>
        </div>
      </div>
    </section>
    contact -->

    <!-- footer -->
    <footer>
      <p>&copy; 2024 PRABOWO MALAS MALAS MALAS</p>
    </footer>
    <!-- footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>    <script src="js/scipt.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="./js/script.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>
