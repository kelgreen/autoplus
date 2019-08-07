<?php
require_once 'db/data.php';
?>

<div id="wrapper">
    <nav class="side-menu">
        <ul>
            <?php foreach ($category as $id => $item) { ?>
                <li class="darkerlishadow">
                    <a href="catalogue.php?ART_CAT=<?= $id ?>">
                        <img src="images/<?= $item[CAT_IMG2] ?>" alt="categorie">

                    <span class="nav-text"><?= $item[CAT_NAME] ?></span>
                    </a>
                </li>
            <?php } ?>
        </ul>
    </nav>
</div>
