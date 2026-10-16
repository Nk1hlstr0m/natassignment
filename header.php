
<?php
// Den här filen delas av alla sidor, så att menyn och layouten bara finns på ett ställe.
// Varje sida sätter $pageTitle före include 'header.php'.
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- ?? används så att sidan inte ger felmeddelande om $pageTitle saknas -->
    <title><?= htmlspecialchars($pageTitle ?? 'Some teams') ?> | Some teams</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <!-- ÄNDRA HÄR: sidans namn -->
        <h1>UEFA Women's Europa Cup 2026/27</h1>
        <nav>
            <a href="index.php">Teams</a>
            <a href="about.php">About</a>
            <!-- ÄNDRA HÄR: lägg till nya länkar i menyn här -->
        </nav>
    </header>
    <main>
