<!DOCTYPE html>
<html lang="ro">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Contacte | VRN Production</title>
  <link rel="stylesheet" href="assets/css/contact.css" />
  <script src="assets/js/contact.js"></script>
  <script src="assets/js/lang.js" defer></script>
</head>
<body>
  <header>
    <div class="logo" id="logo">
      <img src="assets/images/VRNWEB.png" alt="img1">
    </div>
    <nav>
      <a href="index.php">Acasă</a>
      <a href="backstage.php">Backstage</a>
      <a href="contact.php" class="active">Contacte</a>
    </nav>
  </header>

  <main>
    <h1>Lăsați o cerere</h1>
    <form class="contact-form" action="procesare_contact.php" method="POST">
      <div class="form-group">
        <label for="nume">Nume</label>
        <input type="text" id="nume" name="nume" required>
      </div>
      <div class="form-group">
        <label for="prenume">Prenume</label>
        <input type="text" id="prenume" name="prenume" required>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="telefon">Număr de telefon</label>
        <input type="tel" id="telefon" name="telefon" required>
      </div>
      <div class="form-group">
        <label for="descriere">Mesaj</label>
        <textarea id="descriere" name="descriere" rows="6" maxlength="1500" required></textarea>
        <small id="charCount">0 / 1500 caractere</small>
      </div>
      <button type="submit">Trimite</button>
      <?php if (isset($_GET['status']) && $_GET['status'] === 'ok'): ?>
        <p class="success">Mesajul a fost trimis cu succes. Mulțumim!</p>
      <?php endif; ?>
    </form>
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
