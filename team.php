<?php
// require stoppar sidan helt om data.php saknas, eftersom det inte finns något att visa utan lagen.
require 'data.php';

$name = $_GET['team'] ?? '';

// isset kollar att laget finns i $teams innan vi använder det,
// så att ett felaktigt namn i adressen inte ger någon varning.
// is_string behövs eftersom ?team[]=x gör $name till en array, vilket annars kraschar isset.
if (is_string($name) && isset($teams[$name])) {
    $team = $teams[$name];
    $pageTitle = $name;
} else {
    $team = null;
    $pageTitle = 'Team not found';
}

include 'header.php';
?>

<?php if ($team !== null): ?>
    <img src="<?= htmlspecialchars($team['logo_uefa']) ?>" alt="<?= htmlspecialchars($name) ?> logo" width="160" height="160">
    <h2><?= htmlspecialchars($name) ?></h2>
    <!-- ÄNDRA HÄR: vilka uppgifter om laget som visas -->
    <ul>
        <li>League: <?= htmlspecialchars($team['league']) ?></li>
        <li>City: <?= htmlspecialchars($team['city']) ?></li>
        <li>League position: <?= htmlspecialchars($team['league-position'] ?? 'Unknown') ?></li>
        <li>UEFA coefficient ranking: <?= htmlspecialchars($team['uefa-coefficient-ranking']) ?></li>
        <li>Website: <a href="<?= htmlspecialchars($team['url']) ?>"><?= htmlspecialchars($team['url']) ?></a></li>
    </ul>
<?php else: ?>
    <h2>Team not found</h2>
    <p>Sorry, we could not find that team.</p>
<?php endif; ?>
<p><a href="index.php">← Back to all teams</a></p>
<?php include 'footer.php'; ?>
