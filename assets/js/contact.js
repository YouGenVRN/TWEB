document.addEventListener("DOMContentLoaded", function () {
  const descriere = document.getElementById("descriere");
  const charCount = document.getElementById("charCount");

  if (descriere && charCount) {
    descriere.addEventListener("input", () => {
      const lungime = descriere.value.length;
      charCount.textContent = `${lungime} / 1500 caractere`;

      if (lungime > 1500) {
        charCount.style.color = "red";
      } else {
        charCount.style.color = "#666";
      }
    });
  }
});

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
  window.location.href = "index.html";
  })
});