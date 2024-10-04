<?php

require_once __DIR__ . "/header.php";

require_once __DIR__ . "/data.php"; ?>

<div class="text-info-box">
    <h2>The Teams</h2>
    <p>Information about womens league football teams. Click the team names to visit official website.</p>
</div>

<div class="team-info-cards-grid">
    <?php foreach ($teams as $teamName => $team) { ?>
        <article class="team-info-card">
            <a href="<?= $team['url'] ?>" target=_blank>
                <h2 class="team-name-h2"><?= $teamName; ?></h2>
            </a>
            <img src="<?= $team['logo'] ?>" height="80px" width="80px">
            <ul>
                <li>
                    <strong><?= "League: " ?></strong><?= stripslashes($team['league']); ?>
                </li>
                <li>
                    <strong><?= "UEFA Ranking: " ?></strong><?= $team['uefa-coefficient-ranking']; ?>
                </li>
                <li>
                    <strong><?= "City: " ?></strong><?= $team['city']; ?>
                </li>
                <li>
                    <strong><?= "Group: " ?></strong><?= $team['group']; ?>
                </li>
            </ul>
        </article>
    <?php } ?>
</div>

<?php require_once __DIR__ . "/footer.php";
