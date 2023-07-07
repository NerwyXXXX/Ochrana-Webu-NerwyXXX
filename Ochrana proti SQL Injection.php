<?php
// Použití připravených výroků (prepared statements) pro dotazování na databázi
$stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

// Příklad použití ORM (Object-Relational Mapping)
$user = User::where('username', $username)->first();
?>