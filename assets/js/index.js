document.addEventListener("DOMContentLoaded", function () {
  const logo = document.getElementById("logo");

  if (logo) {
    logo.addEventListener("mouseenter", function () {
      logo.querySelector("img").style.transform = "scale(1.03)";
    });

    logo.addEventListener("mouseleave", function () {
      logo.querySelector("img").style.transform = "scale(1)";
    });

    logo.addEventListener("click", function () {
      window.location.href = "index.php";
    });
  }
});

document.addEventListener("DOMContentLoaded", function () {
  document.querySelectorAll('.promo-box').forEach(box => {
    const img = box.querySelector('img');

    box.addEventListener('mouseenter', () => {
      img.style.transform = 'scale(1.1)';
      img.style.filter = 'blur(5px) brightness(0.9)';
      box.style.cursor = 'pointer';
    });

    box.addEventListener('mouseleave', () => {
      img.style.transform = 'scale(1)';
      img.style.filter = 'none';
    });

    box.addEventListener('click', () => {
      const link = box.getAttribute('data-link');
      if (link) {
        window.open(link, '_blank');
      }
    });
  });
});

document.addEventListener("DOMContentLoaded", function () {
  const reels = document.querySelectorAll('.reel-box');

  reels.forEach(box => {
    const img = box.querySelector('img');
    const overlay = box.querySelector('.overlay');

    box.addEventListener('mouseenter', () => {
      img.style.transform = 'scale(1.08)';
      img.style.filter = 'brightness(0.9)';
      overlay.style.opacity = '1';
    });

    box.addEventListener('mouseleave', () => {
      img.style.transform = 'scale(1)';
      img.style.filter = 'none';
      overlay.style.opacity = '0';
    });

    box.addEventListener('click', () => {
      const link = box.getAttribute('data-link');
      if (link) {
        window.open(link, '_blank');
      }
    });
  });
});

document.addEventListener("DOMContentLoaded", function () {
  const allHoverBoxes = document.querySelectorAll('.reel-box, .interview-box');

  allHoverBoxes.forEach(box => {
    const img = box.querySelector('img');
    const overlay = box.querySelector('.overlay');

    box.addEventListener('mouseenter', () => {
      img.style.transform = 'scale(1.08)';
      img.style.filter = 'brightness(0.9)';
      overlay.style.opacity = '1';
    });

    box.addEventListener('mouseleave', () => {
      img.style.transform = 'scale(1)';
      img.style.filter = 'none';
      overlay.style.opacity = '0';
    });

    box.addEventListener('click', () => {
      const link = box.getAttribute('data-link');
      if (link) {
        window.open(link, '_blank');
      }
    });
  });
});
