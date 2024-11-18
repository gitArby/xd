<?php
// Získání hodnoty z různých metod

// 1. Získání hodnoty z URL parametru (GET metoda)
if (isset($_GET['number'])) {
    $receivedNumber = $_GET['number'];
}

// 2. Získání hodnoty z POST metody
elseif (isset($_POST['number'])) {
    $receivedNumber = $_POST['number'];
}

// 3. Získání hodnoty z cookies
elseif (isset($_COOKIE['randomNumber'])) {
    $receivedNumber = $_COOKIE['randomNumber'];
}

// 4. Získání hodnoty z session
elseif (isset($_SESSION['randomNumber'])) {
    $receivedNumber = $_SESSION['randomNumber'];
}

// Zobrazení přijaté hodnoty
if (isset($receivedNumber)) {
    echo "<h2>Přijaté číslo: $receivedNumber</h2>";
} else {
    echo "<h2>Číslo nebylo přijato.</h2>";
}
?>
