<?php
// processa.php

// Controlla se i dati sono stati inviati tramite POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Prende i dati inviati dal form
    $paragrafo = $_POST['paragrafo'];
    $parolaDaCensurare = $_POST['parolaDaCensurare'];

    // Stampa il paragrafo originale e la sua lunghezza
    echo "<p>Paragrafo originale: " . htmlspecialchars($paragrafo) . "</p>";
    echo "<p>Lunghezza paragrafo: " . strlen($paragrafo) . " caratteri</p>";

    // Sostituisce tutte le occorrenze della parola da censurare con "***"
    $paragrafoCensurato = str_replace($parolaDaCensurare, '***', $paragrafo);

    // Stampa il paragrafo censurato e la sua lunghezza
    echo "<p>Paragrafo censurato: " . htmlspecialchars($paragrafoCensurato) . "</p>";
    echo "<p>Lunghezza paragrafo censurato: " . strlen($paragrafoCensurato) . " caratteri</p>";
} else {
    // Se il form non è stato inviato tramite POST, reindirizza all'index.html
    header("Location: index.html");
    exit;
}
?>