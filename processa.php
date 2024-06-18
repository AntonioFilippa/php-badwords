<?php
// processa.php

// Controlla se i dati sono stati inviati tramite POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Prende i dati inviati dal form
    $paragrafo = $_POST['paragrafo'];
    $parolaDaCensurare = $_POST['parolaDaCensurare'];

    // Sostituisce tutte le occorrenze della parola da censurare con "***"
    $paragrafoCensurato = str_ireplace($parolaDaCensurare, '***', $paragrafo);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Risultati Censura</title>
    <link rel="stylesheet" href="path/to/your/css/style.css"> <!-- Optional: Link to your CSS file -->
</head>
<body>
    <div class="container">
        <h2>Risultati Censura</h2>
        <p><strong>Paragrafo originale:</strong> <?php echo htmlspecialchars($paragrafo); ?></p>
        <p><strong>Lunghezza paragrafo:</strong> <?php echo strlen($paragrafo); ?> caratteri</p>
        <p><strong>Paragrafo censurato:</strong> <?php echo htmlspecialchars($paragrafoCensurato); ?></p>
        <p><strong>Lunghezza paragrafo censurato:</strong> <?php echo strlen($paragrafoCensurato); ?> caratteri</p>
    </div>
</body>
</html>
<?php
} else {
    // Se il form non è stato inviato tramite POST, reindirizza all'index.html
    header("Location: index.php");
    exit;
}
?>
