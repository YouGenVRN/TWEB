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