<?php
// Ukládání hesel ve formě hashe s použitím algoritmu bcrypt
$password = password_hash($plaintextPassword, PASSWORD_BCRYPT);

// Ověření hesla
if (password_verify($inputPassword, $storedHashedPassword)) {
  // Heslo je správné
}

// Přístup k chráněným stránkám nebo akcím pouze pro přihlášené uživatele
if (!isset($_SESSION['user_id'])) {
  // Uživatel není přihlášen, přesměrování na přihlašovací stránku nebo zobrazení chyby
}
?>