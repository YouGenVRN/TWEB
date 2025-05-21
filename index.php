<!DOCTYPE html>
<html lang="ro">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Acasă | VRN Production</title>
  <link rel="stylesheet" href="assets/css/style.css" />
  <link rel="stylesheet" href="assets/css/langSelector.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css">
  <script src="assets/js/index.js"></script>
  <script src="assets/js/lang.js" defer></script>
  <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
</head>

<script>
  document.addEventListener('DOMContentLoaded', () => {
    new Splide('#reels-carousel', {
      type      : 'loop',
      perPage   : 4,
      gap       : '1rem',
      autoplay  : false,
      pagination: false,
      arrows    : true,
      breakpoints: {
        1024: { perPage: 2 },
        640 : { perPage: 1 }
      }
    }).mount();
  });
</script>

<body>
  <header>
    <div class="logo" id="logo"><img src="assets/images/VRNWEB.png" alt="LOGO"></div>
    <nav>
      <a href="index.php" class="active" data-i18n="nav_home">Acasă</a>
      <a href="backstage.php" data-i18n="nav_backstage">Backstage</a>
      <a href="contact.php" data-i18n="nav_contact">Contacte</a>
      <select id="langSwitcher">
        <option value="ro">RO</option>
        <option value="ru">RU</option>
        <option value="en">EN</option>
      </select>
    </nav>
  </header>

  <main>
    <h1 data-i18n="section_reclama">Reclama</h1>
    <div class="gallery">
      <div class="promo-box">
      <img src="assets/images/Business-Conference.png" alt="img1">
      </div>
      <div class="promo-box">
      <img src="assets/images/Device.png" alt="img2">
      </div>
      <div class="promo-box">
      <img src="assets/images/LC-WAIKIKI.png" alt="img3">
      </div>
      <div class="promo-box">
      <img src="assets/images/MirrOil-story.png" alt="img4">
      </div>
      <div class="promo-box">
      <img src="assets/images/Pomegranate-cafe.png" alt="img5">
      </div>
    </div>

<section id="reels">
  <h2 data-i18n="section_reels">Reels</h2>

  <div class="splide" id="reels-carousel">
    <div class="splide__track">
      <ul class="splide__list">
        <li class="splide__slide reel-box" data-link="https://youtube.com/shorts/KEJEQ05TC3s">
          <img src="assets/images/Inga-Reels-1.png" alt="Reel 1">
          <div class="overlay"></div>
        </li>
        <li class="splide__slide reel-box" data-link="https://youtube.com/shorts/cATWEIe5-zU">
          <img src="assets/images/Inga-Reels-2.png" alt="Reel 2">
          <div class="overlay"></div>
        </li>
        <li class="splide__slide reel-box" data-link="https://youtube.com/shorts/OcsCOAeAx_I">
          <img src="assets/images/soska.png" alt="Reel 6">
          <div class="overlay"></div>
        </li>
        <li class="splide__slide reel-box" data-link="https://youtube.com/shorts/olDV3jVt-Nc">
          <img src="assets/images/soska1.png" alt="Reel 7">
          <div class="overlay"></div>
        </li>
        <li class="splide__slide reel-box" data-link="https://youtube.com/shorts/2I7XJJxHfrU">
          <img src="assets/images/soska2.png" alt="Reel 8">
          <div class="overlay"></div>
        </li>
        <li class="splide__slide reel-box" data-link="https://youtube.com/shorts/BCXgnzKx_MU">
          <img src="assets/images/6-lucruri.png" alt="Reel 3">
          <div class="overlay"></div>
        </li>
        <li class="splide__slide reel-box" data-link="https://youtube.com/shorts/g8-0LYkfpTs">
          <img src="assets/images/Cristina-reels-1parte.png" alt="Reel 4">
          <div class="overlay"></div>
        </li>
        <li class="splide__slide reel-box" data-link="https://youtube.com/shorts/bSWPamzWpMo">
          <img src="assets/images/Cristina-reels-partea2.png" alt="Reel 5">
          <div class="overlay"></div>
        </li>

      </ul>
    </div>
  </div>
</section>

<section id="interviuri">
  <h2 data-i18n="section_interviews">Interviuri & Podcasturi</h2>
  <div class="interview-grid">
    <div class="interview-box" data-link="https://www.youtube.com/watch?v=WmFxboLJat8&t=27s">
      <img src="assets/images/interviu1.png" alt="Interviu 1">
      <div class="overlay"></div>
    </div>
    <div class="interview-box" data-link="https://www.youtube.com/watch?v=kCRFASdE0S8&t=1167s">
      <img src="assets/images/podcast1.png" alt="Interviu 2">
      <div class="overlay"></div>
    </div>
    <div class="interview-box" data-link="https://www.youtube.com/watch?v=bhlchwk0eKw&t=1724s">
      <img src="assets/images/podcast2.png" alt="Interviu 3">
      <div class="overlay"></div>
    </div>
    <div class="interview-box" data-link="https://www.youtube.com/watch?v=SRdjtgxuCyw&t=5s">
      <img src="assets/images/interviu2.png" alt="Interviu 4">
      <div class="overlay"></div>
    </div>
  </div>
</section>
  </main>
</body>
<footer class="footer">
  <div class="footer-content">
    <p><strong>Email:</strong> <a href="mailto:vrnproduct@gmail.com">vrnproduct@gmail.com</a></p>
    <p><strong>Telefon:</strong> <a href="tel:060707919">060707919</a></p>
    <div class="footer-socials">
      <a href="https://www.youtube.com/@VRNProductionStudio" target="_blank">YouTube</a>
      <span> | </span>
      <a href="https://www.instagram.com/vrnproduction?igsh=MTY3MmluenBmdjRlYg%3D%3D&utm_source=qr" target="_blank">Instagram</a>
    </div>
  </div>
</footer>
</html>
