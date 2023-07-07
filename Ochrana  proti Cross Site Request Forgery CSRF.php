<?php
session_start();

// Generování a ukládání CSRF tokenu při odeslání formuláře
$token = bin2hex(random_bytes(32));
$_SESSION['csrf_token'] = $token;

// Ověření CSRF tokenu při zpracování požadavku
if ($_SERVER['REQUEST_METHOD'] === 'POST' && hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])) {
  // Požadavek je považován za platný
}
?>