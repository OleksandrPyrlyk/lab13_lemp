<?php
$host = 'mysql';
$dbName = 'lab13db';
$dbUser = 'lab13user';
$dbPass = 'user123';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbName;charset=utf8mb4", $dbUser, $dbPass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->query("SELECT message FROM test_messages LIMIT 1");
    $message = $stmt->fetchColumn();
} catch (Exception $e) {
    $message = "Błąd połączenia z bazą danych: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Lab 13 LEMP</title>
</head>
<body>
    <h1>PAwChO Lab 13 - LEMP działa poprawnie</h1>
    <p>Nginx + PHP-FPM + MySQL + phpMyAdmin</p>

    <h2>Test bazy danych:</h2>
    <p><?php echo htmlspecialchars($message); ?></p>
</body>
</html>