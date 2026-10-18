<?php
// require stoppar sidan helt om data.php saknas (include hade bara gett en varning).
// Utan lagen finns inget att visa, så då är det bättre att sidan stannar.
require 'data.php';

$pageTitle = 'Teams';

include 'header.php';
?>
<h2>Round of 16</h2>

<?php
// foreach går igenom alla lag, ett i taget:
// $name = nyckeln (lagets namn), $team = lagets egna array med league, city osv.
// urlencode gör om mellanslag, ø och ç så att de fungerar i en länk.
// htmlspecialchars gör att specialtecken i texten inte kan förstöra HTML:en.
// logo_uefa används eftersom 'logo' från klubbarnas egna sidor ofta slutar fungera.
?>
<ul class="teams">
    <?php foreach ($teams as $name => $team): ?>
        <li class="team">
            <a href="team.php?team=<?= urlencode($name) ?>">
                <img src="<?= htmlspecialchars($team['logo_uefa']) ?>" alt="<?= htmlspecialchars($name) ?> logo" width="80" height="80">
                <h3><?= htmlspecialchars($name) ?></h3>
            </a>
            <p><?= htmlspecialchars($team['league']) ?></p>
            <p><?= htmlspecialchars($team['city']) ?></p>
        </li>
    <?php endforeach; ?>
</ul>
<?php include 'footer.php'; ?>
