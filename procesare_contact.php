<?php
/* 1. Conectare la baza de date */
$host   = '127.0.0.1';
$dbname = 'site';
$user   = 'root';
$pass   = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $user, $pass, [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);
} catch (PDOException $e) {
    die("Conexiunea a eșuat: " . $e->getMessage());
}

/* 2. Preia și validează datele din POST */
$nume      = trim($_POST['nume'] ?? '');
$prenume   = trim($_POST['prenume'] ?? '');
$email     = trim($_POST['email'] ?? '');
$telefon   = trim($_POST['telefon'] ?? '');
$descriere = trim($_POST['descriere'] ?? '');

if (!$nume || !$prenume || !filter_var($email, FILTER_VALIDATE_EMAIL) || !$telefon || !$descriere) {
    die("Date invalide – verifică formularul.");
}

/* 3. Inserează în tabel folosind query pregătit */
$stmt = $pdo->prepare("
    INSERT INTO contacte (nume, prenume, email, telefon, descriere)
    VALUES (:nume, :prenume, :email, :telefon, :descriere)
");

$stmt->execute([
    ':nume'      => $nume,
    ':prenume'   => $prenume,
    ':email'     => $email,
    ':telefon'   => $telefon,
    ':descriere' => $descriere,
]);

/* 4. Redirecționare / mesaj de succes */
header("Location: contact.php?status=ok");
exit;
?>
