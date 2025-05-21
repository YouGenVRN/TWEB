document.addEventListener('DOMContentLoaded', () => {
  const select = document.getElementById('langSwitcher');
  const lang = localStorage.getItem('lang') || 'ro';
  select.value = lang;
  loadLang(lang);

  select.addEventListener('change', () => {
    const newLang = select.value;
    loadLang(newLang);
    localStorage.setItem('lang', newLang);
  });
});

function loadLang(lang) {
  fetch(`lang/${lang}.json`)
    .then(res => res.json())
    .then(data => {
      document.querySelectorAll('[data-i18n]').forEach(el => {
        const key = el.getAttribute('data-i18n');
        if (data[key]) el.textContent = data[key];
      });
    })
    .catch(console.error);
}