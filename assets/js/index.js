document.addEventListener("DOMContentLoaded", function () {
  const images = document.querySelectorAll("img");

  images.forEach(img => {
    img.addEventListener("mouseenter", () => {
      img.style.filter = "brightness(80%)";
    });

    img.addEventListener("mouseleave", () => {
      img.style.filter = "brightness(100%)";
    });
  });
});
