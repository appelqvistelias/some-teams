<?php

require_once __DIR__ . "/header.php";

require_once __DIR__ . "/data.php"; ?>

<div class="main-container">

    <div class="text-container">
        <p>In this section you will find information about the different teams. If you would like to visit a teams website simply click their team name.</p>
    </div>
    <div class="team-info-cards-container">
        <?php foreach ($teams as $teamName => $team) { ?>
            <article class="team-info-card">
                <a href="<?= $team['url'] ?>" target=_blank>
                    <h2><?= $teamName; ?></h2>
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

</div>

<?php require_once __DIR__ . "/footer.php";
