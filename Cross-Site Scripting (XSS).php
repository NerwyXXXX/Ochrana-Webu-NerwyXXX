<?php
function sanitizeInput($input) {
  return htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
}

// Příklad použití:
$username = sanitizeInput($_POST['username']);
?>