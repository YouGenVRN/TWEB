document.addEventListener("DOMContentLoaded", function () {
  const logo = document.getElementById("logo");
  if (!logo) return;

  const img = logo.querySelector("img");
  logo.addEventListener("mouseenter", function () {
    img.style.transform = "scale(1.03)";
  });
  logo.addEventListener("mouseleave", function () {
    img.style.transform = "scale(1)";
  });
  logo.addEventListener("click", function () {
  window.location.href = "index.php";
  })
});