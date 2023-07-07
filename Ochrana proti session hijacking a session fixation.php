<?php
// Přiřazení nové session ID při přihlášení uživatele
session_regenerate_id(true);

// Kontrola, zda se session ID mění s každým přihlášením nebo na každé stránce
if (!isset($_SESSION['regenerated'])) {
  session_regenerate_id(true);
  $_SESSION['regenerated'] = true;
}
?>