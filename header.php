
<?php
// Varje sida sätter $pageTitle före include 'header.php'.
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= htmlspecialchars($pageTitle ?? 'Some teams') ?> | Some teams</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>UEFA Women's Europa Cup 2026/27</h1>
        <nav>
            <a href="index.php">Teams</a>
            <a href="about.php">About</a>
        </nav>
    </header>
    <main>
